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
				'handphone' => $data['handphone']

        );
      if($upload_data!=FALSE){
    	$array['foto_pegawai'] = 'asset/images/photos/'.$upload_data['file_name'];
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
			//$this->db->where('id_keluarga',$id);
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

		function pilih_data($id){
			$this->db->select('nonformal.tahun,nonformal.lamanya,nonformal.jenis,nonformal.diutus');
			//$this->db->where('nonformal.id_nonformal',$id);
			$this->db->join('pendidikan','nonformal.id_nonformal = pendidikan.id_pendidikan ');
		$query = $this->db->get('nonformal');
	if($query->num_rows()>0)
		return $query->result();
	else return false;

		}

		function select_keluarga($id){
			$this->db->select('hub_keluarga,nama_anggota,data_keluarga.jenis_kelamin,kandung,pekerjaan');
			$this->db->join('pegawai','data_keluarga.id_data_keluarga = pegawai.id_pegawai');
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
