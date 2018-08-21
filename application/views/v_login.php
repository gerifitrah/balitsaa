<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/materialize.css'); ?>">
	<title>Login</title>

  </style>
</head>
<body style="margin-top: 80px;"align="center">

<div  class="container" style="border-radius: 5px;border: 1px solid #000;padding: 20px;margin-top: 20px;box-shadow: 4px 4px #bbb;width: 30%; ">
	<div class="row" >
    <h2>Login</h2>
    <hr>
    <?php echo $this->session->flashdata('err'); ?>
    <form class="col s12" method="post" action="<?= base_url('index.php/c_permohonan/login'); ?>">
      <div class="row">
        <div class="input-field col s12 ">
          <label >Username</label><br/>
          <input name="username" type="text" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label >Password</label><br/>
          <input name="password" type="password" class="validate"><br/>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select name="otorisasi">
            <option selected>Sebagai</option>
            <option value="admin">Admin</option>
            <option value="peneliti">Peneliti</option>
          </select>
          <input type="submit" class="btn" name="submit" value="Login"></input>
        </div>
      </div>
    </form>
    </div>
  </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url('asset/js/materialize.min.js'); ?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>
</body>
</html>
