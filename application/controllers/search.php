<?php
	defined('BASEPATH') or die('not allowed direct access script');

	class Search extends Ci_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('m_permohonan');
			$this->load->helper('url');

		}

	public function tampil(){
		$this->load->helper('url');
		$this->load->view('v_permohonan');
	}

	public function tampil_admin(){
		$data['data']= $this->m_permohonan->data_permohonan()->result_array();
		$this->load->helper('url');
		$this->load->view('v_dataPermohonan',$data);
	}
}
