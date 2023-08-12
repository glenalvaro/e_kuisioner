 <!-- datatable responden -->
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo base_url();?>assets/gantella/js/jquery.min.js"></script> 
<?php error_reporting(0)?>
<?php if($join){?>
       <table id="datatable-responsive" class="table table-striped table-bordered dt- responsive nowrap" cellspacing="0" width="100%">
       
          <thead style="background-color: #1abb9c;color: white">
            <tr class="headings">
              <?php 
                  foreach ($join->result() as $row) {?>
                  <th><?php echo $row->id_unsur?></th>
              <?php } ?>
            </tr>
          </thead>
          <tbody style="color: ">
            <tr>
              <?php 
              $total_nrr = 0 ;
                foreach ($join->result() as $row) {
                  $NRR_Per_Unsur  = $row->skor / $row->type; 
                  $NRR_Tertimbang = $NRR_Per_Unsur*0.071 ; 
                  ?>
                <td><?php echo round( $NRR_Per_Unsur,3)?></td>
              <?php } ?>
            </tr>
        </tbody>
      </table>
<?php }else{?>
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead style="background-color: #1abb9c;color: white">
        <!-- #34495e
        #1abb9c -->
          <tr class="headings">
            <th>id</th>
            <th>NRR/unsur</th>
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

