<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
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

	public function barang()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/V_d_barang');
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}
}
