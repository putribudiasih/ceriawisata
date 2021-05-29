<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ceriawisata_model');
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Daftar Pesanan';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['data_pesanan'] =  $this->Ceriawisata_model->getDataPesanan();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

	public function role()
	{
		$data['title'] = 'Role';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('templates/footer');
	}

	public function roleAccess($role_id)
	{
		$data['title'] = 'Role Access';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/roleaccess', $data);
		$this->load->view('templates/footer');
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akses diubah!</div>');
	}

	public function paketWisata()
	{
		$data['title'] = 'Paket Wisata Admin';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->db->get_where('tb_trayek')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/paketwisata', $data);
		$this->load->view('templates/footer');
	}

	public function tempatWisata()
	{
		$this->load->model('Ceriawisata_model');
		//	$this->Ceriawisata_model->add_record($data);
		$data['title'] = 'Tempat Wisata';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->Ceriawisata_model->gettempatwisata()->row_array();
		$data['tempat'] = $this->db->get_where('tb_tempat')->row_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/tempatwisata', $data);
		$this->load->view('templates/footer');
	}

	//FORM INPUT TAMBAH PAKET WISATA ADMIN
	public function tambahWisata()
	{
		$data['title'] = 'Tujuan Wisata Baru';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->db->get_where('tb_trayek')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/tambahwisata', $data);
		$this->load->view('templates/footer');
	}

	//INPUT DATA PESANAN PAKET WISATA USER
	public function inputpaketbaru()
	{
		
		$lokasi = $this->input->post('lokasi');
		$kode = $this->input->post('kode');
		$gambar = $this->input->post('gambar');
		$tujuan = $this->input->post('tujuan');

		$data = array(
			'lokasi' => $lokasi,
			'kode' => $kode,
			'gambar' => $gambar,
			'tujuan' => $tujuan
		);

		$this->Ceriawisata_model->input_datapaketbaru($data, 'tb_trayek');
		redirect('admin/paketwisata');
	}


	public function hapusPesanan()
	{
		$where = $this->uri->segment(3);
		$this->Ceriawisata_model->delDataPesanan($where, 'tb_pesanan');
		//redirect ('admin/index/');
	}

	public function detailpesanan()
	{
		$this->load->model('Ceriawisata_model');
		//	$this->Ceriawisata_model->add_record($data);
		$data['title'] = 'Daftar Pesanan';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/detailpesanan', $data);
		$this->load->view('templates/footer');
	}
}
