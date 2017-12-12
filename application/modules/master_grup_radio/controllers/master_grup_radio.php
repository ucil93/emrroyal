<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class master_grup_radio extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$d['active_dashboard_radio'] = "";
			$d['active_master'] = "active";
				$d['active_groupradio'] = "active";
				$d['active_dtradio'] = "";
			$d['active_transaksi'] = "";
				$d['active_ubahtatusradio'] = "";

			$this->load->model('/app_load_data_table');

			$d['dataTable'] = $this->app_load_data_table->getAllData();
			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$this->load->view('dashboard_radio/bg_header', $d);
			$this->load->view('dashboard_radio/bg_navigation', $d);
			$this->load->view('master_grup_radio/content', $d);
			$this->load->view('dashboard_radio/bg_footer', $d);

		}
		else
		{
			$this->session->sess_destroy();
			$this->load->view('login/login');
		}
	}

	public function simpan()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->library('form_validation');

			//set validation rules
			$this->form_validation->set_rules('namagrradio', 'Nama Group Radiologi', 'required');

			//run validation check
			if ($this->form_validation->run() == FALSE)
			{   //validation fails
					echo validation_errors();
			}
			else
			{
				$kode = $this->get_id();
				$kode = $kode + 1;

				$dt['NM_GR_RADIO'] = $this->input->post('namagrradio');
				$dt['STATUS_GR_RADIO'] = "AKTIF";
				$dt['KODE_GR_RADIO'] = $this->kode_inc($kode);
				$this->db->insert("EMR_GR_RADIOLOGI",$dt);
				echo "YES";
			}
		}
		else
		{
			$this->session->sess_destroy();
			$this->load->view('login/login');
		}
	}

	function kode_inc($id)
	{
		$code = 'GRR_';
		$code .= sprintf("%04s", $id);
		return $code;
	}

	function get_id()
	{
		$maxid = 0;
		$row = $this->db->query('SELECT MAX(right(KODE_GR_RADIO,4)) AS maxid FROM EMR_GR_RADIOLOGI')->row();
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
			$this->form_validation->set_rules('namagrradioedit', 'Nama Group Radiologi', 'required');
			$this->form_validation->set_rules('statusgrradioedit', 'Status Group Radiologi', 'required');

			//run validation check
			if ($this->form_validation->run() == FALSE)
			{   //validation fails
					echo validation_errors();
			}
			else
			{
				$id = $this->input->post('kodegrradioedit');

				$data = array(
					'NM_GR_RADIO' => $this->input->post('namagrradioedit'),
					'STATUS_GR_RADIO' => $this->input->post('statusgrradioedit'),
				);

				$this->db->where('KODE_GR_RADIO', $id);
				$this->db->update('EMR_GR_RADIOLOGI', $data);
				echo "YES";
			}
		}
		else
		{
			$this->session->sess_destroy();
			$this->load->view('login/login');
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
		$id = $this->input->post('kodegrradiohapus');

		$cek['KODE_GR_RADIO'] = $id;
		$cek2 = $this->db->get_where('EMR_DT_RADIOLOGI', $cek);

		if($cek2->num_rows()>0)
		{
			echo "NO";
		}
		else
		{
			$this->db->where('KODE_GR_RADIO');
	  	$this->db->delete('EMR_GR_RADIOLOGI');
			echo "YES";
		}
	}
}
