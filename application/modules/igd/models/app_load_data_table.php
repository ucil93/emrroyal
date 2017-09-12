<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	public function tabel_data_detil($id_param)
	{

		$config['base_url'] = base_url() . 'emr/pasien/"' .$id_param. '"';
		$config['uri_segment'] = 3;
		$hasil = $this->pagination->initialize($config);

		return $hasil;
	}

    public function getAllDataObat($searchTerm)
    {
	    $this->db->select('*');
	    //$this->db->like(array('LEFT(afarm_mstobat.namabarang,3)' => $searchTerm));
	    //$this->db->like(array('SUBSTRING(afarm_mstobat.namabarang,1,3)' => $searchTerm));
	    $this->db->like(array('afarm_mstobat.namabarang' => $searchTerm));
	    $data = $this->db->from('afarm_mstobat')->get();
	    return $data->result_array();
    }

    public function getAllDataDeskripsi($searchTerm)
    {
	    $this->db->select('*');
	    //$this->db->like(array('afarm_icd.keterangan' => $searchTerm));
	    //$this->db->like(array('afarm_icd.nodaftar' => $searchTerm));
	    //$this->db->or_like(array('SUBSTRING(afarm_icd.nodaftar,1,1)' => $searchTerm));
	    $this->db->like(array('afarm_icd.nodaftar' => $searchTerm));
	    $this->db->or_like(array('afarm_icd.keterangan' => $searchTerm));
	    $this->db->not_like(array('afarm_icd.nodaftar' => '5'));
	    //$this->db->not_like(array('afarm_icd.nodaftar' => $searchTerm));
	    $data = $this->db->from('afarm_icd')->get();
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
	    //$this->db->like(array('LEFT(afarm_mstobat.namabarang,3)' => $searchTerm));
			//$this->db->like(array('SUBSTRING(afarm_mstobat.namabarang,1,3)' => $searchTerm));
	    $this->db->like(array('afarm_mstobat.namabarang' => $searchTerm));
			//$this->db->not_like(array('afarm_mstobat.namabarang' => $alergi_obat_pasien));
	    $data = $this->db->from('afarm_mstobat')->get();
	    return $data->result_array();
    }

		public function getDataHistori()
	  {
			$where = $this->uri->segment(3);

			$this->db->select('NORM')->from('ARM_REGISTER')->where('NOREG', $where);
	    $bagian_ttd1 = $this->db->get();
	    $row = $bagian_ttd1->row();
	    $normL = $row->NORM;

		  $this->db->select('*');
			$this->db->from('EMR_UTAMA_PERIKSA');
			$this->db->join('EMR_HASIL_PERIKSA_UMUM', 'EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_HASIL_PERIKSA_UMUM.ID_PEMERIKSAAN');
			$this->db->join('Afarm_DOKTER', 'EMR_UTAMA_PERIKSA.PENANGGUNG_JAWAB_DOKTER = Afarm_DOKTER.KODEDOKTER');
			$this->db->join('Afarm_UnitLayanan', 'EMR_UTAMA_PERIKSA.KODEUNIT = Afarm_UnitLayanan.KODEUNIT');
			$this->db->where(array('EMR_UTAMA_PERIKSA.NORM' => $normL));
			$this->db->where(array('EMR_UTAMA_PERIKSA.STATUS_PEMERIKSAAN' => 'ASESMEN_AWAL'));
			$query = $this->db->get();

		  return $query->result();
	  }
		public function getDataHistori2()
	  {
			$where = $this->uri->segment(3);

			$this->db->select('NORM')->from('ARM_REGISTER')->where('NOREG', $where);
	    $bagian_ttd1 = $this->db->get();
	    $row = $bagian_ttd1->row();
	    $normL = $row->NORM;

		  $this->db->select('*');
			$this->db->from('EMR_UTAMA_PERIKSA');
			$this->db->join('EMR_HASIL_PERIKSA_UMUM', 'EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_HASIL_PERIKSA_UMUM.ID_PEMERIKSAAN');
			$this->db->join('Afarm_DOKTER', 'EMR_UTAMA_PERIKSA.PENANGGUNG_JAWAB_DOKTER = Afarm_DOKTER.KODEDOKTER');
			$this->db->join('Afarm_UnitLayanan', 'EMR_UTAMA_PERIKSA.KODEUNIT = Afarm_UnitLayanan.KODEUNIT');
			$this->db->where(array('EMR_UTAMA_PERIKSA.NORM' => $normL));
			$this->db->where(array('EMR_UTAMA_PERIKSA.STATUS_PEMERIKSAAN' => 'ASESMEN_ULANG'));
			$query = $this->db->get();

		  return $query->result();
	  }
		public function getDataHistori3()
	  {
			$where = $this->uri->segment(3);

			$this->db->select('NORM')->from('ARM_REGISTER')->where('NOREG', $where);
	    $bagian_ttd1 = $this->db->get();
	    $row = $bagian_ttd1->row();
	    $normL = $row->NORM;

		  $this->db->select('*');
			$this->db->from('EMR_UTAMA_PERIKSA');
			$this->db->join('EMR_HASIL_PERIKSA_UMUM', 'EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_HASIL_PERIKSA_UMUM.ID_PEMERIKSAAN');
			$this->db->join('Afarm_DOKTER', 'EMR_UTAMA_PERIKSA.PENANGGUNG_JAWAB_DOKTER = Afarm_DOKTER.KODEDOKTER');
			$this->db->where(array('EMR_UTAMA_PERIKSA.NORM' => $normL));
			$query = $this->db->get();

		  return $query->result();
	  }
		public function getDataHistori4()
	  {
			$where = $this->uri->segment(3);

			$this->db->select('NORM')->from('ARM_REGISTER')->where('NOREG', $where);
	    $bagian_ttd1 = $this->db->get();
	    $row = $bagian_ttd1->row();
	    $normL = $row->NORM;

		  $this->db->select('*');
			$this->db->from('EMR_UTAMA_PERIKSA');
			$this->db->join('EMR_DETAIL_PASIEN_RADIO', 'EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_DETAIL_PASIEN_RADIO.ID_PEMERIKSAAN');
			$this->db->where(array('EMR_UTAMA_PERIKSA.NORM' => $normL));
			$query = $this->db->get();

		  return $query->result();
	  }
		public function getDataHistori5()
	  {
			$where = $this->uri->segment(3);

			$this->db->select('NORM')->from('ARM_REGISTER')->where('NOREG', $where);
	    $bagian_ttd1 = $this->db->get();
	    $row = $bagian_ttd1->row();
	    $normL = $row->NORM;

			$this->db->select('*');
			$this->db->from('EMR_UTAMA_PERIKSA');
			$this->db->join('EMR_DETAIL_PASIEN_LABO', 'EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN');
			$this->db->where(array('EMR_UTAMA_PERIKSA.NORM' => $normL));
			$query = $this->db->get();

			return $query->result();
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
