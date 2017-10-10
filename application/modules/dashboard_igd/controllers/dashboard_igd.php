<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard_igd extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->model('/app_load_data_table');

			$tgltoday = date('d-M-Y');

			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");
			$d['nama']	= '';
			$d['namadokter']	= '';
			$d['dataTable'] = $this->app_load_data_table->getAllDataDok();

			$tanggalPilih = $this->input->post('tgl_ubah');

			if($tanggalPilih == '')
			{
				$d['tanggl1'] = date('d F Y',strtotime($tgltoday));
			}
			else
			{
				$d['tanggl1'] = $tanggalPilih;
			}

			$this->load->view('dashboard_igd/bg_header', $d);
			$this->load->view('dashboard_igd/bg_navigation', $d);
			$this->load->view('dashboard_igd/bg_home', $d);
			//$this->load->view('dashboard_igd/content', $d);
			$this->load->view('dashboard_igd/bg_footer', $d);
		}
		else
		{
			$this->session->sess_destroy();
			$this->load->view('login/login');
		}
	}

	public function ubahpass()
	{
		if($this->session->userdata("logged_in")!="")
		{
      $this->load->library('form_validation');

			//set validation rules
      $this->form_validation->set_rules('passwordlama', 'Password Lama', 'required');
      $this->form_validation->set_rules('passwordbaru', 'Password Baru', 'required');
      $this->form_validation->set_rules('passwordbaru2', 'Konfirmasi Password Baru', 'required');

      //run validation check
      if ($this->form_validation->run() == FALSE)
      {   //validation fails
          echo validation_errors();
      }
      else
      {
					$second_db 			= $this->load->database('second', TRUE);

					$pass_lama = $this->input->post('passwordlama');
					$pass_baru = $this->input->post('passwordbaru');
					$ulangi_pass_baru = $this->input->post('passwordbaru2');

					$user = $this->session->userdata("username");

					$login['user1'] = $user;
					$login['PASS2'] = $pass_lama;
					$cek = $second_db->get_where('TBLuser', $login);
					if($pass_baru == $ulangi_pass_baru)
					{
						if($cek->num_rows()>0)
						{
							$data = array(
								'PASS2' => $pass_baru,
							);

							$second_db->where('user1', $user);
							$second_db->update('TBLuser', $data);
							echo "YES";
						}
						else
						{
							echo "NO1";
						}
					}
					else
					{
						echo "NO2";
					}
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

	function btnsimpanawalIGDunk()
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

			$per1['NAMA_ALIAS'] = $this->input->post("IGD_namaAlias");
			$per1['TTL_ALIAS'] = $this->input->post("IGD_tahunAlias");

			$id_pemeriksaan = $this->kode_inc_IGD($kode);
			$per['ID_PEMERIKSAAN'] = $id_pemeriksaan;
			$per1['ID_PEMERIKSAAN'] = $id_pemeriksaan;

			$this->db->insert("EMR_UTAMA_PERIKSA",$per);
			$this->db->insert("EMR_IGD_MRX",$per1);

			echo "TERUJI";
		}
		else
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	}
}
