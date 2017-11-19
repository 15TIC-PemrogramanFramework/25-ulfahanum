<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('Admin/dashboardadmin').'">
		<i class="fa fa-fw fa-dashboard"></i><span class="nav-link-text"> Dashboard</span></a>
	</li>
	<li>
		<a href="'.site_url('Member').'">
		<i class="fa fa-fw fa-table"></i><span class="nav-link-text"> List Member</span></a>
	</li>
	<li>
		<a href="'.site_url('Post').'">
		<i class="fa fa-fw fa-table"></i><span class="nav-link-text"> List Post</span></a>
	</li>
	<li>
		<a href="'.site_url('Diary/indexadmin').'">
		<i class="fa fa-fw fa-table"></i><span class="nav-link-text"> List Diary</span></a>
	</li>
	<li>
		<a href="'.site_url('Counselor').'">
		<i class="fa fa-fw fa-table"></i><span class="nav-link-text"> List Counselor</span></a>
	</li>
	<li>
		<a href="'.site_url('login/logout').'">
		<i class="fa fa-fw fa-sign-out"></i><span class="nav-link-text"> Logout</span></a>
	</li>
	';
	}
