<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/materialize.css'); ?>">
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
	<nav class="black">
  		 <div class="nav-wrapper black" style="padding-left: 20px;">
  			<div class="topnav">
					<a href="">History</a>
					<a href="">Keteragan</a>
  				<a href="<?= base_url('index.php/search/tampil')?>">Permohonan</a>
					<a href="">Home</a>


  			</div>

   </div>
   </nav>
<br>
<footer class="page-footer black">
          <div class="footer-copyright">
            <div class="container">
            ©
            </div>
          </div>
</footer>
</body>
</html>
