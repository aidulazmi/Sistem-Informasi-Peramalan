<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

	public function index()
	{
		 if($this->M_login->is_logged_in())
            {
                 //redirect berdasarkan level user
                        if($this->session->userdata("status") == "admin"){
                            redirect('C_admin');
                        }elseif($this->session->userdata("status") == "kasir"){
                            redirect('C_kasir');
                        }elseif($this->session->userdata("status") == "owner"){
                            redirect('C_owner');
                        }else{
                           $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Email atau password salah!</div></div>';
                             $this->load->view('login/V_login', $data);
                        }

            }else{

                //apabila session belum ada/terdaftarkan

                //form validation
                $this->form_validation->set_rules('email', 'email', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');


                //pesan form
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //
                $email = $this->input->post("email", TRUE);
                $password = $this->input->post('password', TRUE);

                //cek data via model
                $query = $this->M_login->test_login('user', array('email' => $email), array('password' => $password));

                //jika ditemukan, maka create session
                if ($query != FALSE) {
                    foreach ($query as $k) {
                           
                        $data = array(
                            'id_user'   => $k->id_user,
                            'username' => $k->username,
                            'password' => $k->password,
                            'email' => $k->email,
                            'status'      => $k->status
                        );
                        //set session userdata
                        $this->session->set_userdata($data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("status") == "admin"){
                            redirect('C_admin');
                        }elseif($this->session->userdata("status") == "kasir"){
                            redirect('C_kasir');
                        }elseif($this->session->userdata("status") == "owner"){
                            redirect('C_owner');
                        }else{
                           $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> email atau password salah!</div></div>';
                             $this->load->view('login/V_login', $data);
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> email atau password salah!</div></div>';
                    $this->load->view('login/V_login', $data);
                }

            }else{

                $this->load->view('login/V_login');
            }

        }
	}

	  public function logout()
    {
        $this->session->sess_destroy();
        redirect('C_login');
    }
}
