-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 09:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu_berangkat` time DEFAULT NULL,
  `waktu_pulang` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_pesanan`, `id_tempat`, `tanggal`, `waktu_berangkat`, `waktu_pulang`) VALUES
(1, 4, 10, '2021-07-01', '16:25:00', '15:00:00'),
(2, 7, 10, '2021-07-08', '19:34:00', '20:34:00'),
(3, 7, 14, '2021-07-09', '22:35:00', '23:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemesan` varchar(200) NOT NULL,
  `email_pemesan` varchar(200) NOT NULL,
  `telp_pemesan` varchar(20) NOT NULL,
  `lokasi_berangkat` varchar(255) NOT NULL,
  `jml_pax` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `trayek` varchar(50) NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_user`, `nama_pemesan`, `email_pemesan`, `telp_pemesan`, `lokasi_berangkat`, `jml_pax`, `tgl_mulai`, `tgl_selesai`, `trayek`, `total_harga`, `catatan`, `keterangan`) VALUES
(4, 7, '', '', '', 'Surabaya', 10, '2021-07-02', '2021-07-05', 'jtm', '', 'Catatan Penting', 1),
(5, 7, '', '', '', 'Banyuwangi', 5, '2021-07-07', '2021-07-10', 'jtm', '', 'Banyuwangi, kecamatan kalibaru', 0),
(7, 7, '', '', '', 'Bandung', 5, '2021-07-07', '2021-07-10', 'jtg', '200000', 'coba gais', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE `tb_tempat` (
  `id_tempat` int(11) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tempat`
--

INSERT INTO `tb_tempat` (`id_tempat`, `tujuan`, `harga`, `kode`) VALUES
(1, 'Gunung Bromo', '200000', 'jtm'),
(2, 'Gunung Ijen', '100000', 'jtm'),
(3, 'Jawa Timur Park 1,2,3', '100000', 'jtm'),
(4, 'Wisata Bahari Lamongan', '100000', 'jtm'),
(5, 'Taman safari Indonesia 2', '100000', 'jtm'),
(6, 'Telaga Sarangan', '100000', 'jtm'),
(7, 'Waduk Selorejo', '100000', 'jtm'),
(8, 'Kota Wisata Batu', '100000', 'jtm'),
(9, 'Makam Bung Karno', '100000', 'jtm'),
(10, 'Candi Borobudur', '100000', 'jtg'),
(11, 'Candi Prambanan', '100000', 'jtg'),
(12, 'Wisata Merapi', '100000', 'jtg'),
(13, 'Ketep Pas', '100000', 'jtg'),
(14, 'Lawang Sewu', '100000', 'jtg'),
(15, 'Telaga Warna', '100000', 'jtg'),
(16, 'Jati Jajar', '100000', 'jtg'),
(17, 'Batu Raden', '100000', 'jtg'),
(18, 'Parangtritis', '100000', 'jtg'),
(19, 'Kukup', '100000', 'jtg'),
(20, 'Krakal', '100000', 'jtg'),
(21, 'Indrayanti', '100000', 'jtg'),
(22, 'Goa Pindul', '100000', 'jtg'),
(23, 'Keraton Yogyakarta', '100000', 'jtg'),
(24, 'Malioboro', '100000', 'jtg'),
(25, 'Monas', '100000', 'jbr'),
(26, 'TMII', '100000', 'jbr'),
(27, 'Ancol', '100000', 'jbr'),
(28, 'Dufan', '100000', 'jbr'),
(29, 'Sea World Indonesia', '100000', 'jbr'),
(30, 'Pulau Seribu', '100000', 'jbr'),
(31, 'Taman Buah Mekarsari', '100000', 'jbr'),
(32, 'Istana Negara', '100000', 'jbr'),
(33, 'Pangandaran', '100000', 'jbr'),
(34, 'Puncak Pas', '100000', 'jbr'),
(35, 'Green Canyon Indonesia', '100000', 'jbr'),
(36, 'Tangkuban Perahu', '100000', 'jbr'),
(37, 'Ciater', '100000', 'jbr'),
(38, 'Cibaduyut', '100000', 'jbr'),
(39, 'Ciampelas', '100000', 'jbr'),
(40, 'Danau Toba', '100000', 'smt'),
(41, 'Bangka', '100000', 'smt'),
(42, 'Belitong', '100000', 'smt'),
(43, 'Tanjung Pinang', '100000', 'smt'),
(44, 'Tanah Lot', '100000', 'bl'),
(45, 'Danau Bedugul', '100000', 'bl'),
(46, 'Kintamani', '100000', 'bl'),
(47, 'GWK', '100000', 'bl'),
(48, 'Tanjung Benoa Water Sport', '100000', 'bl'),
(49, 'Kuta', '100000', 'bl'),
(50, 'Pantai Pandawa', '100000', 'bl'),
(51, 'Rambitan Sade', '100000', 'lmb'),
(52, 'Gugusan Gili Gili', '100000', 'lmb'),
(53, 'Tanjung An', '100000', 'lmb'),
(54, 'Getap', '100000', 'lmb'),
(55, 'Banyumulek', '100000', 'lmb'),
(56, 'Sukerare', '100000', 'lmb'),
(57, 'Bukit Malimbu', '100000', 'lmb'),
(58, 'Sendang Gile', '100000', 'lmb'),
(59, 'Sembalun Bumbung/Sembalun Lawang', '100000', 'lmb'),
(60, 'Desa Tetebaru', '100000', 'lmb'),
(61, 'Desa Kota Raja', '100000', 'lmb'),
(62, 'Pantai Bunaken', '100000', 'slw'),
(63, 'Tanah Toraja', '100000', 'slw'),
(64, 'Bantimurung', '100000', 'slw'),
(65, 'Ramang Ramang', '100000', 'slw'),
(66, 'Makassar', '100000', 'slw'),
(67, 'Puncak Waringin', '100000', 'pkm'),
(68, 'Pulau Komodo', '100000', 'pkm'),
(69, 'Pulau Rinca', '100000', 'pkm'),
(70, 'Pantai Pink', '100000', 'pkm'),
(71, 'Desa Cara', '100000', 'pkm');

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
(9, 2, 'Pemesanan Paket', 'user/pesanan', 'fas fa-fw fa-book-open', 1),
(10, 2, 'Jadwal', 'user/jadwal', 'fas fa-fw fa-calendar', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  ADD PRIMARY KEY (`id_tempat`);

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
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
