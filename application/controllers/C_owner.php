<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_owner extends CI_Controller {

	private $services = null;
    private $name = null;
    private $parent_page = 'owner';
	private $current_page = 'owner/data/';
	
		public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_owner');
    }

	public function index()
	{
		if($this->M_login->logged_id2() == 'owner')
	{
		$this->load->view('owner/inc/head');
		$this->load->view('owner/inc/sidebar');
		$this->load->view('owner/das/das');
		$this->load->view('owner/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}

	public function barang()
	{
		if($this->M_login->logged_id2() == 'owner')
	{
		$data['user'] = $this->M_owner->tampil_data_barang()->result();
		$this->load->view('owner/inc/head');
		$this->load->view('owner/inc/sidebar');
		$this->load->view('owner/data/V_d_barang',$data);
		$this->load->view('owner/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}
	public function user()
	{
		if($this->M_login->logged_id2() == 'owner')
	{
		$data['user'] = $this->M_owner->tampil_data_user();
		$this->load->view('owner/inc/head');
		$this->load->view('owner/inc/sidebar');
		$this->load->view('owner/data/V_user',$data);
		$this->load->view('owner/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}
	public function peramalan()
	{
		if($this->M_login->logged_id2() == 'owner')
	{
		$data['user'] = $this->M_owner->tampil_data_barang()->result();
		$this->load->view('owner/inc/head');
		$this->load->view('owner/inc/sidebar');
		$this->load->view('owner/data/v_ramal',$data);
		$this->load->view('owner/inc/footer');
	}
	else
	{
		redirect("C_login");

	}

		
	}
function simpan_user(){

		if($this->M_login->logged_id2() == 'owner')
	{
		
		//$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$status = $this->input->post('status');


		$data = array(
			
			//'id_user' => $id_user,
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'status' => $status,
			);
		$this->M_owner->input_data_user($data,'user');
		redirect('C_owner/user');
	}
	else
	{
		redirect("C_login");

	}

		
	}

		function hapus_user($id_user){

		if($this->M_login->logged_id2() == 'owner')
	{
	$where = array('id_user' => $id_user);
	$this->M_owner->hapus_data_user($where,'user');
	redirect('C_owner/user');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function edit_user($id_user){
			if($this->M_login->logged_id2() == 'owner')
	{

		
		$where = array('id_user' => $id_user);
		$data['user'] = $this->M_owner->edit_data_user($where,'user')->result();
		$this->load->view('owner/inc/head');
		$this->load->view('owner/inc/sidebar');
		$this->load->view('owner/edit/V_E_user',$data);
		$this->load->view('owner/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}

	function update_user(){

			if($this->M_login->logged_id2() == 'owner')
	{
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$status = $this->input->post('status');

		$data = array(
			//'id_user' => $id_user,
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'status' => $status
			);

	$where = array(
		'id_user' => $id_user
	);

	$this->M_owner->update_data_user($where,$data,'user');
		redirect('C_owner/user');
	}

	else
	{
		redirect("C_login");

	}
}

function simpan_inventory(){

		if($this->M_login->logged_id2() == 'owner')
	{
		//$id_inventory = $this->input->post('id_inventory');
		$id_barang = $this->input->post('id_barang');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$stock = $this->input->post('stock');
		$date = date("Y-m-d");


		$data = array(
			
			//'id_inventory' => $id_inventory,
			'id_barang' => $id_barang,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'stock' => $stock,
			'date' => $date,
			);
		$this->M_owner->input_data_inventory($data,'inventory');
		redirect('C_owner/inventory');
	}
	else
	{
		redirect("C_login");

	}

		
	}
public function inventory()
	{
		if($this->M_login->logged_id2() == 'owner')
	{
		$data['user'] = $this->M_owner->tampil_data_inventory();
		$data['user2'] = $this->M_owner->tampil_data_barang()->result();
		$this->load->view('owner/inc/head');
		$this->load->view('owner/inc/sidebar');
		$this->load->view('owner/data/V_d_Inventory',$data);
		$this->load->view('owner/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}

		function hapus_inventory($id_inventory){

		if($this->M_login->logged_id2() == 'owner')
	{
	$where = array('id_inventory' => $id_inventory);
	$this->M_owner->hapus_data_inventory($where,'inventory');
	redirect('C_owner/inventory');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function edit_inventory($id_inventory){
			if($this->M_login->logged_id2() == 'owner')
	{

		
		$where = array('id_inventory' => $id_inventory);
		$data['user'] = $this->M_owner->edit_data_inventory($where,'inventory')->result();
		$data['user2'] = $this->M_owner->tampil_data_barang()->result();
		$this->load->view('owner/inc/head');
		$this->load->view('owner/inc/sidebar');
		$this->load->view('owner/edit/V_E_inventory',$data);
		$this->load->view('owner/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}

function update_inventory(){

			if($this->M_login->logged_id2() == 'owner')
	{
		$id_inventory = $this->input->post('id_inventory');
		$id_barang = $this->input->post('id_barang');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$stock = $this->input->post('stock');
		$date = date("Y-m-d");

		$data = array(
			//'id_inventory' => $id_inventory,
			'id_barang' => $id_barang,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'stock' => $stock,
			'date' => $date
			);

	$where = array(
		'id_inventory' => $id_inventory
	);

	$this->M_owner->update_data_inventory($where,$data,'inventory');
		redirect('C_owner/inventory');
	}

	else
	{
		redirect("C_login");

	}
}

public function penjualan()
	{
		if($this->M_login->logged_id2() == 'owner')
	{
		$data['user'] = $this->M_owner->tampil_data_sale();
		$data['user2'] = $this->M_owner->tampil_data_barang()->result();
		$this->load->view('owner/inc/head');
		$this->load->view('owner/inc/sidebar');
		$this->load->view('owner/data/V_d_penjualan',$data);
		$this->load->view('owner/inc/footer');
	}
	else
	{
		redirect("C_login");

	}

	}


	public function odd_prediction( $data )
	{
    $_n = count( $data );
		$_mid = ( ( $_n - 1 ) / 2 ) + 1;

		$sum_x 		= 0;
		$sum_y 		= 0;
		$sum_xx 	= 0;
		$sum_xy 	= 0;

		for( $i =0 , $_x = ( $_mid - 1 ) * -1; $_x <= ( $_mid - 1 ), $i < $_n ; $_x++, $i++ )
		{
			$sum_x += $_x;
			$sum_y += $data[$i]->_y;
			$sum_xx += ( $_x*$_x );
			$sum_xy += ( $_x*$data[$i]->_y );

			$data[$i]->_x = $_x;
			$data[$i]->_xx = ( $_x*$_x );
			$data[$i]->_xy = ( $_x*$data[$i]->_y );
		}

		$data []= ( object ) 
			array(
				"id_sale" => 0,
				"id_barang" => 0,
				"bulan" => "Total",
				"tahun" => 0,
				"stock" => 0,
				"nama_barang" => 0,
				"next_x" => $_mid,
				"_x" => $sum_x,
				"_y" => $sum_y,
				"_xx" => $sum_xx,
				"_xy" => $sum_xy,

			);
		return $data;
	}

	public function even_prediction( $data )
	{
    $_n = count( $data );
		$_mid = $_n / 2;

		$sum_x 		= 0;
		$sum_y 		= 0;
		$sum_xx 	= 0;
		$sum_xy 	= 0;

		for( $i =0 , $_x = ( $_mid * 2 - 1 ) * -1; $_x <= ( $_mid * 2 - 1 ) , $i < $_n ; $_x+= 2 , $i++ )
		{
			$sum_x += $_x;
			$sum_y += $data[$i]->_y;
			$sum_xx += ( $_x*$_x );
			$sum_xy += ( $_x*$data[$i]->_y );

			$data[$i]->_x = $_x;
			$data[$i]->_xx = ( $_x*$_x );
			$data[$i]->_xy = ( $_x*$data[$i]->_y );
		}

		$data []= ( object ) 
			array(
				"id_inventory" => 0,
				"id_barang" => 0,
				"bulan" => "Total",
				"tahun" => 0,
				"stock" => 0,
				"nama_barang" => 0,
				"next_x" => $_mid*2 +1,
				"_x" => $sum_x,
				"_y" => $sum_y,
				"_xx" => $sum_xx,
				"_xy" => $sum_xy,

			);
		return $data;
	}

		public function trend_projection(  )
	{	
		$id_barang = $this->input->GET('id_barang');
		$start_month = $this->input->GET('start_month');
		$end_month = $this->input->GET('end_month');
		$end_year = $this->input->GET('end_year');
		$end_month_2 = $this->input->GET('end_month_2');
		$end_year_2 = $this->input->GET('end_year_2');

		$data['user'] = $this->M_owner->get_sales_prediction();
		$prediction = $this->even_prediction($data);
		$result = $prediction[ count( $prediction  ) -1 ];
		$_n = count( $prediction  ) -1  ;
		$x = $result->next_x;
		$a = $result->_y / $_n;
		$b = $result->_xy / $result->_xx ;
		$_y_accent = $a +( $b * $result->next_x ) ;
		
		$this->load->view("owner/data",$data);

		}
}