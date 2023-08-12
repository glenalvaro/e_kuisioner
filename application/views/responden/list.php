<style>
     .dataTable > thead > tr > th[class*="sort"]::after{display: none}
</style> 
<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script> 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Responden<small>Respons</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Data Responden</a></li>
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
               <a href="<?= base_url('kuisioner'); ?>" target="_blank" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah Responden</a>

               <a type="submit" id="btn-delete" class="btn btn-social btn-flat btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Hapus Data Terpilih"><i class="fa fa-trash"></i> Hapus Data Terpilih</a>

                <a href="<?= base_url('respon/print'); ?>" target="_blank" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-print"></i> Print Data Respons</a>
                
                <a href="<?= base_url('respon/export_excel'); ?>" class="btn btn-social btn-flat btn-warning btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Unduh Format Excel"><i class="fa fa-file-excel-o"></i> Export Excel</a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <form method="post" action="<?php echo base_url('respon/delete_all') ?>" id="form-delete">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead style="background-color: #1abb9c;color: white">
                <tr>
                  <th>
                    <input type="checkbox" id="check-all">
                  </th>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Lengkap</th>
                  <!--<th class="text-center">Jenis Kelamin</th>-->
                  <!--<th class="text-center">Pekerjaan</th>-->
                  <!--<th class="text-center">Pendidikan</th>-->
                  <th class="text-center">Jenis Layanan</th>
                  <th class="text-center">Tanggal Survei</th> 
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($respon as $p){ 
                ?>
                <tr>
                   <td>
                    <input type="checkbox" class="check-item" name="id[]" value="<?= $p->id ?>">
                  </td>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td><?php echo $p->nama ?></td>
                 <!-- <td class="text-center"><?php echo $p->jenis_kelamin ?></td>-->
                 <!--  <td class="text-center"><?php echo $p->pekerjaan ?></td>-->
                 <!--<td class="text-center"><?php echo $p->pendidikan ?></td>-->
                 <td class="text-center"><?php echo $p->jenis_layanan ?></td>
                 <td class="text-center"><?php echo $p->tanggal_survei ?></td>
                  <td class="text-center">
                     <a href="respon/print_id/<?php echo $p->id; ?>" target="_blank" class="btn btn-warning btn-xs"><i class="fa fa-print" title="print data"></i></a>
                      <a href="respon/detail/<?php echo $p->id; ?>" class="btn btn-info btn-xs"><i class="fa fa-eye" title="detail data"></i></a>
                      <?php 
                       if ($this->session->userdata('level')=='admin') { ?>
                      <a href="respon/edit/<?php echo $p->id; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o" title="edit data"></i></a>
                      <a onclick="deleteConfirm('<?php echo site_url('respon/hapus/'.$p->id) ?>')"
                      href="#" class="btn btn-danger btn-xs" title="hapus data"><i class="fa fa-trash"></i></a>
                      <?php } ?>
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