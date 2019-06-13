<?php

class Admin_model extends CI_Model{

    function semua(){
        
        $this->db->select('*');
        $this->db->order_by("desa.namadesa", "ASC");
        $this->db->from('pembangunan');
        $this->db->join('desa','desa.username=pembangunan.username');
        $this->db->join('kegiatan','kegiatan.kd_kegiatan=pembangunan.kd_kegiatan');
        $this->db->join('sumberdana','sumberdana.kd_sumdana=pembangunan.kd_sumdana');
        $query = $this->db->get();
        return $query->result();
    }

    function grafik(){

        $query = $this->db->query("SELECT namadesa,SUM(jml_dana) AS jml_dana FROM pembangunan JOIN desa ON pembangunan.username=desa.username GROUP BY namadesa"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function cdesa(){
        $this->db->select('*');
        $this->db->order_by("username", "DESC");
        $this->db->from('desa');
        $query = $this->db->get();
        return $query->result();

    }

    function ckegiatan(){
        $this->db->select('*');
        $this->db->order_by("kd_kegiatan", "DESC");
        $this->db->from('kegiatan');
        $query = $this->db->get();
        return $query->result();

    }

    function csumberdana(){
        $this->db->select('*');
        $this->db->order_by("kd_sumdana", "DESC");
        $this->db->from('sumberdana');
        $query = $this->db->get();
        return $query->result();

    }

    function cekkeg($kegiatan,$datacek){		
		return $this->db->get_where($kegiatan,$datacek);
	}

    function cekdesa($desa,$datacek){		
		return $this->db->get_where($desa,$datacek);
    }
    
    function cekdana($sumberdana,$datacek){		
		return $this->db->get_where($sumberdana,$datacek);
	}

    function tdesa($data){
        $this->db->insert('desa',$data); //perintah inser ke tabel
    }

    function tkegiatan($data){
        $this->db->insert('kegiatan',$data); //perintah inser ke tabel
    }

    function tsumberdana($data){
        $this->db->insert('sumberdana',$data); //perintah inser ke tabel
    }

    function edit_kegiatan($kd_kegiatan,$edit){
        $this->db->where('kd_kegiatan',$kd_kegiatan);
        return $this->db->update('kegiatan', $edit);
    }

    function hapus_kegiatan($kd_kegiatan){
        $this->db->where('kd_kegiatan',$kd_kegiatan);
        return $this->db->delete('kegiatan');
    }

    function edit_sumberdana($kd_sumdana,$edit){
        $this->db->where('kd_sumdana',$kd_sumdana);
        return $this->db->update('sumberdana', $edit);
    }

    function hapus_sumberdana($kd_sumdana){
        $this->db->where('kd_sumdana',$kd_sumdana);
        return $this->db->delete('sumberdana');
    }

    function edit_desa($username,$edit){
        $this->db->where('username',$username);
        return $this->db->update('desa', $edit);
    }

    function hapus_desa($username){
        $this->db->where('username',$username);
        return $this->db->delete('desa');
    }

}


?>