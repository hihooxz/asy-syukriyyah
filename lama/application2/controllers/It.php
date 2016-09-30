<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class It extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role')!=2)
		redirect(base_url('dashboard/login'));
		$this->load->model('madmin');
	}
	public function index(){
		$data['title_web']= 'adminpanel | Asy-syukriyyah';
		$data['path_content'] = 'admin/module/dashboard';
		$this->load->view('admin/index',$data);
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
