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
  <img src="<?php echo base_url(); ?>assets2/image/signup.png">
  </p>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="<?php echo base_url(). 'Member/tambah_aksi'; ?>" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="firstname" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" name="lastname" placeholder="Enter last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" name="confirmpassword" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <!--<a class="btn btn-primary btn-block" href="<?php echo base_url().'Login_member'?>">Register</a>-->
          <input type="submit" class="btn btn-primary btn-block" value="Register" />
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url().'Login_member'?>">Login Page</a>
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
