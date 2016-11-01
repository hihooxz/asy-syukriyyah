<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkepegawaian extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchPegawai($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);

    $this->db->order_by('tanggal_input','DESC');
		$this->db->join('user','user.id_user = pegawai.id_user');
    $query = $this->db->get('pegawai');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function totalPegawaiKeaktifan($aktif){
  	$this->db->join('pegawai','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
  	$this->db->where('status_aktif',$aktif);
  	return $this->db->count_all_results('riwayat_kerja');
  }
  function totalPegawaiJK($jk){
  	$this->db->join('riwayat_kerja','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
  	$this->db->where('jenis_kelamin',$jk);
  	$this->db->where('status_aktif',0);
  	return $this->db->count_all_results('pegawai');
  }
  function countGuruTetap() {
  	$this->db->join('pegawai','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
	$this->db->where('fungsi',1);
	$this->db->where('status_kepegawaian',1);
	$this->db->where('status_aktif',0);
    return $this->db->count_all_results("riwayat_kerja");
  }
  function statusKepegawaian($id){
	$this->db->join('pegawai','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
	$this->db->where('status_kepegawaian',$id);
	$this->db->where('status_aktif',0);
    return $this->db->count_all_results("riwayat_kerja");
  }
  function pegawaiPerunit($id){
	$this->db->join('pegawai','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
	$this->db->where('unit_kerja',$id);
	$this->db->where('status_aktif',0);
    return $this->db->count_all_results("riwayat_kerja");
  }
  function pegawaiPerunitTidakAktif(){
	$this->db->join('pegawai','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
	$this->db->where('status_aktif',1);
    return $this->db->count_all_results("riwayat_kerja");
  }
  function pegawaiPendidikan($id){
	$this->db->join('pegawai','pendidikan.id_pegawai = pegawai.id_pegawai');
	$this->db->join('riwayat_kerja','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
	$this->db->where('pendidikan_terakhir',$id);
	$this->db->where('status_aktif',0);
    return $this->db->count_all_results("pendidikan");
  }
  function pegawaiPendidikanTidakAktif(){
	$this->db->join('pegawai','pendidikan.id_pegawai = pegawai.id_pegawai');
	$this->db->join('riwayat_kerja','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
	$this->db->where('status_aktif',1);
    return $this->db->count_all_results("pendidikan");
  }
   function totalPegawaiUnit($unit){
  	$this->db->join('pegawai','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
  	$this->db->where('status_aktif',0);
  	$this->db->where('unit_kerja',$unit);
  	return $this->db->count_all_results('riwayat_kerja');
  }
  function totalPegawai(){
  		$data['total_pegawai'] = $this->totalPegawaiKeaktifan(0);
  		$data['total_pegawai_tidak_aktif'] = $this->totalPegawaiKeaktifan(1);
		$data['pegawai_laki_laki'] = $this->totalPegawaiJK(1);
		$data['pegawai_perempuan'] = $this->totalPegawaiJK(2);
		$data['pegawai_tetap'] = $this->statusKepegawaian(1);
		$data['pegawai_honorer'] = $this->statusKepegawaian(2);
		$data['pegawai_kontrak'] = $this->statusKepegawaian(3);
		$data['cpt'] = $this->statusKepegawaian(4);
		$data['dpk_gbs'] = $this->statusKepegawaian(5);
		$data['guru_tetap'] = $this->countGuruTetap();

		$data['tkit'] = $this->pegawaiPerunit(6);
		$data['yayasan'] = $this->pegawaiPerunit(1)+$this->pegawaiPerunit(2)+$this->pegawaiPerunit(3)
		+$this->pegawaiPerunit(4)+$this->pegawaiPerunit(5);
		$data['sdit'] = $this->pegawaiPerunit(7);
		$data['miplus'] = $this->pegawaiPerunit(8);
		$data['mts'] = $this->pegawaiPerunit(9);
		$data['smpit'] = $this->pegawaiPerunit(10);
		$data['smait'] = $this->pegawaiPerunit(11);
		$data['unit_tidak_aktif'] = $this->pegawaiPerunitTidakAktif();

		// pendidikan
		$data['ts'] = $this->pegawaiPendidikan(0);
		$data['sd'] = $this->pegawaiPendidikan(1);
		$data['smp'] = $this->pegawaiPendidikan(2);
		$data['sma'] = $this->pegawaiPendidikan(3);
		$data['d1'] = $this->pegawaiPendidikan(4);
		$data['d2'] = $this->pegawaiPendidikan(5);
		$data['d3'] = $this->pegawaiPendidikan(6);
		$data['d4'] = $this->pegawaiPendidikan(7);
		$data['s1'] = $this->pegawaiPendidikan(8);
		$data['s2'] = $this->pegawaiPendidikan(9);
		$data['s3'] = $this->pegawaiPendidikan(10);
		$data['paket_c'] = $this->pegawaiPendidikan(11);
		$data['pendidikan_tidak_aktif'] = $this->pegawaiPendidikanTidakAktif();
	return $data;
  }
  function countAllPegawai() {
    return $this->db->count_all("pegawai");
  }

  function saveInfoPegawai($data,$upload_data){
    $array = array(
			'nama_lengkap' => $data['nama_lengkap'],
			'nik' => $data['nik'],
			'gelar_depan' => $data['gelar_depan'],
			'gelar_belakang' => $data['gelar_belakang'],
			'jenis_kelamin' => $data['jenis_kelamin'],
			'tempat_lahir' => $data['tempat_lahir'],
			'tanggal_lahir' => $data['tanggal_lahir'],
			'agama' => $data['agama'],
			'alamat_ktp' => $data['alamat_ktp'],
				'rt_ktp' => $data['rt_ktp'],
				'rw_ktp' => $data['rw_ktp'],
				'kelurahan_ktp' => $data['kelurahan_ktp'],
				'kecamatan_ktp' => $data['kecamatan_ktp'],
				'kota_ktp' => $data['kota_ktp'],
				'alamat_tinggal' => $data['alamat_tinggal'],
				'rt_tinggal' => $data['rt_tinggal'],
				'rw_tinggal' => $data['rw_tinggal'],
				'kelurahan_tinggal' => $data['kelurahan_tinggal'],
				'kecamatan_tinggal' => $data['kecamatan_tinggal'],
				'kota_tinggal' => $data['kota_tinggal'],
				'no_telepon' => $data['no_telepon'],
				'handphone' => $data['handphone'],
				'id_user' => $this->session->userdata('idAdmin'),
				'tanggal_input' => date('Y-m-d H:i:s')
      );
    if($upload_data!=FALSE){
    	$array['foto_pegawai'] = 'asset/images/photos/'.$upload_data['file_name'];
    }
    $this->db->insert('pegawai',$array);
    return 1;
  }
    function editInfoPegawai($data,$id,$upload_data){
      $array = array(
				'nama_lengkap' => $data['nama_lengkap'],
				'gelar_depan' => $data['gelar_depan'],
				'nik' => $data['nik'],
				'gelar_belakang' => $data['gelar_belakang'],
				'tempat_lahir' => $data['tempat_lahir'],
				'tanggal_lahir' => $data['tanggal_lahir'],
				'agama' => $data['agama'],
				'alamat_ktp' => $data['alamat_ktp'],
				'rt_ktp' => $data['rt_ktp'],
				'rw_ktp' => $data['rw_ktp'],
				'kelurahan_ktp' => $data['kelurahan_ktp'],
				'kecamatan_ktp' => $data['kecamatan_ktp'],
				'kota_ktp' => $data['kota_ktp'],
				'alamat_tinggal' => $data['alamat_tinggal'],
				'rt_tinggal' => $data['rt_tinggal'],
				'rw_tinggal' => $data['rw_tinggal'],
				'kelurahan_tinggal' => $data['kelurahan_tinggal'],
				'kecamatan_tinggal' => $data['kecamatan_tinggal'],
				'kota_tinggal' => $data['kota_tinggal'],
				'no_telepon' => $data['no_telepon'],
				'handphone' => $data['handphone']

        );
      if($upload_data!=FALSE){
    	$array['foto_pegawai'] = 'asset/images/photos/'.$upload_data['file_name'];
    }
		if(isset($data['jenis_kelamin'])){
				$array['jenis_kelamin'] = $data['jenis_kelamin'];
		}
      $this->db->where('id_pegawai',$id);
      $this->db->update('pegawai',$array);
      return 1;
    }
		function fetchPegawaiSearch($data) {
		$this->db->join('user','user.id_user = pegawai.id_user');
		$this->db->like($data['by'],$data['search']);
		$this->db->order_by('nik','DESC');
	    $query = $this->db->get('pegawai');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}
		function get_all_pegawai(){
			$this->db->from('pegawai');
			$query = $this->db->get();
			if($query->num_rows()>0)
				return $query->result();
			else return false;
		}
		function getKeluarga($id){
			$this->db->join('pegawai','pegawai.id_pegawai = keluarga.id_pegawai');
			$this->db->where('id_keluarga',$id);
			$query = $this->db->get('keluarga');
			if($query->num_rows()>0){
				return $query->row_array();
			}
			else return FALSE;
		}


		function select_data($id){
			$this->db->select('gelar_depan,nama_lengkap,gelar_belakang,jenis_kelamin,alamat_tinggal,handphone,jabatan,unit_kerja,status_kepegawaian,fungsi,mulai_tugas,foto_pegawai,alamat_ktp,tempat_lahir,tanggal_lahir
			,agama,alamat_ktp,rt_ktp,rw_ktp,kelurahan_ktp,kecamatan_ktp,kota_ktp,rt_tinggal,rw_tinggal,kota_tinggal,kecamatan_tinggal,kelurahan_tinggal,no_telepon,handphone
			,pendidikan_terakhir,nama_pt,pendidikan_ditempuh,program_pd,jurusan_pd,tahun_masuk_pd,nama_pt_pd,unit_kerja_sebelumnya,status_sertifikasi,pengangkatan_calon_tetap,pengangkatan_tetap,sertifikasi_pendidik
			,fullname');
			$this->db->where('pegawai.id_pegawai',$id);
		  $this->db->join('riwayat_kerja','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
			$this->db->join('pendidikan','pegawai.id_pegawai = pendidikan.id_pegawai ');
			$this->db->join('user','user.id_user = pegawai.id_user');

		$query = $this->db->get('pegawai');
	if($query->num_rows()>0)
		return $query->result();
	else return false;

		}

		function fetchNonFormalDiutus($id){
			$this->db->select('nonformal.tahun,nonformal.lamanya,nonformal.jenis,nonformal.diutus,pendidikan.id_pegawai,nonformal.lembaga');
			$this->db->join('pendidikan','nonformal.id_pendidikan = pendidikan.id_pendidikan ');
			$this->db->where('pendidikan.id_pegawai',$id);
			$this->db->where('nonformal.diutus',1);
			$query = $this->db->get('nonformal');
			if($query->num_rows()>0)
				return $query->result();
			else return false;
		}
		function fetchNonFormalTD($id){
			$this->db->select('nonformal.tahun,nonformal.lamanya,nonformal.jenis,nonformal.diutus,pendidikan.id_pegawai,nonformal.lembaga');
			$this->db->join('pendidikan','nonformal.id_pendidikan = pendidikan.id_pendidikan ');
			$this->db->where('pendidikan.id_pegawai',$id);
			$this->db->where('nonformal.diutus',0);
			$query = $this->db->get('nonformal');
			if($query->num_rows()>0)
				return $query->result();
			else return false;
		}

		function select_keluarga($id){
			$this->db->where('keluarga.id_pegawai',$id);
			$this->db->select('data_keluarga.*');
			$this->db->join('keluarga','keluarga.id_keluarga = data_keluarga.id_keluarga');
			$this->db->join('pegawai','keluarga.id_pegawai = pegawai.id_pegawai');
			$this->db->order_by('hub_keluarga','ASC');
			$this->db->order_by('sort_order','ASC');
			$query = $this->db->get('data_keluarga');
			if($query->num_rows()>0)
				return $query->result();
			else return false;

		}


		function get_foto($id){
			$this->db->select('foto_pegawai');
			$this->db->where('pegawai.id_pegawai',$id);
		$query = $this->db->get('pegawai');
	if($query->num_rows()>0)
		return $query->row_array();
	else return false;

		}

}
