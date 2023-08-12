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
                <h3 style="font-size: 18px; font-weight: bold; text-align: center;">DATA KUISIONER SURVEI</h3>
                <br>
                <h5 class="text-center"><b><u>PENDAPAT RESPONDEN TENTANG PELAYANAN</u></b></h5>
                 <p class="text-center"><i>(Beri tanda sesuai jawaban masyarakat/responden)</i></p>

                <div class="soal" style="padding-left: 5%;">
                   <form class="form-horizontal">
                  <div class="box box-solid">
                    <div class="box-header with-border">
                    </div>
                    <div class="box-body">
                        <?php 
                        $no=1; 
                        foreach($kuisioner->result() as $key)
                        {
                          $A = $key->A;
                          $B = $key->B;
                          $C = $key->C;
                          $D = $key->D;
                          $detailSurvey = $this->db->get_where("detail_survey",array(
                              'id_survey'=> $id_max,
                              'no_soal'=> $key->id
                              ));
                              foreach ($detailSurvey->result() as $row) {
                                  $jawaban = $row->jawaban;          
                              };

                     ?>    
                        <fieldset>  
                         <div class="form-group">     
                            <div class="col-lg-10">
                            <?php echo $key->id.". ".$key->pertanyaan;?> ?
                              <div class="radio">A
                              <label>
                                <input type="radio" value="<?php echo $key->A?>" pk="<?php echo $key->id ?>" tipe="A" name="q<?php echo $key->id?>" required <?php if($jawaban==$A) echo "checked";?> >
                                <?php echo $A?>
                              </label>
                            </div>
                            <div class="radio">B
                              <label>
                                <input type="radio" value="<?php echo $key->B?>" pk="<?php echo $key->id ?>" tipe="B" name="q<?php echo $key->id?>" required <?php if($jawaban==$B) echo "checked";?> >
                                <?php echo $B?>
                              </label>
                            </div>
                            <div class="radio">C
                              <label>
                                <input type="radio" value="<?php echo $key->C?>" pk="<?php echo $key->id ?>" tipe="C" name="q<?php echo $key->id?>" required <?php if($jawaban==$C) echo "checked";?> >
                                <?php echo $C?>
                              </label>
                            </div>
                            <div class="radio">D
                              <label>
                                <input type="radio" value="<?php echo $key->D?>" pk="<?php echo $key->id ?>" tipe="D" name="q<?php echo $key->id?>" required <?php if($jawaban==$D) echo "checked";?> >
                                <?php echo $D?>
                              </label>
                            </div>                
                            </div>              
                            </div>
                        </fieldset> 
              <?php }; ?>          
                    </div>
                    </form>
            </div>
    <!-- tombol simpan -->
        <div class='col-sm-3'>
           <a href="<?php echo base_url('respon/submited') ;?>"><button class="btn btn-social btn-flat btn-info btn-sm"><i class="fa fa-check-square"></i> Selesai</button></a>
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
  </div>
  <footer class="main-footer">
    <div class="container">
      <strong>Copyright &copy; <?php echo date('Y'); ?></strong> Survei Kepuasan Masyarakat
    </div>
    <!-- /.container -->
  </footer>
</div>
<script src="<?php echo base_url() ?>assets/aset/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
          $('input[type="radio"]').change(function(){
            var jsonObj = {
                id_survey : <?php echo $id_max ?>,
                no_soal: $(this).attr("pk"),
                jawaban   : $(this).val(),
                tipe : $(this).attr('tipe'),
            }

            $.ajax({
              type : "post",
              url  : "<?php echo base_url('respon/simpanjawaban')?>",
              data : {
                  jsonObj:jsonObj
              },
              success: function(data){
                // alert(data);
              },
              error:function(data){
                alert('Error');
              },      
          });
        });
      });
      </script>
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
<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="<?php echo base_url() ?>assets/gantella/js/validator/validator.js"></script>
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
