<?php 
/**
* 
*/
class Member_model extends CI_Model
{
	// untuk database member
	public $member = 'member';
	public $id = 'id';
	public $email = 'email';
	public $password = 'password';
	public $order= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	//Untuk mengambil data seluruh member
	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->member)->result();
	}

	//untuk mengambil data per id seluruh member
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->member)->row();
	}

	//Untuk menambahkan data ke table member list
	function tambah_data_member($data)
	{
		return $this->db->insert($this->member,$data);
	}

	//Untuk menghapus data table member list
	function hapus_data_member($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->member);
	}
	
	//Login member
	function cek_login($email,$password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get($this->member)->row();
	}
}
 ?>