<?php 
class C_auth extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/M_login');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
		if($this->session->userdata('level') == 'free'){
			
		}
		elseif($this->session->userdata('level') == "basic"){
			
		}
	}

	public function index(){
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
		// var_dump($result);
		redirect(site_url("admin/index"));
		
		
	}
}