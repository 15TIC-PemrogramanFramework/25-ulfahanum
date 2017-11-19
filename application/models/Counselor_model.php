<?php 
/**
* 
*/
class Counselor_model extends CI_Model
{
	// untuk database counselor
	public $counselor= 'counselor';
	public $id	= 'id_counselor';
	public $order = 'ASC';
	
	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('counselor');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->counselor,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->counselor)->row();
	}
	function hapus_data($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->counselor);
	}
	
	function tambah_data($data)
	{
		return $this->db->insert($this->counselor,$data);
	}
}