<?php 
  foreach($setting as $p){ 
    ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url ($p->image); ?>" class="img-responsive" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('level'); ?></a>
        </div>
      </div>
      <?php }; ?>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><small>MENU UTAMA</small></li>
         <?php
      if ($this->session->userdata('level')=='admin') { ?>
        <li>
          <a href="<?php echo base_url('admin'); ?>">
            <i class="fa fa-dashboard"></i> <span> Dashboard</span>
          </a>
        </li>
        <?php }; ?>
      
         <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Survei</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('unsur'); ?>"><i class="fa fa-clone"></i> Unsur IKM</a></li>
            <li><a href="<?php echo base_url('respon'); ?>"><i class="fa fa-list"></i> Responden</a></li>
            <li><a href="<?php echo base_url('respon/hasil'); ?>"><i class="fa fa-calendar-check-o"></i> Hasil Survei</a></li>
            <li><a href="<?php echo base_url('detail'); ?>"><i class="fa fa-info"></i> Detail Survei</a></li>
          </ul>
        </li>

         <li>
          <a href="<?php echo base_url('survei'); ?>">
            <i class="fa fa-book"></i> <span>Soal Survei</span>
          </a>
        </li>

         <?php
         if ($this->session->userdata('level')=='admin') { ?>
         <li>
          <a href="<?= base_url('grafik'); ?>">
            <i class="fa fa-sitemap"></i> <span>Laporan</span>
          </a>
        </li>

        <li>
          <a href="<?= base_url('pengguna'); ?>">
            <i class="fa fa-users"></i> <span> Data User</span>
          </a>
        </li>
         <?php }; ?>
        <li>
          <a href="<?= base_url('kuisioner'); ?>" target="_blank">
            <i class="fa fa-file-word-o"></i> <span>Lihat Kuisioner</span>
          </a>
        </li>

        <li class="header"><small>SETTING</small></li>
        <?php
      if ($this->session->userdata('level')=='admin') { ?>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Manajemen Aplikasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('setting'); ?>"><i class="fa fa-wrench"></i> Pengaturan</a></li>
            <!-- <li><a href="<?= base_url('code'); ?>"><i class="fa fa-barcode"></i></i> Barcode App</a></li> -->
            <li><a href="<?= base_url('backup'); ?>"><i class="fa fa-database"></i></i> Backup Data</a></li>
          </ul>
        </li>
         <?php }; ?>
        <li>
          <a href="<?= base_url('profil'); ?>">
            <i class="fa fa-user"></i> <span> Profile</span>
          </a>
        </li>

        <hr class="sidebar-divider">
         <li>
          <a href="<?php echo base_url('auth/logout'); ?>">
            <i class="glyphicon glyphicon-log-out"></i> <span> Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>