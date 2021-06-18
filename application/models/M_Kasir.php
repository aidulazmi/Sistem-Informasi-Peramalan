<?php 

class M_kasir extends CI_Model{

//barang
	function tampil_data_barang(){
		return $this->db->get('barang');
	}
	function tampil_data_inventory(){
		$query = $this->db->query("SELECT barang.id_barang, barang.kode_barang, barang.nama_barang, inventory.id_inventory, inventory.id_barang,inventory.bulan, inventory.tahun, inventory.stock, inventory.date from barang JOIN inventory ON inventory.id_barang = barang.id_barang");
        return $query->result();
	}

	function input_data_kasir($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data_kasir($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}