<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('muser','mus');
		$this->load->model('mkepegawaian','mky');
		$this->load->model('mkeluarga','mkl');
		$this->load->model('mpendidikan','mpd');
		$this->load->model('mpekerjaan','mpj');
    $this->load->library('pagination');
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

  function manage_user(){
    $data['title_web'] = 'View All User | Adminpanel Vorcee';
    $data['path_content'] = 'admin/user/manage_user';

		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'manage_user'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('user');// fetch total record in databae using load
    $config['per_page'] = $perpage; // Total data in one page
    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
    $config['num_links'] = round($choice); // Rounding Choice Variable
    $config['use_page_numbers'] = TRUE;
    $this->pagination->initialize($config); // intialize var config
    $page = ($this->uri->segment(3))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
    $data['results'] = $this->mus->fetchUser($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('user'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/index',$data);
		}
		else{
			$data['results'] = $this->mus->fetchUserSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/index',$data);
		}
  }

		function add_user(){
			$data['title_web'] = 'Add User | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/user/add_user';
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('fullname','Full Name','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('confirm','Confirm Password','required|matches[password]');
			$this->form_validation->set_rules('role','Role','required');

			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$save = $this->mus->saveUser($_POST);
				redirect(base_url($this->uri->segment(1).'/manage_user'));
			}
		}

		function edit_user(){
			$data['title_web'] = 'Edit User | Adminpanel Asy-syukriyyah';
			$data['path_content'] = 'admin/user/edit_user';
			$id=$this->uri->segment(3);
			$data['result']=$this->mod->getDataWhere('user','id_user',$id);
			if($data['result']==FALSE)
				redirect(base_url('user/manage_user'));

				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('fullname','Full Name','required');
				$this->form_validation->set_rules('email','Email','required|valid_email');
				$this->form_validation->set_rules('confirm','Confirm Password','matches[password]');
				$this->form_validation->set_rules('role','Role','required');

			if(!$this->form_validation->run()){
				$this->load->view('admin/index',$data);
			}
			else{
				$save = $this->mus->editUser($_POST,$id);
				redirect(base_url($this->uri->segment(1).'/manage_user'));
			}
		}
		function delete_user(){
			$id = $this->uri->segment(3);
			$this->db->where('id_user',$id);
			$this->db->delete('user');
			redirect(base_url($this->uri->segment(1).'/manage_user'));
		}

}

?>
