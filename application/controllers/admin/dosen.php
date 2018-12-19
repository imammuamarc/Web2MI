<?php 
class dosen extends CI_controller{

public function __construct()
{
	parent::__construct();
$this->load->model('model_dosen');
}



public function index()
{

	$data['judul']='Coba';
	$data['sub_judul']='DOSEN';
	$data['halaman']='admin/v_dosen';
	$data['isi_tabel']= $this->model_dosen->all();


	$this->load->view('admin/v_template', $data);

}
public function tambah()
{
	$data['judul']='Dashboard';
	$data['sub_judul']='Tambah Data Dosen';
	$data['halaman']='admin/v_tambah_dosen';
	
	
		$this->load->view('admin/v_template', $data);

}
public function proses_tambah()
{
	$identitas = array(
		'nik' => $this->input->post('nik'),
		'nama_dosen' => $this->input->post('nama_dosen'),
		'alamat' => $this->input->post('alamat'));

	$this->model_dosen->create($identitas);

	redirect('admin/dosen','refresh');
}
public function hapus($nik)
{
$this->model_dosen->remove($nik);
redirect('admin/dosen','refresh');
}
public function edit($nik)
{
	$data['judul']='Dashboard';
	$data['sub_judul']='Edit Data dosen';
	$data['halaman']='admin/v_edit_dosen';

	$data['isi_data'] = $this->model_dosen->get_id($nik);
	
$this->load->view('admin/v_template', $data);

}
public function proses_edit()
{
	$id = $this->input->post('nik');
	$obj = array(
		'nama_dosen' => $this->input->post('nama_dosen'),
		'alamat'=> $this->input->post('alamat'));

		$this->model_dosen->update($id, $obj);

		redirect('admin/dosen','refresh');
	}
}


 ?>