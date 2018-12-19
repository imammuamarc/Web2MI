<?php 
class mahasiswa extends CI_controller{

public function __construct()
{
	parent::__construct();
$this->load->model('model_mahasiswa');
}



public function index()
{

	$data['judul']='Mahasiswa';
	$data['sub_judul']='Mahasiswa';
	$data['halaman']='admin/v_mahasiswa';
	$data['isi_tabel']= $this->model_mahasiswa->all();


	$this->load->view('admin/v_template', $data);

}
public function tambah()
{
	$data['judul']='Data Mahasiswa';
	$data['sub_judul']='Tambah Data Mahasiswa';
	$data['halaman']='admin/v_tambah_mahasiswa';
	
	
		$this->load->view('admin/v_template', $data);

}
public function proses_tambah()
{
	$identitas = array(
		'nim' => $this->input->post('nim'),
		'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
		'program_studi' => $this->input->post('program_studi'));

	$this->model_mahasiswa->create($identitas);

	redirect('admin/mahasiswa','refresh');
}
public function hapus($nim)
{
$this->model_mahasiswa->remove($nim);
redirect('admin/mahasiswa','refresh');
}
public function edit($nim)
{
	$data['judul']='Dashboard';
	$data['sub_judul']='Edit Data Mahasiswa';
	$data['halaman']='admin/v_edit_mahasiswa';

	$data['isi_data'] = $this->model_mahasiswa->get_id($nim);
	
$this->load->view('admin/v_template', $data);

}
public function proses_edit()
{
	$id = $this->input->post('nim');
	$obj = array(
		'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
		'program_studi'=> $this->input->post('program_studi'));

		$this->model_mahasiswa->update($id, $obj);

		redirect('admin/mahasiswa','refresh');

}
}


 ?>
