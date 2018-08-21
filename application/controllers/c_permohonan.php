<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_permohonan extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_permohonan');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('v_login');
	}

		public function login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$otoritas = $this->input->post('otorisasi');
		$cek = $this->m_permohonan->proseslogin($username,$password,$otoritas);
		$hasil=count($cek);

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			redirect('c_permohonan/index')	;
		}
		else
		{
			if ($hasil>0) {
				if($otoritas == 'peneliti'){
						$select = $this->db->get_where('t_login',array('username'=>$username, 'password'=>$username,'otoritas'=>$otoritas))->row();
						$data = array('logged_in' =>true ,'loger'=> $select->nama );
						$this->session->set_userdata($data);

						redirect('search/tampil')	;

			} else if($otoritas == 'admin'){
					$select = $this->db->get_where('t_login',array('username'=>$username, 'password'=>$username,'otoritas'=>$otoritas))->row();
					$data = array('logged_in' =>true ,'loger'=> $select->nama );
					$this->session->set_userdata($data);

					redirect('search/tampil_admin');

			}
		}

	}

	}

	public function masuk(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			redirect('v_permohonan',$data)	;
		}
		else
		{
			$this->m_permohonan->insert_permohonan();
		}

	}

	public function tampil_konfirmasi(){
	$id = array(
			'no' => $this->input->get('id')
		);
		$data['detail'] = $this->m_permohonan->data_konfirmasi($id,'t_permohonan')->result();
		$this->load->view('v_konfirmasi',$data);
	}

}
