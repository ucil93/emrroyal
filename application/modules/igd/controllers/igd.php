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

			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$d['namadokter']	= '';

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
}
