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

		/*$royaldb_db->select('*');
		$royaldb_db->from('rd_reg');
		$royaldb_db->join('Pasien', 'rd_reg.norm = Pasien.norm');
		$royaldb_db->where('rd_reg.tgldatang','2016-01-27');

		$query = $royaldb_db->get();*/
		return $query->result();
	}
}
