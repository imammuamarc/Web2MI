<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class model_dosen extends CI_Model {

public function all()
{
	return $this->db->get('dosen')->result();
}

public function create($objek)
{
	return $this->db->insert('dosen', $objek);
}

public function remove($id)
{
	$this->db->where('nik',$id);
	return $this->db->delete('dosen');
}
public function get_id($id)
{
	$this->db->where('nik', $id);
	return $this->db->get('dosen')->row();
}
public function update($id, $objek)
{
	$this->db->where('nik', $id);
	return $this->db->update('dosen', $objek);
}

}

 ?>