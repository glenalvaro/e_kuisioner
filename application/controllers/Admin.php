<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_pengguna');
		$this->load->model('M_setting');
		$this->load->model('M_respon');
		$this->load->model('M_survei');
		$this->load->model('M_unsur');
		if($this->session->userdata('level') != 'admin')
		{
			redirect('auth');
		}
	}

	function index(){
		$data['title'] = 'Dashboard';
		$data['total_respon'] = $this->M_respon->jumlah_responden();
		$data['total_survei'] = $this->M_survei->jumlah_survei();
		$data['pengguna'] = $this->M_pengguna->jumlahPengguna();
		$data['total_unsur'] = $this->M_unsur->jumlahUnsur();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/halaman_admin', $data);
		$this->load->view('templates/footer');
	}
}