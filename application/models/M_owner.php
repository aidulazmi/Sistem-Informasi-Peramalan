<?php 

class M_owner extends CI_Model{
protected $table = "sale";

  function __construct() {
      parent::__construct( $this->table );
      // parent::set_join_key( 'id_sale' );
  }

	function tampil_data_barang(){
		return $this->db->get('barang');
	}

    public function products(  )
  {
      
      $this->order_by($this->table.'.id_barang', 'asc');
      return $this->fetch_data();
  }


  //user
  function tampil_data_user(){
    $query = $this->db->query("SELECT * FROM user WHERE status='kasir' or status= 'admin'");
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


  //barang
  function tampil_data_sale(){
    $query = $this->db->query("SELECT barang.id_barang, barang.kode_barang, barang.nama_barang, sale.id_sale, sale.id_barang,sale.bulan, sale.tahun, sale.stock, sale.date from barang JOIN sale ON sale.id_barang = barang.id_barang");
        return $query->result();
  }
  function input_data_sale($data,$table){
    $this->db->insert($table,$data);
  }
  function hapus_data_sale($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
  function edit_data_sale($where,$table){   
    return $this->db->get_where($table,$where);
  }

  function update_data_sale($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  public function get_sales_prediction( $id_barang, $start_date, $end_date )
  {
      $this->select( $this->table.'.*');
      $this->select( 'barang.nama_barang as product_name');
      $this->select( 'CONCAT( '.$this->table.'.bulan, " ", '.$this->table.'.tahun ) as month_year');
      $this->select( 'sale.stock as _y');
      $this->select( '0 as _x');
      $this->select( '0 as _xx');
      $this->select( '0 as _xy');
      $this->join( 
        'barang',
        'barang.id_barang = sale.id_barang',
        'inner'
      );
      $this->where( $this->table.'.id_barang', $id_barang);

      $this->where( $this->table.'.date BETWEEN "'.$start_date.'" AND "'.$end_date.'" ', "");
      $this->order_by( "sale.tahun asc , sale.bulan asc", "");
      return $this->fetch_data();
  }
}