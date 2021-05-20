<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Beranda';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function paketWisata()
	{
		$data['title'] = 'Paket Wisata';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->db->get_where('tb_trayek')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/paketwisata', $data);
		$this->load->view('templates/footer');
	}

	public function tempatWisata()
	{
		$data['title'] = 'Paket Wisata';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->db->get_where('tb_trayek')->result_array();
		$data['tempat'] = $this->db->get_where('tb_tempat')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/tempatwisata', $data);
		$this->load->view('templates/footer');
	}

	public function pesanan()
	{
		$data['title'] = 'Pemesanan Paket';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formpesanan', $data);
		$this->load->view('templates/footer');
	}

	function pesananUser(){
		$this->form_validation->set_rules('nama', 'nama', 'required', 
				array('required' 		=> '%s harus diisi'));
		$this->form_validation->set_rules('email','email', 'required|max_length[20]',
				array('required' 		=> '%s harus diisi'));
					//  'max_length[20]' 	=> '%s tidak boleh lebih dari 20 karakter'));
		$this->form_validation->set_rules('no_telp', 'no_telp', 'required',
				array('required'		=> '%s harus diisi'));
		$this->form_validation->set_rules('lokasi_berangkat', 'lokasi_berangkat', 'required',
				array('required'		=> '%s harus diisi'));
		$this->form_validation->set_rules('jml_pax', 'jml_pax', 'required',
				array('required'		=> '%s harus diisi'));
		$this->form_validation->set_rules('tgl_mulai', 'tgl_mulai', 'required',
				array('required'		=> '%s harus diisi'));
		$this->form_validation->set_rules('tgl_selesai', 'tgl_selesai', 'required',
				array('required'		=> '%s harus diisi'));
		$this->form_validation->set_rules('trayek', 'trayek', 'required',
				array('required'		=> '%s harus diisi'));
		$this->form_validation->set_rules('catatan', 'catatan', 'required',
				array('required'		=> '%s harus diisi'));


		if($this->form_validation->run()==false){
			$this->load->view('user/formpesanan');
			// redirect(base_url('user/formpesanan'));
		}else{
		$nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $lokasi_berangkat = $this->input->post('lokasi_berangkat');
        $jml_pax = $this->input->post('jml_pax');
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $trayek = $this->input->post('trayek');
        $catatan = $this->input->post('catatan');

			$data = array(
			'nama' => $nama,
            'email' => $email,
            'no_telp' => $no_telp,
            'lokasi_berangkat' => $lokasi_berangkat,
            'jml_pax' => $jml_pax,
            'tgl_mulai' => $tgl_mulai,
            'tgl_selesai' => $tgl_selesai,
            'trayek' => $trayek,
            'catatan' => $catatan,
			);
		$this->Ceriawisata_model->input_data($data,'tb_pesanan');
		redirect('user/index');
	}
	}

}