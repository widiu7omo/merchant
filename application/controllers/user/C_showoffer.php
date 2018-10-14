<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_showoffer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user/M_showoffer');
    }
    public function showDetail($key)
    {
        $where = array('id_produk'=>$key);
        $result['title']  = $this->M_showoffer->getProduct($where)->result();
        echo json_encode($result);
    }
    public function showDetailProduct($key)
    {   
        $where = array('id_produk'=>$key);
        $result['detail']  = $this->M_showoffer->getProductDetail($where)->result();
        foreach ($result['detail'] as $row){
            echo $row->deskripsi;
        }
        
    }
    
    public function index($key)
    {
        $where = array('user/produk'=>$key);
        $this->load->view('user/header_vue');
        $this->load->view('user/v_showoffer',$where);
        $this->load->view('user/footer_vue'); 
    }

}

/* End of file C_showoffer.php */
