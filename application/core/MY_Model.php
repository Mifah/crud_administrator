<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	public function getAll()
	{
		$sql = $this->db->get($this->table);

		return $sql;
	}

	public function get($pk)
	{
		$this->db->where($this->pk, $pk);
		$sql = $this->db->get($this->table);

		return $sql;
	}

	public function insert($data)
	{
		$sql = $this->db->insert($this->table, $data);

		return $sql;
	}

	public function update($pk,$data)
	{
		$this->db->where($this->pk, $pk);
		$sql = $this->db->update($this->table, $data);

		return $sql;
	}

	public function delete($pk)
	{
		$this->db->where($this->pk, $pk);

		$sql = $this->db->delete($this->table);

		return $sql;
	}

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */