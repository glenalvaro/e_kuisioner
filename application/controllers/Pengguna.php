<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_pengguna');
		$this->load->helper('url');
		$this->load->model('M_setting');
		if($this->session->userdata('level') != 'admin')
		{
			redirect('auth');
		}
	}

	function index(){
		$data['title'] = 'Data Pengguna';
		$d['pengguna'] = $this->M_pengguna->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pengguna/list',$d);
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data['title'] = 'Tambah Data Pengguna';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('pengguna/add');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function tambah_aksi(){
		$input = array(
		$nip = 	$this->input->post('nip'),
		$nama = $this->input->post('nama'),
		$email = $this->input->post('email'),
		$tempat_lahir = $this->input->post('tempat_lahir'),
		$tgl_lahir = $this->input->post('tgl_lahir'),
		$usia = $this->input->post('usia'),
		$alamat = $this->input->post('alamat'),
		$username = $this->input->post('username'),
		$pass = $this->input->post('pass'),
		$password = $this->input->post('password'),
		$level = $this->input->post('level'),
		$file_path = "upload/img/profile/" . $this->input->post('nip') . ".jpg"
	);
 
		$data = array(
			'nip'		=> $nip,
			'nama' => $nama,
			'email' => $email,
			'tempat_lahir' => $tempat_lahir,
			// 'tgl_lahir' => $tgl_lahir,
			'tgl_lahir'   => date("Y-m-d", strtotime($this->input->post('birthday'))),
            'usia' => $usia,
			'alamat' => $alamat,
			'username' => $username,
			'pass' => $pass,
			'password' => md5($pass),
			'level' => $level,
			'image' => $file_path,
			);

		$file_tmp = $_FILES['image']['tmp_name'];
				$file_type = $_FILES['image']['type'];
				$file_error = $_FILES['image']['error'];
				$file_size = $_FILES['image']['size'];
				$file_path = "upload/img/profile/" . $this->input->post('nip') . ".jpg";

				if ($file_type == "image/jpeg" || $file_type == "image/png") {
					if ($file_size > 0 and  $file_error == 0) {
						move_uploaded_file($file_tmp, "upload/img/profile/" . $this->input->post('nip') . ".jpg");
					}
				}


		$this->M_pengguna->input_data($data, 'tb_user');
				if ($input == null) {
					$this->session->set_flashdata(
						'msg',
						'<div class="alert alert-danger">
				<h4>Oppss</h4>
				<p>Gagal.</p>
				</div>'
					);
					$this->load->view('pengguna/add');
				} else {
					$this->session->set_flashdata(
						'msg',
						'<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data pengguna berhasil ditambah.
											</div>'
					);
					$this->load->view('pengguna/add');
				};

				redirect('pengguna');
	}

	function detail($id){
		$where = array('id' => $id);
		$d['detail'] = $this->M_pengguna->detail($where,'tb_user')->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Detail Data Pengguna';
		$this->load->view('templates/header', $data);
		$this->load->view('pengguna/detail',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
}

	function edit($id){
		$where = array('id' => $id);
		$d['user'] = $this->M_pengguna->edit_data($where,'tb_user')->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Edit Data Pengguna';
		$this->load->view('templates/header', $data);
		$this->load->view('pengguna/edit',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function update()
			{
				$input = array(
					$id = $this->input->post('id'),
					$nip = 	$this->input->post('nip'),
					$nama = $this->input->post('nama'),
					$email = $this->input->post('email'),
					$tempat_lahir = $this->input->post('tempat_lahir'),
					$tgl_lahir = $this->input->post('tgl_lahir'),
					$usia = $this->input->post('usia'),
					$alamat = $this->input->post('alamat'),
					$username = $this->input->post('username'),
					$pass = $this->input->post('pass'),
					$password = $this->input->post('password'),
					$level = $this->input->post('level'),
					$file_path = "upload/img/profile/" . $this->input->post('nip').".jpg"
				);

				if ($_FILES['image']['name'] == '') {

					$data = array(

						'nip'	=> $nip,
						'nama' => $nama,
						'email' => $email,
						'tempat_lahir' => $tempat_lahir,
						// 'tgl_lahir' => $tgl_lahir,
						'tgl_lahir'   => date("Y-m-d", strtotime($this->input->post('birthday'))),
            			'usia' => $usia,
						'alamat' => $alamat,
						'username' => $username,
						'pass' => $pass,
						'password' => md5($pass),
						'level' => $level,

					);
				} else {
					$data = array(


						'nip'	=> $nip,
						'nama' => $nama,
						'email' => $email,
						'tempat_lahir' => $tempat_lahir,
						// 'tgl_lahir' => $tgl_lahir,
						'tgl_lahir'   => date("Y-m-d", strtotime($this->input->post('birthday'))),
            			'usia' => $usia,
						'alamat' => $alamat,
						'username' => $username,
						'pass' => $pass,
						'password' => md5($pass),
						'level' => $level,
						'image' => $file_path,

					);

					$file_tmp = $_FILES['image']['tmp_name'];
					$file_type = $_FILES['image']['type'];
					$file_error = $_FILES['image']['error'];
					$file_size = $_FILES['image']['size'];
					// $file_path = "assets/images/".$_POST['nip'].".jpg";
					//$file_path = "assets/images/".$this->input->post('nip').".jpg";

					if ($file_type == "image/jpeg" || $file_type == "image/png") {
						if ($file_size > 0 and  $file_error == 0) {
							if (!move_uploaded_file($file_tmp, $file_path)) {
								exit(3);
							}
						} else {
							exit(2);
						}
					} else {
						exit(1);
					}
				}

				$where = array('id' => $id);

				$this->M_pengguna->update_data($where, $data, 'tb_user');
				if ($input == null) {
					$this->session->set_flashdata(
						'msg',
						'<div class="alert alert-danger">
				<h4>Oppss</h4>	
				<p>Data Gagal Diedit</p>
				</div>'
					);
					$this->load->view('pengguna/add');
				} else {
					$this->session->set_flashdata(
						'msg',
						'<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
					);
					$this->load->view('pengguna/add');
				}
				redirect('pengguna');
			}

	function hapus($id){
		$where = array('id' => $id);
		$this->M_pengguna->hapus_data($where,'tb_user');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('pengguna');
	}
}