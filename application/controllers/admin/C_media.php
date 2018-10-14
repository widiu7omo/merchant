<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_media extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/v_media');
        $this->load->view('admin/bottombar');
        $this->load->view('admin/footer');
    }

}

/* End of file C_media.php */
