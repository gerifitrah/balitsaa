<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {
  public function index(){
    return $this->db->query('select * from t_permohonan where status=0')->result();
  }
}
