<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url() . "assets/"; ?>img/logo.png" rel="icon">
    <title>Form Edit Data Penggajian</title>
    <link href="<?php echo base_url() . "assets/"; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() . "assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Select2 -->
    <link href="<?php echo base_url() . "assets/"; ?>vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap DatePicker -->
    <link href="<?php echo base_url() . "assets/"; ?>vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Bootstrap Touchspin -->
    <link href="<?php echo base_url() . "assets/"; ?>vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <!-- ClockPicker -->
    <link href="<?php echo base_url() . "assets/"; ?>vendor/clock-picker/clockpicker.css" rel="stylesheet">
    <!-- RuangAdmin CSS -->
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
                <?php include 'pages/topbar.php'; ?>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Pegawai</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Data Pegawai</li>
                        </ol>
                    </div>

                    <div class="row">
                        <div class="col-lg-10">
                            <!-- Form Basic -->
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url() . 'Penggajian/update'; ?>" method="POST">
                                        <?php foreach ($pegawai->result_array() as $row) :
                                            ?>
                                            <div class="row">
                                                <div class="form-group col-md-10">
                                                    <label>Nama Pegawai</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['nama'] ?>" readonly>
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center>
                                                        <span>Penghasilan</span>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <center>
                                                        <span>Potongan</span>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <label>Gaji Pokok</label>
                                                    <input type="number" class="form-control" value="<?php echo $row['gaji_pokok']; ?>" name="gaji_pokok" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Potongan Tidak Masuk Kerja</label>
                                                    <input type="number" class="form-control" value="<?php echo $row['cuti']; ?>" name="cuti" required>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <label>Uang Transport</label>
                                                    <input type="number" class="form-control" value="<?php echo $row['uang_transport']; ?>" name="uang_transport" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>BPJS JHT (Ditanggung Karyawan)</label>
                                                    <input type="number" class="form-control" name="potongan_bpjs_jht" value="<?php echo $row['potongan_bpjs_jht']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <label>Uang Makan</label>
                                                    <input type="number" class="form-control" name="uang_makan" value="<?php echo $row['uang_makan']; ?>" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>BPJS Dibayar Di Kantor</label>
                                                    <input type="number" class="form-control" name="potongan_bpjs_kantor" value="<?php echo $row['potongan_bpjs_kantor']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <label>Uang Rajin</label>
                                                    <input type="number" class="form-control" name="uang_rajin" value="<?php echo $row['uang_rajin']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <label>Tunjangan Lain</label>
                                                    <br>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="lembur" value="500000" class="custom-control-input" id="lembur">
                                                        <label class="custom-control-label" for="lembur">Uang Lembur</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="bpjs_jht" value="226860" class="custom-control-input" id="bpjs_jht">
                                                        <label class="custom-control-label" for="bpjs_jht">BPJS JHT</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="bpjs_jkk" value="9552" class="custom-control-input" id="bpjs_jkk">
                                                        <label class="custom-control-label" for="bpjs_jkk">BPJS JKK</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="bpjs_jkm" value="11940" class="custom-control-input" id="bpjs_jkm">
                                                        <label class="custom-control-label" for="bpjs_jkm">BPJS JKM</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        <?php endforeach; ?>
                                    </form>
                                </div>
                            </div>
                            <!-- Form Sizing -->
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Documentation Link -->

                    <!-- Modal Logout -->
                    <?php include 'pages/modal_logout.php'; ?>

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
    <!-- Select2 -->
    <script src="<?php echo base_url() . "assets/"; ?>vendor/select2/dist/js/select2.min.js"></script>
    <!-- Bootstrap Datepicker -->
    <script src="<?php echo base_url() . "assets/"; ?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap Touchspin -->
    <script src="<?php echo base_url() . "assets/"; ?>vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <!-- ClockPicker -->
    <script src="<?php echo base_url() . "assets/"; ?>vendor/clock-picker/clockpicker.js"></script>
    <!-- RuangAdmin Javascript -->
    <script src="<?php echo base_url() . "assets/"; ?>js/ruang-admin.min.js"></script>
    <!-- Javascript for this page -->
    <script>
        $(document).ready(function() {


            $('.select2-single').select2();

            // Select2 Single  with Placeholder
            $('.select2-single-placeholder').select2({
                placeholder: "Select a Province",
                allowClear: true
            });

            // Select2 Multiple
            $('.select2-multiple').select2();


        });
    </script>



</body>

</html>