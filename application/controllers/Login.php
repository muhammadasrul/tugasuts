<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('mlogin');

	}

	public function index()
	{
		$this->load->view('vlogin');
	}

	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek=$this->mlogin->ceklogin($username,$password);
		if ($cek) {
			$data_session = array(
				'nama' => $username,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('admin'));
		} else {
			echo "Username dan password salah!";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('portfolio'));
	}
}
