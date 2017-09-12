<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function getAllDataDokter()
	{
		$get  = $this->db->query("Select * From afarm_dokter");
		return $get->result();
	}
}
