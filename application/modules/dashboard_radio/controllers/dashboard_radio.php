<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard_radio extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$d['active_dashboard_radio'] = "active";
			$d['active_master'] = "";
				$d['active_groupradio'] = "";
				$d['active_dtradio'] = "";
			$d['active_transaksi'] = "";
				$d['active_ubahtatusradio'] = "";

			$d['username']	= $this->session->userdata("username");
			$d['level']	= $this->session->userdata("level");

			$this->load->view('dashboard_radio/bg_header', $d);
			$this->load->view('dashboard_radio/bg_navigation', $d);
			$this->load->view('dashboard_radio/bg_home', $d);
			$this->load->view('dashboard_radio/bg_footer', $d);
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
					$second_db = $this->load->database('second', TRUE);

					$pass_lama = $this->input->post('passwordlama');
					$pass_baru = $this->input->post('passwordbaru');
					$ulangi_pass_baru = $this->input->post('passwordbaru2');

					$user = $this->session->userdata("id_pengguna");

					$login['UserID'] = $user;
					$login['Password'] = sha1($pass_lama);
					$cek = $second_db->get_where('User', $login);
					if($pass_baru == $ulangi_pass_baru)
					{
						if($cek->num_rows()>0)
						{
							$data = array(
								'Password' => sha1($pass_baru),
							);

							$second_db->where('UserID', $user);
							$second_db->update('User', $data);
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
			$this->load->view('login/login');
		}
  }
}
