<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_owner extends CI_Controller {

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
	
}
