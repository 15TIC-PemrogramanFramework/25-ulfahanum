<?php 
/**
* 
*/
class Diary_model extends CI_Model
{
	// untuk database diary
	public $diary_member= 'diary_member';
	public $id	= 'id_diary';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('diary_member');
		$query = $this->db->get();
		return $query->result();
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->diary_member)->row();
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->diary_member,$data);
	}
}