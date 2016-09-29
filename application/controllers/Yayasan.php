<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yayasan extends CI_Controller {
	public function __construct(){
		if($this->session->userdata('role')!=4)
		redirect(base_url('dashboard/login'));
		parent::__construct();
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
