<?php 
/**
* 
*/
class Diary extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Diary_model');
	}

	function index()
	{
		$data['diary']=$this->Diary_model->ambil_data();
		$this->load->view('Member/memberdiary_list',$data);
	}

	function tambah_diary()
	{
		$data=array(
			'action'	=>site_url('Diary/tambah_aksi'),
			'isi_diary'	=>set_value('isi_diary'),
			'tanggal_diary' =>set_value('tanggal_diary'),
			'id_diary'	=>set_value('id_diary'),
			'button'	=>'Add'
		);
		$this->load->view('Member/memberdiary_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'isi_diary'		=>$this->input->post('isi_diary'),
			'tanggal_diary' =>$this->input->post('tanggal_diary')
		);
		$this->Diary_model->tambah_data($data);
		redirect(site_url('Diary'));
	}

	function indexadmin()
	{
		$data['diary']=$this->Diary_model->ambil_data();
		$this->load->view('Admin/diarymember_list',$data);
	}
}