-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 04:09 AM
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
-- Table structure for table `tb_hotel`
--

CREATE TABLE `tb_hotel` (
  `id_hotel` int(11) NOT NULL,
  `kode_hotel` varchar(250) NOT NULL,
  `nama_hotel` varchar(250) NOT NULL,
  `kendaraan` varchar(250) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `hotel_star` varchar(250) NOT NULL,
  `alamat_hotel` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hotel`
--

INSERT INTO `tb_hotel` (`id_hotel`, `kode_hotel`, `nama_hotel`, `kendaraan`, `harga`, `hotel_star`, `alamat_hotel`, `gambar`) VALUES
(1, 'sunboava', 'Sun Boutique', 'ava', '3200000', '3', 'Sunset Road, Kuta, Bali', 'sunboutique.jpg'),
(2, 'sunbonova', 'Sun Boutique', 'nova', '3290000', '3', 'Sunset Road, Kuta, Bali', 'sunboutique.jpg'),
(3, 'sunbohia', 'Sun Boutique', 'hia', '2550000', '3', 'Sunset Road, Kuta, Bali', 'sunboutique.jpg'),
(4, 'sunbomebus', 'Sun Boutique', 'mebus', '2500000', '3', 'Sunset Road, Kuta, Bali', 'sunboutique.jpg'),
(5, 'sunboexe30', 'Sun Boutique', 'exe30', '2150000', '3', 'Sunset Road, Kuta, Bali', 'sunboutique.jpg'),
(6, 'sunboexe34', 'Sun Boutique', 'exe34', '2050000', '3', 'Sunset Road, Kuta, Bali', 'sunboutique.jpg'),
(7, 'sunboexe38', 'Sun Boutique', 'exe38', '1975000', '3', 'Sunset Road, Kuta, Bali', 'sunboutique.jpg'),
(8, 'sunboexe42', 'Sun Boutique', 'exe42', '1900000', '3', 'Sunset Road, Kuta, Bali', 'sunboutique.jpg'),
(9, 'fontaava', 'Fontana Kuta', 'ava', '3500000', '4', 'Jl. Dewi Sri Kuta', 'fontanakuta.png'),
(10, 'fontanova', 'Fontana Kuta', 'nova', '3510000', '4', 'Jl. Dewi Sri Kuta', 'fontanakuta.png'),
(11, 'fontahia', 'Fontana Kuta', 'hia', '2750000', '4', 'Jl. Dewi Sri Kuta', 'fontanakuta.png'),
(12, 'fontamebus', 'Fontana Kuta', 'mebus', '2700000', '4', 'Jl. Dewi Sri Kuta', 'fontanakuta.png'),
(13, 'fontaexe30', 'Fontana Kuta', 'exe30', '2400000', '4', 'Jl. Dewi Sri Kuta', 'fontanakuta.png'),
(14, 'fontaexe34', 'Fontana Kuta', 'exe34', '2300000', '4', 'Jl. Dewi Sri Kuta', 'fontanakuta.png'),
(15, 'fontaexe38', 'Fontana Kuta', 'exe38', '2200000', '4', 'Jl. Dewi Sri Kuta', 'fontanakuta.png'),
(16, 'fontaexe42', 'Fontana Kuta', 'exe42', '2125000', '4', 'Jl. Dewi Sri Kuta', 'fontanakuta.png');

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
(43, 17, 48, '2021-07-22', '08:00:00', '11:00:00'),
(44, 17, 49, NULL, NULL, NULL),
(45, 17, 50, NULL, NULL, NULL),
(46, 17, 47, NULL, NULL, NULL),
(47, 17, 46, NULL, NULL, NULL),
(48, 18, 44, '2021-07-22', '10:00:00', '13:00:00'),
(49, 18, 45, '2021-07-23', '10:00:00', '13:00:00'),
(50, 21, 44, NULL, NULL, NULL),
(51, 21, 45, NULL, NULL, NULL),
(55, 24, 44, NULL, NULL, NULL),
(56, 24, 45, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `kode_kendaraan` varchar(250) NOT NULL,
  `nama_kendaraan` varchar(250) NOT NULL,
  `kapasitas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`id_kendaraan`, `kode_kendaraan`, `nama_kendaraan`, `kapasitas`) VALUES
