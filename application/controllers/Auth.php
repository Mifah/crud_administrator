<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function index()
	{
		$data = [
			'url'	=> base_url(),
		];

		$data['meta'] 	= $this->parser->parse('section/meta',	$data,TRUE);
		$data['css'] 	= $this->parser->parse('section/css',	$data,TRUE);
		$data['ie'] 	= $this->parser->parse('section/ie',	$data,TRUE);
		$data['js'] 	= $this->parser->parse('section/js',	$data,TRUE);

		$this->parser->parse('login',$data);
	}

	public function register()
	{
		$data = [
			'url'	=> base_url(),
		];

		$data['meta'] 	= $this->parser->parse('section/meta',	$data,TRUE);
		$data['css'] 	= $this->parser->parse('section/css',	$data,TRUE);
		$data['ie'] 	= $this->parser->parse('section/ie',	$data,TRUE);
		$data['js'] 	= $this->parser->parse('section/js',	$data,TRUE);

		$this->parser->parse('register',$data);
	}

	public function cek()
	{
		$data = [
			'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password')),
		];

		$cek = $this->auth->cek($data)->num_rows();

		if($cek<=0)
		{
			$return = [
				'pesan' 	=> 'User Belum Terdaftar',
				'status'	=> 'failed'
			];
		} else 
		{
			$return = [
				'pesan' 	=> 'User Terdaftar',
				'status'	=> 'success'
			];

			$array = array(
				'name' => $this->input->post('username'),
			);
			
			$this->session->set_userdata( $array );

		}

		echo json_encode($return);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */