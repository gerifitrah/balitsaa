<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/index.css'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<title></title>
<style>
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}

main {
    flex: 1 0 auto;
}
.topnav {
	float: right;
overflow: hidden;
height: 65px;

}

		/* Change color on hover */
.topnav a {
    float: left;
    display: block;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ccc;
    color: black;
}
/* Create two unequal columns that floats next to each other */
/* Left column */

	</style>
		<body>
	    <div id="divWrapper">
	      <div class="sideBar">
	        <div class="sideBarFixed">
	          <div class="topNav">
	            <h1>Balitsa</h1>
	          </div>
	          <div class="sideNav">
	            <nav>
	              <div class="sideList">
	                <ul>
										<li> <a href="<?= base_url('index.php/search/tampil_admin')?>">Home</a> </li>
										<li> <a href="<?= base_url('index.php/search/tampil_pengguna')?>">User</a> </li>
										<li> <a href="<?= base_url('index.php/search/tampil_lahan')?>">Lahan</a> </li>
										<li> <a href="<?= base_url('index.php/search/tampil_permohonan')?>">Konfirmasi</a> </li>
										<li> <a href="<?= base_url('index.php/C_logout/logout')?>">Logout</a> </li>
	                </ul>
	              </div>
	            </nav>
	          </div>
	        </div>
	      </div>
	      <div class="content">
	        <div class="topNav">
	          <h1>Form Konfirmasi</h1>
	        </div>
    	< <div class="formPermohonan">
	            <h2 class="formHeader">Form Permohonan</h2>
	            <form class="" method="post" action="<?= base_url('index.php/c_permohonan/masuk'); ?>">
			<?php foreach ($detail as $b) :?>
			<div class="form-group">
		    <label>No. Permohonan</label>
		    <input  class="form-control" value="<?= $b->no_permohonan?>" disabled>
		  </div>
			<div class="form-group">
			 <label>NIP</label>
			 <input  class="form-control" id="nip" name="nip" value="<?= $b->nip?>" disabled>
		 </div>
		  <div class="form-group">
		    <label>Nama Peneliti</label>
		    <input  class="form-control" id="nama" name="nama" value="<?= $b->nm_peneliti?>" disabled>
		  </div>
		  <div class="form-group">
		    <label>Kelompok Peneliti</label>
		    <input  class="form-control" id="kelompok" name="kelompok" value="<?= $b->klmpok_peneliti?>" disabled>
		  </div>
		  <div class="form-group">
		    <label>Penanggung Jawab Di Lapangan</label>
		    <input  class="form-control" id="penanggung" name="penanggung" value="<?= $b->penanggung_jawab?>" disabled>
		  </div>
		  <div class="form-group">
		    <label>Sumber Dana</label>
				<input  class="form-control" id="dana" name="dana" value="<?= $b->sumber_dana?>" disabled>
		 		 </select>
		  </div>
		  <div class="form-group">
		    <label>Judul Kegiatan</label>
		    <input  class="form-control" id="judul" name="judul" value="<?= $b->judul_kegiatan?>" disabled >
		  </div>
		  <div class="form-group">
		    <label>Kode Kegiatan</label>
		    <input  class="form-control" id="kode" name="kode" value="<?= $b->kd_kegiatan?>" disabled>
		  </div>
		   <div class="form-group">
		  <label>Waktu Kegiatan Berakhir</label>
			<input  class="form-control" id="waktu_mulai" name="waktu_mulai" value="<?= $b->waktu_mulai?>" disabled>
		  </div>
		  <div class="form-group">
		  <label>Waktu Kegiatan Berakhir</label>
			<input  class="form-control" id="waktu_selesai" name="waktu_selesai" value="<?= $b->waktu_selesai?>" disabled>
		  </div>
		  <div class="form-group">
		    <label>Komoditas</label>
		    <input  class="form-control" id="komoditas" name="komoditas" value="<?= $b->komoditas?>" disabled>
		  </div>
			<div class="form-group">
				<label>Kode Lahan</label>
				<input  class="form-control" id="kd_lahan" name="kd_lahan" value="<?= $b->kd_lahan?>" disabled>
			</div>
		  <div class="form-group">
		    <label>Luas Lahan</label>
		    <input  class="form-control" id="luas" name="luas" value="<?= $b->luas_lahan?>" disabled>
		  </div>
		  <!-- <div class="form-group">
		    <label>Lokasi Lahan</label>
		  </div> -->
		  <div class="form-group">
		    <label>Tanaman Sebelumnya</label>
		    <input  class="form-control" id="tanaman" name="tanaman" value="<?= $b->tanaman_sebelumnya?>" disabled>
		  </div>
			<div class="form-group">
		    <label>Keterangan</label>
		    <input  class="form-control" id="tanaman" name="tanaman" value="<?= $b->keterangan?>" disabled>
		  </div>
       <?php  endforeach; ?>
			<a href="<?php echo site_url('search/tampil_permohonan') ?>">back</a>
  </form>
</body>
</html>
