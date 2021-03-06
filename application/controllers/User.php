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
		$this->cart->destroy();
		$data['title'] = 'Pemesanan Paket';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->db->get_where('tb_trayek')->result_array();
		$data['kendaraan'] = $this->Ceriawisata_model->getKendaraan();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formpesanan', $data);
		$this->load->view('templates/footer');
	}

	//INPUT DATA PESANAN PAKET WISATA USER
	public function inputpesanan()
	{

		$keranjang = $this->cart->contents();

		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$telp = $this->input->post('no_telp');
		$lokasi_berangkat = $this->input->post('lokasi_berangkat');
		$jml_pax = $this->input->post('jml_pax');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$trayek = $this->input->post('trayek');
		$kode_kendaraan = $this->input->post('kendaraan');
		$kode_hotel = $this->input->post('hotel');
		$total = $this->cart->total();
		$catatan = $this->input->post('catatan');

		// if ($trayek == "bl") {
		// 	$total = $this->input->post('total');
		// 	if (count($keranjang) > 5) {
		// 		$this->session->set_flashdata(
		// 			'msg',
		// 			'
		// 		<div class="alert alert-danger alert-dismissible">
		// 		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
		// 		<h4>Destinasi Yang Dipilih Lebih Dari 5! </h4>
		// 		</div>
		// 		'
		// 		);
		// 		redirect('User/pesanan');
		// 	}
		// }

		$data = array(
			'id_user' => $id_user,
			'nama_pemesan' => $nama,
			'email_pemesan' => $email,
			'telp_pemesan' => $telp,
			'lokasi_berangkat' => $lokasi_berangkat,
			'jml_pax' => $jml_pax,
			'tgl_mulai' => $tgl_mulai,
			'tgl_selesai' => $tgl_selesai,
			'trayek' => $trayek,
			'kendaraan' => $kode_kendaraan,
			'hotel' => $kode_hotel,
			'total_harga' => $total,
			'catatan' => $catatan
		);

		// $data['datalokasi'] = $this->Ceriawisata_model->getdatapesanan();
		$this->Ceriawisata_model->input_datapesanan($data, 'tb_pesanan');
		$last_insert_id = $this->db->insert_id();

		$order = array();
		foreach ($keranjang as $k) {
			$data = array(
				'id_pesanan' => $last_insert_id,
				'id_tempat' => $k['id']
			);
			$order[] = $data;
		}



		foreach ($order as $o) {
			$this->Ceriawisata_model->tambahJadwal($o);
		}




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

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'msg',
				'
			<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
			<h4><i class="icon fa fa-check"></i> Data berhasil dikirim, silahkan tunggu email konfirmasi! </h4>
			</div>
			'
			);
		}

		redirect('user/pesanan');
	}

	public function jadwal()
	{
		$data['title'] = 'Jadwal';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['trayek'] = $this->db->get_where('tb_trayek')->result_array();
		$data['data_pesanan'] =  $this->Ceriawisata_model->getDataPesanan();
		$data['data_pesanan_admin'] =  $this->Ceriawisata_model->getDataPesananAdmin();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/jadwal', $data);
		$this->load->view('templates/footer');
	}

	public function detailJadwal($id)
	{
		$data['title'] = 'Jadwal';
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

	public function ambilJadwal()
	{
		$data = $this->Ceriawisata_model->ambilJadwal();
		echo json_encode($data);
	}

	public function hapusKeranjang()
	{
		$this->cart->destroy();
	}

	public function getDestinasi()
	{
		// $this->hapusKeranjang();
		$id = $this->input->post('id');
		$data = $this->Ceriawisata_model->getDestinasi($id);
		echo json_encode($data);
	}

	public function tambahCart()
	{
		$keranjang = $this->cart->contents();
		if (count($keranjang) < 5) {
			$data = array(
				'id' => $this->input->post('id_tempat'),
				'name' => $this->input->post('nama_tempat'),
				'price' => $this->input->post('harga_tempat'),
				'qty' => 1
			);
			$this->cart->insert($data);
			echo $this->showCart();
		} else {
			echo $this->showCart();
		}
	}

	public function showCart()
	{ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .= '
                <tr>
                    <td colspan="3">' . $items['name'] . '</td>
                    <td><button type="button" id="' . $items['rowid'] . '" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                </tr>
            ';
		}
		// $output .= '
		//     <tr>
		//         <th colspan="3">Total</th>
		//         <th colspan="2">' . 'Rp ' . number_format($this->cart->total()) . '</th>
		//     </tr>
		// ';
		return $output;
	}

	public function loadCart()
	{
		echo $this->showCart();
	}

	public function hapusCart()
	{
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => 0,
		);
		$this->cart->update($data);
		echo $this->showCart();
	}

	public function resetCart()
	{
		$this->cart->destroy();
		echo $this->showCart();
	}

	public function getHotel()
	{
		// $this->hapusKeranjang();
		$id = $this->input->post('id');
		$data = $this->Ceriawisata_model->getHotel($id);
		echo json_encode($data);
	}

	public function getKendaraan()
	{
		$kapasitas = $this->input->post('kapasitas');
		$data = $this->Ceriawisata_model->getKapasitas($kapasitas);
		echo json_encode($data);
	}

	public function getHarga()
	{
		$kode_hotel = $this->input->post('kode_hotel');
		$data = $this->Ceriawisata_model->getHarga($kode_hotel);
		echo json_encode($data);
	}
}
