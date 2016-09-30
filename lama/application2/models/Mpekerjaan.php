<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpekerjaan extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchPekerjaan($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);

  	$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
    $this->db->order_by('id_riwayat_kerja','DESC');
    $query = $this->db->get('riwayat_kerja');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllPekerjaan() {
    return $this->db->count_all("riwayat_kerja");
  }
  function fetchPekerjaanNotInput(){
		$sql = "
			SELECT as_pegawai.*
			FROM as_pegawai
			WHERE as_pegawai.id_pegawai NOT IN (SELECT as_riwayat_kerja.id_pegawai from as_riwayat_kerja)
			Order BY nama_lengkap ASC
		";
		$query = $this->db->query($sql);
		if($query->num_rows()>0){
			return $query->result();
		}
		else return FALSE;
	}
	function savePekerjaan($data){
		$array = array(
				'id_pegawai' => $data['pegawai'],
				'jabatan' => $data['jabatan'],
				'unit_kerja' => $data['unit_kerja'],
				'unit_kerja_sebelumnya' => $data['unit_kerja_sebelumnya'],
				'mulai_tugas'=> $data['mulai_tugas'],
				'status_kepegawaian' => $data['status_kepegawaian'],
				'status_aktif'=>$data['status_aktif'],
				'pengangkatan_calon_tetap' => $data['calon_tetap'],
				'pengangkatan_tetap' => $data['tetap'],
				'tahun_sertifikasi' => $data['tahun_sertifikasi'],
				'sertifikasi_pendidik' => $data['sertifikat']
			);
		if($data['calon_tetap'] == ''){
			$array['pengangkatan_calon_tetap'] = '';
		}
		else{
			$array['pengangkatan_calon_tetap'] = $data['calon_tetap'];
		}
		if($data['tetap'] == ''){
			$array['pengangkatan_tetap'] = '';
		}
		else{
			$array['pengangkatan_tetap'] = $data['tetap'];
		}
		if($data['fungsi'] == NULL){
			$array['fungsi'] = '';
		}
		else{
			$array['fungsi'] = $data['fungsi'];
		}
		if($data['sertifikasi'] == NULL){
			$array['status_sertifikasi'] = '';
		}
		else{
			$array['status_sertifikasi'] =$data['sertifikasi'];
		}
		$this->db->insert('riwayat_kerja',$array);
		return 1;
	}
	function fetchPendidikanSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->join('pegawai','pegawai.id_pegawai = pendidikan.id_pegawai');
    		$this->db->order_by('nama_lengkap','ASC');
	    $query = $this->db->get('pendidikan');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}
	function editPekerjaan($data,$id){
		$array = array(
				'jabatan' => $data['jabatan'],
				'unit_kerja' => $data['unit_kerja'],
				'unit_kerja_sebelumnya' => $data['unit_kerja_sebelumnya'],
				'mulai_tugas'=> $data['mulai_tugas'],
				'status_kepegawaian' => $data['status_kepegawaian'],
				'status_aktif'=>$data['status_aktif'],
				'tahun_sertifikasi' => $data['tahun_sertifikasi'],
				'sertifikasi_pendidik' => $data['sertifikat']
			);
		if($data['calon_tetap'] == ''){
			$array['pengangkatan_calon_tetap'] = '';
		}
		else{
			$array['pengangkatan_calon_tetap'] = $data['calon_tetap'];
		}
		if($data['tetap'] == ''){
			$array['pengangkatan_tetap'] = '';
		}
		else{
			$array['pengangkatan_tetap'] = $data['tetap'];
		}
		if($data['fungsi'] == NULL){
			$array['fungsi'] = '';
		}
		else{
			$array['fungsi'] = $data['fungsi'];
		}
		if($data['sertifikasi'] == NULL){
			$array['status_sertifikasi'] = '';
		}
		else{
			$array['status_sertifikasi'] =$data['sertifikasi'];
		}
		$this->db->where('id_riwayat_kerja',$id);
		$this->db->update('riwayat_kerja',$array);
		return 1;
	}
	function fetchAllPekerjaan($id){
			if($id!="yayasan"){
				$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
				$this->db->where('unit_kerja',$id);
				$query = $this->db->get('riwayat_kerja');
				if($query->num_rows()>0){
					return $query->result();
				}
				else return FALSE;
			}
			else if($id == "yayasan"){
				$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
				$this->db->where('unit_kerja',1);
				$this->db->or_where('unit_kerja',2);
				$this->db->or_where('unit_kerja',3);
				$this->db->or_where('unit_kerja',4);
				$this->db->or_where('unit_kerja',5);
				$query = $this->db->get('riwayat_kerja');
				if($query->num_rows()>0){
					return $query->result();
				}
				else return FALSE;
			}
		}



	function getPekerjaan($id){
		$this->db->where('id_riwayat_kerja',$id);
		$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
	    $query = $this->db->get('riwayat_kerja');
	    if($query->num_rows()>0){
	      return $query->row_array();
	    }
	    else return FALSE;
	}

	function get_All_Pekerjaan(){
		$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
	    $query = $this->db->get('riwayat_kerja');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}

	function countGuruTetap() {
	$this->db->where('fungsi',1);
	$this->db->where('status_kepegawaian',1);
    return $this->db->count_all_results("riwayat_kerja");
  }
  function countGenderUnit($id,$gender){
  	if($id!="yayasan"){
  	$this->db->join('riwayat_kerja','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
  	$this->db->where('jenis_kelamin',$gender);
  	$this->db->where('unit_kerja',$id);
  	return $this->db->count_all_results("pegawai");
  	}
  	else if($id=="yayasan"){
  		$total = 0;
  		/*for($i=1;$i<=5;$i++){
  			$this->db->join('riwayat_kerja','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
		  	$this->db->where('jenis_kelamin',$gender);
		  	$this->db->where('unit_kerja',$id);
		  	$total += $this->db->count_all_results("pegawai");
  		}*/
  		$query = $this->db->query("SELECT count(*) as total FROM `as_pegawai` 
INNER JOIN as_riwayat_kerja ON as_riwayat_kerja.id_pegawai = as_pegawai.id_pegawai
WHERE (unit_kerja = 1 or unit_kerja = 2 or unit_kerja = 3 or unit_kerja = 4 or unit_kerja = 5) and jenis_kelamin = ".$gender);
  		$result = $query->row_array();
  		$total = $result['total'];
  		return $total;
  	}
  }
  function countStatusUnit($id,$status){
  	if($id!="yayasan"){
	  	$this->db->where('status_kepegawaian',$status);
	  	$this->db->where('unit_kerja',$id);
	  	return $this->db->count_all_results("riwayat_kerja");
  	}
  	else if($id=="yayasan"){
  		$total = 0;
  		$query = $this->db->query("SELECT count(*) as total FROM `as_pegawai` 
INNER JOIN as_riwayat_kerja ON as_riwayat_kerja.id_pegawai = as_pegawai.id_pegawai
WHERE (unit_kerja = 1 or unit_kerja = 2 or unit_kerja = 3 or unit_kerja = 4 or unit_kerja = 5) and status_kepegawaian = ".$status);
  		$result = $query->row_array();
  		$total = $result['total'];
  		return $total;
  	}
  }
  function countPendidikanUnit($id,$pendidikan){
  	if($id!="yayasan"){
	  	$this->db->join('pegawai','pendidikan.id_pegawai = pegawai.id_pegawai');
	  	$this->db->join('riwayat_kerja','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
	  	$this->db->where('pendidikan_terakhir',$pendidikan);
	  	$this->db->where('unit_kerja',$id);
	  	return $this->db->count_all_results("pendidikan");
  	}
  	else if($id=="yayasan"){
  		$total = 0;
  		$query = $this->db->query("SELECT count(*) as total FROM `as_pendidikan` 
INNER JOIN as_pegawai ON as_pendidikan.id_pegawai = as_pegawai.id_pegawai
INNER JOIN as_riwayat_kerja ON as_riwayat_kerja.id_pegawai = as_pegawai.id_pegawai
WHERE (unit_kerja = 1 or unit_kerja = 2 or unit_kerja = 3 or unit_kerja = 4 or unit_kerja = 5) and pendidikan_terakhir = ".$pendidikan);
  		$result = $query->row_array();
  		$total = $result['total'];
  		return $total;
  	}
  }
}
