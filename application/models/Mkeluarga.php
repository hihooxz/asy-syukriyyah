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
	public function fetchDataKeluarga($id){
		//$this->db->order_by('hub_keluarga','ASC');
		$this->db->where('id_keluarga',$id);
		$this->db->order_by('sort_order','ASC');
	    $query = $this->db->get('data_keluarga');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	public function fetchSaudaraKandung($id){
		$this->db->where('id_keluarga',$id);
		$this->db->order_by('sort_order','ASC');
	    $query = $this->db->get('saudara_kandung');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	public function fetchSaudaraKandungPegawai($id){
		$this->db->select('saudara_kandung.*');
		$this->db->join('keluarga','keluarga.id_keluarga = saudara_kandung.id_keluarga');
		$this->db->join('pegawai','keluarga.id_pegawai = pegawai.id_pegawai');
		$this->db->where('keluarga.id_pegawai',$id);
		$this->db->order_by('sort_order','ASC');
	    $query = $this->db->get('saudara_kandung');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
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
		$data_keluarga = $this->fetchDataKeluarga($id);
		if($data_keluarga == FALSE){
			$i = 1;
			// input parent
			for($i=1;$i<=2;$i++){
				if(isset($data['nama_pegawai_'.$i])){
					if($data['nama_pegawai_'.$i] != ''){
						$array = array(
								'id_keluarga' => $id,
								'nama_anggota' => $data['nama_pegawai_'.$i],
								'hub_keluarga' => $data['hub_keluarga_'.$i],
								'sort_order' => $data['sort_order_'.$i],
								'jenis_kelamin' => $data['jenis_kelamin_'.$i],
								'kandung' => $data['kandung_'.$i],
							);
							if(isset($data['pekerjaan_'.$i])){
								if($data['pekerjaan_'.$i] != ""){
									$array['pekerjaan'] = $data['pekerjaan_'.$i];
								}
							}
						$this->db->insert('data_keluarga',$array);
					}
				}
			}
			// input children
			for($i=1;$i<=5;$i++){
				if(isset($data['nama_anak_'.$i])){
					if($data['nama_anak_'.$i] != ''){
						$array = array(
								'id_keluarga' => $id,
								'nama_anggota' => $data['nama_anak_'.$i],
								'hub_keluarga' => 2,
								'sort_order' => $data['sort_order_anak_'.$i],
								'jenis_kelamin' => $data['jenis_kelamin_anak_'.$i],
								'kandung' => $data['status_anak_'.$i],
							);
							if(isset($data['pekerjaan_'.$i])){
								if($data['pekerjaan_'.$i] != ""){
									$array['pekerjaan'] = $data['pekerjaan_'.$i];
								}
							}
						$this->db->insert('data_keluarga',$array);
					}
				}
			}
		}
		else{
			$data = $this->input->post();
			for($i=1;$i<=2;$i++){
				if(isset($data['id_data_keluarga_'.$i])){
					if($data['id_data_keluarga_'.$i]==''){
						if(isset($data['nama_pegawai_'.$i])){
							if($data['nama_pegawai_'.$i] != ''){
								$array = array(
										'id_keluarga' => $id,
										'nama_anggota' => $data['nama_pegawai_'.$i],
										'hub_keluarga' => $data['hub_keluarga_'.$i],
										'sort_order' => $data['sort_order_'.$i],
										'jenis_kelamin' => $data['jenis_kelamin_'.$i],
										'kandung' => $data['kandung_'.$i],
									);
									if(isset($data['pekerjaan_'.$i])){
										if($data['pekerjaan_'.$i] != ""){
											$array['pekerjaan'] = $data['pekerjaan_'.$i];
										}
									}
								$this->db->insert('data_keluarga',$array);
							}
						}
					}
					else{
						$array = array(
										'id_keluarga' => $id,
										'nama_anggota' => $data['nama_pegawai_'.$i],
										'hub_keluarga' => $data['hub_keluarga_'.$i],
										'sort_order' => $data['sort_order_'.$i],
										'jenis_kelamin' => $data['jenis_kelamin_'.$i],
										'kandung' => $data['kandung_'.$i],
									);
									if(isset($data['pekerjaan_'.$i])){
										if($data['pekerjaan_'.$i] != ""){
											$array['pekerjaan'] = $data['pekerjaan_'.$i];
										}
									}
								$this->db->where('id_data_keluarga',$data['id_data_keluarga_'.$i]);
								$this->db->update('data_keluarga',$array);
					}
				}
			}
			for($i=1;$i<=5;$i++){
					if($data['id_data_keluarga_anak_'.$i]=='-'){
						if(isset($data['nama_anak_'.$i])){
							if($data['nama_anak_'.$i] != ''){
								$array = array(
										'id_keluarga' => $id,
										'nama_anggota' => $data['nama_anak_'.$i],
										'hub_keluarga' => 2,
										'sort_order' => $data['sort_order_anak_'.$i],
										'jenis_kelamin' => $data['jenis_kelamin_anak_'.$i],
										'kandung' => $data['status_anak_'.$i],
									);
								if(isset($data['pekerjaan_anak_'.$i])){
									if($data['pekerjaan_anak_'.$i] != ""){
											$array['pekerjaan'] = $data['pekerjaan_anak_'.$i];
										}
								}
								$this->db->insert('data_keluarga',$array);
							}
						}
					}
					else{
						$array = array(
										'id_keluarga' => $id,
										'nama_anggota' => $data['nama_anak_'.$i],
										'hub_keluarga' => 2,
										'sort_order' => $data['sort_order_anak_'.$i],
										'jenis_kelamin' => $data['jenis_kelamin_anak_'.$i],
										'kandung' => $data['status_anak_'.$i],
									);
									if(isset($data['pekerjaan_anak_'.$i])){
										if($data['pekerjaan_anak_'.$i] != ""){
												$array['pekerjaan'] = $data['pekerjaan_anak_'.$i];
											}
									}
								$this->db->where('id_data_keluarga',$data['id_data_keluarga_anak_'.$i]);
								$this->db->update('data_keluarga',$array);
					}
			}
		}
		$saudara_kandung = $this->fetchSaudaraKandung($id);
		if($saudara_kandung == FALSE){
			$i = 1;
			for($i=1;$i<=3;$i++){
				if(isset($data['id_saudara_kandung_'.$i])){
					if($data['id_saudara_kandung_'.$i] == '-'){
						if($data['nama_sk_'.$i] != ''){
							$array = array(
									'nama_saudara_kandung' => $data['nama_sk_'.$i],
									'jenis_kelamin' => $data['jenis_kelamin_sk_'.$i],
									'pekerjaan' => $data['pekerjaan_sk_'.$i],
									'sort_order' => $data['sort_order_sk_'.$i],
									'alamat' => $data['alamat_sk_'.$i],
									'id_keluarga' => $id
								);
								if(isset($data['ttl_sk_'.$i])){
									if($data['ttl_sk_'.$i] != ""){
										$array['tanggal_lahir'] = $data['ttl_sk_'.$i];
									}
								}
							$this->db->insert('saudara_kandung',$array);
						}
					}
				}
			}
		}
		else{
			$data = $this->input->post();
			$i = 0;
			for ($i=1;$i<=3;$i++){
					if($data['id_saudara_kandung_'.$i] == '-'){
						if($data['nama_sk_'.$i] != ''){
							$array = array(
									'nama_saudara_kandung' => $data['nama_sk_'.$i],
									'jenis_kelamin' => $data['jenis_kelamin_sk_'.$i],
									'sort_order' => $data['sort_order_sk_'.$i],
									'alamat' => $data['alamat_sk_'.$i],
									'id_keluarga' => $id
								);
								if(isset($data['ttl_sk_'.$i])){
									if($data['ttl_sk_'.$i] != ""){
										$array['tanggal_lahir'] = $data['ttl_sk_'.$i];
									}
								}
								if(isset($data['pekerjaan_sk_'.$i])){
									if($data['pekerjaan_sk_'.$i] != ""){
										$array['pekerjaan'] = $data['pekerjaan_sk_'.$i];
									}
								}
							$this->db->insert('saudara_kandung',$array);
							}
					} //end of id_saudara_kandung_
					else{
						$array = array(
									'nama_saudara_kandung' => $data['nama_sk_'.$i],
									'jenis_kelamin' => $data['jenis_kelamin_sk_'.$i],
									'sort_order' => $data['sort_order_sk_'.$i],
									'alamat' => $data['alamat_sk_'.$i],
									'id_keluarga' => $id
							);
							if(isset($data['ttl_sk_'.$i])){
								if($data['ttl_sk_'.$i] != ""){
									$array['tanggal_lahir'] = $data['ttl_sk_'.$i];
								}
							}
							if(isset($data['pekerjaan_sk_'.$i])){
								if($data['pekerjaan_sk_'.$i] != ""){
									$array['pekerjaan'] = $data['pekerjaan_sk_'.$i];
								}
							}
							$this->db->where('id_saudara_kandung',$data['id_saudara_kandung_'.$i]);
							$this->db->update('saudara_kandung',$array);
					}
			}
		}
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
