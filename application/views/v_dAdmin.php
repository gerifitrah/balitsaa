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
</head>
	<body>

		<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				 <div class="navbar-header">
					<a class="navbar-brand " href="<?= base_url('index.php/search/tampil_admin')?>">Home</a>
				 </div>
				 <ul class="nav navbar-nav">
					 <li><a class="navbar-brand" href="<?= base_url('index.php/search/tampil_pengguna')?>">User</a></li>
					 <li><a class="navbar-brand" href="<?= base_url('index.php/search/tampil_lahan')?>">Lahan</a></li>
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
			<!--
			<div class="notif"></div>
			<div class="notifview"></div>
			<button class="ibtn">Lihat</button>

			<script type="text/javascript">
			$(document).ready(function(){
				function get_api(){
					$.ajax({
						url:"http://localhost/balitsaa/index.php/api",
						method:"GET",
						dataType:"JSON",
						success:function(data){
							$(".notif").html(data.length);
							console.dir(data);
						}
					});
				}
				get_api();
				function push_api(){
					$.ajax({
						url:"http://localhost/balitsaa/index.php/api",
						method:"GET",
						dataType:"JSON",
						success:function(data){
							for(var i=0;i<data.length;i++){
								$(".notifview").append(`
									<li>${data[i].nm_peneliti} <br>${data[i].judul_kegiatan} </li>
								`);
							}
						}
					});
				}

				$('.ibtn').click(function(){
					push_api();
				});
			setInterval(function(){
			 get_api();
			}, 5000);
			});
		</script> -->
	</body>
</html>
