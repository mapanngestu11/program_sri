-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 02:48 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `jabatan`) VALUES
(2, 'Operator '),
(3, 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id` int(10) NOT NULL,
  `kode_pegawai` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id`, `kode_pegawai`, `nama`, `jabatan`, `jenis_kelamin`, `no_hp`, `alamat`, `username`, `password`, `hak_akses`, `tanggal`) VALUES
(1, 123, 'budi update', 'Operator ', 'Pria', '0231', 'tangerang', 'budi', '1234', 'Pegawai', '2022-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penggajian`
--

CREATE TABLE `tbl_penggajian` (
  `id` int(10) NOT NULL,
  `kode_pegawai` int(10) NOT NULL,
  `gaji_pokok` varchar(20) NOT NULL,
  `uang_transport` varchar(20) NOT NULL,
  `uang_makan` varchar(20) NOT NULL,
  `uang_rajin` varchar(20) NOT NULL,
  `lembur` varchar(20) NOT NULL,
  `bpjs_jht` varchar(20) NOT NULL,
  `bpjs_jkm` varchar(20) NOT NULL,
  `cuti` varchar(20) NOT NULL,
  `potongan_bpjs_jht` varchar(20) NOT NULL,
  `potongan_bpjs_kantor` varchar(20) NOT NULL,
  `total_gaji` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penggajian`
--

INSERT INTO `tbl_penggajian` (`id`, `kode_pegawai`, `gaji_pokok`, `uang_transport`, `uang_makan`, `uang_rajin`, `lembur`, `bpjs_jht`, `bpjs_jkm`, `cuti`, `potongan_bpjs_jht`, `potongan_bpjs_kantor`, `total_gaji`, `tanggal`) VALUES
(1, 123, '1500000', '240000', '48000', '720000', '500000', '226860', '11940', '0', '79600', '248352', '2928400', '2022-12-13 03:51:02'),
(2, 123, '1500000', '240000', '480000', '720000', '500000', '226860', '11940', '0', '79600', '248352', '3360400', '2022-12-13 03:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `kode_pegawai` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `kode_pegawai`, `nama`, `username`, `password`, `hak_akses`, `tanggal`) VALUES
(4, 2313, '31321', '21313', '54fda78aa8a09b4d77b5aaec57b75028', 'admin', '2022-12-11'),
(6, 123, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2022-12-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penggajian`
--
ALTER TABLE `tbl_penggajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_penggajian`
--
ALTER TABLE `tbl_penggajian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
