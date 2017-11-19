<?php 
/**
* 
*/
class Post_model extends CI_Model
{
	// untuk database post
	public $post = 'post';
	public $id = 'id_post';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('post');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_post($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->post,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->post)->row();
	}

	function hapus_data_post($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->post);
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->post,$data);
	}
}
