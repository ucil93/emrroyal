<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function getAllData()
  {
    $get  = $this->db->query("Select * From EMR_GR_LABORATORIUM");
    return $get->result();
  }

	public function getDataById($id)
  {
    $get  = $this->db->query("Select * From EMR_GR_LABORATORIUM where KODE_GR_LABORATORIUM='".$id."'");
    return $get->result();
  }
}
