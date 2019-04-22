<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data = [
			'css' => $this->css(),
			'js' => $this->js(),
			'sidebar' => $this->sidebar()
		];
		$this->load->view('vadmin',$data);
	}

	public function chart()
	{
		$data = [
			'css' => $this->css(),
			'js' => $this->js(),
			'sidebar' => $this->sidebar()
		];
		$this->load->view('chart',$data);
	}

	public function table()
	{
		$data = [
			'css' => $this->css(),
			'js' => $this->js(),
			'sidebar' => $this->sidebar()
		];
		$this->load->view('table',$data);
	}

	public function register()
	{
		$data = [
			'css' => $this->css(),
			'js' => $this->js(),
			'sidebar' => $this->sidebar()
		];
		$this->load->view('register',$data);
	}

	public function forgot_password()
	{
		$data = [
			'css' => $this->css(),
			'js' => $this->js(),
			'sidebar' => $this->sidebar()
		];
		$this->load->view('forgot_password',$data);
	}

	public function blank()
	{
		$data = [
			'css' => $this->css(),
			'js' => $this->js(),
			'sidebar' => $this->sidebar()
		];
		$this->load->view('blank',$data);
	}

	public function error()
	{
		$data = [
			'css' => $this->css(),
			'js' => $this->js(),
			'sidebar' => $this->sidebar()
		];
		$this->load->view('errors',$data);
	}

	public function css()
	{
		$data='
		  <!-- Custom fonts for this template-->
		  <link href="'.base_url().'sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

		  <!-- Page level plugin CSS-->
		  <link href="'.base_url().'sbadmin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

		  <!-- Custom styles for this template-->
		  <link href="'.base_url().'sbadmin/css/sb-admin.css" rel="stylesheet">
		  ';
		  return $data;
	}

	public function js()
	{
		$data='
		  <!-- Bootstrap core JavaScript-->
		  <script src="'.base_url().'sbadmin/vendor/jquery/jquery.min.js"></script>
		  <script src="'.base_url().'sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		  <!-- Core plugin JavaScript-->
		  <script src="'.base_url().'sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

		  <!-- Page level plugin JavaScript-->
		  <script src="'.base_url().'sbadmin/vendor/chart.js/Chart.min.js"></script>
		  <script src="'.base_url().'sbadmin/vendor/datatables/jquery.dataTables.js"></script>
		  <script src="'.base_url().'sbadmin/vendor/datatables/dataTables.bootstrap4.js"></script>

		  <!-- Custom scripts for all pages-->
		  <script src="'.base_url().'sbadmin/js/sb-admin.min.js"></script>

		  <!-- Demo scripts for this page-->
		  <script src="'.base_url().'sbadmin/js/demo/datatables-demo.js"></script>
		  <script src="'.base_url().'sbadmin/js/demo/chart-area-demo.js"></script>';
		  return $data;
	}

	public function sidebar()
	{
		$data='
		    <ul class="sidebar navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="'.base_url().'admin">
	          <i class="fas fa-fw fa-tachometer-alt"></i>
	          <span>Dashboard</span>
	        </a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <i class="fas fa-fw fa-folder"></i>
	          <span>Pages</span>
	        </a>
	        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
	          <h6 class="dropdown-header">Login Screens:</h6>
	          <a class="dropdown-item" href="'.base_url().'login">Login</a>
	          <a class="dropdown-item" href="'.base_url().'admin/register">Register</a>
	          <a class="dropdown-item" href="'.base_url().'admin/forgot_password">Forgot Password</a>
	          <div class="dropdown-divider"></div>
	          <h6 class="dropdown-header">Other Pages:</h6>
	          <a class="dropdown-item" href="'.base_url().'admin/error">404 Page</a>
	          <a class="dropdown-item" href="'.base_url().'admin/blank">Blank Page</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="'.base_url().'admin/chart">
	          <i class="fas fa-fw fa-chart-area"></i>
	          <span>Charts</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="'.base_url().'admin/table">
	          <i class="fas fa-fw fa-table"></i>
	          <span>Tables</span></a>
	      </li>
	    </ul>';
	    return $data;
	}
}
