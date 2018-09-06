<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/index.css'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
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
				<h1>Data Lahan</h1>
			</div>
			<div class="formPermohonan">
				<table class="tCss">
					<thead>
						<tr>
              <th>No</th>
              <th>Kode Lahan</th>
              <th>Nama Lahan</th>
              <th>Block</th>
              <th>Nomer</th>
              <th>Panjang</th>
              <th>Lebar</th>
              <th>Luas</th>
              <th>Status</th>
              <th>Tanaman Sebelumnya</th>
              <th></th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1;
							foreach($data as $lahan):?>
						<tr>
              <td><?php echo $no ?></td>
              <td><?php echo $lahan['kd_lahan']; ?></td>
              <td><?php echo $lahan['nm_lahan']; ?></td>
              <td><?php echo $lahan['blok']; ?></td>
              <td><?php echo $lahan['nomor']; ?></td>
              <td><?php echo $lahan['panjang']; ?></td>
              <td><?php echo $lahan['lebar']; ?></td>
              <td><?php echo $lahan['luas']; ?></td>
              <td><?php echo $lahan['status']; ?></td>
              <td><?php echo $lahan['tanaman_sebelumnya']; ?></td>
              <td>
								<!-- <a herf="<?php echo base_url('index.php/search/edit_lahan') ?>">
								<a herf="<?php Edit ?>">
								 -->
							</td>
						</tr>
						<?php $no++; endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>
