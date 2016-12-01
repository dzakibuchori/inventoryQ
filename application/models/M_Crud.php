<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Crud extends CI_Model {
	
	public function database()
	{
		$this->load->database();
		$this->db->where('KodeBrg', 'A0001');
		$sql = $this->db->get('tb_barang');
		$result = $sql->result_array();

		return $result;
	}
}
