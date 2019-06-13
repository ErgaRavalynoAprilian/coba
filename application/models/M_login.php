<?php 

class M_login extends CI_Model{	
	function cek_login($admin,$where){		
		return $this->db->get_where($admin,$where);
	}	

	function cek_desa($desa,$where){		
		return $this->db->get_where($desa,$where);
	}	
	
}