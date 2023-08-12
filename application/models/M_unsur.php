<?php

class M_unsur extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('t_unsur');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function detail($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

  function delete($id){
    $this->db->where_in('id', $id);
    $this->db->delete('t_unsur');
  }

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function jumlahUnsur()
	{   
    $query = $this->db->get('t_unsur');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
  }

}
