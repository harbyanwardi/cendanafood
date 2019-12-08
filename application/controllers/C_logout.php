<?php
/**
* 
*/
class C_logout extends CI_Controller
{
	

public function index() {
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('level');
		
		session_destroy();
		redirect('C_login');
	}
}