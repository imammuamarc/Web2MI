<?php 
class Pengumuman extends CI_controller
{
public function __construct()
{
	parent::__construct();
	$this->load->model('pengumuman_model');
}

	public function index()
	{
	$data['judul']='Dashboard';
	$data['sub_judul']='Wajib';
	$data['tambah']='imam';
	$data['halaman']='admin/v_pengumuman';
	$data['isi_tabel']=$this->pengumuman_model->all();
	
		$this->load->view('admin/v_template', $data);
	}

	public function tambah()
{
	$data['judul']='Dashboard';
	$data['sub_judul']='Tambah data';
	$data['halaman']='admin/v_tambah_pengumuman';
	
	
		$this->load->view('admin/v_template', $data);

}

public function proses_tambah()
{
	$judul = $this->input->post('judul');
	$isi = $this->input->post('isi');
	$penulis = $this->input->post('penulis');

	$objek = array('judul' => $judul,
				   'isi' => $isi,
	               'penulis' => $penulis );
if ($this->pengumuman_model->create($objek)) {
	$this->session->set_flashdata('info', 'Data berhasil di simpan !');
	redirect('admin/Pengumuman');
}else{
	$this->session->set_flashdata('info', 'Data gagal di simpan !');
	redirect('admin/Pengumuman');
}
}

public function hapus($id)
{
if ($this->pengumuman_model->remove($id)) {
	$this->session->set_flashdata('info', 'Data berhasil di hapus !');
	redirect('admin/Pengumuman');
}else{
	$this->session->set_flashdata('info', 'Data gagal di hapus !');
	redirect('admin/Pengumuman');
}
}

public function update($id)
	{
		$data['judul']='Edit Pengumuman';
		$data['sub_judul']='Edit Halaman Pengumuman';
		$data['halaman']='admin/Update';

		$data['isi'] = $this->pengumuman_model->get_id($objek);

		$this->load->view('admin/v_template', $data);	
	}
	public function Proses_edit()
	{
		$judul= $this->input->get('judul');
		$isi= $this->input->get('isi');
		$penulis= $this->input->get('penulis');
		$id = $this->input->get('id');

		$objek = array(
			'judul'=>$judul,
			'isi'=>$isi,
			'penulis'=>$penulis
		);
		if ($this->pengumuman_model->update($id, $objek)) {
			$this->session->set_flashdata('info', 'Data Berhasil DiEdit');
			redirect('admin/pengumuman');
		}else{
			$this->session->set_flashdata('info', 'Data Gagal DiEdit');
			redirect('admin/pengumuman');
		}
	}

}

 ?>