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

	public function verifikasi()
	{
		$this->load->model('M_login');

    $username = $this->input->post('username');
    $password = $this->input->post('password');

		// $where = array(
		// 	'username' => $username,
		// 	'password' => md5($password)
		// );
		// $cek = $this->M_login->verifikasi("user",$where)->num_rows();
		// if($cek > 0){
		// 	$data_session = array(
		// 		'nama' => $username,
		// 		'status' => "login"
		// 	);
		// 	$this->session->set_userdata($data_session);
		// 	$this->load->view('dashboard_view');
		// }else{
		// 	echo "Username dan Password salah !";
		// }

		$login = $this->M_login->verifikasi($username,md5($password));
    if($login){
      return redirect('/Dashboard/c_view');
    }
    else{
      echo "alert('gagal')";
    }
	}


	function aksi_login(){
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$where = array(
		'username' => $username,
		'password' => md5($password)
		);
	$cek = $this->M_login->verifikasi("user",$where)->num_rows();
	if($cek > 0){

		$data_session = array(
			'nama' => $username,
			'status' => "login"
			);

		$this->session->set_userdata($data_session);

		redirect(base_url("admin"));

	}else{
		echo "Username dan password salah !";
		}
	}

	function logout($value='')
	{
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}
