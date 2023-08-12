<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisioner extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_respon');
		$this->load->model('M_survei');
		$this->load->helper('url');
		$this->load->model('M_setting');
	}

	function index(){
		$data['title'] = 'Halaman Kuisioner';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		 $this->load->view('halaman_kuisioner', $data);
	}
}