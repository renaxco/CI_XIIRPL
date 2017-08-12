-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 05:48 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kontak_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_alamat_lengkap`
--

CREATE TABLE `t_alamat_lengkap` (
  `nis` varchar(100) NOT NULL,
  `Jalan` varchar(200) DEFAULT NULL,
  `RT_RW` varchar(200) DEFAULT NULL,
  `Desa_keluharan` varchar(200) DEFAULT NULL,
  `kecamatan` varchar(200) DEFAULT NULL,
  `Foto_DepanRumah` varchar(100) DEFAULT NULL,
  `Latitude` float DEFAULT NULL,
  `Longitude` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_alamat_lengkap`
--

INSERT INTO `t_alamat_lengkap` (`nis`, `Jalan`, `RT_RW`, `Desa_keluharan`, `kecamatan`, `Foto_DepanRumah`, `Latitude`, `Longitude`) VALUES
('101', 'Kp', '21', '2134', 'QQ', 'Snap_THIqS0zV041680832362.gif', -6.82138, 107.124),
('131', '124124', '124124', '124124', '124124', 'PERSONA-5-PNG-3.png', -6.82405, 107.137),
('131100', 'RT', 'TR', 'QR123', '123123', 'pic_logo.png', -6.82614, 107.137);

-- --------------------------------------------------------

--
-- Table structure for table `t_d_guru`
--

