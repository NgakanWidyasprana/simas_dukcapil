-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 01:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simas_dukcapil`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `all_data_surat`
-- (See below for the actual view)
--
CREATE TABLE `all_data_surat` (
`nomer_surat` varchar(15)
,`nomer_agenda` varchar(15)
,`sifat` varchar(255)
,`lampiran` tinyint(4)
,`perihal` varchar(255)
,`tanggal_surat` date
,`tanggal_diterima` date
,`instansi_pengirim` varchar(255)
,`status` varchar(255)
,`disposisi` varchar(25)
,`link` varchar(2000)
,`p_surat_dinas` tinyint(1)
,`kasubag` tinyint(1)
,`sekdis` tinyint(1)
,`kepdis` tinyint(1)
,`p_surat_bidang` tinyint(1)
,`kabid` tinyint(1)
,`staff` tinyint(1)
,`link_disposisi` varchar(255)
,`penugasan` varchar(25)
,`laporan` varchar(500)
);

-- --------------------------------------------------------

--
-- Table structure for table `data_disposisi`
--

CREATE TABLE `data_disposisi` (
  `nomer_disposisi` varchar(25) NOT NULL,
  `link_disposisi` varchar(255) NOT NULL,
  `penugasan` varchar(25) NOT NULL,
  `laporan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_disposisi`
--

INSERT INTO `data_disposisi` (`nomer_disposisi`, `link_disposisi`, `penugasan`, `laporan`) VALUES
('A/006', '../../Assets/File/disposisi/Program_Kerja_Kampus_Mengajar_Angkatan_4_SMP_Santi_Yasa_Petak.pdf', 'selesai', 'Dana sudah diterima dengan baik oleh pihak pura dan sudah digunakan dengan sebaik-baiknya.'),
('A/007', '../../Assets/File/disposisi/Jadwal_Panel_Ujian_Proposal_TA_April_2023.pdf', 'kabid', ''),
('A/01', '../../Assets/File/disposisi/Program_Kerja_Kampus_Mengajar_Angkatan_4_SMP_Santi_Yasa_Petak.pdf', 'selesai', 'Telah menyelesaikan dengan sempurna'),
('B/01', '../../Assets/File/disposisi/Pengantar_Survei_Tracer_Study_dan_MBKM.pdf', 'selesai', 'Dana sudah diterima dengan baik oleh pihak universitas dan sudah digunakan dengan sebaik-baiknya.'),
('B/02', '../../Assets/File/disposisi/Jadwal_Panel_Ujian_Proposal_TA_April_2023.pdf', 'sekdis', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat`
--

