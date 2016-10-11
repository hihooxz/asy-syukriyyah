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

	function fetchPendidikanFormal($id) {
    $this->db->where('pendidikan_formal.id_pendidikan',$id);
  	$this->db->join('pendidikan','pendidikan_formal.id_pendidikan_normal = pendidikan.id_pendidikan');
		$this->db->order_by('tingkat','ASC');
    $query = $this->db->get('pendidikan_formal');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
	function fetchPendidikanNonFormal($id) {
    $this->db->where('diutus',1);
		$this->db->where('nonformal.id_pendidikan',$id);
  	$this->db->join('pendidikan','nonformal.id_nonformal = pendidikan.id_pendidikan');
		$this->db->order_by('tahun','ASC');
    $query = $this->db->get('nonformal');
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
	function editDetailPendidikan($data,$id){
		$formal = $this->fetchPendidikanFormal($id);
		if($formal == FALSE){
			$i = 1;
			for($i;$i<=10;$i++){
				if(isset($data['tahun_masuk'.$i])){
					if($data['tahun_masuk'.$i] != ''){
						$array = array(
								'tingkat' => $data['tingkat'.$i],
								'tahun_masuk' => $data['tahun_masuk'.$i],
								'tahun_selesai' => $data['tahun_selesai'.$i],
								'nama_instansi' => $data['nama_instansi'.$i],
								'id_pendidikan' => $id
							);
							if($data['jurusan'.$i] != ""){
								$array['jurusan'] = $data['jurusan'.$i];
							}
						$this->db->insert('pendidikan_formal',$array);
					}
				}
			}
		}
		else{
			$data = $this->input->post();
			$i = 0;
			for ($i;$i<=10;$i++){
				if(isset($data['id_formal'.$i])){
					if($data['id_formal'.$i]==''){
						if($data['tahun_masuk'.$i] != ''){
						$array = array(
								'tingkat' => $data['tingkat'.$i],
								'tahun_masuk' => $data['tahun_masuk'.$i],
								'tahun_selesai' => $data['tahun_selesai'.$i],
								'nama_instansi' => $data['nama_instansi'.$i],
								'id_pendidikan' => $id
							);
							if($data['jurusan'.$i] != ""){
								$array['jurusan'] = $data['jurusan'.$i];
							}
						$this->db->insert('pendidikan_formal',$array);
						} //end of tahun masuk
					}
				else{
					$array = array(
						'tingkat' => $data['tingkat'.$i],
						'tahun_masuk' => $data['tahun_masuk'.$i],
						'tahun_selesai' => $data['tahun_selesai'.$i],
						'nama_instansi' => $data['nama_instansi'.$i],
						'jurusan' => $data['jurusan'.$i],
						'id_pendidikan' => $id
						);
						$this->db->where('id_pendidikan_normal',$data['id_formal'.$i]);
						$this->db->update('pendidikan_formal',$array);
					}
				}
			}
		}

		$nonformal = $this->fetchPendidikanNonFormal($id);
		if($nonformal == FALSE){
			$i = 1;
			for($i;$i<=5;$i++){
				$array = array(
						'sort_order' => $data['sort_order'.$i],
						'tahun' => $data['tahun'.$i],
						'lamanya' => $data['lamanya'.$i],
						'lembaga' => $data['lembaga'.$i],
						'jenis' => $data['jenis'.$i],
						'diutus' => 1,
						'id_pendidikan' => $id
					);
				$this->db->insert('nonformal',$array);
			}
		}
		else{
			$data = $this->input->post();
			$i = 1;
			for ($i;$i<=5;$i++){
				if(isset($data['id_nonformal'.$i])){
					if($data['id_nonformal'.$i]==''){
						if($data['tahun'.$i] != ''){
						$array = array(
							'sort_order' => $data['sort_order'.$i],
							'tahun' => $data['tahun'.$i],
							'lamanya' => $data['lamanya'.$i],
							'lembaga' => $data['lembaga'.$i],
							'jenis' => $data['jenis'.$i],
							'diutus' => 1,
							'id_pendidikan' => $id
							);
						$this->db->insert('nonformal',$array);
						}
					}
				else{
					$array = array(
						'sort_order' => $data['sort_order'.$i],
						'tahun' => $data['tahun'.$i],
						'lamanya' => $data['lamanya'.$i],
						'lembaga' => $data['lembaga'.$i],
						'jenis' => $data['jenis'.$i],
						'diutus' => 1,
						'id_pendidikan' => $id
					);
						$this->db->where('id_nonformal',$data['id_nonformal'.$i]);
						$this->db->update('nonformal',$array);
					}
				}
			}
		}

		// nonformal diutus
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
	function getDetailPendidikan($id){
		//$this->db->where('id_pendidikan',$id);
		$this->db->join('pendidikan','pendidikan_formal.id_pendidikan_normal = pendidikan.id_pendidikan');
	    $query = $this->db->get('pendidikan_formal');
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
