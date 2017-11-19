<?php 
/**
* 
*/
class Member extends CI_Controller
{
	
	function __construct()
	{	
		parent::__construct();
		$this->load->model('Member_model');
	}

	function index()
	{
		$data['member']=$this->Member_model->ambil_data();
		$this->load->view('Admin/member_list',$data);
	}

	function tambah_member()
	{
		$data=array(
			'action'	=>site_url('Admin/tambah_aksi'),
			'firstname'	 	=>set_value('firstname'),
			'lastname'	 	=>set_value('lastname'),
			'email'	=>set_value('email'),
			'password'	 	=>set_value('password'),
			'confirmpassword' =>set_value('confirmpassword'),
			'button'	=>'Register'
			);
		$this->load->view('dashboard_member',$data);
	}

	function tambah_aksi(){
			$data=array(
			'firstname'	 	=>$this->input->post('firstname'),
			'lastname'	 	=>$this->input->post('lastname'),
			'email'	=>$this->input->post('email'),
			'password' =>$this->input->post('password'),
			'confirmpassword' =>$this->input->post('password')
			);
			$this->Member_model->tambah_data_member($data);
			redirect(site_url('Login_member'));
	}

	function delete_member($id){
			$this->Member_model->hapus_data_member($id);
			redirect(site_url('Member'));
	}

	function dashboardmember(){
		$this->load->view('dashboard_member');
	}

	function dashboardguest(){
		$this->load->view('dashboard_guest');
	}

	function diarylist(){
		$this->load->view('memberdiary_list');
	}

	function formdiary()
	{
		$this->load->view('Member/memberdiary_form');
	}
}
 ?>