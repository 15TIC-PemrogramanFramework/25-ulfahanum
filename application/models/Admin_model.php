<?php

class Admin_model extends CI_Model
{
	// untuk database admin
	public $admin ='admin';
	public $id_admin ='username';
	public $id_pass = 'password';

	function __construct()
	{
		parent::__construct();
	}

	//Untuk login 
	function cek_login($id_admin,$id_pass)
	{
		$this->db->where('username',$id_admin);
		$this->db->where('password',$id_pass);
		return $this->db->get($this->admin)->row();
	}
}
?>