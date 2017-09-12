<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class igd extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{

		}
		else
		{
			$this->session->sess_destroy();
			$this->load->view('login/login');
		}
	}

	function pasien($id_param)
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->model('/app_load_data_table');
			$royaldb_db = $this->load->database('royaldb', TRUE);

			$tgltoday = date('d-M-Y');
			$kodedokter = $this->session->userdata("kode_dokter");
			$d['dataTabledokter'] = $this->app_load_data_table->getAllDataBayarDok($kodedokter);
			$d['dataTabledokter2'] = $this->app_load_data_table->getAllDataBayarDok2($kodedokter);
/*
			$d['dataTable'] = $this->app_load_data_table->getDataHistori();
			$d['dataTable2'] = $this->app_load_data_table->getDataHistori2();
			$d['dataTable3'] = $this->app_load_data_table->getDataHistori3();
			$d['dataTable4'] = $this->app_load_data_table->getDataHistori4();
			$d['dataTable5'] = $this->app_load_data_table->getDataHistori5();
			*/
			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");
			$d['dataRadio'] = $this->app_load_data_table->getAllDataRadio();
			$d['dataLaboratorium'] = $this->app_load_data_table->getAllDataLaboratorium();
			$d['dataCheckUp'] = $this->app_load_data_table->getAllDataCheckUp();

			$d['namadokter']	= $this->session->userdata("nama_dokter");
			$d['kodedokter']	= $this->session->userdata("kode_dokter");

			$where['noreg'] = $id_param;
			$reg = $royaldb_db->get_where("rd_reg",$where)->row();

			$where2['NORM'] = $reg->norm;
			$pas = $royaldb_db->get_where("Pasien",$where2)->row();

			$lahir = date('Y-m-d',strtotime($pas->tgllahir));
			$today = date('Y-m-d');
			$usia = abs(strtotime($today) - strtotime($lahir));
			$years = floor($usia / (365*60*60*24));
			$months = floor(($usia - ($years * 365*60*60*24)) / (30*60*60*24));
			$days = floor(($usia - ($years * 365*60*60*24) - ($months*30*60*60*24))/ (60*60*24));

			$jeniskelamin = $pas->kdseks;
			if($jeniskelamin == 'L')
			{
				$d['jk'] = "Laki-Laki";
			}
			elseif($jeniskelamin == 'P')
			{
				$d['jk'] = "Perempuan";
			}
			else
			{
				$d['jk'] = "";
			}

			$d['noreg'] = $reg->noreg;
			$d['norm'] = $reg->norm;
			$d['nama'] = $pas->nama;
			$d['alamat'] = $pas->jalan;
			$d['alamat'] .= ", Gang: ";
			$d['alamat'] .= $pas->gang;
			$d['alamat'] .= ", RT: ";
			$d['alamat'] .= $pas->rt;
			$d['alamat'] .= ", RW: ";
			$d['alamat'] .= $pas->rw;
			$d['Tlahir'] = $pas->tmplahir;
			$d['Tlahir'] .= ", ";
			$d['Tgllahir'] = date('d-m-Y',strtotime($pas->tgllahir));
			$d['Utahun'] = $years;
			$d['Ubulan'] = $months;
			$d['Uhari'] = $days;


						$this->load->view('dashboard_igd/bg_header',$d);
						$this->load->view('igd/emr_sidebar',$d);
						$this->load->view('igd/igd',$d);
						$this->load->view('dashboard_igd/bg_footer',$d);

		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}
	function pasienUNKNOWN($id_param)
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->model('/app_load_data_table');

			$tgltoday = date('d-M-Y');
			$kodedokter = $this->session->userdata("kode_dokter");
			$d['dataTabledokter'] = $this->app_load_data_table->getAllDataBayarDok($kodedokter);
			$d['dataTabledokter2'] = $this->app_load_data_table->getAllDataBayarDok2($kodedokter);

			$d['dataTable'] = $this->app_load_data_table->getDataHistori();
			$d['dataTable2'] = $this->app_load_data_table->getDataHistori2();
			$d['dataTable3'] = $this->app_load_data_table->getDataHistori3();
			$d['dataTable4'] = $this->app_load_data_table->getDataHistori4();
			$d['dataTable5'] = $this->app_load_data_table->getDataHistori5();
			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");
			$d['dataRadio'] = $this->app_load_data_table->getAllDataRadio();
			$d['dataLaboratorium'] = $this->app_load_data_table->getAllDataLaboratorium();
			$d['dataCheckUp'] = $this->app_load_data_table->getAllDataCheckUp();

			$d['namadokter']	= $this->session->userdata("nama_dokter");
			$d['kodedokter']	= $this->session->userdata("kode_dokter");

			$where['NOREG'] = $id_param;
			$reg = $this->db->get_where("arm_register",$where)->row();

			$where['NOREG'] = $reg->NOREG;
			$regTuj = $this->db->get_where("arm_registerTujuan",$where)->row();

			$where2['NORM'] = $reg->NORM;
			$pas = $this->db->get_where("afarm_MstPasien",$where2)->row();

			$where3['CUSTNO'] = $reg->CUSTNO;
			$cus = $this->db->get_where("afarm_Customer",$where3)->row();

			$where4['KODEUNIT'] = $regTuj->REGTUJUAN;
   		$unitlay = $this->db->get_where("afarm_UnitLayanan",$where4)->row();

			$lahir = date('Y-m-d',strtotime($pas->TGLLAHIR));
			$today = date('Y-m-d');
			$usia = abs(strtotime($today) - strtotime($lahir));
			$years = floor($usia / (365*60*60*24));
			$months = floor(($usia - ($years * 365*60*60*24)) / (30*60*60*24));
			$days = floor(($usia - ($years * 365*60*60*24) - ($months*30*60*60*24))/ (60*60*24));

			$jeniskelamin = $pas->KELAMIN;
			if($jeniskelamin == 'L ')
			{
				$d['jk'] = "Laki-Laki";
			}
			elseif($jeniskelamin == 'P ')
			{
				$d['jk'] = "Perempuan";
			}
			else
			{
				$d['jk'] = "";
			}

			$d['noreg'] = $reg->NOREG;
			$d['norm'] = $reg->NORM;
			$d['nama'] = $pas->NAMA;
			$d['alamat'] = $pas->ALAMATPASIEN;
			$d['Tlahir'] = $pas->TMPTLAHIR;
			$d['KodeUnit'] = $regTuj->REGTUJUAN;
			$d['KodeUnit2'] = trim($regTuj->REGTUJUAN);
			$d['namaunit'] = $unitlay->NAMAUNIT;
			$d['Tlahir'] .= ", ";
			$d['Tgllahir'] = date('d-m-Y',strtotime($pas->TGLLAHIR));
			$d['Utahun'] = $years;
			$d['Ubulan'] = $months;
			$d['Uhari'] = $days;
			$d['nmcust'] = $cus->NMCUST;
			$d['kdcust'] = $cus->CUSTNO;
			$d['alergiobat'] = trim($pas->ALERGI);

			if (trim($regTuj->REGTUJUAN) == 'P02' || trim($regTuj->REGTUJUAN) == 'Q23' || trim($regTuj->REGTUJUAN) == 'Q26' || trim($regTuj->REGTUJUAN) == 'Q24')
			{
				if($this->db->get_where('EMR_UTAMA_PERIKSA', $where2)->num_rows() == 0)
				{
					$this->load->view('dashboard/bg_header',$d);
					$this->load->view('emr/emr_sidebar',$d);
					$this->load->view('emr/asesmen_awal_gigi',$d);
					$this->load->view('dashboard/bg_footer',$d);
				}
				else
				{
					$stats = (abs(strtotime($today)) - abs(strtotime($this->db->get("EMR_UTAMA_PERIKSA where NORM = '$reg->NORM' order by TANGGAL_PERIKSA desc")->row()->TANGGAL_PERIKSA)))/(60*60*24);
					if($stats >= 30)
					{
						$this->load->view('dashboard/bg_header',$d);
						$this->load->view('emr/emr_sidebar',$d);
						$this->load->view('emr/asesmen_awal_gigi',$d);
						$this->load->view('dashboard/bg_footer',$d);
					}
					else
					{
						$this->load->view('dashboard/bg_header',$d);
						$this->load->view('emr/emr_sidebar',$d);
						$this->load->view('emr/asesmen_ulang_gigi',$d);
						$this->load->view('dashboard/bg_footer',$d);
					}
				}
			}
			else if (trim($regTuj->REGTUJUAN) == 'R02')
			{
				if($this->db->get_where('EMR_UTAMA_PERIKSA', $where2)->num_rows() == 0)
				{
					$this->load->view('dashboard/bg_header',$d);
					$this->load->view('emr/emr_sidebar',$d);
					$this->load->view('emr/asesmen_awal_bidan',$d);
					$this->load->view('dashboard/bg_footer',$d);
				}
				else
				{
					$stats = (abs(strtotime($today)) - abs(strtotime($this->db->get("EMR_UTAMA_PERIKSA where NORM = '$reg->NORM' order by TANGGAL_PERIKSA desc")->row()->TANGGAL_PERIKSA)))/(60*60*24);
					if($stats >= 30)
					{
						$this->load->view('dashboard/bg_header',$d);
						$this->load->view('emr/emr_sidebar',$d);
						$this->load->view('emr/asesmen_awal_bidan',$d);
						$this->load->view('dashboard/bg_footer',$d);
					}
					else
					{
						$this->load->view('dashboard/bg_header',$d);
						$this->load->view('emr/emr_sidebar',$d);
						$this->load->view('emr/asesmen_ulang_bidan',$d);
						$this->load->view('dashboard/bg_footer',$d);
					}
				}
			}
			else
			{
				if($this->db->get_where('EMR_UTAMA_PERIKSA', $where2)->num_rows() == 0)
				{
					$this->load->view('dashboard/bg_header',$d);
					$this->load->view('emr/emr_sidebar',$d);
					$this->load->view('emr/asesmen_awal',$d);
					$this->load->view('dashboard/bg_footer',$d);
				}
				else
				{
					$stats = (abs(strtotime($today)) - abs(strtotime($this->db->get("EMR_UTAMA_PERIKSA where NORM = '$reg->NORM' order by TANGGAL_PERIKSA desc")->row()->TANGGAL_PERIKSA)))/(60*60*24);
					if($stats >= 30)
					{
						$this->load->view('dashboard/bg_header',$d);
						$this->load->view('emr/emr_sidebar',$d);
						$this->load->view('emr/asesmen_awal',$d);
						$this->load->view('dashboard/bg_footer',$d);
					}
					else
					{
						$this->load->view('dashboard/bg_header',$d);
						$this->load->view('emr/emr_sidebar',$d);
						$this->load->view('emr/asesmen_ulang',$d);
						$this->load->view('dashboard/bg_footer',$d);
					}
				}
			}
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function getAllObat()
  {
    	$searchTerm = $_REQUEST["q"];
    	$data = array();
	    $this->load->model('/app_load_data_table');
	    $rows = $this->app_load_data_table->getAllDataObat($searchTerm);
	    foreach( $rows as $row )
	    {
	        $data[] = array(
												'kodebarang' => trim($row['KODEBARANG']),
                        'namabarang' => trim($row['NAMABARANG']),
                        'value' => trim($row['NAMABARANG']),
                        'label' => trim($row['KODEBARANG'])
                    );
	    }
	    echo json_encode($data);
	}

	function getAllPasienAlergiObat()
  {

	    $term = $_REQUEST['q'];
	        $data = array();
	        $this->load->model('/app_load_data_table');
	        $rows = $this->app_load_data_table->getAllDataPasienAlergiObat($term);
	            foreach( $rows as $row )
	            {
	                $data[] = trim($row['NAMABARANG']);
	            }
	        echo json_encode($data);
	}

	function getAllDeskripsi()
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
	}

	function btnSelanjutnyaEMR_AWAL()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$EMR_ASESMEN_AWAL_statver = $this->input->post('EMR_ASESMEN_AWAL_statver');

			if($EMR_ASESMEN_AWAL_statver == "Perawat2")
			{
				$userPer = $this->input->post('EMR_ASESMEN_AWAL_userPerPerawat');
				$passPer = $this->input->post('EMR_ASESMEN_AWAL_passPerPerawat');
				if ($userPer == "" && $passPer == "")
				{
					echo "msg-UPPerKosongPerawatEMR_AWAL";
				}
				else if ($userPer == "")
				{
					echo "msg-UserPerKosongPerawatEMR_AWAL";
				}
				else if ($passPer == "")
				{
					echo "msg-PassPerKosongPerawatEMR_AWAL";
				}
				else
				{
					$second_db = $this->load->database('second', TRUE);

					$login['user1'] = $userPer;
					//$login['GRPUSER'] = 'PERAWAT';
					$login2['UserID'] = $userPer;
					$login2['Password'] = $passPer;
					$cek = $second_db->get_where('User', $login);
					$cek2 = $second_db->get_where('User', $login2);

					if($cek->num_rows()>0)
					{
						if($cek2->num_rows()>0)
						{
							echo "msg-Selanjutnya_AWAL";
						}
						else
						{
							echo "msg-PassPerSalahPerawatEMR_AWAL";
						}
					}
					else
					{
						echo "msg-UserPerSalahPerawatEMR_AWAL";
					}
				}
			}
			else
			{
				$userPer1 = $this->session->userdata("username");
				$passPer1 = $this->input->post('VerPassAsesmen');
				if ($passPer1 == "")
				{
					echo "msg-PassPer1KosongPerawatEMR_AWAL";
				}
				else
				{
					$second_db = $this->load->database('second', TRUE);
					$login['UserID'] = $userPer1;
					$login['Password'] = $passPer1;
					$cek3 = $second_db->get_where('User', $login);

					if($cek3->num_rows()>0)
					{
						echo "msg-Selanjutnya_AWAL";
					}
					else
					{
						echo "msg-PassPer1SalahPerawatEMR_AWAL";
					}
				}
			}
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function kode_inc_assesmen_awal_umum($code1,$kode)
	{
		$code = 'P-';
		$code .= $code1;
		$code .= '-';
		$code .= sprintf("%06s", $kode);
		return $code;
	}

	function get_id_asesmen_awal_umum($code1)
	{
		$maxid = 0;
		$row = $this->db->query("SELECT MAX(right(ID_PEMERIKSAAN,6)) as maxid FROM EMR_UTAMA_PERIKSA WHERE ID_PEMERIKSAAN LIKE '%$code1%'")->row();
		if ($row) {
				$maxid = $row->maxid;
		}
		return $maxid;
	}

	function btnSelanjutnyaEMR_AWAL_simpan_data()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$EMR_ASESMEN_AWAL_statver = $this->input->post('EMR_ASESMEN_AWAL_statver');
			$userPerlogin = $this->session->userdata("username");
			if($EMR_ASESMEN_AWAL_statver == "Perawat2")
			{
				$userPer = $this->input->post('EMR_ASESMEN_AWAL_userPerPerawat');
			}
			else
			{
				$userPer = $userPerlogin;
			}

			$code12 = $this->input->post('EMR_ASESMEN_AWAL_Norm');
			$code1 = trim($code12);

			$kode = $this->get_id_asesmen_awal_umum($code1);
			$kode = $kode + 1;

			$per['NORM'] = $code1;
			$per['NOREG'] = $this->input->post('EMR_ASESMEN_AWAL_Noreg');
			$per['KODEUNIT'] = $this->input->post('EMR_ASESMEN_AWAL_kodeunit');
			$per['TANGGAL_PERIKSA'] = date('d-M-Y');
			$per['JAM_PERIKSA'] = date('H:i:s');

			$per['USERNAME'] = $userPerlogin;
			$per['PENANGGUNG_JAWAB_PERAWAT'] = $userPer;
			$per['PENANGGUNG_JAWAB_DOKTER'] = "";
			$per['STATUS_PEMERIKSAAN'] = "ASESMEN_AWAL";
			$per['STATUS_PEMERIKSAAN2'] = "PERAWAT";
			$per['STATUS_LABORAT'] = "TIDAK ADA";
			$per['STATUS_RADIO'] = "TIDAK ADA";
			$per['STATUS_RUJUKAN'] = "TIDAK ADA";
			$per['STATUS_CHECKUP'] = "TIDAK ADA";
			$per['STATUS_SURAT_SAKIT'] = "TIDAK ADA";
			$per['STATUS_SURAT_SEHAT'] = "TIDAK ADA";
			$per['STATUS_OBAT'] = "TIDAK ADA";
			$per['KONTROL_KEMBALI'] = "";

      $id_pemeriksaan = $this->kode_inc_assesmen_awal_umum($code1,$kode);
			$per['ID_PEMERIKSAAN'] = $id_pemeriksaan;

			$hambatan_asesmen_awal = $this->input->post('EMR_ASESMEN_PERAWAT_RbtnHambatan2');
			$hambatan_asesmen_awal_text = $this->input->post('EMR_ASESMEN_PERAWAT_RbtnHambatan_text');

			if ($hambatan_asesmen_awal == 'Ya' )
			{
				$per1['HAMBATAN_KOMUNIKASI'] = $hambatan_asesmen_awal.", ".$hambatan_asesmen_awal_text;
			}
			else
			{
				$per1['HAMBATAN_KOMUNIKASI'] = $hambatan_asesmen_awal;
			}

			$per1['ID_PEMERIKSAAN'] = $id_pemeriksaan;
			$per1['SISTOLIK'] = $this->input->post('EMR_ASESMEN_PERAWAT_TDSistolik');
			$per1['DIASTOLIK'] = $this->input->post('EMR_ASESMEN_PERAWAT_TDDiastolik');
			$per1['NADI_1'] = $this->input->post('EMR_ASESMEN_PERAWAT_Nadi1');
			$per1['NADI_2'] = $this->input->post('EMR_ASESMEN_PERAWAT_Nadi3');
			$per1['SUHU_TUBUH'] = $this->input->post('EMR_ASESMEN_PERAWAT_SuhuTubuh');
			$per1['RESPIRATORY_1'] = $this->input->post('EMR_ASESMEN_PERAWAT_Respiratory1');
			$per1['RESPIRATORY_2'] = $this->input->post('EMR_ASESMEN_PERAWAT_Respiratory3');
			$per1['BERAT_BADAN'] = $this->input->post('EMR_ASESMEN_PERAWAT_BeratBadan');
			$per1['TINGGI_BADAN'] = $this->input->post('EMR_ASESMEN_PERAWAT_TinggiBadan');
			$per1['NILAI_BMI'] = $this->input->post('EMR_ASESMEN_PERAWAT_Nilai_BMI_text');
			$per1['KATEGORI_BMI'] = $this->input->post('EMR_ASESMEN_PERAWAT_Kategori_BMI_text');
			$umur_lingkar = $this->input->post('EMR_ASESMEN_PERAWAT_Umur_Lingkar');
			if ($umur_lingkar < 1)
			{
				$per1['LINGKAR_KEPALA'] = $this->input->post('EMR_ASESMEN_PERAWAT_Lingkar_Kepala');
			}
			else
			{
				$per1['LINGKAR_KEPALA'] = "";
			}

			$EMR_ASESMEN_PERAWAT_FungA2 = $this->input->post('EMR_ASESMEN_PERAWAT_FungA2');
			$EMR_ASESMEN_PERAWAT_FungB2 = $this->input->post('EMR_ASESMEN_PERAWAT_FungB2');
			$EMR_ASESMEN_PERAWAT_alatbantu = $this->input->post('EMR_ASESMEN_PERAWAT_alatbantu');

			if ($EMR_ASESMEN_PERAWAT_FungA2 == 'Jalan Dengan Menggunakan Alat Bantu. ' )
			{
				$EMR_ASESMEN_PERAWAT_FungA3 = "Jalan Dengan Menggunakan Alat Bantu. Alat Bantu Yang Digunakan Pasien Adalah ".$EMR_ASESMEN_PERAWAT_alatbantu;
			}
			else
			{
				$EMR_ASESMEN_PERAWAT_FungA3 = $EMR_ASESMEN_PERAWAT_FungA2;
			}

			if ($EMR_ASESMEN_PERAWAT_FungB2 == 'Ya' )
			{
				$EMR_ASESMEN_PERAWAT_FungB3 = "";
			}
			else
			{
				$EMR_ASESMEN_PERAWAT_FungB3 = " ".$EMR_ASESMEN_PERAWAT_FungB2;
			}

			$per1['KET_RESIKO_JATUH'] = "Cara Berjalan Pasien: ".$EMR_ASESMEN_PERAWAT_FungA3.". Dan Pasien".$EMR_ASESMEN_PERAWAT_FungB3." Menopang Saat Akan Duduk";
			$per1['HASIL_RESIKO_JATUH'] = $this->input->post('EMR_ASESMEN_PERAWAT_FungHasil_text');
			$per1['TINDAKAN_RESIKO_JATUH'] = $this->input->post('EMR_ASESMEN_PERAWAT_FungTindakan_text');

			$EMR_ASESMEN_PERAWAT_adaNyeri2 = $this->input->post('EMR_ASESMEN_PERAWAT_adaNyeri2');
			if ($EMR_ASESMEN_PERAWAT_adaNyeri2 == 'Ya')
			{
				$per1['KELUHAN_NYERI'] = "Pasien Memiliki Keluhan Nyeri";
				$EMR_ASESMEN_PERAWAT_umur_skala = $this->input->post('EMR_ASESMEN_PERAWAT_umur_skala');
				$EMR_ASESMEN_PERAWAT_SN_NIPSADua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_NIPSADua');
				$EMR_ASESMEN_PERAWAT_SN_NIPSBDua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_NIPSBDua');
				$EMR_ASESMEN_PERAWAT_SN_NIPSCDua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_NIPSCDua');
				$EMR_ASESMEN_PERAWAT_SN_NIPSDDua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_NIPSDDua');
				$EMR_ASESMEN_PERAWAT_SN_NIPSEDua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_NIPSEDua');
				$EMR_ASESMEN_PERAWAT_SN_NIPSFDua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_NIPSFDua');
				$EMR_ASESMEN_PERAWAT_SN_FLACCADua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_FLACCADua');
				$EMR_ASESMEN_PERAWAT_SN_FLACCBDua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_FLACCBDua');
				$EMR_ASESMEN_PERAWAT_SN_FLACCCDua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_FLACCCDua');
				$EMR_ASESMEN_PERAWAT_SN_FLACCDDua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_FLACCDDua');
				$EMR_ASESMEN_PERAWAT_SN_FLACCEDua = $this->input->post('EMR_ASESMEN_PERAWAT_SN_FLACCEDua');

				$EMR_ASESMEN_PERAWAT_CbtnBertambahParah1_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnBertambahParah1_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnBertambahParah1_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnBertambahParah1_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnBertambahParah1_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnBertambahParah1_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnBertambahParah2_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnBertambahParah2_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnBertambahParah2_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnBertambahParah2_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnBertambahParah2_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnBertambahParah2_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_textBertambahParah = $this->input->post('EMR_ASESMEN_PERAWAT_textBertambahParah');
				if ($EMR_ASESMEN_PERAWAT_textBertambahParah != '')
				{
					$EMR_ASESMEN_PERAWAT_textBertambahParah2 = $EMR_ASESMEN_PERAWAT_textBertambahParah.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_textBertambahParah2 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnBerkurang1_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnBerkurang1_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnBerkurang1_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang1_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnBerkurang1_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang1_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnBerkurang2_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnBerkurang2_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnBerkurang2_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang2_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnBerkurang2_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang2_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnBerkurang3_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnBerkurang3_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnBerkurang3_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang3_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnBerkurang3_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang3_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnBerkurang4_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnBerkurang4_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnBerkurang4_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang4_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnBerkurang4_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang4_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnBerkurang5_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnBerkurang5_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnBerkurang5_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang5_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnBerkurang5_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang5_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_textBertambahParah2 = $this->input->post('EMR_ASESMEN_PERAWAT_textBertambahParah2');
				if ($EMR_ASESMEN_PERAWAT_textBertambahParah2 != '')
				{
					$EMR_ASESMEN_PERAWAT_textBertambahParah3 = $EMR_ASESMEN_PERAWAT_textBertambahParah2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_textBertambahParah3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnGambaran1_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnGambaran1_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnGambaran1_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran1_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnGambaran1_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran1_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnGambaran2_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnGambaran2_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnGambaran2_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran2_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnGambaran2_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran2_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnGambaran3_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnGambaran3_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnGambaran2_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran3_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnGambaran3_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran3_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnGambaran4_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnGambaran4_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnGambaran4_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran4_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnGambaran4_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran4_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnGambaran5_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnGambaran5_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnGambaran5_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran5_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnGambaran5_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran5_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnGambaran6_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnGambaran6_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnGambaran6_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran6_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnGambaran6_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran6_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_CbtnGambaran7_simpan2 = $this->input->post('EMR_ASESMEN_PERAWAT_CbtnGambaran7_simpan2');
				if ($EMR_ASESMEN_PERAWAT_CbtnGambaran7_simpan2 != '')
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran7_simpan3 = $EMR_ASESMEN_PERAWAT_CbtnGambaran7_simpan2.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_CbtnGambaran7_simpan3 = "";
				}

				$EMR_ASESMEN_PERAWAT_textGambaran = $this->input->post('EMR_ASESMEN_PERAWAT_textGambaran');
				if ($EMR_ASESMEN_PERAWAT_textGambaran != '')
				{
					$EMR_ASESMEN_PERAWAT_textGambaran2 = $EMR_ASESMEN_PERAWAT_textGambaran.", ";
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_textGambaran2 = "";
				}

				$EMR_ASESMEN_PERAWAT_SNMenjalar1 = $this->input->post('EMR_ASESMEN_PERAWAT_SNMenjalar1');
				$EMR_ASESMEN_PERAWAT_SNMenjalar2 = $this->input->post('EMR_ASESMEN_PERAWAT_SNMenjalar2');
				$EMR_ASESMEN_PERAWAT_Menjalar2 = $this->input->post('EMR_ASESMEN_PERAWAT_Menjalar2');
				if ($EMR_ASESMEN_PERAWAT_Menjalar2 == 'Ya')
				{
					$EMR_ASESMEN_PERAWAT_Menjalar3 = " Dan Menjalar Pada ".$EMR_ASESMEN_PERAWAT_SNMenjalar2;
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_Menjalar3 = "Dan Tidak Menjalar";
				}

				$EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan2 = $this->input->post('EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan2');

				$EMR_ASESMEN_PERAWAT_RbtnSNsetiap2 = $this->input->post('EMR_ASESMEN_PERAWAT_RbtnSNsetiap2');
				if ($EMR_ASESMEN_PERAWAT_RbtnSNsetiap2 != '')
				{
					$EMR_ASESMEN_PERAWAT_RbtnSNsetiap3 = $EMR_ASESMEN_PERAWAT_RbtnSNsetiap2;
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_RbtnSNsetiap3 = "";
				}

				$EMR_ASESMEN_PERAWAT_SNlamawaktu = $this->input->post('EMR_ASESMEN_PERAWAT_SNlamawaktu');
				if ($EMR_ASESMEN_PERAWAT_SNlamawaktu != '')
				{
					$EMR_ASESMEN_PERAWAT_SNlamawaktu12 = $EMR_ASESMEN_PERAWAT_SNlamawaktu;
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_SNlamawaktu12 = "";
				}

				$EMR_ASESMEN_PERAWAT_RbtnSNselama2 = $this->input->post('EMR_ASESMEN_PERAWAT_RbtnSNselama2');
				if ($EMR_ASESMEN_PERAWAT_RbtnSNselama2 != '')
				{
					$EMR_ASESMEN_PERAWAT_RbtnSNselama3 = $EMR_ASESMEN_PERAWAT_RbtnSNselama2;
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_RbtnSNselama3 = "";
				}

				$EMR_ASESMEN_PERAWAT_SNlamawaktu2 = $this->input->post('EMR_ASESMEN_PERAWAT_SNlamawaktu2');
				if ($EMR_ASESMEN_PERAWAT_SNlamawaktu2 != '')
				{
					$EMR_ASESMEN_PERAWAT_SNlamawaktu3 = $EMR_ASESMEN_PERAWAT_SNlamawaktu2;
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_SNlamawaktu3 = "";
				}

				if ($EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan2 == 'Hilang Timbul')
				{
					$EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan3 = $EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan2.". Setiap berapa lama timbul nyeri? "
					.$EMR_ASESMEN_PERAWAT_RbtnSNsetiap3.$EMR_ASESMEN_PERAWAT_SNlamawaktu12.". Berapa lamanya waktu serangan? ".$EMR_ASESMEN_PERAWAT_RbtnSNselama3.
					$EMR_ASESMEN_PERAWAT_SNlamawaktu3;
				}
				else
				{
					$EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan3 = $EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan2;
				}

				if ($EMR_ASESMEN_PERAWAT_umur_skala < 1)
				{
					$ket_keluhan_nyeri = "Facial Expression (ekspresi wajah)? ".$EMR_ASESMEN_PERAWAT_SN_NIPSADua.".
					Cry (menangis)? ".$EMR_ASESMEN_PERAWAT_SN_NIPSBDua.". Breathing Patterns (pola pernafasan)?
					".$EMR_ASESMEN_PERAWAT_SN_NIPSCDua.". Arms(lengan)? ".$EMR_ASESMEN_PERAWAT_SN_NIPSDDua.".
					Legs(kaki)? ".$EMR_ASESMEN_PERAWAT_SN_NIPSEDua.". State of Arousal (kesadaran)? ".$EMR_ASESMEN_PERAWAT_SN_NIPSFDua;
				}
				else if ($EMR_ASESMEN_PERAWAT_umur_skala < 4)
				{
					$ket_keluhan_nyeri = "Face Expression (ekspresi wajah)? ".$EMR_ASESMEN_PERAWAT_SN_FLACCADua.".
					Leg (Kaki)? ".$EMR_ASESMEN_PERAWAT_SN_FLACCBDua.". Activity (Aktivitas)? ".$EMR_ASESMEN_PERAWAT_SN_FLACCCDua.".
					Cry (Menangis)? ".$EMR_ASESMEN_PERAWAT_SN_FLACCDDua.". Consolalability (respon terhadap himbauan)? ".$EMR_ASESMEN_PERAWAT_SN_FLACCEDua;
				}
				else
				{
					$ket_keluhan_nyeri = "Apa yang membuat nyeri bertambah parah? ".$EMR_ASESMEN_PERAWAT_CbtnBertambahParah1_simpan3.$EMR_ASESMEN_PERAWAT_CbtnBertambahParah2_simpan3.
					$EMR_ASESMEN_PERAWAT_textBertambahParah2.". Apa yang membuat nyeri berkurang? ".$EMR_ASESMEN_PERAWAT_CbtnBerkurang1_simpan3.$EMR_ASESMEN_PERAWAT_CbtnBerkurang2_simpan3.
					$EMR_ASESMEN_PERAWAT_CbtnBerkurang3_simpan3.$EMR_ASESMEN_PERAWAT_CbtnBerkurang4_simpan3.$EMR_ASESMEN_PERAWAT_CbtnBerkurang5_simpan3.$EMR_ASESMEN_PERAWAT_textBertambahParah3.
					". Gambaran rasa nyeri? ".$EMR_ASESMEN_PERAWAT_CbtnGambaran1_simpan3.$EMR_ASESMEN_PERAWAT_CbtnGambaran2_simpan3.$EMR_ASESMEN_PERAWAT_CbtnGambaran3_simpan3.$EMR_ASESMEN_PERAWAT_CbtnGambaran4_simpan3.
					$EMR_ASESMEN_PERAWAT_CbtnGambaran5_simpan3.$EMR_ASESMEN_PERAWAT_CbtnGambaran6_simpan3.$EMR_ASESMEN_PERAWAT_CbtnGambaran7_simpan3.$EMR_ASESMEN_PERAWAT_textGambaran2.
					". Lokasi nyeri? ".$EMR_ASESMEN_PERAWAT_SNMenjalar1.$EMR_ASESMEN_PERAWAT_Menjalar3.". Seberapa sering anda mengalami nyeri? ".$EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan3;
				}

				$per1['KET_KELUHAN_NYERI'] = $ket_keluhan_nyeri;
			}
			else
			{
				$per1['KELUHAN_NYERI'] = "Pasien Tidak Memiliki Keluhan Nyeri";
				$per1['KET_KELUHAN_NYERI'] = "";
			}

			$per1['SKOR_KELUHAN_NYERI'] = $this->input->post('EMR_ASESMEN_PERAWAT_SkorNyeri_text');
			$per1['SKALA_KELUHAN_NYERI'] = $this->input->post('EMR_ASESMEN_PERAWAT_SkalaNyeri_text');
			$per1['CATATAN_PERAWAT'] = $this->input->post('EMR_ASESMEN_PERAWAT_catatan');

			$aler2['ALERGI'] = $this->input->post('EMR_ASESMEN_PERAWAT_alergiobat');

			if($aler2['ALERGI'] == '')
			{

			}
			else
			{
				$aler['NORM'] = $code1;
				$get = $this->db->get_where("Afarm_MstPasien",$aler)->row();
				$aler2['ALERGI'] .= $get->ALERGI;
				$this->db->update('Afarm_MstPasien',$aler2,$aler);
			}

			$this->db->insert('EMR_UTAMA_PERIKSA',$per);
			$this->db->insert('EMR_HASIL_PERIKSA_UMUM',$per1);

			$EMR_ASESMEN_DOKTER_id_pemeriksaan = $id_pemeriksaan;
			$this->output->set_output(json_encode($EMR_ASESMEN_DOKTER_id_pemeriksaan));
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function kode_inc_obat_racik($id)
	{
		$code = 'RCK_';
		$code .= sprintf("%06s", $id);
		return $code;
	}

	function get_id_obat_racik()
	{
		$maxid = 0;
		$row = $this->db->query("SELECT MAX(right(ID_RACIK,6)) AS maxid FROM EMR_OBAT_RACIK")->row();
		if ($row) {
				$maxid = $row->maxid;
		}
		return $maxid;
	}

	function simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
	$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
	$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
	$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan)
	{
		if (count($EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan) > 0)
		{
				$kode = $this->get_id_obat_racik();
				$kode = $kode + 1;

				for($a=0; $a<count($EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan); $a++)
				{
					$dtObatRacik['ID_RACIK'] = $this->kode_inc_obat_racik($kode);
					$dtObatRacik['KET_JUMLAH_OBAT_RACIK'] = $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan[$a];
					$dtObatRacik['JUMLAH_OBAT_RACIK'] = $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan[$a];
					$dtObatRacik['ATURAN1_OBAT_RACIK'] = $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan[$a];
					$dtObatRacik['ATURAN2_OBAT_RACIK'] = $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan[$a];
					$dtObatRacik['ATURAN3_OBAT_RACIK'] = $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan[$a];
					$dtObatRacik['KETERANGAN1_OBAT_RACIK'] = $EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan[$a];
					$dtObatRacik['KETERANGAN2_OBAT_RACIK'] = $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan[$a];
					$dtObatRacik['LAIN_OBAT_RACIK'] = $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan[$a];

					$this->db->insert("EMR_OBAT_RACIK",$dtObatRacik);

					for($b=0; $b<count($EMR_ASESMEN_DOKTER_ObatidRacik_simpan); $b++)
					{
						if ($EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan[$a] == $EMR_ASESMEN_DOKTER_ObatidRacik_simpan[$b])
						{
							$dtObatBahan['ID_RACIK'] = $this->kode_inc_obat_racik($kode);
							$dtObatBahan['ID_OBAT_RACIK_BAHAN'] = $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan[$b];
							$dtObatBahan['NAMA_OBAT_RACIK_BAHAN'] = $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan[$b];
							$dtObatBahan['JUMLAH_OBAT_RACIK_BAHAN'] = $EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan[$b];
							$dtObatBahan['SATUAN_OBAT_RACIK_BAHAN'] = $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan[$b];

							$this->db->insert("EMR_OBAT_RACIK_BAHAN",$dtObatBahan);
						}
					};
					$kode = $kode + 1;
				};
		}
	}

	function simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
	$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
	$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan)
	{
		if (count($EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan) > 0)
		{
			for($i=0; $i<count($EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan); $i++)
			{
				$dtObatSatuan['ID_OBAT_SATUAN'] = $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan[$i];
				$dtObatSatuan['NAMA_OBAT_SATUAN'] = $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan[$i];
				$dtObatSatuan['JUMLAH_OBAT_SATUAN'] = $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan[$i];
				$dtObatSatuan['ATURAN1_OBAT_SATUAN'] = $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan[$i];
				$dtObatSatuan['ATURAN2_OBAT_SATUAN'] = $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan[$i];
				$dtObatSatuan['ATURAN3_OBAT_SATUAN'] = $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan[$i];
				$dtObatSatuan['KETERANGAN1_OBAT_SATUAN'] = $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan[$i];
				$dtObatSatuan['KETERANGAN2_OBAT_SATUAN'] = $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan[$i];
				$dtObatSatuan['LAIN_OBAT_SATUAN'] = $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan[$i];

				$this->db->insert("EMR_OBAT_SATUAN",$dtObatSatuan);
			};
		}
	}

	function simpan_detail_pasien_radio_1_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio)
	{
	  for($i=0; $i<count($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $place_id = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $place_id;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	  };

		$dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

		$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

	  $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	}

	function simpan_detail_pasien_radio_2_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $dtRadio)
	{
	  for($i=0; $i<count($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $place_id = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $place_id;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	  };

	  $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	}

	function simpan_detail_pasien_radio_3_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio)
	{
	  for($i=0; $i<count($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $place_id = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $place_id;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	  };

	  $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	}

	function simpan_detail_pasien_radio_4_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $dtRadio)
	{
	  for($i=0; $i<count($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $place_id = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $place_id;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	  };
	}

	function simpan_detail_pasien_labo_1_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain2, $dtLaborat)
	{
	  for($i=0; $i<count($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan); $i++)
	  {
	    $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_LABORATORIUM', $EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_LABORATORIUM')->result_array();

	    foreach($query as $row)
	    {
	      $place_id = $row['NM_DT_LABORATORIUM'];
	    }

	    $dtLaborat['NM_DT_LABORATORIUM'] = $place_id;
	    $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);
	  };

	  $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan;
	  $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain2;
	  $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);
	}

	function simpan_detail_pasien_labo_2_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $dtLaborat)
	{
	  for($i=0; $i<count($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan); $i++)
	  {
	    $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_LABORATORIUM', $EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_LABORATORIUM')->result_array();

	    foreach($query as $row)
	    {
	      $place_id = $row['NM_DT_LABORATORIUM'];
	    }

	    $dtLaborat['NM_DT_LABORATORIUM'] = $place_id;
	    $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);
	  };
	}

	function simpan_detail_pasien_checkup_1_ases_awal($EMR_ASESMEN_DOKTER_checkup_checkbox_simpan, $EMR_ASESMEN_DOKTER_Checkup_lain_simpan, $EMR_ASESMEN_DOKTER_Checkup_lain2, $dtCheckup)
	{
		for($i=0; $i<count($EMR_ASESMEN_DOKTER_checkup_checkbox_simpan); $i++)
		{
			$dtCheckup['KODE_DT_CHECKUP'] = $EMR_ASESMEN_DOKTER_checkup_checkbox_simpan[$i];

			$this->db->select('*');
			$this->db->where_in('KODE_DT_CHECKUP', $EMR_ASESMEN_DOKTER_checkup_checkbox_simpan[$i]);
			$query = $this->db->get('EMR_DT_CHECKUP')->result_array();

			foreach($query as $row)
			{
				$place_id = $row['NM_DT_CHECKUP'];
			}

			$dtCheckup['NM_DT_CHECKUP'] = $place_id;
			$this->db->insert("EMR_DETAIL_PASIEN_CHECKUP",$dtCheckup);
		};

		$dtCheckup['KODE_DT_CHECKUP'] = $EMR_ASESMEN_DOKTER_Checkup_lain_simpan;
		$dtCheckup['NM_DT_CHECKUP'] = $EMR_ASESMEN_DOKTER_Checkup_lain2;
		$this->db->insert("EMR_DETAIL_PASIEN_CHECKUP",$dtCheckup);
	}

	function simpan_detail_pasien_checkup_2_ases_awal($EMR_ASESMEN_DOKTER_checkup_checkbox_simpan, $dtCheckup)
	{
		for($i=0; $i<count($EMR_ASESMEN_DOKTER_checkup_checkbox_simpan); $i++)
		{
			$dtCheckup['KODE_DT_CHECKUP'] = $EMR_ASESMEN_DOKTER_checkup_checkbox_simpan[$i];

			$this->db->select('*');
			$this->db->where_in('KODE_DT_CHECKUP', $EMR_ASESMEN_DOKTER_checkup_checkbox_simpan[$i]);
			$query = $this->db->get('EMR_DT_CHECKUP')->result_array();

			foreach($query as $row)
			{
				$place_id = $row['NM_DT_CHECKUP'];
			}

			$dtCheckup['NM_DT_CHECKUP'] = $place_id;
			$this->db->insert("EMR_DETAIL_PASIEN_CHECKUP",$dtCheckup);
		};
	}

	function btnDokterEMR_AWAL_simpan_data()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$idpemeriksaan = $this->input->post('EMR_ASESMEN_DOKTER_id_pemeriksaan');
			$status = 'BARU';

			//keluhan utama
			$EMR_ASESMEN_DOKTER_Keluhanutama1_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Keluhanutama1_simpan');
			if ($EMR_ASESMEN_DOKTER_Keluhanutama1_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama1_simpan2 = $EMR_ASESMEN_DOKTER_Keluhanutama1_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama1_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_Keluhanutama2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Keluhanutama2_simpan');
			if ($EMR_ASESMEN_DOKTER_Keluhanutama2_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama2_simpan2 = $EMR_ASESMEN_DOKTER_Keluhanutama2_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama2_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_Keluhanutama3_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Keluhanutama3_simpan');
			if ($EMR_ASESMEN_DOKTER_Keluhanutama3_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama3_simpan2 = $EMR_ASESMEN_DOKTER_Keluhanutama3_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama3_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_Keluhanutama4_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Keluhanutama4_simpan');
			if ($EMR_ASESMEN_DOKTER_Keluhanutama4_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama4_simpan2 = $EMR_ASESMEN_DOKTER_Keluhanutama4_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama4_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_Keluhanutama5_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Keluhanutama5_simpan');
			if ($EMR_ASESMEN_DOKTER_Keluhanutama5_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama5_simpan2 = $EMR_ASESMEN_DOKTER_Keluhanutama5_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama5_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_Keluhanutama6_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Keluhanutama6_simpan');
			if ($EMR_ASESMEN_DOKTER_Keluhanutama6_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama6_simpan2 = $EMR_ASESMEN_DOKTER_Keluhanutama6_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama6_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_Keluhanutama7_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Keluhanutama7_simpan');
			if ($EMR_ASESMEN_DOKTER_Keluhanutama7_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama7_simpan2 = $EMR_ASESMEN_DOKTER_Keluhanutama7_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama7_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_Keluhanutama8 = $this->input->post('EMR_ASESMEN_DOKTER_Keluhanutama8');
			if ($EMR_ASESMEN_DOKTER_Keluhanutama8 != '')
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama82 = $EMR_ASESMEN_DOKTER_Keluhanutama8.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_Keluhanutama82 = "";
			}

			//riwayat penyakit dahulu
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5_simpan.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA6 = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA6');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA6 != '')
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA62 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA6.", ";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA62 = "";
			}
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3_simpan2 != '' ||
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA62 != '')
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu_simpan = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1_simpan2.$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2_simpan2.$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3_simpan2.
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4_simpan2.$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5_simpan2.$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA62;
			}
			else
			{
				$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA7_simpan');
			}

			//riwayat penyakit keluarga
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1_simpan != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1_simpan.", ";
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2_simpan != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2_simpan.", ";
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3_simpan != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3_simpan.", ";
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4_simpan != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4_simpan.", ";
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5_simpan != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5_simpan.", ";
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB6 = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB6');
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB6 != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB62 = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB6.", ";
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB62 = "";
			}
			if ($EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3_simpan2 != '' ||
			$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB62 != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitKeluarga_simpan = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1_simpan2.$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2_simpan2.$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3_simpan2.
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4_simpan2.$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5_simpan2.$EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB62;
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatPenyakitKeluarga_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB7_simpan');
			}

			//riwayat sosial
			$EMR_ASESMEN_DOKTER_RiwayatSosial2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatSosial2_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatSosial2_simpan != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatSosial2_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatSosial2_simpan.", ";
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatSosial2_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatSosial3_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatSosial3_simpan');
			if ($EMR_ASESMEN_DOKTER_RiwayatSosial3_simpan != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatSosial3_simpan2 = $EMR_ASESMEN_DOKTER_RiwayatSosial2_simpan.", ";
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatSosial3_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_RiwayatSosial4 = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatSosial4');
			if ($EMR_ASESMEN_DOKTER_RiwayatSosial4 != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatSosial42 = $EMR_ASESMEN_DOKTER_RiwayatSosial4.", ";
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatSosial42 = "";
			}
			if ($EMR_ASESMEN_DOKTER_RiwayatSosial2_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatSosial3_simpan2 != '' || $EMR_ASESMEN_DOKTER_RiwayatSosial42 != '')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatSosial_simpan = $EMR_ASESMEN_DOKTER_RiwayatSosial2_simpan2.$EMR_ASESMEN_DOKTER_RiwayatSosial3_simpan2.$EMR_ASESMEN_DOKTER_RiwayatSosial42;
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatSosial_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatSosial1_simpan');
			}

			//riwayat tumbuh kembang
			$EMR_ASESMEN_DOKTER_RiwayatTumbuh1 = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatTumbuh1');
			if ($EMR_ASESMEN_DOKTER_RiwayatTumbuh1 == 'Baik')
			{
			  $EMR_ASESMEN_DOKTER_RiwayatTumbuh1_simpan = $EMR_ASESMEN_DOKTER_RiwayatTumbuh1;
			}
			else
			{
			  $EMR_ASESMEN_DOKTER_RiwayatTumbuh1_simpan = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lainnya');
			}
			$EMR_ASESMEN_DOKTER_RiwayatTumbuh = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatTumbuh');
			if ($this->input->post('EMR_ASESMEN_umur') < 14)
			{
				$EMR_ASESMEN_DOKTER_RiwayatTumbuhKembangSimpan = "Riwayat tumbuh kembang pasien? ".$EMR_ASESMEN_DOKTER_RiwayatTumbuh1_simpan." Imunisasi pasien? ".$EMR_ASESMEN_DOKTER_RiwayatTumbuh;
			}
			else
			{
				$EMR_ASESMEN_DOKTER_RiwayatTumbuhKembangSimpan = "";
			}

			//pemeriksaan fisik
			$EMR_ASESMEN_DOKTER_KodeUnit_SP = $this->input->post('EMR_ASESMEN_DOKTER_KodeUnit_SP');

			//awal kepala
			$EMR_ASESMEN_DOKTER_btnAnemis = $this->input->post('EMR_ASESMEN_DOKTER_btnAnemis');
			$EMR_ASESMEN_DOKTER_btnIkterus = $this->input->post('EMR_ASESMEN_DOKTER_btnIkterus');
			$EMR_ASESMEN_DOKTER_btnCyanosis = $this->input->post('EMR_ASESMEN_DOKTER_btnCyanosis');
			$EMR_ASESMEN_DOKTER_btnDipsneo = $this->input->post('EMR_ASESMEN_DOKTER_btnDipsneo');
			$EMR_ASESMEN_DOKTER_btnUUK = $this->input->post('EMR_ASESMEN_DOKTER_btnUUK');
			$EMR_ASESMEN_DOKTER_btnUUB = $this->input->post('EMR_ASESMEN_DOKTER_btnUUB');
			if ($this->input->post('EMR_ASESMEN_umur') < 1.5)
			{
				$EMR_ASESMEN_DOKTER_Ubun2 = "/UUK: ".$EMR_ASESMEN_DOKTER_btnUUK."/UUB: ".$EMR_ASESMEN_DOKTER_btnUUB;
			}
			else
			{
				$EMR_ASESMEN_DOKTER_Ubun2 = "";
			}
			$EMR_ASESMEN_DOKTER_pupilstat = $this->input->post('EMR_ASESMEN_DOKTER_pupilstat');
			$EMR_ASESMEN_DOKTER_pupilKanan = $this->input->post('EMR_ASESMEN_DOKTER_pupilKanan');
			$EMR_ASESMEN_DOKTER_pupilKiri = $this->input->post('EMR_ASESMEN_DOKTER_pupilKiri');
			$EMR_ASESMEN_DOKTER_btnCahayaKanan = $this->input->post('EMR_ASESMEN_DOKTER_btnCahayaKanan');
			$EMR_ASESMEN_DOKTER_btnCahayaKiri = $this->input->post('EMR_ASESMEN_DOKTER_btnCahayaKiri');
			$EMR_ASESMEN_DOKTER_KepalaLeher = $this->input->post('EMR_ASESMEN_DOKTER_KepalaLeher');

			$EMR_ASESMEN_DOKTER_PeFi_2_CK_simpan = $this->input->post('EMR_ASESMEN_DOKTER_PeFi_2_CK_simpan');

			$EMR_ASESMEN_DOKTER_PemeriksaanKepala = "Anemis: ".$EMR_ASESMEN_DOKTER_btnAnemis."/Ikterus: ".$EMR_ASESMEN_DOKTER_btnIkterus."/Cyanosis: ".$EMR_ASESMEN_DOKTER_btnCyanosis.
			"/Dipsneo: ".$EMR_ASESMEN_DOKTER_btnDipsneo.$EMR_ASESMEN_DOKTER_Ubun2."/Status Pupil: ".$EMR_ASESMEN_DOKTER_pupilstat."/Pupil Kanan: ".$EMR_ASESMEN_DOKTER_pupilKanan." mm/Pupil Kiri: ".$EMR_ASESMEN_DOKTER_pupilKiri.
			" mm/Cahaya Kanan: ".$EMR_ASESMEN_DOKTER_btnCahayaKanan."/Cahaya Kiri: ".$EMR_ASESMEN_DOKTER_btnCahayaKiri."/Lain-Lain: ".$EMR_ASESMEN_DOKTER_KepalaLeher;

			//awal thorax (cor)
			$EMR_ASESMEN_DOKTER_CorStatus = $this->input->post('EMR_ASESMEN_DOKTER_CorStatus');
			$EMR_ASESMEN_DOKTER_CorSplit1 = $this->input->post('EMR_ASESMEN_DOKTER_CorSplit1');
			$EMR_ASESMEN_DOKTER_Cor2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Cor2_simpan');
			$EMR_ASESMEN_DOKTER_Cor3_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Cor3_simpan');
			if ($EMR_ASESMEN_DOKTER_CorStatus == "Tidak")
			{
				$EMR_ASESMEN_DOKTER_CorSplit_Simpan = $EMR_ASESMEN_DOKTER_CorSplit1;
			}
			else
			{
				if($EMR_ASESMEN_DOKTER_Cor2_simpan != '')
				{
					if ($EMR_ASESMEN_DOKTER_Cor3_simpan != '')
					{
						$EMR_ASESMEN_DOKTER_CorSplit_Simpan = $EMR_ASESMEN_DOKTER_Cor2_simpan." Dan ".$EMR_ASESMEN_DOKTER_Cor3_simpan;
					}
					else
					{
						$EMR_ASESMEN_DOKTER_CorSplit_Simpan = $EMR_ASESMEN_DOKTER_Cor2_simpan;
					}
				}
				else
				{
					if ($EMR_ASESMEN_DOKTER_Cor3_simpan != '')
					{
						$EMR_ASESMEN_DOKTER_CorSplit_Simpan = $EMR_ASESMEN_DOKTER_Cor3_simpan;
					}
				}
			}
			$EMR_ASESMEN_DOKTER_CorReg = $this->input->post('EMR_ASESMEN_DOKTER_CorReg');
			$EMR_ASESMEN_DOKTER_btnMurmur = $this->input->post('EMR_ASESMEN_DOKTER_btnMurmur');
			$EMR_ASESMEN_DOKTER_btnMurmurText = $this->input->post('EMR_ASESMEN_DOKTER_btnMurmurText');
			if ($EMR_ASESMEN_DOKTER_btnMurmur == "+")
			{
				$EMR_ASESMEN_DOKTER_btnMurmur_Simpan = $EMR_ASESMEN_DOKTER_btnMurmur." (".$EMR_ASESMEN_DOKTER_btnMurmurText.")";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_btnMurmur_Simpan = $EMR_ASESMEN_DOKTER_btnMurmur;
			}
			$EMR_ASESMEN_DOKTER_btnGallop = $this->input->post('EMR_ASESMEN_DOKTER_btnGallop');

			$EMR_ASESMEN_DOKTER_PemeriksaanThorCor = $EMR_ASESMEN_DOKTER_CorSplit_Simpan."; ".$EMR_ASESMEN_DOKTER_CorReg."/Murmur: ".
			$EMR_ASESMEN_DOKTER_btnMurmur_Simpan."/Gallop: ".$EMR_ASESMEN_DOKTER_btnGallop;

			//awal thorax pulmo
			$EMR_ASESMEN_DOKTER_btnVesikuler1 = $this->input->post('EMR_ASESMEN_DOKTER_btnVesikuler1');
			$EMR_ASESMEN_DOKTER_btnVesikuler2 = $this->input->post('EMR_ASESMEN_DOKTER_btnVesikuler2');
			$EMR_ASESMEN_DOKTER_btnVesikuler3 = $this->input->post('EMR_ASESMEN_DOKTER_btnVesikuler3');
			$EMR_ASESMEN_DOKTER_btnVesikuler4 = $this->input->post('EMR_ASESMEN_DOKTER_btnVesikuler4');
			$EMR_ASESMEN_DOKTER_btnVesikuler5 = $this->input->post('EMR_ASESMEN_DOKTER_btnVesikuler5');
			$EMR_ASESMEN_DOKTER_btnVesikuler6 = $this->input->post('EMR_ASESMEN_DOKTER_btnVesikuler6');
			$EMR_ASESMEN_DOKTER_btnRhonki1 = $this->input->post('EMR_ASESMEN_DOKTER_btnRhonki1');
			$EMR_ASESMEN_DOKTER_btnRhonki2 = $this->input->post('EMR_ASESMEN_DOKTER_btnRhonki2');
			$EMR_ASESMEN_DOKTER_btnRhonki3 = $this->input->post('EMR_ASESMEN_DOKTER_btnRhonki3');
			$EMR_ASESMEN_DOKTER_btnRhonki4 = $this->input->post('EMR_ASESMEN_DOKTER_btnRhonki4');
			$EMR_ASESMEN_DOKTER_btnRhonki5 = $this->input->post('EMR_ASESMEN_DOKTER_btnRhonki5');
			$EMR_ASESMEN_DOKTER_btnRhonki6 = $this->input->post('EMR_ASESMEN_DOKTER_btnRhonki6');
			$EMR_ASESMEN_DOKTER_btnWheezing1 = $this->input->post('EMR_ASESMEN_DOKTER_btnWheezing1');
			$EMR_ASESMEN_DOKTER_btnWheezing2 = $this->input->post('EMR_ASESMEN_DOKTER_btnWheezing2');
			$EMR_ASESMEN_DOKTER_btnWheezing3 = $this->input->post('EMR_ASESMEN_DOKTER_btnWheezing3');
			$EMR_ASESMEN_DOKTER_btnWheezing4 = $this->input->post('EMR_ASESMEN_DOKTER_btnWheezing4');
			$EMR_ASESMEN_DOKTER_btnWheezing5 = $this->input->post('EMR_ASESMEN_DOKTER_btnWheezing5');
			$EMR_ASESMEN_DOKTER_btnWheezing6 = $this->input->post('EMR_ASESMEN_DOKTER_btnWheezing6');
			$EMR_ASESMEN_DOKTER_btnretraksiKanan = $this->input->post('EMR_ASESMEN_DOKTER_btnretraksiKanan');
			$EMR_ASESMEN_DOKTER_btnretraksiKiri = $this->input->post('EMR_ASESMEN_DOKTER_btnretraksiKiri');
			$EMR_ASESMEN_DOKTER_ThoraxCorLain = $this->input->post('EMR_ASESMEN_DOKTER_ThoraxCorLain');

			$EMR_ASESMEN_DOKTER_PemeriksaanThorPulmo = "Vesikuler: Kanan Atas(".$EMR_ASESMEN_DOKTER_btnVesikuler1."); Kanan Tengah(".$EMR_ASESMEN_DOKTER_btnVesikuler3."); Kanan Bawah(".
			$EMR_ASESMEN_DOKTER_btnVesikuler5."); Kiri Atas(".$EMR_ASESMEN_DOKTER_btnVesikuler2."); Kiri Tengah(".$EMR_ASESMEN_DOKTER_btnVesikuler4."); Kiri Bawah(".$EMR_ASESMEN_DOKTER_btnVesikuler6.
			") /Rhonki: Kanan Atas(".$EMR_ASESMEN_DOKTER_btnRhonki1."); Kanan Tengah(".$EMR_ASESMEN_DOKTER_btnRhonki3."); Kanan Bawah(".$EMR_ASESMEN_DOKTER_btnRhonki5."); Kiri Atas(".
			$EMR_ASESMEN_DOKTER_btnRhonki2."); Kiri Tengah(".$EMR_ASESMEN_DOKTER_btnRhonki4."); Kiri Bawah(".$EMR_ASESMEN_DOKTER_btnRhonki6.") /Wheezing: Kanan Atas(".$EMR_ASESMEN_DOKTER_btnWheezing1.
			"); Kanan Tengah(".$EMR_ASESMEN_DOKTER_btnWheezing3."); Kanan Bawah(".$EMR_ASESMEN_DOKTER_btnWheezing5."); Kiri Atas(".$EMR_ASESMEN_DOKTER_btnWheezing2."); Kiri Tengah(".
			$EMR_ASESMEN_DOKTER_btnWheezing4."); Kiri Bawah(".$EMR_ASESMEN_DOKTER_btnWheezing6.") /Retraksi Intercostal: ".$EMR_ASESMEN_DOKTER_btnretraksiKanan."; ".
			$EMR_ASESMEN_DOKTER_btnretraksiKiri."/Lain: ".$EMR_ASESMEN_DOKTER_ThoraxCorLain;

			//awal abdomen
			$EMR_ASESMEN_DOKTER_btnAbdomen1 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen1');
			$EMR_ASESMEN_DOKTER_btnAbdomen1E = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen1E');
			if ($EMR_ASESMEN_DOKTER_btnAbdomen1 != "Lain-lain")
			{
				$EMR_ASESMEN_DOKTER_btnAbdomen1_simpan = $EMR_ASESMEN_DOKTER_btnAbdomen1." (".$EMR_ASESMEN_DOKTER_btnAbdomen1E.")";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_btnAbdomen1_simpan = $EMR_ASESMEN_DOKTER_btnAbdomen1;
			}
			$EMR_ASESMEN_DOKTER_btnAbdomen2 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen2');
			$EMR_ASESMEN_DOKTER_btnAbdomen3 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen3');
			$EMR_ASESMEN_DOKTER_btnAbdomen4 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen4');
			$EMR_ASESMEN_DOKTER_btnAbdomen5 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen5');
			$EMR_ASESMEN_DOKTER_btnAbdomen6 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen6');
			$EMR_ASESMEN_DOKTER_btnAbdomen7Radio = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen7Radio');
			$EMR_ASESMEN_DOKTER_btnAbdomen7C = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen7C');
			if ($EMR_ASESMEN_DOKTER_btnAbdomen7Radio == "Teraba")
			{
				$EMR_ASESMEN_DOKTER_btnAbdomen7Radio_simpan = $EMR_ASESMEN_DOKTER_btnAbdomen7Radio." (".$EMR_ASESMEN_DOKTER_btnAbdomen7C.")";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_btnAbdomen7Radio_simpan = $EMR_ASESMEN_DOKTER_btnAbdomen7Radio;
			}
			$EMR_ASESMEN_DOKTER_btnAbdomen8Radio = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen8Radio');
			$EMR_ASESMEN_DOKTER_btnAbdomen8C = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen8C');
			if ($EMR_ASESMEN_DOKTER_btnAbdomen8Radio == "Teraba")
			{
				$EMR_ASESMEN_DOKTER_btnAbdomen8Radio_simpan = $EMR_ASESMEN_DOKTER_btnAbdomen8Radio." (".$EMR_ASESMEN_DOKTER_btnAbdomen8C.")";
			}
			else
			{
				$EMR_ASESMEN_DOKTER_btnAbdomen8Radio_simpan = $EMR_ASESMEN_DOKTER_btnAbdomen8Radio;
			}
			$EMR_ASESMEN_DOKTER_AbdomenLainChb_simpan = $this->input->post('EMR_ASESMEN_DOKTER_AbdomenLainChb_simpan');
			if ($EMR_ASESMEN_DOKTER_AbdomenLainChb_simpan != '')
			{
				$EMR_ASESMEN_DOKTER_btnAbdomen9 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen9');
				$EMR_ASESMEN_DOKTER_btnAbdomen10 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen10');
				$EMR_ASESMEN_DOKTER_btnAbdomen11 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen11');
				$EMR_ASESMEN_DOKTER_btnAbdomenText1= $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomenText1');
				$EMR_ASESMEN_DOKTER_AbdomenLainChb_simpan2 = "Shifting Dullness (".$EMR_ASESMEN_DOKTER_btnAbdomen9.") /Nyeri Tekan Mc burney (".
				$EMR_ASESMEN_DOKTER_btnAbdomen10.") /Murphy Sign (".$EMR_ASESMEN_DOKTER_btnAbdomen11." /Lain-Lain: ".$EMR_ASESMEN_DOKTER_btnAbdomenText1;
			}
			else
			{
				$EMR_ASESMEN_DOKTER_AbdomenLainChb_simpan2 = "";
			}
			$EMR_ASESMEN_DOKTER_btnAbdomen12 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen12');
			$EMR_ASESMEN_DOKTER_btnAbdomen13 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen13');
			$EMR_ASESMEN_DOKTER_btnAbdomen14 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen14');
			$EMR_ASESMEN_DOKTER_btnAbdomen15 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen15');
			$EMR_ASESMEN_DOKTER_btnAbdomen16 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen16');
			$EMR_ASESMEN_DOKTER_btnAbdomen17 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen17');
			$EMR_ASESMEN_DOKTER_btnAbdomen18 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen18');
			$EMR_ASESMEN_DOKTER_btnAbdomen19 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen19');
			$EMR_ASESMEN_DOKTER_btnAbdomen20 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen20');
			$EMR_ASESMEN_DOKTER_btnAbdomen2 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen2');
			$EMR_ASESMEN_DOKTER_btnAbdomen3 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen3');
			$EMR_ASESMEN_DOKTER_btnAbdomen3 = $this->input->post('EMR_ASESMEN_DOKTER_btnAbdomen3');

			//$EMR_ASESMEN_DOKTER_PemeriksaanAbdomen = "Bising Usus: ".$EMR_ASESMEN_DOKTER_btnAbdomen1_simpan." /Meteorimus: ".$EMR_ASESMEN_DOKTER_btnAbdomen2." /Flat:"..""..""..""..""..""..""..""..""..""..""..""..;

			if ($EMR_ASESMEN_DOKTER_KodeUnit_SP == 'P01' || $EMR_ASESMEN_DOKTER_KodeUnit_SP == 'Q04' || $EMR_ASESMEN_DOKTER_KodeUnit_SP == 'Q01' || $EMR_ASESMEN_DOKTER_KodeUnit_SP == 'Q03')
			{
				$EMR_ASESMEN_DOKTER_PemeriksaanKepala2 = $EMR_ASESMEN_DOKTER_PemeriksaanKepala;
				$EMR_ASESMEN_DOKTER_PemeriksaanThorCor2 = $EMR_ASESMEN_DOKTER_PemeriksaanThorCor;
				$EMR_ASESMEN_DOKTER_PemeriksaanThorPulmo2 = $EMR_ASESMEN_DOKTER_PemeriksaanThorPulmo;
			}
			else
			{
				if ($EMR_ASESMEN_DOKTER_PeFi_2_CK_simpan != '')
				{
					$EMR_ASESMEN_DOKTER_PemeriksaanKepala2 = $EMR_ASESMEN_DOKTER_PemeriksaanKepala;
					$EMR_ASESMEN_DOKTER_PemeriksaanThorCor2 = $EMR_ASESMEN_DOKTER_PemeriksaanThorCor;
					$EMR_ASESMEN_DOKTER_PemeriksaanThorPulmo2 = $EMR_ASESMEN_DOKTER_PemeriksaanThorPulmo;
				}
				else
				{
					$EMR_ASESMEN_DOKTER_PemeriksaanKepala2 = "Tidak Dilakukan Pemeriksaan";
					$EMR_ASESMEN_DOKTER_PemeriksaanThorCor2 = "Tidak Dilakukan Pemeriksaan";
					$EMR_ASESMEN_DOKTER_PemeriksaanThorPulmo2 = "Tidak Dilakukan Pemeriksaan";
				}
			}

			$dok1['STATUS_OBAT'] = $status;
			$dok1['PENANGGUNG_JAWAB_DOKTER'] = $this->input->post('EMR_ASESMEN_AWAL_KodeDokter');
			$dok1['STATUS_PEMERIKSAAN2'] = "DOKTER";

			$dok2['KELUHAN_UTAMA'] = $EMR_ASESMEN_DOKTER_Keluhanutama1_simpan2.$EMR_ASESMEN_DOKTER_Keluhanutama2_simpan2.$EMR_ASESMEN_DOKTER_Keluhanutama3_simpan2.
			$EMR_ASESMEN_DOKTER_Keluhanutama4_simpan2.$EMR_ASESMEN_DOKTER_Keluhanutama5_simpan2.$EMR_ASESMEN_DOKTER_Keluhanutama6_simpan2.$EMR_ASESMEN_DOKTER_Keluhanutama7_simpan2.
			$EMR_ASESMEN_DOKTER_Keluhanutama82;
			$dok2['RIWAYAT_PENYAKIT_SEKARANG'] = $this->input->post('EMR_ASESMEN_DOKTER_RiwayatPenyakitSekarang');
			$dok2['RIWAYAT_PENYAKIT_DAHULU'] = $EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu_simpan;
			$dok2['RIWAYAT_PENYAKIT_KELUARGA'] = $EMR_ASESMEN_DOKTER_RiwayatPenyakitKeluarga_simpan;
			$dok2['RIWAYAT_SOSIAL'] = $EMR_ASESMEN_DOKTER_RiwayatSosial_simpan;
			$dok2['RIWAYAT_TUMBUH_KEMBANG'] = $EMR_ASESMEN_DOKTER_RiwayatTumbuhKembangSimpan;
			$dok2['KEADAAN_UMUM'] = $this->input->post('EMR_ASESMEN_DOKTER_KeadaanUmum');
			$dok2['KESADARAN_UMUM'] = $this->input->post('EMR_ASESMEN_DOKTER_Kesadaran');
			$dok2['GCS_E'] = $this->input->post('EMR_ASESMEN_DOKTER_GCSe');
			$dok2['GCS_V'] = $this->input->post('EMR_ASESMEN_DOKTER_GCSv');
			$dok2['GCS_M'] = $this->input->post('EMR_ASESMEN_DOKTER_GCSm');
			$dok2['PEMERIKSAAN_FISIK_KEPALA'] = $EMR_ASESMEN_DOKTER_PemeriksaanKepala2;
			$dok2['PEMERIKSAAN_FISIK_THOR_COR'] = $EMR_ASESMEN_DOKTER_PemeriksaanThorCor2;
			$dok2['PEMERIKSAAN_FISIK_THOR_PULMO'] = $EMR_ASESMEN_DOKTER_PemeriksaanThorPulmo2;
			$dok2['DIAGNOSIS'] = $this->input->post('EMR_ASESMEN_DOKTER_Diagnosis');
			$dok2['DIAGNOSIS_BANDING'] = $this->input->post('EMR_ASESMEN_DOKTER_DiagnosisBanding');

			$nmcustno = $this->input->post('EMR_ASESMEN_AWAL_nmcust');

			//obat satuan
			$EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan');
			$EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan');
			$EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan');
			$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan');
			$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan');
			$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan');
			$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan');
			$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan');
			$EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan');

			//OBAT RACIK
			$EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan');
			$EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan');
			$EMR_ASESMEN_DOKTER_ObatidRacik_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatidRacik_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan');
			$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan');
			$EMR_ASESMEN_DOKTER_ObatRacikLain_simpan = $this->input->post('EMR_ASESMEN_DOKTER_ObatRacikLain_simpan');

			//RADIOLOGI
			$EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan = $this->input->post('EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan');
			$EMR_ASESMEN_DOKTER_radiologi_lain_simpan = $this->input->post('EMR_ASESMEN_DOKTER_radiologi_lain_simpan');
			$EMR_ASESMEN_DOKTER_radiologi_lain2 = $this->input->post('EMR_ASESMEN_DOKTER_radiologi_lain2');
			$EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan');
			$EMR_ASESMEN_DOKTER_Gigi_Satuan2 = $this->input->post('EMR_ASESMEN_DOKTER_Gigi_Satuan2');

			//LABORATORIUM
			$EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan = $this->input->post('EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan');
			$EMR_ASESMEN_DOKTER_laboratorium_lain_simpan = $this->input->post('EMR_ASESMEN_DOKTER_laboratorium_lain_simpan');
			$EMR_ASESMEN_DOKTER_laboratorium_lain2 = $this->input->post('EMR_ASESMEN_DOKTER_laboratorium_lain2');

			//CHECKUP
			$EMR_ASESMEN_DOKTER_checkup_checkbox_simpan = $this->input->post('EMR_ASESMEN_DOKTER_checkup_checkbox_simpan');
			$EMR_ASESMEN_DOKTER_Checkup_lain_simpan = $this->input->post('EMR_ASESMEN_DOKTER_Checkup_lain_simpan');
			$EMR_ASESMEN_DOKTER_Checkup_lain2 = $this->input->post('EMR_ASESMEN_DOKTER_Checkup_lain2');

			$dtObatSatuan['ID_PEMERIKSAAN'] = $idpemeriksaan;

			$dtObatRacik['ID_PEMERIKSAAN'] = $idpemeriksaan;

			$dtRadio['ID_PEMERIKSAAN'] = $idpemeriksaan;

			$dtLaborat['ID_PEMERIKSAAN'] = $idpemeriksaan;

			$dtCheckup['ID_PEMERIKSAAN'] = $idpemeriksaan;

			if (stripos($nmcustno, 'BPJS') === false)
			{
				$dtLaborat['STATUS_DETAIL_PASIEN_LABO'] = $status;
				$dtRadio['STATUS_DETAIL_PASIEN_RADIO'] = $status;
				$dtCheckup['STATUS_DETAIL_PASIEN_CHECKUP'] = $status;
			}
			else
			{
				$dtLaborat['STATUS_DETAIL_PASIEN_LABO'] = "BELUM APPROVAL";
				$dtRadio['STATUS_DETAIL_PASIEN_RADIO'] = "BELUM APPROVAL";
				$dtCheckup['STATUS_DETAIL_PASIEN_CHECKUP'] = "BELUM APPROVAL";
			}

			/*$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			$this->db->update('EMR_UTAMA_PERIKSA',$dok1);

			$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			$this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);

			echo "YES";*/

			if ($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan != "")
			{
			  if ($EMR_ASESMEN_DOKTER_radiologi_lain_simpan != "")
			  {
			    $this->load->library('form_validation');

			    //set validation rules
			    $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_radiologi_lain2', 'Radiologi Lain', 'required');

			    //run validation check
			    if ($this->form_validation->run() == FALSE)
			    {
			      //validation fails
			      echo validation_errors();
			    }
			    else
			    {
			      if ($EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan != "")
			      {
			        $this->load->library('form_validation');

			        //set validation rules
			        $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_Gigi_Satuan2', 'Gigi Satuan', 'required');

			        //run validation check
			        if ($this->form_validation->run() == FALSE)
			        {
			          //validation fails
			          echo validation_errors();
			        }
			        else
			        {
			          //yes
			          if ($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan != "")
			          {
			            if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			            {
			              $this->load->library('form_validation');

			              //set validation rules
			              $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			              //run validation check
			              if ($this->form_validation->run() == FALSE)
			              {   //validation fails
			                echo validation_errors();
			              }
			              else
			              {
			                $this->simpan_detail_pasien_radio_1_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio);

			                $dok1['STATUS_RADIO'] = 'ADA';

			                $this->simpan_detail_pasien_labo_1_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain2, $dtLaborat);

			                $dok1['STATUS_LABORAT'] = 'ADA';

											$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
											$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
											$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

											$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
											$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
											$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
											$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			                //yes
			                $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			                $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

											$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			                $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			                echo "YES";
			              }
			            }
			            else
			            {
			              $this->simpan_detail_pasien_radio_1_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio);

			              $dok1['STATUS_RADIO'] = 'ADA';

			              $this->simpan_detail_pasien_labo_2_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $dtLaborat);

			              $dok1['STATUS_LABORAT'] = 'ADA';

										$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

										$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			              //yes
			              $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

										$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			              echo "YES";
			            }
			          }
			          else if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			          {
			            $this->load->library('form_validation');

			            //set validation rules
			            $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			            //run validation check
			            if ($this->form_validation->run() == FALSE)
			            {   //validation fails
			              echo validation_errors();
			            }
			            else
			            {
			              $this->simpan_detail_pasien_radio_1_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio);

			              $dok1['STATUS_RADIO'] = 'ADA';

			              $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan;
			              $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain2;

			              $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

			              $dok1['STATUS_LABORAT'] = 'ADA';

										$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

										$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			              //yes
			              $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

										$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			              echo "YES";
			            }
			          }
			          else
			          {
			            $this->simpan_detail_pasien_radio_1_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio);

			            $dok1['STATUS_RADIO'] = 'ADA';

			            $dok1['STATUS_LABORAT'] = 'TIDAK ADA';

									$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

									$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			            //yes
			            $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

									$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			            echo "YES";
			          }
			        }
			      }
			      else
			      {
			        //yes
			        if ($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan != "")
			        {
			          if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			          {
			            $this->load->library('form_validation');

			            //set validation rules
			            $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			            //run validation check
			            if ($this->form_validation->run() == FALSE)
			            {   //validation fails
			              echo validation_errors();
			            }
			            else
			            {
			              $this->simpan_detail_pasien_radio_2_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $dtRadio);

			              $dok1['STATUS_RADIO'] = 'ADA';

			              $this->simpan_detail_pasien_labo_1_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain2, $dtLaborat);

			              $dok1['STATUS_LABORAT'] = 'ADA';

										$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

										$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			              //yes
			              $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

										$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			              echo "YES";
			            }
			          }
			          else
			          {
			            $this->simpan_detail_pasien_radio_2_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $dtRadio);

			            $dok1['STATUS_RADIO'] = 'ADA';

			            $this->simpan_detail_pasien_labo_2_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $dtLaborat);

			            $dok1['STATUS_LABORAT'] = 'ADA';

									$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

									$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			            //yes
			            $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

									$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			            echo "YES";
			          }
			        }
			        else if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			        {
			          $this->load->library('form_validation');

			          //set validation rules
			          $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			          //run validation check
			          if ($this->form_validation->run() == FALSE)
			          {   //validation fails
			            echo validation_errors();
			          }
			          else
			          {
			            $this->simpan_detail_pasien_radio_2_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $dtRadio);

			            $dok1['STATUS_RADIO'] = 'ADA';

			            $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan;
			            $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain2;

			            $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

			            $dok1['STATUS_LABORAT'] = 'ADA';

									$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

									$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			            //yes
			            $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

									$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			            echo "YES";
			          }
			        }
			        else
			        {
			          $this->simpan_detail_pasien_radio_2_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain_simpan, $EMR_ASESMEN_DOKTER_radiologi_lain2, $dtRadio);

			          $dok1['STATUS_RADIO'] = 'ADA';

			          $dok1['STATUS_LABORAT'] = 'TIDAK ADA';

								$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

								$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			          //yes
			          $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

								$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			          echo "YES";
			        }
			      }
			    }
			  }
			  else
			  {
			    if ($EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan != "")
			    {
			      $this->load->library('form_validation');

			      //set validation rules
			      $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_Gigi_Satuan2', 'Gigi Satuan', 'required');

			      //run validation check
			      if ($this->form_validation->run() == FALSE)
			      {
			        //validation fails
			        echo validation_errors();
			      }
			      else
			      {
			        //yes
			        if ($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan != "")
			        {
			          if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			          {
			            $this->load->library('form_validation');

			            //set validation rules
			            $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			            //run validation check
			            if ($this->form_validation->run() == FALSE)
			            {   //validation fails
			              echo validation_errors();
			            }
			            else
			            {
			              $this->simpan_detail_pasien_radio_3_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio);

			              $dok1['STATUS_RADIO'] = 'ADA';

			              $this->simpan_detail_pasien_labo_1_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain2, $dtLaborat);

			              $dok1['STATUS_LABORAT'] = 'ADA';

										$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

										$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			              //yes
			              $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

										$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			              echo "YES";
			            }
			          }
			          else
			          {
			            $this->simpan_detail_pasien_radio_3_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio);

			            $dok1['STATUS_RADIO'] = 'ADA';

			            $this->simpan_detail_pasien_labo_2_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $dtLaborat);

			            $dok1['STATUS_LABORAT'] = 'ADA';

									$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

									$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			            //yes
			            $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

									$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			            echo "YES";
			          }
			        }
			        else if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			        {
			          $this->load->library('form_validation');

			          //set validation rules
			          $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			          //run validation check
			          if ($this->form_validation->run() == FALSE)
			          {   //validation fails
			            echo validation_errors();
			          }
			          else
			          {
			            $this->simpan_detail_pasien_radio_3_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio);

			            $dok1['STATUS_RADIO'] = 'ADA';

			            $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan;
			            $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain2;
			            $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

			            $dok1['STATUS_LABORAT'] = 'ADA';

									$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

									$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			            //yes
			            $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

									$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			            echo "YES";
			          }
			        }
			        else
			        {
			          $this->simpan_detail_pasien_radio_3_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan, $EMR_ASESMEN_DOKTER_Gigi_Satuan2, $dtRadio);

			          $dok1['STATUS_RADIO'] = 'ADA';

			          $dok1['STATUS_LABORAT'] = 'TIDAK ADA';

								$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

								$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			          //yes
			          $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

								$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			          echo "YES";
			        }
			      }
			    }
			    else
			    {
			      //yes
			      if ($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan != "")
			      {
			        if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			        {
			          $this->load->library('form_validation');

			          //set validation rules
			          $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			          //run validation check
			          if ($this->form_validation->run() == FALSE)
			          {   //validation fails
			            echo validation_errors();
			          }
			          else
			          {
			            $this->simpan_detail_pasien_radio_4_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $dtRadio);

			            $dok1['STATUS_RADIO'] = 'ADA';

			            $this->simpan_detail_pasien_labo_1_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain2, $dtLaborat);

			            $dok1['STATUS_LABORAT'] = 'ADA';

									$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

									$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			            //yes
			            $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

									$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			            echo "YES";
			          }
			        }
			        else
			        {
			          $this->simpan_detail_pasien_radio_4_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $dtRadio);

			          $dok1['STATUS_RADIO'] = 'ADA';

			          $this->simpan_detail_pasien_labo_2_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $dtLaborat);

			          $dok1['STATUS_LABORAT'] = 'ADA';

								$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

								$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			          //yes
			          $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

								$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			          echo "YES";
			        }
			      }
			      else if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			      {
			        $this->load->library('form_validation');

			        //set validation rules
			        $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			        //run validation check
			        if ($this->form_validation->run() == FALSE)
			        {   //validation fails
			          echo validation_errors();
			        }
			        else
			        {
			          $this->simpan_detail_pasien_radio_4_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $dtRadio);

			          $dok1['STATUS_RADIO'] = 'ADA';

			          $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan;
			          $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain2;
			          $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

			          $dok1['STATUS_LABORAT'] = 'ADA';

								$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

								$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			          //yes
			          $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

								$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			          echo "YES";
			        }
			      }
			      else
			      {
			        $this->simpan_detail_pasien_radio_4_ases_awal($EMR_ASESMEN_DOKTER_radiologi_checkbox_simpan, $dtRadio);

			        $dok1['STATUS_RADIO'] = 'ADA';

			        $dok1['STATUS_LABORAT'] = 'TIDAK ADA';

							$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

							$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			        //yes
			        $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

							$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			        echo "YES";
			      }
			    }
			  }
			}
			else if ($EMR_ASESMEN_DOKTER_radiologi_lain_simpan != "")
			{
			  $this->load->library('form_validation');

			  //set validation rules
			  $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_radiologi_lain2', 'Radiologi Lain', 'required');

			  //run validation check
			  if ($this->form_validation->run() == FALSE)
			  {
			    //validation fails
			    echo validation_errors();
			  }
			  else
			  {
			    if ($EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan != "")
			    {
			      $this->load->library('form_validation');

			      //set validation rules
			      $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_Gigi_Satuan2', 'Gigi Satuan', 'required');

			      //run validation check
			      if ($this->form_validation->run() == FALSE)
			      {
			        //validation fails
			        echo validation_errors();
			      }
			      else
			      {
			        //yes
			        if ($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan != "")
			        {
			          if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			          {
			            $this->load->library('form_validation');

			            //set validation rules
			            $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			            //run validation check
			            if ($this->form_validation->run() == FALSE)
			            {   //validation fails
			              echo validation_errors();
			            }
			            else
			            {
			              $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
			              $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

			              $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			              $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
			              $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

			              $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			              $dok1['STATUS_RADIO'] = 'ADA';

			              $this->simpan_detail_pasien_labo_1_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain2, $dtLaborat);

			              $dok1['STATUS_LABORAT'] = 'ADA';

										$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
										$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

										$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
										$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
										$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			              //yes
			              $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

										$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			              $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			              echo "YES";
			            }
			          }
			          else
			          {
			            $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
			            $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

			            $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			            $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
			            $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

			            $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			            $dok1['STATUS_RADIO'] = 'ADA';

			            $this->simpan_detail_pasien_labo_2_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $dtLaborat);

			            $dok1['STATUS_LABORAT'] = 'ADA';

									$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

									$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			            //yes
			            $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

									$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			            echo "YES";
			          }
			        }
			        else if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			        {
			          $this->load->library('form_validation');

			          //set validation rules
			          $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			          //run validation check
			          if ($this->form_validation->run() == FALSE)
			          {   //validation fails
			            echo validation_errors();
			          }
			          else
			          {
			            $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
			            $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

			            $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			            $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
			            $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

			            $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			            $dok1['STATUS_RADIO'] = 'ADA';

			            $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan;
			            $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain2;
			            $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

			            $dok1['STATUS_LABORAT'] = 'ADA';

									$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

									$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			            //yes
			            $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

									$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			            echo "YES";
			          }
			        }
			        else
			        {
			          $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
			          $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

			          $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			          $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
			          $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

			          $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			          $dok1['STATUS_RADIO'] = 'ADA';

			          $dok1['STATUS_LABORAT'] = 'TIDAK ADA';

								$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

								$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			          //yes
			          $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

								$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			          echo "YES";
			        }
			      }
			    }
			    else
			    {
			      //yes
			      if ($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan != "")
			      {
			        if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			        {
			          $this->load->library('form_validation');

			          //set validation rules
			          $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			          //run validation check
			          if ($this->form_validation->run() == FALSE)
			          {   //validation fails
			            echo validation_errors();
			          }
			          else
			          {
			            $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
			            $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

			            $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			            $dok1['STATUS_RADIO'] = 'ADA';

			            $this->simpan_detail_pasien_labo_1_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain2, $dtLaborat);

			            $dok1['STATUS_LABORAT'] = 'ADA';

									$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
									$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

									$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
									$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
									$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			            //yes
			            $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

									$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			            $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			            echo "YES";
			          }
			        }
			        else
			        {
			          $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
			          $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

			          $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			          $dok1['STATUS_RADIO'] = 'ADA';

			          $this->simpan_detail_pasien_labo_2_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $dtLaborat);

			          $dok1['STATUS_LABORAT'] = 'ADA';

								$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

								$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			          //yes
			          $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

								$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			          echo "YES";
			        }
			      }
			      else if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			      {
			        $this->load->library('form_validation');

			        //set validation rules
			        $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			        //run validation check
			        if ($this->form_validation->run() == FALSE)
			        {   //validation fails
			          echo validation_errors();
			        }
			        else
			        {
			          $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
			          $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

			          $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			          $dok1['STATUS_RADIO'] = 'ADA';

			          $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan;
			          $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain2;
			          $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

			          $dok1['STATUS_LABORAT'] = 'ADA';

								$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

								$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			          //yes
			          $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

								$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			          echo "YES";
			        }
			      }
			      else
			      {
			        $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain_simpan;
			        $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_radiologi_lain2;

			        $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			        $dok1['STATUS_RADIO'] = 'ADA';

			        $dok1['STATUS_LABORAT'] = 'TIDAK ADA';

							$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

							$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			        //yes
			        $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

							$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			        echo "YES";
			      }
			    }
			  }
			}
			else if ($EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan != "")
			{
			  $this->load->library('form_validation');

			  //set validation rules
			  $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_Gigi_Satuan2', 'Gigi Satuan', 'required');

			  //run validation check
			  if ($this->form_validation->run() == FALSE)
			  {
			    //validation fails
			    echo validation_errors();
			  }
			  else
			  {
			    //yes
			    if ($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan != "")
			    {
			      if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			      {
			        $this->load->library('form_validation');

			        //set validation rules
			        $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			        //run validation check
			        if ($this->form_validation->run() == FALSE)
			        {   //validation fails
			          echo validation_errors();
			        }
			        else
			        {
			          $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
			          $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

			          $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			          $dok1['STATUS_RADIO'] = 'ADA';

			          $this->simpan_detail_pasien_labo_1_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain2, $dtLaborat);

			          $dok1['STATUS_LABORAT'] = 'ADA';

								$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
								$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

								$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
								$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
								$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			          //yes
			          $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

								$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			          $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			          echo "YES";
			        }
			      }
			      else
			      {
			        $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
			        $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

			        $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			        $dok1['STATUS_RADIO'] = 'ADA';

			        $this->simpan_detail_pasien_labo_2_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $dtLaborat);

			        $dok1['STATUS_LABORAT'] = 'ADA';

							$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

							$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			        //yes
			        $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

							$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			        echo "YES";
			      }
			    }
			    else if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			    {
			      $this->load->library('form_validation');

			      //set validation rules
			      $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			      //run validation check
			      if ($this->form_validation->run() == FALSE)
			      {   //validation fails
			        echo validation_errors();
			      }
			      else
			      {
			        $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
			        $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

			        $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			        $dok1['STATUS_RADIO'] = 'ADA';

			        $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan;
			        $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain2;

			        $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

			        $dok1['STATUS_LABORAT'] = 'ADA';

							$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

							$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			        //yes
			        $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

							$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			        echo "YES";
			      }
			    }
			    else
			    {
			      $dtRadio['KODE_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan_simpan;
			      $dtRadio['NM_DT_RADIO'] = $EMR_ASESMEN_DOKTER_Gigi_Satuan2;

			      $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

			      $dok1['STATUS_RADIO'] = 'ADA';

			      $dok1['STATUS_LABORAT'] = 'TIDAK ADA';

						$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
						$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
						$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

						$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
						$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
						$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
						$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			      //yes
			      $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			      $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

						$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			      $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			      echo "YES";
			    }
			  }
			}
			else
			{
			  //yes
			  if ($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan != "")
			  {
			    if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			    {
			      $this->load->library('form_validation');

			      //set validation rules
			      $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			      //run validation check
			      if ($this->form_validation->run() == FALSE)
			      {   //validation fails
			        echo validation_errors();
			      }
			      else
			      {
			        $dok1['STATUS_RADIO'] = 'TIDAK ADA';

			        $this->simpan_detail_pasien_labo_1_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan, $EMR_ASESMEN_DOKTER_laboratorium_lain2, $dtLaborat);

			        $dok1['STATUS_LABORAT'] = 'ADA';

							$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
							$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

							$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
							$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
							$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			        //yes
			        $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

							$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			        $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			        echo "YES";
			      }
			    }
			    else
			    {
			      $dok1['STATUS_RADIO'] = 'TIDAK ADA';

			      $this->simpan_detail_pasien_labo_2_ases_awal($EMR_ASESMEN_DOKTER_laboratorium_checkbox_simpan, $dtLaborat);

			      $dok1['STATUS_LABORAT'] = 'ADA';

						$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
						$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
						$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

						$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
						$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
						$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
						$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			      //yes
			      $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			      $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

						$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			      $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			      echo "YES";
			    }
			  }
			  else if ($EMR_ASESMEN_DOKTER_laboratorium_lain_simpan != "")
			  {
			    $this->load->library('form_validation');

			    //set validation rules
			    $this->form_validation->set_rules('EMR_ASESMEN_DOKTER_laboratorium_lain2', 'Laboratorium Lain', 'required');

			    //run validation check
			    if ($this->form_validation->run() == FALSE)
			    {   //validation fails
			      echo validation_errors();
			    }
			    else
			    {
			      $dok1['STATUS_RADIO'] = 'TIDAK ADA';

			      $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain_simpan;
			      $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_ASESMEN_DOKTER_laboratorium_lain2;
			      $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

			      $dok1['STATUS_LABORAT'] = 'ADA';

						$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
						$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
						$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

						$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
						$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
						$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
						$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			      //yes
			      $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			      $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

						$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			      $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			      echo "YES";
			    }
			  }
			  else
			  {
			    $dok1['STATUS_RADIO'] = 'TIDAK ADA';

			    $dok1['STATUS_LABORAT'] = 'TIDAK ADA';

					$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_ASESMEN_DOKTER_Obatobatsatuan_simpan, $EMR_ASESMEN_DOKTER_Obatidobatsatuan_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanJumlah_simpan,
					$EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1_simpan,
					$EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatSatuanLain_simpan);

					$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_ASESMEN_DOKTER_ObatobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik_simpan, $EMR_ASESMEN_DOKTER_ObatidRacik_simpan,
					$EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikSatuan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanBahan_simpan, $EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik_simpan,
					$EMR_ASESMEN_DOKTER_ObatidRacik_2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3_simpan,
					$EMR_ASESMEN_DOKTER_ObatRacikKetPakai1_simpan, $EMR_ASESMEN_DOKTER_ObatRacikKetPakai2_simpan, $EMR_ASESMEN_DOKTER_ObatRacikLain_simpan);

			    //yes
			    $this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			    $this->db->update('EMR_UTAMA_PERIKSA',$dok1);

					$this->db->where('ID_PEMERIKSAAN',$idpemeriksaan);
			    $this->db->update('EMR_HASIL_PERIKSA_UMUM',$dok2);
			    echo "YES";
			  }
			}
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnSelanjutnyaEMR_ULANG()
	{
	  if($this->session->userdata("logged_in")!="")
	  {
	    $EMR_ASESMEN_ULANG_statver = $this->input->post('EMR_ASESMEN_ULANG_statver');

	    if($EMR_ASESMEN_ULANG_statver == "Perawat2")
	    {
	      $userPer = $this->input->post('EMR_ASESMEN_ULANG_userPerPerawat');
	      $passPer = $this->input->post('EMR_ASESMEN_ULANG_passPerPerawat');
	      if ($userPer == "" && $passPer == "")
	      {
	        echo "msg-UPPerKosongPerawatEMR_ULANG";
	      }
	      else if ($userPer == "")
	      {
	        echo "msg-UserPerKosongPerawatEMR_ULANG";
	      }
	      else if ($passPer == "")
	      {
	        echo "msg-PassPerKosongPerawatEMR_ULANG";
	      }
	      else
	      {
	        $second_db = $this->load->database('second', TRUE);

	        $login['user1'] = $userPer;
	        //$login['GRPUSER'] = 'PERAWAT';
	        $login2['user1'] = $userPer;
	        $login2['PASS2'] = $passPer;
	        $cek = $second_db->get_where('TBLuser', $login);
	        $cek2 = $second_db->get_where('TBLuser', $login2);

	        if($cek->num_rows()>0)
	        {
	          if($cek2->num_rows()>0)
	          {
	            echo "msg-Selanjutnya_ULANG";
	          }
	          else
	          {
	            echo "msg-PassPerSalahPerawatEMR_ULANG";
	          }
	        }
	        else
	        {
	          echo "msg-UserPerSalahPerawatEMR_ULANG";
	        }
	      }
	    }
	    else
	    {
	      $userDok = $this->session->userdata("username");
	      $passDok = $this->input->post('EMR_ASESMEN_ULANG_VerPassAsesmen');
	      if ($passDok == "")
	      {
	        echo "msg-PassPer1KosongPerawatEMR_ULANG";
	      }
	      else
	      {
	        $second_db = $this->load->database('second', TRUE);
	        $login['user1'] = $userDok;
	        $login['PASS2'] = $passDok;
	        $cek = $second_db->get_where('TBLuser', $login);

	        if($cek->num_rows()>0)
	        {
	          echo "msg-Selanjutnya_ULANG";
	        }
	        else
	        {
	          echo "msg-PassPer1SalahPerawatEMR_ULANG";
	        }
	      }
	    }
	  }
	  else
	  {
	    $this->session->sess_destroy();
	    redirect("login");
	  }
	}

	function btnSelanjutnyaEMR_AWALGIGI()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$EMR_ASESMEN_AWALPERAWATGIGI_statver = $this->input->post('EMR_ASESMEN_AWALPERAWATGIGI_statver');

			if($EMR_ASESMEN_AWALPERAWATGIGI_statver == "Perawat2")
			{
				$userPer = $this->input->post('EMR_ASESMEN_AWALPERAWATGIGI_userPerPerawat');
				$passPer = $this->input->post('EMR_ASESMEN_AWALPERAWATGIGI_passPerPerawat');
				if ($userPer == "" && $passPer == "")
				{
					echo "msg-UPPerKosongPerawatEMR_AWALGIGI";
				}
				else if ($userPer == "")
				{
					echo "msg-UserPerKosongPerawatEMR_AWALGIGI";
				}
				else if ($passPer == "")
				{
					echo "msg-PassPerKosongPerawatEMR_AWALGIGI";
				}
				else
				{
					$second_db = $this->load->database('second', TRUE);

					$login['user1'] = $userPer;
					//$login['GRPUSER'] = 'PERAWAT';
					$login2['user1'] = $userPer;
					$login2['PASS2'] = $passPer;
					$cek = $second_db->get_where('TBLuser', $login);
					$cek2 = $second_db->get_where('TBLuser', $login2);

					if($cek->num_rows()>0)
					{
						if($cek2->num_rows()>0)
						{
							echo "msg-Selanjutnya_AWALGIGI";
						}
						else
						{
							echo "msg-PassPerSalahPerawatEMR_AWALGIGI";
						}
					}
					else
					{
						echo "msg-UserPerSalahPerawatEMR_AWALGIGI";
					}
				}
			}
			else
			{
				$userPer1 = $this->session->userdata("username");
				$passPer1 = $this->input->post('EMR_ASESMEN_AWALPERAWATGIGI_VerPassAsesmen');
				if ($passPer1 == "")
				{
					echo "msg-PassPer1KosongPerawatEMR_AWALGIGI";
				}
				else
				{
					$second_db = $this->load->database('second', TRUE);
					$login['user1'] = $userPer1;
					$login['PASS2'] = $passPer1;
					$cek3 = $second_db->get_where('TBLuser', $login);

					if($cek3->num_rows()>0)
					{
						echo "msg-Selanjutnya_AWALGIGI";
					}
					else
					{
						echo "msg-PassPer1SalahPerawatEMR_AWALGIGI";
					}
				}
			}
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnSelanjutnyaEMR_ULANGGIGI()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$EMR_ASESMEN_ULANGPERAWATGIGI_statver = $this->input->post('EMR_ASESMEN_ULANGPERAWATGIGI_statver');

			if($EMR_ASESMEN_ULANGPERAWATGIGI_statver == "Perawat2")
			{
				$userPer = $this->input->post('EMR_ASESMEN_ULANGPERAWATGIGI_userPerPerawat');
				$passPer = $this->input->post('EMR_ASESMEN_ULANGPERAWATGIGI_passPerPerawat');
				if ($userPer == "" && $passPer == "")
				{
					echo "msg-UPPerKosongPerawatEMR_ULANGGIGI";
				}
				else if ($userPer == "")
				{
					echo "msg-UserPerKosongPerawatEMR_ULANGGIGI";
				}
				else if ($passPer == "")
				{
					echo "msg-PassPerKosongPerawatEMR_ULANGGIGI";
				}
				else
				{
					$second_db = $this->load->database('second', TRUE);

					$login['user1'] = $userPer;
					//$login['GRPUSER'] = 'PERAWAT';
					$login2['user1'] = $userPer;
					$login2['PASS2'] = $passPer;
					$cek = $second_db->get_where('TBLuser', $login);
					$cek2 = $second_db->get_where('TBLuser', $login2);

					if($cek->num_rows()>0)
					{
						if($cek2->num_rows()>0)
						{
							echo "msg-Selanjutnya_ULANGGIGI";
						}
						else
						{
							echo "msg-PassPerSalahPerawatEMR_ULANGGIGI";
						}
					}
					else
					{
						echo "msg-UserPerSalahPerawatEMR_ULANGGIGI";
					}
				}
			}
			else
			{
				$userPer1 = $this->session->userdata("username");
				$passPer1 = $this->input->post('EMR_ASESMEN_ULANGPERAWATGIGI_VerPassAsesmen');
				if ($passPer1 == "")
				{
					echo "msg-PassPer1KosongPerawatEMR_ULANGGIGI";
				}
				else
				{
					$second_db = $this->load->database('second', TRUE);
					$login['user1'] = $userPer1;
					$login['PASS2'] = $passPer1;
					$cek3 = $second_db->get_where('TBLuser', $login);

					if($cek3->num_rows()>0)
					{
						echo "msg-Selanjutnya_ULANGGIGI";
					}
					else
					{
						echo "msg-PassPer1SalahPerawatEMR_ULANGGIGI";
					}
				}
			}
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}
}
