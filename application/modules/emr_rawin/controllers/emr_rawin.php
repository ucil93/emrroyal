<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//ini igd
class emr_rawin extends CI_Controller {

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

	function kode_inc_rawin($code1,$kode)
	{
		$code = 'RI-';
		$code .= $code1;
		$code .= '-';
		$code .= sprintf("%06s", $kode);
		return $code;
	}

	function get_id_rawin($code1)
	{
		$maxid = 0;
		$row = $this->db->query("SELECT MAX(right(ID_PEMERIKSAAN,6)) as maxid FROM EMR_UTAMA_PERIKSA WHERE ID_PEMERIKSAAN LIKE '%$code1%'")->row();
		if ($row) {
				$maxid = $row->maxid;
		}
		return $maxid;
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
			$reg = $second_db->get_where("ri_reg",$where)->row();
			$cekidpem = $this->db->get_where("EMR_UTAMA_PERIKSA",$where)->num_rows();

			$where2['norm'] = $reg->norm;
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

			$d['id_pemeriksaan_awal'] = '';

			if($cekidpem == 0)
			{
				$normid = $reg->norm;
				$text = str_replace('-', '', $normid);
				$code1 = trim($text);

				$kode = $this->get_id_rawin($code1);
				$kode = $kode + 1;

				$id_pemeriksaan = $this->kode_inc_rawin($code1,$kode);

				$per['ID_PEMERIKSAAN'] = $id_pemeriksaan;
				$per['NORM'] = $reg->norm;
				$per['NOREG'] = $reg->noreg;
				$per['KODEUNIT'] = "";
				$per['TANGGAL_PERIKSA'] = date('d-M-Y');
				$per['JAM_PERIKSA'] = date('H:i:s');

				$per['USERNAME'] = $this->session->userdata("username");
				$per['PENANGGUNG_JAWAB_PERAWAT'] = "";
				$per['PENANGGUNG_JAWAB_DOKTER'] = "";
				$per['STATUS_ASESMEN'] = "RAWAT INAP";
				$per['STATUS_PEMERIKSAAN_AKHIR'] = "";
				$per['STATUS_LABORAT'] = "";
				$per['STATUS_RADIO'] = "";
				$per['STATUS_CHECKUP'] = "";
				$per['STATUS_SURAT_SAKIT'] = "";
				$per['STATUS_SURAT_SEHAT'] = "";
				$per['STATUS_OBAT'] = "";
				$per['KONTROL_KEMBALI'] = "";

				$per1['ID_PEMERIKSAAN'] = $id_pemeriksaan;
				$per2['ID_PEMERIKSAAN'] = $id_pemeriksaan;
				$per3['ID_PEMERIKSAAN'] = $id_pemeriksaan;

				$this->db->insert("EMR_UTAMA_PERIKSA",$per);
				$this->db->insert("EMR_HASIL_PERIKSA_UMUM",$per1);
				$this->db->insert("EMR_IGD_MENU",$per2);
				$this->db->insert("EMR_RUJUKAN",$per3);

				$d['id_pemeriksaan_awal'] = $id_pemeriksaan;

				$whereCekMenu['ID_PEMERIKSAAN'] = $id_pemeriksaan;
	   		$CekMenu = $this->db->get_where("EMR_IGD_MENU",$whereCekMenu)->row();
				$d['menu_rawin_1'] = $CekMenu->Menu_1;
				$d['menu_rawin_2'] = $CekMenu->Menu_2;
				$d['menu_rawin_3'] = $CekMenu->Menu_3;
				$d['menu_rawin_4'] = $CekMenu->Menu_4;
				$d['menu_rawin_5'] = $CekMenu->Menu_5;
				$d['menu_rawin_6'] = $CekMenu->Menu_6;
			}
			else
			{
				$id_peme_rawin = $this->db->get("EMR_UTAMA_PERIKSA where NOREG ='$reg->noreg'")->row()->ID_PEMERIKSAAN;
				$d['id_pemeriksaan_awal'] = $id_peme_rawin;

				$whereCekMenu['ID_PEMERIKSAAN'] = $id_peme_rawin;
	   		$CekMenu = $this->db->get_where("EMR_IGD_MENU",$whereCekMenu)->row();

				$d['menu_rawin_1'] = $CekMenu->Menu_1;
				$d['menu_rawin_2'] = $CekMenu->Menu_2;
				$d['menu_rawin_3'] = $CekMenu->Menu_3;
				$d['menu_rawin_4'] = $CekMenu->Menu_4;
				$d['menu_rawin_5'] = $CekMenu->Menu_5;
				$d['menu_rawin_6'] = $CekMenu->Menu_6;
			}

			$this->load->view('dashboard_rawin/bg_header',$d);
			$this->load->view('emr_rawin/emr_sidebar',$d);
			$this->load->view('emr_rawin/emr_rawin',$d);
			$this->load->view('dashboard_rawin/bg_footer',$d);
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}
}
