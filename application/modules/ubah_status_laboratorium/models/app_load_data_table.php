<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_load_data_table extends CI_Model {

	/*public function getAllDataDokter()
	{
		$get  = $this->db->query("Select * From afarm_dokter");
		return $get->result();
	}

	public function getAllData()
	{
		//$date = "2016-07-20";
		$date = date('Y-m-d');

		$query  = $this->db->query("SELECT ARM_REGISTER.NOREG, Afarm_MstPasien.NORM, Afarm_MstPasien.NAMA, Afarm_MstPasien.NIK, Afarm_MstPasien.TGLLAHIR, Afarm_MstPasien.ALAMATPASIEN, Afarm_MstPasien.KELAMIN,
                      EMR_UTAMA_PERIKSA.TANGGAL_PERIKSA, Afarm_DOKTER.NAMA AS NAMADOKTER, EMR_HASIL_PERIKSA_UMUM.DIAGNOSIS_T, EMR_HASIL_PERIKSA_UMUM.DIAGNOSIS_BANDING_T,
                      Afarm_Customer.NMCUST, EMR_APPROVAL_BPJS.CATATAN, EMR_APPROVAL_BPJS.PENANGGUNG_JAWAB_APPROV
											FROM ARM_REGISTER INNER JOIN
                      Afarm_MstPasien ON ARM_REGISTER.NORM = Afarm_MstPasien.NORM INNER JOIN
                      Afarm_UnitLayanan ON ARM_REGISTER.TUJUAN = Afarm_UnitLayanan.KODEUNIT LEFT OUTER JOIN
                      Afarm_DOKTER RIGHT OUTER JOIN
                      EMR_UTAMA_PERIKSA ON Afarm_DOKTER.KODEDOKTER = EMR_UTAMA_PERIKSA.PENANGGUNG_JAWAB_DOKTER ON
                      ARM_REGISTER.NOREG = EMR_UTAMA_PERIKSA.NOREG FULL OUTER JOIN
                      Afarm_Customer ON ARM_REGISTER.CUSTNO = Afarm_Customer.CUSTNO FULL OUTER JOIN
                      EMR_HASIL_PERIKSA_UMUM ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_HASIL_PERIKSA_UMUM.ID_PEMERIKSAAN FULL OUTER JOIN
                      EMR_APPROVAL_BPJS ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_APPROVAL_BPJS.ID_PEMERIKSAAN
											WHERE (CONVERT(date, ARM_REGISTER.TANGGAL) = '$date') AND (Afarm_UnitLayanan.KET = 'RSPG') AND (EMR_UTAMA_PERIKSA.STATUS_LABORAT = 'ADA') OR
											(CONVERT(date, ARM_REGISTER.TANGGAL) = '$date') AND (Afarm_UnitLayanan.KET = 'RSPG') AND (ARM_REGISTER.TUJUAN = 'T02')
											ORDER BY EMR_UTAMA_PERIKSA.JAM_PERIKSA DESC");

	  return $query->result();
	}*/

	public function getAllData()
	{
		$date = date('Y-m-d');
		//$second_db = $this->load->database('second', TRUE);

		$query  = $this->db->query("SELECT DISTINCT EMR_UTAMA_PERIKSA.NOREG, EMR_UTAMA_PERIKSA.NORM
											FROM emr_utama_periksa INNER JOIN
											EMR_DETAIL_PASIEN_LABO ON emr_utama_periksa.ID_PEMERIKSAAN = EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN
											WHERE EMR_DETAIL_PASIEN_LABO.STATUS_DETAIL_PASIEN_LABO = 'BARU' OR EMR_DETAIL_PASIEN_LABO.STATUS_DETAIL_PASIEN_LABO = 'PROSES'");
		return $query->result();
	}

	/*public function getAllDataTanggal($tgl)
	{
		$tgl_ubah = date('Y-m-d', strtotime($tgl));

		$query  = $this->db->query("SELECT ARM_REGISTER.NOREG, Afarm_MstPasien.NORM, Afarm_MstPasien.NAMA, Afarm_MstPasien.NIK, Afarm_MstPasien.TGLLAHIR, Afarm_MstPasien.ALAMATPASIEN, Afarm_MstPasien.KELAMIN,
                      EMR_UTAMA_PERIKSA.TANGGAL_PERIKSA, Afarm_DOKTER.NAMA AS NAMADOKTER, EMR_HASIL_PERIKSA_UMUM.DIAGNOSIS_T, EMR_HASIL_PERIKSA_UMUM.DIAGNOSIS_BANDING_T,
                      Afarm_Customer.NMCUST, EMR_APPROVAL_BPJS.CATATAN, EMR_APPROVAL_BPJS.PENANGGUNG_JAWAB_APPROV
											FROM ARM_REGISTER INNER JOIN
                      Afarm_MstPasien ON ARM_REGISTER.NORM = Afarm_MstPasien.NORM INNER JOIN
                      Afarm_UnitLayanan ON ARM_REGISTER.TUJUAN = Afarm_UnitLayanan.KODEUNIT LEFT OUTER JOIN
                      Afarm_DOKTER RIGHT OUTER JOIN
                      EMR_UTAMA_PERIKSA ON Afarm_DOKTER.KODEDOKTER = EMR_UTAMA_PERIKSA.PENANGGUNG_JAWAB_DOKTER ON
                      ARM_REGISTER.NOREG = EMR_UTAMA_PERIKSA.NOREG FULL OUTER JOIN
                      Afarm_Customer ON ARM_REGISTER.CUSTNO = Afarm_Customer.CUSTNO FULL OUTER JOIN
                      EMR_HASIL_PERIKSA_UMUM ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_HASIL_PERIKSA_UMUM.ID_PEMERIKSAAN FULL OUTER JOIN
                      EMR_APPROVAL_BPJS ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_APPROVAL_BPJS.ID_PEMERIKSAAN
											WHERE (CONVERT(date, ARM_REGISTER.TANGGAL) = '$tgl_ubah') AND (Afarm_UnitLayanan.KET = 'RSPG') AND (EMR_UTAMA_PERIKSA.STATUS_LABORAT = 'ADA') OR
											(CONVERT(date, ARM_REGISTER.TANGGAL) = '$tgl_ubah') AND (Afarm_UnitLayanan.KET = 'RSPG') AND (ARM_REGISTER.TUJUAN = 'T02')
											ORDER BY EMR_UTAMA_PERIKSA.JAM_PERIKSA DESC");
		return $query->result();
	}

	public function getAllDataTanggal2($tgl,$tgl2)
	{
		$tgl_ubah = date('Y-m-d', strtotime($tgl));
		$tgl_ubah2 = date('Y-m-d', strtotime($tgl2));

		$query  = $this->db->query("SELECT ARM_REGISTER.NOREG, Afarm_MstPasien.NORM, Afarm_MstPasien.NAMA, Afarm_MstPasien.NIK, Afarm_MstPasien.TGLLAHIR, Afarm_MstPasien.ALAMATPASIEN, Afarm_MstPasien.KELAMIN,
                      EMR_UTAMA_PERIKSA.TANGGAL_PERIKSA, Afarm_DOKTER.NAMA AS NAMADOKTER, EMR_HASIL_PERIKSA_UMUM.DIAGNOSIS_T, EMR_HASIL_PERIKSA_UMUM.DIAGNOSIS_BANDING_T,
                      Afarm_Customer.NMCUST, EMR_APPROVAL_BPJS.CATATAN, EMR_APPROVAL_BPJS.PENANGGUNG_JAWAB_APPROV
											FROM ARM_REGISTER INNER JOIN
                      Afarm_MstPasien ON ARM_REGISTER.NORM = Afarm_MstPasien.NORM INNER JOIN
                      Afarm_UnitLayanan ON ARM_REGISTER.TUJUAN = Afarm_UnitLayanan.KODEUNIT LEFT OUTER JOIN
                      Afarm_DOKTER RIGHT OUTER JOIN
                      EMR_UTAMA_PERIKSA ON Afarm_DOKTER.KODEDOKTER = EMR_UTAMA_PERIKSA.PENANGGUNG_JAWAB_DOKTER ON
                      ARM_REGISTER.NOREG = EMR_UTAMA_PERIKSA.NOREG FULL OUTER JOIN
                      Afarm_Customer ON ARM_REGISTER.CUSTNO = Afarm_Customer.CUSTNO FULL OUTER JOIN
                      EMR_HASIL_PERIKSA_UMUM ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_HASIL_PERIKSA_UMUM.ID_PEMERIKSAAN FULL OUTER JOIN
                      EMR_APPROVAL_BPJS ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_APPROVAL_BPJS.ID_PEMERIKSAAN
											WHERE (CONVERT(date, ARM_REGISTER.TANGGAL) BETWEEN '$tgl_ubah' AND '$tgl_ubah2') AND (Afarm_UnitLayanan.KET = 'RSPG') AND (EMR_UTAMA_PERIKSA.STATUS_LABORAT = 'ADA') OR
											(CONVERT(date, ARM_REGISTER.TANGGAL) BETWEEN '$tgl_ubah' AND '$tgl_ubah2') AND (Afarm_UnitLayanan.KET = 'RSPG') AND (ARM_REGISTER.TUJUAN = 'T02')
											ORDER BY EMR_UTAMA_PERIKSA.JAM_PERIKSA DESC");

		return $query->result();
	}*/

	public function getDataById($id)
  {
    /*$this->db->select('*');
		$this->db->from('arm_register');
		$this->db->join('afarm_mstpasien', 'arm_register.norm = afarm_mstpasien.norm');
		$this->db->where(array('arm_register.noreg' => $id));
		$query = $this->db->get();*/
		$second_db = $this->load->database('second', TRUE);

		$query  = $second_db->query("SELECT *
											FROM rd_reg INNER JOIN
                      PAsien ON rd_reg.norm = Pasien.norm
											WHERE rd_reg.NOREG = '$id'");

		/*$query  = $this->db->query("SELECT ARM_REGISTER.NOREG, Afarm_MstPasien.NORM, Afarm_MstPasien.NAMA, Afarm_MstPasien.NIK, Afarm_MstPasien.TGLLAHIR, Afarm_MstPasien.ALAMATPASIEN, Afarm_MstPasien.KELAMIN
											FROM dbo.ARM_REGISTER JOIN
                      dbo.Afarm_MstPasien ON dbo.ARM_REGISTER.NORM = dbo.Afarm_MstPasien.NORM FULL OUTER JOIN
                      dbo.Afarm_Customer ON dbo.ARM_REGISTER.CUSTNO = dbo.Afarm_Customer.CUSTNO FULL OUTER JOIN
                      dbo.ARM_RegisterTujuan ON dbo.ARM_REGISTER.NOREG = dbo.ARM_RegisterTujuan.NOREG FULL OUTER JOIN
                      dbo.Afarm_UnitLayanan ON dbo.ARM_RegisterTujuan.REGTUJUAN = dbo.Afarm_UnitLayanan.KODEUNIT
 										where ARM_REGISTER.NOREG = '$id'");*/

    return $query->result();
  }

	/*public function getAllDataGr()
  {
    $get  = $this->db->query("Select * From EMR_GR_LABORATORIUM where STATUS_GR_LABORAT='AKTIF'");
    return $get->result();
  }*/

	public function getDataById3($id)
  {
    /*$this->db->select('NM_DT_LABORATORIUM');
		$this->db->from('EMR_DETAIL_PASIEN_LABO');
		$this->db->join('EMR_UTAMA_PERIKSA','EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN');
		$this->db->where(array('NOREG' => $id));
		$this->db->where(array('STATUS_DETAIL_PASIEN_LABO' => 'BARU'));
		$query = $this->db->get();*/

		$query  = $this->db->query("SELECT NM_DT_LABORATORIUM
			FROM EMR_DETAIL_PASIEN_LABO FULL OUTER JOIN
			EMR_UTAMA_PERIKSA ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN
			WHERE (EMR_UTAMA_PERIKSA.NOREG = '$id') AND (EMR_DETAIL_PASIEN_LABO.STATUS_DETAIL_PASIEN_LABO = 'BARU')");

    return $query->result_array();
  }

	public function getDataByIdSelsai($id)
  {
    /*$this->db->select('NM_DT_LABORATORIUM');
		$this->db->from('EMR_DETAIL_PASIEN_LABO');
		$this->db->join('EMR_UTAMA_PERIKSA','EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN');
		$this->db->where(array('NOREG' => $id));
		$this->db->where(array('STATUS_DETAIL_PASIEN_LABO' => 'PROSES'));
		$query = $this->db->get();*/

		$query  = $this->db->query("SELECT NM_DT_LABORATORIUM
			FROM EMR_DETAIL_PASIEN_LABO FULL OUTER JOIN
			EMR_UTAMA_PERIKSA ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN = EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN
			WHERE (EMR_UTAMA_PERIKSA.NOREG = '$id') AND (EMR_DETAIL_PASIEN_LABO.STATUS_DETAIL_PASIEN_LABO = 'PROSES')");

    return $query->result_array();
  }

	/*public function getDataHasil($id)
  {
		$three_db = $this->load->database('three', TRUE);
    $three_db->select('*');
		$three_db->from('HASILLAB');
		$three_db->where(array('Noreg' => $id));
		$query = $three_db->get();

    return $query->result();
  }

	public function getAllDataDeskripsi($searchTerm)
	{

		$data  = $this->db->query("SELECT *
			FROM Afarm_ICD
			WHERE (NOT (NODAFTAR LIKE '%5-%')) AND (KETERANGAN LIKE '%$searchTerm%') OR
                      (NOT (NODAFTAR LIKE '%5-%')) AND (NODAFTAR LIKE '%$searchTerm%')");

		return $data->result_array();
	}*/
}
