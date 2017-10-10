<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function getAllDataDok()
	{
		$date = date('Y-m-d');
		$royaldb_db = $this->load->database('royaldb', TRUE);

		$query  = $royaldb_db->query("SELECT *
											FROM rd_reg INNER JOIN
                      PAsien ON rd_reg.norm = Pasien.norm
											WHERE rd_reg.tgldatang = '2016-01-27'");
		return $query->result();
	}

	public function getAllDataDok2($tgl)
	{
		$tgl_ubah = date('Y-m-d', strtotime($tgl));
		$royaldb_db = $this->load->database('royaldb', TRUE);

		$query  = $royaldb_db->query("SELECT *
											FROM rd_reg INNER JOIN
                      PAsien ON rd_reg.norm = Pasien.norm
											WHERE rd_reg.tgldatang = '$tgl_ubah'");

		$query = $royaldb_db->get();
		return $query->result();
	}
}
