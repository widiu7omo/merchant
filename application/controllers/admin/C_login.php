<?php 

class C_login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('admin/M_login');
	}

	function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/v_login');
        $this->load->view('admin/footer');        
	}

	function getauth(){
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		// var_dump(array($email,$password));
		$where = array(
			'user.email' => $email,
            'user.pass' => $password);
		$auth = $this->M_login->auth_email($where);
		// var_dump($auth);
        $cek = $auth->num_rows();
        $data = $auth->result();
        // var_dump($data);
		if($cek > 0 && $cek == 1){
			$data_session = array(
                'id_user' => $data[0]->id_user,
                'status' => 'login');
            $this->session->set_userdata($data_session);
            // var_dump($this->session);
			redirect(site_url("auth"));

		}else{
			echo "<script> alert('Username dan password salah !')</script>";
			redirect(site_url('login'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}