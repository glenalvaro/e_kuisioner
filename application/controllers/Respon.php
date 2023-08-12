<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Respon extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_respon');
		$this->load->model('M_survei');
		$this->load->model('M_setting');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Data Responden';
		$d['respon'] = $this->M_respon->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('responden/list',$d);
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data['title'] = 'Form Kuisioner';
		$data['seting'] = $this->M_setting->tampil_data()->result();
		$data["fetch_data1"] = $this->M_respon->fetch_data1();
		$this->load->view('responden/add', $data);
	}

	function submited(){
		$d['title'] = 'Form Kuisioner';
		$d['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('responden/berhasil',$d);
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$nomor_hp = $this->input->post('nomor_hp');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$pendidikan = $this->input->post('pendidikan');
		$usia = $this->input->post('usia');
		$tanggal_survei = $this->input->post('tanggal_survei');
		$jam_survei = $this->input->post('jam_survei');
		$jenis_layanan = $this->input->post('jenis_layanan');

		$data = array(
			'nama' => $nama,
			'nomor_hp' => $nomor_hp,
			'jenis_kelamin' => $jenis_kelamin,
			'pekerjaan' => $pekerjaan,
			'pendidikan' => $pendidikan,
			'usia' => $usia,
			'tanggal_survei' => $tanggal_survei,
			'jam_survei' => $jam_survei,
			'jenis_layanan' => $jenis_layanan,
			);


		$this->M_survei->input_data($data,'t_responden');
		$data['title'] = 'Form Kuisioner';
		$data['seting'] = $this->M_setting->tampil_data()->result();
		$data["kuisioner"] = $this->M_respon->kuisioner();
		$data['query'] = $this->db->select_max('id');
		$data['query'] = $this->db->get('t_responden');
        foreach ($data['query']->result() as $key) {
            $data['id_max'] =  $key->id;
        }
		$this->load->view('responden/submit', $data);
	}


	 function simpanJawaban()
    {
        $data = $_POST['jsonObj'];
        if($data['tipe'] == "A"){
            $skor = 1;
        }
        else if($data['tipe'] == "B"){
            $skor = 2;
        }
        else if($data['tipe'] == "C"){
            $skor = 3;
        }
        else{
            $skor = 4;
        }
        $list = $this->db->get_where("detail_survey",array(
            'id_survey'=>$data['id_survey'],
            'no_soal'=>$data['no_soal']
        ));
        foreach ($list->result() as $key) {
            $id =  $key->id;
         } 
        if($list->num_rows() > 0 )
        {
           // echo "update";
           $this->db->update_where("detail_survey",array(
                'id_survey' =>$data['id_survey'],
                'no_soal'   =>$data['no_soal'],
                'jawaban'   =>$data['jawaban'],
                'type'      =>$data['tipe'],
                'skor'      =>$skor
                ),  
                'id',$id,
                'no_soal',$data['no_soal'], 
                'id_survey',$data['id_survey']
                );
        }
        else{
           // echo "insert";
            $this->db->insert("detail_survey",array(
                'id_survey' =>$data['id_survey'],
                'no_soal'   =>$data['no_soal'],
                'jawaban'   =>$data['jawaban'],
                'type'      =>$data['tipe'],
                'skor'      =>$skor
               ));

        $d['title'] = 'Form Kuisioner';
		$d['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('responden/berhasil',$d);

        }

    }

	function edit($id){
		$where = array('id' => $id);
		$d['respon'] = $this->M_respon->edit_data($where,'t_responden')->result();
		$d['survei'] = $this->M_survei->tampil_data($where,'t_survei')->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Edit Responden';
		$this->load->view('templates/header', $data);
		$this->load->view('responden/edit',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function detail($id)
	{
		$where = array('id' => $id);
		$d['respon'] = $this->M_respon->detail($where,'t_responden')->result();
		$d['survei'] = $this->M_survei->tampil_data($where,'t_survei')->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$d['jawaban'] = $this->M_respon->getJawabanById($id);
		$d['pertanyaan1'] = $this->M_survei->tampil_data()->result();
		$data['title'] = 'Detail Data Responden';
		$this->load->view('templates/header', $data);
		$this->load->view('responden/detail',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nomor_hp = $this->input->post('nomor_hp');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$pendidikan = $this->input->post('pendidikan');
		$usia = $this->input->post('usia');
		$tanggal_survei = $this->input->post('tanggal_survei');
		$jenis_layanan = $this->input->post('jenis_layanan');
		

 
		$data = array(
			'nama' => $nama,
			'nomor_hp' => $nomor_hp,
			'jenis_kelamin' => $jenis_kelamin,
			'pekerjaan' => $pekerjaan,
			'pendidikan' => $pendidikan,
			'usia' => $usia,
			'tanggal_survei' => $tanggal_survei,
			'jenis_layanan' => $jenis_layanan
			);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_survei->update_data($where,$data,'t_responden');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('respon');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->M_respon->hapus_data($where,'t_responden');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
		redirect('respon');
	}

	function print(){
		$data['title'] = 'Print Data Responden';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['print'] = $this->M_respon->tampil_data()->result();
		$this->load->view('responden/print', $data);	
	}

	function print_id($id){
		$where = array('id' => $id);
		$data['title'] = 'Print Data Responden';
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['print'] = $this->M_respon->detail($where, 't_responden')->result();
		$data['pertanyaan1'] = $this->M_survei->tampil_data()->result();
		$data['jawab'] = $this->M_respon->getJawabanById($id);
		$this->load->view('responden/print_id', $data);	
	}

	function delete_all(){
        $id = $_POST['id']; // Ambil data NIS yang dikirim oleh view.php melalui form submit
        $this->M_respon->delete($id); // Panggil fungsi delete dari model
        $this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
        redirect('respon');
    }

     function export_excel(){
        
        $data1['respon'] = $this->M_respon->tampil_data()->result();

	    require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
	    require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

	$objPHPExcel = new PHPExcel();

	$objPHPExcel->getproperties()->setCreator("administrator");
	$objPHPExcel->getproperties()->setLastModifiedBy("administrator");
	$objPHPExcel->getproperties()->setTitle("Data Responden");
	$objPHPExcel->getproperties()->setSubject("");
	$objPHPExcel->getproperties()->setDescription("");

	$objPHPExcel->setActiveSheetIndex(0);

	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'No');
	$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nama');
	$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Jenis Kelamin');
	$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Usia');
	$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Pendidikan');
	$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Pekerjaan');
	$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Jenis Layanan');
	
	$baris=2;
	$x=1;
	
	foreach ($data1['respon'] as $data){
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris, $x );
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris, $data->nama );
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris, $data->jenis_kelamin );
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$baris, $data->usia );
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$baris, $data->pendidikan );
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$baris, $data->pekerjaan );
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$baris, $data->jenis_layanan );
	
		
		$x++;
		$baris++;
	}

	 	$filename="Data-Responden".date("d-m-Y").'.xlsx';

		$objPHPExcel->getActiveSheet()->setTitle("Data Responden");
		
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
		$writer->save('php://output');
		
		exit;
    }

    function hasil(){
    	$data['title'] = 'Hasil Survei';
    	$data['setting'] = $this->M_setting->tampil_data()->result();
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/sidebar');
    	$this->load->view('responden/hasil');
    	$this->load->view('templates/footer');
    }

     /* METHOD "SEARCH"*/
    function search()
    {
        $tanggal =  date("Y-m-d",strtotime($_GET['tanggal']));
        $jadwal = $this->db->get_where("t_responden", array(
            'tanggal_survei'=>$tanggal
        ));
        $row = $jadwal->row_array();
        if($jadwal->num_rows() > 0){
           $data['join'] =  
            $this->db->query("
                select  u.id_unsur, u.nama_unsur, SUM(d.skor) as Nilai_Per_Unsur, 
                        round((SUM(d.skor)/COUNT(type)),3) AS NRR_per_unsur, 
                        round((SUM(d.skor)/COUNT(type))*0.071, 3) AS NRR_Tertimbang 
                        from t_responden s 
                        INNER JOIN detail_survey d on d.id_survey = s.id 
                        INNER JOIN t_unsur u on u.id_soal = d.no_soal 
                        where s.id = '$row[id]' GROUP BY d.no_soal
                        "
                        );
       
		        $data['unsur'] = $this->db->get("t_unsur");
                $data['content'] =   $this->load->view('responden/content',$data,TRUE);
		    	$this->load->view('responden/content',$data);
		    	
        }else{
               
                $data['unsur'] = $this->db->get("t_unsur");
                $data['content'] =   $this->load->view('responden/content',$data,TRUE);
		    	$this->load->view('responden/content',$data);
		    	
        }
    } 

     function searchNrr()
    {
        $tanggal =  date("Y-m-d",strtotime($_GET['tanggal']));
        $jadwal = $this->db->get_where("t_responden", array(
            'tanggal_survei'=>$tanggal
        ));
        $row = $jadwal->row_array();
        if($jadwal->num_rows() > 0){
               $data['join'] =  $this->db->query("
                     select u.*,s.id,d.*, SUM(d.skor) as skor, COUNT(type) AS type from t_responden s INNER JOIN detail_survey d on d.id_survey = s.id INNER JOIN t_unsur u on u.id_soal = d.no_soal where s.id = '$row[id]' GROUP BY d.no_soal"
                    );         

                $data['unsur'] = $this->db->get("t_unsur");
                $data['content'] =   $this->load->view('responden/content',$data,TRUE);
		    	$this->load->view('responden/contents',$data);
        }
        else{
                // $data['level'] = $this->session->userdata('level_id');
                // $data['email'] = $this->session->userdata('email');
                // $data['unsur'] = core::getAll("unsur","gammu");
                // $data['include'] =   $this->load->view('/search/include','',TRUE);
                // $data['content'] =   $this->load->view('/search/content',$data,TRUE);
                // $this->load->view("kuesioner/search/content");
        }
    }   
      
}