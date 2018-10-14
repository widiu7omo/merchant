<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_signup extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/v_signup');
        $this->load->view('admin/footer');
    }

}


/* End of file C_signup.php */
