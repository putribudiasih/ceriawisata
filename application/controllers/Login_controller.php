<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Ceria Wisata Login';
			$this->load->view('templates/login_header', $data);
			$this->load->view('auth/login_view');
			$this->load->view('templates/login_footer');
		} else {
			//validasi sukses
			$this->_login();
		}
	}


	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		//jika user ada
		if ($user) {
			//jika user aktif
			if ($user['is_active'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'id_user' => $user['id_user'],
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('Admin');
					} else {
						redirect('user');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password!</div>');
					redirect('Login_controller');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email belum teraktivasi</div>');
				redirect('Login_controller');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered</div>');
			redirect('Login_controller');
		}
	}


	public function registration()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
			'is_unique' => 'Email has already use!'
		]);
		$this->form_validation->set_rules('notelp', 'Notelp', 'required|trim');
		//$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
			'matches' => 'Password do not match!',
			'min_length' => 'Password must be 6 characters!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


		if ($this->form_validation->run() == false) {
			$data['title'] = 'Ceria Wisata Registration';
			$this->load->view('templates/login_header', $data);
			$this->load->view('auth/registration_view');
			$this->load->view('templates/login_footer');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($email),
				'no_telp' => $this->input->post('notelp'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 0,
				'date_created' => time()
			];

			//siapkan token
			$token = base64_encode(bin2hex(openssl_random_pseudo_bytes(32)));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			$this->db->insert('tb_user', $data);
			$this->db->insert('user_token', $user_token);

			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data added! Please Activate Your Account</div>');
			redirect('Login_controller');
		}
	}


	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'sidangmif@gmail.com',
			'smtp_pass' => '5idangmif18',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('sidangmif@gmail.com', 'Ceria Wisata');
		$this->email->to($this->input->post('email'));


		if ($type == 'verify') {
			$this->email->subject('Verifikasi Akun');
			$this->email->message('Klik link berikut untuk memverifikasi akun Anda : <a href="'. base_url() . 'Login_controller/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
		}
		

		if($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}


	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if($user_token){
				if(time() - $user_token['date_created'] < (60*60*24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('tb_user');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'. $email .' has been activated! Please login.</div>');
					redirect('Login_controller');

				} else {

					$this->db->delete('tb_user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Account activation failed! Token expired.</div>');
					redirect('Login_controller');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Account activation failed! Token invalid.</div>');
				redirect('Login_controller');
			}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Account activation failed! Wrong email.</div>');
			redirect('Login_controller');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logged out!</div>');
		redirect('Login_controller');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
}
