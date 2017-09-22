<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard_igd extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->load->model('/app_load_data_table');

			$unit = $this->input->post('dataTablePoli');

			$tgl = $this->input->post('tgl_ubah');
			$tgltoday = date('d-M-Y');
			$tgltoday2 = date('M');
			$kodedokter = $this->session->userdata("kode_dokter");
			$d['dataTabledokter'] = $this->app_load_data_table->getAllDataBayarDok($kodedokter);
			$d['dataTabledokter2'] = $this->app_load_data_table->getAllDataBayarDok2($kodedokter);
			$d['dataTablePoli'] = $this->app_load_data_table->getAllDataPoli();

			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");
			$d['namadokter']	= $this->session->userdata("nama_dokter");
			$d['kodedokter']	= $this->session->userdata("kode_dokter");

			$d['tgltoday'] = $tgltoday;
			$d['tglubah'] = date('d-M-Y',strtotime($tgl));
			$d['nama'] = "";
			//$d['hari'] = abs(strtotime($d['tgltoday'])-strtotime($d['tglubah']))/(60*60*24);

			$tanggalPilih = $this->input->post('tgl_ubah');
			$unitTambah = $this->input->post('dataTablePoli');

			if($unitTambah == '')
			{
				if($tanggalPilih == '')
				{
					$d['dataTablePoli1'] = 'Tidak Ada';
					$d['tanggl1'] = date('d F Y',strtotime($tgltoday));
				}
				else
				{
					$d['dataTablePoli1'] = 'Tidak Ada';
					$d['tanggl1'] = date('d F Y',strtotime($tgltoday));
				}
			}
			else
			{
				if($tanggalPilih == '')
				{
					$d['dataTablePoli1'] = $this->app_load_data_table->getUit($unitTambah);
					$d['tanggl1'] = date('d F Y',strtotime($tgltoday));
				}
				else
				{
					$d['dataTablePoli1'] = $this->app_load_data_table->getUit($unitTambah);
					$d['tanggl1'] = date('d F Y',strtotime($tanggalPilih));
				}
			}

			if($unit == '')
			{
				//if($tgl == '')
				//{
				$d['dataTable'] = $this->app_load_data_table->getAllDataDok();
				/*}
				else
				{
					//$d['dataTable'] = $this->app_load_data_table->getAllDataSeluruhDokTgl();
					$d['dataTable'] = $this->app_load_data_table->getAllDataDok();
				}*/
			}
			elseif($unit <> '')
			{
				if($tgl == '')
				{
					$d['dataTable'] = $this->app_load_data_table->getAllDataUnitDok($unit);
				}
				else
				{
					$d['dataTable'] = $this->app_load_data_table->getAllDataSeluruhDok($unit,$tgl);
				}
			}

			//$this->load->view('dashboard/bg_header1', $d);
			$this->load->view('dashboard_igd/bg_header', $d);
			$this->load->view('dashboard_igd/bg_navigation', $d);
			$this->load->view('dashboard_igd/content', $d);
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
}
