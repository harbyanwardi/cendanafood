<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Layanan extends CI_Controller {

	function __construct() {
        parent::__construct();
        if ($this->session->userdata('role')!="admin") {
            redirect('Login'); }
        $this->load->helper('form','url');
        
    }
	public function index()
	{
		$data = $this->M_data->joinmakanan();
		$show = array(
			'nav'=> $this->nav(),
			'footer'=> $this->footer(),
			'data' => $data,
			
		);
		$this->load->view('backend/layanan/index',$show);
	}
    public function lanjut()
    {
        $id_layanan = $_POST['id_layanan'];
        $get = $this->M_data->GetData("menu_layanan ","where id_layanan = '$id_layanan'");
        $data = array(
            'id_layanan' => $id_layanan,
           'nav'=> $this->nav(),
            'footer'=> $this->footer(),
            'get' => $get,
        );
     
       
        $this->load->view('backend/layanan/form_tambah_makanan',$data);
    }
	public function add()
	{
         $get = $this->M_data->GetData("layanan");
		$show = array(
			'nav'=> $this->nav(),
			'footer'=> $this->footer(),
            'get' => $get,
			
		);
		$this->load->view('backend/layanan/form_tambah_layanan',$show);
	}
	public function do_insert()
	{
		
		$id_layanan = $_POST['id_layanan'];
        $id_menu_layanan = $_POST['id_menu_layanan'];
        $nama_makanan = $_POST['nama_makanan'];
       
        $data_insert = array(
            'id_layanan' => $id_layanan,
            'id_menu_layanan' => $id_menu_layanan,
            'nama_makanan' => $nama_makanan,
            
        );
        $res = $this->M_data->InsertData('makanan',$data_insert);
        if($res>=1){
            $this->flashdata_succeed();
        }
        else{
            $this->flashdata_failed();
        }
 
    }

    public function do_delete($id){
		$where = array('id' => $id);
		$res = $this->M_data->DeleteData('makanan',$where);
		if($res>=1){
			$this->flashdata_succeed();
	   }
       else{
            $this->flashdata_failed();
        }
    }

	public function do_edit($id){
        $get = $this->M_data->GetData("makanan ","where id = '$id'");
        $id_layanan = $get[0]['id_layanan'];
        $id_menu_layanan = $get[0]['id_menu_layanan'];
        $getlayanan = $this->M_data->GetData("layanan ","where id = '$id_layanan'");
        $getmenu = $this->M_data->GetData("menu_layanan ","where id = '$id_menu_layanan'");   
        $data = array(
            'id' => $id,
            'id_layanan' => $get[0]['id_layanan'] ,
            'id_menu_layanan' => $get[0]['id_menu_layanan'],
            'nama_makanan' => $get[0]['nama_makanan'] ,
            'jenis_layanan' => $getlayanan[0]['jenis_layanan'] ,
            'jenis_menu' => $getmenu[0]['jenis_menu'] ,
            'nav'=> $this->nav(),
			'footer'=> $this->footer(),   
        );
        
        $this->load->view('backend/layanan/form_edit_layanan',$data);
    }

    public function do_update(){
            $id = $this->input->post('id');
        
        $get = $this->M_data->GetData2("makanan ","where id = '$id'")->row();
        $where = array('id' => $id);
        $data = array(
            'id_layanan' => $this->input->post('id_layanan'),
            'id_menu_layanan' =>$this->input->post('id_menu_layanan'),
            'nama_makanan' =>$this->input->post('nama_makanan'),
           
        );
        
        $res = $this->M_data->UpdateData('makanan',$data,$where);
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
                redirect('C_Layanan/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('C_Layanan/index');
    }
}

