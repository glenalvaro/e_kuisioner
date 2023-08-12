<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_setting');
		
	}

	function index(){
		$data['title'] = 'Halaman Profil';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('profil/profil');
		$this->load->view('templates/footer');
	}
}