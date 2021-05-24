-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 08:07 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceriawisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lokasi_berangkat` varchar(255) NOT NULL,
  `jml_pax` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `trayek` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE `tb_tempat` (
  `id` int(11) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tempat`
--

INSERT INTO `tb_tempat` (`id`, `tujuan`, `kode`) VALUES
(1, 'Gunung Bromo', 'jtm'),
(2, 'Gunung Ijen', 'jtm'),
(3, 'Jawa Timur Park 1,2,3', 'jtm'),
(4, 'Wisata Bahari Lamongan', 'jtm'),
(5, 'Taman safari Indonesia 2', 'jtm'),
(6, 'Telaga Sarangan', 'jtm'),
(7, 'Waduk Selorejo', 'jtm'),
(8, 'Kota Wisata Batu', 'jtm'),
(9, 'Makam Bung Karno', 'jtm'),
(10, 'Candi Borobudur', 'jtg'),
(11, 'Candi Prambanan', 'jtg'),
(12, 'Wisata Merapi', 'jtg'),
(13, 'Ketep Pas', 'jtg'),
(14, 'Lawang Sewu', 'jtg'),
(15, 'Telaga Warna', 'jtg'),
(16, 'Jati Jajar', 'jtg'),
(17, 'Batu Raden', 'jtg'),
(18, 'Parangtritis', 'jtg'),
(19, 'Kukup', 'jtg'),
(20, 'Krakal', 'jtg'),
(21, 'Indrayanti', 'jtg'),
(22, 'Goa Pindul', 'jtg'),
(23, 'Keraton Yogyakarta', 'jtg'),
(24, 'Malioboro', 'jtg'),
(25, 'Monas', 'jbr'),
(26, 'TMII', 'jbr'),
(27, 'Ancol', 'jbr'),
(28, 'Dufan', 'jbr'),
(29, 'Sea World Indonesia', 'jbr'),
(30, 'Pulau Seribu', 'jbr'),
(31, 'Taman Buah Mekarsari', 'jbr'),
(32, 'Istana Negara', 'jbr'),
(33, 'Pangandaran', 'jbr'),
(34, 'Puncak Pas', 'jbr'),
(35, 'Green Canyon Indonesia', 'jbr'),
(36, 'Tangkuban Perahu', 'jbr'),
(37, 'Ciater', 'jbr'),
(38, 'Cibaduyut', 'jbr'),
(39, 'Ciampelas', 'jbr'),
(40, 'Danau Toba', 'smt'),
(41, 'Bangka', 'smt'),
(42, 'Belitong', 'smt'),
(43, 'Tanjung Pinang', 'smt'),
(44, 'Tanah Lot', 'bl'),
(45, 'Danau Bedugul', 'bl'),
(46, 'Kintamani', 'bl'),
(47, 'GWK', 'bl'),
(48, 'Tanjung Benoa Water Sport', 'bl'),
(49, 'Ulu Watu', 'bl'),
(50, 'Pantai Pandawa', 'bl'),
(51, 'Rambitan Sade', 'lmb'),
(52, 'Gugusan Gili Gili', 'lmb'),
(53, 'Tanjung An', 'lmb'),
(54, 'Getap', 'lmb'),
(55, 'Banyumulek', 'lmb'),
(56, 'Sukerare', 'lmb'),
(57, 'Bukit Malimbu', 'lmb'),
(58, 'Sendang Gile', 'lmb'),
(59, 'Sembalun Bumbung/Sembalun Lawang', 'lmb'),
(60, 'Desa Tetebaru', 'lmb'),
(61, 'Desa Kota Raja', 'lmb'),
(62, 'Pantai Bunaken', 'slw'),
(63, 'Tanah Toraja', 'slw'),
(64, 'Bantimurung', 'slw'),
(65, 'Ramang Ramang', 'slw'),
(66, 'Makassar', 'slw'),
(67, 'Puncak Waringin', 'pkm'),
(68, 'Pulau Komodo', 'pkm'),
(69, 'Pulau Rinca', 'pkm'),
(70, 'Pantai Pink', 'pkm'),
(71, 'Desa Cara', 'pkm');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trayek`
--

CREATE TABLE `tb_trayek` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_trayek`
--

INSERT INTO `tb_trayek` (`id`, `kode`, `lokasi`, `gambar`) VALUES
(1, 'jtm', 'Jawa Timur', 'Jatim-Jateng.jpg'),
(2, 'jtg', 'Jawa Tengah', 'Borobudur.jpg'),
(3, 'jbr', 'Jabar_DKI', 'Jabar-DKI.jpg'),
(4, 'smt', 'Sumatera', 'Sumatera.jpg'),
(5, 'bl', 'Bali', 'Bali.jpg'),
(6, 'lmb', 'Lombok', 'PLombok.jpg'),
(7, 'slw', 'Sulawesi', 'Toraja.png'),
(8, 'pkm', 'Pulau Komodo', 'Pulau Komodo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `no_telp`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Putri Budiasih', 'putribudiasih18@gmail.com', '085330183550', '$2y$10$Q.VVY.j34/MBMqSE/m4DCOaudkvrY1SIJLI6GTAl1h27KdiR8I.3a', 1, 1, 1619064706),
(4, 'Rio Sesono', 'riosesono9@gmail.com', '085330186435', '$2y$10$3kpn7BuyvwJ/Xsz9uw833.RIxmmjzo1csw.w4J/ek5S/xAMUa4M3y', 2, 1, 1619068773),
(7, 'user', 'user@gmail.com', '085444332211', '$2y$10$m0V7R2cxJKCl4CyNd1F9cuf6AozOlrgpjNi3QonGdSTC31NnfdJri', 2, 1, 1621830052),
(11, 'admin', 'admin@gmail.com', '089333444222', '$2y$10$mVBht.DtAMTen74KKgFDeOu09W0jJYAwJrxmmxfi/bDbEtXeu0MBa', 1, 1, 1621830577);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(6, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `url` varchar(120) NOT NULL,
  `icon` varchar(120) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Daftar Pesanan', 'Admin', 'far fa-fw fa-clipboard', 1),
(2, 2, 'Beranda', 'user', 'fas fa-fw fa-home', 1),
(3, 2, 'Paket Wisata', 'user/paketwisata', 'fas fa-fw fa-umbrella-beach', 1),
(4, 3, 'Menu Manajemen', 'menu', 'far fa-fw fa-folder', 1),
(5, 3, 'Submenu Manajemen', 'menu/submenu', 'far fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'Admin/role', 'far fa-fw fa-user', 1),
(8, 1, 'Paket Wisata Admin', 'Admin/paketwisata', 'fas fa-fw fa-umbrella-beach', 1),
(9, 2, 'Pemesanan Paket', 'user/pesanan', 'fas fa-fw fa-book-open', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_trayek`
--
ALTER TABLE `tb_trayek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tb_trayek`
--
ALTER TABLE `tb_trayek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
