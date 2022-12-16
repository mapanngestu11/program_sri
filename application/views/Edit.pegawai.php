<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url() . "assets/"; ?>img/logo.png" rel="icon">
    <title>Form Update Data Pegawai</title>
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
                <?php include 'pages/topbar.php'; ?>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Update Data Pegawai</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Data Pegawai</li>
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
                                    <form action="<?php echo base_url() . 'Pegawai/update'; ?>" method="POST">
                                        <?php foreach ($pegawai->result_array() as $row) :
                                        ?>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Kode Pegawai</label>
                                                    <input type="text" name="kode_pegawai" class="form-control" value="<?php echo $row['kode_pegawai']; ?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Nama</label>
                                                    <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label>Jabatan</label>
                                                        <select name="jabatan" class="form-control" required>
                                                            <option value="<?php echo $row['jabatan']; ?>"> <?php echo $row['jabatan']; ?> </option>
                                                            <?php foreach ($data_jabatan->result_array() as $jabatan) {  ?>
                                                                <option value="<?php echo $jabatan['jabatan'] ?>"><?php echo $jabatan['jabatan']; ?></option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <select class="form-control" name="jenis_kelamin" required>
                                                            <option value="<?php echo $row['jenis_kelamin']; ?>"> <?php echo $row['jenis_kelamin']; ?> </option>
                                                            <option value="Pria"> Pria </option>
                                                            <option value="Wanita"> Wanita </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Handphone</label>
                                                        <input type="number" value="<?php echo $row['no_hp']; ?>" name="no_hp" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" name="alamat" rows="5" cols="50"><?php echo $row['alamat']; ?></textarea>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Username</label>
                                                    <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Password</label>
                                                    <input type="password" name="password" class="form-control" required>
                                                    <input type="hidden" name="hak_akses" value="Pegawai">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
    <script src="<?php echo base_url() . "assets/"; ?>js/ruang-admin.min.js"></script>

</body>

</html>