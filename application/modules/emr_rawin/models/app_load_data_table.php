<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function tabel_data_detil($id_param)
	{

		$config['base_url'] = base_url() . 'emr/pasien/"' .$id_param. '"';
		$config['uri_segment'] = 3;
		$hasil = $this->pagination->initialize($config);

		return $hasil;
	}

	public function tabel_data_detil2($id_param2)
	{

		$config['base_url'] = base_url() . 'emr/pasien/"' .$id_param2. '"';
		$config['uri_segment'] = 3;
		$hasil = $this->pagination->initialize($config);

		return $hasil;
	}

	public function getAllDataObat($searchTerm)
	{
		$second_db = $this->load->database('second', TRUE);

		$data  = $second_db->query("SELECT * FROM fm_item WHERE (nmdesc1 LIKE '%$searchTerm%') AND (kdLine = 'PA001')");
		return $data->result_array();
	}

	public function getAllDataDeskripsi($searchTerm)
	{
		$second_db = $this->load->database('second', TRUE);

		$data  = $second_db->query("SELECT *
			FROM diagnosa
			WHERE (kddiagnosa LIKE '%$searchTerm%') OR (nmdiagnosa LIKE '%$searchTerm%')");

		return $data->result_array();
	}

  public function getAllDataRadio()
  {
    $get  = $this->db->query("Select * From EMR_GR_RADIOLOGI where status_gr_radio = 'AKTIF'");
    return $get->result();
  }

  public function getAllDataLaboratorium()
  {
    $get  = $this->db->query("Select * From EMR_GR_LABORATORIUM where status_gr_laborat = 'AKTIF'");
    return $get->result();
  }

	public function getAllDataCheckUp()
  {
    $get  = $this->db->query("Select * From EMR_DT_CHECKUP where status_dt_checkup = 'AKTIF'");
    return $get->result();
  }

  public function getAllDataPasienAlergiObat($searchTerm)
  {
    $this->db->select('*');
    $this->db->like(array('afarm_mstobat.namabarang' => $searchTerm));
    $data = $this->db->from('afarm_mstobat')->get();
    return $data->result_array();
  }
}
