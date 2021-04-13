<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/login_header');
		$this->load->view('auth/login_view');
		$this->load->view('templates/login_footer');
	}

	public function registration()
	{
		$this->load->view('templates/login_header');
		$this->load->view('auth/registration_view');
		$this->load->view('templates/login_footer');
	}
}
