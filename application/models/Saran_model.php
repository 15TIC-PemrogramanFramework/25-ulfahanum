<?php 
/**
* 
*/
class Saran_model extends CI_Model
{
	// untuk database saran
	public $saran = 'saran';
	public $id = 'id';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('saran');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->saran,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->saran)->row();
	}
	function hapus_data($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->saran);
	}
	function tambah_data($data)
	{
		return $this->db->insert($this->saran,$data);
	}
}