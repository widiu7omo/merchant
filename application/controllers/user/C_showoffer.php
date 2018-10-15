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
        $id_media = $result['title'][0]->id_media;
        $id_med = json_decode($id_media);
        // var_dump($id_med);
        foreach($id_med as $where){
           // $this->showDetailMedia($where);
            $result['media'][] = $this->showDetailMedia($where);
        }
        // var_dump($result['media']);
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
    public function showDetailMedia($key)
    {   
        $where = array('id_media'=>$key);
        $media = $this->M_showoffer->getMediaDetail($where)->result();
        return $media[0];
    }
    
    public function index($key)
    {
        $where = array('produk'=>$key);
        $this->load->view('user/header_vue');
        $this->load->view('user/v_showoffer',$where);
        $this->load->view('user/footer_vue'); 
    }

}

/* End of file C_showoffer.php */
