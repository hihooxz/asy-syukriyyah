<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keluarga extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mkeluarga','mkl');
    $this->load->library('pagination');
	}

  

}

?>
