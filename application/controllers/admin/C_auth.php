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
		elseif($this->session->userdata('level') == "PRO"){
			
		}
	}

	public function index(){
		$result['profil'] = $this->M_login->getDataProfile($this->session->userdata('id_user'));
		// var_dump($result);
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$result);
		$this->load->view('admin/v_dashboard');
		$this->load->view('admin/bottombar');
		$this->load->view('admin/footer');
		
		
	}
}