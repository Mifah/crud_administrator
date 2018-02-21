<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends MY_Model {

	protected $table 	= 'tb_user';
	protected $pk 		= 'pk_user';

	public function cek($where)
	{
		$this->db->where($where);
		$sql  = $this->db->get($this->table);

		return $sql;
	}

}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */