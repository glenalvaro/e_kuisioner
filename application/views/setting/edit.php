<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola Aplikasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-cogs"></i> Setting</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>
 <?php 
  foreach($setting as $p){ 
  ?>
<form class="form-horizontal" action="<?php echo base_url('setting/update'); ?>" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="row">
         <div class="col-md-3">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title text-bold">Logo Sebelumnya</h4>
            </div>
            <div class="box-body">
              <center><img src="<?php echo base_url ($p->image); ?>" width="180" height="180">
              </center>
              <br>  
              <center>
              <div class="input-group input-group-sm">
              <input type="file" name="image" class="form-control" id="image">
              </div>
              <center>
              <small>Ukr max 5 mb</small>
              <small class="text-red">gif|jpg|png</small>
              </center>
              </center>    
            </div>  
          </div>
        </div>

        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body">
              <fieldset class="content-group">
                <legend class="text-bold"> Edit Aplikasi Sistem</legend>
                <a href="<?php echo base_url('setting'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-gear"></i> Kembali Ke Data Setting</a>
                <br>
             
                <div class="form-group">
                    <label class="col-sm-3 control-label">ID Dinas</label>
                    <div class="col-sm-8">
                      <input type="hidden" name="id" value="<?php echo $p->id ?>">
                      <input type="text" name="no_identitas" class="form-control" value="<?php echo $p->no_identitas ?>">
                    </div>
                  </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Aplikasi</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_app" class="form-control" value="<?php echo $p->nama_app ?>">
                      <small class="text-red"><i>* di isi dengan huruf kapital</small></i>
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Dinas</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_dinas" class="form-control" value="<?php echo $p->nama_dinas ?>">
                      <small class="text-red"><i>* di isi dengan huruf kapital</small></i>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" name="email" class="form-control" value="<?php echo $p->email ?>">
                    </div>
                  </div>
                  
                <div class="form-group">
                    <label class="col-sm-3 control-label">No Telepon</label>
                    <div class="col-sm-8">
                      <input type="text" name="no_telepon" class="form-control" value="<?php echo $p->no_telepon ?>">
                    </div>
                  </div>
              
               <div class="form-group">
                    <label class="col-sm-3 control-label">KODE POS</label>
                    <div class="col-sm-8">
                      <input type="text" name="kode_pos" class="form-control" value="<?php echo $p->kode_pos ?>">
                    </div>
                  </div>
                  
              <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" name="alamat" class="form-control" value="<?php echo $p->alamat ?>">
                    </div>
                  </div>
                  
              <div class="form-group">
                        <label for="warna_sistem" class="col-sm-3 control-label">Warna Sistem</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="warna_sistem">
                          <option value="<?php echo $p->warna_sistem ?>">---Pilih Warna---</option>
                          <?php foreach($skin as $w): ?>
                            <option value="<?= $w->warna_sistem; ?>"><?= $w->warna_sistem; ?></option>

                          <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-3 control-label">Jadwal Kuisioner</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="jadwal_kuisioner">
                        <option value="<?php echo $p->jadwal_kuisioner ?>">---Pilih---</option>
                        <option value="enabled">Aktifkan</option>
                         <option value="disabled">Nonaktifkan</option>
                      </select>
                    </div>
                  </div>
              
              <div class='box-footer'>
                    <div class="col-sm-4">
                     <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                    <button type="submit" name="btnsimpan" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                  </div>
                </div>
              </fieldset>      
            </div>
          </div>
        </div>
      </div>    
</form>
<?php }; ?>
    </section>
</div>