(1, 'ava', 'Avanza', '3'),
(2, 'nova', 'Innova', '5'),
(3, 'hia', 'Hiace', '10'),
(4, 'mebus', 'Medium Bus', '15'),
(5, 'exe30', '30 Executive', '30'),
(6, 'exe34', '34 Executive', '34'),
(7, 'exe38', '38 Executive', '38'),
(8, 'exe42', '42 Executive', '42');

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
  `kendaraan` varchar(200) NOT NULL,
  `hotel` varchar(200) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `trayek` varchar(50) NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_user`, `nama_pemesan`, `email_pemesan`, `telp_pemesan`, `lokasi_berangkat`, `jml_pax`, `kendaraan`, `hotel`, `tgl_mulai`, `tgl_selesai`, `trayek`, `total_harga`, `keterangan`) VALUES
(17, 4, 'Rio Sesono', 'riosesono9@gmail.com', '085438183245', 'Probolinggo', 12, '', '', '2021-07-21', '2021-07-24', 'bl', '500000', 0),
(18, 12, 'Wahyu', 'wahyu@gmail.com', '085438183245', 'jember', 2, '', '', '2021-07-22', '2021-07-24', 'bl', '200000', 0),
(21, 7, 'Arman Maulana Saputra', 'armanmaulanasaputra15@gmail.com', '081234835352', 'Lumajang', 10, '', '', '2021-08-08', '2021-08-15', 'bl', '200000', 0),
(24, 7, 'Arman Maulana Saputra', 'armanmaulanasaputra15@gmail.com', '081234835352', 'Lumajang', 10, 'hia', 'sunbohia', '2021-08-02', '2021-08-11', 'bl', '9000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE `tb_tempat` (
  `id_tempat` int(11) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tempat`
--

