<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkeluarga extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchKeluarga($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);

  	$this->db->join('pegawai','pegawai.id_pegawai = keluarga.id_pegawai');
    $this->db->order_by('id_keluarga','DESC');
    $query = $this->db->get('keluarga');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllkeluarga() {
    return $this->db->count_all("keluarga");
  }

  function saveKeluarga($data){
    $array = array(
			'id_pegawai' => $data['pegawai'],
        	'nama_pasangan' => $data['nama_pasangan'],
			'status_pernikahan' => $data['status_pernikahan'],
	        'pekerjaan_pasangan' => $data['pekerjaan_pasangan'],
	        'anak_kandung' => $data['anak_kandung'],
	        'bukan_anak_kandung' => $data['bukan_anak_kandung'],
			'nama_ayah' => $data['nama_ayah'],
			'nama_ibu' => $data['nama_ibu'],
			'jumlah_saudara_kandung' => $data['jumlah_saudara_kandung']
      );
    $this->db->insert('keluarga',$array);
    return $data['pegawai'];
  }
    function editKeluarga($data,$id){
      $array = array(
				'nama_pasangan' => $data['nama_pasangan'],
				'status_pernikahan' => $data['status_pernikahan'],
				'pekerjaan_pasangan' => $data['pekerjaan_pasangan'],
				'anak_kandung' => $data['anak_kandung'],
				'bukan_anak_kandung' => $data['bukan_anak_kandung'],
				'nama_ayah' => $data['nama_ayah'],
				'nama_ibu' => $data['nama_ibu'],
				'jumlah_saudara_kandung' => $data['jumlah_saudara_kandung']
        );

      $this->db->where('id_keluarga',$id);
      $this->db->update('keluarga',$array);
      return 1;
    }
		function fetchkeluargaSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->join('pegawai','pegawai.id_pegawai = keluarga.id_pegawai');
			$this->db->order_by('nama_pasangan','DESC');
	    $query = $this->db->get('keluarga');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}

		function fetchAllPegawai(){
				$query = $this->db->get('pegawai');
				if($query->num_rows()>0){
					return $query->result();
				}
				else return FALSE;
			}
	function fetchAllKeluarga(){
		$this->db->join('pegawai','pegawai.id_pegawai = keluarga.id_pegawai');
		$query = $this->db->get('keluarga');
		if($query->num_rows()>0){
			return $query->result();
		}
		else return FALSE;
	}
	function fetchKeluargaNotInput(){
		/*$pegawai = $this->fetchAllPegawai();
		$keluarga = $this->fetchAllKeluarga();

		$total_data = 0;
		$nama = array();
		$jk = array();
		$ttl = array();
		$alamat = array();
		$no_hp = array();

		if($pegawai != FALSE){ // check if pegawai is available
			$i = 1;
			foreach ($pegawai as $rows) { // looping data
				if($keluarga != FALSE){ // check if keluarga is available
					foreach ($keluarga as $rows2) { // looping data
						
					}
				} // end if $keluarga
			} // end foreach $pegawai
		} // end if $pegawai*/
		/*$sql = "
			SELECT as_pegawai.*
			FROM as_pegawai
			WHERE NOT EXISTS(select as_pegawai.* from as_pegawai INNER JOIN as_keluarga ON as_pegawai.id_pegawai = as_keluarga.id_pegawai) 
		";*/
		$sql = "
			SELECT as_pegawai.*
			FROM as_pegawai
			WHERE as_pegawai.id_pegawai NOT IN (SELECT as_keluarga.id_pegawai from as_keluarga)
			Order BY nama_lengkap ASC
		";
		$query = $this->db->query($sql);
		if($query->num_rows()>0){
			return $query->result();
		}
		else return FALSE;		
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
	function addDetailKeluarga($data,$id){
		// input data pegawai & keluarga
		$i = 1;
		$max = 7;
		for($i;$i<=7;$i++){
			if($data['nama_pegawai[$i]'] == ""){
				break;
			}
			$array = array(
				'id_pegawai' => $data['id_pegawai'],
				'nama_pegawai'=> $data['nama_pegawai[$i]'],
				'hub_keluarga' => $data['hub_keluarga[$i]'],
				'jenis_kelamin' => $data['jenis_kelamin[$i]'],
				'kandung' => $data['kandung[$i]'],
				'pekerjaan' => $data['pekerjaan[$i]']
			);
			$this->db->insert('data_keluarga',$array);
			return 1;
		}
		// input data saudara kandung

	}
	function editDetailKeluarga($data,$id){

	}
	function getAllKeluarga(){
		$this->db->join('pegawai','pegawai.id_pegawai = keluarga.id_pegawai');
		$this->db->join('riwayat_kerja','pegawai.id_pegawai = riwayat_kerja.id_pegawai');
	    $this->db->order_by('id_keluarga','DESC');
	    $query = $this->db->get('keluarga');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
}
