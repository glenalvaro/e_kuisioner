<?php

class M_setting extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('t_setting');
	}

	function tampil_pesan(){
		return $this->db->get('t_pesan');
	}

	 function edit_pesan($where,$table){    
  	return $this->db->get_where($table,$where);
  	}

  	function update_pesan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_skin(){
		return $this->db->get('t_skins');
	}

	 function edit_data($where,$table){    
  	return $this->db->get_where($table,$where);
  	}

  	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}