INSERT INTO `tb_tempat` (`id_tempat`, `tujuan`, `harga`, `deskripsi`, `gambar`, `kode`) VALUES
(1, 'Gunung Bromo', '100000', 'Lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'A1.JPG', 'jtm'),
(2, 'Gunung Ijen', '100000', '', '', 'jtm'),
(3, 'Jawa Timur Park 1 2 3', '100000', '', '', 'jtm'),
(4, 'Wisata Bahari Lamongan', '100000', '', '', 'jtm'),
(5, 'Taman safari Indonesia 2', '100000', '', '', 'jtm'),
(6, 'Telaga Sarangan', '100000', '', '', 'jtm'),
(7, 'Waduk Selorejo', '100000', '', '', 'jtm'),
(8, 'Kota Wisata Batu', '100000', '', '', 'jtm'),
(9, 'Makam Bung Karno', '100000', '', '', 'jtm'),
(10, 'Candi Borobudur', '100000', '', '', 'jtg'),
(11, 'Candi Prambanan', '100000', '', '', 'jtg'),
(12, 'Wisata Merapi', '100000', '', '', 'jtg'),
(13, 'Ketep Pas', '100000', '', '', 'jtg'),
(14, 'Lawang Sewu', '100000', '', '', 'jtg'),
(15, 'Telaga Warna', '100000', '', '', 'jtg'),
(16, 'Jati Jajar', '100000', '', '', 'jtg'),
(17, 'Batu Raden', '100000', '', '', 'jtg'),
(18, 'Parangtritis', '100000', '', '', 'jtg'),
(19, 'Kukup', '100000', '', '', 'jtg'),
(20, 'Krakal', '100000', '', '', 'jtg'),
(21, 'Indrayanti', '100000', '', '', 'jtg'),
(22, 'Goa Pindul', '100000', '', '', 'jtg'),
(23, 'Keraton Yogyakarta', '100000', '', '', 'jtg'),
(24, 'Malioboro', '100000', '', '', 'jtg'),
(25, 'Monas', '100000', '', '', 'jbr'),
(26, 'TMII', '100000', '', '', 'jbr'),
(27, 'Ancol', '100000', '', '', 'jbr'),
(28, 'Dufan', '100000', '', '', 'jbr'),
(29, 'Sea World Indonesia', '100000', '', '', 'jbr'),
(30, 'Pulau Seribu', '100000', '', '', 'jbr'),
(31, 'Taman Buah Mekarsari', '100000', '', '', 'jbr'),
(32, 'Istana Negara', '100000', '', '', 'jbr'),
(33, 'Pangandaran', '100000', '', '', 'jbr'),
(34, 'Puncak Pas', '100000', '', '', 'jbr'),
(35, 'Green Canyon Indonesia', '100000', '', '', 'jbr'),
(36, 'Tangkuban Perahu', '100000', '', '', 'jbr'),
(37, 'Ciater', '100000', '', '', 'jbr'),
(38, 'Cibaduyut', '100000', '', '', 'jbr'),
(39, 'Ciampelas', '100000', '', '', 'jbr'),
(40, 'Danau Toba', '100000', '', '', 'smt'),
(41, 'Bangka', '100000', '', '', 'smt'),
(42, 'Belitong', '100000', '', '', 'smt'),
(43, 'Tanjung Pinang', '100000', '', '', 'smt'),
(44, 'Tanah Lot', '100000', '', '', 'bl'),
(45, 'Danau Bedugul', '100000', '', '', 'bl'),
(46, 'Kintamani', '100000', '', '', 'bl'),
(47, 'GWK', '100000', '', '', 'bl'),
(48, 'Tanjung Benoa Water Sport', '100000', '', '', 'bl'),
(49, 'Kuta', '100000', '', '', 'bl'),
(50, 'Pantai Pandawa', '100000', '', '', 'bl'),
(51, 'Rambitan Sade', '100000', '', '', 'lmb'),
(52, 'Gugusan Gili Gili', '100000', '', '', 'lmb'),
(53, 'Tanjung An', '100000', '', '', 'lmb'),
(54, 'Getap', '100000', '', '', 'lmb'),
(55, 'Banyumulek', '100000', '', '', 'lmb'),
(56, 'Sukerare', '100000', '', '', 'lmb'),
(57, 'Bukit Malimbu', '100000', '', '', 'lmb'),
(58, 'Sendang Gile', '100000', '', '', 'lmb'),
(59, 'Sembalun Bumbung/Sembalun Lawang', '100000', '', '', 'lmb'),
(60, 'Desa Tetebaru', '100000', '', '', 'lmb'),
(61, 'Desa Kota Raja', '100000', '', '', 'lmb'),
(62, 'Pantai Bunaken', '100000', '', '', 'slw'),
(63, 'Tanah Toraja', '100000', '', '', 'slw'),
(64, 'Bantimurung', '100000', '', '', 'slw'),
(65, 'Ramang Ramang', '100000', '', '', 'slw'),
(66, 'Makassar', '100000', '', '', 'slw'),
(67, 'Puncak Waringin', '100000', '', '', 'pkm'),
(68, 'Pulau Komodo', '100000', '', '', 'pkm'),
(69, 'Pulau Rinca', '100000', '', '', 'pkm'),
(70, 'Pantai Pink', '100000', '', '', 'pkm'),
(71, 'Desa Cara', '100000', '', '', 'pkm'),
(72, 'a', '', '', '', 'slw'),
(73, 'b', '', '', '', 'slw'),
(74, 'c', '', '', '', 'slw'),
(75, 'd', '', '', '', 'slw'),
(76, 'e', '', '', '', 'slw'),
(77, 'a', '100000', '', '', 'sl'),
(78, 'b', '100000', '', '', 'sl'),
(80, 'd', '', '', '', 'sl'),
(81, 'e', '', '', '', 'sl');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trayek`
--

CREATE TABLE `tb_trayek` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_trayek`
--

INSERT INTO `tb_trayek` (`id`, `kode`, `lokasi`, `deskripsi`, `gambar`) VALUES
(1, 'jtm', 'Jawa Timur', 'Lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'A.JPG'),
(2, 'jtg', 'Jawa Tengah', '', 'Borobudur.jpg'),
(3, 'jbr', 'Jabar_DKI', '', 'Jabar-DKI.jpg'),
(4, 'smt', 'Sumatera', '', 'Sumatera.jpg'),
(5, 'bl', 'Bali', '', 'Bali.jpg'),
(6, 'lmb', 'Lombok', '', 'PLombok.jpg'),
(7, 'slw', 'Sulawesi', '', 'Toraja.png'),
(8, 'pkm', 'Pulau Komodo', '', 'Pulau Komodo.jpg');

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
(11, 'admin', 'admin@gmail.com', '089333444222', '$2y$10$mVBht.DtAMTen74KKgFDeOu09W0jJYAwJrxmmxfi/bDbEtXeu0MBa', 1, 1, 1621830577),
(14, 'coba', 'putribudiasih90@gmail.com', '085330184500', '$2y$10$GzGHa6zg1ieUiR87R5eozOf/7DJA051rap4NNJ5PNxpNU4CFTvbFe', 2, 1, 1627318199);

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

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

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
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tb_trayek`
--
ALTER TABLE `tb_trayek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
