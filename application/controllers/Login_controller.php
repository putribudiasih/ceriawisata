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
		$data['title'] = 'Ceria Wisata Login';
		$this->load->view('templates/login_header', $data);
		$this->load->view('auth/login_view');
		$this->load->view('templates/login_footer');
	}

	public function registration()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]');
		$this->form_validation->set_rules('notelp', 'Notelp', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


		if($this->form_validation->run() == false) {
			$data['title'] = 'Ceria Wisata Registration';
			$this->load->view('templates/login_header', $data);
			$this->load->view('auth/registration_view');
			$this->load->view('templates/login_footer');
		} else {
			echo 'data berhasil ditambahkan';
		}
	}
}
