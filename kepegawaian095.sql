-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 03:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian095`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_diklat095`
--

CREATE TABLE `t_diklat095` (
  `id_diklat095` varchar(50) NOT NULL,
  `id_pegawai095` varchar(50) NOT NULL,
  `nama_diklat095` varchar(50) NOT NULL,
  `jumlah_jam095` varchar(50) NOT NULL,
  `penyelenggara095` varchar(50) NOT NULL,
  `tempat095` varchar(50) NOT NULL,
  `angkatan095` varchar(50) NOT NULL,
  `tahun095` varchar(50) NOT NULL,
  `no_sttpp095` varchar(20) NOT NULL,
  `tanggal_sttpp095` date NOT NULL,
  `sertifikat095` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_golongan095`
--

CREATE TABLE `t_golongan095` (
  `id_golongan095` varchar(50) NOT NULL,
  `nama_golongan095` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_hukum095`
--

CREATE TABLE `t_hukum095` (
  `id_hukuman095` varchar(50) NOT NULL,
  `id_pegawai095` varchar(50) NOT NULL,
  `jenis_hukuman095` varchar(50) NOT NULL,
  `pengesahan_sk_hukuman095` varchar(50) NOT NULL,
  `no_pengesahan_sk095` varchar(50) NOT NULL,
  `tgl_pengesahan_sk095` date NOT NULL,
  `pejabat_pemulih_hukuman095` varchar(50) NOT NULL,
  `no_pemulih095` varchar(50) NOT NULL,
  `tgl_pemulih095` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_jabatan095`
--

CREATE TABLE `t_jabatan095` (
  `id_jabatan095` varchar(50) NOT NULL,
  `id_pegawai095` varchar(50) NOT NULL,
  `id_m_jabatan095` varchar(50) NOT NULL,
  `no_sk095` varchar(50) NOT NULL,
  `sk_mulai_jabatan095` varchar(50) NOT NULL,
  `sk_berakhir095` varchar(50) NOT NULL,
  `file_sk095` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jabatan095`
--

INSERT INTO `t_jabatan095` (`id_jabatan095`, `id_pegawai095`, `id_m_jabatan095`, `no_sk095`, `sk_mulai_jabatan095`, `sk_berakhir095`, `file_sk095`) VALUES
('87ebb3f5-9e5d-48f8-852f-50ae443e3970', '6b68e9cf-31f7-4eb9-b14a-c36bbba41c0d', '11716c29-8351-4af7-8041-d1ad30cee665', '787543555', '2016-12-06', '2014-12-06', 'a6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_master_jabatan095`
--

CREATE TABLE `t_master_jabatan095` (
  `id_m_jabatan095` varchar(50) NOT NULL,
  `nama_jabatan095` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_master_jabatan095`
--

INSERT INTO `t_master_jabatan095` (`id_m_jabatan095`, `nama_jabatan095`) VALUES
('11716c29-8351-4af7-8041-d1ad30cee665', 'HRD'),
('ee6770d8-249c-468b-aff6-4e66446376af', 'Sfaff');

-- --------------------------------------------------------

--
-- Table structure for table `t_master_pangkat095`
--

CREATE TABLE `t_master_pangkat095` (
  `id_m_pangkat095` varchar(50) NOT NULL,
  `nama_pangkat095` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pangkat095`
--

CREATE TABLE `t_pangkat095` (
  `id_pangkat095` varchar(50) NOT NULL,
  `id_pegawai095` varchar(50) NOT NULL,
  `id_m_pangkat095` varchar(50) NOT NULL,
  `id_golongan095` varchar(50) NOT NULL,
  `no_sk095` varchar(50) NOT NULL,
  `tgl_sk095` varchar(50) NOT NULL,
  `tgl_mulai095` varchar(50) NOT NULL,
  `tgl_berakhir095` varchar(50) NOT NULL,
  `file_sk095` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pegawai095`
--

CREATE TABLE `t_pegawai095` (
  `id_pegawai095` varchar(50) NOT NULL,
  `nik095` varchar(50) NOT NULL,
  `nama_pegawai095` varchar(50) NOT NULL,
  `tempat_lahir095` varchar(50) NOT NULL,
  `tgl_lahir095` date NOT NULL,
  `jenis_kelamin095` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `status095` enum('KAWIN','BELUM KAWIN') NOT NULL,
  `alamat095` text NOT NULL,
  `no_telepon095` varchar(50) NOT NULL,
  `photo095` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pegawai095`
--

INSERT INTO `t_pegawai095` (`id_pegawai095`, `nik095`, `nama_pegawai095`, `tempat_lahir095`, `tgl_lahir095`, `jenis_kelamin095`, `status095`, `alamat095`, `no_telepon095`, `photo095`) VALUES
('0639bb5f-7952-473b-b0cd-5fa3c8df04d7', '20110095', 'Imam Hazwa', 'Pekanbaru', '1987-12-06', 'LAKI-LAKI', 'KAWIN', 'pekanbaru', '082283691655', 'a6.jpg'),
('6b68e9cf-31f7-4eb9-b14a-c36bbba41c0d', '20110085', 'Mario Pandi', 'Samosir', '1998-12-06', 'LAKI-LAKI', 'BELUM KAWIN', 'pekanbaru', '082283694655', 'a5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_pendidikan095`
--

CREATE TABLE `t_pendidikan095` (
  `id_pendidikan095` varchar(50) NOT NULL,
  `id_pegawai095` varchar(50) NOT NULL,
  `tingkat095` varchar(50) NOT NULL,
  `nama_pt095` varchar(50) NOT NULL,
  `lokasi095` varchar(50) NOT NULL,
  `jurusan095` varchar(50) NOT NULL,
  `no_ijazah095` varchar(50) NOT NULL,
  `tgl_ijazah095` date NOT NULL,
  `file_ijazah095` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pendidikan095`
--

INSERT INTO `t_pendidikan095` (`id_pendidikan095`, `id_pegawai095`, `tingkat095`, `nama_pt095`, `lokasi095`, `jurusan095`, `no_ijazah095`, `tgl_ijazah095`, `file_ijazah095`) VALUES
('2e2ded73-50a2-4f0f-a838-fe8249569a5a', '6b68e9cf-31f7-4eb9-b14a-c36bbba41c0d', '', 'wefewf', 'sdfdsf', 'wsdfwf', '34252', '2017-12-08', 'a6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_penghargaan095`
--

CREATE TABLE `t_penghargaan095` (
  `id_penghargaan095` varchar(50) NOT NULL,
  `id_pegawai095` varchar(50) NOT NULL,
  `nama_penghargaan095` varchar(30) NOT NULL,
  `tahun095` varchar(30) NOT NULL,
  `negara095` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_diklat095`
--
ALTER TABLE `t_diklat095`
  ADD PRIMARY KEY (`id_diklat095`),
  ADD KEY `id_pegawai095` (`id_pegawai095`);

--
-- Indexes for table `t_golongan095`
--
ALTER TABLE `t_golongan095`
  ADD PRIMARY KEY (`id_golongan095`);

--
-- Indexes for table `t_hukum095`
--
ALTER TABLE `t_hukum095`
  ADD PRIMARY KEY (`id_hukuman095`),
  ADD KEY `id_pegawai095` (`id_pegawai095`);

--
-- Indexes for table `t_jabatan095`
--
ALTER TABLE `t_jabatan095`
  ADD PRIMARY KEY (`id_jabatan095`),
  ADD KEY `id_pegawai095` (`id_pegawai095`,`id_m_jabatan095`),
  ADD KEY `id_m_jabatan095` (`id_m_jabatan095`);

--
-- Indexes for table `t_master_jabatan095`
--
ALTER TABLE `t_master_jabatan095`
  ADD PRIMARY KEY (`id_m_jabatan095`);

--
-- Indexes for table `t_master_pangkat095`
--
ALTER TABLE `t_master_pangkat095`
  ADD PRIMARY KEY (`id_m_pangkat095`);

--
-- Indexes for table `t_pangkat095`
--
ALTER TABLE `t_pangkat095`
  ADD PRIMARY KEY (`id_pangkat095`),
  ADD KEY `id_pegawai095` (`id_pegawai095`),
  ADD KEY `id_m_pangkat095` (`id_m_pangkat095`),
  ADD KEY `id_golongan095` (`id_golongan095`);

--
-- Indexes for table `t_pegawai095`
--
ALTER TABLE `t_pegawai095`
  ADD PRIMARY KEY (`id_pegawai095`);

--
-- Indexes for table `t_pendidikan095`
--
ALTER TABLE `t_pendidikan095`
  ADD PRIMARY KEY (`id_pendidikan095`),
  ADD KEY `id_pegawai095` (`id_pegawai095`);

--
-- Indexes for table `t_penghargaan095`
--
ALTER TABLE `t_penghargaan095`
  ADD PRIMARY KEY (`id_penghargaan095`),
  ADD KEY `id_pegawai095` (`id_pegawai095`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
