<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceriawisata_model extends CI_Model
{
	
	
	public function gettempatwisata($id)
	{
		$this->db->select('*');
		$this->db->from('tb_trayek');
		$this->db->where('kode', $id);
		$query = $this->db->get();
			return $query;
	}

	function input_datapesanan($data,$table){
		$this->db->insert($table,$data);
		return $query;
	}

}
