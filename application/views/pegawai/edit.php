<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pesan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-envelope-o"></i> Pesan</a></li>
      </ol>
    </section>
    <?php 
  foreach($setting as $p){ 
  ?>
  <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Pesan</h3>
              </div>
                <div class="box-body">
                   <a href="<?php echo base_url('pesan'); ?>" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-envelope"></i> Kembali Ke Data Pesan</a>
                <form class="form-horizontal" action="<?php echo base_url('pesan/update'); ?>" method="post">
                  <br>
              <div class="box-body">
                  <!-- <div class="callout callout-info">
                    <h4><i class="fa fa-info"></i> Note:</h4>
                    Ini adalah form untuk mengirim pesan ke pegawai
                </div> -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Email</label>
                  <div class="col-sm-4">
                     <input type="hidden" name="id" value="<?php echo $p->id ?>">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Pesan</label>
                  <div class="col-sm-6">
                    <textarea class="form-control" rows="6" name="pesan" cols="100" placeholder="Masukan Pesan..." required></textarea>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <div class="col-sm-1">
                <button type="submit" name="btnsimpan" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Kirim</button>
              </div>
            </div>
          </div>
        </form>
          </div>
        </div>
    </div>
  </div>
</section>
<?php } ?>
</div>
</section>