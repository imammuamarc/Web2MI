<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function wisuda($param='')
	{
		$data['tanggal'] = '27/07/2018';
		$data['ketua'] = 'IMAM MUAMAR';
		$data['univ'] = 'STMIK BUMIGORA MATARAM';
		$data['tambahan'] = $param;
		$this -> load->view('v_pengumuman',$data);
	}
	public function detail($param='')
	{
		$data['judul']='Detail Pengumuman';

		$this->load->view('v_detail', $data);
	}

}