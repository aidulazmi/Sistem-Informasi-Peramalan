<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kasir extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_kasir');
    }
	public function index()
	{
		if($this->M_login->logged_id2() == 'kasir')
	{
		$data['user2'] = $this->M_kasir->tampil_data_barang()->result();
		$data['user1'] = $this->M_kasir->tampil_data_inventory();
		$this->load->view('kasir/kasir',$data);
	}
	else
	{
		redirect("C_login");

	}
		
	}

	function simpan_sale(){
		$this->simpan_kasir();
		$this->update_kasir();
	}

	function simpan_kasir(){

		if($this->M_login->logged_id2() == 'kasir')
	{
		/*`id_sale`, 
		`id_barang`, 
		`bulan`, 
		`tahun`, 
		`stock`, 
		`date`*/
		//$id_sale = $this->input->post('id_sale');
		$id_barang = $this->input->post('id_barang');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$stock = $this->input->post('stock');
		$date = date("Y-m-d");


		$data = array(
			
			//'id_sale' => $id_sale,
			'id_barang' => $id_barang,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'stock' => $stock,
			'date' => $date,
			);
		$this->M_kasir->input_data_kasir($data,'sale');
		redirect('C_kasir');
	}
	else
	{
		redirect("C_login");

	}

		
	}

	function update_kasir(){

			if($this->M_login->logged_id2() == 'kasir')
	{
		$id_barang = $this->input->post('id_barang');
		$stock = $this->input->post('stock');
		$date = date("Y-m-d");

		$data = array(
			//'id_inventory' => $id_inventory,
			'id_barang' => $id_barang,
			'stock' => $stock,
			'date' => $date
			);

	$where = array(
		'barang' => $id_barang
	);

	$this->M_kasir->update_data_kasir($where,$data,'inventory');
		redirect('C_kasir');
	}

	else
	{
		redirect("C_login");

	}
}
}
