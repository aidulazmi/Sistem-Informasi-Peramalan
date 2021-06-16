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

}
