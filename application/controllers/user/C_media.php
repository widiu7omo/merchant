<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_media extends CI_Controller {

    public function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/navbar');
        $this->load->view('user/v_media');
        $this->load->view('user/bottombar');
        $this->load->view('user/footer');
    }

}

/* End of file C_media.php */
