 <?php 
        foreach ($setting as $k) {
    ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      QR Code<small>app</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-barcode"></i> Barcode</a></li>
      </ol>
    </section>

<form action="" method="post">
<section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title text-bold">Scan Barcode</h4>
            </div>
            <div class="box-body">
               <center><img style="width : 200px;" src="<?= base_url()?>images/qrcode.png">
            </center>
              <center>
                 <br>
                <small><b>Scan barcode ini untuk ke halaman pengisian kuisinoer</b></small>
              <br>
              <br>
               <center><?php echo $k->nama_dinas ?><br>
              <?php echo $k->alamat ?>
            </center>
            <br>
            <br>
              <div class="noprint">
                <a onClick="window.print();" class="btn btn-danger" href="#"><i class="fa fa-print"></i> Print</a>
            </div>
              </center>
              <br>
            </div>  
          </div>
        </div>
      </div>
</form>
    </section>
</div>
<?php } ?>




