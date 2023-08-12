<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survei extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_survei');
		$this->load->model('M_setting');
		$this->load->helper('url');
		
	}

	function index(){
		$data['title'] = 'Pengisian Survei';
		$d['survei'] = $this->M_survei->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('survei/list',$d);
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data['title'] = 'Tambah Data';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('survei/add');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function tambah_aksi(){
		$id = $this->input->post('id');
		$pertanyaan = $this->input->post('pertanyaan');
		$A = $this->input->post('A');
		$B = $this->input->post('B');
		$C = $this->input->post('C');
		$D = $this->input->post('D');
		

 
		$data = array(
			'id' => $id,
			'pertanyaan' => $pertanyaan,
			'A' => $A,
			'B' => $B,
			'C' => $C,
			'D' => $D
			);


		$this->M_survei->input_data($data,'t_survei');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambahkan.
											</div>'
										);
		redirect('survei');
	}

	function detail($id){
		$where = array('id' => $id);
		$d['detail'] = $this->M_survei->detail($where,'t_survei')->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Detail Data Survei';
		$this->load->view('templates/header', $data);
		$this->load->view('survei/detail',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	function edit($id){
		$where = array('id' => $id);
		$d['survei'] = $this->M_survei->edit_data($where,'t_survei')->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Edit Survei';
		$this->load->view('templates/header', $data);
		$this->load->view('survei/edit',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function update(){
		$id = $this->input->post('id');
		$pertanyaan = $this->input->post('pertanyaan');
		$A = $this->input->post('A');
		$B = $this->input->post('B');
		$C = $this->input->post('C');
		$D = $this->input->post('D');
		

 
		$data = array(
			'pertanyaan' => $pertanyaan,
			'A' => $A,
			'B' => $B,
			'C' => $C,
			'D' => $D
			);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_survei->update_data($where,$data,'t_survei');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('survei');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->M_survei->hapus_data($where,'t_survei');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
		redirect('survei');
	}

	function print(){
		$data['title'] = 'Print Data Survei';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['print'] = $this->M_survei->tampil_data()->result();
		$this->load->view('survei/print', $data);	
	}

	function delete_all(){
        $id = $_POST['id']; // Ambil data NIS yang dikirim oleh view.php melalui form submit
        $this->M_survei->delete($id); // Panggil fungsi delete dari model
        $this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
        redirect('survei');
    }
}