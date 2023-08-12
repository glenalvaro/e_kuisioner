<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Data
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Pengisian Survei</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="box box-success">
            <div class="box-body" style="margin-left: 8px;" >
            <?php 
            foreach($detail as $i){ 
            ?>
            <h4><b>Pertanyaan survei</b></h4><br>
            <p><?php echo $i->id ?>. <?php echo $i->pertanyaan ?></p><br>
            <div class="radio">
              <label>
                  <input type="radio" value="<?php echo $i->A ?>" disabled>
                  <?php echo $i->A ?>
              </label>
            </div>
            <div class="radio">
              <label>
                  <input type="radio" value="<?php echo $i->B ?>" disabled>
                  <?php echo $i->B ?>
              </label>
            </div>
            <div class="radio">
              <label>
                  <input type="radio" value="<?php echo $i->C ?>" disabled>
                  <?php echo $i->C ?>
              </label>
            </div>
            <div class="radio">
              <label>
                  <input type="radio" value="<?php echo $i->D ?>" disabled>
                  <?php echo $i->D ?>
              </label>
            </div>
            <?php } ?>
            <div class="box-footer">
                <div>
               <a href="<?php echo base_url('survei'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" style="float: right;"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
            </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
</div>



