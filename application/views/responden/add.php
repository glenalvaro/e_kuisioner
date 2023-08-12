<?php error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php 
        foreach ($seting as $k) {
    ?>
  <title>
    <?= $title; ?>
  </title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="icon" href="<?php echo base_url ($k->image) ?>">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link href="<?php echo base_url() ?>assets/aset/select2.min.css" rel="stylesheet">
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
<style>
img[alt="www.000webhost.com"]{display:none;}
</style>
<style>
#loader { 
position: fixed; 
        left: 0px; 
        top: 0px; 
        width: 100%; 
        height: 100%;
        z-index: 9999;
        background: url("<?php echo base_url()?>assets/img/spin3.gif") 50% 50% no-repeat rgb(255, 255, 255);
        opacity: 0.9;
}
#loader p {
font-size: 18px; font-weight: bold; text-align: center; margin-top: 90%;
}
</style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav fixed header">
<div id="loader">
<p>Loading...</p>
</div> 
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><small style="font-size: 12pt;"><?php echo $k->nama_app ?></small></a>
        </div>
      </div>
    </nav>
  </header>
  <div class="content-wrapper">
 <form class="form-horizontal" action="tambah_aksi" method="post" autocomplete="off">
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
                <?php 
                date_default_timezone_set('Asia/Ujung_pandang');
                ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal Survei</label>
                    <div class="col-sm-3">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      <input type="text" class="form-control" value="<?php echo date('Y-m-d'); ?>" maxlength="100" disabled>
                      <input type="hidden" name="tanggal_survei" class="form-control" value="<?php echo date('Y-m-d'); ?>" maxlength="100">
                      </div>
                    </div>
                    <label class="col-sm-2 control-label">Jam Survei</label>
                    <div class="col-sm-2">
                      <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                         <input type="text" class="form-control" value="<?php echo date('H:i:s'); ?>" maxlength="100" disabled>
                         <input type="hidden" name="jam_survei" class="form-control" value="<?php echo date('H:i:s'); ?>" maxlength="100">
                    </div>
                  </div>
                </div>
                <br>
                <h5 class="text-center"><b><u>PROFIL RESPONDEN</u></b></h5>
                <p class="text-center"><i>(Lengkapi data profil anda)</i></p>
                <br>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama" class="form-control" value="" placeholder="Masukan nama lengkap" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Telp/Handphone</label>
                    <div class="col-sm-8">
                      <input type="text" name="nomor_hp" class="form-control" value="" placeholder="Nomor telp" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                     <div class="checkbox-inline">
                      <label><input type="checkbox" name="jenis_kelamin" value="Laki-laki">Laki-Laki</label>
                    </div>
                    <div class="checkbox-inline">
                      <label><input type="checkbox" name="jenis_kelamin" value="Perempuan">Perempuan</label>
                    </div>
                  </div>
                    <label class="col-sm-2 control-label" for="birthday">Tanggal Lahir <span class="required">*</span></label>
                    <div class="col-sm-2">
                      <input id="birthday" name="birthday" class="form-control" placeholder="Enter..." maxlength="100" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-3 control-label" for="usia">Usia</label>
                    <div class="col-sm-3">
                      <input id="usia" name="usia" class="form-control" required="required" type="text" placeholder="Enter....." readonly>
                    </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Pendidikan</label>
                   <div class="col-sm-8">
                    <div class="checkbox-inline">
                      <label><input type="checkbox" name="pendidikan" value="SD">SD</label>
                    </div>
                    <div class="checkbox-inline">
                      <label><input type="checkbox" name="pendidikan" value="SMP">SMP</label>
                    </div>
                    <div class="checkbox-inline">
                      <label><input type="checkbox" name="pendidikan" value="SMA">SMA</label>
                    </div>
                    <div class="checkbox-inline">
                      <label><input type="checkbox" name="pendidikan" value="S1">S1</label>
                    </div>
                    <div class="checkbox-inline">
                      <label><input type="checkbox" name="pendidikan" value="S2">S2</label>
                    </div>
                    <div class="checkbox-inline">
                      <label><input type="checkbox" name="pendidikan" value="S3">S3</label>
                    </div>
                  </div>
                </div> 
                
            <div class="form-group">
                <label class="col-sm-3 control-label">Pekerjaan</label>
                    <div class="col-sm-5">
                     <input type="text" name="pekerjaan" class="form-control" placeholder="Enter ..." required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Layanan Perizinan & Nonperizinan</label>
                    <div class="col-sm-8">
                      <input type="text" name="jenis_layanan" class="form-control" value="" placeholder="Jenis layanan perizinan dan nonperizinan yang diterima" required>
                    </div>
                </div>
                <br>
                <!--  <h5 class="text-center"><b><u>PENDAPAT RESPONDEN TENTANG PELAYANAN</u></b></h5>
                 <p class="text-center"><i>(Beri tanda sesuai jawaban masyarakat/responden)</i></p> -->
    <!-- tombol simpan -->
    <hr style="width : 90%;">
    <small style="float:left; padding-left: 5%; color: #dd4b39;"><i>*/ Periksa Kembali Data Profil anda</i></small>
    <br>
    <br>
        <div class='tombol'>
          <center>
          <a href="<?= base_url('kuisioner'); ?>" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-mail-reply-all"></i> Kembali</a>

         <button type="submit" class="btn btn-social btn-flat btn-info btn-sm"><i class="fa fa-mail-forward"></i> Selanjutnya</button>
          </center>
          </div>
          <br>
          <br>

      <!-- /.row -->
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
</form>
  </div>
  <footer class="main-footer">
    <div class="container">
      <strong>Copyright &copy; <?php echo date('Y'); ?></strong> Survei Kepuasan Masyarakat
    </div>
    <!-- /.container -->
  </footer>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script>
    $(document).ready(function(){
                 // paket sesuai yang diambil dari name pada input
      $("input[name='pendidikan']").change(function() {
        // variable untuk jumlah limit sesuaikan saja dengan keinginan 
                             var maxpil = 1;
                               // variable untuk jumlah data yang dipilih atau di checklist 
        // jika melebihi dari variable limit maka akan diberikan warning
                              var jml = $("input[name='pendidikan']:checked").length;
        if(jml > maxpil){
          $(this).prop("checked","");
        alert('Anda hanya dapat memilih '+ maxpil +' jenis pendidikan !!');
      }
      });
    });
  </script>

<script src="<?php echo base_url() ?>assets/aset/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<!-- loader file -->
<script>
$(window).load(function(){
$("#loader").hide();
});
</script> 
<script>
    $(document).ready(function() {
    $('#birthday').daterangepicker({
          // viewMode: "months", 
          // minViewMode: "months",
    singleDatePicker: true,
    showDropdowns: true,
    yearRange:"-100:+0",
    calender_style: "picker_1",
    }, 
    function(start, end, label) {
     var years = moment().diff(start, 'years');
         // alert("Usia Anda " + years + " Tahun.");
      console.log(start.toISOString(), end.toISOString(), label);
        var usia = $("#usia").val(years + " Tahun");
     });
    });
</script>
<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
      });
    });
  </script>
  <script src="<?php echo base_url() ?>assets/aset/select2.full.js"></script>
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
<script src="<?php echo base_url()?>assets/gantella/js/datepicker/daterangepicker.js"></script>
<script src="<?php echo base_url()?>assets/gantella/js/moment/moment.min.js"></script>
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
