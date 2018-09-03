<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/materialize.css'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<nav class="navbar navbar-inverse">
	 	    <div class="container-fluid">
	 	     <div class="navbar-header">
	 	      <a class="navbar-brand" href="<?= base_url('index.php/search/tampil_peneliti')?>">Home</a>
	 	      <a class="navbar-brand" href="<?= base_url('index.php/search/data_permohonan_user')?>">History</a>
	 	      <a class="navbar-brand" href="<?= base_url('index.php/search/tampil')?>">Permohonan</a>
	 	      <a class="navbar-brand" href="<?= base_url('index.php/c_permohonan/logout')?>">logout</a>
	 	     </div>
	 	     <ul class="nav navbar-nav navbar-right">
	 	      <li class="dropdown">
	 	       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
	 	       <ul class="dropdown-menu"></ul>
	 	      </li>
	 	     </ul>
	 	    </div>
	 	   </nav>
<br>
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
		    <label>Lokasi Lahan</label>
		  		<select class="form-control" id="blok" name="blok">
		    		<option>Blok</option>
		    		<option value="A">A</option>
		    		<option value="B">B</option>
		    		<option value="C">C</option>
		    		<option value="D">D</option>
		    		<option value="E">E</option>
		    		<option value="F1">F1</option>
		    		<option value="F2">F2</option>
		     </select><br>
		 		 <select class="form-control" id="no_lahan" name="no_lahan">
		    		<option value="">No</option>
		 		 </select>
		  </div>
		  <div class="form-group">
		    <label>Luas Lahan</label>
		    <input  class="form-control" id="luas" name="luas">
		  </div>
		  <div class="form-group">
		    <label>Tanaman Sebelumnya</label>
		    <input  class="form-control" id="tanaman" name="tanaman">
		  </div>
		  <button type="submit" class="btn btn-primary" value="Simpan"> Simpan</button>
		</form>

<script type="text/javascript" src="<?php echo base_url().'asset/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#blok').change(function(){
			var id=$(this).val();
			$.ajax({
				url : "<?php echo base_url();?>index.php/api/get_nomor",
				method : "POST",
				data : {'id': id},
		        dataType : 'json',
				success: function(data){
					var hasil = '';
		            var i;
		            console.log(data);
		            for(i=0; i<data.length; i++){
		                hasil += '<option>'+data[i].nomor+'</option>';
		            }
		            $('#no_lahan').html(hasil);
					
				}
			});
		});
		$('#no_lahan').change(function(){
			var no=$(this).val();
			var id=$('#blok').val();
			$.ajax({
				url : "<?php echo base_url();?>index.php/api/get_luas",
				method : "POST",
				data : {'id': id,'no':no},
		        dataType : 'json',
				success: function(data){
					var hasil = '';
		            var i;
		            console.log(data);
		             for(i=0; i<data.length; i++){
		                $("#luas").val(data[i].luas);
		                // alert('sd');
		            }
		            // $('#luas').html(hasil);
				}
			});
		});
	});
</script>
</body>
</html>
