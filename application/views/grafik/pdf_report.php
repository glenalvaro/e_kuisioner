<center><img style="width: 645px; height: 189px;" alt="" src="<?php echo base_url();?>laporan/logo.jpg" alt="" width="637" height="194"></center>
<br>
<style type="text/css">
  table{
    border-collapse: collapse;
    text-align: center;
  }
</style>
      <h3 align="center">Survey Indeks Kepuasan Masyarakat</h3>
      <h3 align="center">Bulan <?php echo $bulan." ". $tahun?> </h3>
      <table border="1" id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead >
          <tr class="headings" style="background-color: #D0D0D0">
            <th>ID</th>
            <th>Unsur</th>
            <th>Nilai/unsur</th>
            <th>NRR/unsur</th>
            <th>NRR tertimbang</th>
            <th>Mutu Pelayanan</th>
          </tr>
        </thead>
       
        <tbody style="color: ">
          <?php 
            $total_nrr = 0 ;
            // foreach ($unsur->result() as $key ) {
             // foreach ($join->result() as $row) {
               // $NRR_Per_Unsur  = $row->skor / $row->type; 
                //$NRR_Tertimbang = $NRR_Per_Unsur*0.071 ; 
foreach($join->result() as $row)
            {
                $total_nrr += $row->NRR_Tertimbang;
            ?>
           <tr>
              <td><?php echo $row->id_unsur?></td>
              <td style="text-align: left"><?php echo $row->nama_unsur?></td>
              <td><?php echo $row->Nilai_Per_Unsur?></td>
              <td><?php echo $row->NRR_per_unsur?></td>
              <td><?php echo $row->NRR_Tertimbang?></td>
              <td><?php ?></td>
          </tr>
               
          <?php } ?>
        </tbody>
        <tr>
          <td colspan="4"><center>Total NRR</center></td>
          <td><?php echo round($total_nrr,3)?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="4"><center><b>IKM UNIT PELAYANAN (<?php echo round($total_nrr,3)." * "."25"?>)</b></center></td>
          <td><b><?php echo $NilaiIkm = round($total_nrr,3)*25?></b></td>
          <?php 
            if($NilaiIkm>=88.31 && $NilaiIkm<=100.00)
            {
              $grade = "A";
              $ket   = "(Sangat Baik)";
            }
            else if($NilaiIkm>=76.61 && $NilaiIkm<=88.30)
            {
              $grade = "B";              
              $ket   = "(Baik)";
            }
            else if($NilaiIkm>=55 && $NilaiIkm<=76.60)
            {
              $grade = "C";              
              $ket   = "(Kurang Baik)";
            }
            else if($NilaiIkm>=25 && $NilaiIkm<=54.99)
            {
              $grade = "D";              
              $ket   = "(Tidak Baik)";
            }
            else{ 
              $grade = "";              
              $ket   = "";

            }
          ?>
          <td><?php echo "<b>".$grade ." ". $ket."</b>" ;?></td>
          <td></td>
        </tr>
      </table>
      <h5>LAMPIRAN 1.KETERANGAN 9 UNSUR PELAYANAN</h5>
      <table border="1" id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead style="background-color: #1abb9c;color: white">
        <!-- #34495e
        #1abb9c -->
          <tr class="headings" style="background-color: #D0D0D0">
            <th>Keterangan</th>
            <th>Unsur-Unsur Pelayanan</th>
          </tr>
        </thead>
       
        <tbody style="color: ">
          <tr>
              <td align="left">U01 s/d U09</td>
              <td align="left">: Unsur-Unsur Pelayanan</td>
          </tr>
          <tr>
              <td align="left">NRR</td>
              <td align="left">: Nilai Rata-Rata</td>
          </tr>
          <tr>
              <td align="left">IKM</td>
              <td align="left">: Indeks Kepuasan Masyarakat</td>
          </tr>
          <tr>
              <td align="left">NRR Per Unsur</td>
              <td align="left">: Jumlah nilai per unsur dibagi jumlah kuesioner yang terisi</td>
          </tr>
          <tr>
              <td align="left">NRR Tertimbang</td>
              <td align="left">: NRR Per Unsur x 0,071</td>
          </tr>
          <tr>
              <td align="left"><b>IKM UNIT PELAYANAN</b></td>
              <td align="left"><b>: <?php echo $NilaiIkm = round($total_nrr,3)*25?></b></td>
          </tr>
          <tr>
              <td align="left"><b>Mutu Pelayanan</b></td>
              <td></td>
          </tr>
          <tr>
              <td align="left"><b>A</b> (Sangat Baik)</td>
              <td align="left">: 88,31 - 100,00</td>
          </tr>
          <tr>
              <td align="left"><b>B</b> (Baik)</td>
              <td align="left">: 76,61 - 88,30</td>
          </tr>
          <tr>
              <td align="left"><b>C</b> (Kurang Baik)</td>
              <td align="left">: 55,00 - 76,60</td>
          </tr>
          <tr>
              <td align="left"><b>D</b> (Tidak Baik)</td>
              <td align="left">: 25,00 - 54,99</td>
          </tr>
        </tbody>
      </table>