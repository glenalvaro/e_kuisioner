<style>
     .dataTable > thead > tr > th[class*="sort"]::after{display: none}
</style> 
<!-- datatable responden -->
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo base_url();?>assets/gantella/js/jquery.min.js"></script>  

<?php error_reporting(0)?>
<?php if($join){?>
       <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead style="background-color: #1abb9c;color: white">
        <!-- #34495e
        #1abb9c -->
          <tr class="headings">
            <th>id</th>
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
            //   foreach ($join->result() as $row) {
            //     $NRR_Per_Unsur  = $row->skor / $row->type; 
            //     $NRR_Tertimbang = $NRR_Per_Unsur*0.071; 
            
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
          <td colspan="4"><center>Total</center></td>
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
<?php }else{?>
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead style="background-color: #1abb9c;color: white">
        <!-- #34495e
        #1abb9c -->
          <tr class="headings">
            <th>id</th>
            <th>Unsur</th>
            <th>Nilai/unsur</th>
            <th>NRR/unsur</th>
            <th>NRR tertimbang</th>
            <th>Mutu Pelayanan</th>
            <th>Persen</th>
          </tr>
        </thead>
       
        <tbody style="color: ">
            <tr>
              <td colspan="7" align="center">No data available in table</td>
          </tr>
        </tbody>
      </table>
 <?php } ?>
 <!-- Datatables-->
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/buttons.bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/jszip.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/pdfmake.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/vfs_fonts.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/buttons.html5.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/buttons.print.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/dataTables.fixedHeader.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/dataTables.keyTable.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/responsive.bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/gantella/js/datatables/dataTables.scroller.min.js"></script>

  <!-- pace -->
  <script src="<?php echo base_url();?>assets/gantella/js/pace/pace.min.js"></script>
  
  <!-- datatable -->
  <script>
  var handleDataTableButtons = function() {
      "use strict";
      0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
        dom: "Bfrtip",
        buttons: [{
          extend: "copy",
          className: "btn-sm"
        }, {
          extend: "csv",
          className: "btn-sm"
        }, {
          extend: "excel",
          className: "btn-sm"
        }, {
          extend: "pdf",
          className: "btn-sm"
        }, {
          extend: "print",
          className: "btn-sm"
        }],
        responsive: !0
      })
    },
    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons()
        }
      }
    }();
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').dataTable();
    $('#datatable-keytable').DataTable({
      keys: true
    });
    $('#datatable-responsive').DataTable();
    $('#datatable-scroller').DataTable({
      ajax: "js/datatables/json/scroller-demo.json",
      deferRender: true,
      scrollY: 380,
      scrollCollapse: true,
      scroller: true
    });
    var table = $('#datatable-fixed-header').DataTable({
      fixedHeader: true
    });
  });
  TableManageButtons.init();
</script>
  <!-- /datatable -->


