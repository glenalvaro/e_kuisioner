<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Data Responden
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Data Responden</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>

<?php foreach($respon as $e){ ?>
<form class="form-horizontal" action="<?php echo base_url('respon/update'); ?>" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="row">      
        <div class="col-md-9">
          <div class="box box-warning">
            <div class="box-body">
              <fieldset class="content-group">
                <br>
                <a href="<?php echo base_url('respon'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Responden</a>
                <br>
              
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="hidden" name="id" value="<?php echo $e->id ?>">
                      <input type="text" name="nama" class="form-control" value="<?php echo $e->nama ?>">
                    </div>
                  </div>
                 
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Handphone</label>
                    <div class="col-sm-8">
                      <input type="text" name="nomor_hp" class="form-control" value="<?php echo $e->nomor_hp ?>">
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $e->jenis_kelamin ?>">
                    </div>
                  </div>
                 
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" name="pekerjaan" class="form-control" value="<?php echo $e->pekerjaan ?>">
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Pendidikan</label>
                    <div class="col-sm-8">
                      <input type="text" name="pendidikan" class="form-control" value="<?php echo $e->pendidikan ?>">
                    </div>
                  </div>
                  
                <div class="form-group">
                    <label class="col-sm-3 control-label">Usia</label>
                    <div class="col-sm-8">
                      <input type="text" name="usia" class="form-control" value="<?php echo $e->usia ?>">
                    </div>
                  </div>
                  
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal Survei</label>
                    <div class="col-sm-8">
                      <input type="date" name="tanggal_survei" class="form-control" value="<?php echo $e->tanggal_survei ?>">
                    </div>
                  </div>
                  
                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Layanan</label>
                    <div class="col-sm-8">
                      <input type="text" name="jenis_layanan" class="form-control" value="<?php echo $e->jenis_layanan ?>">
                    </div>
                  </div>
                 
                  <div class='box-footer'>
                  <div class='col-xs-12'>
                    <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                    <button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                  </div>
                </div>
              </fieldset>  
            </div>
          </div>
        </div>
      </div>
  </form> 
<?php } ?> 
</section>
</div>



