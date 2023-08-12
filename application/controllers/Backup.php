<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_pengguna');
		$this->load->model('M_respon');
		$this->load->model('M_survei');
		$this->load->model('M_setting');
		$this->load->helper('url');
		if($this->session->userdata('level') != 'admin')
		{
			redirect('auth');
		}
	}

	function index(){
		$data['title'] = 'Halaman Backup Database';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backup/backup');
		$this->load->view('templates/footer');
	}

	function backup(){
		$this->load->dbutil();

		$tanggal = date('Y-m-d');

		$prefs = array(
			'format' => 'zip',
			'filename' => 'Kuisioner_'.$tanggal.'_db.sql',
			'add_drop' => FALSE,
			'add_insert' => TRUE,
			'newline' => "\n",
			'foreign_key_checks' => FALSE,
		);

		$backup = $this->dbutil->backup($prefs);
		$nama_file ='Kuisioner_'.$tanggal.'.zip';
		$this->load->helper('download');
		force_download($nama_file, $backup);
	}
}