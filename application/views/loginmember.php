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
<br>
<br>
  <p align="center">
  <img src="<?php echo base_url(); ?>assets2/image/member.png">
  </p>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input type ="submit" class="btn btn-primary btn-block" value="Login"/>
        </form>
        <div class="text-center">
        <a class="d-block small mt-3" href="<?php echo base_url().'Home/index'?>">Home</a>
          <a class="d-block small mt-3" href="<?php echo base_url().'Home/signup'?>">Register an Account</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."assets2/"; ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."assets2/"; ?>vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url()."assets2/"; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."assets2/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
