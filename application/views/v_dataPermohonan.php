<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2">
		<thead>
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama Peneliti</th>
				<th>Judul Kegitan</th>
				<th>Komuditas</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1;
				foreach($data as $Permohonan):?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $Permohonan['nip']; ?></td>
				<td><?php echo $Permohonan['nm_peneliti']; ?></td>
				<td><?php echo $Permohonan['judul_kegiatan']; ?></td>
				<td><?php echo $Permohonan['komoditas']; ?></td>
			<td><a class='btn' href="<?= base_url('index.php/c_permohonan/tampil_konfirmasi?id='.$Permohonan['no_permohonan']); ?>">Detail</a></td>
			</tr>
			<?php $no++; endforeach; ?>
		</tbody>
	</table>
</body>
</html>
