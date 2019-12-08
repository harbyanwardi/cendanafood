<?php

/**
* 
*/
class C_login extends CI_Controller
{
	function __construct() {
        parent::__construct();
        if ($this->session->userdata('level')=="2" || $this->session->userdata('level')=='1') {
            redirect('C_index'); }

    }
	
	public function index(){
		
		$this->load->view('v_login');
	}
	public function auth() {
		$data = array('nik' => $this->input->post('nik'),
						'password' => md5($this->input->post('password'))
			);
		$this->load->model('m_login'); // load model_user
		$hasil = $this->m_login->cek_user($data);
		if ($hasil->num_rows() >= 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['id'] = $sess->id;
				$sess_data['nama'] = $sess->nama;
				$sess_data['password'] = $sess->password;			
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='2' || $this->session->userdata('level')=='1' ) {
				redirect('C_index');
			}
				
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}


}