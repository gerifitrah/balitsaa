<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
<body>
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
				foreach($data as $Permohonan):?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $Permohonan['no_permohonan']; ?></td>
				<td><?php echo $Permohonan['nip']; ?></td>
				<td><?php echo $Permohonan['nm_peneliti']; ?></td>
				<td><?php echo $Permohonan['judul_kegiatan']; ?></td>
				<td><?php echo $Permohonan['komoditas']; ?></td>
				<td><input type="button" name="view" value="view" id="<?php echo $Permohonan['no_permohonan']; ?>" onClick="reply_click(this.id)"/></td>
			<td><a class='btn' href="<?= base_url('index.php/c_permohonan/tampil_konfirmasi?id='.$Permohonan['no_permohonan']); ?>">Detail</a></td>
			</tr>
			<?php $no++; endforeach; ?>
		</tbody>
	</table>
	<a href="<?php base_url('index.php/c_permohonan/login') ?>">back</a>
</div>
<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
  </div>

</div>
<div class="notifview"></div>
<button class="ibtn">Lihat</button>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		<script type="text/javascript">
		function reply_click(clicked_id)
		{
		    var id = clicked_id;
		    alert(id);
		}
			$(document).ready(function(){
				function get_api(){
					$.ajax({
						url:"http://localhost/balitsaa/index.php/api/detail",
						method:"GET",
						dataType:"JSON",
						success:function(data){
							console.dir(data);
						}
					});
				}
				function push_api(){
					$.ajax({
						url:"http://localhost/balitsaa/index.php/api/detail",
						method:"GET",
						dataType:"JSON",
						success:function(data){
								for(var i=0;i<data.length;i++){
								$(".modal-content").append(`
									<li>${data[i].nm_peneliti} <br>${data[i].judul_kegiatan} </li>
								`);
							}
						}
					});
				}

				$('#myBtn').click(function(){
					push_api();
				});
			});
		</script>
</body>
</html>
