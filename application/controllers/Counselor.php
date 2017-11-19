<?php 
/**
* 
*/
class Counselor extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Counselor_model');
	}

	function index()
	{
		$data['counselor']=$this->Counselor_model->ambil_data();
		$this->load->view('Admin/Counselor_list',$data);
	}

	function tambah_counselor()
	{
		$data=array(
			'aksi'	=>site_url('Counselor/tambah_aksi'),
			'id_counselor' =>set_value('id_counselor'),
			'email'		=>set_value('email'),
			'subject_post'	=>set_value('subject_post'),
			'isi_counselor'	=>set_value('isi_counselor'),
			'btn'	=>'Add'
		);
		$this->load->view('Admin/Counselor_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'email'			=>$this->input->post('email'),
			'subject_post'	=>$this->input->post('subject_post'),
			'isi_counselor'	=>$this->input->post('isi_counselor')
		);
		$this->Counselor_model->tambah_data($data);
		redirect(site_url('Counselor/indexmember'));
	}

	function delete($id)
	{
		$this->Counselor_model->hapus_data($id);
        redirect(site_url('Counselor'));
	}

	function indexmember()
	{
		$data['counselor'] = $this->Counselor_model->ambil_data();
		$this->load->view('Member/Counselor_member',$data);
	}
}