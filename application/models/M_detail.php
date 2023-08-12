<?php

class M_detail extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('detail_survey');
	}
	 function delete($id){
    $this->db->where_in('id', $id);
    $this->db->delete('detail_survey');
  }
}