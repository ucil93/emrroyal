<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function tabel_data_detil($id_param)
	{

		$config['base_url'] = base_url() . 'emr/pasien/"' .$id_param. '"';
		$config['uri_segment'] = 3;
		$hasil = $this->pagination->initialize($config);

		return $hasil;
	}
}
