<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_testimoni extends CI_Controller {

	function __construct() {
        parent::__construct();
        if ($this->session->userdata('role')!="admin") {
            redirect('Login'); }
        $this->load->helper('form','url');
        
    }
	public function index()
	{
		$data = $this->M_data->showdata('testimoni');
		$show = array(
			'nav'=> $this->nav(),
			'footer'=> $this->footer(),
			'data' => $data,
			
		);
		$this->load->view('backend/v_testimoni',$show);
	}

	public function add()
	{
		$show = array(
			'nav'=> $this->nav(),
			'footer'=> $this->footer(),
			
		);
		$this->load->view('backend/testimoni/form_tambah_testimoni',$show);
	}
	public function do_insert()
	{
		
		$tanggal = $_POST['tanggal'];
        $testimoni = $_POST['testimoni'];
        $judul = $_POST['judul'];
       
        $data_insert = array(
            'tanggal' => $tanggal,
            'testimoni' => $testimoni,
            'judul' => $judul,
            
        );
        $res = $this->M_data->InsertData('testimoni',$data_insert);
        if($res>=1){
            $this->flashdata_succeed();
        }
        else{
            $this->flashdata_failed();
        }
 
    }

    public function do_delete($id){
		$where = array('id' => $id);
		$res = $this->M_data->DeleteData('testimoni',$where);
		if($res>=1){
			$this->flashdata_succeed();
	   }
       else{
            $this->flashdata_failed();
        }
    }

	public function do_edit($id){
        $get = $this->M_data->GetData("testimoni ","where id = '$id'");
        $data = array(
            'id' => $id,
            'tanggal' => $get[0]['tanggal'] ,
            'testimoni' => $get[0]['testimoni'],
            'judul' => $get[0]['judul'],
            'nav'=> $this->nav(),
			'footer'=> $this->footer(),
			
            
        );
        
        $this->load->view('backend/testimoni/form_edit_testimoni',$data);
    }

    public function do_update(){
            $id = $this->input->post('id');
        
        $get = $this->M_data->GetData2("testimoni ","where id = '$id'")->row();
        $where = array('id' => $id);
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'testimoni' =>$this->input->post('testimoni'),
            'judul' =>$this->input->post('judul'),
           
        );
        
        $res = $this->M_data->UpdateData('testimoni',$data,$where);
        if($res>=1){
            $this->flashdata_succeed();
        }
        else{
            $this->flashdata_failed();
        }
    }

	public function nav(){
		$data = array();
		$show = $this->load->view('nav',$data,TRUE);
		return $show;
	}
	public function footer(){
		$data = array();
		$show = $this->load->view('footer',$data,TRUE);
		return $show;
	}

	public function flashdata_succeed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Action Succeed !!!</div></div>");
                redirect('C_testimoni/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('C_testimoni/index');
    }
}

