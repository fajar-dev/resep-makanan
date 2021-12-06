<?php
class Model_page extends CI_Model
{
  function tampil($table){
		return $this->db->get($table);
	}
  
	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function komen($id,$table)
	{
		return $this->db->get_where($table,array('id_resep'=>$id));
	}

  function tambah($table,$data){
		$this->db->insert($table,$data);
	}

	function kat($id)
	{
		return $this->db->get_where('tbl_resep',array('kategori'=>$id));
	}
}