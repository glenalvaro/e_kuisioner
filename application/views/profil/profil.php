
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Profil<small>user</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-circle-o"></i> Pengguna</a></li>
        <li class="active"><?php echo $this->session->userdata('nama'); ?></li>
      </ol>
    </section>

<form class="form-horizontal" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title text-bold">Foto</h4>
            </div>
            <div class="box-body">
              <center><img src="<?php echo base_url($this->session->userdata('image')); ?>" width="170" height="170">
              </center>
              <br>      
            </div>  
          </div>
        </div>
        
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body">
              <fieldset class="content-group">
                <legend class="text-bold"> Data</legend>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?= $this->session->userdata('nama'); ?>" disabled>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?= $this->session->userdata('email'); ?>" disabled>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Tempat Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" value="<?= $this->session->userdata('tempat_lahir'); ?>" disabled>
                    </div>
                    <label class="col-sm-1 control-label">Tgl Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" value="<?= $this->session->userdata('tgl_lahir'); ?>" disabled>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?= $this->session->userdata('alamat'); ?>" disabled>
                    </div>
                  </div>
                 

                <div class="form-group">
                    <label class="col-sm-3 control-label">Level</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" value="<?= $this->session->userdata('level'); ?>" disabled>
                    </div>
                  </div>
              
              </fieldset>
              
            </div>
          </div>
        </div>
      </div>
</form>
    </section>
</div>




