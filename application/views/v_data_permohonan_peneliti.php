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
				<td><input type="button" name="view" value="view" id="<?php echo $permohonan->no_permohonan ?>" onClick="reply_click(this.id)"/></td>
			<td><a class='btn' href="<?= base_url('index.php/c_permohonan/tampil_konfirmasi?id='.$permohonan->no_permohonan); ?>">Detail</a></td>
			</tr>
			<?php $no++; endforeach; ?>
		</tbody>
	</table>
</div>
</body>
</html>
