<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	 public function __construct($value='')
	 {
	 	parent::__construct();
		$this->load->library('session');
	 }

	public function verifikasi()
	{
		$this->load->model('M_login');

    $username = $this->input->post('username');
    $password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		$cek = $this->M_login->verifikasi("user",$where)->num_rows();
		$hasil = $this->M_login->verifikasi("user",$where);

		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			foreach ($hasil->result() as $key) {
				$sess_data['id'] = $key->id;
				$sess_data['level'] = $key->level;
				$sess_data['nama'] = $key->nama;
			}
			$this->session->set_userdata($sess_data);

			if($this->session->userdata('level')=='kontributor'){
				redirect('Dashboard/c_view');
			}
			if($this->session->userdata('level')=='admin'){
				redirect('Dashboard/c_admin2');
			}

		}else{
			echo "Username dan Password salah !";
		}
  }

	function logout($value='')
	{
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}
