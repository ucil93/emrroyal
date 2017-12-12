<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class master_grup_laboratorium extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$d['active_dashboard_laboratorium'] = "";
			$d['active_master'] = "active";
				$d['active_grouplaboratorium'] = "active";
				$d['active_laboratorium'] = "";
			$d['active_transaksi'] = "";
				$d['active_ubahtatuslaboratorium'] = "";

			$this->load->model('/app_load_data_table');

			$d['dataTable'] = $this->app_load_data_table->getAllData();
			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$this->load->view('dashboard_laboratorium/bg_header', $d);
			$this->load->view('dashboard_laboratorium/bg_navigation', $d);
			$this->load->view('master_grup_laboratorium/content', $d);
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

	public function simpan()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->library('form_validation');

			//set validation rules
			$this->form_validation->set_rules('namagrlb', 'Nama Group Laboratorium', 'required');

			//run validation check
			if ($this->form_validation->run() == FALSE)
			{   //validation fails
					echo validation_errors();
			}
			else
			{
				$kode = $this->get_id();
				$kode = $kode + 1;

				$dt['NM_GR_LABORATORIUM'] = $this->input->post('namagrlb');
				$dt['STATUS_GR_LABORAT'] = "AKTIF";
				$dt['KODE_GR_LABORATORIUM'] = $this->kode_inc($kode);
				$this->db->insert("EMR_GR_LABORATORIUM",$dt);
				echo "YES";
			}
		}
		else
		{
			$this->session->sess_destroy();

			$this->load->model('/app_load_data_table');
			$d['dataDokter'] = $this->app_load_data_table->getAllDataDokter();

			$this->load->view('login/login', $d);
		}
	}

	function kode_inc($id)
	{
		$code = 'GRL_';
		$code .= sprintf("%04s", $id);
		return $code;
	}

	function get_id()
	{
		$maxid = 0;
		$row = $this->db->query('SELECT MAX(right(KODE_GR_LABORATORIUM,4)) AS maxid FROM EMR_GR_LABORATORIUM')->row();
		if ($row) {
				$maxid = $row->maxid;
		}
		return $maxid;
	}

	public function simpan_edit()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->library('form_validation');

			//set validation rules
			$this->form_validation->set_rules('namagrlbedit', 'Nama Group Laboratorium', 'required');
			$this->form_validation->set_rules('statusgrlbedit', 'Status Group Laboratorium', 'required');

			//run validation check
			if ($this->form_validation->run() == FALSE)
			{   //validation fails
					echo validation_errors();
			}
			else
			{
				$id = $this->input->post('kodegrlbedit');

				$data = array(
					'NM_GR_LABORATORIUM' => $this->input->post('namagrlbedit'),
					'STATUS_GR_LABORAT' => $this->input->post('statusgrlbedit'),
				);

				$this->db->where('KODE_GR_LABORATORIUM', $id);
				$this->db->update('EMR_GR_LABORATORIUM', $data);
				echo "YES";
			}
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

	function hapus()
	{
		$id = $this->input->post('kodegrlbhapus');

		$cek['KODE_GR_LABORATORIUM'] = $id;
		$cek2 = $this->db->get_where('EMR_DT_LABORATORIUM', $cek);

		if($cek2->num_rows()>0)
		{
			echo "NO";
		}
		else
		{
			$this->db->where('KODE_GR_LABORATORIUM', $id);
	  	$this->db->delete('EMR_GR_LABORATORIUM');
			echo "YES";
		}
	}
}
