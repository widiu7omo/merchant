<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class C_dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
        //Do your magic here
        $this->load->model(array('admin/M_dashboard','admin/M_login'));
    }
    

    public function index()
    {
        $result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
        // $this->M_dashboard->getProduct();
        $this->load->view('admin/header');
        $this->load->view('admin/navbar',$result);
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/bottombar');
        $this->load->view('admin/footer');
    }

}

/* End of file C_dashboard.php */