<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function index()
	{
		
	}

	public function cek_sesi()
	{
		if (empty($this->session->userdata('name'))) {
			redirect('login','refresh');
		}
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */