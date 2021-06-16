<?php 

class M_admin extends CI_Model{

	function tampil_data_barang(){
		return $this->db->get('barang');
	}
	function input_data_barang($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_barang($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_barang($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_barang($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}