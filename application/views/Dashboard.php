<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url() . "assets/"; ?>img/logo.png" rel="icon">
    <title>Web Penggajian</title>
    <link href="<?php echo base_url() . "assets/"; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() . "assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() . "assets/"; ?>css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'pages/submenu.php'; ?>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <?php include 'pages/navbar.php'; ?>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>

                    <div class="row mb-3">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center"> 
                                        <?php foreach ($jumlah_user->result_array() as $user) { ?>


                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1">Data User</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user['jumlah']?></div>
                                                <div class="mt-2 mb-0 text-muted text-xs">
                                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                                                    <span>Jumlah Data User</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <?php foreach ($jumlah_pegawai->result_array() as $pegawai) { ?>
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1">Data Pegawai</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pegawai['jumlah']?></div>
                                                <div class="mt-2 mb-0 text-muted text-xs">
                                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                                                    <span>Jumlah Data Pegawai</span>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <?php foreach ($jumlah_gaji->result_array() as $gaji) { ?>
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1">Data Laporan Gaji</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $gaji['jumlah']?></div>
                                                <div class="mt-2 mb-0 text-muted text-xs">
                                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                                                    <span>Jumlah Data Penggajian</span>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <div class="col-auto">
                                            <i class="fas fa-folder fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Row-->


                    <!-- modal logout -->
                    <?php include 'pages/modal_logout.php'; ?>
                    <!-- end modal -->
                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <?php include 'pages/footer.php'; ?>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="<?php echo base_url() . "assets/"; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/ruang-admin.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/demo/chart-area-demo.js"></script>
</body>

</html>