CREATE TABLE `t_d_guru` (
  `nuptk` varchar(100) NOT NULL,
  `namaGuru` varchar(100) DEFAULT NULL,
  `sarjanaAkhir` varchar(100) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `mapel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_d_guru`
--

INSERT INTO `t_d_guru` (`nuptk`, `namaGuru`, `sarjanaAkhir`, `tanggalLahir`, `mapel`) VALUES
('101010', 'Bagas', 'S1', '2017-08-17', 'PAB');

-- --------------------------------------------------------

--
-- Table structure for table `t_d_keluarga`
--

CREATE TABLE `t_d_keluarga` (
  `nis` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `noKontakAyah` varchar(100) DEFAULT NULL,
  `pekerjaanAyah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `noKontakIbu` varchar(100) DEFAULT NULL,
  `pekerjaanIbu` varchar(100) DEFAULT NULL,
  `jumlahAnak` int(11) DEFAULT NULL,
  `AnakKe` int(11) DEFAULT NULL,
  `saudara` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_d_keluarga`
--

INSERT INTO `t_d_keluarga` (`nis`, `nama_ayah`, `noKontakAyah`, `pekerjaanAyah`, `nama_ibu`, `noKontakIbu`, `pekerjaanIbu`, `jumlahAnak`, `AnakKe`, `saudara`) VALUES
('101', 'KK', '+62231784', 'II', 'II', '+623232', 'OO', 1, 1, '213'),
('131', 'RRR', '+62123123', '123123', '123123', '+6215215', '124124124', 12, 12, '123121231231'),
('131100', 'TT', '+62123', 'TER', 'tert', '+62123123', '123123', 4, 4, '124124124');

-- --------------------------------------------------------

--
-- Table structure for table `t_d_siswa`
--

CREATE TABLE `t_d_siswa` (
  `nis` varchar(100) NOT NULL,
  `namaSiswa` varchar(100) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `jenisKelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_d_siswa`
--

INSERT INTO `t_d_siswa` (`nis`, `namaSiswa`, `tanggalLahir`, `jenisKelamin`) VALUES
('101', 'Risky', '2017-08-08', 'Laki-Laki'),
('102', 'nanda', '2017-08-08', 'Laki-Laki'),
('131', 'Ubed', '2017-08-19', 'Laki-Laki'),
('131100', 'Aris Hasan', '2017-08-16', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `t_kontak_siswa`
--

CREATE TABLE `t_kontak_siswa` (
  `nis` varchar(100) NOT NULL,
  `noHP` varchar(100) DEFAULT NULL,
  `whatsApp` varchar(100) DEFAULT NULL,
  `BBM` varchar(100) DEFAULT NULL,
  `ID_Line` varchar(100) DEFAULT NULL,
  `ID_Facebook` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kontak_siswa`
--

INSERT INTO `t_kontak_siswa` (`nis`, `noHP`, `whatsApp`, `BBM`, `ID_Line`, `ID_Facebook`, `Email`) VALUES
('101', '0850835', 'REER', '112343', '23423', '123123', '12@12'),
('131', '0895214124', '124124', '124124', '124124', '124124', '12412@124124'),
('131100', 'TT', 'TT', 'TT', 'TT', 'TT', 'TT@TT');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `IDUser` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nis` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_showall`
--
CREATE TABLE `v_showall` (
`nis` varchar(100)
,`namaSiswa` varchar(100)
,`tanggalLahir` date
,`jenisKelamin` enum('Laki-Laki','Perempuan')
,`noHP` varchar(100)
,`whatsApp` varchar(100)
,`BBM` varchar(100)
,`ID_Line` varchar(100)
,`ID_Facebook` varchar(100)
,`Email` varchar(100)
,`Jalan` varchar(200)
,`RT_RW` varchar(200)
,`Desa_keluharan` varchar(200)
,`kecamatan` varchar(200)
,`Foto_DepanRumah` varchar(100)
,`Latitude` float
,`Longitude` float
,`nama_ayah` varchar(100)
,`noKontakAyah` varchar(100)
,`pekerjaanAyah` varchar(100)
,`nama_ibu` varchar(100)
,`noKontakIbu` varchar(100)
,`pekerjaanIbu` varchar(100)
,`jumlahAnak` int(11)
,`AnakKe` int(11)
,`saudara` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `v_showall`
--
DROP TABLE IF EXISTS `v_showall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_showall`  AS  select `k`.`nis` AS `nis`,`s`.`namaSiswa` AS `namaSiswa`,`s`.`tanggalLahir` AS `tanggalLahir`,`s`.`jenisKelamin` AS `jenisKelamin`,`k`.`noHP` AS `noHP`,`k`.`whatsApp` AS `whatsApp`,`k`.`BBM` AS `BBM`,`k`.`ID_Line` AS `ID_Line`,`k`.`ID_Facebook` AS `ID_Facebook`,`k`.`Email` AS `Email`,`a`.`Jalan` AS `Jalan`,`a`.`RT_RW` AS `RT_RW`,`a`.`Desa_keluharan` AS `Desa_keluharan`,`a`.`kecamatan` AS `kecamatan`,`a`.`Foto_DepanRumah` AS `Foto_DepanRumah`,`a`.`Latitude` AS `Latitude`,`a`.`Longitude` AS `Longitude`,`g`.`nama_ayah` AS `nama_ayah`,`g`.`noKontakAyah` AS `noKontakAyah`,`g`.`pekerjaanAyah` AS `pekerjaanAyah`,`g`.`nama_ibu` AS `nama_ibu`,`g`.`noKontakIbu` AS `noKontakIbu`,`g`.`pekerjaanIbu` AS `pekerjaanIbu`,`g`.`jumlahAnak` AS `jumlahAnak`,`g`.`AnakKe` AS `AnakKe`,`g`.`saudara` AS `saudara` from (((`t_kontak_siswa` `k` join `t_alamat_lengkap` `a` on((`k`.`nis` = `a`.`nis`))) join `t_d_keluarga` `g` on((`k`.`nis` = `g`.`nis`))) join `t_d_siswa` `s` on((`k`.`nis` = `s`.`nis`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_alamat_lengkap`
--
ALTER TABLE `t_alamat_lengkap`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `t_d_guru`
--
ALTER TABLE `t_d_guru`
  ADD PRIMARY KEY (`nuptk`);

--
-- Indexes for table `t_d_keluarga`
--
ALTER TABLE `t_d_keluarga`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `t_d_siswa`
--
ALTER TABLE `t_d_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `t_kontak_siswa`
--
ALTER TABLE `t_kontak_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`IDUser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
