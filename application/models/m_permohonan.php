<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_permohonan extends CI_Model {
	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function proseslogin($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('t_login')->row();
	}

	public function insert_permohonan(){
		$no = $this->input->post('no');
		$nama = $this->input->post('nama');
		$kelompok = $this->input->post('kelompok');
		$penanggung = $this->input->post('penanggung');
		$sumber = $this->input->post('sumber');
		$judul = $this->input->post('judul');
		//$kode = $this->input->post('kode');
		$mulai = $this->input->post('mulai');
		$akhir = $this->input->post('akhir');
		$komoditas = $this->input->post('komoditas');
		$luas = $this->input->post('luas');
		$blok = $this->input->post('blok');
		$no_lahan = $this->input->post('no_lahan');
		$tanaman = $this->input->post('tanaman');
		$object = array(

				'no_permintaan'=> $no,
				'nip'=> null,
				'nm_peneliti'=> $nama,
				'klmpok_peneliti'=> $kelompok,
				'penanggung_jawab'=> $penanggung,
				'sumber_dana'=>$sumber,
				'judul_kegiatan'=> $judul,
				//'kd_kegiatan'=> $kode,
				'waktu_mulai'=>$mulai,
				'waktu_selesai'=>$akhir,
				'komoditas'=> $komoditas,
				'kd_lahan'=>null,
				'luas_lahan'=>$luas,
				'tanaman_sebelumnya'=> $tanaman,
				'keterangan'=> 'Belum Acc'
			);
		return $this->db->insert('t_permohonan',$object);

	}
public function data_permohonan(){
	return $this->db->get('t_permohonan');
}

  public function data_konfirmasi($kode,$table) {
        return $this->db->get_where($table,$kode);
    }

}
