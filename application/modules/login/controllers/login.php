<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	function index()
	{
	  if($this->session->userdata("logged_in")=="")
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

 			$this->load->view('login/login', $d);
		}
		else
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
	}

	function logout()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
		else
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
	}

	function act()
	{
		if($this->session->userdata("logged_in")=="")
		{
 			$dt['username'] = $_POST['username'];
 			$dt['password'] = $_POST['password'];
 			//$dt['dataDokter'] = $_POST['dataDokter'];
 			$dt['dataDokter'] = $this->input->post('dataDokter');
			$this->app_user_login_model->cekUserLogin($dt);
		}
		else
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
	}
}
