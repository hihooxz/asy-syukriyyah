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
  function fetchPekerjaanSearch($data){
  	$this->db->like($data['by'],$data['search']);
  	$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
    $this->db->order_by('id_riwayat_kerja','DESC');
    $query = $this->db->get('riwayat_kerja');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function fetchPekerjaanPegawai($id) {
  	$this->db->select('riwayat_jabatan.*');
  	$this->db->join('riwayat_kerja','riwayat_kerja.id_riwayat_kerja = riwayat_jabatan.id_riwayat_kerja');
  	$this->db->where('riwayat_jabatan.id_riwayat_kerja',$id);
    $this->db->order_by('sort_order','ASC');
    $query = $this->db->get('riwayat_jabatan');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function fetchPekerjaanPegawaiDiluar($id) {
  	$this->db->select('riwayat_jabatan_diluar.*');
  	$this->db->join('riwayat_kerja','riwayat_kerja.id_riwayat_kerja = riwayat_jabatan_diluar.id_riwayat_kerja');
  	$this->db->where('riwayat_jabatan_diluar.id_riwayat_kerja',$id);
    $this->db->order_by('sort_order','ASC');
    $query = $this->db->get('riwayat_jabatan_diluar');
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
				'status_aktif'=>$data['status_aktif']
			);
		if(isset($data['tahun_sertifikasi'])){
			if($data['tahun_sertifikasi'] == ''){
				$array['tahun_sertifikasi'] = '';
			}
			else{
				$array['tahun_sertifikasi'] = $data['tahun_sertifikasi'];
			}
		}
		if(isset($data['sertifikat'])){
			if($data['sertifikat'] == ''){
			$array['sertifikasi_pendidik'] = '';
			}
			else{
				$array['sertifikasi_pendidik'] = $data['sertifikat'];
			}
		}
		if(isset($data['calon_tetap'])){
			if($data['calon_tetap'] == ''){
			$array['pengangkatan_calon_tetap'] = '';
			}
			else{
				$array['pengangkatan_calon_tetap'] = $data['calon_tetap'];
			}
		}
		if(isset($data['tetap'])){
			if($data['tetap'] == ''){
				$array['pengangkatan_tetap'] = '';
			}
			else{
				$array['pengangkatan_tetap'] = $data['tetap'];
			}
		}
		if(isset($data['fungsi'])){
			if($data['fungsi'] == NULL){
			$array['fungsi'] = '';
			}
			else{
				$array['fungsi'] = $data['fungsi'];
			}
		}
		if(isset($data['sertifikasi'])){
			if($data['sertifikasi'] == NULL){
				$array['status_sertifikasi'] = '';
			}
			else{
				$array['status_sertifikasi'] =$data['sertifikasi'];
			}
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
			if($id!="yayasan" && $id != "tidak-aktif"){
				$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
				$this->db->where('status_aktif',0);
				$this->db->where('unit_kerja',$id);
				$query = $this->db->get('riwayat_kerja');
				if($query->num_rows()>0){
					return $query->result();
				}
				else return FALSE;
			}
			else if($id == "yayasan"){
				$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
				$this->db->where('status_aktif',0);
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
			else if($id == "tidak-aktif"){
				$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
				$this->db->where('status_aktif',1);
				$query = $this->db->get('riwayat_kerja');
				if($query->num_rows()>0){
					return $query->result();
				}
				else return FALSE;
			}
		}
	function fetchAllPekerjaanSearch($id,$data){
			if($id!="yayasan" && $id != "tidak-aktif"){
				$this->db->like($data['by'],$data['search']);
				$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
				$this->db->where('status_aktif',0);
				$this->db->where('unit_kerja',$id);
				$query = $this->db->get('riwayat_kerja');
				if($query->num_rows()>0){
					return $query->result();
				}
				else return FALSE;
			}
			else if($id == "yayasan"){
				$this->db->like($data['by'],$data['search']);
				$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
				$this->db->where('status_aktif',0);
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
			else if($id == "tidak-aktif"){
				$this->db->like($data['by'],$data['search']);
				$this->db->join('pegawai','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
				$this->db->where('status_aktif',1);
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
  	if($id!="yayasan" && $id!="tidak-aktif"){
  	$this->db->join('riwayat_kerja','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
  	$this->db->where('status_aktif',0);
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
WHERE (unit_kerja = 1 or unit_kerja = 2 or unit_kerja = 3 or unit_kerja = 4 or unit_kerja = 5) and jenis_kelamin = ".$gender." and status_aktif = 0");
  		$result = $query->row_array();
  		$total = $result['total'];
  		return $total;
  	}
  	else if($id=="tidak-aktif"){
  	$this->db->join('riwayat_kerja','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
  	$this->db->where('status_aktif',1);
  	$this->db->where('jenis_kelamin',$gender);

  	return $this->db->count_all_results("pegawai");
  	}
  }
  function countStatusUnit($id,$status){
  	if($id!="yayasan" && $id!="tidak-aktif"){
	  	$this->db->where('status_kepegawaian',$status);
	  	$this->db->where('unit_kerja',$id);
	  	$this->db->where('status_aktif',0);
	  	return $this->db->count_all_results("riwayat_kerja");
  	}
  	else if($id=="yayasan"){
  		$total = 0;
  		$query = $this->db->query("SELECT count(*) as total FROM `as_pegawai`
INNER JOIN as_riwayat_kerja ON as_riwayat_kerja.id_pegawai = as_pegawai.id_pegawai
WHERE (unit_kerja = 1 or unit_kerja = 2 or unit_kerja = 3 or unit_kerja = 4 or unit_kerja = 5) and status_kepegawaian = ".$status." and status_aktif = 0");
  		$result = $query->row_array();
  		$total = $result['total'];
  		return $total;
  	}
  	else if($id=="tidak-aktif"){
  	$this->db->join('pegawai','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
  	$this->db->where('status_aktif',1);
	$this->db->where('status_kepegawaian',$status);

  	return $this->db->count_all_results("riwayat_kerja");
  	}
  }
  function countPendidikanUnit($id,$pendidikan){
  	if($id!="yayasan"){
	  	$this->db->join('pegawai','pendidikan.id_pegawai = pegawai.id_pegawai');
	  	$this->db->join('riwayat_kerja','riwayat_kerja.id_pegawai = pegawai.id_pegawai');
	  	$this->db->where('pendidikan_terakhir',$pendidikan);
	  	$this->db->where('unit_kerja',$id);
	  	$this->db->where('status_aktif',0);
	  	return $this->db->count_all_results("pendidikan");
  	}
  	else if($id=="yayasan"){
  		$total = 0;
  		$query = $this->db->query("SELECT count(*) as total FROM `as_pendidikan`
INNER JOIN as_pegawai ON as_pendidikan.id_pegawai = as_pegawai.id_pegawai
INNER JOIN as_riwayat_kerja ON as_riwayat_kerja.id_pegawai = as_pegawai.id_pegawai
WHERE (unit_kerja = 1 or unit_kerja = 2 or unit_kerja = 3 or unit_kerja = 4 or unit_kerja = 5) and pendidikan_terakhir = ".$pendidikan." and status_aktif = 0");
  		$result = $query->row_array();
  		$total = $result['total'];
  		return $total;
  	}
  }
  function editDetailPekerjaan($data,$id){
  	$pekerjaan = $this->fetchPekerjaanPegawai($id);
		if($pekerjaan == FALSE){
			$i = 1;
			for($i;$i<=5;$i++){
				if(isset($data['tahun_mulai_'.$i])){
					if($data['tahun_mulai_'.$i] != ''){
						$array = array(
								'sort_order' => $data['sort_order_'.$i],
								'tahun_mulai' => $data['tahun_mulai_'.$i],
								'tahun_selesai' => $data['tahun_selesai_'.$i],
								'unit' => $data['unit_'.$i],
								'id_riwayat_kerja' => $id
							);
							if($data['jabatan_'.$i] != ""){
								$array['jabatan'] = $data['jabatan_'.$i];
							}
						$this->db->insert('riwayat_jabatan',$array);
					}
				}
			}
		}
		else{
			$data = $this->input->post();
			$i = 0;
			for ($i;$i<=5;$i++){
				if(isset($data['id_riwayat_jabatan_'.$i])){
					if($data['id_riwayat_jabatan_'.$i]==''){
						if($data['tahun_mulai_'.$i] != ''){
						$array = array(
								'sort_order' => $data['sort_order_'.$i],
								'tahun_mulai' => $data['tahun_mulai_'.$i],
								'tahun_selesai' => $data['tahun_selesai_'.$i],
								'unit' => $data['unit_'.$i],
								'id_riwayat_kerja' => $id
							);
							if($data['jabatan_'.$i] != ""){
								$array['jabatan'] = $data['jabatan_'.$i];
							}
						$this->db->insert('riwayat_jabatan',$array);
						} //end of tahun masuk
					}
				else{
					$array = array(
								'sort_order' => $data['sort_order_'.$i],
								'tahun_mulai' => $data['tahun_mulai_'.$i],
								'tahun_selesai' => $data['tahun_selesai_'.$i],
								'unit' => $data['unit_'.$i],
								'id_riwayat_kerja' => $id
							);
							if($data['jabatan_'.$i] != ""){
								$array['jabatan'] = $data['jabatan_'.$i];
							}
						$this->db->where('id_riwayat_jabatan',$data['id_riwayat_jabatan_'.$i]);
						$this->db->update('riwayat_jabatan',$array);
					}
				}
			}
		}
	$pekerjaan_diluar = $this->fetchPekerjaanPegawaiDiluar($id);
		if($pekerjaan_diluar == FALSE){
			$i = 1;
			for($i;$i<=5;$i++){
				if(isset($data['tahun_diluar_'.$i])){
					if($data['tahun_diluar_'.$i] != ''){
						$array = array(
								'sort_order' => $data['sort_order_diluar_'.$i],
								'tahun' => $data['tahun_diluar_'.$i],
								'nama_instansi' => $data['nama_instansi_'.$i],
								'alasan_keluar' => $data['alasan_keluar_'.$i],
								'id_riwayat_kerja' => $id
							);
							if($data['jabatan_diluar_'.$i] != ""){
								$array['jabatan'] = $data['jabatan_diluar_'.$i];
							}
						$this->db->insert('riwayat_jabatan_diluar',$array);
					}
				}
			}
		}
		else{
			$data = $this->input->post();
			$i = 0;
			for ($i;$i<=5;$i++){
				if(isset($data['id_riwayat_jabatan_diluar'.$i])){
					if($data['id_riwayat_jabatan_diluar'.$i]==''){
						if($data['tahun_diluar_'.$i] != ''){
						$array = array(
								'sort_order' => $data['sort_order_diluar_'.$i],
								'tahun' => $data['tahun_diluar_'.$i],
								'nama_instansi' => $data['nama_instansi_'.$i],
								'alasan_keluar' => $data['alasan_keluar_'.$i],
								'id_riwayat_kerja' => $id
							);
							if($data['jabatan_diluar_'.$i] != ""){
								$array['jabatan'] = $data['jabatan_diluar_'.$i];
							}
						$this->db->insert('riwayat_jabatan_diluar',$array);
						} //end of tahun masuk
					}
				else{
						$array = array(
								'sort_order' => $data['sort_order_diluar_'.$i],
								'tahun' => $data['tahun_diluar_'.$i],
								'nama_instansi' => $data['nama_instansi_'.$i],
								'alasan_keluar' => $data['alasan_keluar_'.$i],
								'id_riwayat_kerja' => $id
							);
							if($data['jabatan_diluar_'.$i] != ""){
								$array['jabatan'] = $data['jabatan_diluar_'.$i];
							}
						$this->db->where('id_riwayat_jabatan_diluar',$data['id_riwayat_jabatan_diluar_'.$i]);
						$this->db->update('riwayat_jabatan_diluar',$array);
					}
				}
			}
		}
		$array = array(
				'jabatan' => $data['jabatan'],
				'unit_kerja' => $data['unit_kerja'],
				'unit_kerja_sebelumnya' => $data['unit_kerja_sebelumnya'],
				'mulai_tugas'=> $data['mulai_tugas'],
				'status_kepegawaian' => $data['status_kepegawaian'],
				'status_aktif'=>$data['status_aktif'],
			);
		if(isset($data['tahun_sertifikasi'])){
			$array['tahun_sertifikasi'] = $data['tahun_sertifikasi'];
		}
		if(isset($data['sertifikat'])){
			$array['sertifikasi_pendidik'] = $data['sertifikat'];
		}
		if(isset($data['calon_tetap'])){
			if($data['calon_tetap'] == ''){
				$array['pengangkatan_calon_tetap'] = '';
			}
			else{
				$array['pengangkatan_calon_tetap'] = $data['calon_tetap'];
			}
		}
		if(isset($data['tetap'])){
			if($data['tetap'] == ''){
			$array['pengangkatan_tetap'] = '';
			}
			else{
				$array['pengangkatan_tetap'] = $data['tetap'];
			}
		}
		if(isset($data['fungsi'])){
			if($data['fungsi'] == NULL){
			$array['fungsi'] = '';
			}
			else{
			$array['fungsi'] = $data['fungsi'];
			}
		}
		if(isset($data['sertifikasi'])){
			if($data['sertifikasi'] == NULL){
			$array['status_sertifikasi'] = '';
			}
			else{
				$array['status_sertifikasi'] =$data['sertifikasi'];
			}
		}

		$this->db->where('id_riwayat_kerja',$id);
		$this->db->update('riwayat_kerja',$array);
		return 1;
  }
  function fetchRiwayatJabatan($id){
  	$this->db->select('riwayat_jabatan.*');
  	$this->db->join('riwayat_kerja','riwayat_kerja.id_riwayat_kerja = riwayat_jabatan.id_riwayat_kerja');
  	$this->db->where('riwayat_kerja.id_pegawai',$id);
    $this->db->order_by('sort_order','ASC');
    $query = $this->db->get('riwayat_jabatan');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function fetchRiwayatJabatanDiluar($id){
  	$this->db->select('riwayat_jabatan_diluar.*');
  	$this->db->join('riwayat_kerja','riwayat_kerja.id_riwayat_kerja = riwayat_jabatan_diluar.id_riwayat_kerja');
  	$this->db->where('riwayat_kerja.id_pegawai',$id);
    $this->db->order_by('sort_order','ASC');
    $query = $this->db->get('riwayat_jabatan_diluar');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
}
