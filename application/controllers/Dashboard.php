<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('madmin');
	}
	function index(){
		if($this->session->userdata('loginAdmin')!=TRUE){
			redirect(base_url('dashboard/login'));
		}
		$data['title_web']= 'adminpanel | Asy-syukriyyah';
		$data['path_content'] = 'admin/module/dashboard';
		$this->load->view('admin/index',$data);
	}
		public function login(){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required|callback_validLogin');
			if(!$this->form_validation->run()){
				$this->load->view('admin/login');
			}else{
				/*redirect(base_url('dashboard'));*/
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
		function logout(){
			$session = array(
						'loginAdmin' => FALSE,
						'idAdmin' => NULL
					);
				$this->session->set_userdata($session);
			redirect(base_url($this->uri->segment(1).'/login'));
		}
	function visi_misi(){
		$this->load->view('admin/visi_misi');		
	}
}
