
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard<small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>
     <?php 
        foreach ($setting as $k) {
        ?>
    <section class="content">
     <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-book-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Survei</span>
              <span class="info-box-number"><?php echo $total_survei; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Responden</span>
              <span class="info-box-number"><?php echo $total_respon; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Unsur IKM</span>
              <span class="info-box-number"><?php echo $total_unsur; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pengguna</span>
              <span class="info-box-number"><?php echo $pengguna; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      
    <div class="box box-danger">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <br>  
            <center><img style="width : 100px;" src="<?php echo $k->image ?>">
            </center>
            <br>  
            <h4 class="text-center"><b><?php echo $k->nama_dinas ?>
            <br><?php echo $k->alamat ?></b></h4><br>
    </div>
    <br>
    <h4 class="text-center"><b>VISI & MISI :</b></h4><br>
     <div class="col-md-6"> 
      <h5 class="text-center"><b>VISI</b></h5>
      <center>"Terwujudnya Sulawesi Utara Berdikari dalam Ekonomi, Berdaulat dalam Pemerintahan serta
      Berkepribadian dalam Budaya."</center>
    </div>
      <div class="col-md-6"> 
      <h5 class="text-center"><b>MISI</b></h5> 
        <ol>
          <li>Mewujudkan kemandirian ekonomi dengan memperkuat sektor pertanian dan sumberdaya kemaritiman sebagai penjabaran provinsi kepulauan, serta mendorong sektor industri dan jasa</li>
          <li>Memantapkan pembangunan sumber daya manusia yang berkepribadian dan berdaya saing</li>
          <li>Mewujudkan sulut sebagai destinasi investasi dan pariwisata yang berdaya saing</li>
          <li>Mewujudkan pemerataan kesejahtraan masyarakat yang tinggi maju dan mandiri</li>
          <li>Memantapkan pembangunan infrastruktur berlandaskan prinsip pembangunan berkelanjutan</li>
          <li>Mewujudkan sulut sebagai pintu gerbang Indonesia di kawasan timur.</li>
          <li>Mewujudkan sulut yang berkepribadian melalui tata kelola pemerintahan yang baik  </li>
        <ol>
      <br>
      <br>
      </div>
  </div>
</div>
<?php }; ?>
     </div>
</section>
</div>