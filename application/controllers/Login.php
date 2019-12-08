<?php

/**
* 
*/
class Login extends CI_Controller
{
	function __construct() {
        parent::__construct();
        if ($this->session->userdata('role')=="admin") {
            redirect('C_testimoni'); }
        $this->load->helper('form','url');
		 $this->load->model('M_data');
    }
	
	public function index(){
		
		$this->load->view('backend/v_login');
	}
	public function auth() {
		$data = array('username' => $this->input->post('username'),
						'password' => md5($this->input->post('password'))
			);
		
		$hasil = $this->M_data->cek_user($data);
		if ($hasil->num_rows() >= 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['id'] = $sess->id;
				
				$sess_data['username'] = $sess->username;				
				$sess_data['role'] = $sess->role;
			

				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('role')=='admin') {
				redirect('C_testimoni');
			}
				
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
}