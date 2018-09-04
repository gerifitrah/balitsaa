<!DOCTYPE html>
<html>
<head>
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
	<div style="overflow-x:auto;">
	<table border="2" >
		<thead>
			<tr>
				<th>No</th>
				<th>No permohonan</th>
				<th>NIP</th>
				<th>Nama Peneliti</th>
				<th>Judul Kegitan</th>
				<th>Komuditas</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1;
				foreach($laporan as $permohonan):?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?= $permohonan->no_permohonan?></td>
				<td><?= $permohonan->nip?></td>
				<td><?= $permohonan->nm_peneliti?></td>
				<td><?= $permohonan->judul_kegiatan?></td>
				<td><?= $permohonan->komoditas?></td>
				<td><a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Detail" onclick="get_data(<?= $permohonan->no_permohonan ?>)"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
			</tr>
			<?php $no++; endforeach; ?>
		</tbody>
	</table>
</div>
		<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">No. Permohonan</label>
                            <div class="col-md-9">
                                <input name="no" id="no" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Peneliti</label>
                            <div class="col-md-9">
                                <input name="nama" id="nama" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">NIP</label>
                            <div class="col-md-9">
                                <input name="nip" id="nip" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kelompok Peneliti</label>
                            <div class="col-md-9">
                                <input name="kelompok" id="kelompok" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Penanggung Jawab Di Lapangan</label>
                            <div class="col-md-9">
                                <input name="penanggung" id="penanggung" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Sumber Dana</label>
                            <div class="col-md-9">
                                <input name="sumber" id="sumber" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Judul Kegiatan</label>
                            <div class="col-md-9">
                                <input name="judul" id="judul" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kode Kegiatan</label>
                            <div class="col-md-9">
                                <input name="kode" id="kode" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Waktu Kegiatan Di Mulai</label>
                            <div class="col-md-9">
                                <input name="mulai" id="mulai" class="form-control" type="date" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Waktu Kegiatan Berakhir</label>
                            <div class="col-md-9">
                                <input name="berakhir" id="berakhir" class="form-control" type="date" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Komoditas</label>
                            <div class="col-md-9">
                                <input name="komoditas" id="komoditas" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Lokasi Lahan</label>
                            <div class="col-md-9">
                            	<label>Blok</label>
                                <input name="blok" id="blok" class="form-control" type="text" disabled>
                                <label>Nomor</label>
                                <input name="nomor" id="nomor" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Luas Lahan</label>
                            <div class="col-md-9">
                                <input name="luas" id="luas" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanaman Sebelumnya</label>
                            <div class="col-md-9">
                                <input name="sebelum" id="sebelum" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Keterangan</label>
                            <div class="col-md-9">
                                <input name="keterangan" id="keterangan" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
<script src="<?php echo base_url('asset/js/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
<script>
	function get_data(id)
	{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
 
    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('C_permohonan/get_detail/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="no"]').val(data[0].no_permohonan);
            $('[name="nama"]').val(data[0].nm_peneliti);
            $('[name="nip"]').val(data[0].nip);
            $('[name="kelompok"]').val(data[0].klmpok_peneliti);
            $('[name="penanggung"]').val(data[0].penanggung_jawab);
            $('[name="sumber"]').val(data[0].sumber_dana);
            $('[name="judul"]').val(data[0].judul_kegiatan);
            $('[name="kode"]').val(data[0].kd_kegiatan);
            $('[name="mulai"]').val(data[0].waktu_mulai);
            $('[name="berakhir"]').val(data[0].waktu_selesai);
            $('[name="komoditas"]').val(data[0].komoditas);
            $('[name="blok"]').val(data[0].blok);
            $('[name="nomor"]').val(data[0].no_lahan);
            $('[name="luas"]').val(data[0].luas_lahan);
            $('[name="sebelum"]').val(data[0].tanaman_sebelumnya);
            $('[name="keterangan"]').val(data[0].keterangan);
             $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
             $('.modal-title').text('Detail Permohonan'); // Set title to Bootstrap modal title
            console.log(data);
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
</script>
</body>
</html>
