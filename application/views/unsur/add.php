<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Tambah Unsur IKM<small>sub title</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Data Unsur</a></li>
        <li class="active">Add</li>
      </ol>
    </section>


<form class="form-horizontal" action="tambah_aksi" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body">
              <fieldset class="content-group">
                <br>
                <a href="<?php echo base_url('unsur'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Unsur</a>
                <br>
                <br>

                 <div class="form-group">
                    <label class="col-sm-3 control-label">No Soal</label>
                    <div class="col-sm-6">
                    <select class="form-control" name="id_soal" required>
                          <option value="">---Pilih---</option>
                          <?php foreach($no_soal as $key): ?>
                            <option value="<?= $key->id; ?>"><?= $key->id; ?></option>

                          <?php endforeach; ?>
                        </select>
                    </div>
                  </div>
               
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Id Unsur</label>
                    <div class="col-sm-6">
                     <input type="text" name="id_unsur" class="form-control" value="" placeholder="Enter..." required>
                    </div>
                  </div>
                 
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Unsur</label>
                    <div class="col-sm-6">
                      <input type="text" name="nama_unsur" class="form-control" value="" placeholder="Enter...." required>
                    </div>
                  </div>
                 
                  <div class='box-footer'>
                  <div class='col-xs-12'>
                    <button type="submit" class="btn btn-social btn-flat btn-success btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                  </div>
            </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
</form>
</section>
</div>