CREATE TABLE `data_surat` (
  `nomer_surat` varchar(15) NOT NULL,
  `nomer_agenda` varchar(15) NOT NULL,
  `sifat` varchar(255) NOT NULL,
  `lampiran` tinyint(4) DEFAULT NULL,
  `perihal` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_diterima` date NOT NULL DEFAULT current_timestamp(),
  `instansi_pengirim` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `disposisi` varchar(25) NOT NULL,
  `link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_surat`
--

INSERT INTO `data_surat` (`nomer_surat`, `nomer_agenda`, `sifat`, `lampiran`, `perihal`, `tanggal_surat`, `tanggal_diterima`, `instansi_pengirim`, `status`, `disposisi`, `link`) VALUES
('A/006', '006', 'Biasa', 5, 'Dana Sumbangan Pura', '2023-05-15', '2023-05-15', 'PT. Diah Makmur', 'selesai', 'kepdis', '../../Assets/File/Surat_Undangan_Dekan_untuk_peserta.pdf'),
('A/007', '007', 'Biasa', 2, 'PKL', '2023-05-15', '2023-05-15', 'Universitas Udayana', 'ditugaskan', 'kabid', '../../Assets/File/Program_Kerja_Kampus_Mengajar_Angkatan_4_SMP_Santi_Yasa_Petak.pdf'),
('A/01', '001', 'Penting', 2, 'PKL', '2023-05-14', '2023-05-14', 'Universitas Udayana', 'selesai', 'kepdis', '../../Assets/File/mahasiswa-report_15e6c85d-6367-4614-81ac-936b0146cdc9.pdf'),
('A/02', '002', 'Penting', 5, 'Dana Sumbangan Masjid', '2023-05-14', '2023-05-14', 'PT. Ayang Sejahtera', 'p_surat_dinas', '', '../../Assets/File/DRAFT-II-OPTIMUS2022-1.pdf'),
('A/03', '003', 'Penting', 5, 'PKL', '2023-05-14', '2023-05-14', 'Universitas Udayana', 'p_surat_dinas', '', '../../Assets/File/Jadwal_Panel_Ujian_Proposal_TA_April_2023.pdf'),
('A/04', '004', 'Penting', 3, 'PKL', '2023-05-14', '2023-05-14', 'Universitas Udayana', 'p_surat_dinas', '', '../../Assets/File/JADWAL_PEMBEKALAN_MAHASISWA_KM4.pdf'),
('A/05', '005', 'Penting', 2, 'PKL', '2023-05-14', '2023-05-14', 'Universitas Udayana', 'p_surat_dinas', '', '../../Assets/File/(01-12-2022)_B_UN14.III_KM_2022_1669780876_98950.pdf'),
('B/01', '008', 'Penting', 2, 'Dana Sumbangan', '2023-05-30', '2023-05-30', 'Universitas Warmadewa', 'selesai', 'kasubag', '../../Assets/File/SURAT_PENGALIHAN_HAK_CIPTA.pdf'),
('B/02', '009', 'Biasa', 1, 'Rapat RT/RW', '2023-05-31', '2023-05-31', 'Kelurahan Sidemen', 'ditugaskan', 'sekdis', '../../Assets/File/JADWAL_PEMBEKALAN_MAHASISWA_KM4.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_pegawai`
--

CREATE TABLE `identitas_pegawai` (
  `NIP` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `asal` varchar(64) NOT NULL,
  `jobdesk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas_pegawai`
--

INSERT INTO `identitas_pegawai` (`NIP`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `asal`, `jobdesk`) VALUES
(2008561000, 'Made Widiartha', 'Jln. Sumandang Batubulan, no.99', 'Laki-laki', 'Kristen', 'Dinas Pencacatan Sipil', 'Admin'),
(2008561001, 'Wayan Medolan', 'Jalan Batubulitan, Pajajaran', 'Laki-laki', 'Hindu', 'Dinas Pencacatan Sipil', 'Kasubag'),
(2008561002, 'Ketut Mideran Dugi', 'Jln. Padjajaran Iwa Selatan, no.100', 'Perempuan', 'Budha', 'Dinas Pencacatan Sipil', 'Sekretaris Dinas'),
(2008561003, 'Komang De Modelin', 'Jln. Batubulan Kangin, Dauh Tukad, no.99', 'Laki-laki', 'Hindu', 'Dinas Pencacatan Sipil', 'Kepala Dinas'),
(2008561004, 'Ketut Balik Milim Jorges', 'Jln. Jimbaran Kauh Kaja, no.88', 'Laki-laki', 'Islam', 'Dinas Pencacatan Sipil', 'Pengelola Surat Dinas'),
(2008561005, 'Ngakan Putu Widyasprana', 'Jl. Sumandang Batubulan, no.98', 'Laki-laki', 'Hindu', 'Dinas Pencacatan Sipil', 'Pengelola Surat Bidang'),
(2008561006, 'Made Demotu Inari', 'Jln. Kangin Kauh Kaja, no.77', 'Perempuan', 'Hindu', 'Dinas Pencacatan Sipil', 'Kepala Bidang'),
(2008561007, 'Putu Sinebdoman Putri', 'Jln. Kauh Mekaja Lukluk, no.123', 'Perempuan', 'Budha', 'Dinas Pencacatan Sipil', 'Staff');

-- --------------------------------------------------------

--
-- Stand-in structure for view `level_users`
-- (See below for the actual view)
--
CREATE TABLE `level_users` (
`NIP` int(25)
,`Username` varchar(255)
,`Nama User` varchar(64)
,`Status Users` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `login_pegawai`
--

CREATE TABLE `login_pegawai` (
  `id` int(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_pegawai`
--

INSERT INTO `login_pegawai` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(2008561000, 'admin2', 'admin2@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(2008561001, 'kasubag', 'kasubag@kasubag.com', '143ad2695caf8f2368b5d9ef03d37ee8'),
(2008561002, 'sekdis', 'sekredinas@sekredinas.com', '1eb67664ad3ed28a6bb235949a27767e'),
(2008561003, 'kepdis', 'kepaladinas@kepdis.com', '1b5cd66e42cb5019a2a88bd499dc7031'),
(2008561004, 'psuratdis', 'psuratdis@psuratdis.com', 'ddad9facce3b0d9c6a59f03d20569de4'),
(2008561005, 'psuratbid', 'psuratbid@psuratbid.com', '275876e34cf609db118f3d84b799a790'),
(2008561006, 'kepbid', 'kepbid@kepbid.com', '95748ff5bbce324ca4296535e23c5a1d'),
(2008561007, 'staff', 'staff@staff.com', '1253208465b1efa876f982d8a9e73eef'),
(2008561033, 'ngakan', 'ngakan@dukcapil.com', 'b42381973ae8875fafc9cdb0a02306ea'),
(2147483647, 'admin3', 'admin3@admin.com', '32cacb2f994f6b42183a1300d9a3e8d6');

-- --------------------------------------------------------

--
-- Table structure for table `status_surat`
--

CREATE TABLE `status_surat` (
  `kode_surat` varchar(255) NOT NULL,
  `p_surat_dinas` tinyint(1) DEFAULT 0,
  `kasubag` tinyint(1) DEFAULT 0,
  `sekdis` tinyint(1) DEFAULT 0,
  `kepdis` tinyint(1) NOT NULL DEFAULT 0,
  `p_surat_bidang` tinyint(1) DEFAULT 0,
  `kabid` tinyint(1) DEFAULT 0,
  `staff` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_surat`
--

INSERT INTO `status_surat` (`kode_surat`, `p_surat_dinas`, `kasubag`, `sekdis`, `kepdis`, `p_surat_bidang`, `kabid`, `staff`) VALUES
('A/006', 1, 1, 1, 1, 0, 0, 0),
('A/007', 1, 1, 1, 1, 0, 0, 0),
('A/01', 1, 1, 1, 1, 0, 0, 0),
('A/02', 1, 0, 0, 0, 0, 0, 0),
('A/03', 1, 0, 0, 0, 0, 0, 0),
('A/04', 1, 0, 0, 0, 0, 0, 0),
('A/05', 1, 0, 0, 0, 0, 0, 0),
('B/01', 1, 1, 1, 1, 0, 0, 0),
('B/02', 1, 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure for view `all_data_surat`
--
DROP TABLE IF EXISTS `all_data_surat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all_data_surat`  AS SELECT `data_surat`.`nomer_surat` AS `nomer_surat`, `data_surat`.`nomer_agenda` AS `nomer_agenda`, `data_surat`.`sifat` AS `sifat`, `data_surat`.`lampiran` AS `lampiran`, `data_surat`.`perihal` AS `perihal`, `data_surat`.`tanggal_surat` AS `tanggal_surat`, `data_surat`.`tanggal_diterima` AS `tanggal_diterima`, `data_surat`.`instansi_pengirim` AS `instansi_pengirim`, `data_surat`.`status` AS `status`, `data_surat`.`disposisi` AS `disposisi`, `data_surat`.`link` AS `link`, `status_surat`.`p_surat_dinas` AS `p_surat_dinas`, `status_surat`.`kasubag` AS `kasubag`, `status_surat`.`sekdis` AS `sekdis`, `status_surat`.`kepdis` AS `kepdis`, `status_surat`.`p_surat_bidang` AS `p_surat_bidang`, `status_surat`.`kabid` AS `kabid`, `status_surat`.`staff` AS `staff`, `data_disposisi`.`link_disposisi` AS `link_disposisi`, `data_disposisi`.`penugasan` AS `penugasan`, `data_disposisi`.`laporan` AS `laporan` FROM ((`data_surat` join `status_surat` on(`data_surat`.`nomer_surat` = `status_surat`.`kode_surat`)) left join `data_disposisi` on(`data_surat`.`nomer_surat` = `data_disposisi`.`nomer_disposisi`)) ;

-- --------------------------------------------------------

--
-- Structure for view `level_users`
--
DROP TABLE IF EXISTS `level_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `level_users`  AS SELECT `login_pegawai`.`id` AS `NIP`, `login_pegawai`.`username` AS `Username`, `identitas_pegawai`.`nama` AS `Nama User`, `identitas_pegawai`.`jobdesk` AS `Status Users` FROM (`login_pegawai` join `identitas_pegawai` on(`login_pegawai`.`id` = `identitas_pegawai`.`NIP`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_disposisi`
--
ALTER TABLE `data_disposisi`
  ADD PRIMARY KEY (`nomer_disposisi`);

--
-- Indexes for table `data_surat`
--
ALTER TABLE `data_surat`
  ADD PRIMARY KEY (`nomer_surat`);

--
-- Indexes for table `identitas_pegawai`
--
ALTER TABLE `identitas_pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `login_pegawai`
--
ALTER TABLE `login_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_surat`
--
ALTER TABLE `status_surat`
  ADD PRIMARY KEY (`kode_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas_pegawai`
--
ALTER TABLE `identitas_pegawai`
  MODIFY `NIP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008561114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
