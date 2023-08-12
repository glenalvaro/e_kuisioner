<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tambah Pertanyaan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Pengisian Survei</a></li>
        <li class="active">Tambah</li>
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
                <a href="<?php echo base_url('survei'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Pengisian Survei</a>
                <br>
                <br>

                 <div class="form-group">
                    <label class="col-sm-3 control-label">No Pertanyaan</label>
                    <div class="col-sm-8">
                      <select class="select2_single form-control" tabindex="-1" style="width: 240px;" id="single1" name="id" required="required">
                    <option value="empty">Pilih No</option>
                    <?php for ($i=1; $i <= 15 ; $i++) {  
                    echo "<option value='$i'>$i</option>";
                    } ?>
              </select>
                        <small><i class="text-red">No pertanyaan wajib diisi*</i></small>
                    </div>
                  </div>
        
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Pertanyaan</label>
                    <div class="col-sm-8">
                      <textarea type="text" name="pertanyaan" class="form-control" placeholder="Isi Survei" required></textarea>
                    </div>
                  </div>
                 
                   <div class="form-group">
                    <label class="col-sm-3 control-label">A</label>
                    <div class="col-sm-8">
                      <input type="text" name="A" class="form-control" value="" placeholder="Jawaban 1" required>
                    </div>
                  </div>
                
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">B</label>
                    <div class="col-sm-8">
                      <input type="text" name="B" class="form-control" value="" placeholder="Jawaban 2" required>
                    </div>
                  </div>
                  
                <div class="form-group">
                    <label class="col-sm-3 control-label">C</label>
                    <div class="col-sm-8">
                      <input type="text" name="C" class="form-control" value="" placeholder="Jawaban 3" required>
                    </div>
                  </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">D</label>
                    <div class="col-sm-8">
                      <input type="text" name="D" class="form-control" value="" placeholder="Jawaban 4" required>
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
</section>
</div>



