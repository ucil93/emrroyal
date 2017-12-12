<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ubah_status_radio extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$d['active_dashboard_radio'] = "";
			$d['active_master'] = "";
				$d['active_groupradio'] = "";
				$d['active_dtradio'] = "";
			$d['active_transaksi'] = "active";
				$d['active_ubahtatusradio'] = "active";

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

			$d['dataTable'] = $this->app_load_data_table->getAllData();
			//$d['dataRadiologi'] = $this->app_load_data_table->getAllDataGr();

			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$this->load->view('dashboard_radio/bg_header', $d);
			$this->load->view('dashboard_radio/bg_navigation', $d);
			$this->load->view('ubah_status_radio/content', $d);
			$this->load->view('dashboard_radio/bg_footer', $d);
		}
		else
		{
			$this->session->sess_destroy();
			$this->load->view('login/login');
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
			//$code1 = $this->input->post('namadtradioedit2');
			$code1 = trim($this->input->post('tambahRadioNorm'));
			$kode = $this->get_id_periksa($code1);
			$kode = $kode + 1;

			$dz['ID_PEMERIKSAAN'] = $this->kode_inc_periksa($code1,$kode);
			$dz['NOREG'] = $this->input->post('tambahRadioNoreg');
			$dz['NORM'] = $code1;
			$dz['KODEUNIT'] = '';
			$dz['TANGGAL_PERIKSA'] = date('d-M-Y');
			$dz['JAM_PERIKSA'] =  date('h:i:s');
			$dz['USERNAME'] = $this->session->userdata("username");
			$dz['STATUS_ASESMEN'] = 'RADIOLOGI';
			$dz['STATUS_RADIO'] = 'ADA';

			$da['ID_PEMERIKSAAN'] = $this->kode_inc_periksa($code1,$kode);
			$da['CATATAN_PERAWAT'] = $this->input->post('RADIO_catatan');

			$dt['ID_PEMERIKSAAN'] = $this->kode_inc_periksa($code1,$kode);
			$dt['STATUS_DETAIL_PASIEN_RADIO'] = 'PROSES';

			/*$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
			$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
			echo "YES";*/

			/*$checkBox = $this->input->post('radio_checkbox');

			if ($this->input->post('radio_checkbox') != "")
			{
			  if ($this->input->post('radio_pasien_lain') != "")
			  {
			    $this->load->library('form_validation');

			    //set validation rules
			    $this->form_validation->set_rules('radio_pasien_lain2', 'Radiologi Lain', 'required');

			    //run validation check
			    if ($this->form_validation->run() == FALSE)
			    {
			      //validation fails
			      echo validation_errors();
			    }
			    else
			    {
			      if ($this->input->post('gigi_pasien_lain') != "")
			      {
			        $this->load->library('form_validation');

			        //set validation rules
			        $this->form_validation->set_rules('gigi_pasien_lain2', 'Gigi Satuan', 'required');

			        //run validation check
			        if ($this->form_validation->run() == FALSE)
			        {
			          //validation fails
			          echo validation_errors();
			        }
			        else
			        {
			          //yes keseluruhan
								for($i=0; $i<count($checkBox); $i++)
								{
									$dt['KODE_DT_RADIO'] = $checkBox[$i];

									$this->db->select('*');
									$this->db->where_in('KODE_DT_RADIO', $checkBox[$i]);
									$query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

									foreach($query as $row)
									{
										$place_id = $row['NM_DT_RADIO'];
									}

									$dt['NM_DT_RADIO'] = $place_id;
									$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);
								};

								$dt['KODE_DT_RADIO'] = $this->input->post('radio_pasien_lain');
								$dt['NM_DT_RADIO'] = $this->input->post('radio_pasien_lain2');
								$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);

								$dt['KODE_DT_RADIO'] = $this->input->post('gigi_pasien_lain');
								$dt['NM_DT_RADIO'] = $this->input->post('gigi_pasien_lain2');
								$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);

								$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
								$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
								echo "YES";
			        }
			      }
			      else
			      {
			        //yes checkbox dan lain
							for($i=0; $i<count($checkBox); $i++)
							{
								$dt['KODE_DT_RADIO'] = $checkBox[$i];

								$this->db->select('*');
								$this->db->where_in('KODE_DT_RADIO', $checkBox[$i]);
								$query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

								foreach($query as $row)
								{
									$place_id = $row['NM_DT_RADIO'];
								}

								$dt['NM_DT_RADIO'] = $place_id;
								$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);
							};

							$dt['KODE_DT_RADIO'] = $this->input->post('radio_pasien_lain');
							$dt['NM_DT_RADIO'] = $this->input->post('radio_pasien_lain2');
							$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);

							$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
							$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
							echo "YES";
			      }
			    }
			  }
			  else
			  {
			    if ($this->input->post('gigi_pasien_lain') != "")
			    {
			      $this->load->library('form_validation');

			      //set validation rules
			      $this->form_validation->set_rules('gigi_pasien_lain2', 'Gigi Satuan', 'required');

			      //run validation check
			      if ($this->form_validation->run() == FALSE)
			      {
			        //validation fails
			        echo validation_errors();
			      }
			      else
			      {
			        //yes chcekbox dan gigi
							for($i=0; $i<count($checkBox); $i++)
							{
								$dt['KODE_DT_RADIO'] = $checkBox[$i];

								$this->db->select('*');
								$this->db->where_in('KODE_DT_RADIO', $checkBox[$i]);
								$query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

								foreach($query as $row)
								{
									$place_id = $row['NM_DT_RADIO'];
								}

								$dt['NM_DT_RADIO'] = $place_id;
								$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);
							};

							$dt['KODE_DT_RADIO'] = $this->input->post('gigi_pasien_lain');
							$dt['NM_DT_RADIO'] = $this->input->post('gigi_pasien_lain2');
							$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);

							$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
							$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
							echo "YES";
			      }
			    }
			    else
			    {
			      //yes chcekbox
						for($i=0; $i<count($checkBox); $i++)
						{
							$dt['KODE_DT_RADIO'] = $checkBox[$i];

							$this->db->select('*');
							$this->db->where_in('KODE_DT_RADIO', $checkBox[$i]);
							$query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

							foreach($query as $row)
							{
								$place_id = $row['NM_DT_RADIO'];
							}

							$dt['NM_DT_RADIO'] = $place_id;
							$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);
						};

						$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
						$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
						echo "YES";
			    }
			  }
			}
			else if ($this->input->post('radio_pasien_lain') != "")
			{
			  $this->load->library('form_validation');

			  //set validation rules
			  $this->form_validation->set_rules('radio_pasien_lain2', 'Radiologi Lain', 'required');

			  //run validation check
			  if ($this->form_validation->run() == FALSE)
			  {
			    //validation fails
			    echo validation_errors();
			  }
			  else
			  {
			    if ($this->input->post('gigi_pasien_lain') != "")
			    {
			      $this->load->library('form_validation');

			      //set validation rules
			      $this->form_validation->set_rules('gigi_pasien_lain2', 'Gigi Satuan', 'required');

			      //run validation check
			      if ($this->form_validation->run() == FALSE)
			      {
			        //validation fails
			        echo validation_errors();
			      }
			      else
			      {
			        //yes lain dan gigi

							$dt['KODE_DT_RADIO'] = $this->input->post('radio_pasien_lain');
							$dt['NM_DT_RADIO'] = $this->input->post('radio_pasien_lain2');
							$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);

							$dt['KODE_DT_RADIO'] = $this->input->post('gigi_pasien_lain');
							$dt['NM_DT_RADIO'] = $this->input->post('gigi_pasien_lain2');
							$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);

							$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
							$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
							echo "YES";
			      }
			    }
			    else
			    {
			      //yes lain
						$dt['KODE_DT_RADIO'] = $this->input->post('radio_pasien_lain');
						$dt['NM_DT_RADIO'] = $this->input->post('radio_pasien_lain2');
						$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);

						$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
						$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
						echo "YES";
			    }
			  }
			}
			else if ($this->input->post('gigi_pasien_lain') != "")
			{
			  $this->load->library('form_validation');

			  //set validation rules
			  $this->form_validation->set_rules('gigi_pasien_lain2', 'Gigi Satuan', 'required');

			  //run validation check
			  if ($this->form_validation->run() == FALSE)
			  {
			    //validation fails
			    echo validation_errors();
			  }
			  else
			  {
			    //yes gigi
					$dt['KODE_DT_RADIO'] = $this->input->post('gigi_pasien_lain');
					$dt['NM_DT_RADIO'] = $this->input->post('gigi_pasien_lain2');
					$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dt);

					$this->db->insert("EMR_UTAMA_PERIKSA",$dz);
					$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$da);
					echo "YES";
			  }
			}
			else
			{
			  //yes
				echo "NO1";
			}
		}
		else
		{
			$this->session->sess_destroy();
			$this->load->view('login/login');
		}
	}*/

	public function ubah_status()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$norm_data = $this->input->post('normRadio');
			$noreg_data = $this->input->post('noregRadio');

			$sql = "UPDATE t1
		  SET t1.STATUS_DETAIL_PASIEN_RADIO = 'PROSES'
		  FROM EMR_DETAIL_PASIEN_RADIO AS t1
		  INNER JOIN EMR_UTAMA_PERIKSA AS t2
		  ON t1.ID_PEMERIKSAAN = t2.ID_PEMERIKSAAN
		  WHERE t2.NOREG = '$noreg_data' and t2.NORM = '$norm_data' AND t1.STATUS_DETAIL_PASIEN_RADIO = 'BARU'";
			$this->db->query($sql);

			echo "YES";
		}
		else
		{
			$this->session->sess_destroy();
			$this->load->view('login/login');
		}
	}

	public function ubah_status_selesai()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$norm_data = $this->input->post('normRadio');
			$noreg_data = $this->input->post('noregRadio');

			$sql = "UPDATE t1
		  SET t1.STATUS_DETAIL_PASIEN_RADIO = 'SELESAI'
		  FROM EMR_DETAIL_PASIEN_RADIO AS t1
		  INNER JOIN EMR_UTAMA_PERIKSA AS t2
		  ON t1.ID_PEMERIKSAAN = t2.ID_PEMERIKSAAN
		  WHERE t2.NOREG = '$noreg_data' and t2.NORM = '$norm_data' AND t1.STATUS_DETAIL_PASIEN_RADIO = 'PROSES'";
			$this->db->query($sql);

			echo "YES";
		}
		else
		{
			$this->session->sess_destroy();
			$this->load->view('login/login');
		}
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
				                    );
							}
					echo json_encode($data);
	}*/

	function getDataById()
	{
		$id = $_GET['id'];
		$this->load->model('/app_load_data_table');
		$data = $this->app_load_data_table->getDataById($id);

		print json_encode($data);
	}

	function getDataByIdRadio()
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

	function getDataByIdSelesai()
	{
		$id = $this->input->post('id');
		$this->load->model('/app_load_data_table');
		$data = $this->app_load_data_table->getDataByIdSelesai1($id);

		$this->load->library('table');

		$this->table->set_heading('');

		$style = array('table_open'  => '<table>');
		$this->table->set_template($style);

		echo $this->table->generate($data);
	}
}
