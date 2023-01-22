<style>
    .nama-pt {
        font-size: 12px;
        margin-top: 15px;
    }
</style>
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?php echo base_url() . "assets/"; ?>img/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3 nama-pt">PT.Indojaya<br>
            <P style="font-size: 8px;">Pancing Manufacture</P>
        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Menu
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datauser" aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-user"></i>
                <span>Data User</span>
            </a>
            <div id="datauser" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelola Data User</h6>
                    <a class="collapse-item" href="<?php echo base_url('User/') ?>">Lihat Data</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datapegawai" aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-users"></i>
                <span>Data Pegawai</span>
            </a>
            <div id="datapegawai" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelola Data Pegawai</h6>
                    <a class="collapse-item" href="<?php echo base_url('Pegawai/tambah') ?>">Tambah Data</a>
                    <a class="collapse-item" href="<?php echo base_url('Pegawai/') ?>">Lihat Data</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datajabatan" aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-folder"></i>
                <span>Data Jabatan</span>
            </a>
            <div id="datajabatan" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelola Data Jabatan</h6>
                    <a class="collapse-item" href="<?php echo base_url('Jabatan/') ?>">Lihat Data</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datagaji" aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-folder-open"></i>
                <span>Data Penggajian</span>
            </a>
            <div id="datagaji" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelola Data Gaji</h6>
                    <a class="collapse-item" href="<?php echo base_url('Penggajian/') ?>">Lihat Data</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datalaporan" aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Data Laporan</span>
            </a>
            <div id="datalaporan" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelola Data Laporan</h6>
                    <a class="collapse-item" href="<?php echo base_url('Laporan/bulanan') ?>">Cetak Bulanan</a>
                    <a class="collapse-item" href="<?php echo base_url('Laporan/') ?>">Cetak Per Pegawai</a>
                </div>
            </div>
        </li>

    </ul>