<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lahan extends CI_Model {

	  function get_lahan(){
		$hasil=$this->db->query("SELECT * FROM t_lahan");
		return $hasil;
	}

	function get_no($id){
		$hasil=$this->db->query("SELECT * FROM t_lahan WHERE blok='$id' ORDER BY nomor ASC");
		return $hasil->result();
	}

	function get_luas($id,$no){
		$hasil=$this->db->query("SELECT * FROM t_lahan WHERE blok='$id' AND nomor='$no'");
		return $hasil->result();
	}

  public function dataLahan(){
    return $this->db->query('SELECT * FROM t_blok')->result();
  }

  public function dataLuasLahan(){
    return $this->db->query('SELECT * FROM t_lahan')->result();
  }

  public function getLahan(){
    return $this->db->get('t_lahan');
  }

}
