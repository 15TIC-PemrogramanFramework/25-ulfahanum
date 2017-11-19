<!DOCTYPE html>
<html lang="en">
<head>

<!-- start: Meta -->
<meta charset="utf-8">
<title>Hello Counselor</title> 
<meta name="description" content="Essentia Responsive Bootstrap Theme by Bootstrap Master"/>
<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
<!-- end: Meta -->

<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- end: Mobile Specific -->


<!-- start: CSS -->
<link href="<?php echo base_url('assets3/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets3/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets3/css/style.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets3/css/slider1.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets3/css/slider2.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets3/css/slider3.css') ?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
<!-- end: CSS -->

</head>
<body>

<!--start: Header -->
<header>

<!--start: Container -->
<div class="container">

<!--start: Row -->
<div class="row-fluid">

<!--start: Navigation -->
<div class="navigation"> 

<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
<a class="btn btn-navbar btnOverlay" data-toggle="collapse" data-target=".nav-collapse">
menu
</a>
<div class="nav-collapse collapse">
<ul class="nav">
<li><a href="<?php echo base_url().'Post/postmember'?>" class="home">Dashboard</a></li>
<li><a href="<?php echo base_url().'Diary'?>" class="home">Diary</a></li>
<li><a href="<?php echo base_url().'Counselor/indexmember'?>" class="home">Counselor</a></li>
<li><a href="<?php echo site_url().'Login_member/logoutmember'?>" class="home">Hi, <?php echo $this->session->userdata('email'); ?>. Logout is here</a></li>
</li>
</ul>
</div>  
</ul>
</div>
</div>
</div>


<!--end: Navigation --> 

</div>
<!--end: Row -->

</div>
<!--end: Container-->     

</header>