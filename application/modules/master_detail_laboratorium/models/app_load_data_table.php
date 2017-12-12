<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function getAllDataDokter()
	{
		$get  = $this->db->query("Select * From afarm_dokter");
		return $get->result();
	}
	
	public function getAllData()
  {
		$this->db->select('*');
    $this->db->from('EMR_DT_LABORATORIUM a');
    $this->db->join('EMR_GR_LABORATORIUM b', 'a.KODE_GR_LABORATORIUM=b.KODE_GR_LABORATORIUM');
		$this->db->order_by('a.KODE_DT_LABORATORIUM','asc');
  	$get = $this->db->get();
    return $get->result();
  }

	public function getAllDataGr()
  {
    $get  = $this->db->query("Select * From EMR_GR_LABORATORIUM where STATUS_GR_LABORAT='AKTIF'");
    return $get->result();
  }

	public function getDataById($id)
  {
		$this->db->select('*');
    $this->db->from('EMR_DT_LABORATORIUM a');
    $this->db->join('EMR_GR_LABORATORIUM b', 'a.KODE_GR_LABORATORIUM=b.KODE_GR_LABORATORIUM');
    $this->db->where('a.KODE_DT_LABORATORIUM',$id);
  	$get = $this->db->get();
    return $get->result();
  }
}
