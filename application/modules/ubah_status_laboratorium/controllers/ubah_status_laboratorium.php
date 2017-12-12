<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ubah_status_laboratorium extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$d['active_dashboard_laboratorium'] = "";
			$d['active_master'] = "";
				$d['active_grouplaboratorium'] = "";
				$d['active_laboratorium'] = "";
			$d['active_transaksi'] = "active";
				$d['active_ubahtatuslaboratorium'] = "active";

			$this->load->model('/app_load_data_table');

			$tgl = $this->input->post('tgl_tampil_data');
			$tgl2 = $this->input->post('tgl_tampil_data2');

			/*if ($tgl != '')
			{
				if ($tgl2 != '')
				{
					$d['dataTable'] = $this->app_load_data_table->getAllDataTanggal2($tgl,$tgl2);
				}
				else
				{
					$d['dataTable'] = $this->app_load_data_table->getAllDataTanggal($tgl);
				}
			}
			else
			{
				$d['dataTable'] = $this->app_load_data_table->getAllData();
			}*/

			//$d['dataLaboratorium'] = $this->app_load_data_table->getAllDataGr();
			$d['dataTable'] = $this->app_load_data_table->getAllData();
			
			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$this->load->view('dashboard_laboratorium/bg_header', $d);
			$this->load->view('dashboard_laboratorium/bg_navigation', $d);
			$this->load->view('ubah_status_laboratorium/content', $d);
			$this->load->view('dashboard_laboratorium/bg_footer', $d);
		}
		else
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
	}

	/*function kode_inc_periksa($code1,$kode)
	{
		$code = 'P-';
		$code .= $code1;
		$code .= '-';
		$code .= sprintf("%06s", $kode);
		return $code;
	}

	function get_id_periksa($code1)
	{
		$maxid = 0;
		$row = $this->db->query("SELECT MAX(right(ID_PEMERIKSAAN,6)) as maxid FROM EMR_UTAMA_PERIKSA WHERE ID_PEMERIKSAAN LIKE '%$code1%'")->row();
		if ($row) {
				$maxid = $row->maxid;
		}
		return $maxid;
	}

	public function simpan()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			//$code1 = $this->input->post('namadtlbedit2');
			$code1 = $this->input->post('namadtlbedit2');
			$kode = $this->get_id_periksa($code1);
			$kode = $kode + 1;

			$LABORAT_Diagnosis_simpan = $this->input->post('LABORAT_Diagnosis_simpan');
			$LABORAT_SimpanIdDiagnosis_simpan = $this->input->post('LABORAT_SimpanIdDiagnosis_simpan');
			$LABORAT_SimpanNamaDiagnosis_simpan = $this->input->post('LABORAT_SimpanNamaDiagnosis_simpan');

			$totalRoutesCountDiagnosis = sizeof($LABORAT_Diagnosis_simpan);
	    $totalRoutesDiagnosis="";
	    for($i=0; $i<$totalRoutesCountDiagnosis; $i++)
	    {
	    	$totalRoutesDiagnosis = $totalRoutesDiagnosis.$LABORAT_Diagnosis_simpan[$i].", ";
	    }
	    $totalRoutesDiagnosis = rtrim($totalRoutesDiagnosis, ', ');

			$idpemeriksaan = $this->kode_inc_periksa($code1,$kode);
			$status = 'BARU';

			$dz['ID_PEMERIKSAAN'] = $idpemeriksaan;
			$dz['NOREG'] = $this->input->post('namadtlbedit1');
			$dz['NORM'] = $code1;
			$dz['KODEUNIT'] = 'T02';
			$dz['TANGGAL_PERIKSA'] = date('d-M-Y');
			$dz['JAM_PERIKSA'] =  date('h:i:s');
			$dz['USERNAME'] = $this->session->userdata("username");
			$dz['STATUS_ASESMEN'] = 'LABORATORIUM';
			$dz['STATUS_LABORAT'] = 'ADA';

			$da['ID_PEMERIKSAAN'] = $idpemeriksaan;
			$da['DIAGNOSIS_T'] = $totalRoutesDiagnosis;
			$da['CATATAN_PERAWAT'] = $this->input->post('LABORAT_catatan');

			$dt['ID_PEMERIKSAAN'] = $idpemeriksaan;
			$dt['STATUS_DETAIL_PASIEN_LABO'] = 'PROSES';

			$checkBox = $this->input->post('laborat_checkbox');

			if ($this->input->post('laborat_checkbox') != "")
			{
				if ($this->input->post('laboratorium_pasien_lain') != "")
				{
					$this->load->library('form_validation');

					//set validation rules
					$this->form_validation->set_rules('laboratorium_pasien_lain2', 'Laboratorium Lain', 'required');

					//run validation check
					if ($this->form_validation->run() == FALSE)
					{   //validation fails
						echo validation_errors();
					}
					else
					{
						for($i=0; $i<count($checkBox); $i++)
						{
							$dt['KODE_DT_LABORATORIUM'] = $checkBox[$i];

							$this->db->select('*');
							$this->db->where_in('KODE_DT_LABORATORIUM', $checkBox[$i]);
							$query = $this->db->get('EMR_DT_LABORATORIUM')->result_array();

							foreach($query as $row)
							{
								$place_id = $row['NM_DT_LABORATORIUM'];
							}

							$dt['NM_DT_LABORATORIUM'] = $place_id;
							$this->db->insert("EMR_DETAIL_PASIEN_LABO",$dt);
						};

						$dt['KODE_DT_LABORATORIUM'] = $this->input->post('laboratorium_pasien_lain');
						$dt['NM_DT_LABORATORIUM'] = $this->input->post('laboratorium_pasien_lain2');
						$this->db->insert("EMR_DETAIL_PASIEN_LABO",$dt);

						if (count($LABORAT_Diagnosis_simpan) > 0)
						{
							for($i=0; $i<count($LABORAT_Diagnosis_simpan); $i++)
							{
								$dtDiagnosis['ID_PEMERIKSAAN'] = $idpemeriksaan;
								$dtDiagnosis['ID_DIAGNOSIS'] = $LABORAT_SimpanIdDiagnosis_simpan[$i];
								$dtDiagnosis['DIAGNOSIS'] = $LABORAT_SimpanNamaDiagnosis_simpan[$i];
								$dtDiagnosis['STATUS_DIAGNOSIS'] = $status;

								$this->db->insert("EMR_DETAIL_DIAGNOSIS",$dtDiagnosis);
							};
						}

						$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
						$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
						echo "YES";
					}
				}
				else
				{
					for($i=0; $i<count($checkBox); $i++)
					{
						$dt['KODE_DT_LABORATORIUM'] = $checkBox[$i];

						$this->db->select('*');
						$this->db->where_in('KODE_DT_LABORATORIUM', $checkBox[$i]);
						$query = $this->db->get('EMR_DT_LABORATORIUM')->result_array();

						foreach($query as $row)
						{
							$place_id = $row['NM_DT_LABORATORIUM'];
						}

						$dt['NM_DT_LABORATORIUM'] = $place_id;
						$this->db->insert("EMR_DETAIL_PASIEN_LABO",$dt);
					};

					if (count($LABORAT_Diagnosis_simpan) > 0)
					{
						for($i=0; $i<count($LABORAT_Diagnosis_simpan); $i++)
						{
							$dtDiagnosis['ID_PEMERIKSAAN'] = $idpemeriksaan;
							$dtDiagnosis['ID_DIAGNOSIS'] = $LABORAT_SimpanIdDiagnosis_simpan[$i];
							$dtDiagnosis['DIAGNOSIS'] = $LABORAT_SimpanNamaDiagnosis_simpan[$i];
							$dtDiagnosis['STATUS_DIAGNOSIS'] = $status;

							$this->db->insert("EMR_DETAIL_DIAGNOSIS",$dtDiagnosis);
						};
					}

					$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
					$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
					echo "YES";
				}
			}
			else if ($this->input->post('laboratorium_pasien_lain') != "")
			{
				$this->load->library('form_validation');

				//set validation rules
				$this->form_validation->set_rules('laboratorium_pasien_lain2', 'Laboratorium Lain', 'required');

				//run validation check
				if ($this->form_validation->run() == FALSE)
				{   //validation fails
					echo validation_errors();
				}
				else
				{
					$dt['KODE_DT_LABORATORIUM'] = $this->input->post('laboratorium_pasien_lain');
					$dt['NM_DT_LABORATORIUM'] = $this->input->post('laboratorium_pasien_lain2');
					$this->db->insert("EMR_DETAIL_PASIEN_LABO",$dt);

					if (count($LABORAT_Diagnosis_simpan) > 0)
					{
						for($i=0; $i<count($LABORAT_Diagnosis_simpan); $i++)
						{
							$dtDiagnosis['ID_PEMERIKSAAN'] = $idpemeriksaan;
							$dtDiagnosis['ID_DIAGNOSIS'] = $LABORAT_SimpanIdDiagnosis_simpan[$i];
							$dtDiagnosis['DIAGNOSIS'] = $LABORAT_SimpanNamaDiagnosis_simpan[$i];
							$dtDiagnosis['STATUS_DIAGNOSIS'] = $status;

							$this->db->insert("EMR_DETAIL_DIAGNOSIS",$dtDiagnosis);
						};
					}

					$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
					$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
					echo "YES";
				}
			}
			else
			{
				echo "NO1";
			}
		}
		else
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
	}*/

	public function ubah_status()
	{
		if($this->session->userdata("logged_in")!="")
		{
			//$norm_data = $this->input->post('noreglaborat');
			$noreg_data = $this->input->post('noreglaborat');
			$norm_data = $this->input->post('normlaborat');

			/*$cek_data['NOREG'] = $noreg_data;
			$cek_data['NORM'] = $norm_data;
			$cek_data['STATUS_DETAIL_PASIEN_LABO'] = "BARU";

			$cek = $this->db->get_where('EMR_DETAIL_PASIEN_LABO', $cek_data);

			if($cek->num_rows()>0)
			{
			$data = array(
				'EL.STATUS_DETAIL_PASIEN_LABO' => 'SUDAH PERIKSA',
			);

			$this->db->where('EP.NOREG', $noreg_data);
			$this->db->where('EP.NORM', $norm_data);
			$this->db->update('EMR_DETAIL_PASIEN_LABO EL join EMR_UTAMA_PERIKSA EP on EP.ID_PEMERIKSAAN = EL.ID_PEMERIKSAAN', $data);

			$query=
			$this->db->set('a.STATUS_DETAIL_PASIEN_LABO','SUDAH PERIKSA');

			$this->db->where('b.NOREG',$noreg_data);
			$this->db->where('b.NORM',$norm_data);
			$this->db->where('a.ID_PEMERIKSAAN = b.ID_PEMERIKSAAN');
			$this->db->update('EMR_DETAIL_PASIEN_LABO as a, EMR_UTAMA_PERIKSA as b');
			//$this->db->update('EMR_DETAIL_PASIEN_LABO JOIN EMR_UTAMA_PERIKSA ON EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN=EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN');
			$data = array('EL.STATUS_DETAIL_PASIEN_LABO' => 'SUDAH PERIKSA',);

			$this->db->where('EP.NOREG', $noreg_data);
			$this->db->where('EP.NORM', $norm_data);
			$this->db->update('EMR_DETAIL_PASIEN_LABO EL INNER JOIN EMR_UTAMA_PERIKSA EP ON EL.ID_PEMERIKSAAN = EP.ID_PEMERIKSAAN', $data);*/
			$sql = "UPDATE t1
		  SET t1.STATUS_DETAIL_PASIEN_LABO = 'PROSES'
		  FROM EMR_DETAIL_PASIEN_LABO AS t1
		  INNER JOIN EMR_UTAMA_PERIKSA AS t2
		  ON t1.ID_PEMERIKSAAN = t2.ID_PEMERIKSAAN
		  WHERE t2.NOREG = '$noreg_data' and t2.NORM = '$norm_data' AND t1.STATUS_DETAIL_PASIEN_LABO = 'BARU'";
			$this->db->query($sql);

			echo "YES";
			/*}
			else
			{
				echo "NO";
			}*/
		}
		else
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
	}

	public function ubah_status_selesai()
	{
		if($this->session->userdata("logged_in")!="")
		{
			//$norm_data = $this->input->post('noreglaborat');
			$noreg_data = $this->input->post('noreglaborat');
			$norm_data = $this->input->post('normlaborat');

			$sql = "UPDATE t1
		  SET t1.STATUS_DETAIL_PASIEN_LABO = 'SELESAI'
		  FROM EMR_DETAIL_PASIEN_LABO AS t1
		  INNER JOIN EMR_UTAMA_PERIKSA AS t2
		  ON t1.ID_PEMERIKSAAN = t2.ID_PEMERIKSAAN
		  WHERE t2.NOREG = '$noreg_data' and t2.NORM = '$norm_data' AND t1.STATUS_DETAIL_PASIEN_LABO = 'PROSES'";
			$this->db->query($sql);

			echo "YES";
		}
		else
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
	}

	function getDataById()
	{
		$id = $_GET['id'];;
		$this->load->model('/app_load_data_table');
		$data = $this->app_load_data_table->getDataById($id);

		print json_encode($data);
	}

	/*function getAllDeskripsi()
  {

	    $term = $_REQUEST['q'];
	        $data = array();
	        $this->load->model('/app_load_data_table');
	        $rows = $this->app_load_data_table->getAllDataDeskripsi($term);
	            foreach( $rows as $row )
	            {
	                $data[] = array(
				                        'value' => trim($row['NODAFTAR']." - ".$row['KETERANGAN']),
				                        'label' => trim($row['NODAFTAR']." - ".$row['KETERANGAN']),
																'label_id' => trim($row['NODAFTAR']),
																'label_nama' => trim($row['KETERANGAN'])
				                    );
	            }
	        echo json_encode($data);
	}*/

	function getDataById34()
	{
		$id = $this->input->post('id');
		$this->load->model('/app_load_data_table');
		$data = $this->app_load_data_table->getDataById3($id);

		$this->load->library('table');

		$this->table->set_heading('');

		$style = array('table_open'  => '<table>');
		$this->table->set_template($style);

		echo $this->table->generate($data);
	}

	function getDataByIdSelesai1()
	{
		$id = $this->input->post('id');
		$this->load->model('/app_load_data_table');
		$data = $this->app_load_data_table->getDataByIdSelsai($id);

		$this->load->library('table');

		$this->table->set_heading('');

		$style = array('table_open'  => '<table>');
		$this->table->set_template($style);

		echo $this->table->generate($data);
	}

	/*function getHasilPasienLabo()
	{
		$id = $_GET['id'];;
		$this->load->model('/app_load_data_table');
		$data = $this->app_load_data_table->getDataHasil($id);

		print json_encode($data);
	}*/
}
