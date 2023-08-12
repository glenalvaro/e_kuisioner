<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php 
        foreach ($setting as $k) {
    ?>
  <title>
    <?= $title; ?>
  </title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="icon" href="<?php echo base_url ($k->image) ?>">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/aset/dataTables.bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/aset/font.css">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <div class="content-wrapper">
 <form class="form-horizontal" action="tambah_aksi" method="post">
<section class="content">
  <div class="container">
  <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-body" style="margin-left: auto; margin-right: auto;"><br>
            <center><img style="width : 95px;" src="<?php echo base_url ($k->image) ?>">
            </center><br>
              <h4 class="text-center"><?php echo $k->nama_app ?><br>
                <?php echo $k->nama_dinas ?><br>
                <?php echo $k->alamat ?>
              </h4>
                <hr style="width: 90%;">
                <h5 class="text-center"><b><u>FORMULIR SURVEI RESPONDEN</u></b></h5>
                <br>
                <?php 
                foreach($print as $e){ ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal Survei</label>
                    <div class="col-sm-3">
                      <input type="text" name="tanggal_survei" class="form-control" maxlength="100" value="<?php echo $e->tanggal_survei ?>" disabled>
                    </div>
                    <label class="col-sm-2 control-label">Jam Survei</label>
                    <div class="col-sm-2">
                      <input type="text" name="jam_survei" class="form-control" maxlength="100" value="<?php echo $e->jam_survei ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama" class="form-control" value="<?php echo $e->nama ?>" placeholder="Masukan nama lengkap" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Telp/Handphone</label>
                    <div class="col-sm-8">
                      <input type="text" name="nomor_hp" class="form-control" value="<?php echo $e->nomor_hp ?>" placeholder="Nomor telp" disabled>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                      <input type="text" name="nomor_hp" class="form-control" value="<?php echo $e->jenis_kelamin ?>" placeholder="Nomor telp" disabled>
                  </div>
                    <label class="col-sm-1 control-label">Usia</label>
                    <div class="col-sm-2">
                      <input type="text" name="usia" class="form-control" placeholder="Usia" maxlength="100" value="<?php echo $e->usia ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Pendidikan</label>
                   <div class="col-sm-2">
                   <input type="text" name="usia" class="form-control" placeholder="Usia" maxlength="100" value="<?php echo $e->pendidikan ?>" disabled>
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-3 control-label">Pekerjaan</label>
                   <div class="col-sm-4">
                    <label class="col-sm-1 control-label"></label>
                      <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" maxlength="100" value="<?php echo $e->pekerjaan ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Layanan Perizinan & Nonperizinan</label>
                    <div class="col-sm-8">
                      <input type="text" name="jenis_layanan" class="form-control" value="<?php echo $e->jenis_layanan ?>" placeholder="Jenis layanan perizinan dan nonperizinan yang diterima" disabled>
                    </div>
                </div>
                <br>
                  <hr style="width: 90%;">
                <br>
                 <h5 class="text-center"><b><u>PENDAPAT RESPONDEN TENTANG PELAYANAN</u></b></h5>
                 <!-- isi pertanyaan -->
                 <div class="box-body" style="margin-left: 7px;">
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
                            foreach($pertanyaan1 as $pty){ 
                          ?>
                            <tr>
                              <td class="text-center"><?php echo $no++ ?>.</td>
                              <td><?php echo $pty->pertanyaan; ?> ?</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                      </table>

                    <h4><b>Jawaban</b></h4>
                      <div class="col-md-6">
                        <div class="box-body">
                        <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jawaban</th>
                            <th scope="col">Skor</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $no = 1;
                            foreach($jawab as $jwb){ 
                          ?>
                            <tr>
                              <td class="text-center"><?php echo $no++ ?></td>
                              <td><?php echo $jwb->jawaban; ?></td>
                              <td><?php echo $jwb->type; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                      </table>  
                    </div>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <?php } ?> 
</form>
</section>
  </div>
</div>
<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php }; ?>
</body>
</html>
