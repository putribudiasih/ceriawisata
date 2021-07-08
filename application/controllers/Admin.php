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

	public function tempatWisata($id)
	{
		// $this->load->model('Ceriawisata_model');
		//	$this->Ceriawisata_model->add_record($data);
		$data['title'] = 'Paket Wisata Admin';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->Ceriawisata_model->gettempatwisata($id);
		$data['tempat'] = $this->Ceriawisata_model->getTempat($id);


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

	public function prosesTambahWisata()
	{

		$nomer = 0;
		$data_destinasi = [];
		$tujuan = $this->input->post('tujuan[]');

		$config['upload_path']          = 'assets/img/';  // folder upload 
		$config['allowed_types']        = 'gif|jpg|png'; // jenis file
		$config['max_size']             = 10000; //ukuran upload maksimal 10mb
		$config['max_width']            = 6000; //gambar ukuran kesamping(horizontal) maksimal 6000px
		$config['max_height']           = 6000; ////gambar ukuran keatas(vertical) maksimal 6000px

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('gambar')) //sesuai dengan name pada form 
		{
			echo $this->upload->display_errors();
		}
		$file = $this->upload->data();
		$image = $file['file_name'];

		$data = array(
			'lokasi' => htmlspecialchars($this->input->post('lokasi')),
			'kode' => htmlspecialchars($this->input->post('kode')),
			'gambar' => $image
		);

		foreach ($tujuan as $key => $value) {
			$data_destinasi[$nomer] = [
				'tujuan' => $_POST['tujuan'][$nomer],
				'kode' => htmlspecialchars($this->input->post('kode'))
			];
			$nomer++;
		}


		$this->db->insert_batch('tb_tempat', $data_destinasi);
		$this->db->insert('tb_trayek', $data);

		redirect('admin/paketwisata');
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


	public function hapusPesanan($id)
	{
		// $news = new 
		$where = array('id_pesanan' => $id);
		$result = $this->Ceriawisata_model->delDataPesanan($where, 'tb_pesanan');
		redirect('admin/index/');
	}

	public function detailpesanan($id)
	{
		$this->load->model('Ceriawisata_model');
		//	$this->Ceriawisata_model->add_record($data);
		$data['title'] = 'Daftar Pesanan';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['detail_pesanan'] = $this->Ceriawisata_model->detailPesanan($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/detailpesanan', $data);
		$this->load->view('templates/footer');
	}

	public function updateStatus()
	{
		$status = $_POST['status'];
		$id_pesanan = $_POST['id_pesanan'];

		$data = array(
			'keterangan' => $status
		);

		$where = array(
			'id_pesanan' => $id_pesanan
		);

		$this->Ceriawisata_model->update_status($where, $data);
	}

	public function tambahJadwal($id)
	{
		$data['title'] = 'Daftar Pesanan';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['tb_trayek'] = $this->db->get_where('tb_trayek')->result_array();
		$data['detail_pesanan'] = $this->Ceriawisata_model->detailPesanan($id);
		$data['daftarWisata'] = $this->Ceriawisata_model->daftarWisata($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/tambahjadwal', $data);
		$this->load->view('templates/footer');
	}

	public function getWisata($id)
	{
		$data = $this->Ceriawisata_model->daftarWisata($id);
		// foreach ($data as $row)
		// 	$arr_result = array(
		// 		'id' => $row->id,
		// 		'tujuan' => $row->tujuan
		// 	);
		echo json_encode($data);
	}

	public function getPesanan($id)
	{
		$data = $this->Ceriawisata_model->detailPesanan($id);
		echo json_encode($data);
	}

	public function submitJadwal()
	{
		$data_jadwal = [];
		$nomer = 0;
		$id_pesanan = $this->input->post('id_pesanan');
		$id_tempat = $this->input->post('wisata[]');

		foreach ($id_tempat as $key) {
			$data_jadwal[$nomer] = [
				'id_pesanan' => htmlspecialchars($id_pesanan),
				'id_tempat' => $_POST['wisata'][$nomer],
				'tanggal' => $_POST['tanggal'][$nomer],
				'waktu_berangkat' => $_POST['berangkat'][$nomer],
				'waktu_pulang' => $_POST['pulang'][$nomer]
			];
			$nomer++;
		}
		// echo json_encode($data_jadwal);
		// die;
		$this->db->where('id_pesanan', $id_pesanan);
		$result = $this->db->update_batch('tb_jadwal', $data_jadwal, 'id_tempat');
		if ($result == true) {
			redirect('Admin/detailpesanan/' . $this->input->post('id_pesanan'));
		} else {
			redirect('Admin/tambahJadwal/' . $this->input->post('id_pesanan'));
		}
	}
}
