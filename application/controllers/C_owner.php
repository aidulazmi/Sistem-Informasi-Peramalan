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

		public function trend_projection(  )
	{

			$product_id = $this->input->get( 'id_barang' );
			$start_month = $this->input->get( 'start_month' );
			$end_month = $this->input->get( 'end_month' );
			$start_year = $this->input->get( 'start_year' );
			$end_year = $this->input->get( 'end_year' );

			$end_month_2 = $this->input->get( 'end_month_2' );
			$end_year_2 = $this->input->get( 'end_year_2' );

			$product = $this->M_owner->product( $product_id )->row();


			$timestamp_1 = strtotime( $end_year."-".$end_month."-20" );
			$timestamp_2 = strtotime( $end_year_2."-".$end_month_2."-20" );

			$start_date = $start_year."-".$start_month."-1";
			$end_date 	= $end_year."-".$end_month."-20";

			if( $timestamp_1 >= $timestamp_2 )
			{
				$this->session->set_flashdata('alert', $this->alert->set_alert( Alert::DANGER, "Data Kosong / Inputan Tidak Valid !" ) );
				redirect('C_owner/peramalan')  );
			}

	}


}
