<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Web Penggajian</title>
    <link href="<?php echo base_url() . "assets/"; ?>img/logo.png" rel="icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url() . "assets_depan/"; ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets_depan/"; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url() . "assets_depan/"; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url() . "assets_depan/"; ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="<?php echo base_url() . "assets/"; ?>img/logo.png" alt=""
            style="width: 45px;">Indojaya Pancing</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-right:  100px;">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">Info Penggajian</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
<!--                 <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                    class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-twitter"></i></a>
                        <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i
                            class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->


                <!-- Header Start -->
                <div class="container-fluid hero-header bg-light py-5 mb-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6">
                                <h1 class="display-4 mb-3 animated slideInDown">Info Penggajian</h1>
                                <nav aria-label="breadcrumb animated slideInDown">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Info Penggajian</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-6 animated fadeIn">
                                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/hero-2.png"
                                alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header End -->


                <!-- About Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="card">
                          <div class="card-header">
                            Data Info Penggajian
                        </div>
                        <div class="card-body">
                            <?php foreach ($info as $key => $value) { ?>
                                <style type="text/css">
                                    .formulir{
                                        margin-bottom: 10px;
                                    }
                                </style>
                                <form action="<?php echo base_url() . 'Dashboard_utama/cetak_gaji'; ?>" method="POST">
                                    <h5 class="card-title"><?php echo $value->nama;?></h5>
                                    <p class="card-text">
                                        <div class="row formulir">
                                            <div class="col-md-6">
                                                <label>Kode Pegawai</label>
                                                <input type="text" name="kode_pegawai" class="form-control"value="<?php echo $value->kode_pegawai;?>" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nama Pegawai</label>
                                                <input type="text" name="nama" class="form-control" value="<?php echo $value->nama;?>" readonly>
                                                <input type="hidden" name="bulan" value="<?php echo $value->bulan;?>">
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row formulir">
                                            <div class="col-md-6">
                                                Penghasilan
                                            </div>
                                            <div class="col-md-6">
                                                Potongan
                                            </div>
                                        </div>
                                        <div class="row formulir">
                                          <div class="col-md-6">
                                            <label>Gaji Pokok</label>
                                            <input type="text" class="form-control" value="Rp.<?php echo number_format($value->gaji_pokok);?>" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Potongan Tidak Masuk Kerja</label>
                                            <input type="text" class="form-control" value="Rp.<?php echo number_format($value->cuti);?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row formulir">
                                      <div class="col-md-6">
                                        <label>Uang Transport</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->uang_transport);?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Potongan BPJS JHT</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->potongan_bpjs_jht);?>" readonly>
                                    </div>
                                </div>
                                <div class="row formulir">
                                    <div class="col-md-6">
                                        <label>Uang Makan</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->uang_makan);?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Potongan BPJS JHT</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->potongan_bpjs_kantor);?>" readonly>
                                    </div>
                                </div>
                                <div class="row formulir">
                                    <div class="col-md-6">
                                        <label>Uang Rajin</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->uang_rajin);?>" readonly>
                                    </div>
                                </div>
                                <p>Tunjangan Lain</p>
                                <div class="row formulir">
                                    <div class="col-md-6">
                                        <label>Uang Lembur</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->lembur);?>" readonly>
                                    </div>
                                </div>
                                <div class="row formulir">
                                    <div class="col-md-6">
                                        <label>BPJS JHT</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->bpjs_jht);?>" readonly>
                                    </div>
                                </div>
                                <div class="row formulir">
                                    <div class="col-md-6">
                                        <label>BPJS JKK</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->bpjs_jkk);?>" readonly>
                                    </div>
                                </div>
                                <div class="row formulir">
                                    <div class="col-md-6">
                                        <label>BPJS JKM</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->bpjs_jkm);?>" readonly>
                                    </div>
                                </div>
                                <hr>
                                <div class="row formulir">
                                    <div class="col-md-6">
                                        <label>Total Gaji</label>
                                        <input type="text" class="form-control" value="Rp.<?php echo number_format($value->total_gaji);?>" readonly>
                                    </div>
                                </div>
                            </p>
                            <button type="submit" class="btn btn-primary">Download Slip</button> 
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">

            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#">Indojaya Pancing
                            </a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                   <!--  Designed By <a href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                                    href="https://themewagon.com">ThemeWagon</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                    class="bi bi-arrow-up"></i></a>


                    <!-- JavaScript Libraries -->
                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script src="<?php echo base_url() . "assets_depan/"; ?>lib/wow/wow.min.js"></script>
                    <script src="<?php echo base_url() . "assets_depan/"; ?>lib/easing/easing.min.js"></script>
                    <script src="<?php echo base_url() . "assets_depan/"; ?>lib/waypoints/waypoints.min.js"></script>
                    <script src="<?php echo base_url() . "assets_depan/"; ?>lib/owlcarousel/owl.carousel.min.js"></script>
                    <script src="<?php echo base_url() . "assets_depan/"; ?>lib/counterup/counterup.min.js"></script>

                    <!-- Template Javascript -->
                    <script src="<?php echo base_url() . "assets_depan/"; ?>js/main.js"></script>
                </body>

                </html>