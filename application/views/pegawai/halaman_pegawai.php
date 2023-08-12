<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      </ol>
    </section>

  <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-bell-o">&nbsp; Info</i></h3>
              </div>
                <div class="box-body">
                <ul class="timeline">

    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-red">
             <?php echo date('d M Y'); ?>
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-envelope bg-blue"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> <?php
              date_default_timezone_set('Asia/Jakarta');
              echo date('H:i:s'); ?></span>

            <h3 class="timeline-header"><a href="#">Administrator</a></h3>
        </div>
    </li>
</ul>
          </div>
        </div>
          <!-- /. box -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-envelope-o">&nbsp; Kirim Pertanyaan</i></h3>
            </div>
              <form class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Pertanyaan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="pertanyaan"></textarea>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="btnsimpan" class="btn btn-social btn-flat btn-danger btn-sm pull-right"><i class="fa fa-send"></i> Kirim</button>
              </div>
              <!-- /.box-footer -->
          </div>
        </form>
      </div>
    </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-solid">
           <!--  menampilkan video youtube -->
             <!-- <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S06mKLw2RB4" title="YouTube video player"></iframe>
            </div> -->
            <!-- /.box-body -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?php echo base_url(); ?>assets/img/gbr1.jpg" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url(); ?>assets/img/gbr2.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url(); ?>assets/img/gbr3.jpg" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 </div>
</section>