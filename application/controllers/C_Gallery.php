<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Gallery extends CI_Controller {
    function __construct() {
        parent::__construct();
        if ($this->session->userdata('role')!="admin") {
            redirect('Login'); }
        $this->load->helper('form','url');
        
    }
    
    public function index()
    {
        $data = $this->M_data->showdata('gallery');
        $show = array(
            'nav'=> $this->nav(),
            'footer'=> $this->footer(),
            'data' => $data,
            
        );
        $this->load->view('backend/v_Gallery',$show);
    }

    public function add()
    {
        $show = array(
            'nav'=> $this->nav(),
            'footer'=> $this->footer(),
            
        );
        $this->load->view('backend/Gallery/form_tambah_gallery',$show);
    }
    public function do_insert()
    {
        
      $config['upload_path'] = './assets_b/img/'; //path folder
        $config['allowed_types'] = 'jpg|jpeg|bmp|png|gif';
        $config['max_size'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';

        $this->load->library('upload',$config);

            $this->upload->do_upload('gambar');
            
                $gbr = $this->upload->data();
               
                $makanan = $this->input->post('makanan');
                $status = $this->input->post('status');
                $data = array(
                
                'makanan' => $makanan,
                'status' => $status,
                'gambar' =>$gbr['file_name']
                 );

                $this->M_data->InsertData('gallery',$data); //akses model untuk menyimpan ke database

                $this->ubah_ukuran(); 
                //pesan yang muncul jika resize error dimasukkan pada session flashdata
                if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
                }
                //pesan yang muncul jika berhasil diupload pada session flashdata
                else {
                    $this->flashdata_succeed();
                }//jika berhasil maka akan ditampilkan view upload
    }

    public function do_delete($id){
        $where = array('id' => $id);
        $res = $this->M_data->DeleteData('gallery',$where);
        if($res>=1){
            $this->flashdata_succeed();
       }
       else{
            $this->flashdata_failed();
        }
    }

    public function do_edit($id){
        $get = $this->M_data->GetData("gallery ","where id = '$id'");
        $data = array(
            'id' => $id,
            'makanan' => $get[0]['makanan'] ,
            'status' => $get[0]['status'] ,
            'gambar' => $get[0]['gambar'],
            'nav'=> $this->nav(),
            'footer'=> $this->footer(),
            
            
        );
        
        $this->load->view('backend/Gallery/form_edit_gallery',$data);
    }

    public function do_update(){
            $image = $_FILES['gambar']['name'];
        $id = $this->input->post('id');
        $get = $this->M_data->GetData2("gallery ","where id = '$id'")->row();
        $gambar = array('gambar' => $get->gambar);
        $where = array('id' => $id);
        if($image==''){
             $data = array(
                
                'makanan' =>$this->input->post('makanan'),
                'status' =>$this->input->post('status'),
                
                'gambar' => $gambar['gambar']);
             
                $this->M_data->UpdateData('gallery',$data,$where);
                $this->flashdata_succeed();
        
        }else{
            @unlink('./assets_b/img/'.$get->gambar);
            @unlink('./assets_b/img_resize/'.$get->gambar);
             $config['upload_path'] = './assets_b/img/'; //path folder
                $config['allowed_types'] = 'jpg|jpeg|bmp|png|gif';
                $config['max_size'] = '2000';
                $config['max_width'] = '2000';
                $config['max_height'] = '2000';

        $this->load->library('upload',$config);

            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
               
                $makanan = $this->input->post('makanan');
                 $status = $this->input->post('status');
              
                $data = array(
               
                'makanan' => $makanan,
                'status' => $status,
             
                'gambar' =>$gbr['file_name']
                 );
                $this->M_data->UpdateData('gallery',$data,$where); //akses model untuk menyimpan ke database
               $this->ubah_ukuran();

                //pesan yang muncul jika resize error dimasukkan pada session flashdata
                if ( !$this->image_lib->resize()){
                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              }
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->flashdata_succeed(); //jika berhasil maka akan ditampilkan view upload
                
            }else{
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

     public function ubah_ukuran(){
        $config2['image_library'] = 'gd2'; 
                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                $config2['new_image'] = './assets_b/img_resize/'; // folder tempat menyimpan hasil resize
                $config2['maintain_ratio'] = TRUE;
                $config2['width'] = 150; //lebar setelah resize menjadi 100 px
                $config2['height'] = 150; //lebar setelah resize menjadi 100 px
                $this->load->library('image_lib',$config2);      
    }

    public function flashdata_succeed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Action Succeed !!!</div></div>");
                redirect('C_Gallery/index');
    }
    public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Action Failed !!!</div></div>");
                redirect('C_Gallery/index');
    }
}

