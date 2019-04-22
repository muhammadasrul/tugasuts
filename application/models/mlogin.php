<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	function ceklogin($username,$password)
	{
		if (($username == 'admin')&&($password=='123')) {
			$hasil = true;
		} else {
			$hasil = false;
		}
		return hasil;
	}
}
