<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function getAllDataDok()
	{
		$date = date('Y-m-d');
		$royaldb_db = $this->load->database('royaldb', TRUE);

		$royaldb_db->select('*');
		$royaldb_db->from('rd_reg');
		$royaldb_db->join('Pasien', 'rd_reg.norm = Pasien.norm');
		$royaldb_db->where('rd_reg.tgldatang','2016-01-27');
/*
		$this->db->select('*');
		$this->db->from('arm_register');
		$this->db->join('afarm_mstpasien', 'arm_register.norm = afarm_mstpasien.norm');
		$this->db->join('afarm_customer', 'arm_register.custno = afarm_customer.custno','inner');
		$this->db->join('arm_registertujuan', 'arm_register.noreg = arm_registertujuan.noreg','inner');
		$this->db->join('afarm_unitlayanan', 'arm_registertujuan.regtujuan = afarm_unitlayanan.kodeunit','inner');
		$this->db->where(array('afarm_unitlayanan.ket' => 'RSPG'));
		//$this->db->where(array('arm_registertujuan.regtujuan' => ''));
		$this->db->like(array('(CONVERT(date, arm_register.tanggal))' => '2015-01-27'));
		$this->db->not_like(array('arm_register.noreg' => 'R'));
		$query = $this->db->get();
		*/
		$query = $royaldb_db->get();
		return $query->result();
	}

	public function getAllDataPoli()
	{
		$get  = $this->db->query("Select * From afarm_unitlayanan where afarm_unitlayanan.ket = 'RSPG'");
		return $get->result();
	}

	public function getAllDataUnitDok($unit)
	{
		$date = date('Y-m-d');

		if ($unit == 'semua')
		{
			$this->db->select('*');
			$this->db->from('arm_register');
			$this->db->join('afarm_mstpasien', 'arm_register.norm = afarm_mstpasien.norm');
			$this->db->join('afarm_customer', 'arm_register.custno = afarm_customer.custno','inner');
			$this->db->join('arm_registertujuan', 'arm_register.noreg = arm_registertujuan.noreg','inner');
			$this->db->join('afarm_unitlayanan', 'arm_registertujuan.regtujuan = afarm_unitlayanan.kodeunit','inner');
			$this->db->where(array('afarm_unitlayanan.ket' => 'RSPG'));
			$this->db->like(array('(CONVERT(date, arm_register.tanggal))' => $date));
			$this->db->not_like(array('arm_register.noreg' => 'R'));
			$query = $this->db->get();
		}
		else
		{
			$this->db->select('*');
			$this->db->from('arm_register');
			$this->db->join('afarm_mstpasien', 'arm_register.norm = afarm_mstpasien.norm');
			$this->db->join('afarm_customer', 'arm_register.custno = afarm_customer.custno','inner');
			$this->db->join('arm_registertujuan', 'arm_register.noreg = arm_registertujuan.noreg','inner');
			$this->db->join('afarm_unitlayanan', 'arm_registertujuan.regtujuan = afarm_unitlayanan.kodeunit','inner');
			$this->db->where(array('afarm_unitlayanan.ket' => 'RSPG'));
			$this->db->where(array('arm_registertujuan.regtujuan' => $unit));
			$this->db->like(array('(CONVERT(date, arm_register.tanggal))' => $date));
			$this->db->not_like(array('arm_register.noreg' => 'R'));
			$query = $this->db->get();
		}
		return $query->result();
	}

	public function getAllDataSeluruhDok($unit,$tgl)
	{
		$tgl_ubah = date('Y-m-d', strtotime($tgl));

		if ($unit == 'semua')
		{
			$this->db->select('*');
			$this->db->from('arm_register');
			$this->db->join('afarm_mstpasien', 'arm_register.norm = afarm_mstpasien.norm');
			$this->db->join('afarm_customer', 'arm_register.custno = afarm_customer.custno','inner');
			$this->db->join('arm_registertujuan', 'arm_register.noreg = arm_registertujuan.noreg','inner');
			$this->db->join('afarm_unitlayanan', 'arm_registertujuan.regtujuan = afarm_unitlayanan.kodeunit','inner');
			$this->db->where(array('afarm_unitlayanan.ket' => 'RSPG'));
			$this->db->like(array('(CONVERT(date, arm_register.tanggal))' => $tgl_ubah));
			//$this->db->not_like(array('(CONVERT(date, arm_register.noreg))' => 'R'));
			$this->db->not_like(array('arm_register.noreg' => 'R'));
			$query = $this->db->get();
		}
		else
		{
			$this->db->select('*');
			$this->db->from('arm_register');
			$this->db->join('afarm_mstpasien', 'arm_register.norm = afarm_mstpasien.norm');
			$this->db->join('afarm_customer', 'arm_register.custno = afarm_customer.custno','inner');
			$this->db->join('arm_registertujuan', 'arm_register.noreg = arm_registertujuan.noreg','inner');
			$this->db->join('afarm_unitlayanan', 'arm_registertujuan.regtujuan = afarm_unitlayanan.kodeunit','inner');
			$this->db->where(array('afarm_unitlayanan.ket' => 'RSPG'));
			$this->db->where(array('arm_registertujuan.regtujuan' => $unit));
			$this->db->like(array('(CONVERT(date, arm_register.tanggal))' => $tgl_ubah));
			//$this->db->not_like(array('(CONVERT(date, arm_register.noreg))' => 'R'));
			$this->db->not_like(array('arm_register.noreg' => 'R'));
			$query = $this->db->get();
		}
		return $query->result();
	}

	/*public function getAllDataSeluruhDokTgl($tgl)
	{
		$tgl_ubah = date('Y-m-d', strtotime($tgl));

		$this->db->select('*');
		$this->db->from('arm_register');
		$this->db->join('afarm_mstpasien', 'arm_register.norm = afarm_mstpasien.norm');
		$this->db->join('afarm_customer', 'arm_register.custno = afarm_customer.custno','inner');
		$this->db->join('arm_registertujuan', 'arm_register.noreg = arm_registertujuan.noreg','inner');
		$this->db->join('afarm_unitlayanan', 'arm_registertujuan.regtujuan = afarm_unitlayanan.kodeunit','inner');
		$this->db->where(array('afarm_unitlayanan.ket' => 'RSPG'));
		$this->db->like(array('(CONVERT(date, arm_register.tanggal))' => $tgl_ubah));
		$query = $this->db->get();

		return $query->result();
	}*/

	public function getUit($unitTambah)
	{

		if ($unitTambah == 'semua')
		{
			$get = 'Semua Unit';
		}
		else
		{
			$this->db->select('NAMAUNIT');
			$this->db->from('afarm_unitlayanan');
			$this->db->where(array('KODEUNIT' => $unitTambah));
			$query = $this->db->get();
			$get = $query->row()->NAMAUNIT;
		}
		return $get;
	}

	public function getAllDataBayarDok($kodedokter)
 {
	 $tgltoday = date('d-M-Y');

	 $this->db->select('EMR_UTAMA_PERIKSA.TANGGAL_PERIKSA, EMR_UTAMA_PERIKSA.KODEUNIT, Afarm_UnitLayanan.NAMAUNIT, EMR_HASIL_PERIKSA_UMUM.DIAGNOSIS, afarm_mstpasien.NAMA as NAMAPASIEN, afarm_Customer.NMCUST, afarm_Customer.CUSTNO');
	 $this->db->from('EMR_UTAMA_PERIKSA');
	 $this->db->join('EMR_HASIL_PERIKSA_UMUM', 'EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_HASIL_PERIKSA_UMUM.ID_PEMERIKSAAN');
	 $this->db->join('arm_register', 'EMR_UTAMA_PERIKSA.NOREG = arm_register.NOREG','inner');
	 $this->db->join('afarm_mstpasien', 'EMR_UTAMA_PERIKSA.norm = afarm_mstpasien.norm','inner');
	 $this->db->join('afarm_Customer', 'arm_register.CUSTNO = afarm_Customer.CUSTNO','inner');
	 $this->db->join('Afarm_UnitLayanan', 'EMR_UTAMA_PERIKSA.KODEUNIT = Afarm_UnitLayanan.KODEUNIT','inner');
	 $this->db->where(array('EMR_UTAMA_PERIKSA.PENANGGUNG_JAWAB_DOKTER' => $kodedokter));
	 $this->db->where(array('EMR_UTAMA_PERIKSA.TANGGAL_PERIKSA' => $tgltoday));
	 $query = $this->db->get();

	 return $query->result();

 }
 public function getAllDataBayarDok2($kodedokter)
 {
	$tgltoday = date('d-M-Y');
	$tglawal = date('01-M-Y');

	$this->db->select('EMR_UTAMA_PERIKSA.TANGGAL_PERIKSA, EMR_UTAMA_PERIKSA.KODEUNIT, Afarm_UnitLayanan.NAMAUNIT, EMR_HASIL_PERIKSA_UMUM.DIAGNOSIS, afarm_mstpasien.NAMA as NAMAPASIEN, afarm_Customer.NMCUST, afarm_Customer.CUSTNO');
	$this->db->from('EMR_UTAMA_PERIKSA');
	$this->db->join('EMR_HASIL_PERIKSA_UMUM', 'EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_HASIL_PERIKSA_UMUM.ID_PEMERIKSAAN');
	$this->db->join('arm_register', 'EMR_UTAMA_PERIKSA.NOREG = arm_register.NOREG','inner');
	$this->db->join('afarm_mstpasien', 'EMR_UTAMA_PERIKSA.norm = afarm_mstpasien.norm','inner');
	$this->db->join('afarm_Customer', 'arm_register.CUSTNO = afarm_Customer.CUSTNO','inner');
	$this->db->join('Afarm_UnitLayanan', 'EMR_UTAMA_PERIKSA.KODEUNIT = Afarm_UnitLayanan.KODEUNIT','inner');
	$this->db->where(array('EMR_UTAMA_PERIKSA.PENANGGUNG_JAWAB_DOKTER' => $kodedokter));
	$this->db->where('EMR_UTAMA_PERIKSA.TANGGAL_PERIKSA >= ', $tglawal);
	$this->db->where('EMR_UTAMA_PERIKSA.TANGGAL_PERIKSA <= ', $tgltoday);
	$query = $this->db->get();

	return $query->result();

 }
}
