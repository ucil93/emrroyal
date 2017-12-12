<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class master_detail_laboratorium extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$d['active_dashboard_laboratorium'] = "";
			$d['active_master'] = "active";
				$d['active_grouplaboratorium'] = "";
				$d['active_laboratorium'] = "active";
			$d['active_transaksi'] = "";
				$d['active_ubahtatuslaboratorium'] = "";

			$this->load->model('/app_load_data_table');

			$d['dataTable'] = $this->app_load_data_table->getAllData();
			$d['dataTableGr'] = $this->app_load_data_table->getAllDataGr();
			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$this->load->view('dashboard_laboratorium/bg_header', $d);
			$this->load->view('dashboard_laboratorium/bg_navigation', $d);
			$this->load->view('master_detail_laboratorium/content', $d);
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
			$this->form_validation->set_rules('dataTableGr', 'Group Laboratorium', 'required');
			$this->form_validation->set_rules('kodedtlb', 'Kode Laboratorium', 'required');
			$this->form_validation->set_rules('namadtlb', 'Nama Laboratorium', 'required');

			//run validation check
			if ($this->form_validation->run() == FALSE)
			{   //validation fails
					echo validation_errors();
			}
			else
			{
				$dt['KODE_GR_LABORATORIUM'] = $this->input->post('dataTableGr');
				$dt['NM_DT_LABORATORIUM'] = $this->input->post('namadtlb');
				$dt['STATUS_DT_LABORAT'] = "AKTIF";
				$dt['KODE_DT_LABORATORIUM'] = $this->input->post('kodedtlb');
				$this->db->insert("EMR_DT_LABORATORIUM",$dt);
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

	/*function kode_inc($id)
	{
		$code = 'DTL_';
		$code .= sprintf("%04s", $id);
		return $code;
	}*/

	function get_id()
	{
		$maxid = 0;
		$row = $this->db->query('SELECT MAX(right(KODE_DT_LABORATORIUM,4)) AS maxid FROM EMR_DT_LABORATORIUM')->row();
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
			$this->form_validation->set_rules('dataTableGrEdit', 'Group Laboratorium', 'required');
			$this->form_validation->set_rules('namadtlbedit', 'Nama Laboratorium', 'required');
			$this->form_validation->set_rules('statusdtlbedit', 'Status Laboratorium', 'required');

			//run validation check
			if ($this->form_validation->run() == FALSE)
			{   //validation fails
					echo validation_errors();
			}
			else
			{
				$id = $this->input->post('kodedtlbedit');

				$data = array(
					'KODE_GR_LABORATORIUM' => $this->input->post('dataTableGrEdit'),
					'NM_DT_LABORATORIUM' => $this->input->post('namadtlbedit'),
					'STATUS_DT_LABORAT' => $this->input->post('statusdtlbedit'),
				);

				$this->db->where('KODE_DT_LABORATORIUM', $id);
				$this->db->update('EMR_DT_LABORATORIUM', $data);
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
		$id = $this->input->post('kodedtlbhapus');
		$this->db->where('KODE_DT_LABORATORIUM', $id);
  	$this->db->delete('EMR_DT_LABORATORIUM');
		echo "YES";
	}
}
