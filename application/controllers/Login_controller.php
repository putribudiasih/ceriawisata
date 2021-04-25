<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		if($this->form_validation->run() == false) {
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
		if($user) {
			//jika user aktif
			if($user['is_active'] == 1) {
				//cek password
				if(password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					redirect('user');
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


		if($this->form_validation->run() == false) {
			$data['title'] = 'Ceria Wisata Registration';
			$this->load->view('templates/login_header', $data);
			$this->load->view('auth/registration_view');
			$this->load->view('templates/login_footer');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'no_telp' => $this->input->post('notelp'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('tb_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data added! Please Login</div>');
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

}
