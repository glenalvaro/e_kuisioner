<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_respon');
		$this->load->model('M_survei');
		$this->load->model('M_setting');
		$this->load->model('M_detail');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Detail Hasil Survei';
		$d['detail_survei'] = $this->M_detail->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('detail_survei/list',$d);
		$this->load->view('templates/footer');
	}
	function delete_all(){
        $id = $_POST['id']; 
        $this->M_detail->delete($id); // Panggil fungsi delete dari model
        $this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
        redirect('detail');
    }
}