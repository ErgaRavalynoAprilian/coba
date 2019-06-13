<?php

class Desa_model extends CI_Model{

    function semua($nama){
        
        $this->db->select('*');
        $this->db->from('pembangunan');
        $this->db->where('pembangunan.username',$nama);
        $this->db->join('desa','desa.username=pembangunan.username');
        $this->db->join('kegiatan','kegiatan.kd_kegiatan=pembangunan.kd_kegiatan');
        $this->db->join('sumberdana','sumberdana.kd_sumdana=pembangunan.kd_sumdana');
        $query = $this->db->get();
        return $query->result();
    }

    function cdesa($nama){
        $this->db->select('*');
        $this->db->from('desa');
        $this->db->where('username',$nama);
        $query = $this->db->get();
        return $query->result();

    }

    function ckegiatan(){
        $this->db->select('*');
        $this->db->order_by("kd_kegiatan", "ASC");
        $this->db->from('kegiatan');
        $query = $this->db->get();
        return $query->result();

    }

    function csumberdana(){
        $this->db->select('*');
        $this->db->order_by("kd_sumdana", "ASC");
        $this->db->from('sumberdana');
        $query = $this->db->get();
        return $query->result();

    }

    function tambah($data){
        $this->db->insert('pembangunan',$data); //perintah inser ke tabel
    }

    function hapus($kd_pembangunan){
        $this->db->where('kd_pembangunan',$kd_pembangunan);
        return $this->db->delete('pembangunan');
    }
    
    function edit($kd_pembangunan,$edit){
        $this->db->where('kd_pembangunan',$kd_pembangunan);
        return $this->db->update('pembangunan',$edit);
    }
    
}


?>