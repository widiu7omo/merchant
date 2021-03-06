<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_showoffer extends CI_Model {
    
    
    public function getProduct($key){
        $this->db->select(array('produk.id_produk','produk.nama_produk','produk.harga','produk.id_operator','json_unquote(json_extract(operator.contact, "$.number")) AS con',
        'operator.nama_operator','produk.id_media','media.resized','media.gambar'));
        $this->db->join('operator', 'produk.id_operator = operator.id_operator', 'left outer');
        $this->db->join('media', 'produk.id_thumb = media.id_media', 'left outer');
        $this->db->from('produk');
        $this->db->where($key);
        return $this->db->get();
    }
    public function getProductDetail($key){
        return $this->db->get_where('produk',$key);
    }
    public function getMediaDetail($key){
        $this->db->select('gambar');
        return $this->db->get_where('media',$key);
    }

}

/* End of file M_showoffer.php */
