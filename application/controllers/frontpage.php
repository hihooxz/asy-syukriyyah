<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('madmin');
	}
	public function index(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|callback_validLogin');
		if(!$this->form_validation->run()){
			$this->load->view('admin/login');
		}else{
			if($this->session->userdata('role')==1)
				redirect(base_url('kepegawaian'));
				elseif($this->session->userdata('role')==2)
				redirect(base_url('it'));
				elseif($this->session->userdata('role')==3)
				redirect(base_url('keuangan'));
				elseif($this->session->userdata('role')==4)
				redirect(base_url('yayasan'));
		}
	}
	function validLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = $this->madmin->validLogin($username,$password);
		if($data == false){
			$this->form_validation->set_message('validLogin','Username or Password is not found');
			return false;
		}
		else{
			$session = array(
					'loginAdmin' => TRUE,
					'idAdmin' => $data['id_user'],
					'username'=> $data['username'],
					'role' => $data['role']
				);
			$this->session->set_userdata($session);
			return TRUE;
		}
	}
}
