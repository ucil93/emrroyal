<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function getAllData()
  {
		$get  = $this->db->query("Select * From EMR_DT_RADIOLOGI JOIN EMR_GR_RADIOLOGI
		ON EMR_DT_RADIOLOGI.KODE_GR_RADIO = EMR_GR_RADIOLOGI.KODE_GR_RADIO ORDER BY EMR_DT_RADIOLOGI.KODE_DT_RADIO ASC");
		/*$this->db->select('*');
    $this->db->from('EMR_DT_RADIOLOGI a');
    $this->db->join('EMR_GR_RADIOLOGI b', 'a.KODE_GR_RADIO=b.KODE_GR_RADIO');
		$this->db->order_by('a.KODE_DT_RADIO','asc');
  	$get = $this->db->get();*/
    return $get->result();
  }

	public function getAllDataGr()
  {
    $get  = $this->db->query("Select * From EMR_GR_RADIOLOGI where STATUS_GR_RADIO='AKTIF'");
    return $get->result();
  }

	public function getDataById($id)
  {
		$get  = $this->db->query("Select * From EMR_DT_RADIOLOGI JOIN EMR_GR_RADIOLOGI
		ON EMR_DT_RADIOLOGI.KODE_GR_RADIO = EMR_GR_RADIOLOGI.KODE_GR_RADIO where EMR_DT_RADIOLOGI.KODE_DT_RADIO = '$id'");

		/*$this->db->select('*');
    $this->db->from('EMR_DT_RADIOLOGI');
    $this->db->join('EMR_GR_RADIOLOGI', 'a.EMR_DT_RADIOLOGI=b.KODE_GR_RADIO');
    $this->db->where('a.KODE_DT_RADIO',$id);
  	$get = $this->db->get();*/
    return $get->result();
  }
}
