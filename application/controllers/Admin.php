<?php

class Admin extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}

	function dashboardadmin(){
		$this->load->view('dashboard_admin');
	}

	function memberlist(){
		$this->load->view('Admin/member_list');
	}

	function postlist(){
		$this->load->view('Admin/post_list');
	}

	function saranlist(){
		$this->load->view('Admin/saran_list');
	}

	function postform(){
		$this->load->view('Admin/post_form');
	}
} 
?>