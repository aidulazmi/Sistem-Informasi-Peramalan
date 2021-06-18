<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_admin');
    }
	public function index()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/das/Dashboard');
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
		
	}
//data

	public function barang()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_barang()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/V_d_barang',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}

public function user()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_user();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/V_d_user',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}
public function inventory()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_inventory();
		$data['user2'] = $this->M_admin->tampil_data_barang()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/V_d_Inventory',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}

	//simpan

	function simpan_barang(){

		if($this->M_login->logged_id2() == 'admin')
	{
		/*`id_barang`, `kode_barang`, `nama_barang`*/
		//$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$kode_barang = $this->input->post('kode_barang');


		$data = array(
			
			//'id_barang' => $id_barang,
			'nama_barang' => $nama_barang,
			'kode_barang' => $kode_barang,
			);
		$this->M_admin->input_data_barang($data,'barang');
		redirect('C_admin/barang');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_user(){

		if($this->M_login->logged_id2() == 'admin')
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
		$this->M_admin->input_data_user($data,'user');
		redirect('C_admin/user');
	}
	else
	{
		redirect("C_login");

	}

		
	}


function simpan_inventory(){

		if($this->M_login->logged_id2() == 'admin')
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
		$this->M_admin->input_data_inventory($data,'inventory');
		redirect('C_admin/inventory');
	}
	else
	{
		redirect("C_login");

	}

		
	}

//hapus
	function hapus_barang($id_barang){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_barang' => $id_barang);
	$this->M_admin->hapus_data_barang($where,'barang');
	redirect('C_admin/barang');
	}
	else
	{
		redirect("C_login");

	}
	
	}

	function hapus_user($id_user){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_user' => $id_user);
	$this->M_admin->hapus_data_user($where,'user');
	redirect('C_admin/user');
	}
	else
	{
		redirect("C_login");

	}
	
	}
	function hapus_inventory($id_inventory){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_inventory' => $id_inventory);
	$this->M_admin->hapus_data_inventory($where,'inventory');
	redirect('C_admin/inventory');
	}
	else
	{
		redirect("C_login");

	}
	
	}


	//edit

	function edit_barang($id_barang){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_barang' => $id_barang);
		$data['user'] = $this->M_admin->edit_data_barang($where,'barang')->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/V_E_barang',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}

function edit_user($id_user){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_user' => $id_user);
		$data['user'] = $this->M_admin->edit_data_user($where,'user')->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/V_E_user',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}

function edit_inventory($id_inventory){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_inventory' => $id_inventory);
		$data['user'] = $this->M_admin->edit_data_inventory($where,'inventory')->result();
		$data['user2'] = $this->M_admin->tampil_data_barang()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/V_E_inventory',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}


	//simpan edit

	function update_barang(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$kode_barang = $this->input->post('kode_barang');

		$data = array(
			//'id_barang' => $id_barang,
			'nama_barang' => $nama_barang,
			'kode_barang' => $kode_barang
			);

	$where = array(
		'id_barang' => $id_barang
	);

	$this->M_admin->update_data_barang($where,$data,'barang');
		redirect('C_admin/barang');
	}

	else
	{
		redirect("C_login");

	}
}

function update_user(){

			if($this->M_login->logged_id2() == 'admin')
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

	$this->M_admin->update_data_user($where,$data,'user');
		redirect('C_admin/user');
	}

	else
	{
		redirect("C_login");

	}
}

function update_inventory(){

			if($this->M_login->logged_id2() == 'admin')
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

	$this->M_admin->update_data_inventory($where,$data,'inventory');
		redirect('C_admin/inventory');
	}

	else
	{
		redirect("C_login");

	}
}

}
