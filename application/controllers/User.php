<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ceriawisata_model');
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

	public function tempatWisata($id)
	{
		$data['title'] = 'Paket Wisata';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->Ceriawisata_model->gettempatwisata($id);
		$data['tempat'] = $this->Ceriawisata_model->getTempat($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/tempatwisata', $data);
		$this->load->view('templates/footer');
	}

	//FORM INPUT PESANAN PAKET WISATA USER
	public function pesanan()
	{
		$data['title'] = 'Pemesanan Paket';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->db->get_where('tb_trayek')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formpesanan', $data);
		$this->load->view('templates/footer');
	}

	//INPUT DATA PESANAN PAKET WISATA USER
	public function inputpesanan()
	{

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
			'catatan' => $catatan
		);

		// $data['datalokasi'] = $this->Ceriawisata_model->getdatapesanan();
		$this->Ceriawisata_model->input_datapesanan($data, 'tb_pesanan');
		redirect('user/index');

		$this->form_validation->set_rules(
			'nama',
			'nama',
			'required',
			['required' => '%s harap diisi']
		);
		$this->form_validation->set_rules(
			'Email',
			'Email',
			'required',
			['required' => '%s harap dipilih']
		);
	}

	public function jadwal()
	{
		$data['title'] = 'Jadwal Kegiatan';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->db->get_where('tb_trayek')->result_array();
		$data['data_pesanan'] =  $this->Ceriawisata_model->getDataPesanan();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/jadwal', $data);
		$this->load->view('templates/footer');
	}

	public function detailJadwal($id)
	{
		$data['title'] = 'Jadwal Kegiatan';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->db->get_where('tb_trayek')->result_array();
		$data['data_jadwal'] = $this->Ceriawisata_model->data_jadwal($id);
		$data['detail_pesanan'] = $this->Ceriawisata_model->detailPesanan($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/detailjadwal', $data);
		$this->load->view('templates/footer');
	}

	public function hapusJadwal($id)
	{
		$where = array('id_jadwal' => $id);
		$result = $this->Ceriawisata_model->hapusJadwal($where, 'tb_jadwal');
		redirect('user/jadwal');
	}
}
