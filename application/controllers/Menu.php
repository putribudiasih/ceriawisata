<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'Menu Manajemen';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get_where('user_menu')->result_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if($this->form_validation->run() == false ){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('templates/footer');
		} else {
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu baru telah ditambahkan!</div>');
					redirect('menu');
		}
	}

	public function submenu()
	{
		$data['title'] = 'Submenu Manajemen';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/submenu', $data);
		$this->load->view('templates/footer');
	}

}