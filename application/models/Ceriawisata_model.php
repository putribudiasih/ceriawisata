<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ceriawisata_model extends CI_Model
{


	public function gettempatwisata($id)
	{
		$this->db->select('*');
		$this->db->from('tb_trayek');
		$this->db->where('kode', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	function input_datapesanan($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function getDataPesanan()
	{
		$this->db->select('*');
		$this->db->from('tb_pesanan');
		$query = $this->db->get();
		return $query->result_array();
	}

	function delDataPesanan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_status($where, $update)
	{
		return $this->db->update('tb_pesanan', $update, $where);
	}

	function detailPesanan($id)
	{
		$this->db->select('*');
		$this->db->from('tb_pesanan');
		$this->db->join('tb_trayek', 'tb_trayek.kode = tb_pesanan.trayek');
		$this->db->where('id_pesanan', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	function inputPaketBaru($data)
	{
		return $this->db->insert('tb_trayek', $data);
	}

	function getTempat($id)
	{
		$this->db->select('*');
		$this->db->from('tb_tempat');
		$this->db->where('kode', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	function jumlah_wisata($id)
	{
		$this->db->select('*');
		$this->db->from('tb_tempat');
		$this->db->join('tb_pesanan', 'tb_pesanan.trayek = tb_tempat.kode');
		$this->db->where('id_pesanan', $id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function daftarWisata($id)
	{
		$this->db->select('*');
		$this->db->from('tb_tempat');
		$this->db->join('tb_pesanan', 'tb_pesanan.trayek = tb_tempat.kode');
		$this->db->where('id_pesanan', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	function data_jadwal($id)
	{
		$this->db->select('*');
		$this->db->from('tb_jadwal');
		$this->db->join('tb_tempat', 'tb_tempat.id_tempat = tb_jadwal.id_tempat');
		$this->db->where('id_pesanan', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	function hapusJadwal($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambilJadwal()
	{
		$this->db->select('*');
		$this->db->from('tb_jadwal');
		// $this->db->join('tb_pesanan', 'tb_pesanan.id_pesanan = tb_jadwal.id_pesanan');
		// $this->db->where('tb_jadwal.id_pesanan', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
}
