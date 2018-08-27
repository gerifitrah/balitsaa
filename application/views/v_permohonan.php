<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.css'); ?>">

	<title>Form Pengajuan</title>
</head>
<body>
  <?php echo validation_errors(); ?>
  <?php foreach ($pegawai as $peg):?>
		<form style="width: 500px;" method="POST" action="<?= base_url('index.php/c_permohonan/masuk'); ?>">
		  <div class="form-group">
		    <label>No. Permohonan</label>
		    <input  class="form-control" id="no" name="no" placeholder="No Secara Otomatis" readonly>
		  </div>
		  <div class="form-group">
		    <label>Nama Peneliti</label>
		    <input  class="form-control" id="nama" name="nama" value="<?= $peg->nm_peneliti?>" readonly>
		  </div>
			<div class="form-group">
				<label>NIP</label>
				<input  class="form-control" id="nip" name="nip" value="<?= $peg->nip?>" readonly>
			</div>
			<?php endforeach;?>
		  <div class="form-group">
		    <label>Kelompok Peneliti</label>
		    <input  class="form-control" id="kelompok" name="kelompok" value="<?php echo set_value('kelompok');?>">
		  </div>
		  <div class="form-group">
		    <label>Penanggung Jawab Di Lapangan</label>
		    <input  class="form-control" id="penanggung" name="penanggung" value="<?php echo set_value('penanggung');?>">
		  </div>
		  <div class="form-group">
		    <label>Sumber Dana</label>
		  		<select class="form-control" id="sumber" name="sumber" >
		    		<option>Pilih Sumber Dana</option>
		    		<option value="DIPA">DIPA</option>
		    		<option value="ON TOP">ON TOP</option>
		 		 </select>
		  </div>
		  <div class="form-group">
		    <label>Judul Kegiatan</label>
		    <input  class="form-control" id="judul" name="judul" value="<?php echo set_value('judul');?>">
		  </div>
		  <div class="form-group">
		    <label>Kode Kegiatan</label>
		    <input  class="form-control" id="kode" name="kode" value="<?php echo set_value('kode');?>">
		  </div>
		  <div class="form-group">
		  	 <label>Waktu Kegiatan Berakhir</label>

		            <div class='input-group date' id='datetimepicker6'>
		                <input type='date' class="form-control" name="mulai" />
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
		  </div>
		  <div class="form-group">
		  	<label>Waktu Kegiatan Berakhir</label>
		        <div class='input-group date' id='datetimepicker7'>
		                <input type='date' class="form-control" name="akhir" />
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
		  </div>
		  <div class="form-group">
		    <label>Komoditas</label>
		    <input  class="form-control" id="komoditas" name="komoditas" value="<?php echo set_value('komoditas');?>">
		  </div>
		  <div class="form-group">
		    <label>Luas Lahan</label>
		    <input  class="form-control" id="luas" name="luas">
		  </div>
		  <div class="form-group">
		    <label>Lokasi Lahan</label>
		  		<select class="form-control" id="blok" name="blok">
		    		<option>Blok</option>
		    		<?php foreach ($blok as $bl):
		           echo '<option value="'.$bl->blok.'">'.$bl->blok.'</option>';

		         endforeach; ?>
		     </select><br>
		 		 <select class="form-control" id="no_lahan" name="no_lahan">
		    		<option>No</option>
		    		<?php foreach ($blok as $bl):
		           echo '<option value="'.$bl->no.'">'.$bl->no.'</option>';

		         endforeach; ?>
		 		 </select>
		  </div>
		  <div class="form-group">
		    <label>Tanaman Sebelumnya</label>
		    <input  class="form-control" id="tanaman" name="tanaman">
		  </div>
		  <button type="submit" class="btn btn-primary" value="Simpan"> Simpan</button>
		</form>
</body>
</html>
