<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {
    
    public function __construct(){
            parent::__construct();
            
            if($this->session->userdata('status') != "login1"){
                redirect('login');
            }
            
            $this->load->database(); //untuk load data base ketika controller dipanggil
            $this->load->model('admin_model');
	}

    public function index(){
    

    $data['data'] = $this->admin_model->grafik();
    $nama = $this->session->userdata('nama');
    $this->load->helper('nominal');
    $this->load->view('c_atas');
    $this->load->view('grafik', $data);
    $this->load->view('c_bawah');
    }
    
    public function pembangunan(){

        $data['pembangunan'] = $this->admin_model->semua();
    
    $nama = $this->session->userdata('nama');
    $this->load->helper('nominal');
    $this->load->view('c_atas');
    $this->load->view('a_crud', $data);
    $this->load->view('c_bawah');
    }

    public function cdesa(){

        $data['desa'] = $this->admin_model->cdesa();
        
    $this->load->view('c_atas');
    $this->load->view('desa_crud', $data);
    $this->load->view('c_bawah');
    }

    public function ckegiatan(){

        $data['kegiatan'] = $this->admin_model->ckegiatan();
        
    $this->load->view('c_atas');
    $this->load->view('kegiatan_crud', $data);
    $this->load->view('c_bawah');
    }

    public function csumberdana(){

        $data['sumberdana'] = $this->admin_model->csumberdana();
        
    $this->load->view('c_atas');
    $this->load->view('sumberdana_crud', $data);
    $this->load->view('c_bawah');
    }

    public function simpandesa(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namadesa = $this->input->post('namadesa');
        $kepaladesa = $this->input->post('kepaladesa');
        $datacek = ['username' => $username];
        $data = [
            'username' => $username,
            'password' => md5($password),
            'namadesa' => $namadesa,
            'kepaladesa' => $kepaladesa
        ];
        $cekdesa=$this->admin_model->cekdesa('desa',$datacek)->num_rows();
        if($cekdesa > 0){
            echo $this->session->set_flashdata('msgdes','No Induk Desa Sudah Terdaftar Tolong isi dengan No Induk Desa Lain');
            redirect('admin/cdesa');
        }else{
        $this->admin_model->tdesa($data);
        redirect('admin/cdesa');
        }
    }

    public function simpankegiatan(){
        $kd_kegiatan = $this->input->post('kd_kegiatan');
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $datacek = ['kd_kegiatan' => $kd_kegiatan];
        $data = [
            'kd_kegiatan' => $kd_kegiatan,
            'nama_kegiatan' => $nama_kegiatan
        ];
        $cekkegiatan=$this->admin_model->cekkeg('kegiatan',$datacek)->num_rows();
        if($cekkegiatan > 0){
            echo $this->session->set_flashdata('msgkeg','Kode Kegiatan Sudah Terdaftar Tolong isi dengan Kode Kegiatan Lain');
            redirect('admin/ckegiatan');
        }else{
        $this->admin_model->tkegiatan($data);
        redirect('admin/ckegiatan');
        }
    }

    public function simpansumberdana(){
        $kd_sumdana = $this->input->post('kd_sumdana');
        $nama_sumdana = $this->input->post('nama_sumdana');
        $datacek = ['kd_sumdana' => $kd_sumdana];
        $data = [
            'kd_sumdana' => $kd_sumdana,
            'nama_sumdana' => $nama_sumdana,
        ];
        $ceksumdana=$this->admin_model->cekdana('sumberdana',$datacek)->num_rows();
        if($ceksumdana > 0){
            echo $this->session->set_flashdata('msgdana','Kode Sumberdana Sudah Terdaftar Tolong isi dengan Kode Sumberdana Lain');
            redirect('admin/csumberdana');
        }else{
        $this->admin_model->tsumberdana($data);
        redirect('admin/csumberdana');
        }
    }

    public function edit_kegiatan(){
        $kd_kegiatan = $this->input->post('kd_kegiatan');
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $edit = [
            'kd_kegiatan' => $kd_kegiatan,
            'nama_kegiatan' => $nama_kegiatan
        ];
        $this->admin_model->edit_kegiatan($kd_kegiatan, $edit);
        redirect('admin/ckegiatan');
    }

    public function hapus_kegiatan($kd_kegiatan){
        $this->admin_model->hapus_kegiatan($kd_kegiatan);
        redirect('admin/ckegiatan');
    }

    public function edit_sumberdana(){
        $kd_sumdana = $this->input->post('kd_sumdana');
        $nama_sumdana = $this->input->post('nama_sumdana');
        $edit = [
            'kd_sumdana' => $kd_sumdana,
            'nama_sumdana' => $nama_sumdana
        ];
        $this->admin_model->edit_sumberdana($kd_sumdana, $edit);
        redirect('admin/csumberdana');
    }

    public function hapus_sumberdana($kd_sumdana){
        $this->admin_model->hapus_sumberdana($kd_sumdana);
        redirect('admin/csumberdana');
    }

    public function edit_desa(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namadesa = $this->input->post('namadesa');
        $kepaladesa = $this->input->post('kepaladesa');
        $edit = [
            'username' => $username,
            'password' => $password,
            'namadesa' => $namadesa,
            'kepaladesa' => $kepaladesa
        ];
        $this->admin_model->edit_desa($username, $edit);
        redirect('admin/cdesa');
    }

    public function hapus_desa($username){
        $this->admin_model->hapus_desa($username);
        redirect('admin/cdesa');
    }

    function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
?>