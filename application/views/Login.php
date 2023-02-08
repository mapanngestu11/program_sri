<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url() . "assets/"; ?>img/logo.png" rel="icon">
    <title>Login Administrator</title>
    <link href="<?php echo base_url() . "assets/"; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() . "assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() . "assets/"; ?>css/ruang-admin.min.css" rel="stylesheet">

</head>

<style>
    .kembali {
        text-align: center;
    }
</style>

<body class="bg-gradient-login">
    <!-- Login Content -->
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                     <p><?php echo $this->session->flashdata('msg');?></p>
                                     <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                 </div>
                                 <form action="<?php echo site_url() . 'login/auth' ?>" method="POST" class="user">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                    <hr>
                                    <center>
                                        <a href="<?php echo base_url('Dashboard_utama/') ?>" class="kembali">Kembali</a>
                                    </center>
                                </form>
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Content -->
<script src="<?php echo base_url() . "assets/"; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() . "assets/"; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() . "assets/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url() . "assets/"; ?>js/ruang-admin.min.js"></script>
</body>

</html>