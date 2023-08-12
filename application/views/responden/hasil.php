<?php error_reporting(0);?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Data Survei</a></li>
        <li class="active">Hasil</li>
      </ol>
    </section>

<br>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-body">
          <div class="box-header with-border">
            <h4 style="color: #73879c;">Data Hasil Survei &nbsp;<small>Users</small></h4>
          </div>
          <br>
      <div class="x_content">
      <center><label style="font-size: 20px; color: #73879c;">Tanggal Survey<span class="required">*</span></label></center> 
      
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cari"><span class="required"></span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="input-group input-group-sm">
          <input id="tanggal_survei" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Cari...." value="<?php echo $_GET['tanggal_survei']?>" autocomplete="off">
          <span class="input-group-btn">
              <button class="btn btn-primary btn-flat" id="cari"><i class="fa fa-search"></i> Cari</button>
          </span>
        </div>
      </div>
      <br>
      <br>
      </form>
     
      <form method="get">
      
      </div>
         
      <div class="detail_survey">
        
      </div>          
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Wrapper -->
</div>