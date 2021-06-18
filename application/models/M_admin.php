<?php 

class M_admin extends CI_Model{

//barang
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

//user
	function tampil_data_user(){
		$query = $this->db->query("SELECT * FROM user WHERE status='kasir' or status= 'owner'");
        return $query->result();
	}
	function input_data_user($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_user($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
//inventory
	function tampil_data_inventory(){
		$query = $this->db->query("SELECT barang.id_barang, barang.kode_barang, barang.nama_barang, inventory.id_inventory, inventory.id_barang,inventory.bulan, inventory.tahun, inventory.stock, inventory.date from barang JOIN inventory ON inventory.id_barang = barang.id_barang");
        return $query->result();
	}
	function input_data_inventory($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_inventory($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_inventory($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_inventory($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}