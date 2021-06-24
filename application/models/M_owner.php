<?php 

class M_owner extends CI_Model{

protected $table = "barang";

  function __construct() {
      parent::__construct( $this->table );
      parent::set_join_key( 'id_barang' );
  }

//barang
	function tampil_data_barang(){
		return $this->db->get('barang');
	}

	public function get_sales_prediction( $product_id, $start_date, $end_date )
  {
      $this->select( $this->table.'.*');
      $this->select( 'barang.nama_barang as product_name');
      $this->select( 'CONCAT( '.$this->table.'.tahun, " ", '.$this->table.'.bulan ) as month_year');
      $this->select( 'sale.stock as _y');
      $this->select( '0 as _x');
      $this->select( '0 as _xx');
      $this->select( '0 as _xy');
      $this->join( 
        'barang',
        'id_barang = sale.id_barang',
        'inner'
      );
      $this->where( $this->table.'.id_barang', $product_id);

      $this->where( $this->table.'.date BETWEEN "'.$start_date.'" AND "'.$end_date.'" ', "");
      $this->order_by( "sale.tahun asc , sale.bulan asc", "");
      return $this->fetch_data();
  }

    public function products(  )
  {
      
      $this->order_by($this->table.'.id_barang', 'asc');
      return $this->fetch_data();
  }
}