<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/materialize.css'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		 <div class="navbar-header">
			<a class="navbar-brand " href="<?= base_url('index.php/search/tampil_admin')?>">Home</a>
		 </div>
		 <ul class="nav navbar-nav">
			 <li class="active"><a class="navbar-brand" href="<?= base_url('index.php/search/tampil_pengguna')?>">User</a></li>
			 <li ><a class="navbar-brand" href="<?= base_url('index.php/search/tampil_lahan')?>">Lahan</a></li>
			 <li><a class="navbar-brand" href="<?= base_url('index.php/search/tampil_permohonan')?>">Konfirmasi</a></li>
		 </ul>
		 <ul class="nav navbar-nav navbar-right">
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
						<ul class="dropdown-menu"></ul>
				</li> -->
				<li><a class="navbar-brand" href="<?= base_url('index.php/c_permohonan/logout')?>">logout</a></li>
		 </ul>
		</div>
	</nav>

	<div style="overflow-x:auto;">
	<table border="2" >
		<thead>
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>UserName</th>
				<th>Password</th>
				<th>Otoritas</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1;
				foreach($data as $Pengguna):?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $Pengguna['nip']; ?></td>
				<td><?php echo $Pengguna['username']; ?></td>
				<td><?php echo $Pengguna['password']; ?></td>
				<td><?php echo $Pengguna['otoritas']; ?></td>
			</tr>
			<?php $no++; endforeach; ?>
		</tbody>
	</table>
</div>

</body>
</html>
