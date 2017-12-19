<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function getAllDataDok()
	{
		$date = date('Y-m-d');
		$second_db = $this->load->database('second', TRUE);

		$query  = $second_db->query("SELECT *
											FROM ri_reg INNER JOIN
                      PAsien ON ri_reg.norm = Pasien.norm
											WHERE ri_reg.tglmasuk = '2016-01-27'");
		return $query->result();
	}

	public function getAllDataDok2($tgl)
	{
		$tgl_ubah = date('Y-m-d', strtotime($tgl));
		$second_db = $this->load->database('second', TRUE);

		$query  = $second_db->query("SELECT *
											FROM rd_reg INNER JOIN
                      PAsien ON rd_reg.norm = Pasien.norm
											WHERE rd_reg.tgldatang = '$tgl_ubah'");

		$query = $second_db->get();
		return $query->result();
	}
}
