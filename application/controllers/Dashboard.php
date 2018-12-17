<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	 public function __construct()
	 {
	 	parent::__construct();
		$this->load->model('M_dashboard');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
	 }

	public function c_view()
	{
		$data['article']=$this->M_dashboard->tampilkanData();
		$this->load->view('dashboard_view',$data);
	}

	public function c_admin()
	{

		$x['user']=$this->M_dashboard->tampilkanUser();
		$data['article']=$this->M_dashboard->tampilkanData();
		$this->load->view('dashboard_admin',$data);
	}

	public function c_admin2()
	{

		$data['user']=$this->M_dashboard->tampilkanUser();
		$this->load->view('dashboard_admin2',$data);
	}

  public function c_input()
	{
		$this->load->view('dashboard_input');
	}

  public function c_edit($id)
	{
		$where = array('id' => $id);
		$data['article'] = $this->M_dashboard->tampilkanDataEdit($where,'article')->result();
		$this->load->view('dashboard_edit',$data);
	}

	public function update($value='')
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi_artikel = $this->input->post('isi_artikel');
		$tanggal = $this->input->post('tanggal');
		$kategori = $this->input->post('kategori');
		$lokasi = $this->input->post('lokasi');

		$data=array(
			'judul' => $judul,
			'isi_artikel' => $isi_artikel,
			'tanggal' => $tanggal,
			'kategori' => $kategori,
			'lokasi'=> $lokasi
		);

		$where = array('id' => $id);

		$this->M_dashboard->updateData($where, $data, 'article');
		$this->load->view('dashboard_edit',$data);
	}

	public function c_hapus($id)
	{
		$where = array('id' => $id);
		$this->M_dashboard->hapusData($where,'article');
		redirect('Dashboard/c_view');
	}

	public function c_hapusUser($id)
	{
		$where = array('id' => $id);
		$this->M_dashboard->hapusDataUser($where,'user');
		redirect('Dashboard/c_admin');
	}
	public function insert($value='')
	{
		$judul = $_POST['judul'];
		$isiartikel = $_POST['isiartikel'];
		$lokasi = $_POST['lokasi'];
		$kategori = $_POST['kategori'];
		$tanggal = $_POST['tanggal'];
		$media = $_FILES['media']["name"];

		$data=array(
			'judul' => $judul,
			'isi_artikel' => $isiartikel,
			'lokasi' => $lokasi,
			'kategori' => $kategori,
			'tanggal' => $tanggal,
			'media' => $media
		);

		$this->db->set($data);

		$image_path = realpath(APPPATH . '../images');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->do_upload('media');

		$insert = $this->M_dashboard->tambahData('article',$data);

		// if ($this->input->post('simpan')) {
		// 	$upload = $this->M_dashboard->uploadGambar();
		// 	if($upload['result'] ==  "success"){
		// 		$this->M_dashboard->saveGambar($upload);
		// 	}else {
		// 		$data['message'] = $upload['error'];
		// 	}
		// }

		if($insert > 0){
			redirect('Dashboard/c_input');
		}else{
			echo "Gagal Disimpan";
		}
	}

	// public function insertGambar()
	// {
	// 	if($this->input->post('simpan')){
	// 		$upload = $this->M_dashboard->uploadGambar();
	// 		if($upload['result'] == "success"){
	// 			$this->M_dashboard->saveGambar($upload);
	// 		}else{
	// 			$data['message'] = $upload['error'];
	// 		}
	// 	}
	// }
}
