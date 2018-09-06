<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_permohonan extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_permohonan');
	}

	public function masuk(){
		$nip_user = $this->session->userdata('loger');
		$data['pegawai'] = $this->M_permohonan->dataPemohon($nip_user);
		$data['blok'] = $this->M_permohonan->dataLahan();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kelompok', 'kelompok', 'required');
    $this->form_validation->set_rules('penanggung', 'penanggung', 'required');

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('v_permohonan',$data);
                }
                else
                {
                        $this->M_permohonan->insert_permohonan();
												$this->load->view('v_dPeneliti');
                }
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}


	public function tampil_konfirmasi()
	{
		$id = array(
				'no_permohonan' => $this->input->get('id')
			);
			$data['detail'] = $this->M_permohonan->data_konfirmasi($id,'t_permohonan')->result();
			$this->load->view('v_konfirmasi',$data);
	}

	public function tampil_detail()
	{
			$id = array(
				'no_permohonan' => $this->input->get('id')
			);
			$data['detail'] = $this->M_permohonan->data_konfirmasi($id,'t_permohonan')->result();
			$this->load->view('v_dataPermohonan',$data);
	}

	public function get_detail($id)
    {
        $data = $this->M_permohonan->get_data_permohonan($id);
        echo json_encode($data);
    }

}
