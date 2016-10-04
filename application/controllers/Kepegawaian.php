<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian extends CI_Controller {
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role')!=1)
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

	function add_info_pegawai(){
		$data['title_web'] = 'Tambah Pegawai | Adminpanel Asy-syukriyyah';
		$data['path_content'] = 'admin/pegawai/add_info_pegawai';
		$data['pegawai'] = $this->mkl->fetchAllPegawai();
		$this->form_validation->set_rules('nik','NIK','');
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
		$this->form_validation->set_rules('gelar_depan','Gelar Depan','');
		$this->form_validation->set_rules('gelar_belakang','Gelar Belakang','');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('agama','agama ','required');
		$this->form_validation->set_rules('alamat_ktp','Alamat Berdasarkan KTP','required');
		$this->form_validation->set_rules('rt_ktp','RT Berdasarkan KTP','numeric');
		$this->form_validation->set_rules('rw_ktp','RW Berdasarkan KTP','numeric');
		$this->form_validation->set_rules('kelurahan_ktp','Kelurahan Berdasarkan KTP','');
		$this->form_validation->set_rules('kecamatan_ktp','Kecamatan Berdasarkan KTP','');
		$this->form_validation->set_rules('kota_ktp','Kota Berdasarkan KTP','required');
		$this->form_validation->set_rules('alamat_tinggal','Alamat tinggal','required');
		$this->form_validation->set_rules('rt_tinggal','RT Berdasarkan Tempat Tinggal','numeric');
		$this->form_validation->set_rules('rw_tinggal','RW Berdasarkan Tempat Tinggal','numeric');
		$this->form_validation->set_rules('kelurahan_tinggal','Kelurahan Berdasarkan Tempat Tinggal','');
		$this->form_validation->set_rules('kecamatan_tinggal','Kecamatan Berdasarkan Tempat Tinggal','');
		$this->form_validation->set_rules('kota_tinggal','Kota tinggal','required');
		$this->form_validation->set_rules('handphone','Handphone','numeric');
		$this->form_validation->set_rules('no_telepon','Telepon Rumah','numeric');
		if(!$this->form_validation->run()){
			$this->load->view('admin/index',$data);
		}
		else{
			$config['upload_path'] = './asset/images/photos';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2000';
			$config['file_name'] = $this->input->post('nik')."_".date('Ymd_His');

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload()){
				$save = $this->mky->saveInfoPegawai($_POST,FALSE);
				redirect(base_url($this->uri->segment(1).'/info-pegawai'));
			}
			else{
				$save = $this->mky->saveInfoPegawai($_POST,$this->upload->data());
				redirect(base_url($this->uri->segment(1).'/info-pegawai'));
			}
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
	function add_pegawai(){
			$data['title_web'] = 'Tambah Pegawai | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/pegawai/add_pegawai';
			$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
			$this->form_validation->set_rules('gelar_depan','Gelar Depan','');
			$this->form_validation->set_rules('gelar_belakang','Gelar Belakang','');
			$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
			$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
			$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
			$this->form_validation->set_rules('agama','agama ','required');
			$this->form_validation->set_rules('alamat_ktp','Alamat Ktp','required');
			$this->form_validation->set_rules('rt_ktp','Rt Ktp','numeric');
			$this->form_validation->set_rules('rw_ktp','Rw Ktp','numeric');
			$this->form_validation->set_rules('kelurahan_ktp','Kelurahan Ktp','');
			$this->form_validation->set_rules('kecamatan_ktp','Kecamatan Ktp','');
			$this->form_validation->set_rules('kota_ktp','Kota Ktp','required');
			$this->form_validation->set_rules('alamat_tinggal','Alamat tinggal','required');
			$this->form_validation->set_rules('rt_tinggal','Rt tinggal','numeric');
			$this->form_validation->set_rules('rw_tinggal','Rw tinggal','numeric');
			$this->form_validation->set_rules('kelurahan_tinggal','Kelurahan tinggalr','');
			$this->form_validation->set_rules('kecamatan_tinggal','Kecamatan tinggal','');
			$this->form_validation->set_rules('kota_tinggal','Kota tinggal','required');
			$this->form_validation->set_rules('handphone','Handphone','numeric');
			$this->form_validation->set_rules('no_telepon','Telepon Rumah','	numeric');
			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$save = $this->mky->savePegawai($_POST);
				redirect(base_url($this->uri->segment(1).'/manage-pegawai'));
			}
		}
		function edit_pegawai(){
			$data['title_web'] = 'Ubah Pegawai | Adminpanel Vorcee';
			$data['path_content'] = 'admin/pegawai/edit_pegawai';
			$id=$this->uri->segment(3);
			$data['result']=$this->mod->getDataWhere('pegawai','id_pegawai',$id);
			if($data['result']==FALSE)
				redirect(base_url('pegawai/manage-pegawai'));

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
				$this->load->view('admin/index',$data);
			}
			else{
				$save = $this->mky->editInfoPegawai($_POST,$id);
				redirect(base_url($this->uri->segment(1).'/manage-pegawai'));
			}
		}
		function delete_pegawai(){
			$id = $this->uri->segment(3);
			$this->db->where('id_pegawai',$id);
			$this->db->delete('pegawai');
			redirect(base_url($this->uri->segment(1).'/manage-pegawai'));
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
	function edit_info_pegawai(){
			$data['title_web'] = 'Ubah Pegawai | Adminpanel Vorcee';
			$data['path_content'] = 'admin/pegawai/edit_info_pegawai';
			$id=$this->uri->segment(3);
			$data['result']=$this->mod->getDataWhere('pegawai','id_pegawai',$id);
			if($data['result']==FALSE)
				redirect(base_url('pegawai/manage-pegawai'));

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
				$this->form_validation->set_rules('kelurahan_ktp','Kelurahan Berdasarkan KTP','');
				$this->form_validation->set_rules('kecamatan_ktp','Kecamatan Berdasarkan KTP','');
				$this->form_validation->set_rules('kota_ktp','Kota Berdasarkan KTP','required');
				$this->form_validation->set_rules('alamat_tinggal','Alamat Berdasarkan Tempat Tinggal','required');
				$this->form_validation->set_rules('rt_tinggal','RT Berdasarkan Tempat Tinggal','numeric');
				$this->form_validation->set_rules('rw_tinggal','RW Berdasarkan Tempat Tinggal','numeric');
				$this->form_validation->set_rules('kelurahan_tinggal','Kelurahan Berdasarkan Tempat Tinggal','');
				$this->form_validation->set_rules('kecamatan_tinggal','Kecamatan Berdasarkan Tempat Tinggal','');
				$this->form_validation->set_rules('kota_tinggal','Kota tinggal','required');
				$this->form_validation->set_rules('handphone','Handphone','numeric');
				$this->form_validation->set_rules('no_telepon','Telepon Rumah','numeric');
			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$config['upload_path'] = './asset/images/photos';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2000';
				$config['file_name'] = $this->input->post('nik')."_".date('Ymd_His');

				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload()){
					$save = $this->mky->editInfoPegawai($_POST,$id,FALSE);
					redirect(base_url($this->uri->segment(1).'/info-pegawai'));
				}
				else{
					$save = $this->mky->editInfoPegawai($_POST,$id,$this->upload->data());
					redirect(base_url($this->uri->segment(1).'/info-pegawai'));
				}
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
	function add_keluarga(){
			$data['title_web'] = 'Tambah keluarga | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/keluarga/add_keluarga';
			$data['pegawai'] = $this->mkl->fetchKeluargaNotInput();
			$this->form_validation->set_rules('pegawai','Nama Pegawai','required');
			$this->form_validation->set_rules('status_pernikahan','Status Pernikahan','required');
			$this->form_validation->set_rules('nama_pasangan','Nama Pasangan','');
			$this->form_validation->set_rules('pekerjaan_pasangan','Pekerjaan Pasangan','');
			$this->form_validation->set_rules('anak_kandung','Anak Kandung','');
			$this->form_validation->set_rules('bukan_anak_kandung','Bukan Anak Kandung','');
			$this->form_validation->set_rules('nama_ayah','Nama Ayah','');
			$this->form_validation->set_rules('nama_ibu','Nama Ibu','');
			$this->form_validation->set_rules('jumlah_saudara_kandung','Jumlah Saudara Kandung','');
			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$id_pegawai = $this->mkl->saveKeluarga($_POST);
				$keluarga = $this->mod->getDataWhere('keluarga','id_pegawai',$id_pegawai);
				redirect(base_url($this->uri->segment(1).'/manage-keluarga/'));
			}
		}
		function edit_keluarga(){
			$data['title_web'] = 'Edit Data keluarga | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/keluarga/edit_keluarga';
			$data['pegawai'] = $this->mkl->fetchKeluargaNotInput();
			$id=$this->uri->segment(3);
			$data['result']=$this->mkl->getKeluarga($id);
			if($data['result']==FALSE)
				redirect(base_url('keluarga/manage-keluarga'));
				$this->form_validation->set_rules('pegawai','Nama Pegawai','');
				$this->form_validation->set_rules('nama_pasangan','Nama Pasangan','required');
				$this->form_validation->set_rules('pekerjaan_pasangan','Pekerjaan Pasangan','required');
				$this->form_validation->set_rules('anak_kandung','Anak Kandung','required|numeric');
				$this->form_validation->set_rules('bukan_anak_kandung','Bukan Anak Kandung','required|numeric');
				$this->form_validation->set_rules('nama_ayah','Nama Ayah','required');
				$this->form_validation->set_rules('nama_ibu','Nama Ibu','required');
				$this->form_validation->set_rules('jumlah_saudara_kandung','Jumlah Saudara Kandung','required|numeric');
			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$save = $this->mkl->editKeluarga($_POST,$id);
				redirect(base_url($this->uri->segment(1).'/manage-keluarga'));
			}
		}
		function edit_detail_keluarga(){
			$data['title_web'] = 'Edit Detail keluarga | Adminpanel Asy-syukriyyah';
			$data['pegawai'] = $this->mkl->fetchKeluargaNotInput();
			$id=$this->uri->segment(3);
			$data['result']=$this->mkl->getKeluarga($id);
			$result = $data['result'];
			if($data['result']==FALSE)
				redirect(base_url('keluarga/manage-keluarga'));
			// check if there is
			$count = $this->mod->countWhereData('data_keluarga','id_pegawai',$result['id_pegawai']);
			if($count >= 1){
				$data['path_content'] = 'admin/keluarga/edit_keluarga2';
			}
			else if($count == 0){
				$data['path_content'] = 'admin/keluarga/add_detail_keluarga';
			}
			$this->form_validation->set_rules('id_pegawai','ID Pegawai','required');
			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				if($count == 0){
					$save = $this->mkl->addDetailKeluarga($_POST,$id);
				}
				else if($count >= 1){
					$save = $this->mkl->editDetailKeluarga($_POST,$id);
				}
			}
		}
		function delete_keluarga(){
			$id = $this->uri->segment(3);
			$this->db->where('id_keluarga',$id);
			$this->db->delete('keluarga');
			redirect(base_url($this->uri->segment(1).'/manage-keluarga'));
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
  function add_pendidikan(){
			$data['title_web'] = 'Tambah Pendidikan | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/pendidikan/add_pendidikan';
			$data['pegawai'] = $this->mpd->fetchPendidikanNotInput();
			$this->form_validation->set_rules('pegawai','Nama Pegawai','required');
			$this->form_validation->set_rules('pendidikan_terakhir','Pendidikan Terakhir','required');
			$this->form_validation->set_rules('nama_pt','Nama Institusi Pendidikan Terakhir','required');
			$this->form_validation->set_rules('pendidikan_ditempuh','Pendidikan Ditempuh','');
			$this->form_validation->set_rules('nama_pt_pd','Nama Institusi Pendidikan Ditempuh','');
			$this->form_validation->set_rules('program_pd','Program Pendidikan Ditempuh','');
			$this->form_validation->set_rules('jurusan_pd','Jurusan Pendidikan Ditempuh','');
			$this->form_validation->set_rules('tahun_masuk_pd','Tahun Masuk Pendidikan Ditempuh','');
			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$data['save'] = $this->mpd->savePendidikan($_POST);
				redirect(base_url($this->uri->segment(1).'/manage-pendidikan/'));
			}
		}
	function edit_pendidikan(){
			$data['title_web'] = 'UBah Data Pendidikan | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/pendidikan/edit_pendidikan';

			$id = $this->uri->segment(3);
			$data['result'] = $this->mpd->getPendidikan($id);
			if($data['result'] == false)
				redirect(base_url($this->uri->segment(1).'/manage-pendidikan'));

			$this->form_validation->set_rules('pegawai','Nama Pegawai','required');
			$this->form_validation->set_rules('pendidikan_terakhir','Pendidikan Terakhir','required');
			$this->form_validation->set_rules('nama_pt','Nama Institusi Pendidikan Terakhir','required');
			$this->form_validation->set_rules('pendidikan_ditempuh','Pendidikan Ditempuh','');
			$this->form_validation->set_rules('nama_pt_pd','Nama Institusi Pendidikan Ditempuh','');
			$this->form_validation->set_rules('program_pd','Program Pendidikan Ditempuh','');
			$this->form_validation->set_rules('jurusan_pd','Jurusan Pendidikan Ditempuh','');
			$this->form_validation->set_rules('tahun_masuk_pd','Tahun Masuk Pendidikan Ditempuh','');
			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$data['save'] = $this->mpd->editPendidikan($_POST,$id);
				redirect(base_url($this->uri->segment(1).'/manage-pendidikan/'));
			}
		}

		function edit_detail_pendidikan(){
				$data['title_web'] = 'UBah Data Pendidikan | Adminpanel Asy-syukriyyah';
				$data['path_content'] = 'admin/pendidikan/edit_detail_pendidikan';
				$id = $this->uri->segment(3);
				$data['result'] = $this->mpd->getPendidikan($id);

				if($data['result'] == false)
					redirect(base_url($this->uri->segment(1).'/manage-pendidikan'));

				$this->form_validation->set_rules('tingkat','Tingkat');
				$this->form_validation->set_rules('tahun_masuk','Tahun Masuk');
				$this->form_validation->set_rules('tahun_selesai','Tahun Selesai');
				$this->form_validation->set_rules('nama_instansi','Nama Instansi');
				$this->form_validation->set_rules('jurusan','Jurusan');
				if(!$this->form_validation->run()){
					$this->load->view('admin/index',$data);
				}
				else{
					$data['save'] = $this->mpd->editDetailPendidikan($_POST,$id);
					redirect(base_url($this->uri->segment(1).'/manage-pendidikan/'));
				}
			}
	function delete_pendidikan(){
		$id = $this->uri->segment(3);
		$this->db->where('id_pendidikan',$id);
		$this->db->delete('pendidikan');
		redirect(base_url($this->uri->segment(1).'/manage-pendidikan'));
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
  	function add_pekerjaan(){
 			$data['title_web'] = 'Tambah Data Pekerjaan Pegawai | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/pekerjaan/add_pekerjaan';
			$data['pegawai'] = $this->mpj->fetchPekerjaanNotInput();
			$this->form_validation->set_rules('pegawai','Nama Pegawai','required');
			$this->form_validation->set_rules('jabatan','Jabatan','required');
			$this->form_validation->set_rules('unit_kerja','Unit Kerja','required');
			$this->form_validation->set_rules('status_aktif','Status','required');
			$this->form_validation->set_rules('unit_kerja_sebelumnya','Unit Kerja Sebelumnya','');
			$this->form_validation->set_rules('mulai_tugas','Mulai Tugas','');
			$this->form_validation->set_rules('status_kepegawaian','Status Kepegawaian','required');
			$this->form_validation->set_rules('calon_tetap','Pengangkatan Sebagai Calon Pegawai Tetap','');
			$this->form_validation->set_rules('tetap','Pengangkatan Sebagai Pegawai Tetap','');
			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$data['save'] = $this->mpj->savePekerjaan($_POST);
				redirect(base_url($this->uri->segment(1).'/manage-pekerjaan/'));
			}
  	}
  	function edit_pekerjaan(){
 			$data['title_web'] = 'Ubah Data Pekerjaan Pegawai | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/pekerjaan/edit_pekerjaan';

			$id = $this->uri->segment(3);
			$data['result'] = $this->mpj->getPekerjaan($id);
			if($data['result'] == false)
				redirect(base_url($this->uri->segment(3).'/manage-pekerjaan'));

			$this->form_validation->set_rules('pegawai','Nama Pegawai','required');
			$this->form_validation->set_rules('jabatan','Jabatan','required');
			$this->form_validation->set_rules('unit_kerja','Unit Kerja','required');
			$this->form_validation->set_rules('unit_kerja_sebelumnya','Unit Kerja Sebelumnya','');
			$this->form_validation->set_rules('status_aktif','Status','required');
			$this->form_validation->set_rules('mulai_tugas','Mulai Tugas','');
			$this->form_validation->set_rules('status_kepegawaian','Status Kepegawaian','required');
			$this->form_validation->set_rules('calon_tetap','Pengangkatan Sebagai Calon Pegawai Tetap','');
			$this->form_validation->set_rules('tetap','Pengangkatan Sebagai Pegawai Tetap','');
			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$data['save'] = $this->mpj->editPekerjaan($_POST,$id);
				redirect(base_url($this->uri->segment(1).'/manage-pekerjaan/'));
			}
  	}
  	function delete_pekerjaan(){
			$id = $this->uri->segment(3);
			$this->db->where('id_riwayat_kerja',$id);
			$this->db->delete('riwayat_kerja');
			redirect(base_url($this->uri->segment(1).'/manage-pekerjaan'));
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

		function export(){
			//load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("Phpexcel");

            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
            $sheet = $objPHPExcel->getActiveSheet();
            $style = array(
		        'alignment' => array(
		            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		        ),
		        'font'  => array(
       			 'bold'  => true,
       			 'color' => array('rgb' => '000000'),
        		'size'  => 15,
        		'name'  => 'Arial'
        		)

		    );

 			$sheet->getStyle("A1")->applyFromArray($style);
 			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:J1');
            //set Sheet yang akan diolah
            $objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya
                    //Hello merupakan isinya
            							->setCellValue('A1', 'Daftar Pegawai Tanggal '.date('d M Y'))
                                        ->setCellValue('A2', 'Nama Lengkap')
                                        ->setCellValue('B2', 'Alamat KTP')
                                        ->setCellValue('C2', 'Kelurahan KTP')
																				->setCellValue('D2', 'Kecamatan KTP')
                                        ->setCellValue('E2', 'Jenis Kelamin')
																				->setCellValue('F2', 'Alamat Tinggal')
																				->setCellValue('G2', 'Kelurahan Tinggal;')
																				->setCellValue('H2', 'Kecamatan Tinggal')
                                        ->setCellValue('I2', 'tempat_lahir')
                                        ->setCellValue('J2', 'Tanggal Lahir')
																				->setCellValue('K2', 'Telepon')
																				->setCellValue('L2', 'Handphone');
             $results = $this->mky->get_all_pegawai();
             if($results != FALSE){
             	$i = 3;
             	foreach ($results as $rows) {
             							//set Sheet yang akan diolah
													if($rows->jenis_kelamin==1) $jk = "Laki-laki"; else $jk = "Perempuan";
            							$objPHPExcel->setActiveSheetIndex(0)
                                        ->setCellValue('A'.$i, $rows->gelar_depan." ". $rows->nama_lengkap ."". $rows->gelar_belakang)
                                        ->setCellValue('B'.$i, $rows->alamat_ktp)
                                        ->setCellValue('C'.$i, $rows->kelurahan_ktp)
																				->setCellValue('D'.$i, $rows->kecamatan_ktp)
																				->setCellValue('E'.$i, $rows->alamat_tinggal)
                                        ->setCellValue('F'.$i, $rows->kelurahan_tinggal)
																				->setCellValue('G'.$i, $rows->kecamatan_tinggal)
                                        ->setCellValue('H'.$i, $jk)
                                        ->setCellValue('I'.$i, $rows->tempat_lahir)
                                        ->setCellValue('J'.$i, date('d M Y',strtotime($rows->tanggal_lahir)))
																				->setCellValue('K'.$i, $rows->no_telepon)
																				->setCellValue('L'.$i, $rows->handphone);
														$objPHPExcel->getActiveSheet()->setCellValueExplicit('L'.$i, $rows->handphone, PHPExcel_Cell_DataType::TYPE_STRING);

             		$i++;
             	}
             }
						 foreach(range('A','H') as $columnID) {
						    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
						        ->setAutoSize(true);
						}


            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Daftar Pegawai');

            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            //sesuaikan headernya
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="Daftar Pegawai Tanggal '.date('dmY').'.xlsx"');
            //unduh file
            $objWriter->save("php://output");

            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel,
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
		}

		function export_pekerjaan(){
			//load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("Phpexcel");

            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
            $sheet = $objPHPExcel->getActiveSheet();
            $style = array(
		        'alignment' => array(
		            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		        ),
		        'font'  => array(
       			 'bold'  => true,
       			 'color' => array('rgb' => '000000'),
        		'size'  => 15,
        		'name'  => 'Arial'
        		)

		    );

 			$sheet->getStyle("A1")->applyFromArray($style);
 			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:J1');
            //set Sheet yang akan diolah
            $objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya
                    //Hello merupakan isinya
            							->setCellValue('A1', 'Daftar Pekerjaan & Jabatan Tanggal '.date('d M Y'))
            							->setCellValue('A2', 'No')
                                        ->setCellValue('B2', 'Nama Lengkap')
                                        ->setCellValue('C2', 'Jabatan')
                                        ->setCellValue('D2', 'Unit Kerja')
                                        ->setCellValue('E2', 'Unit Kerja Sebelumnya')
                                        ->setCellValue('F2', 'Mulai Tugas')
                                        ->setCellValue('G2', 'Pengangkatan Calon Tetap')
                                        ->setCellValue('H2', 'Pengangkatan Tetap')
                                        ->setCellValue('I2', 'Fungsi')
                                        ->setCellValue('J2', 'Status Sertifikasi')
                                        ->setCellValue('K2', 'Tahun Sertifikasi')
                                        ->setCellValue('L2', 'Sertifikasi Pendidik')
                                        ->setCellValue('M2', 'Status Kepegawaian')
                                        ->setCellValue('N2', 'Status Keaktifan');
             $results = $this->mpj->get_all_Pekerjaan();
             if($results != FALSE){
             	$i = 3;
             	foreach ($results as $rows) {
             							//set Sheet yang akan diolah
             		if($rows->status_kepegawaian == 1)$sk = "Pegawai Tetap";else if($rows->status_kepegawaian == 2)$sk =  "Pegawai Honorer";else if($rows->status_kepegawaian == 3)$sk =  "Pegawai Kontrak";else if($rows->status_kepegawaian == 4)$sk = "Calon Pegawai Tetap";else if($rows->status_kepegawaian == 5) $sk = "DPK / GBS";
							if($rows->unit_kerja == 0)
	                          $uk = "Tidak Ada";
	                        else if($rows->unit_kerja == 1)
	                          $uk = "Dept. Support";
	                        else if($rows->unit_kerja == 2)
	                          $uk = "LPIA";
	                        else if($rows->unit_kerja == 3)
	                          $uk = "LDSM";
	                        else if($rows->unit_kerja == 4)
	                          $uk = "LPP";
	                        else if($rows->unit_kerja == 5)
	                          $uk = "LEKU";
	                        else if($rows->unit_kerja == 6)
	                          $uk = "TK Islam";
	                        else if($rows->unit_kerja == 7)
	                          $uk = "SDIT";
	                        else if($rows->unit_kerja == 8)
	                          $uk = "MI Plus";
	                        else if($rows->unit_kerja == 9)
	                          $uk = "MTS Plus";
	                        else if($rows->unit_kerja == 10)
	                          $uk = "SMPIT";
	                        else if($rows->unit_kerja == 11)
	                          $uk = "SMAIT";
	                        else if($rows->unit_kerja == 12)
	                          $uk = "STAI";
	                        else if($rows->unit_kerja == 13)
	          								$uk = "Lainnya";

	          				if($rows->status_aktif == 0)$sa = "Aktif";else if($rows->status_aktif == 1) $sa = "Non Aktif";
	          				if($rows->tahun_sertifikasi!=0)
	          					$ts = date('d M Y',strtotime($rows->tahun_sertifikasi));
	          				else $ts = "-";
	          				if($rows->fungsi == 1)$fn = "Guru / Tenaga Pendidik";else if($rows->fungsi == 2) $fn = "Non Guru / Non Tenaga Pendidik";
	          				if($rows->pengangkatan_calon_tetap != "0000-00-00"){
	          					$pct = date('d M Y',strtotime($rows->pengangkatan_calon_tetap));
	          				}
	          				else $pct = "-";
	          				if($rows->pengangkatan_tetap != "0000-00-00"){
	          					$pt = date('d M Y',strtotime($rows->pengangkatan_tetap));
	          				}
	          				else $pt = "-";

							$objPHPExcel->setActiveSheetIndex(0)
										->setCellValue('A'.$i, $i-2)
                                        ->setCellValue('B'.$i, $rows->gelar_depan." ". $rows->nama_lengkap ."". $rows->gelar_belakang)
                                        ->setCellValue('C'.$i, $rows->jabatan)
                                        ->setCellValue('D'.$i, $uk)
                                        ->setCellValue('E'.$i, $rows->unit_kerja_sebelumnya)
                                        ->setCellValue('F'.$i, $rows->mulai_tugas)
                                        ->setCellValue('G'.$i, $pct)
                                        ->setCellValue('H'.$i, $pt)
                                        ->setCellValue('I'.$i, $fn)
                                        ->setCellValue('J'.$i, $rows->status_sertifikasi)
                                        ->setCellValue('K'.$i, $ts)
                                        ->setCellValue('L'.$i, $rows->sertifikasi_pendidik)
                                        ->setCellValue('M'.$i, $sk)
                                        ->setCellValue('N'.$i, $sa);
             		$i++;
             	}
             }
						 foreach(range('A','N') as $columnID) {
						    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
						        ->setAutoSize(true);
						}


            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Daftar Pekerjaan & Jabatan');

            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            //sesuaikan headernya
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="Daftar Pekerjaan & Jabatan Tanggal '.date('dmY').'.xlsx"');
            //unduh file
            $objWriter->save("php://output");

            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel,
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
		}
		function export_keluarga(){
			//load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("Phpexcel");

            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
            $sheet = $objPHPExcel->getActiveSheet();
            $style = array(
		        'alignment' => array(
		            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		        ),
		        'font'  => array(
       			 'bold'  => true,
       			 'color' => array('rgb' => '000000'),
        		'size'  => 15,
        		'name'  => 'Arial'
        		)

		    );

 			$sheet->getStyle("A1")->applyFromArray($style);
 			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:K1');
            //set Sheet yang akan diolah
            $objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya
                    //Hello merupakan isinya
            							->setCellValue('A1', 'Daftar Keluarga Tanggal '.date('d M Y'))
            							->setCellValue('A2', 'No')
                                        ->setCellValue('B2', 'Nama Lengkap')
                                        ->setCellValue('C2', 'Unit Kerja')
                                        ->setCellValue('D2', 'Status Pernikahan')
                                        ->setCellValue('E2', 'Nama Pasangan')
                                        ->setCellValue('F2', 'Pekerjaan Pasangan')
                                        ->setCellValue('G2', 'Jumlah Anak Kandung')
                                        ->setCellValue('H2', 'Jumlah Bukan Anak Kandung')
                                        ->setCellValue('I2', 'Nama Ayah')
                                        ->setCellValue('J2', 'Nama Ibu')
                                        ->setCellValue('K2', 'Jumlah Saudara Kandung');
             $results = $this->mkl->getAllKeluarga();
             if($results != FALSE){
             	$i = 3;
             	foreach ($results as $rows) {
             			//set Sheet yang akan diolah
             				if($rows->unit_kerja == 0)
	                          $uk = "Tidak Ada";
	                        else if($rows->unit_kerja == 1)
	                          $uk = "Dept. Support";
	                        else if($rows->unit_kerja == 2)
	                          $uk = "LPIA";
	                        else if($rows->unit_kerja == 3)
	                          $uk = "LDSM";
	                        else if($rows->unit_kerja == 4)
	                          $uk = "LPP";
	                        else if($rows->unit_kerja == 5)
	                          $uk = "LEKU";
	                        else if($rows->unit_kerja == 6)
	                          $uk = "TK Islam";
	                        else if($rows->unit_kerja == 7)
	                          $uk = "SDIT";
	                        else if($rows->unit_kerja == 8)
	                          $uk = "MI Plus";
	                        else if($rows->unit_kerja == 9)
	                          $uk = "MTS Plus";
	                        else if($rows->unit_kerja == 10)
	                          $uk = "SMPIT";
	                        else if($rows->unit_kerja == 11)
	                          $uk = "SMAIT";
	                        else if($rows->unit_kerja == 12)
	                          $uk = "STAI";
	                        else if($rows->unit_kerja == 13)
	          								$uk = "Lainnya";
	          				if($rows->status_pernikahan == 1){
	          					$sp = "Menikah";
	          				}
	          				else if($rows->status_pernikahan == 0){
	          					$sp = "Belum Menikah";
	          				}
	          				else if($rows->status_pernikahan == 2){
	          					$sp = "Janda";
	          				}
	          				else if($rows->status_pernikahan == 3){
	          					$sp = "Duda";
	          				}
							$objPHPExcel->setActiveSheetIndex(0)
										->setCellValue('A'.$i, $i-2)
                                        ->setCellValue('B'.$i, $rows->gelar_depan." ". $rows->nama_lengkap ."". $rows->gelar_belakang)
                                        ->setCellValue('C'.$i, $uk)
                                        ->setCellValue('D'.$i, $sp)
                                        ->setCellValue('E'.$i, $rows->nama_pasangan)
                                        ->setCellValue('F'.$i, $rows->pekerjaan_pasangan)
                                        ->setCellValue('G'.$i, $rows->anak_kandung)
                                        ->setCellValue('H'.$i, $rows->bukan_anak_kandung)
                                        ->setCellValue('I'.$i, $rows->nama_ayah)
                                        ->setCellValue('J'.$i, $rows->nama_ibu)
                                        ->setCellValue('K'.$i, $rows->jumlah_saudara_kandung);
             		$i++;
             	}
             }
						 foreach(range('A','K') as $columnID) {
						    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
						        ->setAutoSize(true);
						}


            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Daftar Keluarga');

            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            //sesuaikan headernya
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="Daftar Keluarga Tanggal '.date('dmY').'.xlsx"');
            //unduh file
            $objWriter->save("php://output");

            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel,
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
		}
		function export_pendidikan(){
			//load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("Phpexcel");

            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
            $sheet = $objPHPExcel->getActiveSheet();
            $style = array(
		        'alignment' => array(
		            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		        ),
		        'font'  => array(
       			 'bold'  => true,
       			 'color' => array('rgb' => '000000'),
        		'size'  => 15,
        		'name'  => 'Arial'
        		)

		    );

 			$sheet->getStyle("A1")->applyFromArray($style);
 			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:J1');
            //set Sheet yang akan diolah
            $objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya
                    //Hello merupakan isinya
            							->setCellValue('A1', 'Daftar Pendidikan Tanggal '.date('d M Y'))
            							->setCellValue('A2', 'No')
                                        ->setCellValue('B2', 'Nama Lengkap')
                                        ->setCellValue('C2', 'Unit Kerja')
                                        ->setCellValue('D2', 'Pendidikan Terakhir')
                                        ->setCellValue('E2', 'Nama Institusi')
                                        ->setCellValue('F2', 'Pendidikan Yang Ditempuh')
                                        ->setCellValue('G2', 'Program')
                                        ->setCellValue('H2', 'Jurusan')
                                        ->setCellValue('I2', 'Tahun Masuk')
                                        ->setCellValue('J2', 'Nama Instansi');
             $results = $this->mpd->getAllPendidikan();
             if($results != FALSE){
             	$i = 3;
             	foreach ($results as $rows) {
             			//set Sheet yang akan diolah
             				if($rows->unit_kerja == 0)
	                          $uk = "Tidak Ada";
	                        else if($rows->unit_kerja == 1)
	                          $uk = "Dept. Support";
	                        else if($rows->unit_kerja == 2)
	                          $uk = "LPIA";
	                        else if($rows->unit_kerja == 3)
	                          $uk = "LDSM";
	                        else if($rows->unit_kerja == 4)
	                          $uk = "LPP";
	                        else if($rows->unit_kerja == 5)
	                          $uk = "LEKU";
	                        else if($rows->unit_kerja == 6)
	                          $uk = "TK Islam";
	                        else if($rows->unit_kerja == 7)
	                          $uk = "SDIT";
	                        else if($rows->unit_kerja == 8)
	                          $uk = "MI Plus";
	                        else if($rows->unit_kerja == 9)
	                          $uk = "MTS Plus";
	                        else if($rows->unit_kerja == 10)
	                          $uk = "SMPIT";
	                        else if($rows->unit_kerja == 11)
	                          $uk = "SMAIT";
	                        else if($rows->unit_kerja == 12)
	                          $uk = "STAI";
	                        else if($rows->unit_kerja == 13)
	          								$uk = "Lainnya";
	          				if($rows->pendidikan_terakhir == 0)
	          					$pt = "Tidak Sekolah";
	          				else if($rows->pendidikan_terakhir == 1)
	          					$pt = "SD";
	          				else if($rows->pendidikan_terakhir == 2)
	          					$pt = "SMP";
	          				else if($rows->pendidikan_terakhir == 3)
	          					$pt = "SMA";
	          				else if($rows->pendidikan_terakhir == 4)
	          					$pt = "D1";
	          				else if($rows->pendidikan_terakhir == 5)
	          					$pt = "D2";
	          				else if($rows->pendidikan_terakhir == 6)
	          					$pt = "D3";
	          				else if($rows->pendidikan_terakhir == 7)
	          					$pt = "D4";
	          				else if($rows->pendidikan_terakhir == 8)
	          					$pt = "S1";
	          				else if($rows->pendidikan_terakhir == 9)
	          					$pt = "S2";
	          				else if($rows->pendidikan_terakhir == 10)
	          					$pt = "S3";
	          				else if($rows->pendidikan_terakhir == 11)
	          					$pt = "Paket B, C";

	          				if($rows->pendidikan_ditempuh == 0)
	          					$pd = "Tidak Sekolah";
	          				else if($rows->pendidikan_ditempuh == 1)
	          					$pd = "SD";
	          				else if($rows->pendidikan_ditempuh == 2)
	          					$pd = "SMP";
	          				else if($rows->pendidikan_ditempuh == 3)
	          					$pd = "SMA";
	          				else if($rows->pendidikan_ditempuh == 4)
	          					$pd = "D1";
	          				else if($rows->pendidikan_ditempuh == 5)
	          					$pd = "D2";
	          				else if($rows->pendidikan_ditempuh == 6)
	          					$pd = "D3";
	          				else if($rows->pendidikan_ditempuh == 7)
	          					$pd = "D4";
	          				else if($rows->pendidikan_ditempuh == 8)
	          					$pd = "S1";
	          				else if($rows->pendidikan_ditempuh == 9)
	          					$pd = "S2";
	          				else if($rows->pendidikan_ditempuh == 10)
	          					$pd = "S3";
	          				else if($rows->pendidikan_ditempuh == 11)
	          					$pd = "Paket B, C";
	          				if($rows->tahun_masuk_pd != "0000-00-00"){
	          					$tmpd = date('Y',strtotime($rows->tahun_masuk_pd));
	          				}
	          				else $tmpd = "";
							$objPHPExcel->setActiveSheetIndex(0)
										->setCellValue('A'.$i, $i-2)
                                        ->setCellValue('B'.$i, $rows->gelar_depan." ". $rows->nama_lengkap ."". $rows->gelar_belakang)
                                        ->setCellValue('C'.$i, $uk)
                                        ->setCellValue('D'.$i, $pt)
                                        ->setCellValue('E'.$i, $rows->nama_pt)
                                        ->setCellValue('F'.$i, $pd)
                                        ->setCellValue('G'.$i, $rows->program_pd)
                                        ->setCellValue('H'.$i, $rows->jurusan_pd)
                                        ->setCellValue('I'.$i, $tmpd)
                                        ->setCellValue('J'.$i, $rows->nama_pt_pd);
             		$i++;
             	}
             }
						 foreach(range('A','J') as $columnID) {
						    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
						        ->setAutoSize(true);
						}


            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Daftar Pendidikan');

            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            //sesuaikan headernya
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="Daftar Pendidikan Tanggal '.date('dmY').'.xlsx"');
            //unduh file
            $objWriter->save("php://output");

            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel,
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
		}

		function download_data(){
			 // Generate PDF by saying hello to the world
			$id = $this->uri->segment(3);
	        $a = array('a'=>$this->mky->select_data($id));
					$b=  array('b'=>$this->mky->get_foto($id));
					$c=	 array('c'=>$this->mky->pilih_data($id));
					$d= array('d' => $this->mky->select_keluarga($id));
					$e= array('e' => $this->mky->getKeluarga($id));

					$res['data'] = array_merge($a, $b,$c,$d,$e);
	        $this->load->view('admin/pegawai/download',$res);
		}
}
