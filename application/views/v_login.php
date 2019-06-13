<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIPembangunan Desa</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header" align="center">
        <?php echo $this->session->flashdata('msg');?><br>
        Login
        <br>
        </div>
        <div class="card-body">
          <form method="post" action="<?php echo base_url().'login/aksi_login'?>">
            <div class="form-group">
              <label class="control-label col-xs-3" >Username</label>
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Password</label>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
              </div>
            </div>
            <div class="form-group" align="center">
            <button type="submit" name="submit" class="btn btn-primary">Masuk</button> 
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
