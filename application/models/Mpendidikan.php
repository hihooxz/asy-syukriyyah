<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpendidikan extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchPendidikan($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);

  	$this->db->join('pegawai','pegawai.id_pegawai = pendidikan.id_pegawai');
    $this->db->order_by('id_pendidikan','DESC');
    $query = $this->db->get('pendidikan');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllPendidkan() {
    return $this->db->count_all("pendidikan");
  }
  function fetchPendidikanNotInput(){
		$sql = "
			SELECT as_pegawai.*
			FROM as_pegawai
			WHERE as_pegawai.id_pegawai NOT IN (SELECT as_pendidikan.id_pegawai from as_pendidikan)
			Order BY nama_lengkap ASC
		";
		$query = $this->db->query($sql);
		if($query->num_rows()>0){
			return $query->result();
		}
		else return FALSE;		
	}
	function savePendidikan($data){
		$array = array(
				'id_pegawai' => $data['pegawai'],
				'pendidikan_terakhir' => $data['pendidikan_terakhir'],
				'nama_pt' => $data['nama_pt'],
				'pendidikan_ditempuh' => $data['pendidikan_ditempuh'],
				'nama_pt_pd' => $data['nama_pt_pd'],
				'program_pd' => $data['program_pd'],
				'jurusan_pd' => $data['jurusan_pd'],
				'tahun_masuk_pd' => $data['tahun_masuk_pd'],
			);
		$this->db->insert('pendidikan',$array);
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
	function editPendidikan($data,$id){
		$array = array(
				'pendidikan_terakhir' => $data['pendidikan_terakhir'],
				'nama_pt' => $data['nama_pt'],
				'pendidikan_ditempuh' => $data['pendidikan_ditempuh'],
				'nama_pt_pd' => $data['nama_pt_pd'],
				'program_pd' => $data['program_pd'],
				'jurusan_pd' => $data['jurusan_pd'],
				'tahun_masuk_pd' => $data['tahun_masuk_pd'],
			);
		$this->db->where('id_pendidikan',$id);
		$this->db->update('pendidikan',$array);
		return 1;
	}
	function getPendidikan($id){
		$this->db->where('id_pendidikan',$id);
		$this->db->join('pegawai','pegawai.id_pegawai = pendidikan.id_pegawai');
	    $query = $this->db->get('pendidikan');
	    if($query->num_rows()>0){
	      return $query->row_array();
	    }
	    else return FALSE;
	}
	function getAllPendidikan() {
	$this->db->join('pegawai','pegawai.id_pegawai = pendidikan.id_pegawai');
	$this->db->join('riwayat_kerja','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
    $this->db->order_by('id_pendidikan','DESC');
    $query = $this->db->get('pendidikan');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
}
