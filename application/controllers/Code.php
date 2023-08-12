<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Code extends CI_Controller 
{
 
	function __construct()
	{	
		parent::__construct();
		$this->load->model('M_setting');
		$this->load->library('phpqrcode/qrlib');
		$this->load->helper('url');
		if($this->session->userdata('level') != 'admin')
		{
			redirect('auth');
		}
	}
 
	function index()
	{
		$data['title'] = 'Code Aplikasi';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('code/qrcode', $data);
		$this->load->view('templates/footer');
	}
 
	function qrcodeGenerator()
	{
		
		
		$qrtext = $this->input->post('qrcode_text');
		
		if(isset($qrtext))
		{
 
			//file path for store images
		    $SERVERFILEPATH = $_SERVER['DOCUMENT_ROOT'].'/e-kuisioner/images/';
			$text = $qrtext;
			$text1= substr($text, 0,9);
			$logopath = 'http://ourcodeworld.com/resources/img/ocw-empty.png';
			
			$folder = $SERVERFILEPATH;
			$file_name1 = $text1."-Qrcode" . rand(2,200) . ".png";
			$file_name = $folder.$file_name1;
			QRcode::png($text,$file_name,$logopath);
			
			echo"<center><img src=".base_url().'images/'.$file_name1."></center";
		}
		else
		{
			echo 'No Text Entered';
		}	
	}

	function print(){
		$data['title'] = 'Print QR-Code';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('code/print', $data);	
	}
}