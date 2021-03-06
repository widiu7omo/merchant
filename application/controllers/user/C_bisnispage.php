<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bisnispage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user/M_bisnispage');
    }

    public function showDetail($key)
    {
        
        $where = array('id_operator'=>$key);
        $result['title']  = $this->M_bisnispage->getProduct($where)->result();
        echo json_encode($result);
    }

    public function showDetailProduct($key)
    {   
       
        $where = array('id_operator'=>$key);
        $result['detail']  = $this->M_bisnispage->getProductDetail($where)->result();
        foreach ($result['detail'] as $row){
            echo $row->contact;
        }
        
    }

    public function index($key)
    {
        
        $where = array('operator'=>$key);
        $this->load->view('user/header_vue');
        $this->load->view('user/v_bisnispage',$where);
        $this->load->view('user/footer_vue');
    }

}

/* End of file C_bisnispage.php */
