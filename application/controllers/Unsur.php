<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unsur extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_unsur');
		$this->load->model('M_survei');
		$this->load->model('M_setting');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Unsur IKM';
		$d['unsur'] = $this->M_unsur->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('unsur/list',$d);
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data['title'] = 'Tambah Data Unsur';
		$d['unsur'] = $this->M_unsur->tampil_data()->result();
		$d['no_soal'] = $this->M_survei->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('unsur/add', $d);
		$this->load->view('templates/footer');
	}

	function tambah_aksi(){
		$id_soal = $this->input->post('id_soal');
		$id_unsur = $this->input->post('id_unsur');
		$nama_unsur = $this->input->post('nama_unsur');
	

 
		$data = array(
			'id_soal' => $id_soal,
			'id_unsur' => $id_unsur,
			'nama_unsur' => $nama_unsur,
			
			);


		$this->M_unsur->input_data($data,'t_unsur');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambahkan.
											</div>'
										);
		redirect('unsur');
	}


	function edit($id){
		$where = array('id' => $id);
		$d['unsur'] = $this->M_unsur->edit_data($where,'t_unsur')->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Edit Unsur IKM';
		$this->load->view('templates/header', $data);
		$this->load->view('unsur/edit',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function update(){
		$id = $this->input->post('id');
		$id_soal = $this->input->post('id_soal');
		$id_unsur = $this->input->post('id_unsur');
		$nama_unsur = $this->input->post('nama_unsur');
		

 
		$data = array(
			'id_soal' => $id_soal,
			'id_unsur' => $id_unsur,
			'nama_unsur' => $nama_unsur,
			);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_unsur->update_data($where,$data,'t_unsur');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('unsur');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->M_unsur->hapus_data($where,'t_unsur');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
		redirect('unsur');
	}

	function delete_all(){
        $id = $_POST['id']; // Ambil data NIS yang dikirim oleh view.php melalui form submit
        $this->M_unsur->delete($id); // Panggil fungsi delete dari model
        $this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
        redirect('unsur');
    }

}