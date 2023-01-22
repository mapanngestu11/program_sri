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
                                <h1 class="display-4 mb-3 animated slideInDown">Login Dibawah ini.</h1>
                                <p class="animated slideInDown">Silahkan login untuk melakukan pengolahan data.</p>
                                <a href="<?php echo base_url() . 'Login'; ?>" class="btn btn-primary py-3 px-4 animated slideInDown">Login</a>
                            </div>
                            <div class="col-lg-6 animated fadeIn">
                                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="<?php echo base_url() . "assets_depan/"; ?>image/1.svg"
                                alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header End -->


                <!-- About Start -->
                <style type="text/css">
                    .form-input{
                      margin-bottom: 10px;
                  }
              </style>
              <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="h-100">
                                <h1 class="display-6">Info Penggajian</h1>
                                <p class="text-primary fs-5 mb-4">Pt. Indojaya Pancing</p>
                                <p>Silahkan Melakukan Pengisian data dibawah ini untuk mengetahui informasi penggajian karyawan.
                                </p>
                                <form action="<?php echo base_url() . 'Dashboard_utama/cek_data'; ?>" method="POST" class="form-input">
                                    <div class="row form-input">
                                        <div class="col-lg-10">
                                            <label>Kode Pegawai</label>
                                            <input type="text" class="form-control" name="kode_pegawai" placeholder="*Wajib Diisi." required="">
                                        </div>
                                    </div>
                                    <div class="row form-input">
                                        <div class="col-lg-10">
                                            <label>Nama Pegawai</label>
                                            <select class="form-control" name="nama" required="">
                                                <option value="">Pilih</option>
                                                <?php foreach ($pegawai->result_array() as $row) : ?>
                                                    <option value="<?php echo $row['nama'] ?>"><?php echo $row['nama']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-input">
                                        <div class="col-lg-10">
                                            <label>Pilih Bulan</label>
                                            <select class="form-control" name="bulan" required="">
                                                <option value="">Pilih</option>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary py-3 px-4" href="">Cek Data</button>
                                </form>
                            </div>
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