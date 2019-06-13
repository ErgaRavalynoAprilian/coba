-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 12:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembangunan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'aa84d14fd3a2810265d25fc9832086e0', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namadesa` varchar(60) NOT NULL,
  `kepaladesa` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`username`, `password`, `namadesa`, `kepaladesa`) VALUES
('3518042001', '15469a53b471314e6a298de58a530c4e', 'Bajulan', 'Adi Susanto SH.'),
('3518042002', 'ff09e508dc19f976c91d3e8eb375d1e9', 'Macanan', 'Suhadi Wijaya, SE.'),
('3518042003', 'ac17d298960bac20fba2142b43323b02', 'Karangsono', 'Erni Putri, S.Kom'),
('3518042004', '26caeba749cdee3c0b01be972c0b72c4', 'Candirejo', 'Yuli Herlinawati, S. Kom'),
('3518042005', '833776d9af024f66a9159d738a921d59', 'Gejagan', 'Dedy Nawan M.K'),
('3518042006', 'ac17d298960bac20fba2142b43323b02', 'Karangsono', 'Sumarsono Adi'),
('3518042007', '5f5cd0e15445c71f95286b98a106290c', 'Kenep', 'Joko Susanto'),
('3518042008', 'e97d3a5778c774d6d8b1e887edd19c91', 'Nglaban', 'Sudarto'),
('3518042009', 'c682e3e458179d916713edcb301643c7', 'Patihan', 'Pujianto'),
('3518042010', 'e5e5a26bd3bddeb2946c359166348fad', 'Putukrejo', 'Warjiati'),
('3518042011', '329a385e92cd15408653eff3576ce9bd', 'Sekaran', 'Sujarwo, S.Pd.'),
('3518042012', '85ed41b9486e1102ff529d108df39e48', 'Sombron', 'Hartono'),
('3518042013', '78644eb48a5e0142762094c0becf9c87', 'Godean', 'Suprapto, SH.'),
('3518042017', '2cf433dd8366826b1fd227b8e87e8eb9', 'Kwagean', 'Lusi Wahyu Wigati, SE.');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kd_kegiatan` varchar(4) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`kd_kegiatan`, `nama_kegiatan`) VALUES
('K001', 'Pembangunan Jalan Aspal'),
('K002', 'Pembangunan Jalan Paving Desa'),
('K003', 'Pembangunan Jalan Usaha Tani'),
('K004', 'Pembangunan Saluran Irigasi'),
('K005', 'Pembangunan Saluran Drainase'),
('K006', 'Pembangunan Gedung PAUD/TK'),
('K007', 'Pemeliharaan Jalan Aspal'),
('K008', 'Pemeliharaan Jalan Usaha Tani'),
('K009', 'Pemeliharaan Saluran Irigasi'),
('K010', 'Pemeliharaan Saluran Drainase'),
('K011', 'Pembangunan Gedung Olah Raga');

-- --------------------------------------------------------

--
-- Table structure for table `pembangunan`
--

CREATE TABLE `pembangunan` (
  `kd_pembangunan` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `kd_kegiatan` varchar(4) NOT NULL,
  `jml_dana` int(11) NOT NULL,
  `kd_sumdana` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembangunan`
--

INSERT INTO `pembangunan` (`kd_pembangunan`, `username`, `kd_kegiatan`, `jml_dana`, `kd_sumdana`) VALUES
(3, '3518042017', 'K001', 40000000, 'ADD'),
(4, '3518042001', 'K004', 50000000, 'DD'),
(5, '3518042001', 'K003', 55000000, 'DD'),
(6, '3518042017', 'K004', 35000000, 'BKK'),
(7, '3518042002', 'K008', 30000000, 'DD'),
(8, '3518042002', 'K006', 90000000, 'ADD'),
(9, '3518042002', 'K001', 120000000, 'DD'),
(10, '3518042003', 'K002', 45000000, 'DD'),
(11, '3518042003', 'K005', 87500000, 'DD'),
(12, '3518042004', 'K006', 25000000, 'SWD'),
(13, '3518042004', 'K010', 30000000, 'PAD'),
(14, '3518042004', 'K010', 40000000, 'PAD'),
(15, '3518042006', 'K009', 45000000, 'PAD'),
(16, '3518042006', 'K007', 55000000, 'BKK'),
(17, '3518042006', 'K005', 60000000, 'ADD'),
(18, '3518042005', 'K005', 35000000, 'DD'),
(19, '3518042005', 'K003', 55000000, 'BKP'),
(20, '3518042005', 'K003', 50000000, 'BHPR'),
(21, '3518042007', 'K002', 70000000, 'DD'),
(22, '3518042007', 'K006', 65000000, 'PAD'),
(23, '3518042007', 'K002', 45000000, 'BKK'),
(24, '3518042008', 'K008', 50000000, 'PAD'),
(25, '3518042008', 'K009', 30000000, 'PAD'),
(26, '3518042008', 'K004', 35000000, 'BKP'),
(27, '3518042009', 'K004', 35000000, 'BKK'),
(28, '3518042009', 'K003', 30000000, 'PAD'),
(29, '3518042009', 'K006', 15000000, 'BHPR'),
(30, '3518042010', 'K002', 25000000, 'BKP'),
(31, '3518042010', 'K003', 15000000, 'DD'),
(32, '3518042010', 'K005', 35000000, 'BKK'),
(33, '3518042011', 'K009', 25000000, 'SWD'),
(34, '3518042011', 'K008', 20000000, 'DD'),
(35, '3518042011', 'K006', 25000000, 'ADD'),
(36, '3518042012', 'K009', 45000000, 'PAD'),
(37, '3518042012', 'K005', 30000000, 'BHPR'),
(38, '3518042012', 'K006', 25000000, 'DD'),
(40, '3518042017', 'K011', 200000000, 'DD');

-- --------------------------------------------------------

--
-- Table structure for table `sumberdana`
--

CREATE TABLE `sumberdana` (
  `kd_sumdana` varchar(4) NOT NULL,
  `nama_sumdana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumberdana`
--

INSERT INTO `sumberdana` (`kd_sumdana`, `nama_sumdana`) VALUES
('ADD', 'Alokasi Dana Desa'),
('BHPR', 'Bagian Hasil Pajak dan Retribusi Daerah'),
('BKK', 'Bantuan Keuangan Kabupaten'),
('BKP', 'Bantuan Keuangan Provinsi'),
('DD', 'Dana Desa'),
('PAD', 'Pendapatan Aslid Desa'),
('SWD', 'Swadaya Masyarakat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kd_kegiatan`);

--
-- Indexes for table `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD PRIMARY KEY (`kd_pembangunan`),
  ADD KEY `username` (`username`),
  ADD KEY `kd_kegiatan` (`kd_kegiatan`),
  ADD KEY `kd_sumdana` (`kd_sumdana`);

--
-- Indexes for table `sumberdana`
--
ALTER TABLE `sumberdana`
  ADD PRIMARY KEY (`kd_sumdana`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembangunan`
--
ALTER TABLE `pembangunan`
  MODIFY `kd_pembangunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD CONSTRAINT `pembangunan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `desa` (`username`),
  ADD CONSTRAINT `pembangunan_ibfk_2` FOREIGN KEY (`kd_kegiatan`) REFERENCES `kegiatan` (`kd_kegiatan`),
  ADD CONSTRAINT `pembangunan_ibfk_3` FOREIGN KEY (`kd_sumdana`) REFERENCES `sumberdana` (`kd_sumdana`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
