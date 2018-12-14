<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function tampilkanData()
	 {
	 	$query = $this->db->select("*")->from('article')->get();
		return $query->result();
	 }

	 public function tambahData($table_name, $data)
   {
		// $this->db->set($data);
    $tambahData = $this->db->insert($table_name, $data);
    return $tambahData;
   }

	 public function tampilkanDataEdit($where,$table)
	 {
	 	return $this->db->get_where($table,$where);
	 }

	 public function updateData($where, $data, $table_name)
	 {
		 $this->db->where($where);
 	 	$this->db->update($table_name,$data);
	 }

	 public function hapusData($where,$table)
 	{
		$this->db->where($where);
		$this->db->delete($table);
 	}

	public function lihatGambar($value='')
	{
		return $this->db->get('media')->result();
	}

	public function uploadGambar($value='')
	{
		$config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size']  = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload('media')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			$return = array('result' => 'error', 'file' => '', 'error' => '');
			return $return;
		}
	}

	public function saveGambar($upload)
	{

		$data=array(
			'judul'=>$this->input->post('judul'),
			'isi_artikel'=>$this->input->post('isiartikel'),
			'kategori'=>$this->input->post('kategori'),
			'lokasi'=>$this->input->post('lokasi'),
			'tanggal'=>$this->input->post('tanggal'),
			'media' -> $this->input->post('media')
		);
		$this->db->set($data);
		$this->db->insert('article');
	}

	}
