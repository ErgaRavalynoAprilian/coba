<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Desa extends CI_Controller {
    
    public function __construct(){
            parent::__construct();

            if($this->session->userdata('status') != "login2"){
                redirect(base_url("login"));
            }

            $this->load->database(); //untuk load data base ketika controller dipanggil
            $this->load->model('desa_model');
	}

    public function index(){

    $nama = $this->session->userdata('nama');
    $data['pembangunan'] = $this->desa_model->semua($nama);
    $data['desa'] = $this->desa_model->cdesa($nama);
    $data['kegiatan'] = $this->desa_model->ckegiatan();
    $data['sumberdana'] = $this->desa_model->csumberdana();
    //$data['ceksumber'] = $this->desa_model->ceksumber();
    
    $this->load->helper('nominal');
    $this->load->view('d_atas', $data);
    $this->load->view('crud', $data);
    $this->load->view('d_bawah');
    }

    function get_kegiatan(){
        $id=$this->input->post('kd_kegiatan');
        $data=$this->m_kategori->ckegiatan($kd_kegiatan);
        echo json_encode($data);
    }

    public function simpan(){
        $username = $this->input->post('username');
        $kd_kegiatan = $this->input->post('kd_kegiatan');
        $jml_dana = $this->input->post('jml_dana');
        $kd_sumdana = $this->input->post('kd_sumdana');
        $data = [
            'kd_kegiatan' => $kd_kegiatan,
            'username' => $username,
            'jml_dana' => $jml_dana,
            'kd_sumdana' => $kd_sumdana
        ];
        $this->desa_model->tambah($data);
        redirect('desa');
    }

    public function hapus($kd_pembangunan){
        $this->desa_model->hapus($kd_pembangunan);
        redirect('desa');
    }


    public function edit(){
        $username = $this->input->post('username');
        $kd_kegiatan = $this->input->post('kd_kegiatan');
        $jml_dana = $this->input->post('jml_dana');
        $kd_sumdana = $this->input->post('kd_sumdana');
        $kd_pembangunan = $this->input->post('kd_pembangunan');
        $edit = [
            'kd_pembangunan' => $kd_pembangunan,
            'kd_kegiatan' => $kd_kegiatan,
            'username' => $username,
            'jml_dana' => $jml_dana,
            'kd_sumdana' => $kd_sumdana
        ];
        $this->desa_model->edit($kd_pembangunan, $edit);
        redirect('desa');
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
?>