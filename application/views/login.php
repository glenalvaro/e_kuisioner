<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<?php 
foreach($setting as $p){ ?>    
    <title>
        Halaman Login
    </title>

    <!-- Custom fonts for this template-->
  <link rel="icon" href="<?php echo base_url ($p->image); ?>">
    <link href="<?php echo base_url() ?>assets/aset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/aset/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/aset/font.css">
    <!-- <style>
        body {
            background: url(assets/img/ptsp.jpg) no-repeat center fixed;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }

    </style> -->
    <style>
    #loader { 
        position: fixed; 
        left: 0px; 
        top: 0px; 
        width: 100%; 
        height: 100%;
        z-index: 9999;
        background: url("assets/img/spin3.gif") 50% 50% no-repeat rgb(255, 255, 255);
        opacity: 0.9;
    }
    #loader p {
        font-size: 18px; font-weight: bold; text-align: center;
        margin-top : 480px;
    }
</style>
<style>img[alt="www.000webhost.com"]{display:none;}</style>

</head>
<body class="bg-danger">
     <div id="loader">
        <p>Please wait...</p>
    </div>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-sm-5 col-sm-offset-5 form-box">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                      <img width="100pt" src="<?php echo base_url ($p->image); ?>">
                                        <h5 class="text-gray-900 mb-4" style="margin-top: 10px">
                                            <b ><?php echo $p->nama_app ?></b><br>
                          <small>               <div style="font-size: 10pt"> <?php echo $p->nama_dinas ?></b></small><br>
                                                <small><div style="font-size: 9pt"><b> <?php echo $p->alamat ?></b></small></div>
                                                <!-- <div style="font-size: 10pt"> <?php echo $p->kode_pos ?></div> -->
                                            </div>
                                            
                                            </h5>
                                    </div>
                                    <small><?= $this->session->flashdata('pesan'); ?></small>
                                    <form class="user" method="post" action="<?php echo base_url('auth/aksi_login'); ?>" autocomplete="off">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="username" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="mb-4 form-check">
                                        <center>
                                            <input type="checkbox" class="form-check-input" id="togglePassword">
                                            <label class="form-check-label" for="exampleCheck1"><small>Tampilkan Kata Sandi</small></label>
                                        </center>
                                         </div>
                                           <button type="submit" class="btn btn-outline-danger btn-user btn-block">
                                                <b style="font-size: 11pt;">LOGIN</b>
                                        </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="container my-auto">
                <div class="copyright text-center my-auto" style="color: #fff; font-size: 8pt">
                    <span>Copyright &copy; <?php echo date('Y'); ?> Survei Kepuasan Masyarakat</span>
                </div>
            </div>
<?php }; ?>
    <!-- Bootstrap core JavaScript-->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
});
    </script>
    <script src="<?php echo base_url() ?>assets/aset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/aset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/aset/js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/aset/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script>
    $(window).load(function(){
    $("#loader").hide();
    });
</script>
</body>

</html>