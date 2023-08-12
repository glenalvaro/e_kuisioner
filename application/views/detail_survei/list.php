<style>
     .dataTable > thead > tr > th[class*="sort"]::after{display: none}
</style> 
<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script> 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Hasil Survey<small>Kuisioner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Responden</a></li>
        <li class="active">Detail Survei</li>
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
               <a href="#" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" disabled><i class="fa fa-plus"></i> Tambah Data</a>

                <a type="submit" id="btn-delete" class="btn btn-social btn-flat btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Hapus Data Terpilih"><i class="fa fa-trash"></i> Hapus Data Terpilih</a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <form method="post" action="<?php echo base_url('detail/delete_all') ?>" id="form-delete">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead style="background-color: #1abb9c;color: white">
                <tr>
                  <th style="width :25px;">
                    <input type="checkbox" id="check-all">
                  </th>
                  <th class="text-center">No</th>
                  <th class="text-center">ID Responden</th>
                  <th class="text-center" width="10%">Nomor Soal</th>
                  <th class="text-center">Jawaban</th>
                  <th class="text-center">Type</th>
                  <th class="text-center">Skor</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($detail_survei as $u){ 
                ?>
                <tr>
                   <td>
                    <input type="checkbox" class="check-item" name="id[]" value="<?= $u->id ?>">
                  </td>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td><?php echo $u->id_survey ?></td>
                  <td><?php echo $u->no_soal ?></td>
                  <td><?php echo $u->jawaban ?></td>
                  <td><?php echo $u->type ?></td>
                  <td><?php echo $u->skor ?></td>
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