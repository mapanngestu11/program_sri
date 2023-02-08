<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url() . "assets/"; ?>img/logo.png" rel="icon">
    <title>Data Laporan Bulanan</title>
    <link href="<?php echo base_url() . "assets/"; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() . "assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() . "assets/"; ?>css/ruang-admin.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/"; ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendor/sweetalert2/sweetalert2.min.css">
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
                        <h1 class="h3 mb-0 text-gray-800">Data Laporan Bulanan</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard/') ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Laporan Bulanan</li>
                        </ol>
                    </div>

                    <!-- Row -->
                    <div class="row">
                        <!-- Datatables -->
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Laporan Bulanan</h6>
                                    <form action="<?php echo base_url('Laporan/cek_bulan') ?>" method="post">
                                        <div class="row tanggal">
                                            <div class="col-md-6">
                                                <label>Pilih Bulan</label>
                                                <select class="form-control" name="bulan">
                                                    <option value=""> Pilih</option>
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
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary" target="_blank" style="margin-top: 22px;">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- end modal -->
                                </div>

                                <div class="table-responsive p-3">
                                    <table class="table align-items-center table-flush" id="dataTable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Pegawai</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Bulan</th>
                                                <!--    <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Pegawai</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Bulan</th>
                                                <!--       <th>Aksi</th> -->
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($laporan_pegawai->result_array() as $row) :

                                                $no++;
                                                $id           = $row['id'];
                                                $kode_pegawai = $row['kode_pegawai'];
                                                $nama = $row['nama'];

                                                $jabatan = $row['jabatan'];
                                                $bulan   = $row['bulan'];
                                                $tanggal = $row['tanggal'];
                                                $originalDate1 = $tanggal;
                                                $tgl = date("d-F-Y", strtotime($originalDate1));
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $kode_pegawai; ?></td>
                                                    <td><?php echo $nama; ?></td>
                                                    <td><?php echo $jabatan; ?></td>

                                                    <td><?php echo $bulan; ?></td>
                                             <!--        <td>
                                                        <div class="form-button-action">
                                                            <button class="btn btn-success" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>" style="color:white;"><i class=" fa fa-print" data-original-title="Edit Task"></i></button>
                                                        </div>
                                                    </td> -->
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

    <!-- modal hapus -->
    <?php foreach ($laporan_pegawai->result_array() as $row) :
        $id = $row['id'];
        $kode_pegawai = $row['kode_pegawai'];
        $bulan        = $row['bulan'];
        $nama = $row['nama'];
        ?>
        <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                        <h4 class="modal-title" id="myModalLabel">Cetak Data Gaji</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'Laporan/print_laporan' ?>" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="kode_pegawai" value="<?php echo $kode_pegawai; ?>" />
                            <input type="text" name="bulan" value="<?php echo $bulan;?>">
                            <p>Apakah Anda yakin mau Mencetak data gaji <b><?php echo $nama; ?></b> ?</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Ya</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- end modal -->


    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?php echo base_url() . "assets/"; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/ruang-admin.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?php echo base_url() . "assets/"; ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- sweetalerts -->
    <script src="<?php echo base_url() . "assets/"; ?>js/main.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/extensions/sweetalert2.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>vendor/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

    <!-- msg -->
    <?php if ($this->session->flashData('msg') == 'warning') : ?>
        <script type="text/javascript">
            Swal.fire({
                type: 'warning',
                title: 'Perhatian !',
                heading: 'Success',
                text: "Data Sudah ada .",
                showHideTransition: 'slide',
                icon: 'warning',
                hideAfter: false,
                bgColor: '#7EC857'
            });
        </script>

        <?php elseif ($this->session->flashData('msg') == 'success') : ?>
            <script type="text/javascript">
                Swal.fire({
                    type: 'success',
                    title: 'Sukses',
                    heading: 'Success',
                    text: "Data Berhasil Di Tambahkan.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    bgColor: '#7EC857'
                });
            </script>
            <?php elseif ($this->session->flashData('msg') == 'info-update') : ?>
                <script type="text/javascript">
                    Swal.fire({
                        type: 'success',
                        title: 'Sukses',
                        heading: 'Success',
                        text: "Data Berhasil Di Update.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        bgColor: '#7EC857'
                    });
                </script>
                <?php elseif ($this->session->flashData('msg') == 'success-hapus') : ?>
                    <script type="text/javascript">
                        Swal.fire({
                            type: 'success',
                            title: 'Sukses',
                            heading: 'Success',
                            text: "Data Berhasil dihapus.",
                            showHideTransition: 'slide',
                            icon: 'success',
                            hideAfter: false,
                            bgColor: '#7EC857'
                        });
                    </script>
                    <?php else : ?>

                    <?php endif; ?>
                    <!-- end msg -->

                </body>

                </html>