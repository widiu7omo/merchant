<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_homepage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
    }

    public function index()
    {
        $this->load->view('user/header_vue');
        $this->load->view('user/v_homepage');
        $this->load->view('user/footer_vue');   
    }

}

/* End of file C_homepage.php */
