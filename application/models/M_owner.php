<?php 

class M_owner extends CI_Model{

//barang
	function tampil_data_barang(){
		return $this->db->get('barang');
	}
}