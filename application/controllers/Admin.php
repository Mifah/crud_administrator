<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->cek_sesi();
	}

	public function index()
	{
		$data = [
			'url'	=> base_url(),
		];
		$data['content'] = $this->parser->parse('home',$data,TRUE);
		$this->parser->parse('index',$data);	
	}

	public function daftar()
	{
		$data = [
			'url'	=> base_url(),
			'pengguna' 		=> $this->auth->getAll()->result(),
		];

		$data['content'] = $this->parser->parse('daftar',$data,TRUE);
		$this->parser->parse('index',$data);	

	}

	public function tambah()
	{
		$data = [
			'url'	=> base_url(),
		];

		$data['content'] = $this->parser->parse('tambah',$data,TRUE);
		$this->parser->parse('index',$data);	

	}	

	public function edit($pk)
	{
		$data = [
			'url'	=> base_url(),
			'pengguna' 		=> $this->auth->get($pk)->result(),
		];

		$data['content'] = $this->parser->parse('edit',$data,TRUE);
		$this->parser->parse('index',$data);	

	}

	public function hapus($pk)
	{
		$sql = $this->auth->delete($pk);

		if ($sql) 
		{
			$this->session->set_flashdata('berhasil', 'Data Berhasil Di Hapus');
		} else 
		{
			$this->session->set_flashdata('gagal', 'Data Gagal Di Hapus');
		}
		
		redirect('daftar/pengguna','refresh');
	}

	public function detail($pk)
	{
		$sql = $this->auth->get($pk)->result();

		echo json_encode($sql);
		
	}

	public function aksi($aksi)
	{
		$data = [
			'username' 		=> $this->input->post('username'),
			'password' 		=> MD5($this->input->post('password')),
			'nama_lengkap' 	=> $this->input->post('nama_lengkap'),
			'email' 		=> $this->input->post('email'),
		];

		if ($aksi=='tambah') 
		{
			$sql = $this->auth->insert($data);

			if ($sql) 
			{
				$this->session->set_flashdata('berhasil', 'Data Berhasil Di Simpan');
			} else 
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Di Simpan');
			}

		} else {

			$pk = $this->input->post('pk');
			$sql = $this->auth->update($pk,$data);

			if ($sql) 
			{
				$this->session->set_flashdata('berhasil', 'Data Berhasil Di Edit');
			} else 
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Di Edit');
			}

		}

		redirect('daftar/pengguna');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */