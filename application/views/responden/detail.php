<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Detail Responden
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Detail Responden</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>
<?php 
foreach($respon as $e){ ?>
<form class="form-horizontal" enctype="multipart/form-data">
<section class="content">
      <div class="row">      
        <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-body">
              <fieldset class="content-group">
                <br>
                <a href="<?php echo base_url('respon'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Responden</a>
                <br>
                <br>

                <div class="form-group">
                    <label class="col-sm-3 control-label">ID Responden</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama" class="form-control" value="<?php echo $e->id ?>"
                      disabled>
                    </div>
                  </div>
         
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama" class="form-control" value="<?php echo $e->nama ?>"
                      disabled>
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Handphone</label>
                    <div class="col-sm-8">
                      <input type="text" name="nomor_hp" class="form-control" value="<?php echo $e->nomor_hp ?>" disabled>
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $e->jenis_kelamin ?>" disabled>
                    </div>
                  </div>
                 
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" name="pekerjaan" class="form-control" value="<?php echo $e->pekerjaan ?>" disabled>
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Pendidikan</label>
                    <div class="col-sm-8">
                      <input type="text" name="pendidikan" class="form-control" value="<?php echo $e->pendidikan ?>" disabled>
                    </div>
                  </div>
                 
                <div class="form-group">
                    <label class="col-sm-3 control-label">Usia</label>
                    <div class="col-sm-8">
                      <input type="text" name="usia" class="form-control" value="<?php echo $e->usia ?>" disabled>
                    </div>
                  </div>
                 
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal Survei</label>
                    <div class="col-sm-8">
                      <input type="date" name="tanggal_survei" class="form-control" value="<?php echo $e->tanggal_survei ?>" disabled>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Jam Survei</label>
                    <div class="col-sm-8">
                      <input type="text" name="jam_survei" class="form-control" value="<?php echo $e->jam_survei ?>" disabled>
                    </div>
                  </div>
                  
                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Layanan</label>
                    <div class="col-sm-8">
                      <input type="text" name="jenis_layanan" class="form-control" value="<?php echo $e->jenis_layanan ?>" disabled>
                    </div>
                  </div>
              </fieldset>  
            </div>
          </div>
          <?php } ?> 
        </div>
        <!-- Isi survei -->
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h4><b>Detail Survei</b></h4>
            </div>
            <div class="box-body" style="margin-left: 8px;">
              <h4><b>Survei</b></h4>
               <table class="table table-sm">
                    <thead>
                          <tr style="display: none;">
                            <th scope="col">No</th>
                            <th scope="col">Pertanyaan Survei</th>
                          </tr>
                    </thead>
                      <tbody>
                          <?php 
                            $no = 1;
                            foreach($pertanyaan1 as $key){ 
                          ?>
                            <tr>
                              <td class="text-center"><?= $no++ ?>.</td>
                              <td><?= $key->pertanyaan; ?> ?</td>
                            </tr>
                            <?php } ?>
                      </tbody>
                  </table>

                <h4><b>Jawaban</b></h4>
                  <?php foreach($jawaban as $hsl){ ?>
                      <ul>
                        <li><?= $hsl->jawaban; ?> &nbsp;(<?= $hsl->type; ?>)</li>
                      </ul>
                  <?php } ?>
            </div>
        </div>
      </div>
      </div>
  </form> 
</section>
</div>



