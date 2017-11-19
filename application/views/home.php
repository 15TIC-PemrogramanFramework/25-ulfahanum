<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hello Counselor</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()."assets2/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."assets2/"; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."assets2/"; ?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container">
  <p align="center">
  <img src="<?php echo base_url(); ?>assets2/image/logo.png">
  </p>
  <form>
  <div class="form-group">
  <a class="btn btn-primary btn-block" href="<?php echo base_url().'Post/postguest'?>">Guest</a>
  <a class="btn btn-primary btn-block" href="<?php echo base_url().'Login'?>">Login Admin</a>
    <a class="btn btn-primary btn-block" href="<?php echo base_url().'Login_member'?>">Login Member</a>
  <a class="btn btn-primary btn-block" href="<?php echo base_url().'Home/signup'?>">Sign Up</a>
  </div>
  </form>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."assets2/"; ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."assets2/"; ?>vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url()."assets2/"; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."assets2/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
