<?php

class M_respon extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('t_responden');
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

    function getJawabanById($id)
    {
        return $this->db->get_where('detail_survey', ['id_survey' => $id])->result();
    }


	 function delete($id){
    $this->db->where_in('id', $id);
    $this->db->delete('t_responden');
  }

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function fetch_data2()
    {
        //$query = $this->db->get("tbl_user");
        $query = $this->db->query("SELECT * FROM t_survei ORDER BY id ASC");
        return $query;
    }

    function fetch_data1()
    {
        //$query = $this->db->get("tbl_user");
        $query = $this->db->query("SELECT * FROM t_survei ORDER BY id ASC");
        return $query;
    }

     function kuisioner()
    {
        $query = $this->db->get("t_survei");
        // $query = $this->db->query("SELECT * FROM t_survei ORDER BY id ASC");
        return $query;
    }

    function detail_survey1()
    {
        // $query = $this->db->get("detail_survey");
        $query = $this->db->query("SELECT * FROM detail_survey");
        return $query;
    }

    function jumlah_responden()
	{   
    $query = $this->db->get('t_responden');
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