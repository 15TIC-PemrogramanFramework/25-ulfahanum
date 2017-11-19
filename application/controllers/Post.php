<?php 
/**
* 
*/
class Post extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Post_model');
	}

	//Untuk POST
		function index()
	{
		$data['post']=$this->Post_model->ambil_data();
		$this->load->view('Admin/post_list',$data);
	}

	function tambah_post()
	{
		$data=array(
			'action'	=>site_url('Post/tambah_aksi'),
			'subject_post'		=>set_value('subject_post'),
			'tanggal_post'		=>set_value('tanggal_post'),
			'isi_post'	=>set_value('isi_post'),
			'id_post'		=>set_value('id_post'),
			'button'	=>'Add'
		);
		$this->load->view('Admin/post_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'subject_post'		=>$this->input->post('subject_post'),
			'tanggal_post'		=>$this->input->post('tanggal_post'),
			'isi_post'		=>$this->input->post('isi_post')
		);
		$this->Post_model->tambah_data($data);
		redirect(site_url('Post'));
	}

	function delete_post($id)
	{
		$this->Post_model->hapus_data_post($id);
		redirect(site_url('Post'));
	}

	function edit_post($id)
	{
		$post=$this->Post_model->ambil_data_id($id);
		$data=array(
			'action'		=>site_url('Post/edit_aksi'),
			'id_post'			=>set_value('id_post',$post->id_post),
			'subject_post'	=>set_value('subject_post',$post->subject_post),
			'tanggal_post'	=>set_value('tanggal_post',$post->tanggal_post),
			'isi_post'		=>set_value('isi_post',$post->isi_post),
			'button'		=>'Edit'
		);
		$this->load->view('Admin/post_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'subject_post'	=>$this->input->post('subject_post'),
			'tanggal_post'	=>$this->input->post('tanggal_post'),
			'isi_post'		=>$this->input->post('isi_post')
		);
		$id_post=$this->input->post('id_post');
		$this->Post_model->edit_post($id_post,$data);
		redirect(site_url('Post'));
	}

	function postmember()
	{
		$data['post']=$this->Post_model->ambil_data();
		$this->load->view('dashboard_member',$data);
	}

	function postguest()
	{
		$data['post']=$this->Post_model->ambil_data();
		$this->load->view('dashboard_guest',$data);
	}
}