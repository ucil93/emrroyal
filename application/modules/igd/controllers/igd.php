<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//ini igd
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

	function cetak($id_param)
	{
		if($this->session->userdata("logged_in")!="")
		{
			$d['active_dashboard_rekammedik'] = "";
			$d['active_transaksi'] = "";
				$d['active_data_pasienrekammedik'] = "";
				$d['active_laporan_poli'] = "";
				$d['active_laporan_igd'] = "";

			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$this->load->model('/app_load_data_table');
			$second_db = $this->load->database('second', TRUE);

			$where['ID_PEMERIKSAAN'] = $id_param;
			$uta = $this->db->get_where("EMR_UTAMA_PERIKSA",$where)->row();

			$goblok = $uta->NORM;

			$where7['ID_PEMERIKSAAN'] = $id_param;
			$umum = $this->db->get_where("EMR_HASIL_PERIKSA_UMUM",$where7)->row();

			$pas = $second_db->query("select * from Pasien where norm = '$goblok'")->row();

			$lahir = date('Y-m-d',strtotime($pas->tgllahir));
			$today = date('Y-m-d');
			$usia = abs(strtotime($today) - strtotime($lahir));
			$years = floor($usia / (365*60*60*24));
			$months = floor(($usia - ($years * 365*60*60*24)) / (30*60*60*24));
			$days = floor(($usia - ($years * 365*60*60*24) - ($months*30*60*60*24))/ (60*60*24));

			$jeniskelamin = $pas->kdseks;
			if($jeniskelamin == 'L ')
			{
				$d['jk'] = "L";
			}
			elseif($jeniskelamin == 'P ')
			{
				$d['jk'] = "P";
			}
			else
			{
				$d['jk'] = "";
			}

			$d['noreg'] = $uta->NOREG;
			$d['idpemeriksaan'] = $uta->ID_PEMERIKSAAN;
			$d['namadokter']	= $this->session->userdata("nama_dokter");
			$d['kodedokter']	= $this->session->userdata("kode_dokter");
			//data pasien
			$d['norm'] = $uta->NORM;
			$d['nama'] = $pas->nama;

			//asesmen awal perawat
			$d['tglpemeriksaan'] = $uta->TANGGAL_PERIKSA;
			$d['jampemeriksaan'] = $uta->JAM_PERIKSA;
			$d['namaunit'] = '';
			$d['alergiobat'] = trim($pas->alergi);
			$d['sistolik'] = $umum->SISTOLIK;
			$d['diastolik'] = $umum->DIASTOLIK;
			$d['nadi_1'] = $umum->NADI_1;
			$d['nadi_2'] = $umum->NADI_2;
			$d['suhu_tubuh'] = $umum->SUHU_TUBUH;
			$d['respiratory_1'] = $umum->RESPIRATORY_1;
			$d['respiratory_2'] = $umum->RESPIRATORY_2;
			$d['berat_badan'] = $umum->BERAT_BADAN;
			$d['tinggi_badan'] = $umum->TINGGI_BADAN;
			$d['nilai_bmi'] = $umum->NILAI_BMI;
			$d['kategori_bmi'] = $umum->KATEGORI_BMI;
			$lingkarkepala = $umum->LINGKAR_KEPALA;
			if ($lingkarkepala == '')
			{
				$d['lingkarkepala1'] = '';
			}
			else
			{
				$d['lingkarkepala1'] = $lingkarkepala;
			}
			$d['hambatan_komunikasi'] = $umum->HAMBATAN_KOMUNIKASI;
			$d['ket_resiko_jatuh'] = $umum->KET_RESIKO_JATUH;
			$d['hasil_resiko_jatuh'] = $umum->HASIL_RESIKO_JATUH;
			$d['tindakan_resiko_jatuh'] = $umum->TINDAKAN_RESIKO_JATUH;
			$d['keluhan_nyeri'] = $umum->KELUHAN_NYERI;
			$d['ket_keluhan_nyeri'] = $umum->KET_KELUHAN_NYERI;
			$d['skor_keluhan_nyeri'] = $umum->SKOR_KELUHAN_NYERI;
			$d['skala_keluhan_nyeri'] = $umum->SKALA_KELUHAN_NYERI;
			$d['catatan_perawat'] = $umum->CATATAN_PERAWAT;
			$d['penanggung_jawab_perawat'] = $uta->PENANGGUNG_JAWAB_PERAWAT;

			//asesmen awal dokter
			$d['keluhan_utama'] = $umum->KELUHAN_UTAMA;
			$d['riwayat_penyakit_sekarang'] = $umum->RIWAYAT_PENYAKIT_SEKARANG;
			$d['riwayat_penyakit_dahulu'] = $umum->RIWAYAT_PENYAKIT_DAHULU;
			$d['riwayat_penyakit_keluarga'] = $umum->RIWAYAT_PENYAKIT_KELUARGA;
			$d['riwayat_sosial'] = $umum->RIWAYAT_SOSIAL;
			$d['riwayat_tumbuh_kembang'] = $umum->RIWAYAT_TUMBUH_KEMBANG;
			$d['keadaan_umum'] = $umum->KEADAAN_UMUM;
			$d['kesadaran_umum'] = $umum->KESADARAN_UMUM;
			$d['gcs_e'] = $umum->GCS_E;
			$d['gcs_v'] = $umum->GCS_V;
			$d['gcs_m'] = $umum->GCS_M;
			$d['pf_kepala'] = $umum->PEMERIKSAAN_FISIK_KEPALA;
			/*$pf_thoraxcor = $umum->PEMERIKSAAN_FISIK_THOR_COR;
			$pf_thoraxpulmo = $umum->PEMERIKSAAN_FISIK_THOR_PULMO;
			//$d['pf_thoraxcor'] = $umum->PEMERIKSAAN_FISIK_THOR_COR;
			//$d['pf_thoraxpulmo'] = $umum->PEMERIKSAAN_FISIK_THOR_PULMO;
			if ($pf_thoraxcor == "Tidak Dilakukan Pemeriksaan" || $pf_thoraxpulmo == "Tidak Dilakukan Pemeriksaan")
			{
				$d['pf_thorax'] = "Tidak Dilakukan Pemeriksaan";
			}
			else
			{
				$d['pf_thorax'] = $pf_thoraxcor." /".$pf_thoraxpulmo;
			}*/
			$d['pf_thorax'] = $umum->PEMERIKSAAN_FISIK_THORAX;
			$d['pf_abdomen'] = $umum->PEMERIKSAAN_FISIK_ABDOMEN;
			$d['pf_ekstremitas'] = $umum->PEMERIKSAAN_FISIK_EKSTREMITAS;
			$d['pf_neurologis'] = $umum->PEMERIKSAAN_FISIK_NEUROLOGIS;
			/*$d['sl_rectum'] = $umum->STATUS_LOKALIS_RECTUM;
			$d['sl_tht'] = $umum->STATUS_LOKALIS_THT;
			$d['sl_mata'] = $umum->STATUS_LOKALIS_MATA;
			$d['sl_neurologis'] = $umum->STATUS_LOKALIS_NEUROLOGIS;
			$d['sl_jiwa'] = $umum->STATUS_LOKALIS_JIWA;
			$d['sl_kulit'] = $umum->STATUS_LOKALIS_KULIT;
			$d['sl_obsgin'] = $umum->STATUS_LOKALIS_OBSGIN;*/
			//$d['diagnosis'] = $umum->DIAGNOSIS;
			//$d['diagnosis_banding'] = $umum->DIAGNOSIS_BANDING;
			$alamat = $pas->jalan + $pas->gang;
			$d['nik'] = $pas->kdpekerjaan;
			$d['alamat'] = $alamat;
			$d['Tlahir'] = $pas->tmplahir;
			$d['KodeUnit'] = '';
			$d['KodeUnit2'] = trim('');
			$d['Tlahir'] .= ", ";
			$d['Tgllahir'] = date('d-m-Y',strtotime($pas->tgllahir));
			$d['Utahun'] = $years;
			$d['Ubulan'] = $months;
			$d['Uhari'] = $days;
			$d['nmcust'] = '';
			$d['kdcust'] = '';
			$d['usia'] = $years;

			$this->load->view('dashboard_igd/bg_header', $d);
			$this->load->view('igd/print_kiri', $d);
			$this->load->view('igd/print', $d);
			$this->load->view('dashboard_igd/bg_footer', $d);
		}
		else
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
	}

	function pasien($id_param)
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->model('/app_load_data_table');
			$second_db = $this->load->database('second', TRUE);

			$d['dataRadio'] = $this->app_load_data_table->getAllDataRadio();
			$d['dataLaboratorium'] = $this->app_load_data_table->getAllDataLaboratorium();

			$tgltoday = date('d-M-Y');

			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$d['namadokter']	= '';

			$where['noreg'] = $id_param;
			$reg = $second_db->get_where("rd_reg",$where)->row();
			$cekidpem = $this->db->get_where("EMR_UTAMA_PERIKSA",$where)->num_rows();

			$where2['NORM'] = $reg->norm;
			$pas = $second_db->get_where("Pasien",$where2)->row();

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
			$d['noreg2'] = substr($reg->noreg, 2, 8);
			$normcoba = $reg->norm;
			$text = str_replace('-', '', $normcoba);
			$d['normcoba'] = trim($text);
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

			if($cekidpem == 0)
			{
				$tgltdy = 'GD-';
				$tgltdy .= date('d');
				$tgltdy .= date('m');
				$tgltdy .= date('Y');
				$kode = $this->db->query("select left(ID_PEMERIKSAAN,11) from EMR_UTAMA_PERIKSA where ID_PEMERIKSAAN LIKE '%$tgltdy%'")->num_rows();
				$kode = $kode + 1;


				$id_pemeriksaan = $this->kode_inc_IGD($kode);
				$per['ID_PEMERIKSAAN'] = $id_pemeriksaan;
				$per['NORM'] = $reg->norm;
				$per['NOREG'] = $reg->noreg;
				$per1['ID_PEMERIKSAAN'] = $id_pemeriksaan;

				$this->db->insert("EMR_UTAMA_PERIKSA",$per);
				$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$per1);
			}

			if($d['level'] == "IGD")
			{
				$this->load->view('dashboard_igd/bg_header',$d);
				$this->load->view('igd/emr_sidebar',$d);
				$this->load->view('igd/igd_perawat',$d);
				$this->load->view('dashboard_igd/bg_footer',$d);
			}
			elseif($d['level'] == "KOGIGD")
			{
				$this->load->view('dashboard_igd/bg_header',$d);
				$this->load->view('igd/emr_sidebar',$d);
				$this->load->view('igd/igd_dokter',$d);
				$this->load->view('dashboard_igd/bg_footer',$d);
			}
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function pasienUNKNOWN($id_param2)
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->model('/app_load_data_table');

			$tgltoday = date('d-M-Y');
			$kodedokter = $this->session->userdata("kode_dokter");
			$d['dataTabledokter'] = $this->app_load_data_table->getAllDataBayarDok($kodedokter);
			$d['dataTabledokter2'] = $this->app_load_data_table->getAllDataBayarDok2($kodedokter);

			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$d['namadokter']	= $this->session->userdata("nama_dokter");
			$d['kodedokter']	= $this->session->userdata("kode_dokter");
			$d['noreg']	= 'UNKNOWN';
			$d['norm']	= 'UNKNOWN';
			$d['nama']	= $this->db->query("select * from EMR_IGD_MRX where ID_PEMERIKSAAN = '$id_param2'")->row()->NAMA_ALIAS;
			$d['ttl']	= $this->db->query("select * from EMR_IGD_MRX where ID_PEMERIKSAAN = '$id_param2'")->row()->TTL_ALIAS;
			$d['ID_PEMERIKSAAN'] = $id_param2;

			if($d['level'] == "IGD")
			{
				$this->load->view('dashboard_igd/bg_header',$d);
				$this->load->view('igd/emr_sidebar3',$d);
				$this->load->view('igd/igd_perawat',$d);
				$this->load->view('dashboard_igd/bg_footer',$d);
			}
			elseif($d['level'] == "KOGIGD")
			{
				$this->load->view('dashboard_igd/bg_header',$d);
				$this->load->view('igd/emr_sidebar3',$d);
				$this->load->view('igd/igd_dokter',$d);
				$this->load->view('dashboard_igd/bg_footer',$d);
			}
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function kode_inc_IGD($kode)
	{
		$code = 'GD-';
		$code .= date('d');
		$code .= date('m');
		$code .= date('Y');
		$code .= '-';
		$code .= sprintf("%06s", $kode);
		return $code;
	}

	function btnsimpanTriase()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{

			$per1['ID_PEMERIKSAAN'] = $this->input->post("IGD_idpemeriksaan");
			$per1['Triase'] = $this->input->post("IGD_hasilTriase");
			$per1['CIRCULATION'] = $this->input->post("IGD_Circulation");
			$per1['AIRWAY'] = $this->input->post("IGD_Airway");
			$per1['BREATHING'] = $this->input->post("IGD_Breathing");
			$per1['DISABILITY'] = $this->input->post("IGD_Disability");
			$per2['ID_PEMERIKSAAN'] = $this->input->post("IGD_idpemeriksaan");

			$this->db->insert("EMR_IGD_TRIASE",$per1);
			$this->db->insert("EMR_IGD_MENU",$per2);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanKaitIGD()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$SP1['NAMA_ALIAS'] = '';
			$SP1['STATUS'] = 'None';
			$SP2['NOREG'] = $this->input->post('IGD_noreg_awalkait');
			$SP2['NORM'] = $this->input->post('IGD_norm_awalkait');

			$this->db->where("ID_PEMERIKSAAN",$this->input->post('IGD_idpemeriksaan'));
			$this->db->update("EMR_IGD_MRX",$SP1);
			$this->db->where("ID_PEMERIKSAAN",$this->input->post('IGD_idpemeriksaan'));
			$this->db->update("EMR_UTAMA_PERIKSA",$SP2);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_dr_P1()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			//awal pemeriksaan fisik kepala
			$EMR_dr_IGD_P1_btnAnemis = $this->input->post('EMR_dr_IGD_P1_btnAnemis');
			$EMR_dr_IGD_P1_btnIkterus = $this->input->post('EMR_dr_IGD_P1_btnIkterus');
			$EMR_dr_IGD_P1_btnCyanosis = $this->input->post('EMR_dr_IGD_P1_btnCyanosis');
			$EMR_dr_IGD_P1_btnDipsneo = $this->input->post('EMR_dr_IGD_P1_btnDipsneo');
			$EMR_dr_IGD_P1_btnUUK = $this->input->post('EMR_dr_IGD_P1_btnUUK');
			$EMR_dr_IGD_P1_btnUUB = $this->input->post('EMR_dr_IGD_P1_btnUUB');
			$EMR_dr_IGD_P1_Umur = $this->input->post('EMR_dr_IGD_Umur');
			if ($EMR_dr_IGD_P1_Umur < 1.5)
			{
			  $EMR_dr_IGD_P1_ubun2 = '<tr><td style="padding:3px;">UUK</td><td style="padding:3px;">:</td><td style="border-right:1px solid; padding:3px;">'.$EMR_dr_IGD_P1_btnUUK.'</td><td colspan="4"></td></tr>
			  <tr><td style="padding:3px;">UUB</td><td style="padding:3px;">:</td><td style="border-right:1px solid; padding:3px;">'.$EMR_dr_IGD_P1_btnUUB.'</td><td colspan="4"></td></tr>';
			}
			else
			{
			  $EMR_dr_IGD_P1_ubun2 = "";
			}
			$EMR_dr_IGD_P1_pupilstat = $this->input->post('EMR_dr_IGD_P1_pupilstat');
			$EMR_dr_IGD_P1_pupilKanan = $this->input->post('EMR_dr_IGD_P1_pupilKanan');
			$EMR_dr_IGD_P1_pupilKiri = $this->input->post('EMR_dr_IGD_P1_pupilKiri');
			$EMR_dr_IGD_P1_btnCahayaKanan = $this->input->post('EMR_dr_IGD_P1_btnCahayaKanan');
			$EMR_dr_IGD_P1_btnCahayaKiri = $this->input->post('EMR_dr_IGD_P1_btnCahayaKiri');
			$EMR_dr_IGD_P1_KepalaLeher = $this->input->post('EMR_dr_IGD_P1_KepalaLeher');

			//simpan tabel pemeriksaan fisik kepala
			$EMR_dr_IGD_P1_PemeriksaanKepala = '<table border="0" style="width:100%"><tr><td style="padding:3px; width:10%">Anemis</td><td style="padding:3px; width:2%">:</td><td style="border-right:1px solid; padding:3px; width:5%">
			'.$EMR_dr_IGD_P1_btnAnemis.'</td><td style="width:20%"></td><td style="text-align:center; padding:3px; width:10%">Kanan</td><td style="text-align:center; padding:3px; width:10%">Kiri</td><td style="width:43%"></td></tr>
			<tr><td style="padding:3px;">Ikterus</td><td style="padding:3px; ">:</td><td style="border-right:1px solid; padding:3px; ">'.$EMR_dr_IGD_P1_btnIkterus.'</td><td style="padding:3px; ">Pupil ('.$EMR_dr_IGD_P1_pupilstat.'
			)</td><td style="text-align:center; padding:3px; ">'.$EMR_dr_IGD_P1_pupilKanan.' mm</td><td style="text-align:center; padding:3px; ">'.$EMR_dr_IGD_P1_pupilKiri.' mm</td><td></td></tr>
			<tr><td style="padding:3px;">Cyanosis</td><td style="padding:3px;">:</td><td style="border-right:1px solid; padding:3px;">'.$EMR_dr_IGD_P1_btnCyanosis.'</td><td style="padding:3px;">Cahaya</td><td style="text-align:center; padding:3px; ">
			'.$EMR_dr_IGD_P1_btnCahayaKanan.'</td><td style="text-align:center; padding:3px; ">'.$EMR_dr_IGD_P1_btnCahayaKiri.'</td><td></td></tr><tr><td style="padding:3px;">Dipsneo</td><td style="padding:3px;">:</td><td style="border-right:1px solid; padding:3px;">
			'.$EMR_dr_IGD_P1_btnDipsneo.'</td><td style="padding:3px;">Lain-Lain</td><td colspan="3">'.$EMR_dr_IGD_P1_KepalaLeher.'</td></tr>'.$EMR_dr_IGD_P1_ubun2.'</table>';

			//awal pemeriksaan fisik thorax (cor)
			$EMR_dr_IGD_P1_CorStatus = $this->input->post('EMR_dr_IGD_P1_CorStatus');
			$EMR_dr_IGD_P1_CorSplit1 = $this->input->post('EMR_dr_IGD_P1_CorSplit1');
			$EMR_dr_IGD_P1_Cor2_simpan = $this->input->post('EMR_dr_IGD_P1_Cor2_simpan');
			$EMR_dr_IGD_P1_Cor3_simpan = $this->input->post('EMR_dr_IGD_P1_Cor3_simpan');
			if ($EMR_dr_IGD_P1_CorStatus == "Tidak")
			{
			  $EMR_dr_IGD_P1_CorSplit_Simpan = $EMR_dr_IGD_P1_CorSplit1;
			}
			else
			{
			  if($EMR_dr_IGD_P1_Cor2_simpan != '')
			  {
			    if ($EMR_dr_IGD_P1_Cor3_simpan != '')
			    {
			      $EMR_dr_IGD_P1_CorSplit_Simpan = $EMR_dr_IGD_P1_Cor2_simpan." Dan ".$EMR_dr_IGD_P1_Cor3_simpan;
			    }
			    else
			    {
			      $EMR_dr_IGD_P1_CorSplit_Simpan = $EMR_dr_IGD_P1_Cor2_simpan;
			    }
			  }
			  else
			  {
			    if ($EMR_dr_IGD_P1_Cor3_simpan != '')
			    {
			      $EMR_dr_IGD_P1_CorSplit_Simpan = $EMR_dr_IGD_P1_Cor3_simpan;
			    }
			  }
			}
			$EMR_dr_IGD_P1_CorReg = $this->input->post('EMR_dr_IGD_P1_CorReg');
			$EMR_dr_IGD_P1_btnMurmur = $this->input->post('EMR_dr_IGD_P1_btnMurmur');
			$EMR_dr_IGD_P1_btnMurmurText = $this->input->post('EMR_dr_IGD_P1_btnMurmurText');
			if ($EMR_dr_IGD_P1_btnMurmur == "+")
			{
			  $EMR_dr_IGD_P1_btnMurmur_Simpan = $EMR_dr_IGD_P1_btnMurmur." (".$EMR_dr_IGD_P1_btnMurmurText.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_btnMurmur_Simpan = $EMR_dr_IGD_P1_btnMurmur;
			}
			$EMR_dr_IGD_P1_btnGallop = $this->input->post('EMR_dr_IGD_P1_btnGallop');

			//awal pemeriksaan fisik thorax pulmo
			$EMR_dr_IGD_P1_btnVesikuler1 = $this->input->post('EMR_dr_IGD_P1_btnVesikuler1');
			$EMR_dr_IGD_P1_btnVesikuler2 = $this->input->post('EMR_dr_IGD_P1_btnVesikuler2');
			$EMR_dr_IGD_P1_btnVesikuler3 = $this->input->post('EMR_dr_IGD_P1_btnVesikuler3');
			$EMR_dr_IGD_P1_btnVesikuler4 = $this->input->post('EMR_dr_IGD_P1_btnVesikuler4');
			$EMR_dr_IGD_P1_btnVesikuler5 = $this->input->post('EMR_dr_IGD_P1_btnVesikuler5');
			$EMR_dr_IGD_P1_btnVesikuler6 = $this->input->post('EMR_dr_IGD_P1_btnVesikuler6');
			$EMR_dr_IGD_P1_btnRhonki1 = $this->input->post('EMR_dr_IGD_P1_btnRhonki1');
			$EMR_dr_IGD_P1_btnRhonki2 = $this->input->post('EMR_dr_IGD_P1_btnRhonki2');
			$EMR_dr_IGD_P1_btnRhonki3 = $this->input->post('EMR_dr_IGD_P1_btnRhonki3');
			$EMR_dr_IGD_P1_btnRhonki4 = $this->input->post('EMR_dr_IGD_P1_btnRhonki4');
			$EMR_dr_IGD_P1_btnRhonki5 = $this->input->post('EMR_dr_IGD_P1_btnRhonki5');
			$EMR_dr_IGD_P1_btnRhonki6 = $this->input->post('EMR_dr_IGD_P1_btnRhonki6');
			$EMR_dr_IGD_P1_btnWheezing1 = $this->input->post('EMR_dr_IGD_P1_btnWheezing1');
			$EMR_dr_IGD_P1_btnWheezing2 = $this->input->post('EMR_dr_IGD_P1_btnWheezing2');
			$EMR_dr_IGD_P1_btnWheezing3 = $this->input->post('EMR_dr_IGD_P1_btnWheezing3');
			$EMR_dr_IGD_P1_btnWheezing4 = $this->input->post('EMR_dr_IGD_P1_btnWheezing4');
			$EMR_dr_IGD_P1_btnWheezing5 = $this->input->post('EMR_dr_IGD_P1_btnWheezing5');
			$EMR_dr_IGD_P1_btnWheezing6 = $this->input->post('EMR_dr_IGD_P1_btnWheezing6');
			$EMR_dr_IGD_P1_btnretraksiKanan = $this->input->post('EMR_dr_IGD_P1_btnretraksiKanan');
			$EMR_dr_IGD_P1_btnretraksiKiri = $this->input->post('EMR_dr_IGD_P1_btnretraksiKiri');
			$EMR_dr_IGD_P1_ThoraxCorLain = $this->input->post('EMR_dr_IGD_P1_ThoraxCorLain');

			//simpan tabel pemeriksaan fisik thorax
			$EMR_dr_IGD_P1_PemeriksaanThor = '<table border="0" style="width:100%"><tr><td style="padding:3px; width:20%">Cor</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:78%">
			<table border="0" style="width:100%"><tr><td style="padding:3px; width:15%">S<sub>1</sub>, S<sub>2</sub>, TR</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:83%">'.$EMR_dr_IGD_P1_CorSplit_Simpan.'
			('.$EMR_dr_IGD_P1_CorReg.')</td></tr><tr><td style="padding:3px;">Murmur</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_btnMurmur_Simpan.'</td></tr>
			<tr><td style="padding:3px;">Gallop</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_btnGallop.'</td></tr></table></td></tr><tr><td style="padding:3px;">Pulmo</td><td style="padding:3px;">:</td>
			<td style="padding:3px;"><table border="0" style="width:100%"><tr><td style="text-align:center; padding:3px; width:30%">Vesikuler</td><td style="text-align:center; padding:3px; width:30%">Rhonki</td>
			<td style="text-align:center; padding:3px; width:30%">Wheezing</td></tr><tr><td style="padding:3px;"><center><table style="width:60%"><tr><td style="text-align:center; padding:3px; border-right:1px solid; border-bottom:1px solid; width:30%">
			'.$EMR_dr_IGD_P1_btnVesikuler1.'</td><td style="text-align:center; padding:3px; border-left:1px solid; border-bottom:1px solid; width:30%">'.$EMR_dr_IGD_P1_btnVesikuler2.'</td></tr>
			<tr><td style="text-align:center; padding:3px; border-right:1px solid; border-bottom:1px solid; border-top:1px solid">'.$EMR_dr_IGD_P1_btnVesikuler3.'</td><td style="text-align:center; padding:3px; border-left:1px solid; border-bottom:1px solid; border-top:1px solid">
			'.$EMR_dr_IGD_P1_btnVesikuler4.'</td></tr><tr><td style="text-align:center; padding:3px; border-right:1px solid; border-top:1px solid">'.$EMR_dr_IGD_P1_btnVesikuler5.'</td>
			<td style="text-align:center; padding:3px; border-left:1px solid; border-top:1px solid">'.$EMR_dr_IGD_P1_btnVesikuler6.'</td></tr></table></center></td><td style="padding:3px;"><center><table style="width:60%"><tr>
			<td style="text-align:center; padding:3px; border-right:1px solid; border-bottom:1px solid; width:30%">'.$EMR_dr_IGD_P1_btnRhonki1.'</td><td style="text-align:center; padding:3px; border-left:1px solid; border-bottom:1px solid; width:30%">
			'.$EMR_dr_IGD_P1_btnRhonki2.'</td></tr><tr><td style="text-align:center; padding:3px; border-right:1px solid; border-bottom:1px solid; border-top:1px solid">'.$EMR_dr_IGD_P1_btnRhonki3.'</td>
			<td style="text-align:center; padding:3px; border-left:1px solid; border-bottom:1px solid; border-top:1px solid">'.$EMR_dr_IGD_P1_btnRhonki4.'</td></tr><tr><td style="text-align:center; padding:3px; border-right:1px solid; border-top:1px solid">
			'.$EMR_dr_IGD_P1_btnRhonki5.'</td><td style="text-align:center; padding:3px; border-left:1px solid; border-top:1px solid">'.$EMR_dr_IGD_P1_btnRhonki6.'</td></tr></table></center></td><td style="padding:3px;"><center><table style="width:60%"><tr>
			<td style="text-align:center; padding:3px; border-right:1px solid; border-bottom:1px solid; width:30%">'.$EMR_dr_IGD_P1_btnWheezing1.'</td><td style="text-align:center; padding:3px; border-left:1px solid; border-bottom:1px solid; width:30%">
			'.$EMR_dr_IGD_P1_btnWheezing2.'</td></tr><tr><td style="text-align:center; padding:3px; border-right:1px solid; border-bottom:1px solid; border-top:1px solid">'.$EMR_dr_IGD_P1_btnWheezing3.'</td>
			<td style="text-align:center; padding:3px; border-left:1px solid; border-bottom:1px solid; border-top:1px solid">'.$EMR_dr_IGD_P1_btnWheezing4.'</td></tr><tr><td style="text-align:center; padding:3px; border-right:1px solid; border-top:1px solid">
			'.$EMR_dr_IGD_P1_btnWheezing5.'</td><td style="text-align:center; padding:3px; border-left:1px solid; border-top:1px solid">'.$EMR_dr_IGD_P1_btnWheezing6.'</td></tr></table></center></td></tr></table></td></tr><tr>
			<td style="padding:3px;">Retraksi Intercostal</td><td style="padding:3px;">:</td><td style="padding:3px;"><table border="0" style="width:100%"><tr><td style="padding:3px; width:10%">Kanan</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:88%">
			'.$EMR_dr_IGD_P1_btnretraksiKanan.'</td></tr><tr><td style="padding:3px;">Kiri</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_btnretraksiKiri.'</td></tr></table></td></tr>
			<tr><td style="padding:3px;">Lain-Lain</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_ThoraxCorLain.'</td></tr></table>';

			//awal pemeriksaan fisik abdomen
			$EMR_dr_IGD_P1_btnAbdomen1 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen1');
			$EMR_dr_IGD_P1_btnAbdomen1E = $this->input->post('EMR_dr_IGD_P1_btnAbdomen1E');
			if ($EMR_dr_IGD_P1_btnAbdomen1 == "Lain-lain")
			{
			  $EMR_dr_IGD_P1_btnAbdomen1_simpan = $EMR_dr_IGD_P1_btnAbdomen1." (".$EMR_dr_IGD_P1_btnAbdomen1E.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_btnAbdomen1_simpan = $EMR_dr_IGD_P1_btnAbdomen1;
			}
			$EMR_dr_IGD_P1_btnAbdomen2 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen2');
			$EMR_dr_IGD_P1_btnAbdomen3 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen3');
			$EMR_dr_IGD_P1_btnAbdomen4 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen4');
			$EMR_dr_IGD_P1_btnAbdomen5 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen5');
			$EMR_dr_IGD_P1_btnAbdomen6 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen6');
			$EMR_dr_IGD_P1_btnAbdomen7Radio = $this->input->post('EMR_dr_IGD_P1_btnAbdomen7Radio');
			$EMR_dr_IGD_P1_btnAbdomen7C = $this->input->post('EMR_dr_IGD_P1_btnAbdomen7C');
			if ($EMR_dr_IGD_P1_btnAbdomen7Radio == "Teraba")
			{
			  $EMR_dr_IGD_P1_btnAbdomen7Radio_simpan = $EMR_dr_IGD_P1_btnAbdomen7Radio." (".$EMR_dr_IGD_P1_btnAbdomen7C.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_btnAbdomen7Radio_simpan = $EMR_dr_IGD_P1_btnAbdomen7Radio;
			}
			$EMR_dr_IGD_P1_btnAbdomen8Radio = $this->input->post('EMR_dr_IGD_P1_btnAbdomen8Radio');
			$EMR_dr_IGD_P1_btnAbdomen8C = $this->input->post('EMR_dr_IGD_P1_btnAbdomen8C');
			if ($EMR_dr_IGD_P1_btnAbdomen8Radio == "Teraba")
			{
			  $EMR_dr_IGD_P1_btnAbdomen8Radio_simpan = $EMR_dr_IGD_P1_btnAbdomen8Radio." (".$EMR_dr_IGD_P1_btnAbdomen8C.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_btnAbdomen8Radio_simpan = $EMR_dr_IGD_P1_btnAbdomen8Radio;
			}
			$EMR_dr_IGD_P1_AbdomenLainChb_simpan = $this->input->post('EMR_dr_IGD_P1_AbdomenLainChb_simpan');
			if ($EMR_dr_IGD_P1_AbdomenLainChb_simpan != '')
			{
			  $EMR_dr_IGD_P1_btnAbdomen9 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen9');
			  $EMR_dr_IGD_P1_btnAbdomen10 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen10');
			  $EMR_dr_IGD_P1_btnAbdomen11 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen11');
			  $EMR_dr_IGD_P1_btnAbdomenText1= $this->input->post('EMR_dr_IGD_P1_btnAbdomenText1');
			  $EMR_dr_IGD_P1_AbdomenLainChb_simpan2 = '<table border="0" style="width:100%"><tr><td style="padding:3px">Shifting Dullness</td><td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomen9.'
			  </td></tr><tr><td style="padding:3px">Nyeri Tekan Mc Burney</td><td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomen10.'</td></tr><tr><td style="padding:3px">Murphy Sign</td>
			  <td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomen11.'</td></tr><tr><td style="padding:3px">Lain - Lain</td><td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomenText1.'</td></tr></table>';
			}
			else
			{
			  $EMR_dr_IGD_P1_AbdomenLainChb_simpan2 = "";
			}
			$EMR_dr_IGD_P1_btnAbdomen12 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen12');
			$EMR_dr_IGD_P1_btnAbdomen13 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen13');
			$EMR_dr_IGD_P1_btnAbdomen14 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen14');
			$EMR_dr_IGD_P1_btnAbdomen15 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen15');
			$EMR_dr_IGD_P1_btnAbdomen16 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen16');
			$EMR_dr_IGD_P1_btnAbdomen17 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen17');
			$EMR_dr_IGD_P1_btnAbdomen18 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen18');
			$EMR_dr_IGD_P1_btnAbdomen19 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen19');
			$EMR_dr_IGD_P1_btnAbdomen20 = $this->input->post('EMR_dr_IGD_P1_btnAbdomen20');

			//simpan tabel pemeriksaan fisik abdomen
			$EMR_dr_IGD_P1_PemeriksaanAbdomen = '<table border="0" style="width:100%"><tr><td style="padding:3px; width:13%">Bising Usus</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:40%">'.$EMR_dr_IGD_P1_btnAbdomen1_simpan.'
			</td><td style="padding:3px; width:45%;" valign="top" rowspan="8"><table border="0" style="width:100%"><tr><td style="text-align:center; padding:3px" colspan="5">Nyeri Tekan</td></tr><tr><td style="width:38%"></td>
			<td style="text-align:right; padding:5px; width:8%; border-right:1px solid; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_btnAbdomen12.'</td><td style="text-align:center; padding:3px; width:8%; border-right:1px solid; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_btnAbdomen13.'
			</td><td style="text-align:left; padding:5px; width:8%; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_btnAbdomen14.'</td><td style="width:38%"></td></tr><tr><td></td><td style="text-align:right; padding:5px; border-right:1px solid; border-bottom:1px solid;">
			'.$EMR_dr_IGD_P1_btnAbdomen15.'</td><td style="text-align:center; padding:3px; width:8%; border-right:1px solid; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_btnAbdomen16.'</td><td style="text-align:left; padding:5px; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_btnAbdomen17.'
			</td><td></td></tr><tr><td></td><td style="text-align:right; padding:5px; border-right:1px solid">'.$EMR_dr_IGD_P1_btnAbdomen18.'</td><td style="text-align:center; padding:3px; width:8%; border-right:1px solid">'.$EMR_dr_IGD_P1_btnAbdomen19.'</td><td style="text-align:left; padding:5px">
			'.$EMR_dr_IGD_P1_btnAbdomen20.'</td><td></td></tr></table></td></tr><tr><td style="padding:3px">Meteorimus</td><td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomen2.'</td></tr><tr><td style="padding:3px">Flat</td><td style="padding:3px">:</td><td style="padding:3px">
			'.$EMR_dr_IGD_P1_btnAbdomen3.'</td></tr><tr><td style="padding:3px">Soeple</td><td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomen4.'</td></tr><tr><td style="padding:3px">Defans</td><td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomen5.'
			</td></tr><tr><td style="padding:3px">Distensi</td><td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomen6.'</td></tr><tr><td style="padding:3px">Hepar</td><td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomen7Radio_simpan.'
			</td></tr><tr><td style="padding:3px">Lien</td><td style="padding:3px">:</td><td style="padding:3px">'.$EMR_dr_IGD_P1_btnAbdomen8Radio_simpan.'</td></tr><tr><td style="padding:3px">Lain - Lain</td><td style="padding:3px">:</td><td style="padding:3px" colspan="2">'.$EMR_dr_IGD_P1_AbdomenLainChb_simpan2.'</td></tr></table>';

			//awal pemeriksaan fisik ekstremitas
			$EMR_dr_IGD_P1_btnEkstremitas1 = $this->input->post('EMR_dr_IGD_P1_btnEkstremitas1');
			$EMR_dr_IGD_P1_btnEkstremitas2 = $this->input->post('EMR_dr_IGD_P1_btnEkstremitas2');
			$EMR_dr_IGD_P1_btnEkstremitas3 = $this->input->post('EMR_dr_IGD_P1_btnEkstremitas3');
			$EMR_dr_IGD_P1_btnEkstremitas4 = $this->input->post('EMR_dr_IGD_P1_btnEkstremitas4');
			$EMR_dr_IGD_P1_btnEkstremitas9 = $this->input->post('EMR_dr_IGD_P1_btnEkstremitas9');
			$EMR_dr_IGD_P1_btnEkstremitas10 = $this->input->post('EMR_dr_IGD_P1_btnEkstremitas10');
			$EMR_dr_IGD_P1_btnEkstremitas11 = $this->input->post('EMR_dr_IGD_P1_btnEkstremitas11');
			$EMR_dr_IGD_P1_btnEkstremitas12 = $this->input->post('EMR_dr_IGD_P1_btnEkstremitas12');
			$EMR_dr_IGD_P1_CRT_simpan = $this->input->post('EMR_dr_IGD_P1_CRT_simpan');
			$EMR_dr_IGD_P1_EkstremitasLainTXT = $this->input->post('EMR_dr_IGD_P1_EkstremitasLainTXT');

			//simpan tabel pemeriksaan fisik ekstremitas
			$EMR_dr_IGD_P1_PemeriksaanEkstremitas = '<table border="0" style="width:100%"><tr><td style="padding:3px; width:18%">Akral Hangat</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:30%"><table border="0" style="width:100%"><tr>
			<td style="text-align:center; padding:3px; width:20%; border-right:1px solid; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_btnEkstremitas1.'</td><td style="text-align:center; padding:3px; width:20%; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_btnEkstremitas2.'</td><td style="width:60%"></td></tr>
			<tr><td style="text-align:center; padding:3px; border-right:1px solid;">'.$EMR_dr_IGD_P1_btnEkstremitas3.'</td><td style="text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_btnEkstremitas4.'</td><td></td></tr></table></td><td style="padding:3px; width:18%">CRT</td><td style="padding:3px; width:2%">:</td>
			<td style="padding:3px; width:30%">'.$EMR_dr_IGD_P1_CRT_simpan.'</td></tr><tr><td style="padding:3px;">Oedema</td><td style="padding:3px;">:</td><td style="text-align:left; padding:3px;"><table border="0" style="width:100%"><tr><td style="text-align:center; padding:3px; width:20%; border-right:1px solid; border-bottom:1px solid;">
			'.$EMR_dr_IGD_P1_btnEkstremitas9.'</td><td style="text-align:center; padding:3px; width:20%; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_btnEkstremitas10.'</td><td style="width:60%"></td></tr><tr><td style="text-align:center; padding:3px; border-right:1px solid;">'.$EMR_dr_IGD_P1_btnEkstremitas11.'
			</td><td style="text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_btnEkstremitas12.'</td><td></td></tr></table></td><td style="padding:3px;">Lain - lain</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_EkstremitasLainTXT.'</td></tr></table>';

			//awal pemeriksaan fisik neurologis
			$EMR_dr_IGD_P1_Neu_Motorik1 = $this->input->post('EMR_dr_IGD_P1_Neu_Motorik1');
			$EMR_dr_IGD_P1_Neu_Motorik2 = $this->input->post('EMR_dr_IGD_P1_Neu_Motorik2');
			$EMR_dr_IGD_P1_Neu_Motorik3 = $this->input->post('EMR_dr_IGD_P1_Neu_Motorik3');
			$EMR_dr_IGD_P1_Neu_Motorik4 = $this->input->post('EMR_dr_IGD_P1_Neu_Motorik4');
			$EMR_dr_IGD_P1_Sensorik = $this->input->post('EMR_dr_IGD_P1_Sensorik');
			$EMR_dr_IGD_P1_Sensorik7 = $this->input->post('EMR_dr_IGD_P1_Sensorik7');
			if ($EMR_dr_IGD_P1_Sensorik == "Lain-lain")
			{
			  $EMR_dr_IGD_P1_Sensorik_simpan = $EMR_dr_IGD_P1_Sensorik7;
			}
			else
			{
			  $EMR_dr_IGD_P1_Sensorik_simpan = $EMR_dr_IGD_P1_Sensorik;
			}
			$EMR_dr_IGD_P1_Neu_Lain = $this->input->post('EMR_dr_IGD_P1_Neu_Lain');

			//simpan tabel pemeriksaan fisik neurologis
			$EMR_dr_IGD_P1_PemeriksaanNeurologis = '<table border="0" style="width:100%"><tr><td style="padding:3px; width:18%">Motorik</td><td style="padding:3px; width:2%">:</td>
			<td style="padding:3px; width:80%"><table border="0" style="width:100%"><tr><td style="text-align:center; padding:3px; width:10%; border-right:1px solid; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_Neu_Motorik1.'</td><td style="text-align:center; padding:3px; width:10%; border-bottom:1px solid;">'.$EMR_dr_IGD_P1_Neu_Motorik2.'</td><td style="width:80%"></td></tr><tr><td style="text-align:center; padding:3px; border-right:1px solid;">'.$EMR_dr_IGD_P1_Neu_Motorik3.'</td><td style="text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_Neu_Motorik4.'</td><td></td></tr></table></td></tr><tr><td style="padding:3px;">Sensorik</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_Sensorik_simpan.'</td></tr><tr><td style="padding:3px;">Lain - lain</td><td style="padding:3px;">:</td><td style="padding:3px;">
			'.$EMR_dr_IGD_P1_Neu_Lain.'</td></tr></table>';

			if ($this->input->post('EMR_dr_IGD_P1_PeFi_2_CK_simpan') != '')
			{
			  $EMR_dr_IGD_P1_PemeriksaanKepala2 = $EMR_dr_IGD_P1_PemeriksaanKepala;
			}
			else
			{
			  $EMR_dr_IGD_P1_PemeriksaanKepala2 = "Tidak Dilakukan Pemeriksaan";
			}

			if ($this->input->post('EMR_dr_IGD_P1_PeFi_3_CK_simpan') != '')
			{
			  $EMR_dr_IGD_P1_PemeriksaanThorax2 = $EMR_dr_IGD_P1_PemeriksaanThor;
			}
			else
			{
			  $EMR_dr_IGD_P1_PemeriksaanThorax2 = "Tidak Dilakukan Pemeriksaan";
			}

			if ($this->input->post('EMR_dr_IGD_P1_PeFi_5_CK_simpan') != '')
			{
			  $EMR_dr_IGD_P1_PemeriksaanAbdomen2 = $EMR_dr_IGD_P1_PemeriksaanAbdomen;
			}
			else
			{
			  $EMR_dr_IGD_P1_PemeriksaanAbdomen2 = "Tidak Dilakukan Pemeriksaan";
			}

			if ($this->input->post('EMR_dr_IGD_P1_PeFi_6_CK_simpan') != '')
			{
			  $EMR_dr_IGD_P1_PemeriksaanEkstremitas2 = $EMR_dr_IGD_P1_PemeriksaanEkstremitas;
			}
			else
			{
			  $EMR_dr_IGD_P1_PemeriksaanEkstremitas2 = "Tidak Dilakukan Pemeriksaan";
			}

			if ($this->input->post('EMR_dr_IGD_P1_PeFi_7_CK_simpan') != '')
			{
			  $EMR_dr_IGD_P1_PemeriksaanNeurologis2 = $EMR_dr_IGD_P1_PemeriksaanNeurologis;
			}
			else
			{
			  $EMR_dr_IGD_P1_PemeriksaanNeurologis2 = "Tidak Dilakukan Pemeriksaan";
			}

			//awal simpan status Lokalis
			$EMR_dr_IGD_P1_SLBedah_simpan = $this->input->post('EMR_dr_IGD_P1_SLBedah_simpan');
			$EMR_dr_IGD_P1_SLTulang_simpan = $this->input->post('EMR_dr_IGD_P1_SLTulang_simpan');
			$EMR_dr_IGD_P1_SLRec_simpan = $this->input->post('EMR_dr_IGD_P1_SLRec_simpan');
			$EMR_dr_IGD_P1_SLTHT_simpan = $this->input->post('EMR_dr_IGD_P1_SLTHT_simpan');
			$EMR_dr_IGD_P1_SLMata_simpan = $this->input->post('EMR_dr_IGD_P1_SLMata_simpan');
			$EMR_dr_IGD_P1_SLNeurologis_simpan = $this->input->post('EMR_dr_IGD_P1_SLNeurologis_simpan');
			$EMR_dr_IGD_P1_SLJiwa_simpan = $this->input->post('EMR_dr_IGD_P1_SLJiwa_simpan');
			$EMR_dr_IGD_P1_SLKulit_simpan = $this->input->post('EMR_dr_IGD_P1_SLKulit_simpan');
			$EMR_dr_IGD_P1_SLObsgin_simpan = $this->input->post('EMR_dr_IGD_P1_SLObsgin_simpan');
			$EMR_dr_IGD_P1_SLObstetric_simpan = $this->input->post('EMR_dr_IGD_P1_SLObstetric_simpan');
			$EMR_dr_IGD_P1_SLGinekologis_simpan = $this->input->post('EMR_dr_IGD_P1_SLGinekologis_simpan');

			//awal SL rectum
			$EMR_dr_IGD_P1_SLRectumA1_simpan = $this->input->post('EMR_dr_IGD_P1_SLRectumA1_simpan');
			$EMR_dr_IGD_P1_SLRectumA2_simpan = $this->input->post('EMR_dr_IGD_P1_SLRectumA2_simpan');
			$EMR_dr_IGD_P1_SLRectumA3_simpan = $this->input->post('EMR_dr_IGD_P1_SLRectumA3_simpan');

			//SL Rectum Tonus
			if ($EMR_dr_IGD_P1_SLRectumA2_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLRectumA3_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLRectumTonus_simpan = $EMR_dr_IGD_P1_SLRectumA2_simpan.", ".$EMR_dr_IGD_P1_SLRectumA3_simpan;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLRectumTonus_simpan = $EMR_dr_IGD_P1_SLRectumA2_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLRectumA3_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLRectumA2_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLRectumTonus_simpan = $EMR_dr_IGD_P1_SLRectumA2_simpan.", ".$EMR_dr_IGD_P1_SLRectumA3_simpan;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLRectumTonus_simpan = $EMR_dr_IGD_P1_SLRectumA3_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLRectumA1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLRectumTonus_simpan = $EMR_dr_IGD_P1_SLRectumA1_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLRectumTonus_simpan = "";
			}

			//SL Rectum teraba massa
			$EMR_dr_IGD_P1_SLRectumB1_simpan = $this->input->post('EMR_dr_IGD_P1_SLRectumB1_simpan');
			$EMR_dr_IGD_P1_SLRectumB2_simpan = $this->input->post('EMR_dr_IGD_P1_SLRectumB2_simpan');
			$EMR_dr_IGD_P1_SLRectumB3 = $this->input->post('EMR_dr_IGD_P1_SLRectumB3');

			if ($EMR_dr_IGD_P1_SLRectumB1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLRectumTeraba_simpan = $EMR_dr_IGD_P1_SLRectumB1_simpan;
			}
			else if ($EMR_dr_IGD_P1_SLRectumB2_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLRectumTeraba_simpan = $EMR_dr_IGD_P1_SLRectumB2_simpan." (".$EMR_dr_IGD_P1_SLRectumB3.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_SLRectumTeraba_simpan = "";
			}

			//SL Rectum nyeri
			$EMR_dr_IGD_P1_SLRectumC1_simpan = $this->input->post('EMR_dr_IGD_P1_SLRectumC1_simpan');
			$EMR_dr_IGD_P1_SLRectumC2_simpan = $this->input->post('EMR_dr_IGD_P1_SLRectumC2_simpan');
			$EMR_dr_IGD_P1_SLRectumC3 = $this->input->post('EMR_dr_IGD_P1_SLRectumC3');

			if ($EMR_dr_IGD_P1_SLRectumC1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLRectumNyeri_simpan = $EMR_dr_IGD_P1_SLRectumC1_simpan;
			}
			else if ($EMR_dr_IGD_P1_SLRectumC2_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLRectumNyeri_simpan = $EMR_dr_IGD_P1_SLRectumC2_simpan." (".$EMR_dr_IGD_P1_SLRectumC3.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_SLRectumNyeri_simpan = "";
			}

			//SL Rectum kosong
			$EMR_dr_IGD_P1_SLRectumD1_simpan = $this->input->post('EMR_dr_IGD_P1_SLRectumD1_simpan');
			$EMR_dr_IGD_P1_SLRectumD2_simpan = $this->input->post('EMR_dr_IGD_P1_SLRectumD2_simpan');

			if ($EMR_dr_IGD_P1_SLRectumD1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLRectumKosong_simpan = $EMR_dr_IGD_P1_SLRectumD1_simpan;
			}
			else if ($EMR_dr_IGD_P1_SLRectumD2_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLRectumKosong_simpan = $EMR_dr_IGD_P1_SLRectumD2_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLRectumKosong_simpan = "";
			}

			$EMR_dr_IGD_P1_SLRectumE = $this->input->post('EMR_dr_IGD_P1_SLRectumE');

			//simpan tabel SL Rectum
			if ($EMR_dr_IGD_P1_SLRec_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLRectumSeluruh_simpan = '<table border="0" style="width:100%"><tr><td style="padding:3px;" colspan="3"><b># STATUS LOKALIS RECTUM</b></td></tr>
			  <tr><td style="padding:3px; width:23%">Tonus Sphincter Ani</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:75%">'.$EMR_dr_IGD_P1_SLRectumTonus_simpan.'
			  </td></tr><tr><td style="padding:3px; width:28%">Teraba Massa</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:2%">'.$EMR_dr_IGD_P1_SLRectumTeraba_simpan.'
			  </td></tr><tr><td style="padding:3px; width:28%">Nyeri</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:2%">'.$EMR_dr_IGD_P1_SLRectumNyeri_simpan.'
			  </td></tr><tr><td style="padding:3px; width:28%">Kosong</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:2%">'.$EMR_dr_IGD_P1_SLRectumKosong_simpan.'
			  </td></tr><tr><td style="padding:3px; width:28%">Lain - lain</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:2%">'.$EMR_dr_IGD_P1_SLRectumE.'</td></tr></table></br>';
			}
			else
			{
			  $EMR_dr_IGD_P1_SLRectumSeluruh_simpan = "";
			}

			//awal SL THT
			//awal SL telinga kanan
			$EMR_dr_IGD_P1_SLTelingaKananA1_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKananA1_simpan');
			$EMR_dr_IGD_P1_SLTelingaKananA2_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKananA2_simpan');
			$EMR_dr_IGD_P1_SLTelingaKananA3_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKananA3_simpan');
			$EMR_dr_IGD_P1_SLTelingaKananA4_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKananA4_simpan');
			$EMR_dr_IGD_P1_SLTelingaKananA5 = $this->input->post('EMR_dr_IGD_P1_SLTelingaKananA5');
			if ($EMR_dr_IGD_P1_SLTelingaKananA2_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLTelingaKananA3_simpan != '')
			  {
			    if ($EMR_dr_IGD_P1_SLTelingaKananA4_simpan != '')
			    {
			      $EMR_dr_IGD_P1_SLTelKananA_simpan = $EMR_dr_IGD_P1_SLTelingaKananA2_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKananA3_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKananA5;
			    }
			    else
			    {
			      $EMR_dr_IGD_P1_SLTelKananA_simpan = $EMR_dr_IGD_P1_SLTelingaKananA2_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKananA3_simpan;
			    }
			  }
			  else if ($EMR_dr_IGD_P1_SLTelingaKananA4_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLTelKananA_simpan = $EMR_dr_IGD_P1_SLTelingaKananA2_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKananA5;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLTelKananA_simpan = $EMR_dr_IGD_P1_SLTelingaKananA2_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKananA3_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLTelingaKananA4_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLTelKananA_simpan = $EMR_dr_IGD_P1_SLTelingaKananA3_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKananA5;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLTelKananA_simpan = $EMR_dr_IGD_P1_SLTelingaKananA3_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKananA4_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTelKananA_simpan = $EMR_dr_IGD_P1_SLTelingaKananA5;
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKananA1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTelKananA_simpan = $EMR_dr_IGD_P1_SLTelingaKananA1_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLTelKananA_simpan = "";
			}

			$EMR_dr_IGD_P1_SLTelingaKananB1_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKananB1_simpan');
			$EMR_dr_IGD_P1_SLTelingaKananB2_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKananB2_simpan');
			$EMR_dr_IGD_P1_SLTelingaKananB3_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKananB3_simpan');
			$EMR_dr_IGD_P1_SLTelingaKananB4 = $this->input->post('EMR_dr_IGD_P1_SLTelingaKananB4');
			if ($EMR_dr_IGD_P1_SLTelingaKananB2_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLTelingaKananB3_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLTelKananB_simpan = $EMR_dr_IGD_P1_SLTelingaKananB2_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKananB4;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLTelKananB_simpan = $EMR_dr_IGD_P1_SLTelingaKananB2_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKananB3_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTelKananB_simpan = $EMR_dr_IGD_P1_SLTelingaKananB4;
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKananB1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTelKananB_simpan = $EMR_dr_IGD_P1_SLTelingaKananB1_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLTelKananB_simpan = "";
			}

			//awal Sl telinga kiri
			$EMR_dr_IGD_P1_SLTelingaKiriA1_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKiriA1_simpan');
			$EMR_dr_IGD_P1_SLTelingaKiriA2_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKiriA2_simpan');
			$EMR_dr_IGD_P1_SLTelingaKiriA3_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKiriA3_simpan');
			$EMR_dr_IGD_P1_SLTelingaKiriA4_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKiriA4_simpan');
			$EMR_dr_IGD_P1_SLTelingaKiriA5 = $this->input->post('EMR_dr_IGD_P1_SLTelingaKiriA5');
			if ($EMR_dr_IGD_P1_SLTelingaKiriA2_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLTelingaKiriA3_simpan != '')
			  {
			    if ($EMR_dr_IGD_P1_SLTelingaKiriA4_simpan != '')
			    {
			      $EMR_dr_IGD_P1_SLTelKiriA_simpan = $EMR_dr_IGD_P1_SLTelingaKiriA2_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKiriA3_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKiriA5;
			    }
			    else
			    {
			      $EMR_dr_IGD_P1_SLTelKiriA_simpan = $EMR_dr_IGD_P1_SLTelingaKiriA2_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKiriA3_simpan;
			    }
			  }
			  else if ($EMR_dr_IGD_P1_SLTelingaKiriA4_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLTelKiriA_simpan = $EMR_dr_IGD_P1_SLTelingaKiriA2_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKiriA5;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLTelKiriA_simpan = $EMR_dr_IGD_P1_SLTelingaKiriA2_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKiriA3_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLTelingaKiriA4_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLTelKiriA_simpan = $EMR_dr_IGD_P1_SLTelingaKiriA3_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKiriA5;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLTelKiriA_simpan = $EMR_dr_IGD_P1_SLTelingaKiriA3_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKiriA4_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTelKiriA_simpan = $EMR_dr_IGD_P1_SLTelingaKiriA5;
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKiriA1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTelKiriA_simpan = $EMR_dr_IGD_P1_SLTelingaKiriA1_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLTelKiriA_simpan = "";
			}

			$EMR_dr_IGD_P1_SLTelingaKiriB1_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKiriB1_simpan');
			$EMR_dr_IGD_P1_SLTelingaKiriB2_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKiriB2_simpan');
			$EMR_dr_IGD_P1_SLTelingaKiriB3_simpan = $this->input->post('EMR_dr_IGD_P1_SLTelingaKiriB3_simpan');
			$EMR_dr_IGD_P1_SLTelingaKiriB4 = $this->input->post('EMR_dr_IGD_P1_SLTelingaKiriB4');
			if ($EMR_dr_IGD_P1_SLTelingaKiriB2_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLTelingaKiriB3_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLTelKiriB_simpan = $EMR_dr_IGD_P1_SLTelingaKiriB2_simpan.", ".$EMR_dr_IGD_P1_SLTelingaKiriB4;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLTelKiriB_simpan = $EMR_dr_IGD_P1_SLTelingaKiriB2_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKiriB3_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTelKiriB_simpan = $EMR_dr_IGD_P1_SLTelingaKiriB4;
			}
			else if ($EMR_dr_IGD_P1_SLTelingaKiriB1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTelKiriB_simpan = $EMR_dr_IGD_P1_SLTelingaKiriB1_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLTelKiriB_simpan = "";
			}

			//awal SL hidung
			$EMR_dr_IGD_P1_SLHidungA1_simpan = $this->input->post('EMR_dr_IGD_P1_SLHidungA1_simpan');
			$EMR_dr_IGD_P1_SLHidungA2_simpan = $this->input->post('EMR_dr_IGD_P1_SLHidungA2_simpan');
			$EMR_dr_IGD_P1_SLHidungA3_simpan = $this->input->post('EMR_dr_IGD_P1_SLHidungA3_simpan');
			$EMR_dr_IGD_P1_SLHidungA4 = $this->input->post('EMR_dr_IGD_P1_SLHidungA4');
			if ($EMR_dr_IGD_P1_SLHidungA2_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLHidungA3_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLHidungA_simpan = $EMR_dr_IGD_P1_SLHidungA2_simpan.", ".$EMR_dr_IGD_P1_SLHidungA4;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLHidungA_simpan = $EMR_dr_IGD_P1_SLHidungA2_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLHidungA3_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLHidungA_simpan = $EMR_dr_IGD_P1_SLHidungA4;
			}
			else if ($EMR_dr_IGD_P1_SLHidungA1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLHidungA_simpan = $EMR_dr_IGD_P1_SLHidungA1_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLHidungA_simpan = "";
			}

			$EMR_dr_IGD_P1_SLHidungB1_simpan = $this->input->post('EMR_dr_IGD_P1_SLHidungB1_simpan');
			$EMR_dr_IGD_P1_SLHidungB2_simpan = $this->input->post('EMR_dr_IGD_P1_SLHidungB2_simpan');
			$EMR_dr_IGD_P1_SLHidungB3_simpan = $this->input->post('EMR_dr_IGD_P1_SLHidungB3_simpan');
			$EMR_dr_IGD_P1_SLHidungB4_simpan = $this->input->post('EMR_dr_IGD_P1_SLHidungB4_simpan');
			$EMR_dr_IGD_P1_SLHidungB5 = $this->input->post('EMR_dr_IGD_P1_SLHidungB5');
			if ($EMR_dr_IGD_P1_SLHidungB2_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLHidungB3_simpan != '')
			  {
			    if ($EMR_dr_IGD_P1_SLHidungB4_simpan != '')
			    {
			      $EMR_dr_IGD_P1_SLHidungB_simpan = $EMR_dr_IGD_P1_SLHidungB2_simpan.", ".$EMR_dr_IGD_P1_SLHidungB3_simpan.", ".$EMR_dr_IGD_P1_SLHidungB5;
			    }
			    else
			    {
			      $EMR_dr_IGD_P1_SLHidungB_simpan = $EMR_dr_IGD_P1_SLHidungB2_simpan.", ".$EMR_dr_IGD_P1_SLHidungB3_simpan;
			    }
			  }
			  else if ($EMR_dr_IGD_P1_SLHidungB4_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLHidungB_simpan = $EMR_dr_IGD_P1_SLHidungB2_simpan.", ".$EMR_dr_IGD_P1_SLHidungB5;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLHidungB_simpan = $EMR_dr_IGD_P1_SLHidungB2_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLHidungB3_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLHidungB4_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLHidungB_simpan = $EMR_dr_IGD_P1_SLHidungB3_simpan.", ".$EMR_dr_IGD_P1_SLHidungB5;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLHidungB_simpan = $EMR_dr_IGD_P1_SLHidungB3_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLHidungB4_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLHidungB_simpan = $EMR_dr_IGD_P1_SLHidungB5;
			}
			else if ($EMR_dr_IGD_P1_SLHidungB1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLHidungB_simpan = $EMR_dr_IGD_P1_SLHidungB1_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLHidungB_simpan = "";
			}

			//awal SL tenggorokan
			$EMR_dr_IGD_P1_SLTenggorokanA1_simpan = $this->input->post('EMR_dr_IGD_P1_SLTenggorokanA1_simpan');
			$EMR_dr_IGD_P1_SLTenggorokanA2_simpan = $this->input->post('EMR_dr_IGD_P1_SLTenggorokanA2_simpan');
			$EMR_dr_IGD_P1_SLTenggorokanA3_simpan = $this->input->post('EMR_dr_IGD_P1_SLTenggorokanA3_simpan');
			$EMR_dr_IGD_P1_SLTenggorokanA4 = $this->input->post('EMR_dr_IGD_P1_SLTenggorokanA4');
			if ($EMR_dr_IGD_P1_SLTenggorokanA2_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLTenggorokanA3_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLTenggorokanA_simpan = $EMR_dr_IGD_P1_SLTenggorokanA2_simpan.", ".$EMR_dr_IGD_P1_SLTenggorokanA4;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLTenggorokanA_simpan = $EMR_dr_IGD_P1_SLTenggorokanA2_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLTenggorokanA3_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTenggorokanA_simpan = $EMR_dr_IGD_P1_SLTenggorokanA4;
			}
			else if ($EMR_dr_IGD_P1_SLTenggorokanA1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTenggorokanA_simpan = $EMR_dr_IGD_P1_SLTenggorokanA1_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLTenggorokanA_simpan = "";
			}

			$EMR_dr_IGD_P1_SLTenggorokanB1_simpan = $this->input->post('EMR_dr_IGD_P1_SLTenggorokanB1_simpan');
			$EMR_dr_IGD_P1_SLTenggorokanB2_simpan = $this->input->post('EMR_dr_IGD_P1_SLTenggorokanB2_simpan');
			$EMR_dr_IGD_P1_SLTenggorokanB3_simpan = $this->input->post('EMR_dr_IGD_P1_SLTenggorokanB3_simpan');
			$EMR_dr_IGD_P1_SLTenggorokanB4_simpan = $this->input->post('EMR_dr_IGD_P1_SLTenggorokanB4_simpan');
			$EMR_dr_IGD_P1_SLTenggorokanB5 = $this->input->post('EMR_dr_IGD_P1_SLTenggorokanB5');
			if ($EMR_dr_IGD_P1_SLTenggorokanB2_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLTenggorokanB3_simpan != '')
			  {
			    if ($EMR_dr_IGD_P1_SLTenggorokanB4_simpan != '')
			    {
			      $EMR_dr_IGD_P1_SLTenggorokanB_simpan = $EMR_dr_IGD_P1_SLTenggorokanB2_simpan.", ".$EMR_dr_IGD_P1_SLTenggorokanB3_simpan.", ".$EMR_dr_IGD_P1_SLTenggorokanB5;
			    }
			    else
			    {
			      $EMR_dr_IGD_P1_SLTenggorokanB_simpan = $EMR_dr_IGD_P1_SLTenggorokanB2_simpan.", ".$EMR_dr_IGD_P1_SLTenggorokanB3_simpan;
			    }
			  }
			  else if ($EMR_dr_IGD_P1_SLTenggorokanB4_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLTenggorokanB_simpan = $EMR_dr_IGD_P1_SLTenggorokanB2_simpan.", ".$EMR_dr_IGD_P1_SLTenggorokanB5;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLTenggorokanB_simpan = $EMR_dr_IGD_P1_SLTenggorokanB2_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLTenggorokanB3_simpan != '')
			{
			  if ($EMR_dr_IGD_P1_SLTenggorokanB4_simpan != '')
			  {
			    $EMR_dr_IGD_P1_SLTenggorokanB_simpan = $EMR_dr_IGD_P1_SLTenggorokanB3_simpan.", ".$EMR_dr_IGD_P1_SLTenggorokanB5;
			  }
			  else
			  {
			    $EMR_dr_IGD_P1_SLTenggorokanB_simpan = $EMR_dr_IGD_P1_SLTenggorokanB3_simpan;
			  }
			}
			else if ($EMR_dr_IGD_P1_SLTenggorokanB4_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTenggorokanB_simpan = $EMR_dr_IGD_P1_SLTenggorokanB5;
			}
			else if ($EMR_dr_IGD_P1_SLTenggorokanB1_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTenggorokanB_simpan = $EMR_dr_IGD_P1_SLTenggorokanB1_simpan;
			}
			else
			{
			  $EMR_dr_IGD_P1_SLTenggorokanB_simpan = "";
			}

			//simpan tabel SL THT
			if ($EMR_dr_IGD_P1_SLTHT_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLTHTSeluruh_simpan = '<table border="0" style="width:100%"><tr><td style="padding:3px;" colspan="6"><b># STATUS LOKALIS THT</b></td></tr><tr>
			  <td style="border-right:1px solid; border-bottom:1px solid; border-top:1px solid; text-align:center; padding:3px;" colspan="3"><b>Telinga Kanan</b></td>
			  <td style="border-bottom:1px solid; border-top:1px solid; text-align:center; padding:3px;" colspan="3"><b>Telinga Kiri</b></td></tr><tr><td style="padding:3px; width:17%">Saluran</td>
			  <td style="padding:3px; width:2%">:</td><td style="padding:3px; width:30%">'.$EMR_dr_IGD_P1_SLTelKananA_simpan.'</td><td style="padding:3px; width:17%">Saluran</td>
			  <td style="padding:3px; width:2%">:</td><td style="padding:3px; width:30%">'.$EMR_dr_IGD_P1_SLTelKiriA_simpan.'</td></tr><tr><td style="padding:3px;">Membran Timpani</td>
			  <td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLTelKananB_simpan.'</td><td style="padding:3px;">Membran Timpani</td><td style="padding:3px;">:</td>
			  <td style="padding:3px;">'.$EMR_dr_IGD_P1_SLTelKiriB_simpan.'</td></tr><tr><td style="border-bottom:1px solid; border-top:1px solid; text-align:center; padding:3px;" colspan="6"><b>Hidung</b></td></tr>
			  <tr><td style="padding:3px;">Nose Septum</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLHidungA_simpan.'</td><td style="padding:3px;">Nose Konka</td><td style="padding:3px;">:</td>
			  <td style="padding:3px;">'.$EMR_dr_IGD_P1_SLHidungB_simpan.'</td></tr><tr><td style="border-bottom:1px solid; border-top:1px solid; text-align:center; padding:3px;" colspan="6"><b>Tenggorokan</b></td></tr>
			  <tr><td style="padding:3px;">Pharyn/Faring</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLTenggorokanA_simpan.'</td><td style="padding:3px;">Tonsil/Amandel</td><td style="padding:3px;">:</td>
			  <td style="padding:3px;">'.$EMR_dr_IGD_P1_SLTenggorokanB_simpan.'</td></tr></table></br>';
			}
			else
			{
			  $EMR_dr_IGD_P1_SLTHTSeluruh_simpan = "";
			}

			//awal SL mata
			$EMR_dr_IGD_P1_AVOD_simpan = $this->input->post('EMR_dr_IGD_P1_AVOD_simpan');
			$EMR_dr_IGD_P1_AVOS_simpan = $this->input->post('EMR_dr_IGD_P1_AVOS_simpan');
			$EMR_dr_IGD_P1_GerakMataOD = $this->input->post('EMR_dr_IGD_P1_GerakMataOD');
			$EMR_dr_IGD_P1_GerakMataOS = $this->input->post('EMR_dr_IGD_P1_GerakMataOS');
			$EMR_dr_IGD_P1_PosisiMataOD = $this->input->post('EMR_dr_IGD_P1_PosisiMataOD');
			$EMR_dr_IGD_P1_PosisiMataOS = $this->input->post('EMR_dr_IGD_P1_PosisiMataOS');
			$EMR_dr_IGD_P1_PalpebraMataOD = $this->input->post('EMR_dr_IGD_P1_PalpebraMataOD');
			$EMR_dr_IGD_P1_PalpebraMataOS = $this->input->post('EMR_dr_IGD_P1_PalpebraMataOS');
			$EMR_dr_IGD_P1_KonjungtivaMataSilOD = $this->input->post('EMR_dr_IGD_P1_KonjungtivaMataSilOD');
			$EMR_dr_IGD_P1_KonjungtivaMataCojOD = $this->input->post('EMR_dr_IGD_P1_KonjungtivaMataCojOD');
			$EMR_dr_IGD_P1_KonjungtivaMataCojOS = $this->input->post('EMR_dr_IGD_P1_KonjungtivaMataCojOS');
			$EMR_dr_IGD_P1_KonjungtivaMataSilOS = $this->input->post('EMR_dr_IGD_P1_KonjungtivaMataSilOS');
			$EMR_dr_IGD_P1_KorneaMataOD = $this->input->post('EMR_dr_IGD_P1_KorneaMataOD');
			$EMR_dr_IGD_P1_KorneaMataOS = $this->input->post('EMR_dr_IGD_P1_KorneaMataOS');
			$EMR_dr_IGD_P1_BMDMataOD = $this->input->post('EMR_dr_IGD_P1_BMDMataOD');
			$EMR_dr_IGD_P1_BMDMataOS = $this->input->post('EMR_dr_IGD_P1_BMDMataOS');
			$EMR_dr_IGD_P1_IrisMataOD = $this->input->post('EMR_dr_IGD_P1_IrisMataOD');
			$EMR_dr_IGD_P1_IrisMataOS = $this->input->post('EMR_dr_IGD_P1_IrisMataOS');
			$EMR_dr_IGD_P1_pupilKanan2 = $this->input->post('EMR_dr_IGD_P1_pupilKanan2');
			$EMR_dr_IGD_P1_pupilKiri2 = $this->input->post('EMR_dr_IGD_P1_pupilKiri2');
			$EMR_dr_IGD_P1_PupilMataOD = $this->input->post('EMR_dr_IGD_P1_PupilMataOD');
			$EMR_dr_IGD_P1_pupilstat2 = $this->input->post('EMR_dr_IGD_P1_pupilstat2');
			$EMR_dr_IGD_P1_PupilMataOS = $this->input->post('EMR_dr_IGD_P1_PupilMataOS');
			$EMR_dr_IGD_P1_LensaMataOD = $this->input->post('EMR_dr_IGD_P1_LensaMataOD');
			$EMR_dr_IGD_P1_LensaMataOS = $this->input->post('EMR_dr_IGD_P1_LensaMataOS');
			$EMR_dr_IGD_P1_VitreusMataOD = $this->input->post('EMR_dr_IGD_P1_VitreusMataOD');
			$EMR_dr_IGD_P1_VitreusMataOS = $this->input->post('EMR_dr_IGD_P1_VitreusMataOS');
			$EMR_dr_IGD_P1_TIOMataOD = $this->input->post('EMR_dr_IGD_P1_TIOMataOD');
			$EMR_dr_IGD_P1_TIOMataOS = $this->input->post('EMR_dr_IGD_P1_TIOMataOS');

			//simpan tabel SL mata
			if ($EMR_dr_IGD_P1_SLMata_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLMataSeluruh_simpan = '<table border="0" style="width:100%"><tr><td style="padding:3px;" colspan="3"><b># STATUS LOKALIS MATA</b></td></tr>
			  <tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>OD</b></td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Pemeriksaan</b></td>
			  <td style="border-bottom:1px solid; text-align:center; padding:3px;"><b>OS</b></td></tr><tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_AVOD_simpan.'
			  </td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Visus</b></td><td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_AVOS_simpan.'
			  </td></tr><tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_GerakMataOD.'</td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Gerakan Bola Mata</b></td>
			  <td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_GerakMataOS.'</td></tr><tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_PosisiMataOD.'
			  </td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Posisi</b></td><td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_PosisiMataOS.'</td></tr>
			  <tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_PalpebraMataOD.'</td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Palpebra</b></td>
			  <td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_PalpebraMataOS.'</td></tr><tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_KonjungtivaMataSilOD.'
			  </br>'.$EMR_dr_IGD_P1_KonjungtivaMataCojOD.'</td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Konjungtiva</b></td><td style="border-bottom:1px solid; text-align:center; padding:3px;">
			  '.$EMR_dr_IGD_P1_KonjungtivaMataSilOS.'</br>'.$EMR_dr_IGD_P1_KonjungtivaMataCojOS.'</td></tr><tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_KorneaMataOD.'
			  </td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Kornea</b></td><td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_KorneaMataOS.'</td></tr>
			  <tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_BMDMataOD.'</td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>BMD</b></td>
			  <td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_BMDMataOS.'</td></tr><tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_IrisMataOD.'
			  </td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Iris</b></td><td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_IrisMataOS.'</td></tr>
			  <tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_pupilKanan2.'</td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Pupil</b></td>
			  <td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_pupilKiri2.'</td></tr><tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_PupilMataOD.'
			  </td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>'.$EMR_dr_IGD_P1_pupilstat2.'</b></td><td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_PupilMataOS.'
			  </td></tr><tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_LensaMataOD.'</td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Lensa</b></td>
			  <td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_LensaMataOS.'</td></tr><tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_VitreusMataOD.'
			  <td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>Vitreus Funduskopi</b></td><td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_VitreusMataOS.'</td></tr>
			  <tr><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_TIOMataOD.'</td><td style="border-bottom:1px solid; border-right:1px solid; text-align:center; padding:3px;"><b>TIO</b></td>
			  <td style="border-bottom:1px solid; text-align:center; padding:3px;">'.$EMR_dr_IGD_P1_TIOMataOS.'</td></tr></table></br>';
			}
			else
			{
			  $EMR_dr_IGD_P1_SLMataSeluruh_simpan = "";
			}

			//awal SL neurologis
			$EMR_dr_IGD_P1_SLNeurologis2 = $this->input->post('EMR_dr_IGD_P1_SLNeurologis2');

			//simpan tabel SL neurologis
			if ($EMR_dr_IGD_P1_SLNeurologis_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLNeurologisSeluruh_simpan = '<table border="0" style="width:100%"><tr><td style="padding:3px;"><b># STATUS LOKALIS NEUROLOGIS</b></td></tr><tr><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLNeurologis2.'</td></tr></table></br>';
			}
			else
			{
			  $EMR_dr_IGD_P1_SLNeurologisSeluruh_simpan = "";
			}

			//awal SL jiwa
			$EMR_dr_IGD_P1_SLJiwa2 = $this->input->post('EMR_dr_IGD_P1_SLJiwa2');

			//simpan tabel SL jiwa
			if ($EMR_dr_IGD_P1_SLJiwa_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLJiwaSeluruh_simpan = '<table border="0" style="width:100%"><tr><td style="padding:3px;"><b># STATUS LOKALIS JIWA</b></td></tr><tr><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLJiwa2.'</td></tr></table></br>';
			}
			else
			{
			  $EMR_dr_IGD_P1_SLJiwaSeluruh_simpan = "";
			}

			//awal SL kulit
			$EMR_dr_IGD_P1_SLKulit2 = $this->input->post('EMR_dr_IGD_P1_SLKulit2');

			//simpan tabel SL kulit
			if ($EMR_dr_IGD_P1_SLKulit_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLKulitSeluruh_simpan = '<table border="0" style="width:100%"><tr><td style="padding:3px;"><b># STATUS LOKALIS KULIT</b></td></tr><tr><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLKulit2.'</td></tr></table></br>';
			}
			else
			{
			  $EMR_dr_IGD_P1_SLKulitSeluruh_simpan = "";
			}

			//awal SL Obstetric
			$EMR_dr_IGD_P1_SLObstetricInspeksi = $this->input->post('EMR_dr_IGD_P1_SLObstetricInspeksi');
			$EMR_dr_IGD_P1_SLObstetrictfu = $this->input->post('EMR_dr_IGD_P1_SLObstetrictfu');
			$EMR_dr_IGD_P1_SLObstetriclp = $this->input->post('EMR_dr_IGD_P1_SLObstetriclp');
			$EMR_dr_IGD_P1_SLObstetrichis = $this->input->post('EMR_dr_IGD_P1_SLObstetrichis');
			$EMR_dr_IGD_P1_SLObstetricKekuatan = $this->input->post('EMR_dr_IGD_P1_SLObstetricKekuatan');
			$EMR_dr_IGD_P1_SLObstetrictbbj = $this->input->post('EMR_dr_IGD_P1_SLObstetrictbbj');
			$EMR_dr_IGD_P1_SLObstetricleopoid1 = $this->input->post('EMR_dr_IGD_P1_SLObstetricleopoid1');
			$EMR_dr_IGD_P1_SLObstetricleopoid2 = $this->input->post('EMR_dr_IGD_P1_SLObstetricleopoid2');
			$EMR_dr_IGD_P1_SLObstetricleopoid3 = $this->input->post('EMR_dr_IGD_P1_SLObstetricleopoid3');
			$EMR_dr_IGD_P1_SLObstetricleopoid4 = $this->input->post('EMR_dr_IGD_P1_SLObstetricleopoid4');
			if ($EMR_dr_IGD_P1_SLObstetricleopoid4 == "Konvergen")
			{
			  $EMR_dr_IGD_P1_SLObstetricleopoid4KananSimpan = $this->input->post('EMR_dr_IGD_P1_SLObstetricleopoid4konKanan');
			  $EMR_dr_IGD_P1_SLObstetricleopoid4KiriSimpan = $this->input->post('EMR_dr_IGD_P1_SLObstetricleopoid4konKiri');
			}
			else
			{
			  $EMR_dr_IGD_P1_SLObstetricleopoid4KananSimpan = $this->input->post('EMR_dr_IGD_P1_SLObstetricleopoid4devKanan');
			  $EMR_dr_IGD_P1_SLObstetricleopoid4KiriSimpan = $this->input->post('EMR_dr_IGD_P1_SLObstetricleopoid4devKiri');
			}
			$EMR_dr_IGD_P1_SLObstetricpembukaan = $this->input->post('EMR_dr_IGD_P1_SLObstetricpembukaan');
			$EMR_dr_IGD_P1_SLObstetricpenipisan = $this->input->post('EMR_dr_IGD_P1_SLObstetricpenipisan');
			$EMR_dr_IGD_P1_SLObstetricbtnKetuban = $this->input->post('EMR_dr_IGD_P1_SLObstetricbtnKetuban');
			$EMR_dr_IGD_P1_SLObstetricKetubantxt = $this->input->post('EMR_dr_IGD_P1_SLObstetricKetubantxt');
			if ($EMR_dr_IGD_P1_SLObstetricbtnKetuban == "-")
			{
			  $EMR_dr_IGD_P1_SLObstetricbtnKetuban_simpan = $EMR_dr_IGD_P1_SLObstetricbtnKetuban." (".$EMR_dr_IGD_P1_SLObstetricKetubantxt.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_SLObstetricbtnKetuban_simpan = $EMR_dr_IGD_P1_SLObstetricbtnKetuban;
			}
			$EMR_dr_IGD_P1_SLObstetricrabahodge = $this->input->post('EMR_dr_IGD_P1_SLObstetricrabahodge');
			$EMR_dr_IGD_P1_SLObstetricDJJ = $this->input->post('EMR_dr_IGD_P1_SLObstetricDJJ');
			$EMR_dr_IGD_P1_SLObstetricLain2 = $this->input->post('EMR_dr_IGD_P1_SLObstetricLain2');

			//simpan tabel SL Obstetric
			if ($EMR_dr_IGD_P1_SLObstetric_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLObstetricSeluruh_simpan = '<table border="0" style="width:100%"><tr><td style="padding:3px;" colspan="6"><b># STATUS LOKALIS OBSTETRIC</b></td></tr><tr>
			  <td style="padding:3px; text-align:center; border-bottom:1px solid; border-top:1px solid;" colspan="6"><b>Pemeriksaan Abdomen</b></td></tr><tr><td style="padding:3px; width:13%">Inspeksi</td><td style="padding:3px; width:2%">:</td>
			  <td style="padding:3px;" colspan="4">'.$EMR_dr_IGD_P1_SLObstetricInspeksi.'</td></tr><tr><td style="padding:3px; text-align:center; border-bottom:1px solid; border-top:1px solid;" colspan="6"><b>Palpasi</b></td></tr>
			  <tr><td style="padding:3px; width:13%">TFU</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:35%">'.$EMR_dr_IGD_P1_SLObstetrictfu.' cm</td><td style="padding:3px; width:13%">LP</td>
			  <td style="padding:3px; width:2%">:</td><td style="padding:3px; width:35%">'.$EMR_dr_IGD_P1_SLObstetriclp.'</td></tr><tr><td style="padding:3px;">HIS</td><td style="padding:3px;">:</td><td style="padding:3px;">
			  '.$EMR_dr_IGD_P1_SLObstetrichis.' x/m</td><td style="padding:3px;">Kekuatan</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLObstetricKekuatan.'</td></tr>
			  <tr><td style="padding:3px;">TBBJ</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLObstetrictbbj.' gram</td><td style="padding:3px;">Leopoid 1</td><td style="padding:3px;">:</td><td style="padding:3px;">
			  '.$EMR_dr_IGD_P1_SLObstetricleopoid1.'</td></tr><tr><td style="padding:3px;">Leopoid 2</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLObstetricleopoid2.'</td>
			  <td style="padding:3px;">Leopoid 3</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLObstetricleopoid3.'</td></tr><tr><td style="padding:3px;">Leopoid 4</td><td style="padding:3px;">:</td>
			  <td style="padding:3px;" colspan="2">'.$EMR_dr_IGD_P1_SLObstetricleopoid4.' Kanan ('.$EMR_dr_IGD_P1_SLObstetricleopoid4KananSimpan.')</td><td style="padding:3px;" colspan="2">'.$EMR_dr_IGD_P1_SLObstetricleopoid4.' Kiri (
			  '.$EMR_dr_IGD_P1_SLObstetricleopoid4KiriSimpan.')</td></tr><tr><td style="padding:3px; text-align:center; border-bottom:1px solid; border-top:1px solid;" colspan="6"><b>VT</b></td></tr><tr><td style="padding:3px;">Pembukaan</td>
			  <td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLObstetricpembukaan.'</td><td style="padding:3px;">Penipisan</td><td style="padding:3px;">:</td><td style="padding:3px;">
			  '.$EMR_dr_IGD_P1_SLObstetricpenipisan.' %</td></tr><tr><td style="padding:3px;">Selaput Ketuban</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLObstetricbtnKetuban_simpan.'</td>
			  <td style="padding:3px;">Teraba Kepala Setinggi Hodge</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLObstetricrabahodge.'</td></tr>
			  <tr><td style="padding:3px; text-align:center; border-bottom:1px solid; border-top:1px solid;" colspan="6"><b>Auskultasi</b></td></tr><tr><td style="padding:3px;">DJJ</td><td style="padding:3px;">:</td>
			  <td style="padding:3px;">'.$EMR_dr_IGD_P1_SLObstetricDJJ.' x/m</td><td style="padding:3px;">Lain-lain</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLObstetricLain2.'</td></tr></table></br>';
			}
			else
			{
			  $EMR_dr_IGD_P1_SLObstetricSeluruh_simpan = "";
			}

			//awal SL Ginekologis
			$EMR_dr_IGD_P1_SLGinekologisInspeksi = $this->input->post('EMR_dr_IGD_P1_SLGinekologisInspeksi');
			$EMR_dr_IGD_P1_SLGinekologisbtnSupel = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnSupel');
			$EMR_dr_IGD_P1_SLGinekologisbtnNyeTek = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnNyeTek');
			$EMR_dr_IGD_P1_SLGinekologisbtnBenjolan = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnBenjolan');
			$EMR_dr_IGD_P1_SLGinekologisbtnDefmus = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnDefmus');
			$EMR_dr_IGD_P1_SLGinekologisPalpasiTxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisPalpasiTxt');
			$EMR_dr_IGD_P1_SLGinekologisPerkusiTxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisPerkusiTxt');
			$EMR_dr_IGD_P1_SLGinekologisAuskultasiTxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisAuskultasiTxt');
			$EMR_dr_IGD_P1_SLGinekologisPelvikTxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisPelvikTxt');
			$EMR_dr_IGD_P1_SLGinekologisDindingvagTxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisDindingvagTxt');
			$EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek');
			$EMR_dr_IGD_P1_SLGinekologisbtnMassa = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnMassa');
			$EMR_dr_IGD_P1_SLGinekologisMassatxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisMassatxt');
			if ($EMR_dr_IGD_P1_SLGinekologisbtnMassa == "+")
			{
			  $EMR_dr_IGD_P1_SLGinekologisbtnMassa_simpan = $EMR_dr_IGD_P1_SLGinekologisbtnMassa." (".$EMR_dr_IGD_P1_SLGinekologisMassatxt.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_SLGinekologisbtnMassa_simpan = $EMR_dr_IGD_P1_SLGinekologisbtnMassa;
			}
			$EMR_dr_IGD_P1_SLGinekologisPorUkTxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisPorUkTxt');
			$EMR_dr_IGD_P1_SLGinekologisbtnFluksus = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnFluksus');
			$EMR_dr_IGD_P1_SLGinekologisbtnFluor = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnFluor');
			$EMR_dr_IGD_P1_SLGinekologisbtnErosi = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnErosi');
			$EMR_dr_IGD_P1_SLGinekologisErositxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisErositxt');
			if ($EMR_dr_IGD_P1_SLGinekologisbtnErosi == "+")
			{
			  $EMR_dr_IGD_P1_SLGinekologisbtnErosi_simpan = $EMR_dr_IGD_P1_SLGinekologisbtnErosi." (".$EMR_dr_IGD_P1_SLGinekologisErositxt.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_SLGinekologisbtnErosi_simpan = $EMR_dr_IGD_P1_SLGinekologisbtnErosi;
			}
			$EMR_dr_IGD_P1_SLGinekologisOUEtxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisOUEtxt');
			$EMR_dr_IGD_P1_SLGinekologisInspektxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisInspektxt');
			$EMR_dr_IGD_P1_SLGinekologisbtnUterus = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnUterus');
			$EMR_dr_IGD_P1_SLGinekologisBentukVTtxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisBentukVTtxt');
			$EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT');
			$EMR_dr_IGD_P1_SLGinekologisUkurantxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisUkurantxt');
			$EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan');
			$EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt');
			if ($EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan == "+")
			{
			  $EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan_simpan = $EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan." (".$EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan_simpan = $EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan;
			}
			$EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri = $this->input->post('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri');
			$EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt');
			if ($EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri == "+")
			{
			  $EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri_simpan = $EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri." (".$EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt.")";
			}
			else
			{
			  $EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri_simpan = $EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri;
			}
			$EMR_dr_IGD_P1_SLGinekologisKayumDougtxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisKayumDougtxt');
			$EMR_dr_IGD_P1_SLGinekologisVTtxt = $this->input->post('EMR_dr_IGD_P1_SLGinekologisVTtxt');

			//simpan tabel SL Ginekologis
			if ($EMR_dr_IGD_P1_SLGinekologis_simpan != '')
			{
			  $EMR_dr_IGD_P1_SLGinekologisSeluruh_simpan = '<table border="0" style="width:100%"><tr><td style="padding:3px;" colspan="6"><b># STATUS LOKALIS GINEKOLOGIS</b></td></tr>
			  <tr><td style="padding:3px; text-align:center; border-bottom:1px solid; border-top:1px solid;" colspan="6"><b>Pemeriksaan Abdomen</b></td></tr><tr><td style="padding:3px; width:13%">Inspeksi</td>
			  <td style="padding:3px; width:2%">:</td><td style="padding:3px; width:35%">'.$EMR_dr_IGD_P1_SLGinekologisInspeksi.'</td><td style="padding:3px; width:13%">Palpasi</td><td style="padding:3px; width:2%">:</td>
			  <td style="padding:3px; width:35%">'.$EMR_dr_IGD_P1_SLGinekologisbtnSupel.'</td></tr><tr><td style="padding:3px; width:13%">Nyeri Tekan</td><td style="padding:3px; width:2%">:</td><td style="padding:3px; width:35%">
			  '.$EMR_dr_IGD_P1_SLGinekologisbtnNyeTek.'</td><td style="padding:3px;">Benjolan</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisbtnBenjolan.'</td></tr>
			  <tr><td style="padding:3px;">Defans Muscular</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisbtnDefmus.'</td><td style="padding:3px;">Lain-lain</td><td style="padding:3px;">:</td>
			  <td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisPalpasiTxt.'</td></tr><tr><td style="padding:3px;">Perkusi</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisPerkusiTxt.'
			  </td><td style="padding:3px;">Auskultasi</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisAuskultasiTxt.'</td></tr><tr>
			  <td style="padding:3px; text-align:center; border-bottom:1px solid; border-top:1px solid;" colspan="6"><b>Pemeriksaan Pelvik</b></td></tr><tr><td style="padding:3px;">Inspeksi</td><td style="padding:3px;">:</td><td style="padding:3px;">
			  '.$EMR_dr_IGD_P1_SLGinekologisPelvikTxt.'</td><td style="padding:3px;">Dinding Vagina</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisDindingvagTxt.'</td></tr>
			  <tr><td style="padding:3px;">Nyeri</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek.'</td><td style="padding:3px;">Massa</td><td style="padding:3px;">:</td><td style="padding:3px;">
			  '.$EMR_dr_IGD_P1_SLGinekologisbtnMassa_simpan.'</td></tr><tr><td style="padding:3px;">Porsio Ukuran</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisPorUkTxt.'</td>
			  <td style="padding:3px;">Fluksus</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisbtnFluksus.'</td></tr><tr><td style="padding:3px;">Fluor</td><td style="padding:3px;">:</td><td style="padding:3px;">
			  '.$EMR_dr_IGD_P1_SLGinekologisbtnFluor.'</td><td style="padding:3px;">Erosi</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisbtnErosi_simpan.'</td></tr><tr><td style="padding:3px;">OUE</td>
			  <td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisOUEtxt.'</td><td style="padding:3px;">Lain-lain</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisInspektxt.'
			  </td></tr><tr><td style="padding:3px; text-align:center; border-bottom:1px solid; border-top:1px solid;" colspan="6"><b>VT/Bimanual palpasi</b></td></tr><tr><td style="padding:3px;">Uterus</td><td style="padding:3px;">:</td><td style="padding:3px;">
			  '.$EMR_dr_IGD_P1_SLGinekologisbtnUterus.'</td><td style="padding:3px;">Bentuk</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisBentukVTtxt.'</td></tr><tr><td style="padding:3px;">Nyeri</td>
			  <td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT.'</td><td style="padding:3px;">Ukuran</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisUkurantxt.'
			  </td></tr><tr><td style="padding:3px;">Massa Adnexa Kanan</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan_simpan.'</td><td style="padding:3px;">Massa Adnexa Kiri</td>
			  <td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri_simpan.'</td></tr><tr><td style="padding:3px;">Kayum Douglasi</td><td style="padding:3px;">:</td><td style="padding:3px;">
			  '.$EMR_dr_IGD_P1_SLGinekologisKayumDougtxt.'</td><td style="padding:3px;">Lain-lain</td><td style="padding:3px;">:</td><td style="padding:3px;">'.$EMR_dr_IGD_P1_SLGinekologisVTtxt.'</td></tr></table></br>';
			}
			else
			{
			  $EMR_dr_IGD_P1_SLGinekologisSeluruh_simpan = "";
			}

			//$SP1['ID_PEMERIKSAAN'] = $this->input->post('IGD_idpemeriksaan');
			$SP1['MenuD_1'] = 'DONE';
			$Id_pemeriksaan_P1 = $this->input->post('IGD_idpemeriksaan');
			//$SP2['Survei_IGD'] = $this->input->post('EMR_dr_IGD_P1_Survei1');
			$SP2['KELUHAN_UTAMA'] = $this->input->post('EMR_dr_IGD_P1_KeluhUtama');
			$SP2['RIWAYAT_PENYAKIT_SEKARANG'] = $this->input->post('EMR_dr_IGD_P1_RiwayatPenySkrg');
			//$SP2['RIWAYAT_SOSIAL'] = $this->input->post('EMR_dr_IGD_P1_RiwayatSosial');
			//$SP2['RIWAYAT_PENGGUNAAN_OBAT'] = $this->input->post('EMR_dr_IGD_P1_RiwayatPenggunaanObat');
			$SP2['KESADARAN_UMUM'] = $this->input->post('EMR_dr_IGD_P1_Kesadaran');
			$SP2['GCS_E'] = $this->input->post('EMR_dr_IGD_P1_GCSe');
			$SP2['GCS_V'] = $this->input->post('EMR_dr_IGD_P1_GCSv');
			$SP2['GCS_M'] = $this->input->post('EMR_dr_IGD_P1_GCSm');
			//$SP2['SpO2'] = $this->input->post('EMR_dr_IGD_P1_SpO2');
			$SP2['PEMERIKSAAN_FISIK_KEPALA'] = $EMR_dr_IGD_P1_PemeriksaanKepala2;
			$SP2['PEMERIKSAAN_FISIK_THORAX'] = $EMR_dr_IGD_P1_PemeriksaanThorax2;
			$SP2['PEMERIKSAAN_FISIK_ABDOMEN'] = $EMR_dr_IGD_P1_PemeriksaanAbdomen2;
			$SP2['PEMERIKSAAN_FISIK_EKSTREMITAS'] = $EMR_dr_IGD_P1_PemeriksaanEkstremitas2;
			$SP2['PEMERIKSAAN_FISIK_NEUROLOGIS'] = $EMR_dr_IGD_P1_PemeriksaanNeurologis2;
			$SP2['STATUS_LOKALIS'] = $EMR_dr_IGD_P1_SLRectumSeluruh_simpan.$EMR_dr_IGD_P1_SLTHTSeluruh_simpan.$EMR_dr_IGD_P1_SLMataSeluruh_simpan.$EMR_dr_IGD_P1_SLNeurologisSeluruh_simpan.$EMR_dr_IGD_P1_SLJiwaSeluruh_simpan.
			$EMR_dr_IGD_P1_SLKulitSeluruh_simpan.$EMR_dr_IGD_P1_SLObstetricSeluruh_simpan.$EMR_dr_IGD_P1_SLGinekologisSeluruh_simpan;

			$SP3['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P1;
			$SP3['SISTOLIK_DOKTER'] = $this->input->post('EMR_dr_IGD_P1_TDSistolik');
			$SP3['DIASTOLIK_DOKTER'] = $this->input->post('EMR_dr_IGD_P1_TDDiastolik');
			$SP3['SUHU_TUBUH_DOKTER'] = $this->input->post('EMR_dr_IGD_P1_suhutubuh');
			$SP3['NADI_1_DOKTER'] = $this->input->post('EMR_dr_IGD_P1_nadi');
			$SP3['NADI_2_DOKTER'] = $this->input->post('EMR_dr_IGD_P1_NadiCH');
			$SP3['RESPIRATORY_1_DOKTER'] = $this->input->post('EMR_dr_IGD_P1_respiratory');
			$SP3['RESPIRATORY_2_DOKTER'] = $this->input->post('EMR_dr_IGD_P1_RespiratoryCH');
			if($this->input->post('EMR_dr_IGD_P1_lingkarkepala') == '')
			{
			  $SP3['LINGKAR_KEPALA_DOKTER'] = 'Tidak diperiksa';
			}
			else
			{
			  $SP3['LINGKAR_KEPALA_DOKTER'] = $this->input->post('EMR_dr_IGD_P1_lingkarkepala');
			}

			$this->db->where("ID_PEMERIKSAAN",$Id_pemeriksaan_P1);
			$this->db->update("EMR_IGD_MENU",$SP1);

			$this->db->where("ID_PEMERIKSAAN",$Id_pemeriksaan_P1);
			$this->db->update("EMR_HASIL_PERIKSA_UMUM",$SP2);

			//$this->db->where("ID_PEMERIKSAAN",$Id_pemeriksaan_P1);
			$this->db->insert("EMR_HASIL_TAMBAHAN_DOKTER",$SP3);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function simpan_detail_pasien_radio_1_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio)
	{
	  for($i=0; $i<count($EMR_dr_IGD_P2_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_radio_dokter = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $get_nama_radio_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	  };

	  $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain2;

	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

	  $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan2;

	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	}

	function simpan_detail_pasien_radio_2_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $dtRadio)
	{
	  for($i=0; $i<count($EMR_dr_IGD_P2_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_radio2_dokter = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $get_nama_radio2_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	  };

	  $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain2;

	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	}

	function simpan_detail_pasien_radio_3_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio)
	{
	  for($i=0; $i<count($EMR_dr_IGD_P2_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_radio3_dokter = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $get_nama_radio3_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	  };

	  $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan2;

	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	}

	function simpan_detail_pasien_radio_4_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $dtRadio)
	{
	  for($i=0; $i<count($EMR_dr_IGD_P2_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_radio5_dokter = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $get_nama_radio5_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	  };
	}

	function simpan_detail_pasien_labo_1_ases_awal($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $EMR_dr_IGD_P2_laboratorium_lain_simpan, $EMR_dr_IGD_P2_laboratorium_lain2, $dtLaborat)
	{
	  for($i=0; $i<count($EMR_dr_IGD_P2_laboratorium_checkbox_simpan); $i++)
	  {
	    $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_LABORATORIUM', $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_LABORATORIUM')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_laborat_dokter = $row['NM_DT_LABORATORIUM'];
	    }

	    $dtLaborat['NM_DT_LABORATORIUM'] = $get_nama_laborat_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);
	  };

	  $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_lain_simpan;
	  $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_lain2;
	  $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);
	}

	function simpan_detail_pasien_labo_2_ases_awal($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $dtLaborat)
	{
	  for($i=0; $i<count($EMR_dr_IGD_P2_laboratorium_checkbox_simpan); $i++)
	  {
	    $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_LABORATORIUM', $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_LABORATORIUM')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_laborat2_dokter = $row['NM_DT_LABORATORIUM'];
	    }

	    $dtLaborat['NM_DT_LABORATORIUM'] = $get_nama_laborat2_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);
	  };
	}

	function kode_inc_work_list($code1,$kode)
	{
		$code = $code1;
		$code .= '-';
		$code .= sprintf("%04s", $kode);
		return $code;
	}

	function get_id_work_list($code1)
	{
		$second_db = $this->load->database('second', TRUE);
		$maxid = 0;
		$row = $second_db->query("SELECT MAX(right(NoJO,5)) as maxid FROM md_WorkListHD WHERE NoJO LIKE '%$code1%'")->row();
		if ($row) {
				$maxid = $row->maxid;
		}
		return $maxid;
	}

	function worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id)
	{
		date_default_timezone_set('Asia/Jakarta');
	  $second_db = $this->load->database('second', TRUE);

	  $tampung_no_bukti = $second_db->query("select MAX(nobukti) AS no_bukti from rd_hdtransaksi where noreg ='$noreg_p2'")->row();
	  $tampung_no_bukti_2 = $tampung_no_bukti->no_bukti;

		$workhd = array(
			'NoJO' => $id_workList,
			'NoBukti' => $tampung_no_bukti_2,
			'NoReg' => $noreg_p2,
			'NoRM' => $norm_p2,
			'App' => 'RD',
			'KdUnit' => 'RD',
			'KdPMedis' => 'RAD',
			'NoTransaksi' => ' ',
			'Validasi' => 'False',
			'TglOrder' => date('d-M-Y'),
			'TglRencanaRealisasi' => date('d-M-Y'),
			'CatatanKlinis' => ' ',
			'UsrInsert' => $user_id,
			'UsrUpdate' => $user_id,
			'TglInsert' => date('d-M-Y H:i:s'),
			'Tglupdate' => date('d-M-Y H:i:s'),
			'IsServiced' => '',
			'kd_lokasilayan' => '',
			'IsDoneByNurse' => '',
			'IsCito' => '',
			'JamRencanaRealisasi' => ''
		);

		$second_db->insert("md_WorkListHD",$workhd);
	}

	function worklist_hd_laborat_p2($noreg_p2, $norm_p2, $id_workList, $user_id)
	{
		date_default_timezone_set('Asia/Jakarta');
	  $second_db = $this->load->database('second', TRUE);

	  $tampung_no_bukti = $second_db->query("select MAX(nobukti) AS no_bukti from rd_hdtransaksi where noreg ='$noreg_p2'")->row();
	  $tampung_no_bukti_2 = $tampung_no_bukti->no_bukti;

		$workhd = array(
			'NoJO' => $id_workList,
			'NoBukti' => $tampung_no_bukti_2,
			'NoReg' => $noreg_p2,
			'NoRM' => $norm_p2,
			'App' => 'RD',
			'KdUnit' => 'RD',
			'KdPMedis' => 'LAB',
			'NoTransaksi' => ' ',
			'Validasi' => 'False',
			'TglOrder' => date('d-M-Y'),
			'TglRencanaRealisasi' => date('d-M-Y'),
			'CatatanKlinis' => ' ',
			'UsrInsert' => $user_id,
			'UsrUpdate' => $user_id,
			'TglInsert' => date('d-M-Y H:i:s'),
			'Tglupdate' => date('d-M-Y H:i:s'),
			'IsServiced' => '',
			'kd_lokasilayan' => '',
			'IsDoneByNurse' => '',
			'IsCito' => '',
			'JamRencanaRealisasi' => ''
		);

		$second_db->insert("md_WorkListHD",$workhd);
	}

	function simpan_detail_pasien_radio_1_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio, $id_workList, $user_id)
	{
	  $second_db = $this->load->database('second', TRUE);

	  for($i=0; $i<count($EMR_dr_IGD_P2_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_radio_dokter = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $get_nama_radio_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

	    $workdt = array(
	      'NoJO' => $id_workList,
	      'KdLayan' => $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i],
	      'Resep' => ' ',
	      'KdStatus' => '01',
	      'TglRealisasi' => NULL,
	      'NoAppointment' => ' ',
	      'UsrInsert' => $user_id,
	      'UsrUpdate' => $user_id,
	      'TglInsert' => date('d-M-Y H:i:s'),
	      'Tglupdate' => date('d-M-Y H:i:s'),
	      'AutoBayar' => 'False',
	      'Tutup' => 'False',
	      'KdTipeResep' => 'False',
	      'IsByNurse' => 'False',
	      'Cito' => 'False',
	      'HarusBayar' => 'False',
	      'isOrderTextSentToPrinter' => 'False',
	      'PrintCount' => 0,
	    );

	    $second_db->insert("md_WorkListDT",$workdt);
	  };

	  $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain2;

	  $workdt = array(
	    'NoJO' => $id_workList,
	    'KdLayan' => $EMR_dr_IGD_P2_radiologi_lain_simpan,
	    'Resep' => ' ',
	    'KdStatus' => '01',
	    'TglRealisasi' => NULL,
	    'NoAppointment' => ' ',
	    'UsrInsert' => $user_id,
	    'UsrUpdate' => $user_id,
	    'TglInsert' => date('d-M-Y H:i:s'),
	    'Tglupdate' => date('d-M-Y H:i:s'),
	    'AutoBayar' => 'False',
	    'Tutup' => 'False',
	    'KdTipeResep' => 'False',
	    'IsByNurse' => 'False',
	    'Cito' => 'False',
	    'HarusBayar' => 'False',
	    'isOrderTextSentToPrinter' => 'False',
	    'PrintCount' => 0,
	  );

	  $second_db->insert("md_WorkListDT",$workdt);
	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

	  $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan2;

	  $workdt = array(
	    'NoJO' => $id_workList,
	    'KdLayan' => $EMR_dr_IGD_P2_Gigi_Satuan_simpan,
	    'Resep' => ' ',
	    'KdStatus' => '01',
	    'TglRealisasi' => NULL,
	    'NoAppointment' => ' ',
	    'UsrInsert' => $user_id,
	    'UsrUpdate' => $user_id,
	    'TglInsert' => date('d-M-Y H:i:s'),
	    'Tglupdate' => date('d-M-Y H:i:s'),
	    'AutoBayar' => 'False',
	    'Tutup' => 'False',
	    'KdTipeResep' => 'False',
	    'IsByNurse' => 'False',
	    'Cito' => 'False',
	    'HarusBayar' => 'False',
	    'isOrderTextSentToPrinter' => 'False',
	    'PrintCount' => 0,
	  );

	  $second_db->insert("md_WorkListDT",$workdt);
	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	}

	function simpan_detail_pasien_radio_2_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $dtRadio, $id_workList, $user_id)
	{
		$second_db = $this->load->database('second', TRUE);

	  for($i=0; $i<count($EMR_dr_IGD_P2_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_radio2_dokter = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $get_nama_radio2_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

	    $workdt = array(
	      'NoJO' => $id_workList,
	      'KdLayan' => $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i],
	      'Resep' => ' ',
	      'KdStatus' => '01',
	      'TglRealisasi' => NULL,
	      'NoAppointment' => ' ',
	      'UsrInsert' => $user_id,
	      'UsrUpdate' => $user_id,
	      'TglInsert' => date('d-M-Y H:i:s'),
	      'Tglupdate' => date('d-M-Y H:i:s'),
	      'AutoBayar' => 'False',
	      'Tutup' => 'False',
	      'KdTipeResep' => 'False',
	      'IsByNurse' => 'False',
	      'Cito' => 'False',
	      'HarusBayar' => 'False',
	      'isOrderTextSentToPrinter' => 'False',
	      'PrintCount' => 0,
	    );

	    $second_db->insert("md_WorkListDT",$workdt);
	  };

	  $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain2;

	  $workdt = array(
	    'NoJO' => $id_workList,
	    'KdLayan' => $EMR_dr_IGD_P2_radiologi_lain_simpan,
	    'Resep' => ' ',
	    'KdStatus' => '01',
	    'TglRealisasi' => NULL,
	    'NoAppointment' => ' ',
	    'UsrInsert' => $user_id,
	    'UsrUpdate' => $user_id,
	    'TglInsert' => date('d-M-Y H:i:s'),
	    'Tglupdate' => date('d-M-Y H:i:s'),
	    'AutoBayar' => 'False',
	    'Tutup' => 'False',
	    'KdTipeResep' => 'False',
	    'IsByNurse' => 'False',
	    'Cito' => 'False',
	    'HarusBayar' => 'False',
	    'isOrderTextSentToPrinter' => 'False',
	    'PrintCount' => 0,
	  );

	  $second_db->insert("md_WorkListDT",$workdt);
	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	}

	function simpan_detail_pasien_radio_3_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio, $id_workList, $user_id)
	{
		$second_db = $this->load->database('second', TRUE);

	  for($i=0; $i<count($EMR_dr_IGD_P2_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_radio3_dokter = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $get_nama_radio3_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

	    $workdt = array(
	      'NoJO' => $id_workList,
	      'KdLayan' => $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i],
	      'Resep' => ' ',
	      'KdStatus' => '01',
	      'TglRealisasi' => NULL,
	      'NoAppointment' => ' ',
	      'UsrInsert' => $user_id,
	      'UsrUpdate' => $user_id,
	      'TglInsert' => date('d-M-Y H:i:s'),
	      'Tglupdate' => date('d-M-Y H:i:s'),
	      'AutoBayar' => 'False',
	      'Tutup' => 'False',
	      'KdTipeResep' => 'False',
	      'IsByNurse' => 'False',
	      'Cito' => 'False',
	      'HarusBayar' => 'False',
	      'isOrderTextSentToPrinter' => 'False',
	      'PrintCount' => 0,
	    );

	    $second_db->insert("md_WorkListDT",$workdt);
	  };

	  $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan_simpan;
	  $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan2;

	  $workdt = array(
	    'NoJO' => $id_workList,
	    'KdLayan' => $EMR_dr_IGD_P2_Gigi_Satuan_simpan,
	    'Resep' => ' ',
	    'KdStatus' => '01',
	    'TglRealisasi' => NULL,
	    'NoAppointment' => ' ',
	    'UsrInsert' => $user_id,
	    'UsrUpdate' => $user_id,
	    'TglInsert' => date('d-M-Y H:i:s'),
	    'Tglupdate' => date('d-M-Y H:i:s'),
	    'AutoBayar' => 'False',
	    'Tutup' => 'False',
	    'KdTipeResep' => 'False',
	    'IsByNurse' => 'False',
	    'Cito' => 'False',
	    'HarusBayar' => 'False',
	    'isOrderTextSentToPrinter' => 'False',
	    'PrintCount' => 0,
	  );

	  $second_db->insert("md_WorkListDT",$workdt);
	  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);
	}

	function simpan_detail_pasien_radio_4_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $dtRadio, $id_workList, $user_id)
	{
		$second_db = $this->load->database('second', TRUE);

	  for($i=0; $i<count($EMR_dr_IGD_P2_radiologi_checkbox_simpan); $i++)
	  {
	    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_RADIO', $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_RADIOLOGI')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_radio5_dokter = $row['NM_DT_RADIO'];
	    }

	    $dtRadio['NM_DT_RADIO'] = $get_nama_radio5_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

	    $workdt = array(
	      'NoJO' => $id_workList,
	      'KdLayan' => $EMR_dr_IGD_P2_radiologi_checkbox_simpan[$i],
	      'Resep' => ' ',
	      'KdStatus' => '01',
	      'TglRealisasi' => NULL,
	      'NoAppointment' => ' ',
	      'UsrInsert' => $user_id,
	      'UsrUpdate' => $user_id,
	      'TglInsert' => date('d-M-Y H:i:s'),
	      'Tglupdate' => date('d-M-Y H:i:s'),
	      'AutoBayar' => 'False',
	      'Tutup' => 'False',
	      'KdTipeResep' => 'False',
	      'IsByNurse' => 'False',
	      'Cito' => 'False',
	      'HarusBayar' => 'False',
	      'isOrderTextSentToPrinter' => 'False',
	      'PrintCount' => 0,
	    );

	    $second_db->insert("md_WorkListDT",$workdt);
	  };
	}

	function simpan_detail_pasien_labo_1_ases_awal_worklist($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $EMR_dr_IGD_P2_laboratorium_lain_simpan, $EMR_dr_IGD_P2_laboratorium_lain2, $dtLaborat, $id_workList, $user_id)
	{
	  $second_db = $this->load->database('second', TRUE);

	  for($i=0; $i<count($EMR_dr_IGD_P2_laboratorium_checkbox_simpan); $i++)
	  {
	    $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_LABORATORIUM', $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_LABORATORIUM')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_laborat_dokter = $row['NM_DT_LABORATORIUM'];
	    }

	    $dtLaborat['NM_DT_LABORATORIUM'] = $get_nama_laborat_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

	    $workdt = array(
	      'NoJO' => $id_workList,
	      'KdLayan' => $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i],
	      'Resep' => ' ',
	      'KdStatus' => '01',
	      'TglRealisasi' => NULL,
	      'NoAppointment' => ' ',
	      'UsrInsert' => $user_id,
	      'UsrUpdate' => $user_id,
	      'TglInsert' => date('d-M-Y H:i:s'),
	      'Tglupdate' => date('d-M-Y H:i:s'),
	      'AutoBayar' => 'False',
	      'Tutup' => 'False',
	      'KdTipeResep' => 'False',
	      'IsByNurse' => 'False',
	      'Cito' => 'False',
	      'HarusBayar' => 'False',
	      'isOrderTextSentToPrinter' => 'False',
	      'PrintCount' => 0,
	    );

	    $second_db->insert("md_WorkListDT",$workdt);
	  };

	  $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_lain_simpan;
	  $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_lain2;

	  $workdt = array(
	    'NoJO' => $id_workList,
	    'KdLayan' => $EMR_dr_IGD_P2_laboratorium_lain_simpan,
	    'Resep' => ' ',
	    'KdStatus' => '01',
	    'TglRealisasi' => NULL,
	    'NoAppointment' => ' ',
	    'UsrInsert' => $user_id,
	    'UsrUpdate' => $user_id,
	    'TglInsert' => date('d-M-Y H:i:s'),
	    'Tglupdate' => date('d-M-Y H:i:s'),
	    'AutoBayar' => 'False',
	    'Tutup' => 'False',
	    'KdTipeResep' => 'False',
	    'IsByNurse' => 'False',
	    'Cito' => 'False',
	    'HarusBayar' => 'False',
	    'isOrderTextSentToPrinter' => 'False',
	    'PrintCount' => 0,
	  );

	  $second_db->insert("md_WorkListDT",$workdt);
	  $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);
	}

	function simpan_detail_pasien_labo_2_ases_awal_worklist($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $dtLaborat, $id_workList, $user_id)
	{
	  $second_db = $this->load->database('second', TRUE);

	  for($i=0; $i<count($EMR_dr_IGD_P2_laboratorium_checkbox_simpan); $i++)
	  {
	    $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i];

	    $this->db->select('*');
	    $this->db->where_in('KODE_DT_LABORATORIUM', $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i]);
	    $query = $this->db->get('EMR_DT_LABORATORIUM')->result_array();

	    foreach($query as $row)
	    {
	      $get_nama_laborat2_dokter = $row['NM_DT_LABORATORIUM'];
	    }

	    $dtLaborat['NM_DT_LABORATORIUM'] = $get_nama_laborat2_dokter;
	    $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

	    $workdt = array(
	      'NoJO' => $id_workList,
	      'KdLayan' => $EMR_dr_IGD_P2_laboratorium_checkbox_simpan[$i],
	      'Resep' => ' ',
	      'KdStatus' => '01',
	      'TglRealisasi' => NULL,
	      'NoAppointment' => ' ',
	      'UsrInsert' => $user_id,
	      'UsrUpdate' => $user_id,
	      'TglInsert' => date('d-M-Y H:i:s'),
	      'Tglupdate' => date('d-M-Y H:i:s'),
	      'AutoBayar' => 'False',
	      'Tutup' => 'False',
	      'KdTipeResep' => 'False',
	      'IsByNurse' => 'False',
	      'Cito' => 'False',
	      'HarusBayar' => 'False',
	      'isOrderTextSentToPrinter' => 'False',
	      'PrintCount' => 0,
	    );

	    $second_db->insert("md_WorkListDT",$workdt);
	  };
	}

	function btnsimpanIGD_dr_P2_LAB()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			//$SP1['MenuD_2'] = 'DONE';
			$second_db = $this->load->database('second', TRUE);

			$Id_pemeriksaan_P2 = $this->input->post('IGD_idpemeriksaan');
			$status = 'BARU';

			//AWAL SIMPAN LABORATORIUM
			$EMR_dr_IGD_P2_laboratorium_checkbox_simpan = $this->input->post('EMR_dr_IGD_P2_laboratorium_checkbox_simpan');
			$EMR_dr_IGD_P2_laboratorium_lain_simpan = $this->input->post('EMR_dr_IGD_P2_laboratorium_lain_simpan');
			$EMR_dr_IGD_P2_laboratorium_lain2 = $this->input->post('EMR_dr_IGD_P2_laboratorium_lain2');

			$dtLaborat['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P2;
			$dtLaborat['STATUS_DETAIL_PASIEN_LABO'] = $status;

			//worklist
			$noreg_p2 = $this->input->post('EMR_dr_IGD_NOREG');
			$norm_p2 = $this->input->post('EMR_dr_IGD_NORM');

			$code1 = date('Ymd');

			$kode = $this->get_id_work_list($code1);
			$kode = $kode + 1;

			$id_workList = $this->kode_inc_work_list($code1,$kode);

			$user_id = $this->session->userdata('id_pengguna');

			//laborat
			if ($EMR_dr_IGD_P2_laboratorium_checkbox_simpan != "")
			{
				if ($EMR_dr_IGD_P2_laboratorium_lain_simpan != "")
				{
					//$this->simpan_detail_pasien_labo_1_ases_awal($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $EMR_dr_IGD_P2_laboratorium_lain_simpan, $EMR_dr_IGD_P2_laboratorium_lain2, $dtLaborat);
					$this->worklist_hd_laborat_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
					$this->simpan_detail_pasien_labo_1_ases_awal_worklist($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $EMR_dr_IGD_P2_laboratorium_lain_simpan, $EMR_dr_IGD_P2_laboratorium_lain2, $dtLaborat, $id_workList, $user_id);

					$dok1['STATUS_LABORAT'] = 'ADA';
				}
				else
				{
					//$this->simpan_detail_pasien_labo_2_ases_awal($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $dtLaborat);
					$this->worklist_hd_laborat_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
					$this->simpan_detail_pasien_labo_2_ases_awal_worklist($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $dtLaborat, $id_workList, $user_id);

					$dok1['STATUS_LABORAT'] = 'ADA';
				}
			}
			else if ($EMR_dr_IGD_P2_laboratorium_lain_simpan != "")
			{
				$this->worklist_hd_laborat_p2($noreg_p2, $norm_p2, $id_workList, $user_id);

				$dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_lain_simpan;
				$dtLaborat['NM_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_lain2;

				$workdt = array(
					'NoJO' => $id_workList,
					'KdLayan' => $EMR_dr_IGD_P2_laboratorium_lain_simpan,
					'Resep' => ' ',
					'KdStatus' => '01',
					'TglRealisasi' => NULL,
					'NoAppointment' => ' ',
					'UsrInsert' => $user_id,
					'UsrUpdate' => $user_id,
					'TglInsert' => date('d-M-Y H:i:s'),
					'Tglupdate' => date('d-M-Y H:i:s'),
					'AutoBayar' => 'False',
					'Tutup' => 'False',
					'KdTipeResep' => 'False',
					'IsByNurse' => 'False',
					'Cito' => 'False',
					'HarusBayar' => 'False',
					'isOrderTextSentToPrinter' => 'False',
					'PrintCount' => 0,
				);

				$second_db->insert("md_WorkListDT",$workdt);
				$this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

				$dok1['STATUS_LABORAT'] = 'ADA';
			}
			else
			{
				$dok1['STATUS_LABORAT'] = 'TIDAK ADA';
			}

			$this->db->where("ID_PEMERIKSAAN",$Id_pemeriksaan_P2);
			$this->db->update("EMR_UTAMA_PERIKSA",$dok1);

			echo "TERUJI";

		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_dr_P2_RAD()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			//$SP1['MenuD_2'] = 'DONE';
			$second_db = $this->load->database('second', TRUE);

			$Id_pemeriksaan_P2 = $this->input->post('IGD_idpemeriksaan');
			$status = 'BARU';

			//AWAL SIMPAN RADIOLOGI
			$EMR_dr_IGD_P2_Radiologi_simpan = $this->input->post('EMR_dr_IGD_P2_Radiologi_simpan');
			$EMR_dr_IGD_P2_radiologi_checkbox_simpan = $this->input->post('EMR_dr_IGD_P2_radiologi_checkbox_simpan');
			$EMR_dr_IGD_P2_radiologi_lain_simpan = $this->input->post('EMR_dr_IGD_P2_radiologi_lain_simpan');
			$EMR_dr_IGD_P2_radiologi_lain2 = $this->input->post('EMR_dr_IGD_P2_radiologi_lain2');
			$EMR_dr_IGD_P2_Gigi_Satuan_simpan = $this->input->post('EMR_dr_IGD_P2_Gigi_Satuan_simpan');
			$EMR_dr_IGD_P2_Gigi_Satuan2 = $this->input->post('EMR_dr_IGD_P2_Gigi_Satuan2');

			$dtRadio['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P2;
			$dtRadio['STATUS_DETAIL_PASIEN_RADIO'] = $status;

			//worklist
			$noreg_p2 = $this->input->post('EMR_dr_IGD_NOREG');
			$norm_p2 = $this->input->post('EMR_dr_IGD_NORM');

			$code1 = date('Ymd');

			$kode = $this->get_id_work_list($code1);
			$kode = $kode + 1;

			$id_workList = $this->kode_inc_work_list($code1,$kode);

			$user_id = $this->session->userdata('id_pengguna');

			if (!is_dir('hasilradio/'.$noreg_p2)) {
			    mkdir('./hasilradio/' . $noreg_p2, 0777, TRUE);
			}


			//radiologi
			if ($EMR_dr_IGD_P2_radiologi_checkbox_simpan != "")
			{
				if ($EMR_dr_IGD_P2_radiologi_lain_simpan != "")
				{
					if ($EMR_dr_IGD_P2_Gigi_Satuan_simpan != "")
					{
						//$this->simpan_detail_pasien_radio_1_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio);
						$this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
						$this->simpan_detail_pasien_radio_1_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio, $id_workList, $user_id);

						$dok1['STATUS_RADIO'] = 'ADA';
					}
					else
					{
						//$this->simpan_detail_pasien_radio_2_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $dtRadio);
						$this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
						$this->simpan_detail_pasien_radio_2_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $dtRadio, $id_workList, $user_id);

						$dok1['STATUS_RADIO'] = 'ADA';
					}
				}
				else
				{
					if ($EMR_dr_IGD_P2_Gigi_Satuan_simpan != "")
					{
						//$this->simpan_detail_pasien_radio_3_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio);
						$this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
						$this->simpan_detail_pasien_radio_3_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio, $id_workList, $user_id);

						$dok1['STATUS_RADIO'] = 'ADA';
					}
					else
					{
						//$this->simpan_detail_pasien_radio_4_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $dtRadio);
						$this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
						$this->simpan_detail_pasien_radio_4_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $dtRadio, $id_workList, $user_id);

						$dok1['STATUS_RADIO'] = 'ADA';
					}
				}
			}
			else if ($EMR_dr_IGD_P2_radiologi_lain_simpan != "")
			{
				if ($EMR_dr_IGD_P2_Gigi_Satuan_simpan != "")
				{
					$this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);

					$dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain_simpan;
					$dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain2;

					$workdt = array(
						'NoJO' => $id_workList,
						'KdLayan' => $EMR_dr_IGD_P2_radiologi_lain_simpan,
						'Resep' => ' ',
						'KdStatus' => '01',
						'TglRealisasi' => NULL,
						'NoAppointment' => ' ',
						'UsrInsert' => $user_id,
						'UsrUpdate' => $user_id,
						'TglInsert' => date('d-M-Y H:i:s'),
						'Tglupdate' => date('d-M-Y H:i:s'),
						'AutoBayar' => 'False',
						'Tutup' => 'False',
						'KdTipeResep' => 'False',
						'IsByNurse' => 'False',
						'Cito' => 'False',
						'HarusBayar' => 'False',
						'isOrderTextSentToPrinter' => 'False',
						'PrintCount' => 0,
					);

					$dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan_simpan;
					$dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan2;

					$workdt = array(
						'NoJO' => $id_workList,
						'KdLayan' => $EMR_dr_IGD_P2_Gigi_Satuan_simpan,
						'Resep' => ' ',
						'KdStatus' => '01',
						'TglRealisasi' => NULL,
						'NoAppointment' => ' ',
						'UsrInsert' => $user_id,
						'UsrUpdate' => $user_id,
						'TglInsert' => date('d-M-Y H:i:s'),
						'Tglupdate' => date('d-M-Y H:i:s'),
						'AutoBayar' => 'False',
						'Tutup' => 'False',
						'KdTipeResep' => 'False',
						'IsByNurse' => 'False',
						'Cito' => 'False',
						'HarusBayar' => 'False',
						'isOrderTextSentToPrinter' => 'False',
						'PrintCount' => 0,
					);

					$second_db->insert("md_WorkListDT",$workdt);

					$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

					$dok1['STATUS_RADIO'] = 'ADA';
				}
				else
				{
					$this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);

					$dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain_simpan;
					$dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain2;

					$workdt = array(
						'NoJO' => $id_workList,
						'KdLayan' => $EMR_dr_IGD_P2_radiologi_lain_simpan,
						'Resep' => ' ',
						'KdStatus' => '01',
						'TglRealisasi' => NULL,
						'NoAppointment' => ' ',
						'UsrInsert' => $user_id,
						'UsrUpdate' => $user_id,
						'TglInsert' => date('d-M-Y H:i:s'),
						'Tglupdate' => date('d-M-Y H:i:s'),
						'AutoBayar' => 'False',
						'Tutup' => 'False',
						'KdTipeResep' => 'False',
						'IsByNurse' => 'False',
						'Cito' => 'False',
						'HarusBayar' => 'False',
						'isOrderTextSentToPrinter' => 'False',
						'PrintCount' => 0,
					);

					$second_db->insert("md_WorkListDT",$workdt);

					$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

					$dok1['STATUS_RADIO'] = 'ADA';
				}
			}
			else if ($EMR_dr_IGD_P2_Gigi_Satuan_simpan != "")
			{
				$this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);

				$dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan_simpan;
				$dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan2;

				$workdt = array(
					'NoJO' => $id_workList,
					'KdLayan' => $EMR_dr_IGD_P2_Gigi_Satuan_simpan,
					'Resep' => ' ',
					'KdStatus' => '01',
					'TglRealisasi' => NULL,
					'NoAppointment' => ' ',
					'UsrInsert' => $user_id,
					'UsrUpdate' => $user_id,
					'TglInsert' => date('d-M-Y H:i:s'),
					'Tglupdate' => date('d-M-Y H:i:s'),
					'AutoBayar' => 'False',
					'Tutup' => 'False',
					'KdTipeResep' => 'False',
					'IsByNurse' => 'False',
					'Cito' => 'False',
					'HarusBayar' => 'False',
					'isOrderTextSentToPrinter' => 'False',
					'PrintCount' => 0,
				);

				$second_db->insert("md_WorkListDT",$workdt);

				$this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

				$dok1['STATUS_RADIO'] = 'ADA';
			}
			else
			{
				$dok1['STATUS_RADIO'] = 'TIDAK ADA';
			}

			$this->db->where("ID_PEMERIKSAAN",$Id_pemeriksaan_P2);
			$this->db->update("EMR_UTAMA_PERIKSA",$dok1);

			echo "TERUJI";

		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	/*function btnsimpanIGD_dr_P2()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			//$SP1['MenuD_2'] = 'DONE';
			$second_db = $this->load->database('second', TRUE);

			$Id_pemeriksaan_P2 = $this->input->post('IGD_idpemeriksaan');
			$EMR_dr_IGD_P2_Radiologi_simpan = $this->input->post('EMR_dr_IGD_P2_Radiologi_simpan');
			$EMR_dr_IGD_P2_Laborat_simpan = $this->input->post('EMR_dr_IGD_P2_Laborat_simpan');
			$status = 'BARU';

			//AWAL SIMPAN RADIOLOGI
			$EMR_dr_IGD_P2_Radiologi_simpan = $this->input->post('EMR_dr_IGD_P2_Radiologi_simpan');
			$EMR_dr_IGD_P2_radiologi_checkbox_simpan = $this->input->post('EMR_dr_IGD_P2_radiologi_checkbox_simpan');
			$EMR_dr_IGD_P2_radiologi_lain_simpan = $this->input->post('EMR_dr_IGD_P2_radiologi_lain_simpan');
			$EMR_dr_IGD_P2_radiologi_lain2 = $this->input->post('EMR_dr_IGD_P2_radiologi_lain2');
			$EMR_dr_IGD_P2_Gigi_Satuan_simpan = $this->input->post('EMR_dr_IGD_P2_Gigi_Satuan_simpan');
			$EMR_dr_IGD_P2_Gigi_Satuan2 = $this->input->post('EMR_dr_IGD_P2_Gigi_Satuan2');

			//AWAL SIMPAN LABORATORIUM
			$EMR_dr_IGD_P2_laboratorium_checkbox_simpan = $this->input->post('EMR_dr_IGD_P2_laboratorium_checkbox_simpan');
			$EMR_dr_IGD_P2_laboratorium_lain_simpan = $this->input->post('EMR_dr_IGD_P2_laboratorium_lain_simpan');
			$EMR_dr_IGD_P2_laboratorium_lain2 = $this->input->post('EMR_dr_IGD_P2_laboratorium_lain2');

			$dtRadio['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P2;
			$dtRadio['STATUS_DETAIL_PASIEN_RADIO'] = $status;

			$dtLaborat['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P2;
			$dtLaborat['STATUS_DETAIL_PASIEN_LABO'] = $status;

			//worklist
			$noreg_p2 = $this->input->post('EMR_dr_IGD_NOREG');
			$norm_p2 = $this->input->post('EMR_dr_IGD_NORM');

			$code1 = date('Ymd');

			$kode = $this->get_id_work_list($code1);
			$kode = $kode + 1;

			$id_workList = $this->kode_inc_work_list($code1,$kode);

			$user_id = $this->session->userdata('id_pengguna');

			if ($EMR_dr_IGD_P2_Radiologi_simpan == '' && $EMR_dr_IGD_P2_Laborat_simpan == '')
			{
				echo "NOTERUJI";
			}
			else
			{
				//radiologi
				if ($EMR_dr_IGD_P2_radiologi_checkbox_simpan != "")
				{
				  if ($EMR_dr_IGD_P2_radiologi_lain_simpan != "")
				  {
				    if ($EMR_dr_IGD_P2_Gigi_Satuan_simpan != "")
				    {
				      $this->simpan_detail_pasien_radio_1_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio);
				      $this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
							$this->simpan_detail_pasien_radio_1_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio, $id_workList, $user_id);

				      $dok1['STATUS_RADIO'] = 'ADA';
				    }
				    else
				    {
				      $this->simpan_detail_pasien_radio_2_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $dtRadio);
				      $this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
							$this->simpan_detail_pasien_radio_2_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_radiologi_lain_simpan, $EMR_dr_IGD_P2_radiologi_lain2, $dtRadio, $id_workList, $user_id);

				      $dok1['STATUS_RADIO'] = 'ADA';
				    }
				  }
				  else
				  {
				    if ($EMR_dr_IGD_P2_Gigi_Satuan_simpan != "")
				    {
				      $this->simpan_detail_pasien_radio_3_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio);
				      $this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
							$this->simpan_detail_pasien_radio_3_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $EMR_dr_IGD_P2_Gigi_Satuan_simpan, $EMR_dr_IGD_P2_Gigi_Satuan2, $dtRadio, $id_workList, $user_id);

				      $dok1['STATUS_RADIO'] = 'ADA';
				    }
				    else
				    {
				      $this->simpan_detail_pasien_radio_4_ases_awal($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $dtRadio);
				      $this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
							$this->simpan_detail_pasien_radio_4_ases_awal_worklist($EMR_dr_IGD_P2_radiologi_checkbox_simpan, $dtRadio, $id_workList, $user_id);

				      $dok1['STATUS_RADIO'] = 'ADA';
				    }
				  }
				}
				else if ($EMR_dr_IGD_P2_radiologi_lain_simpan != "")
				{
				  if ($EMR_dr_IGD_P2_Gigi_Satuan_simpan != "")
				  {
				    $this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);

				    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain_simpan;
				    $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain2;

						$workdt = array(
					    'NoJO' => $id_workList,
					    'KdLayan' => $EMR_dr_IGD_P2_radiologi_lain_simpan,
					    'Resep' => ' ',
					    'KdStatus' => '01',
					    'TglRealisasi' => date('d-M-Y'),
					    'NoAppointment' => ' ',
					    'UsrInsert' => $user_id,
					    'UsrUpdate' => $user_id,
					    'TglInsert' => date('d-M-Y H:i:s'),
					    'Tglupdate' => date('d-M-Y H:i:s'),
					    'AutoBayar' => 'False',
					    'Tutup' => 'False',
					    'KdTipeResep' => 'False',
					    'IsByNurse' => 'False',
					    'Cito' => 'False',
					    'HarusBayar' => 'False',
					    'isOrderTextSentToPrinter' => 'False',
					    'PrintCount' => 0,
					  );

				    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan_simpan;
				    $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan2;

						$workdt = array(
					    'NoJO' => $id_workList,
					    'KdLayan' => $EMR_dr_IGD_P2_Gigi_Satuan_simpan,
					    'Resep' => ' ',
					    'KdStatus' => '01',
					    'TglRealisasi' => date('d-M-Y'),
					    'NoAppointment' => ' ',
					    'UsrInsert' => $user_id,
					    'UsrUpdate' => $user_id,
					    'TglInsert' => date('d-M-Y H:i:s'),
					    'Tglupdate' => date('d-M-Y H:i:s'),
					    'AutoBayar' => 'False',
					    'Tutup' => 'False',
					    'KdTipeResep' => 'False',
					    'IsByNurse' => 'False',
					    'Cito' => 'False',
					    'HarusBayar' => 'False',
					    'isOrderTextSentToPrinter' => 'False',
					    'PrintCount' => 0,
					  );

					  $second_db->insert("md_WorkListDT",$workdt);

				    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

				    $dok1['STATUS_RADIO'] = 'ADA';
				  }
				  else
				  {
				    $this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);

				    $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain_simpan;
				    $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_radiologi_lain2;

						$workdt = array(
					    'NoJO' => $id_workList,
					    'KdLayan' => $EMR_dr_IGD_P2_radiologi_lain_simpan,
					    'Resep' => ' ',
					    'KdStatus' => '01',
					    'TglRealisasi' => date('d-M-Y'),
					    'NoAppointment' => ' ',
					    'UsrInsert' => $user_id,
					    'UsrUpdate' => $user_id,
					    'TglInsert' => date('d-M-Y H:i:s'),
					    'Tglupdate' => date('d-M-Y H:i:s'),
					    'AutoBayar' => 'False',
					    'Tutup' => 'False',
					    'KdTipeResep' => 'False',
					    'IsByNurse' => 'False',
					    'Cito' => 'False',
					    'HarusBayar' => 'False',
					    'isOrderTextSentToPrinter' => 'False',
					    'PrintCount' => 0,
					  );

					  $second_db->insert("md_WorkListDT",$workdt);

				    $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

				    $dok1['STATUS_RADIO'] = 'ADA';
				  }
				}
				else if ($EMR_dr_IGD_P2_Gigi_Satuan_simpan != "")
				{
				  $this->worklist_hd_radiologi_p2($noreg_p2, $norm_p2, $id_workList, $user_id);

				  $dtRadio['KODE_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan_simpan;
				  $dtRadio['NM_DT_RADIO'] = $EMR_dr_IGD_P2_Gigi_Satuan2;

					$workdt = array(
						'NoJO' => $id_workList,
						'KdLayan' => $EMR_dr_IGD_P2_Gigi_Satuan_simpan,
						'Resep' => ' ',
						'KdStatus' => '01',
						'TglRealisasi' => date('d-M-Y'),
						'NoAppointment' => ' ',
						'UsrInsert' => $user_id,
						'UsrUpdate' => $user_id,
						'TglInsert' => date('d-M-Y H:i:s'),
						'Tglupdate' => date('d-M-Y H:i:s'),
						'AutoBayar' => 'False',
						'Tutup' => 'False',
						'KdTipeResep' => 'False',
						'IsByNurse' => 'False',
						'Cito' => 'False',
						'HarusBayar' => 'False',
						'isOrderTextSentToPrinter' => 'False',
						'PrintCount' => 0,
					);

					$second_db->insert("md_WorkListDT",$workdt);

				  $this->db->insert("EMR_DETAIL_PASIEN_RADIO",$dtRadio);

				  $dok1['STATUS_RADIO'] = 'ADA';
				}
				else
				{
				  $dok1['STATUS_RADIO'] = 'TIDAK ADA';
				}

				//laborat
				if ($EMR_dr_IGD_P2_laboratorium_checkbox_simpan != "")
				{
				  if ($EMR_dr_IGD_P2_laboratorium_lain_simpan != "")
				  {
				    $this->simpan_detail_pasien_labo_1_ases_awal($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $EMR_dr_IGD_P2_laboratorium_lain_simpan, $EMR_dr_IGD_P2_laboratorium_lain2, $dtLaborat);
						$this->worklist_hd_laborat_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
						$this->simpan_detail_pasien_labo_1_ases_awal_worklist($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $EMR_dr_IGD_P2_laboratorium_lain_simpan, $EMR_dr_IGD_P2_laboratorium_lain2, $dtLaborat, $id_workList, $user_id);

				    $dok1['STATUS_LABORAT'] = 'ADA';
				  }
				  else
				  {
				    $this->simpan_detail_pasien_labo_2_ases_awal($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $dtLaborat);
						$this->worklist_hd_laborat_p2($noreg_p2, $norm_p2, $id_workList, $user_id);
						$this->simpan_detail_pasien_labo_2_ases_awal_worklist($EMR_dr_IGD_P2_laboratorium_checkbox_simpan, $dtLaborat, $id_workList, $user_id);

				    $dok1['STATUS_LABORAT'] = 'ADA';
				  }
				}
				else if ($EMR_dr_IGD_P2_laboratorium_lain_simpan != "")
				{
					$this->worklist_hd_laborat_p2($noreg_p2, $norm_p2, $id_workList, $user_id);

				  $dtLaborat['KODE_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_lain_simpan;
				  $dtLaborat['NM_DT_LABORATORIUM'] = $EMR_dr_IGD_P2_laboratorium_lain2;

					$workdt = array(
						'NoJO' => $id_workList,
						'KdLayan' => $EMR_dr_IGD_P2_laboratorium_lain_simpan,
						'Resep' => ' ',
						'KdStatus' => '01',
						'TglRealisasi' => date('d-M-Y'),
						'NoAppointment' => ' ',
						'UsrInsert' => $user_id,
						'UsrUpdate' => $user_id,
						'TglInsert' => date('d-M-Y H:i:s'),
						'Tglupdate' => date('d-M-Y H:i:s'),
						'AutoBayar' => 'False',
						'Tutup' => 'False',
						'KdTipeResep' => 'False',
						'IsByNurse' => 'False',
						'Cito' => 'False',
						'HarusBayar' => 'False',
						'isOrderTextSentToPrinter' => 'False',
						'PrintCount' => 0,
					);

					$second_db->insert("md_WorkListDT",$workdt);
				  $this->db->insert("EMR_DETAIL_PASIEN_LABO",$dtLaborat);

				  $dok1['STATUS_LABORAT'] = 'ADA';
				}
				else
				{
				  $dok1['STATUS_LABORAT'] = 'TIDAK ADA';
				}

				$this->db->where("ID_PEMERIKSAAN",$Id_pemeriksaan_P2);
				$this->db->update("EMR_UTAMA_PERIKSA",$dok1);

				//$this->db->where("ID_PEMERIKSAAN",$Id_pemeriksaan_P2);
				//$this->db->update("EMR_IGD_MENU",$SP1);

				echo "TERUJI";
			}

		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}*/

	function btnsimpanIGD_dr_P3()
	{
	  date_default_timezone_set('Asia/Jakarta');
	  if($this->session->userdata("logged_in")!="")
	  {
			$status = 'BARU';
			$Id_pemeriksaan_P3 = $this->input->post('IGD_idpemeriksaan');

			$EMR_dr_IGD_P3_DiagnosisKerja_simpan = $this->input->post('EMR_dr_IGD_P3_DiagnosisKerja_simpan');
			$EMR_dr_IGD_P3_SimpanIdDiagnosisKerja_simpan = $this->input->post('EMR_dr_IGD_P3_SimpanIdDiagnosisKerja_simpan');
			$EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja_simpan = $this->input->post('EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja_simpan');

			/*$totalRoutesCountDiagnosisKerja = sizeof($EMR_dr_IGD_P3_DiagnosisKerja_simpan);
			$totalRoutesDiagnosisKerja="";
			for($i=0; $i<$totalRoutesCountDiagnosisKerja; $i++)
			{
			  $totalRoutesDiagnosisKerja = $totalRoutesDiagnosisKerja.$EMR_dr_IGD_P3_DiagnosisKerja_simpan[$i].", ";
			}
			$dtDiagnosisKerja['DESKRIPSI_DIAGNOSIS'] = rtrim($totalRoutesDiagnosisKerja, ', ');*/

			//simpan data diagnosis
			if (count($EMR_dr_IGD_P3_DiagnosisKerja_simpan) > 0)
			{
			  for($i=0; $i<count($EMR_dr_IGD_P3_DiagnosisKerja_simpan); $i++)
			  {
			    $dtDiagnosisKerja['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P3;
			    $dtDiagnosisKerja['ID_DIAGNOSIS'] = $EMR_dr_IGD_P3_SimpanIdDiagnosisKerja_simpan[$i];
			    $dtDiagnosisKerja['DIAGNOSIS'] = $EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja_simpan[$i];
			    $dtDiagnosisKerja['DESKRIPSI_DIAGNOSIS'] = $EMR_dr_IGD_P3_DiagnosisKerja_simpan[$i];
			    $dtDiagnosisKerja['STATUS_DIAGNOSIS'] = $status;
			    $dtDiagnosisKerja['STATUS2_DIAGNOSIS'] = 'Diagnosis Kerja';

			    $this->db->insert("EMR_DETAIL_DIAGNOSIS",$dtDiagnosisKerja);
			  };
			}

			//AWAL SIMPAN DIAGNOSIS
			$EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan = $this->input->post('EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan');
			$EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi_simpan = $this->input->post('EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi_simpan');
			$EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi_simpan = $this->input->post('EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi_simpan');

			/*$totalRoutesCountDiagnosisKomplikasi = sizeof($EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan);
			$totalRoutesDiagnosisKomplikasi="";
			for($i=0; $i<$totalRoutesCountDiagnosisKomplikasi; $i++)
			{
			  $totalRoutesDiagnosisKomplikasi = $totalRoutesDiagnosisKomplikasi.$EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan[$i].", ";
			}
			$dtDiagnosisKomplikasi['DESKRIPSI_DIAGNOSIS'] = rtrim($totalRoutesDiagnosisKomplikasi, ', ');*/

			//simpan data diagnosis
			if (count($EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan) > 0)
			{
			  for($i=0; $i<count($EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan); $i++)
			  {
			    $dtDiagnosisKomplikasi['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P3;
			    $dtDiagnosisKomplikasi['ID_DIAGNOSIS'] = $EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi_simpan[$i];
			    $dtDiagnosisKomplikasi['DIAGNOSIS'] = $EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi_simpan[$i];
			    $dtDiagnosisKomplikasi['DESKRIPSI_DIAGNOSIS'] = $EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan[$i];
			    $dtDiagnosisKomplikasi['STATUS_DIAGNOSIS'] = $status;
			    $dtDiagnosisKomplikasi['STATUS2_DIAGNOSIS'] = 'Diagnosis Komplikasi';

			    $this->db->insert("EMR_DETAIL_DIAGNOSIS",$dtDiagnosisKomplikasi);
			  };
			}

			//AWAL SIMPAN DIAGNOSIS
			$EMR_dr_IGD_P3_DiagnosisSekunder_simpan = $this->input->post('EMR_dr_IGD_P3_DiagnosisSekunder_simpan');
			$EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder_simpan = $this->input->post('EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder_simpan');
			$EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder_simpan = $this->input->post('EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder_simpan');

			/*$totalRoutesCountDiagnosisSekunder = sizeof($EMR_dr_IGD_P3_DiagnosisSekunder_simpan);
			$totalRoutesDiagnosisSekunder="";
			for($i=0; $i<$totalRoutesCountDiagnosisSekunder; $i++)
			{
			  $totalRoutesDiagnosisSekunder = $totalRoutesDiagnosisSekunder.$EMR_dr_IGD_P3_DiagnosisSekunder_simpan[$i].", ";
			}
			$dtDiagnosisSekunder['DESKRIPSI_DIAGNOSIS'] = rtrim($totalRoutesDiagnosisSekunder, ', ');*/

			//simpan data diagnosis
			if (count($EMR_dr_IGD_P3_DiagnosisSekunder_simpan) > 0)
			{
			  for($i=0; $i<count($EMR_dr_IGD_P3_DiagnosisSekunder_simpan); $i++)
			  {
			    $dtDiagnosisSekunder['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P3;
			    $dtDiagnosisSekunder['ID_DIAGNOSIS'] = $EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder_simpan[$i];
			    $dtDiagnosisSekunder['DIAGNOSIS'] = $EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder_simpan[$i];
			    $dtDiagnosisSekunder['DESKRIPSI_DIAGNOSIS'] = $EMR_dr_IGD_P3_DiagnosisSekunder_simpan[$i];
			    $dtDiagnosisSekunder['STATUS_DIAGNOSIS'] = $status;
			    $dtDiagnosisSekunder['STATUS2_DIAGNOSIS'] = 'Diagnosis Sekunder';

			    $this->db->insert("EMR_DETAIL_DIAGNOSIS",$dtDiagnosisSekunder);
			  };
			}

			//AWAL SIMPAN DIAGNOSIS
			$EMR_dr_IGD_P3_DiagnosisUtama_simpan = $this->input->post('EMR_dr_IGD_P3_DiagnosisUtama');
			$EMR_dr_IGD_P3_SimpanIdDiagnosisUtama_simpan = $this->input->post('EMR_dr_IGD_P3_SimpanIdDiagnosisUtama');
			$EMR_dr_IGD_P3_SimpanNamaDiagnosisUtama_simpan = $this->input->post('EMR_dr_IGD_P3_SimpanNamaDiagnosisUtama');

			//simpan data diagnosis
			if ($EMR_dr_IGD_P3_DiagnosisUtama_simpan != '')
			{
			    $dtDiagnosisUtama['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P3;
			    $dtDiagnosisUtama['ID_DIAGNOSIS'] = $EMR_dr_IGD_P3_SimpanIdDiagnosisUtama_simpan;
			    $dtDiagnosisUtama['DIAGNOSIS'] = $EMR_dr_IGD_P3_SimpanNamaDiagnosisUtama_simpan;
			    $dtDiagnosisUtama['DESKRIPSI_DIAGNOSIS'] = $EMR_dr_IGD_P3_DiagnosisUtama_simpan;
			    $dtDiagnosisUtama['STATUS_DIAGNOSIS'] = $status;
			    $dtDiagnosisUtama['STATUS2_DIAGNOSIS'] = 'Diagnosis Utama';

			    $this->db->insert("EMR_DETAIL_DIAGNOSIS",$dtDiagnosisUtama);
			}

	    //$SP1['MenuD_3'] = 'DONE';

	    //$this->db->where("ID_PEMERIKSAAN",$this->input->post('IGD_idpemeriksaan'));
	    //$this->db->update("EMR_IGD_MENU",$SP1);

	    echo "TERUJI";
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

	function simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan, $EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan, $EMR_dr_IGD_P4_ObatidRacik_simpan,
	$EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan, $EMR_dr_IGD_P4_ObatRacikSatuan_simpan, $EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan, $EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan,
	$EMR_dr_IGD_P4_ObatidRacik_2_simpan, $EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan, $EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan, $EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan,
	$EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan, $EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan, $EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan, $EMR_dr_IGD_P4_ObatRacikLain_simpan)
	{
	  $status = 'BARU';
	  if (count($EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan) > 0)
	  {
	      $kode = $this->get_id_obat_racik();
	      $kode = $kode + 1;

	      for($a=0; $a<count($EMR_dr_IGD_P4_ObatidRacik_2_simpan); $a++)
	      {
	        $dtObatRacik['ID_RACIK'] = $this->kode_inc_obat_racik($kode);
	        $dtObatRacik['KET_JUMLAH_OBAT_RACIK'] = $EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan[$a];
	        $dtObatRacik['JUMLAH_OBAT_RACIK'] = $EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan[$a];
	        $dtObatRacik['ATURAN1_OBAT_RACIK'] = $EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan[$a];
	        $dtObatRacik['ATURAN2_OBAT_RACIK'] = $EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan[$a];
	        $dtObatRacik['ATURAN3_OBAT_RACIK'] = $EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan[$a];
	        $dtObatRacik['ATURAN4_OBAT_RACIK'] = $EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan[$a];
	        $dtObatRacik['KETERANGAN1_OBAT_RACIK'] = $EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan[$a];
	        $dtObatRacik['KETERANGAN2_OBAT_RACIK'] = $EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan[$a];
	        $dtObatRacik['LAIN_OBAT_RACIK'] = $EMR_dr_IGD_P4_ObatRacikLain_simpan[$a];
	        $dtObatRacik['STATUS_OBAT_RACIK'] = $status;
	        $dtObatRacik['STATUS_OBAT_RACIK2'] = $status;

	        $this->db->insert("EMR_OBAT_RACIK",$dtObatRacik);

	        for($b=0; $b<count($EMR_dr_IGD_P4_ObatidRacik_simpan); $b++)
	        {
	          if ($EMR_dr_IGD_P4_ObatidRacik_2_simpan[$a] == $EMR_dr_IGD_P4_ObatidRacik_simpan[$b])
	          {
	            $dtObatBahan['ID_RACIK'] = $this->kode_inc_obat_racik($kode);
	            $dtObatBahan['ID_OBAT_RACIK_BAHAN'] = $EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan[$b];
	            $dtObatBahan['NAMA_OBAT_RACIK_BAHAN'] = $EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan[$b];
	            $dtObatBahan['JUMLAH_OBAT_RACIK_BAHAN'] = $EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan[$b];
	            $dtObatBahan['SATUAN_OBAT_RACIK_BAHAN'] = $EMR_dr_IGD_P4_ObatRacikSatuan_simpan[$b];
	            $dtObatBahan['STATUS_OBAT_RACIK_BAHAN'] = $status;
	            $dtObatBahan['STATUS_OBAT_RACIK_BAHAN2'] = $status;

	            $this->db->insert("EMR_OBAT_RACIK_BAHAN",$dtObatBahan);
	          }
	        };
	        $kode = $kode + 1;
	      };
	  }
	}

	function simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_dr_IGD_P4_Obatobatsatuan_simpan, $EMR_dr_IGD_P4_Obatidobatsatuan_simpan, $EMR_dr_IGD_P4_ObatSatuanJumlah_simpan,
	$EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan, $EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan, $EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan, $EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan,
	$EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan, $EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan, $EMR_dr_IGD_P4_ObatSatuanLain_simpan)
	{
		$status = 'BARU';
		if (count($EMR_dr_IGD_P4_Obatobatsatuan_simpan) > 0)
		{
			for($i=0; $i<count($EMR_dr_IGD_P4_Obatobatsatuan_simpan); $i++)
			{
				$dtObatSatuan['ID_OBAT_SATUAN'] = $EMR_dr_IGD_P4_Obatidobatsatuan_simpan[$i];
				$dtObatSatuan['NAMA_OBAT_SATUAN'] = $EMR_dr_IGD_P4_Obatobatsatuan_simpan[$i];
				$dtObatSatuan['JUMLAH_OBAT_SATUAN'] = $EMR_dr_IGD_P4_ObatSatuanJumlah_simpan[$i];
				$dtObatSatuan['ATURAN1_OBAT_SATUAN'] = $EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan[$i];
				$dtObatSatuan['ATURAN2_OBAT_SATUAN'] = $EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan[$i];
				$dtObatSatuan['ATURAN3_OBAT_SATUAN'] = $EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan[$i];
				$dtObatSatuan['ATURAN4_OBAT_SATUAN'] = $EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan[$i];
				$dtObatSatuan['KETERANGAN1_OBAT_SATUAN'] = $EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan[$i];
				$dtObatSatuan['KETERANGAN2_OBAT_SATUAN'] = $EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan[$i];
				$dtObatSatuan['LAIN_OBAT_SATUAN'] = $EMR_dr_IGD_P4_ObatSatuanLain_simpan[$i];
				$dtObatSatuan['STATUS_OBAT_SATUAN'] = $status;
				$dtObatSatuan['STATUS_OBAT_SATUAN2'] = $status;

				$this->db->insert("EMR_OBAT_SATUAN",$dtObatSatuan);
			};
		}
	}

	function worklist_hd_obat_p4($noreg_p4, $norm_p4, $id_workList, $user_id)
	{
		date_default_timezone_set('Asia/Jakarta');
	  $second_db = $this->load->database('second', TRUE);

	  $tampung_no_bukti = $second_db->query("select MAX(nobukti) AS no_bukti from rd_hdtransaksi where noreg ='$noreg_p4'")->row();
	  $tampung_no_bukti_2 = $tampung_no_bukti->no_bukti;

		$workhd = array(
			'NoJO' => $id_workList,
			'NoBukti' => $tampung_no_bukti_2,
			'NoReg' => $noreg_p4,
			'NoRM' => $norm_p4,
			'App' => 'RD',
			'KdUnit' => 'RD',
			'KdPMedis' => 'FAR',
			'NoTransaksi' => ' ',
			'Validasi' => 'False',
			'TglOrder' => date('d-M-Y'),
			'TglRencanaRealisasi' => date('d-M-Y'),
			'CatatanKlinis' => ' ',
			'UsrInsert' => $user_id,
			'UsrUpdate' => $user_id,
			'TglInsert' => date('d-M-Y H:i:s'),
			'Tglupdate' => date('d-M-Y H:i:s'),
			'IsServiced' => '',
			'kd_lokasilayan' => NULL,
			'IsDoneByNurse' => '',
			'IsCito' => '',
			'JamRencanaRealisasi' => NULL
		);

		$second_db->insert("md_WorkListHD",$workhd);
	}

	function btnsimpanIGD_dr_P4()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$second_db = $this->load->database('second', TRUE);

			$Id_pemeriksaan_P4 = $this->input->post('IGD_idpemeriksaan');

			//AWAL SIMPAN obat satuan
			$EMR_dr_IGD_P4_Obatobatsatuan_simpan = $this->input->post('EMR_dr_IGD_P4_Obatobatsatuan_simpan');
			$EMR_dr_IGD_P4_Obatidobatsatuan_simpan = $this->input->post('EMR_dr_IGD_P4_Obatidobatsatuan_simpan');
			$EMR_dr_IGD_P4_ObatSatuanJumlah_simpan = $this->input->post('EMR_dr_IGD_P4_ObatSatuanJumlah_simpan');
			$EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan = $this->input->post('EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan');
			$EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan = $this->input->post('EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan');
			$EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan = $this->input->post('EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan');
			$EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan = $this->input->post('EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan');
			$EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan = $this->input->post('EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan');
			$EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan = $this->input->post('EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan');
			$EMR_dr_IGD_P4_ObatSatuanLain_simpan = $this->input->post('EMR_dr_IGD_P4_ObatSatuanLain_simpan');

			//AWAL SIMPAN OBAT RACIK
			$EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan = $this->input->post('EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan');
			$EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan = $this->input->post('EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan');
			$EMR_dr_IGD_P4_ObatidRacik_simpan = $this->input->post('EMR_dr_IGD_P4_ObatidRacik_simpan');
			$EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan');
			$EMR_dr_IGD_P4_ObatRacikSatuan_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikSatuan_simpan');
			$EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan');
			$EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan');
			$EMR_dr_IGD_P4_ObatidRacik_2_simpan = $this->input->post('EMR_dr_IGD_P4_ObatidRacik_2_simpan');
			$EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan');
			$EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan');
			$EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan');
			$EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan');
			$EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan');
			$EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan');
			$EMR_dr_IGD_P4_ObatRacikLain_simpan = $this->input->post('EMR_dr_IGD_P4_ObatRacikLain_simpan');

			$dtObatSatuan['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P4;

			$dtObatRacik['ID_PEMERIKSAAN'] = $Id_pemeriksaan_P4;

			//worklist
			$noreg_p4 = $this->input->post('EMR_dr_IGD_NOREG');
			$norm_p4 = $this->input->post('EMR_dr_IGD_NORM');

			$code1 = date('Ymd');

			$kode = $this->get_id_work_list($code1);
			$kode = $kode + 1;

			$id_workList = $this->kode_inc_work_list($code1,$kode);

			$user_id = $this->session->userdata('id_pengguna');

			$this->simpan_obat_satuan_asesmen_awal($dtObatSatuan, $EMR_dr_IGD_P4_Obatobatsatuan_simpan, $EMR_dr_IGD_P4_Obatidobatsatuan_simpan, $EMR_dr_IGD_P4_ObatSatuanJumlah_simpan,
			$EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan, $EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan, $EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan, $EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan,
			$EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan, $EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan, $EMR_dr_IGD_P4_ObatSatuanLain_simpan);

			$this->simpan_obat_racik_asesmen_awal($dtObatRacik, $EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan, $EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan, $EMR_dr_IGD_P4_ObatidRacik_simpan,
			$EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan, $EMR_dr_IGD_P4_ObatRacikSatuan_simpan, $EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan, $EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan,
			$EMR_dr_IGD_P4_ObatidRacik_2_simpan, $EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan, $EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan, $EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan,
			$EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan, $EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan, $EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan, $EMR_dr_IGD_P4_ObatRacikLain_simpan);

			$this->worklist_hd_obat_p4($noreg_p4, $norm_p4, $id_workList, $user_id);

			$workdt = array(
				'NoJO' => $id_workList,
				'KdLayan' => 'FAR01.1',
				'Resep' => ' ',
				'KdStatus' => '01',
				'TglRealisasi' => NULL,
				'NoAppointment' => ' ',
				'UsrInsert' => $user_id,
				'UsrUpdate' => $user_id,
				'TglInsert' => date('d-M-Y H:i:s'),
				'Tglupdate' => date('d-M-Y H:i:s'),
				'AutoBayar' => 'False',
				'Tutup' => 'False',
				'KdTipeResep' => '',
				'IsByNurse' => 'False',
				'Cito' => 'False',
				'HarusBayar' => 'False',
				'isOrderTextSentToPrinter' => 'False',
				'PrintCount' => 0,
			);

			$second_db->insert("md_WorkListDT",$workdt);


			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_dr_P5()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{

			$P1['ID_PEMERIKSAAN'] = $this->input->post('IGD_idpemeriksaan');
			$P1['JAM'] = date('H:i',strtotime($this->input->post('xdr_IGD_P5_jam')));
			$P1['ID_OBAT'] = $this->input->post('xdr_IGD_P5_idObat');
			$P1['NAMA_OBAT'] = $this->input->post('xdr_IGD_P5_namaObat');
			$P1['DOSIS'] = $this->input->post('xdr_IGD_P5_dosis');
			$P1['RUTE'] = $this->input->post('xdr_IGD_P5_rute');
			$P1['TINDAKAN'] = $this->input->post('xdr_IGD_P5_tindakan');
			$P1['KETERANGAN'] = $this->input->post('xdr_IGD_P5_ket');
			$P1['DIBERIKAN_OLEH'] = $this->input->post('xdr_IGD_P5_oleh');

			$this->db->insert("EMR_IGD_PENATALAKSANAAN",$P1);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_dr_P6()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{

			$P1['ID_PEMERIKSAAN'] = $this->input->post('dr_IGD_P6_idper');
			$P1['JAM'] = date('H:i',strtotime($this->input->post('dr_IGD_P6_jam')));
			$P1['NO'] = $this->input->post('dr_IGD_P6_no');
			$P1['OBSERVASI'] = $this->input->post('dr_IGD_P6_Observasi');
			$P1['OLEH'] = $this->input->post('dr_IGD_P6_Oleh');

			$this->db->insert("EMR_IGD_Observasi",$P1);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_dr_P7()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$SP1['MenuD_5'] = 'DONE';
			$SP1['MenuD_6'] = 'DONE';
			$SP1['MenuD_7'] = 'DONE';
			$SP4['ID_PEMERIKSAAN'] = $this->input->post('IGD_idpemeriksaan');
			$SP4['JAM'] = $this->input->post('EMR_dr_IGD_P7_Jam');
			$SP4['TANGGAL_KELUAR'] = date('d-M-Y');
			$SP4['AIRWAY'] = $this->input->post('EMR_dr_IGD_P7_Airway');
			$SP4['KEADAAN_UMUM'] = $this->input->post('EMR_dr_IGD_P7_KeadaanUmum');
			$SP4['KESADARAN_UMUM'] = $this->input->post('EMR_dr_IGD_P7_Kesadaran');
			$SP4['GCS_E'] = $this->input->post('EMR_dr_IGD_P7_GCSe');
			$SP4['GCS_V'] = $this->input->post('EMR_dr_IGD_P7_GCSv');
			$SP4['GCS_M'] = $this->input->post('EMR_dr_IGD_P7_GCSm');
			$SP4['SpO2'] = $this->input->post('EMR_dr_IGD_P7_SpO2');
			$SP4['SISTOLIK'] = $this->input->post('EMR_dr_IGD_P7_TDSistolik');
			$SP4['DIASTOLIK'] = $this->input->post('EMR_dr_IGD_P7_TDDiastolik');
			$SP4['SUHU_TUBUH'] = $this->input->post('EMR_dr_IGD_P7_suhutubuh');
			$SP4['NADI_1'] = $this->input->post('EMR_dr_IGD_P7_nadi');
			$SP4['NADI_2'] = $this->input->post('EMR_dr_IGD_P7_NadiCH');
			$SP4['RESPIRATORY_1'] = $this->input->post('EMR_dr_IGD_P7_respiratory');
			$SP4['RESPIRATORY_2'] = $this->input->post('EMR_dr_IGD_P7_RespiratoryCH');
			$SP4['KET_KELUAR_IGD'] = $this->input->post('EMR_dr_IGD_P7_ketKeluar');
			$SP4['TRANSPORTASI_PULANG'] = $this->input->post('EMR_dr_IGD_P7_transKeluar');
			$SP4['EDUKASI'] = $this->input->post('EMR_dr_IGD_P7_eduKeluar');
			$SP4['OLEH'] = $this->input->post('EMR_dr_IGD_P7_Oleh');

			$this->db->where("ID_PEMERIKSAAN",$this->input->post('IGD_idpemeriksaan'));
			$this->db->update("EMR_IGD_MENU",$SP1);
			$this->db->insert("EMR_IGD_KELUAR",$SP4);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_pr_P1()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$SP1['Menu_1'] = 'DONE';
			$P1['KESADARAN_UMUM'] = $this->input->post('EMR_pr_IGD_P1_Kesadaran');
			$P1['SpO2'] = $this->input->post('EMR_pr_IGD_P1_SpO2');
			$P1['GCS_E'] = $this->input->post('EMR_pr_IGD_P1_GCSe');
			$P1['GCS_V'] = $this->input->post('EMR_pr_IGD_P1_GCSv');
			$P1['GCS_M'] = $this->input->post('EMR_pr_IGD_P1_GCSm');
			$P1['TTV_MATA'] = $this->input->post('EMR_pr_IGD_P1_Mata');
			$P1['TTV_AKRAL_H'] = $this->input->post('EMR_pr_IGD_P1_AH');
			$P1['TTV_AKRAL_M'] = $this->input->post('EMR_pr_IGD_P1_AM');
			$P1['TTV_AKRAL_K'] = $this->input->post('EMR_pr_IGD_P1_AK');
			$P1['SISTOLIK'] = $this->input->post('EMR_pr_IGD_P1_TDSistolik');
			$P1['SISTOLIK'] = $this->input->post('EMR_pr_IGD_P1_TDSistolik');
			$P1['DIASTOLIK'] = $this->input->post('EMR_pr_IGD_P1_TDDiastolik');
			$P1['SUHU_TUBUH'] = $this->input->post('EMR_pr_IGD_P1_suhutubuh');
			$P1['NADI_1'] = $this->input->post('EMR_pr_IGD_P1_nadi');
			$P1['NADI_2'] = $this->input->post('EMR_pr_IGD_P1_NadiCH');
			$P1['RESPIRATORY_1'] = $this->input->post('EMR_pr_IGD_P1_respiratory');
			$P1['RESPIRATORY_2'] = $this->input->post('EMR_pr_IGD_P1_RespiratoryCH');
			if($this->input->post('EMR_pr_IGD_P1_lingkarkepala') == '')
			{
				$P1['LINGKAR_KEPALA'] = 'Tidak diperiksa';
			}
			else
			{
				$P1['LINGKAR_KEPALA'] = $this->input->post('EMR_pr_IGD_lingkarkepala');
			}

			$this->db->where("ID_PEMERIKSAAN",$this->input->post('IGD_idpemeriksaan'));
			$this->db->update("EMR_HASIL_PERIKSA_UMUM",$P1);
			$this->db->update("EMR_IGD_MENU",$SP1);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_pr_P2()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$SP1['Menu_2'] = 'DONE';
			$P1['JAM_TINDAKAN'] = $this->input->post('EMR_pr_IGD_P2_jamTindakan');
			$P1['JAM_MASUK'] = $this->input->post('EMR_pr_IGD_P2_jamMasuk');
			$P1['TANGGAL_MASUK'] = $this->input->post('EMR_pr_IGD_P2_tglMasuk');
			if($this->input->post('EMR_pr_IGD_Anamese') == 'Auto Anamese')
			{
				$P1['ANAMESE_IGD'] = $this->input->post('EMR_pr_IGD_Anamese');
			}
			else
			{
				$var1 = $this->input->post('EMR_pr_IGD_Anamese');
				$var1 .= ' : <br> Nama : ';
				$var1 .= $this->input->post('EMR_pr_IGD_AnameseNamaHetero');
				$var1 .= '<br> Hubungan : ';
				$var1 .= $this->input->post('EMR_pr_IGD_AnameseHubungan');
				$P1['ANAMESE_IGD'] = $var1;
			}
			if($this->input->post('EMR_pr_IGD_CaraMasuk') == 'Jalan dengan bantuan')
			{
				$var2 = $this->input->post('EMR_pr_IGD_CaraMasuk');
				$var2 .= ' : ';
				$var2 .= $this->input->post('EMR_pr_IGD_caraMasukbantuan');
				$P1['CARA_MASUK_IGD'] = $var2;
			}
			else
			{
				$P1['CARA_MASUK_IGD'] = $this->input->post('EMR_pr_IGD_CaraMasuk');
			}
			if($this->input->post('EMR_pr_IGD_Rujukan') == 'Rujukan')
			{
				$var3 = $this->input->post('EMR_pr_IGD_Rujukan');
				$var3 .= ' : ';
				$var3 .= $this->input->post('EMR_pr_IGD_RujukanIsi');
				$P1['ASAL_MASUK_IGD'] = $var3;
			}
			else
			{
				$P1['ASAL_MASUK_IGD'] = $this->input->post('EMR_pr_IGD_Rujukan');
			}
			if($this->input->post('EMR_pr_IGD_Pengobatansebelumnya') == 'Ada')
			{
				$P1['RIWAYAT_PENGOBATAN'] = $this->input->post('EMR_pr_IGD_PengobatanSebelumnyatxt');
			}
			else
			{
				$P1['RIWAYAT_PENGOBATAN'] = $this->input->post('EMR_pr_IGD_Pengobatansebelumnya');
			}
			$P1['RIWAYAT_PENYAKIT_DAHULU2'] = $this->input->post('EMR_pr_IGD_RPenyDahu');
			$P1['RIWAYAT_PENYAKIT_SEKARANG2'] = $this->input->post('EMR_pr_IGD_RiwayatPenyakitSekarang');

			$this->db->where("ID_PEMERIKSAAN",$this->input->post('IGD_idpemeriksaan'));
			$this->db->update("EMR_HASIL_PERIKSA_UMUM",$P1);
			$this->db->update("EMR_IGD_MENU",$SP1);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_pr_P3()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$SP1['Menu_3'] = 'DONE';
			$P1['RISIKO_JATUH'] = $this->input->post('EMR_pr_IGD_P3_RJstat');
			$P1['SKOR_RISIKO_JATUH'] = $this->input->post('EMR_pr_IGD_P3_SkorRJ');
			$P1['SKALA_RISIKO_JATUH'] = $this->input->post('EMR_pr_IGD_P3_SkalaRJ');
			$P1['KET_RISIKO_JATUH'] = $this->input->post('EMR_pr_IGD_P3_RJKet');
			$P1['PENGKAJIAN_FUNGSI'] = $this->input->post('EMR_pr_IGD_P3_KajiFungsi');
			$P1['PENGKAJIAN_DEKUBITUS'] = $this->input->post('EMR_pr_IGD_P3_Dekubitus');
			$P1['BERAT_BADAN'] = $this->input->post('EMR_pr_IGD_P3_beratbadan');
			$P1['TINGGI_BADAN'] = $this->input->post('EMR_pr_IGD_P3_tinggibadan');
			$P1['NILAI_BMI'] = $this->input->post('EMR_pr_IGD_P3_Nilai');
			$P1['KATEGORI_BMI'] = $this->input->post('EMR_pr_IGD_P3_Kategori');
			$P1['BB_IDEAL'] = $this->input->post('EMR_pr_IGD_P3_BBIdeal');
			$P1['NILAI_Z'] = $this->input->post('EMR_pr_IGD_P3_NILAI_Z');
			$P1['GANGGUAN_GASTROINTESTINAL'] = $this->input->post('EMR_pr_IGD_P3_Gastro');
			$P1['PERUBAHAN_ASUPAN_MAKAN'] = $this->input->post('EMR_pr_IGD_P3_Asupanmakan');
			$P1['FAKTOR_RISIKO_SAKIT'] = $this->input->post('EMR_pr_IGD_P3_RisikoSakit');
			$P1['TINDAK_LANJUT'] = $this->input->post('EMR_pr_IGD_P3_Tindakan');
			$P1['PERILAKU'] = $this->input->post('EMR_pr_IGD_P3_Prilaku');

			$this->db->where("ID_PEMERIKSAAN",$this->input->post('IGD_idpemeriksaan'));
			$this->db->update("EMR_ASESMEN_RISIKO",$P1);
			$this->db->update("EMR_IGD_MENU",$SP1);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_pr_P4()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$P1['ID_PEMERIKSAAN'] = $this->input->post('IGD_idper');
			$P1['NO'] = $this->input->post('IGD_no');
			$P1['SISTEM'] = $this->input->post('IGD_sistem');
			$P1['DIAGNOSA'] = $this->input->post('IGD_diagnosa');
			$P1['TINDAKAN'] = $this->input->post('IGD_tindakan');
			$P1['JAM'] = $this->input->post('IGD_jam');

			$this->db->insert("EMR_D_DAN_T_PERAWAT",$P1);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_pr_P5()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{

			$P1['ID_PEMERIKSAAN'] = $this->input->post('IGD_P5_idper');
			$P1['JAM'] = date('H:i',strtotime($this->input->post('IGD_P5_jam')));
			$P1['ID_OBAT'] = $this->input->post('IGD_P5_idObat');
			$P1['NAMA_OBAT'] = $this->input->post('IGD_P5_namaObat');
			$P1['DOSIS'] = $this->input->post('IGD_P5_dosis');
			$P1['RUTE'] = $this->input->post('IGD_P5_rute');
			$P1['TINDAKAN'] = $this->input->post('IGD_P5_tindakan');
			$P1['KETERANGAN'] = $this->input->post('IGD_P5_ket');
			$P1['DIBERIKAN_OLEH'] = $this->input->post('IGD_P5_oleh');

			$this->db->insert("EMR_IGD_PENATALAKSANAAN",$P1);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_P6()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{

			$P1['ID_PEMERIKSAAN'] = $this->input->post('IGD_idper');
			$P1['JAM'] = date('H:i',strtotime($this->input->post('IGD_jam')));
			$P1['NO'] = $this->input->post('IGD_no');
			$P1['OBSERVASI'] = $this->input->post('IGD_Observasi');
			$P1['OLEH'] = $this->input->post('IGD_Oleh');

			$this->db->insert("EMR_IGD_Observasi",$P1);

			echo "TERUJI";
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
												'kodebarang' => trim($row['kdBarang']),
                        'namabarang' => trim($row['nmdesc1']),
                        'value' => trim($row['nmdesc1']),
                        'label' => trim($row['kdBarang'])
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
				                        'value' => trim($row['kddiagnosa']." - ".$row['nmdiagnosa']),
				                        'label' => trim($row['kddiagnosa']." - ".$row['nmdiagnosa']),
																'label_id' => trim($row['kddiagnosa']),
																'label_nama' => trim($row['nmdiagnosa'])
				                    );
	            }
	        echo json_encode($data);
	}
}
