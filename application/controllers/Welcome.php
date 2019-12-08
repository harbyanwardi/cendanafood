<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}
	
	public function index()
	{
	     $abt = $this->M_data->GetData("about");
	     $testi = $this->M_data->GetData("testimoni");
	     $glr = $this->M_data->GetData("gallery ","where status = 'ACTIVE'");
	    $show = array(
			'nav'=> $this->nav(),
			'footer'=> $this->footer(),
			'testi' => $testi,
			'glr' => $glr,
			'abt' => $abt,
		);
		$this->load->view('index',$show);
	}
	
	public function act_download(){				
		force_download('./assets/pdf/Brochure.pdf',NULL);
	}

	public function tentang($id)
	{
	    $get = $this->M_data->GetData("about ","where id = '$id'");
	    $show = array(
			'nav'=> $this->nav(),
			'footer'=> $this->footer(),
			'id' => $id,
            'foto' => $get[0]['foto'] ,
            'prg1' => $get[0]['prg1'],
            'prg2' => $get[0]['prg2'],
            'prg3' => $get[0]['prg3'],
            'prg4' => $get[0]['prg4'],
            'visi' => $get[0]['visi'],
            'misi' => $get[0]['misi'],
		);
		$this->load->view('v_tentang',$show);
	}

	public function layanan()
	{
	    $menu = $this->M_data->GetData("layanan");
	    $paket = $this->M_data->GetData("menu_layanan");
	    $data = $this->M_data->joinmakanan();
	    $show = array(
			'nav'=> $this->nav(),
			'footer'=> $this->footer(),
			'data' => $data,
			'menu' => $menu,
			'paket' => $paket,
		);
		$this->load->view('v_layanan',$show);
	}
	
	public function gallery()
	{
	    $data = $this->M_data->GetData("gallery");
	   
	    $show = array(
			'nav'=> $this->nav(),
			'footer'=> $this->footer(),
			'data' => $data,
		
		);
		$this->load->view('v_gallery',$show);
	}
	
	public function testimoni()
	{
	    $testi = $this->M_data->GetData("testimoni");
	   
	    $show = array(
			'nav'=> $this->nav(),
			'footer'=> $this->footer(),
			'testi' => $testi,
		
		);
		$this->load->view('v_testimoni',$show);
	}
	
	public function kirim_email()
    {
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $message=$this->input->post('message');
        $data = array(
                
                'name' => $name,
                'email' => $email,
              'message' => $message
                 );
        $da=$this->M_data->InsertData('contact',$data);
        // echo json_encode($da);
      
        // Konfigurasi email
        $config = [
               'useragent' => 'CodeIgniter',
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'getukkelapa@gmail.com', // Ganti dengan email gmail Anda
               'smtp_pass' => 'onaironline', // Password gmail Anda
               'smtp_port' => 465,
               'smtp_keepalive' => TRUE,
               'smtp_crypto' => 'SSL',
               'wordwrap'  => TRUE,
               'wrapchars' => 80,
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'validate'  => TRUE,
               'crlf'      => "rn",
               'newline'   => "rn",
           ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('info@cendanafood.com');

        // Email penerima
        $this->email->to('getukkelapa@gmail.com'); // Ganti dengan email tujuan Anda

        // Lampiran email, isi dengan url/path file
       

        // Subject email
        $this->email->subject('Contact Form');

        // Isi email
        $this->email->message('Nama : '.$name.' || Email '.$email.' || Message : '.$message);

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
	
	
public function nav(){
		$data = array();
		$show = $this->load->view('nav_front',$data,TRUE);
		return $show;
	}
	public function footer(){
		$data = array();
		$show = $this->load->view('footer_front',$data,TRUE);
		return $show;
	}
}
