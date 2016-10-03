<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchUser($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);

    $this->db->order_by('date_register','DESC');
    $query = $this->db->get('user');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllUser() {
    return $this->db->count_all("user");
  }

  function saveUser($data){
    $array = array(
        'username' => $data['username'],
        'password' => md5($data['password']),
        'email' => $data['email'],
				'fullname' => $data['fullname'],
        'date_register' => date('Y-m-d H:i:s'),
        'role' => $data['role']
      );
    $this->db->insert('user',$array);
    return 1;
  }
    function editUser($data,$id){
      $array = array(
          'username' => $data['username'],
          'email' => $data['email'],
					'fullname' => $data['fullname'],
					'role' => $data['role']
        );
			if($data['password']!="")
			$array['password']=md5($data['password']);

      $this->db->where('id_user',$id);
      $this->db->update('user',$array);
      return 1;
    }
		function fetchUserSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->order_by('date_register','DESC');
	    $query = $this->db->get('user');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}
}
