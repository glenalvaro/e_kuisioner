<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php 
    foreach($setting as $p){ 
    ?>
  <title>
    <?= $title; ?>
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
 <link rel="icon" href="<?php echo base_url ($p->image); ?>">
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

  
  <!-- datatable responden -->
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/gantella/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo base_url();?>assets/gantella/js/jquery.min.js"></script>  
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/aset/font_family.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/aset/font.css">
  <style>   
    @media print
    {
    .noprint {display:none;}
    }
</style>
<style>
 #loader { 
position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 9999; background: url("assets/img/spin3.gif") 50% 50% no-repeat rgb(255, 255, 255); opacity: 0.7;
}
#loader p {
    font-size: 18px; font-weight: bold; text-align : center;
    margin-top : 90%;
    
}
</style>
</head>
<body class="hold-transition <?php echo $p->warna_sistem ?> sidebar-mini">
  <div id="loader">
<p>Loading...</p>
</div>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>KM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kuisioner</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url ($this->session->userdata('image'));?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url ($this->session->userdata('image'));?>" class="img-circle" alt="User Image">

                <p>
                  Anda Login Sebagai <?php echo $this->session->userdata('username'); ?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('profil'); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
<?php }; ?>
  </header>