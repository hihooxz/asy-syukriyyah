<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role')!=3)
		redirect(base_url('dashboard/login'));
		$this->load->model('madmin');
			$this->load->model('mkepegawaian','mky');
			$this->load->model('mkeluarga','mkl');
			$this->load->model('mpendidikan','mpd');
			$this->load->model('mpekerjaan','mpj');
			$this->load->model('muser','mu');
				$this->load->library('fpdf');
		}
		public function index(){
			$data['title_web']= 'adminpanel | Asy-syukriyyah';
			$data['path_content'] = 'admin/module/dashboard';

			$data['total_pegawai'] = $this->mod->countData('pegawai');
			$data['pegawai_laki_laki'] = $this->mod->countWhereData('pegawai','jenis_kelamin',1);
			$data['pegawai_perempuan'] = $this->mod->countWhereData('pegawai','jenis_kelamin',2);
			$this->load->view('admin/index',$data);
		}
		public function statistik(){
			$data['title_web']= 'Statistik | Asy-syukriyyah';
			$data['path_content'] = 'admin/module/statistik';

			$data['total_pegawai'] = $this->mod->countData('pegawai');
			$data['pegawai_laki_laki'] = $this->mod->countWhereData('pegawai','jenis_kelamin',1);
			$data['pegawai_perempuan'] = $this->mod->countWhereData('pegawai','jenis_kelamin',2);
			$data['pegawai_tetap'] = $this->mod->countWhereData('riwayat_kerja','status_kepegawaian',1);
			$data['pegawai_honorer'] = $this->mod->countWhereData('riwayat_kerja','status_kepegawaian',2);
			$data['pegawai_kontrak'] = $this->mod->countWhereData('riwayat_kerja','status_kepegawaian',3);
			$data['cpt'] = $this->mod->countWhereData('riwayat_kerja','status_kepegawaian',4);
			$data['dpk_gbs'] = $this->mod->countWhereData('riwayat_kerja','status_kepegawaian',5);
			$data['guru_tetap'] = $this->mpj->countGuruTetap();

			//perunit
			$data['tkit'] = $this->mod->countWhereData('riwayat_kerja','unit_kerja',6); // TK Islam
			$data['yayasan'] = $this->mod->countWhereData('riwayat_kerja','unit_kerja',1)+
			$this->mod->countWhereData('riwayat_kerja','unit_kerja',2) +
			$this->mod->countWhereData('riwayat_kerja','unit_kerja',3) +
			$this->mod->countWhereData('riwayat_kerja','unit_kerja',4) +
			$this->mod->countWhereData('riwayat_kerja','unit_kerja',5); // Yayasan
			$data['sdit'] = $this->mod->countWhereData('riwayat_kerja','unit_kerja',7); // SDIT
			$data['miplus'] = $this->mod->countWhereData('riwayat_kerja','unit_kerja',8); // MI Plus
			$data['mts'] = $this->mod->countWhereData('riwayat_kerja','unit_kerja',9); // MTs
			$data['smpit'] = $this->mod->countWhereData('riwayat_kerja','unit_kerja',10); // SMPIT
			$data['smait'] = $this->mod->countWhereData('riwayat_kerja','unit_kerja',11); // SMAIT

			// pendidikan
			$data['ts'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',0); // Tidak Sekolah
			$data['sd'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',1);
			$data['smp'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',2);
			$data['sma'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',3);
			$data['d1'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',4);
			$data['d2'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',5);
			$data['d3'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',6);
			$data['d4'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',7);
			$data['s1'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',8);
			$data['s2'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',9);
			$data['s3'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',10);
			$data['paket_c'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',11);
			$this->load->view('admin/index',$data);
		}
		function statistik_unit(){
			$data['title_web']= 'Statistik Unit | Asy-syukriyyah';
			$data['path_content'] = 'admin/module/statistik_unit';
			$id = $this->uri->segment(3);
			$data['results'] = $this->mpj->fetchAllPekerjaan($id);
			if($id == "")
				redirect(base_url($this->uri->segment(1).'/statistik'));

			// kepegawaian
			if($id != "yayasan")
			$data['total_pegawai'] = $this->mod->countWhereData('riwayat_kerja','unit_kerja',$id);
			else if($id == "yayasan")
				$data['total_pegawai'] = $this->mod->countWhereData('riwayat_kerja','unit_kerja',1)+$this->mod->countWhereData('riwayat_kerja','unit_kerja',2)+$this->mod->countWhereData('riwayat_kerja','unit_kerja',3)+$this->mod->countWhereData('riwayat_kerja','unit_kerja',4)+$this->mod->countWhereData('riwayat_kerja','unit_kerja',5);

			$data['pegawai_laki_laki'] = $this->mpj->countGenderUnit($id,1);
			$data['pegawai_perempuan'] = $this->mpj->countGenderUnit($id,2);
			$data['pegawai_tetap'] = $this->mpj->countStatusUnit($id,1);
			$data['pegawai_honorer'] = $this->mpj->countStatusUnit($id,2);
			$data['pegawai_kontrak'] = $this->mpj->countStatusUnit($id,3);
			$data['cpt'] = $this->mpj->countStatusUnit($id,4);
			$data['dpk_gbs'] = $this->mpj->countStatusUnit($id,5);

			// pendidikan
			$data['ts'] = $this->mpj->countPendidikanUnit($id,0);
			$data['sd'] = $this->mpj->countPendidikanUnit($id,1);
			$data['smp'] = $this->mpj->countPendidikanUnit($id,2);
			$data['sma'] = $this->mpj->countPendidikanUnit($id,3);
			$data['d1'] = $this->mpj->countPendidikanUnit($id,4);
			$data['d2'] = $this->mpj->countPendidikanUnit($id,5);
			$data['d3'] = $this->mpj->countPendidikanUnit($id,6);
			$data['d4'] = $this->mpj->countPendidikanUnit($id,7);
			$data['s1'] = $this->mpj->countPendidikanUnit($id,8);
			$data['s2'] = $this->mpj->countPendidikanUnit($id,9);
			$data['s3'] = $this->mpj->countPendidikanUnit($id,10);
			$data['paket_c'] = $this->mod->countWhereData('pendidikan','pendidikan_terakhir',11);
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


		function manage_pegawai(){
	    $data['title_web'] = 'Lihat Data Pegawai | Adminpanel Asy-syukriyyah';
	    $data['path_content'] = 'admin/pegawai/manage_pegawai';

			$this->form_validation->set_rules('search','Search','required');

			if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 50;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/manage-pegawai'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('pegawai');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mky->fetchPegawai($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('pegawai'); // Make a variable (array) link so the view can call the variable
	    $this->load->view('admin/index',$data);
			}
			else{
				$data['results'] = $this->mky->fetchPegawaiSearch($_POST); // fetch data using limit and pagination
				$data['links'] = false;
				$this->load->view('admin/index',$data);
			}
	  }
		function view_pegawai(){
			$data['title_web'] = 'Lihat Pegawai | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/pegawai/view_pegawai';
			$data['pegawai'] = $this->mkl->fetchAllPegawai();
			$id=$this->uri->segment(3);
			$data['result']=$this->mod->getDataWhere('pegawai','id_pegawai',$id);
			$this->load->view('admin/index',$data);
		}
			function info_pegawai(){
	    $data['title_web'] = 'Lihat Data Pegawai | Adminpanel Asy-syukriyyah';
	    $data['path_content'] = 'admin/pegawai/info_pegawai';
	    $this->form_validation->set_rules('search','Search','required');

	    if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 50;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/info-pegawai'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('pegawai');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mky->fetchPegawai($config['per_page'],$page,$this->uri->segment(3)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('pegawai'); // Make a variable (array) link so the view can call the variable
	    $this->load->view('admin/index',$data);
			}
			else{
				$data['results'] = $this->mky->fetchPegawaiSearch($_POST); // fetch data using limit and pagination
				$data['links'] = false;
				$this->load->view('admin/index',$data);
			}
	  }
			function process_data_pegawai(){
			$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
					$this->form_validation->set_rules('gelar_depan','Gelar Depan','');
					$this->form_validation->set_rules('gelar_belakang','Gelar Belakang','');
					$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
					$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
					$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
					$this->form_validation->set_rules('agama','agama ','required');
					$this->form_validation->set_rules('alamat_ktp','Alamat Ktp','required');
					$this->form_validation->set_rules('rt_ktp','RT Berdasarkan KTP','numeric');
					$this->form_validation->set_rules('rw_ktp','RW Berdasarkan KTP','numeric');
					$this->form_validation->set_rules('kelurahan_ktp','Kelurahan Berdasarkan KTP','required');
					$this->form_validation->set_rules('kecamatan_ktp','Kecamatan Berdasarkan KTP','required');
					$this->form_validation->set_rules('kota_ktp','Kota Berdasarkan KTP','required');
					$this->form_validation->set_rules('alamat_tinggal','Alamat Berdasarkan Tempat Tinggal','required');
					$this->form_validation->set_rules('rt_tinggal','RT Berdasarkan Tempat Tinggal','numeric');
					$this->form_validation->set_rules('rw_tinggal','RW Berdasarkan Tempat Tinggal','numeric');
					$this->form_validation->set_rules('kelurahan_tinggal','Kelurahan Berdasarkan Tempat Tinggal','required');
					$this->form_validation->set_rules('kecamatan_tinggal','Kecamatan Berdasarkan Tempat Tinggal','required');
					$this->form_validation->set_rules('kota_tinggal','Kota tinggal','required');
					$this->form_validation->set_rules('handphone','Handphone','numeric');
					$this->form_validation->set_rules('no_telepon','Telepon Rumah','numeric');
				if(!$this->form_validation->run()){
					$this->session->set_flashdata(array('error_validation'=>validation_errors()));
				}
				else{
					$save = $this->mky->saveInfoPegawai($_POST,$id);
					$this->session->set_flashdata(array('success'=>TRUE));
					redirect(base_url($this->uri->segment(1).'/manage-pegawai'));
				}
		}
		function manage_keluarga(){
	    $data['title_web'] = 'View All keluarga | Adminpanel Asy-syukriyyah';
	    $data['path_content'] = 'admin/keluarga/manage_keluarga';

		$this->form_validation->set_rules('search','Search','required');
		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 50;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/manage-keluarga'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('keluarga');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mkl->fetchKeluarga($config['per_page'],$page,$this->uri->segment(3)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('keluarga'); // Make a variable (array) link so the view can call the variable
	    $this->load->view('admin/index',$data);
			}
			else{
				$data['results'] = $this->mkl->fetchkeluargaSearch($_POST); // fetch data using limit and pagination
				$data['links'] = false;
				$this->load->view('admin/index',$data);
			}
	  }

		function manage_pendidikan(){
	    $data['title_web'] = 'Lihat Data Pendidka | Adminpanel Asy-syukriyyah';
	    $data['path_content'] = 'admin/pendidikan/manage_pendidikan';

		$this->form_validation->set_rules('search','Search','required');
		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 50;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/manage-pendidikan'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('pendidikan');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mpd->fetchPendidikan($config['per_page'],$page,$this->uri->segment(3)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('pendidikan'); // Make a variable (array) link so the view can call the variable
	    $this->load->view('admin/index',$data);
			}
			else{
				$data['results'] = $this->mpd->fetchPendidikanSearch($_POST); // fetch data using limit and pagination
				$data['links'] = false;
				$this->load->view('admin/index',$data);
			}
	  }

		function manage_pekerjaan(){
	    $data['title_web'] = 'Lihat Data Riwayat Pekerjaan | Adminpanel Asy-syukriyyah';
	    $data['path_content'] = 'admin/pekerjaan/manage_pekerjaan';

		$this->form_validation->set_rules('search','Search','required');
		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 50;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/manage-pekerjaan'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('riwayat_kerja');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mpj->fetchPekerjaan($config['per_page'],$page,$this->uri->segment(3)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('riwayat_kerja'); // Make a variable (array) link so the view can call the variable
	    $this->load->view('admin/index',$data);
			}
			else{
				$data['results'] = $this->mpj->fetchPekerjaanSearch($_POST); // fetch data using limit and pagination
				$data['links'] = false;
				$this->load->view('admin/index',$data);
			}
	  	}
		function manage_organisasi(){
	    $data['title_web'] = 'Lihat Data Riwayat Pekerjaan | Adminpanel Asy-syukriyyah';
	    $data['path_content'] = 'admin/pekerjaan/manage_pekerjaan';

		$this->form_validation->set_rules('search','Search','required');
		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 50;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/manage-pekerjaan'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('riwayat_kerja');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mpj->fetchPekerjaan($config['per_page'],$page,$this->uri->segment(3)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('riwayat_kerja'); // Make a variable (array) link so the view can call the variable
	    $this->load->view('admin/index',$data);
			}
			else{
				$data['results'] = $this->mpj->fetchPekerjaanSearch($_POST); // fetch data using limit and pagination
				$data['links'] = false;
				$this->load->view('admin/index',$data);
			}
	  	}


}
