 <!-- datatable responden -->
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo base_url();?>assets/gantella/js/jquery.min.js"></script>  

<style>
     .dataTable > thead > tr > th[class*="sort"]::after{display: none}
</style> 
<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script> 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Unsur IKM<small>Kuisioner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Data Unsur</a></li>
        <li class="active">Data</li>
      </ol>
    </section>

<!-- disini tempat menaruh isi halaman -->
<section class="content">
   <?php
    echo $this->session->flashdata('msg');
    ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
            <div>
               <a href="<?php echo base_url('unsur/tambah') ?>" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <form method="post" action="<?php echo base_url('unsur/delete_all') ?>" id="form-delete">
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead style="background-color: #1abb9c;color: white">
                <tr>
                  <th style="width :25px;">
                    <input type="checkbox" id="check-all">
                  </th>
                  <th style="width :100px;" class="text-center">No</th>
                  <th style="width :150px;" class="text-center">Id Unsur</th>
                  <th class="text-center">Nama Unsur</th>
                  <th style="width :150px;" class="text-center" width="100">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($unsur as $u){ 
                ?>
                <tr>
                   <td>
                    <input type="checkbox" class="check-item" name="id[]" value="<?= $u->id ?>">
                  </td>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td><?php echo $u->id_unsur ?></td>
                  <td><?php echo $u->nama_unsur ?></td>
                  <td class="text-center">
                      <a href="unsur/edit/<?php echo $u->id; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o" title="edit unsur"></i></a>    
                      <a onclick="deleteConfirm('<?php echo site_url('unsur/hapus/'.$u->id) ?>')"
                      href="#" class="btn btn-danger btn-xs" title="hapus unsur ini"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
            <?php } ?>
                </tbody>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


         <!--MODAL HAPUS-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
              </div>
              <form class="form-horizontal">
                <div class="modal-body">
                  <input type="hidden" name="kode" id="id_cus" value="">
                  <p>Apakah Anda yakin manghapus data ini ?</p>   
                </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-hapus" class="btn btn-danger" href="#"><i class="fa fa-fw fa-lg fa-check-circle"></i>Delete</a>
              </div>
              </form>
          </div>
      </div>
  </div>
<script>
function deleteConfirm(url){
  $('#btn-hapus').attr('href', url);
  $('#deleteModal').modal();
}
</script>
</div>
</div>
</section>
</div>
 <!-- datatable responden -->
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo base_url();?>assets/gantella/js/jquery.min.js"></script>  
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
