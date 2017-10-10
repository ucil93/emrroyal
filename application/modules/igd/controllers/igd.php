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

	function pasien($id_param)
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->model('/app_load_data_table');
			$royaldb_db = $this->load->database('royaldb', TRUE);

			$tgltoday = date('d-M-Y');

			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$d['namadokter']	= '';

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

			$tgltdy = 'GD-';
			$tgltdy .= date('d');
			$tgltdy .= date('m');
			$tgltdy .= date('Y');
			$kode = $this->db->query("select left(ID_PEMERIKSAAN,11) from EMR_UTAMA_PERIKSA where ID_PEMERIKSAAN LIKE '%$tgltdy%'")->num_rows();
			$kode = $kode + 1;

			$per1['Triase'] = $this->input->post("IGD_hasilTriase");
			$per4['NORM'] = $this->input->post("IGD_norm");
			$per4['NOREG'] = $this->input->post("IGD_noreg");

			$id_pemeriksaan = $this->kode_inc_IGD($kode);
			$per1['ID_PEMERIKSAAN'] = $id_pemeriksaan;
			$per2['ID_PEMERIKSAAN'] = $id_pemeriksaan;
			$per3['ID_PEMERIKSAAN'] = $id_pemeriksaan;
			$per4['ID_PEMERIKSAAN'] = $id_pemeriksaan;

			$this->db->insert("EMR_IGD_TRIASE",$per1);
			$this->db->insert("EMR_IGD_MENU",$per2);
			$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$per3);
			$this->db->insert("EMR_UTAMA_PERIKSA",$per4);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanTriase2()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$per1['Triase'] = $this->input->post("IGD_hasilTriase");

			$per1['ID_PEMERIKSAAN'] = $this->input->post("IGD_idpemeriksaan");
			$per2['ID_PEMERIKSAAN'] = $this->input->post("IGD_idpemeriksaan");
			$per3['ID_PEMERIKSAAN'] = $this->input->post("IGD_idpemeriksaan");
			$per4['ID_PEMERIKSAAN'] = $this->input->post("IGD_idpemeriksaan");

			$this->db->insert("EMR_IGD_TRIASE",$per1);
			$this->db->insert("EMR_IGD_MENU",$per2);
			$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$per3);
			$this->db->insert("EMR_UTAMA_PERIKSA",$per4);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_P1()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata("logged_in")!="")
		{
			$noreg = $this->input->post("EMR_pr_IGD_NOREG");
			$id_pemeriksaan = $this->db->query("select * from EMR_UTAMA_PERIKSA where NOREG = '$noreg'")->row()->ID_PEMERIKSAAN;

			$P1['KEADAAN_UMUM'] = $this->input->post('EMR_pr_IGD_KeadaanUmum');
			$P1['KESADARAN_UMUM'] = $this->input->post('EMR_pr_IGD_Kesadaran');
			$P1['GCS_E'] = $this->input->post('EMR_pr_IGD_GCSe');
			$P1['GCS_V'] = $this->input->post('EMR_pr_IGD_GCSv');
			$P1['GCS_M'] = $this->input->post('EMR_pr_IGD_GCSm');
			$P1['SISTOLIK'] = $this->input->post('EMR_pr_IGD_TDSistolik');
			$P1['DIASTOLIK'] = $this->input->post('EMR_pr_IGD_TDDiastolik');
			$P1['SUHU_TUBUH'] = $this->input->post('EMR_pr_IGD_suhutubuh');
			$P1['NADI_1'] = $this->input->post('EMR_pr_IGD_nadi');
			$P1['NADI_2'] = $this->input->post('EMR_pr_IGD_NadiCH');
			$P1['RESPIRATORY_1'] = $this->input->post('EMR_pr_IGD_respiratory');
			$P1['RESPIRATORY_2'] = $this->input->post('EMR_pr_IGD_RespiratoryCH');
			$P1['BERAT_BADAN'] = $this->input->post('EMR_pr_IGD_beratbadan');
			$P1['TINGGI_BADAN'] = $this->input->post('EMR_pr_IGD_tinggibadan');
			if($this->input->post('EMR_pr_IGD_lingkarkepala') == '')
			{
				$P1['LINGKAR_KEPALA'] = '-';
			}
			else
			{
				$P1['LINGKAR_KEPALA'] = $this->input->post('EMR_pr_IGD_lingkarkepala');
			}

			$this->db->where("ID_PEMERIKSAAN",$id_pemeriksaan);
			$this->db->update("EMR_HASIL_PERIKSA_UMUM",$P1);

			$SP1['Menu_1'] = 'DONE';

			$this->db->where("ID_PEMERIKSAAN",$id_pemeriksaan);
			$this->db->update("EMR_IGD_MENU",$SP1);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}

	function btnsimpanIGD_P4()
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

			$kode1 = $this->db->query("select * from EMR_IGD_DIAGNOSA_PERAWAT")->num_rows();
			$kode1 = $kode1 + 1;
			$code1 = 'D';
			$code1 .= sprintf("%04s", $kode1);
			$P2['ID_DIAGNOSA'] = $code1;
			$P2['SISTEM'] = $this->input->post('IGD_sistem');
			$P2['DIAGNOSA'] = $this->input->post('IGD_diagnosa');

			$kode2 = $this->db->query("select * from EMR_IGD_TINDAKAN_PERAWAT")->num_rows();
			$kode2 = $kode2 + 1;
			$code2 = 'T';
			$code2 .= sprintf("%04s", $kode2);
			$P3['ID_TINDAKAN'] = $code;
			$P3['SISTEM'] = $this->input->post('IGD_sistem');
			$P3['TINDAKAN'] = $this->input->post('IGD_tindakan');

			$this->db->insert("EMR_D_DAN_T_PERAWAT",$P1);

			if($this->input->post('IGD_diagnosaInput') != '')
			{
				$this->db->insert("EMR_IGD_DIAGNOSA_PERAWAT",$P2);
			}
			if($this->input->post('IGD_tindakanInput') != '')
			{
				$this->db->insert("EMR_IGD_TINDAKAN_PERAWAT",$P3);
			}

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
}
