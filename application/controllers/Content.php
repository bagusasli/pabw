<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

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
    $this->load->model('m_content');
    $this->load->helper('url_helper');
  }

	public function index($value='')
	{
		$data['berita']=$this->m_content->tampilkanBerita()->result();
		$this->load->view('content/post_index',$data);
	}

	public function post_donggala($value='')
	{
		$this->load->view('content/post_donggala');
	}

	public function view($value='')
	{
		$kode=$this->uri->segment(3);
		$x['data']=$this->m_content->getBerita_id($kode);
		$this->load->view('content/post_donggala',$x);
	}


}
