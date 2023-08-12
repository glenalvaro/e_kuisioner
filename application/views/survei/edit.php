<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Data Survei
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Pengisian Survei</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>

<?php foreach($survei as $e){ ?>
<form class="form-horizontal" action="<?php echo base_url('survei/update'); ?>" method="post" enctype="multipart/form-data">
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
                    <label class="col-sm-3 control-label">No Soal</label>
                    <div class="col-sm-8">
                       <input type="hidden" name="id" value="<?php echo $e->id ?>">
                      <input type="text" class="form-control" value="<?php echo $e->id ?>" disabled>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Pertanyaan</label>
                    <div class="col-sm-8">
                      <textarea type="text" name="pertanyaan" class="form-control" value="<?php echo $e->pertanyaan ?>"><?php echo $e->pertanyaan ?></textarea>
                    </div>
                  </div>
                 
                   <div class="form-group">
                    <label class="col-sm-3 control-label">A</label>
                    <div class="col-sm-8">
                      <input type="text" name="A" class="form-control" value="<?php echo $e->A ?>">
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label class="col-sm-3 control-label">B</label>
                    <div class="col-sm-8">
                      <input type="text" name="B" class="form-control" value="<?php echo $e->B ?>">
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label class="col-sm-3 control-label">C</label>
                    <div class="col-sm-8">
                      <input type="text" name="C" class="form-control" value="<?php echo $e->C ?>">
                    </div>
                  </div>
                 
                 <div class="form-group">
                    <label class="col-sm-3 control-label">D</label>
                    <div class="col-sm-8">
                      <input type="text" name="D" class="form-control" value="<?php echo $e->D ?>">
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



