<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		if($this->session->userdata('status') == "login1"){
			redirect("admin");
		}else{if($this->session->userdata('status') == "login2"){
			redirect("desa");
			}
		}

		$this->load->database();

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login1"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{ //jika login sebagai desa
                    $cek_desa=$this->m_login->cek_desa("desa",$where)->num_rows();
                    if($cek_desa > 0){

						$data_session = array(
							'nama' => $username,
							'status' => "login2"
							);

						$this->session->set_userdata($data_session);

						redirect(base_url("desa"));
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect($url);
                    }
			}
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}