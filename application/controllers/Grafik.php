<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_pengguna');
        $this->load->model('M_setting');
        $this->load->model('M_respon');
        $this->load->model('M_survei');
        if($this->session->userdata('level') != 'admin')
        {
            redirect('auth');
        }
    }

    function index(){
        $data['title'] = 'Grafik';
        $this->load->helper('time_helper');
        $jml['total_respon'] = $this->M_respon->jumlah_responden();
        $jml['total_survei'] = $this->M_survei->jumlah_survei();
        $jml['pengguna'] = $this->M_pengguna->jumlahPengguna();
        $data['setting'] = $this->M_setting->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('grafik/grafik', $jml);
        $this->load->view('templates/footer');
    }

    function hitungNrr($tbl1,$tbl2,$tbl3,$tbl4,$join_by,$join_bys,$join_byes,$database,$array)
    {
        $db = array();
    $db = $this->load->database($database,TRUE);
        $db->select('u.id_unsur, u.nama_unsur, SUM(d.skor) as skor, COUNT(type) AS type');
        $db->from($tbl1);
        $db->join($tbl2, $join_by);
        $db->join($tbl3, $join_bys);
        $db->join($tbl4, $join_byes);
        $where = $array;
        $db->where($where);
        $db->group_by('d.no_soal');
        $query = $db->get();
        return $query;
    }

    function cekBaris($query,$bulan,$tahun,$pdfFilePath)
    {
        $data = array();
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['join']  = $query;
        if($query->num_rows() != 0){
            $html = $this->load->view('grafik/pdf_report', $data, true); // render the view into HTML

            ini_set('memory_limit','32M');
            include_once APPPATH.'/third_party/mpdf/mpdf.php';
            $param = '"en-GB-x","A4-P","","",10,10,10,10,6,3'; 
            $pdf = new mPDF();
            $pdf->AddPage('P','','','','',10,10,2,10,6,3);   
            $pdf->WriteHTML($html); // write the HTML into the PDF
            $pdf->Output($pdfFilePath, 'F'); // save to file because we can
            
            $this->load->helper('download');
            $data = file_get_contents($pdfFilePath); // Read the file's contents
            $name = 'laporanBulanan_'.date('dMy_h_s_i').'.pdf';
            force_download($name, $data);
        }else{
            echo "<script>alert('Laporan untuk bulan $bulan $tahun tidak ada')</script>";
           $this->index();
        }
        return $data;           
    }

     function cetakPdf()
    {
        $this->load->helper('time_helper');
        $data = array();
        $data['bulan'] = bulan($_REQUEST['bulan']);         
        $data['tahun'] = $_REQUEST['tahun'];         
      
         $pdfFilePath = FCPATH.'/laporan/pdf/Bulanan/laporanBulanan_'.date('dMy_h_s_i').'.pdf';
            $data['join'] =  
            $this->db->query("
                select  u.id_unsur, u.nama_unsur, SUM(d.skor) as Nilai_Per_Unsur, 
                        round((SUM(d.skor)/COUNT(type)),3) AS NRR_per_unsur, 
                        round((SUM(d.skor)/COUNT(type))*0.071, 3) AS NRR_Tertimbang 
                        from t_responden s 
                        INNER JOIN detail_survey d on d.id_survey = s.id 
                        INNER JOIN t_unsur u on u.id_soal = d.no_soal 
                        INNER JOIN t_responden j on j.id = s.id 
                        where month(j.tanggal_survei) = '$_REQUEST[bulan]' and year(j.tanggal_survei) = '$_REQUEST[tahun]' GROUP BY d.no_soal "
                        );

                        
            $this->cekBaris($data['join'],$data['bulan'],$data['tahun'],$pdfFilePath);
            
    }

    function cekBarisExcel($query,$bulan,$tahun)
    {
        $data = array();
        $data['join'] = $query;
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
  
        if($query->num_rows() !=0)
        {
            require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
            require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
            
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->getProperties()->setTitle("Laporan Bulanan")->setDescription("none");
 
            $objPHPExcel->setActiveSheetIndex(0);
            // Field names in the first row
            
            $sheet = $objPHPExcel->getActiveSheet();
            // Border in the table
            $objPHPExcel->getActiveSheet(0)->getStyle('A4:F20')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
            
            $objPHPExcel->getSheet(0)->getStyle('A4:F4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
            $objPHPExcel->getSheet(0)->getStyle('A4:F4')->getFill()->getStartColor()->setRGB('D0D0D0');
            $objPHPExcel->getSheet(0)->getStyle('A23:B23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
            $objPHPExcel->getSheet(0)->getStyle('A23:B23')->getFill()->getStartColor()->setRGB('D0D0D0');
            $objPHPExcel->getSheet(0)->getStyle('A37:D37')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
            $objPHPExcel->getSheet(0)->getStyle('A37:D37')->getFill()->getStartColor()->setRGB('D0D0D0');
            
            $sheet->getStyle('A4:F4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            
            $styleArray = array(
             'font' => array(
             // 'underline' => PHPExcel_Style_Font::bold_SINGLE,
             'name' => 'Arial',
             'size' => 18,
             // 'bold' => true
             )
            );
            $sheet->mergeCells('A1:F1');    
            $sheet->mergeCells('A2:F2');    
            $sheet->setCellValue('F4','Mutu Pelayanan');
            $sheet->setCellValue('A1','Survey Indeks Kepuasan Masyarakat');
            $sheet->setCellValue('A2','Bulan'." ". $data['bulan']." ".$data['tahun']);
            $sheet->getStyle('A1:A2')->applyFromArray($styleArray);
            $sheet->getStyle('A1:A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            
            $fields  = $data['join']->list_fields();
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 4, strtoupper($field));
                $col++;
            }
            
            // Fetching the table data
            $row = 5;
            $total = 0;
            foreach($data['join']->result() as $data)
            {
                $total += $data->NRR_Tertimbang;
                $col = 0;
                foreach ($fields as $field)
                {
                    if($col == 1){
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);                                     
                    }else{
                        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);                  
                    }
                    
                    $col++;
                }            
                $row++;
            }
            
            $sheet->mergeCells('A19:D19');    
            $sheet->mergeCells('A20:D20');    
            $sheet->setCellValue('A19','Total NRR');
            $sheet->setCellValue('A20','IKM UNIT PELAYANAN ('.round($total,3).' * 25)');
            $sheet->getStyle('A19:D20')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle('C4:F20')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
           
            $sheet->setCellValue('E19', round($total,3));
            $sheet->setCellValue('E20', round($total,3)*25);
            $NilaiIkm = round($total,3)*25;
            if($NilaiIkm>=88.31 && $NilaiIkm<=100.00){
              $grade = "A";
              $ket   = "(Sangat Baik)";
            }
            else if($NilaiIkm>=76.61 && $NilaiIkm<=88.30){
              $grade = "B";              
              $ket   = "(Baik)";
            }
            else if($NilaiIkm>=55 && $NilaiIkm<=76.60){
              $grade = "C";              
              $ket   = "(Kurang Baik)";
            }
            else if($NilaiIkm>=25 && $NilaiIkm<=54.99){
              $grade = "D";              
              $ket   = "(Tidak Baik)";
            }
            else{ 
              $grade = "";              
              $ket   = "";
            }

            $objPHPExcel->getActiveSheet(0)->getStyle('A23:B34')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
   
            $sheet->getStyle('A23:B23')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle('B29')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            
            $sheet->setCellValue('F20', $grade ." ". $ket);
            $sheet->setCellValue('A23', 'Keterangan');
            $sheet->setCellValue('B23', 'Unsur-Unsur Pelayanan');
            $sheet->setCellValue('A24', 'U01 s/d U09');
            $sheet->setCellValue('B24', 'Unsur-Unsur Pelayanan');
            $sheet->setCellValue('A25', 'NRR');
            $sheet->setCellValue('B25', 'Nilai Rata-Rata');
            $sheet->setCellValue('A26', 'IKM');
            $sheet->setCellValue('B26', 'Indeks Kepuasan Masyarakat');
            $sheet->setCellValue('A27', 'NRR Per Unsur');
            $sheet->setCellValue('B27', 'Jumlah nilai per unsur dibagi jumlah kuesioner yang terisi');
            $sheet->setCellValue('A28', 'NRR Tertimbang');
            $sheet->setCellValue('B28', 'NRR Per Unsur x 0,071');
            $sheet->setCellValue('A29', 'IKM UNIT PELAYANAN');
            $sheet->setCellValue('B29', $NilaiIkm);
            $sheet->setCellValue('A30', 'Mutu Pelayanan');
            $sheet->setCellValue('B30', '');
            $sheet->setCellValue('A31', 'A (Sangat Baik)');
            $sheet->setCellValue('B31', '88,31 - 100,00');
            $sheet->setCellValue('A32', 'B (Baik)');
            $sheet->setCellValue('B32', '76,61 - 88,30');
            $sheet->setCellValue('A33', 'C (Kurang Baik)');
            $sheet->setCellValue('B33', '55,00 - 76,60');
            $sheet->setCellValue('A34', 'D (Tidak Baik)');
            $sheet->setCellValue('B34', '25,00 - 54,99');

        
            
            foreach(range('A','G') as $columnID) {
                $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
                                              ->setAutoSize(true);             
            }
            
            $objPHPExcel->setActiveSheetIndex(0);
     
           $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
     
            // Sending headers to force the user to download the file
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="laporanBulananExcel_'.date('dMy_h_s_i').'.xlsx"');
            header('Cache-Control: max-age=0');
     
            $objWriter->save('php://output');
        }else{
            echo "<script>alert('Laporan untuk bulan $bulan $tahun tidak ada')</script>";
            $this->index();
        }
        return $data;            
    }

    function cetakExcel()
    {
        $this->load->helper('time_helper');
        $data = array();
        $data['bulan'] = bulan($_REQUEST['bulan']);         
        $data['tahun'] = $_REQUEST['tahun'];   
        
        $data['join'] =  
            $this->db->query("
                select  u.id_unsur, u.nama_unsur, SUM(d.skor) as Nilai_Per_Unsur, 
                        round((SUM(d.skor)/COUNT(type)),3) AS NRR_per_unsur, 
                        round((SUM(d.skor)/COUNT(type))*0.071, 3) AS NRR_Tertimbang 
                        from t_responden s 
                        INNER JOIN detail_survey d on d.id_survey = s.id 
                        INNER JOIN t_unsur u on u.id_soal = d.no_soal 
                        INNER JOIN t_responden j on j.id = s.id 
                        where month(j.tanggal_survei) = '$_REQUEST[bulan]' and year(j.tanggal_survei) = '$_REQUEST[tahun]' GROUP BY d.no_soal "
                        );

   
               
       $this->cekBarisExcel($data['join'], $data['bulan'], $data['tahun']);              
    }
    
     function laporan_grafik(){
        $data['title'] = 'Grafik';
        $this->load->helper('time_helper');
        $data['setting'] = $this->M_setting->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('grafik/laporan');
        $this->load->view('templates/footer');
    }
}