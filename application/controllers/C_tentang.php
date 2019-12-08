<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tentang extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('role')!="admin") {
            redirect('Login'); }
        $this->load->helper('form','url','download');
        
    }
    
    public function index($id){
        $get = $this->M_data->GetData("about ","where id = '$id'");
        $data = array(
            'id' => $id,
            'foto' => $get[0]['foto'] ,
            'prg1' => $get[0]['prg1'],
            'prg2' => $get[0]['prg2'],
            'prg3' => $get[0]['prg3'],
            'prg4' => $get[0]['prg4'],
            'visi' => $get[0]['visi'],
            'misi' => $get[0]['misi'],
            'nav'=> $this->nav(),
            'footer'=> $this->footer(),
            
            
        );
        
        $this->load->view('backend/v_tentang',$data);
    }

    public function do_update(){
            $image = $_FILES['foto']['name'];
        $id = $this->input->post('id');
        $get = $this->M_data->GetData2("about ","where id = '$id'")->row();
        $foto = array('foto' => $get->foto);
        $where = array('id' => $id);
        if($image==''){
             $data = array(
                
                'prg1' =>$this->input->post('prg1'),
                'prg2' =>$this->input->post('prg2'),
                'prg3' =>$this->input->post('prg3'),
                'prg4' =>$this->input->post('prg4'),
                'visi' =>$this->input->post('visi'),
                'misi' =>$this->input->post('misi'),
                
                'foto' => $foto['foto']);
             
                $this->M_data->UpdateData('about',$data,$where);
                $this->flashdata_succeed();
        
        }else{
            @unlink('./assets_b/img/'.$get->foto);
           
             $config['upload_path'] = './assets_b/img/'; //path folder
                $config['allowed_types'] = 'jpg|jpeg|bmp|png|gif';
                $config['max_size'] = '2000';
                $config['max_width'] = '2000';
                $config['max_height'] = '2000';

        $this->load->library('upload',$config);

            if ($this->upload->do_upload('foto'))
            {
                $gbr = $this->upload->data();
               
                $tentang = $this->input->post('tentang');
              
                $data = array(
               
                'prg1' => $prg1,
                'prg2' => $prg2,
                'prg3' => $prg3,
                'prg4' => $prg4,
                'visi' => $visi,
                'misi' => $misi,
             
                'foto' =>$gbr['file_name']
                 );
                $this->M_data->UpdateData('about',$data,$where); //akses model untuk menyimpan ke database
                $this->flashdata_succeed();
             }
                //pesan yang muncul jika berhasil diupload pada session flashdata
                 //jika berhasil maka akan ditampilkan view upload
                
            else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->flashdata_failed(); //jika gagal maka akan ditampilkan form upload
            }
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
                redirect('C_tentang/index/1');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('C_tentang/index/1');
    }
}

