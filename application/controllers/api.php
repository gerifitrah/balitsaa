<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {

  public function __construct(){

		parent::__construct();
		$this->load->model('m_api');
	}

  public function index() {
    $data = $this->m_api->index();
    // $this->load->view('v_dAdmin',$data);
    echo json_encode($data,TRUE);
    //print_r($data);
  }

}
?>
