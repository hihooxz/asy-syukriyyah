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

			$data['data_pegawai'] = $this->mky->totalPegawai();
			$data['total_pegawai'] = $this->mod->countData('pegawai');
			$data['pegawai_laki_laki'] = $this->mod->countWhereData('pegawai','jenis_kelamin',1);
			$data['pegawai_perempuan'] = $this->mod->countWhereData('pegawai','jenis_kelamin',2);

			$this->form_validation->set_rules('search','Search','required');
			if(!$this->form_validation->run()){
		// Ngeload data
			$perpage = 50;
			$this->load->library('pagination'); // load libraray pagination
			$config['base_url'] = base_url($this->uri->segment(1).'/index/'); // configurate link pagination
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
		public function statistik(){
			$data['title_web']= 'Statistik | Asy-syukriyyah';
			$data['path_content'] = 'admin/module/statistik';

			$data['data_pegawai'] = $this->mky->totalPegawai();
			$this->load->view('admin/index',$data);
		}
		function statistik_unit(){
			$data['title_web']= 'Statistik Unit | Asy-syukriyyah';
			$data['path_content'] = 'admin/module/statistik_unit';
			$id = $this->uri->segment(3);
			$data['results'] = $this->mpj->fetchAllPekerjaan($id);
			if($id == "")
				redirect(base_url($this->uri->segment(1).'/statistik'));

			$data['data_pegawai'] = $this->mky->totalPegawai();
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
			
			
			$data['data_pegawai'] = $this->mky->totalPegawai();
			$this->form_validation->set_rules('search','Search','required');

			if(!$this->form_validation->run()){
				$data['results'] = $this->mpj->fetchAllPekerjaan($id);
				$this->load->view('admin/index',$data);
			}
			else{
				$data['results'] = $this->mpj->fetchAllPekerjaanSearch($id,$_POST);
				$this->load->view('admin/index',$data);	
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
	  public function lihat_pegawai(){
	  		$data['title_web'] = 'Lihat Data Pegawai | Adminpanel Asy-syukriyyah';
	  		$data['path_content'] = 'admin/pegawai/lihat_pegawai';
	  		$id = $this->uri->segment(3);
	  		$data['result'] = $this->mod->getDataWhere('pegawai','id_pegawai',$id);
	  		if($data['result'] == false)
	  			redirect(base_url($this->uri->segment(1).'/index'));

	  		$data['keluarga'] = $this->mod->getDataWhere('keluarga','id_pegawai',$id);
	  		$data_keluarga = $this->mkl->fetchDataKeluarga($data['keluarga']['id_keluarga']);
				if($data_keluarga!=FALSE){
					foreach ($data_keluarga as $rows) {
						if($rows->hub_keluarga != 0 && $rows->hub_keluarga != 1){
							$data['sort_order_anak_'.$rows->sort_order] = $rows->sort_order;
							$data['nama_anak_'.$rows->sort_order] = $rows->nama_anggota;
							$data['jenis_kelamin_anak_'.$rows->sort_order] = $rows->jenis_kelamin;
							$data['status_anak_'.$rows->sort_order] = $rows->kandung;
							$data['pekerjaan_anak_'.$rows->sort_order] = $rows->pekerjaan;
							$data['id_data_keluarga_anak_'.$rows->sort_order] = $rows->id_data_keluarga;
						}
						else{
							$data['sort_order_'.$rows->sort_order] = $rows->sort_order;
							$data['nama_pegawai_'.$rows->sort_order] = $rows->nama_anggota;
							$data['jenis_kelamin_'.$rows->sort_order] = $rows->jenis_kelamin;
							$data['kandung_'.$rows->sort_order] = $rows->kandung;
							$data['pekerjaan_'.$rows->sort_order] = $rows->pekerjaan;
							$data['id_data_keluarga_'.$rows->sort_order] = $rows->id_data_keluarga;
						}
						//echo $data['nama_pegawai_'.$rows->sort_order];
					}
				}
			$saudara_kandung = $this->mkl->fetchSaudaraKandung($data['keluarga']['id_keluarga']);
			if($saudara_kandung!=FALSE){
				foreach ($saudara_kandung as $rows) {
					$data['nama_sk_'.$rows->sort_order] = $rows->nama_saudara_kandung;
					$data['jenis_kelamin_sk_'.$rows->sort_order] = $rows->jenis_kelamin;
					$data['ttl_sk_'.$rows->sort_order] = $rows->tanggal_lahir;
					$data['pekerjaan_sk_'.$rows->sort_order] = $rows->pekerjaan;
					$data['sort_order_sk_'.$rows->sort_order] = $rows->sort_order;
					$data['id_saudara_kandung_'.$rows->sort_order] = $rows->id_saudara_kandung;
					$data['alamat_sk_'.$rows->sort_order] = $rows->alamat;
				}
			}

			$data['pendidikan'] = $this->mod->getDataWhere('pendidikan','id_pegawai',$id);
			$formal = $this->mpd->fetchPendidikanFormal($data['pendidikan']['id_pendidikan']);
				if($formal!=FALSE){
					foreach ($formal as $rows) {
						$tingkat= $rows->tingkat;
							$data['tahun_masuk_'.$tingkat] = $rows->tahun_masuk;
							$data['tahun_selesai_'.$tingkat] = $rows->tahun_selesai;
							$data['nama_instansi_'.$tingkat] = $rows->nama_instansi;
							$data['jurusan_'.$tingkat] = $rows->jurusan;
							$data['id_formal_'.$tingkat] = $rows->id_pendidikan_normal;
					}
				}

				$nonformal = $this->mpd->fetchPendidikanNonFormal($id);
				if($nonformal!=FALSE){
					foreach ($nonformal as $rows) {
						$i= $rows->sort_order;
							$data['tahun_'.$i] = $rows->tahun;
							$data['lamanya_'.$i] = $rows->lamanya;
							$data['lembaga_'.$i] = $rows->lembaga;
							$data['jenis_'.$i] = $rows->jenis;
							$data['id_nonformal_'.$i] = $rows->id_nonformal;
					}
				}

				$nonformaltd = $this->mpd->fetchPendidikanNonFormalTD($id);
				if($nonformaltd!=FALSE){
					foreach ($nonformaltd as $rows) {
						$i= $rows->sort_order;
							$data['tahun_td'.$i] = $rows->tahun;
							$data['lamanya_td'.$i] = $rows->lamanya;
							$data['lembaga_td'.$i] = $rows->lembaga;
							$data['jenis_td'.$i] = $rows->jenis;
							$data['id_nonformal_td'.$i] = $rows->id_nonformal;
					}
				}

			$data['pekerjaan'] = $this->mod->getDataWhere('riwayat_kerja','id_pegawai',$id);
			$riwayat_kerja = $this->mpj->fetchPekerjaanPegawai($data['pekerjaan']['id_riwayat_kerja']);
				if($riwayat_kerja!=FALSE){
					foreach ($riwayat_kerja as $rows) {
							$data['sort_order_'.$rows->sort_order] = $rows->sort_order;
							$data['pekerjaan']['tahun_mulai_'.$rows->sort_order] = $rows->tahun_mulai;
							$data['pekerjaan']['tahun_selesai_'.$rows->sort_order] = $rows->tahun_selesai;
							$data['pekerjaan']['unit_'.$rows->sort_order] = $rows->unit;
							$data['pekerjaan']['jabatan_'.$rows->sort_order] = $rows->jabatan;
							$data['pekerjaan']['id_riwayat_jabatan_'.$rows->sort_order] = $rows->id_riwayat_jabatan;
					}
				}

			$riwayat_kerja_diluar = $this->mpj->fetchPekerjaanPegawaiDiluar($data['pekerjaan']['id_riwayat_kerja']);
				if($riwayat_kerja_diluar!=FALSE){
					foreach ($riwayat_kerja_diluar as $rows) {
							$data['sort_order_diluar_'.$rows->sort_order] = $rows->sort_order;
							$data['pekerjaan']['tahun_diluar_'.$rows->sort_order] = $rows->tahun;
							$data['pekerjaan']['nama_instansi_'.$rows->sort_order] = $rows->nama_instansi;
							$data['pekerjaan']['jabatan_diluar_'.$rows->sort_order] = $rows->jabatan;
							$data['pekerjaan']['alasan_keluar_'.$rows->sort_order] = $rows->alasan_keluar;
							$data['pekerjaan']['id_riwayat_jabatan_diluar_'.$rows->sort_order] = $rows->id_riwayat_jabatan_diluar;
					}
				}
	  		$data['pendidikan'] = $this->mod->getDataWhere('pendidikan','id_pegawai',$id);
	  		$data['formal'] = $this->mpd->fetchPendidikanFormal($data['pendidikan']['id_pendidikan']);
	  		$data['nonformal'] = $this->mpd->fetchPendidikanNonFormal($data['pendidikan']['id_pendidikan']);
	  		$data['nonformaltd'] = $this->mpd->fetchPendidikanNonFormalTD($data['pendidikan']['id_pendidikan']);

	  		$data['jabatan'] = $this->mod->getDataWhere('riwayat_kerja','id_pegawai',$id);
	  		$data['riwayat_jabatan'] = $this->mod->getDataWhere('riwayat_jabatan','id_riwayat_kerja',$data['jabatan']['id_riwayat_kerja']);
	  		$data['riwayat_jabatan_diluar'] = $this->mod->getDataWhere('riwayat_jabatan_diluar','id_riwayat_kerja',$data['jabatan']['id_riwayat_kerja']);

	  		$this->load->view('admin/index',$data);
	  }
	  function download_data(){
			 // Generate PDF by saying hello to the world
			$id = $this->uri->segment(3);
	        $a = array('a'=>$this->mky->select_data($id));
					$b=  array('b'=>$this->mky->get_foto($id));
					$c=	 array('c'=>$this->mky->fetchNonFormalDiutus($id));
					$d= array('d' => $this->mky->select_keluarga($id));
					$e= array('e' => $this->mky->getKeluarga($id));
					$f = array('f' => $this->mod->getDataWhere('user','id_user',$this->session->userdata('idAdmin')));
					$g=	 array('g'=>$this->mky->fetchNonFormalTD($id));
					$h = array('pendidikan_formal' => $this->mpd->fetchPendidikanFormalIdPegawai($id));
					$i= array('saudara_kandung' => $this->mkl->fetchSaudaraKandungPegawai($id));
					$j= array('riwayat_jabatan' => $this->mpj->fetchRiwayatJabatan($id));
					$k= array('riwayat_jabatan_diluar' => $this->mpj->fetchRiwayatJabatanDiluar($id));
					$res['data'] = array_merge($a, $b,$c,$d,$e,$f,$g,$h,$i,$j,$k);
	        $this->load->view('admin/pegawai/download',$res);
		}
}
