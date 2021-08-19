-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 04:48 AM
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
(56, 24, 45, NULL, NULL, NULL),
(63, 26, 44, NULL, NULL, NULL),
(64, 26, 45, NULL, NULL, NULL),
(65, 26, 46, NULL, NULL, NULL),
(66, 26, 47, NULL, NULL, NULL),
(67, 26, 48, NULL, NULL, NULL),
(68, 27, 44, NULL, NULL, NULL),
(69, 27, 45, NULL, NULL, NULL);

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
  `catatan` text NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_user`, `nama_pemesan`, `email_pemesan`, `telp_pemesan`, `lokasi_berangkat`, `jml_pax`, `kendaraan`, `hotel`, `tgl_mulai`, `tgl_selesai`, `trayek`, `total_harga`, `catatan`, `keterangan`) VALUES
(17, 4, 'Rio Sesono', 'riosesono9@gmail.com', '085438183245', 'Probolinggo', 12, 'mebus', 'sunbomebus', '2021-07-21', '2021-07-24', 'bl', '500000', '', 0),
(18, 12, 'Wahyu', 'wahyu@gmail.com', '085438183245', 'jember', 2, 'ava', 'fontaava', '2021-07-22', '2021-07-24', 'bl', '200000', '', 0),
(21, 7, 'Arman Maulana Saputra', 'armanmaulanasaputra15@gmail.com', '081234835352', 'Lumajang', 10, 'hia', 'fontahia', '2021-08-08', '2021-08-15', 'bl', '200000', '', 0),
(24, 7, 'Arman Maulana Saputra', 'armanmaulanasaputra15@gmail.com', '081234835352', 'Lumajang', 10, 'hia', 'sunbohia', '2021-08-02', '2021-08-11', 'bl', '9000000', '', 0),
(27, 11, 'Arman Maulana Saputra', 'armanmaulanasaputra15@gmail.com', '081234835352', 'Lumajang', 2, 'ava', 'sunboava', '2021-08-01', '2021-08-04', 'bl', '6400000', 'Alergi udang dan cintamu', 0);

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
(1, 'Gunung Bromo', '100000', 'Gunung Bromo (2.329 m dpl), adalah salah satu gunung dari beberapa gunung lainnya yang terhampar di kawasan Komplek Pegunungan Tengger, berdiri diareal Kaldera berdiameter 8-10 km yang dinding kalderanya mengelilingi laut pasir sangat terjal dengan kemiringan ± 60-80 derajat dan tinggi berkisar antara 200-600 meter. Daya tarik Gunung Bromo yang istimewa adalah kawah di tengah kawah dengan lautan pasirnya yang membentang luas di sekeliling kawah Bromo yang sampai saat ini masih terlihat mengepulkan asap putih setiap saat, manandakan Gunung ini masih aktif.', 'bromo.JPG', 'jtm'),
(2, 'Gunung Ijen', '100000', 'Kawah Ijen merupakan salah satu objek wisata yang sudah dikenal luas bahkan hingga ke mancanegara. Fenomena alam blue fire Gunung Ijen, Danau Asam Kawah Ijen, hingga aktivitas kehidupan penambang belerang tradisional menjadi daya tarik puluhan ribu wisatawan yang berkunjung dan mendaki gunung berapi di ujung paling timur Pulau Jawa ini.', 'ijen.jpg', 'jtm'),
(3, 'Jawa Timur Park 1 2 3', '100000', 'Jatim Park adalah sebuah tempat rekreasi dan taman belajar yang terdapat di Kota Batu, Jawa Timur. Objek wisata ini berada sekitar 20 km barat Kota Malang, dan kini menjadi salah satu icon wisata Jawa Timur. Objek wisata ini memiliki 36 wahana, di antaranya kolam renang raksasa (dengan latar belakang patung Ken Dedes, Ken Arok, dan Mpu Gandring), spinning coaster, dan drop zone. Wahana pendidikan yang menjadi pusat perhatian di antaranya adalah Volcano dan Galeri Nusantara yang juga terdapat tanaman agro, diorama binatang langka, dan miniatur candi-candi.', 'jatimpark.jpg', 'jtm'),
(4, 'Wisata Bahari Lamongan', '100000', 'Wisata Bahari Lamongan atau yang akrab dengan singkatan WBL adalah salah satu objek wisata yang ada di Jawa Timur. Tempat ini menjadi arena rekreasi paling besar di kawasan pesisir Pantai Jawa. Sebelum resmi berdiri Wisata Bahari Lamongan akrab dengan sebutan Tanjung Kodok, kemudian mulai berkembang menjadi destinasi wisata yang modern bernama WLB.', 'wbl.jpg', 'jtm'),
(5, 'Taman safari Indonesia 2', '100000', 'Taman Safari Prigen sejauh ini merupakan salah satu dari tiga Taman Safari terbesar yang ada di Indonesia. Kedua Taman Safari lain adalah Bali Safari and Marine Park di Bali serta Taman Safari Bogor. Mengusung konsep kebun binatang ala Afrika, pengunjung dapat melihat satwa-satwa bebas berkeliaran di alam terbuka. Selama berada di sini rasakan pengalaman baru bersafari menyaksikan kehidupan hewan di alam liar.', 'tamansafari.jpg', 'jtm'),
(6, 'Telaga Sarangan', '100000', 'Telaga Sarangan, juga dikenal sebagai Telaga Pasir adalah telaga alami yang berada di ketinggian 1.200 meter di atas permukaan laut dan terletak di lereng Gunung Lawu,Kecamatan Plaosan, Kabupaten Magetan, Jawa Timur. ', 'telagasarangan.jpg', 'jtm'),
(7, 'Waduk Selorejo', '100000', 'Waduk Selorejo adalah salah objek wisata alam buatan yang berada di Malang, Jawa Timur. Tempat wisata ini menyuguhkan hamparan danau yang dikelilingi pegunungan menjulang tinggi. Di sekeliling waduk seluas 650 hektar ini terdapat Gunung Anjasmoro, Kawi, dan Kelud.', 'wadukselorejo.jpg', 'jtm'),
(8, 'Kota Wisata Batu', '100000', 'Batu menjadi destinasi wisata dengan berbagai tujuan menarik. Anda bisa mengunjungi rekomendasi tempat wisata di Batu Malang yang populer seperti wisata sejarah, alam, modern, keluarga, kuliner, dan lainnya.', 'kotawisatabatu.jpg', 'jtm'),
(9, 'Makam Bung Karno', '100000', 'Keberadaan makam Bung Karno di kota Blitar ini seakan menjadi magnet tersendiri bagi para wisatawan. Menuju ke area makam, Anda akan disambut dengan pilar-pilar besar nan megah dan tangga yang cukup tinggi. Dan Sebelum masuk, anda musti mengisi buku tamu terlebih dahulu di pos penjaga yang berada di sebelah barat tangga tersebut.', 'makambungkarno.jpg', 'jtm'),
(10, 'Candi Borobudur', '100000', 'Sebagai Candi Buddha terbesar di dunia sekaligus monumen Buddha terbesar di dunia, Candi Borobudur memiliki panjang 121,66 meter dengan lebar 121,38 meter dan tinggi 35,40 meter. Menurut filsafat Buddha, struktur tingkatan Candi Borobudur merupakan tiruan alam semesta akan roda kehidupan.', 'borobudur.jpg', 'jtg'),
(11, 'Candi Prambanan', '100000', 'Candi Prambanan merupakan candi Hindu yang terbesar di Indonesia. Denah asli Candi Prambanan berbentuk persegi panjang, terdiri atas halaman luar dan tiga pelataran, yaitu Jaba (pelataran luar), Tengahan (pelataran tengah) dan Njeron (pelataran dalam).', 'prambanan.jpg', 'jtg'),
(12, 'Wisata Merapi', '100000', 'Menjadi salah satu gunung berapi paling aktif di Indonesia, Gunung Merapi tidak sebatas menjadi bahaya bagi warga yang tinggal di lerengnya. Merapi juga menyimpan keeksotisan sebagai magnet wisata. Kegagahan Gunung Merapi nggak pernah gagal memuaskan para wisatawan.', 'merapi.jpg', 'jtg'),
(13, 'Ketep Pass', '100000', 'Hal paling menonjol dari Ketep Pass karena diapit oleh lima gunung sekaligus. Karena itulah, pengunjung bisa menyaksikan kelima gunung tersebut. Di antaranya adalah Merapi, Merbabu, Sindoro, Sumbing dan Slamet. Untuk menikmati pemandangan gunung-gunung tersebut, pengunjung perlu beranjak ke pelataran Panca Arga. Dalam bahasa Jawa, Panca Arga berarti lima gunung.', 'keteppas.jpg', 'jtg'),
(14, 'Lawang Sewu', '100000', 'Lawang Sewu adalah gedung bersejarah milik PT Kereta Api Indonesia (Persero) yang awalnya digunakan sebagai Kantor Pusat perusahaan kereta api swasta Nederlandsch-Indische Spoorweg Maatschappij (NISM). Gedung Lawang Sewu dibangun secara bertahap di atas lahan seluas 18.232 m2. Bangunan utama dimulai pada 27 Februari 1904 dan selesai pada Juli 1907. Sedangkan bangunan tambahan dibangun sekitar tahun 1916 dan selesai tahun 1918.', 'lawangsewu.jpg', 'jtg'),
(15, 'Telaga Warna', '100000', 'Telaga Warna Dieng adalah salah satu objek wisata yang berada di kawasan Dataran Tinggi Dieng, Kabupaten Wonosobo, Jawa Tengah. Nama Telaga Warna sendiri diberikan karena keunikan fenomena alam yang terjadi di tempat ini, yaitu warna air dari telaga tersebut yang sering berubah-ubah. ', 'telagawarna.jpg', 'jtg'),
(16, 'Jati Jajar', '100000', 'Goa Jatijajar merupakan situs geologi di Kebumen yang terbentuk dari proses alami. Goa ini terbentuk dari batuan kapur dengan panjang kurang lebih 200 meter. Menurut sejarah, goa ini pertama kali ditemukan oleh seorang petani.\r\nKetika sedang mencari rumput, petani tersebut tak sengaja jatuh ke lubang. Tak disangka, lubang tempat jatuh si petani merupakan langit-langit Gua. Gua ini sendiri berasal dari pohon jati yang tumbuh sejajar di mulut gua.', 'jatijajar.jpg', 'jtg'),
(17, 'Batu Raden', '100000', 'Wisata Baturaden merupakan tempat wisata yang berada di sebelah utara Kota Purwokerto atau tepatnya di lereng gunung slamet. Baturaden tidak kalah indahnya dengan tempat wisata alam yang lain, banyak wisatawan datang ke tempat ini untuk memanjakan mata begitu megahnya ciptaan Tuhan, di kawasan Baturaden terdapat beberapa spot yang menarik.', 'baturaden.jpg', 'jtg'),
(18, 'Parangtritis', '100000', 'Pantai Parangtritis hanya 27 km dari pusat Kota Jogja dan terkenal memiliki pemandangan sunset yang romantis. Naik bendi menyusuri Pantai Parangtritis sore hari akan menjadi kenangan yang manis.', 'parangtritis.jpg', 'jtg'),
(19, 'Pantai Kukup', '100000', 'Pantai Kukup adalah deretan pantai di Kabupaten Gunung Kidul. Walaupun memiliki pasir putih yang didominasi dengan butiran pecahan batuan gamping, pasir pantai ini sangat halus dan indah.', 'kukup.jpg', 'jtg'),
(20, 'Pantai Krakal', '100000', 'Pasir pantai Krakal berjenis pasir putih, ditambah dengan bebatuan karang pada tepi sepanjang pantai. Hal semacam itu begitu cocok bagi wisatawan yang merindukan dengan kesegaran angin dan panorama laut. Wisata krakal beach  memiliki beragam biota laut yang amat menggoda di pinggiran pantai. Untuk berburu biota laut, wisatawan dapat menggunakan alat bantu jaring kecil yang biasanya di jual oleh pedagang sekitar area pantai.', 'krakal.jpg', 'jtg'),
(21, 'Pantai Indrayanti', '100000', 'Sama seperti tipikal pantai selatan di wilayah Gunungkidul, pemandangan di sini tidak kalah indahnya. Namun yang menjadi kelebihan pantai ini yaitu selain garis pantainya yang landai juga pasir pantai di sini relatif lebih bersih ketimbang pantai lainnya.\r\nSelain itu, lantaran dikelola oleh swasta, fasilitas penunjang di objek wisata ini pun jauh lebih lengkap. Mulai dari toilet, musala, kafe, restoran, hingga penginapan sudah tersedia bagi wisatawan.', 'indrayanti.jpg', 'jtg'),
(22, 'Goa Pindul', '100000', 'Goa Pindul adalah salah satu tempat wisata di Yogyakarta berupa gua dengan aliran sungai bawah tanah berwarna kehijauan. Goa Pindul menjadi salah satu destinasi favorit traveler nusantara ataupun asing.', 'goapindul.jpg', 'jtg'),
(23, 'Keraton Yogyakarta', '100000', 'Keraton Ngayogyakarta Hadiningrat atau Keraton Yogyakarta merupakan istana resmi Kesultanan Ngayogyakarta Hadiningrat yang kini berlokasi di Kota Yogyakarta. Keraton ini didirikan oleh Sri Sultan Hamengkubuwana I pada tahun 1755 sebagai Istana/Keraton Yogyakarta.', 'keraton.jpg', 'jtg'),
(24, 'Malioboro', '100000', 'Di sepanjang jalan Malioboro terdapat deretan pedagang kaki lima yang menjual berbagai macam barang, seperti pakaian batik, asesoris, kerajinan tangan, tas-tas etnik, sandal, serta barang-barang lainnya yang menjadi ciri khas kota Yogyakarta. Selain pedagang kaki lima, di kawasan jalan Malioboro ini juga terdapat deretan toko maupun mall. Baik pedagang kaki lima maupun toko-toko ini buka dari pagi hingga malam hari.', 'malioboro.jpg', 'jtg'),
(25, 'Monas', '100000', 'Monumen Nasional (Monas) mulai dibangun pada 17 Agustus 1961 dan diresmikan pada 12 Juli 1975. Monas dibangun sebagai simbol kebanggaan nasional.', 'monas.jpg', 'jbr'),
(26, 'TMII', '100000', 'aman Mini Indonesia Indah (TMII) merupakan suatu kawasan taman wisata bertema budaya Indonesia di Jakarta Timur. Taman ini merupakan rangkuman kebudayaan bangsa Indonesia, yang mencakup berbagai aspek kehidupan sehari-hari masyarakat 26 provinsi Indonesia (pada tahun 1975) yang ditampilkan dalam anjungan daerah berarsitektur tradisional, serta menampilkan aneka busana, tarian, dan tradisi daerah.', 'tmii.jpg', 'jbr'),
(27, 'Ancol', '100000', 'Pantai Ancol merupakan kawasan wisata yang merupakan destinasi wisata pantai dalam kota Jakarta. Wisatawan dapat menikmati suasana segar Pantai Lagoon, Festival, Indah, Beach Pool dan Carnaval, serta Danau Impian. Berlibur di alam terbuka dipercaya memiliki efek menenangkan dan menyenangkan.', 'ancol.jpg', 'jbr'),
(28, 'Dufan', '100000', 'Dufan atau disebut juga Dunia Fantasi adalah taman hiburan yang terletak di kawasan Taman Impian Jaya Ancol, Jakarta Utara, Indonesia. Dufan diresmikan dan dibuka untuk umum pada tanggal 29 Agustus 1985.', 'dufan.jpg', 'jbr'),
(29, 'Sea World Indonesia', '100000', 'eaworld Indonesia adalah sebuah miniatur pesona laut yang terdapat dalam kompleks wisata pertama di Taman Impian Jaya Ancol. Akuarium utama memelihara ribuan satwa laut Indonesia. Sebanyak 35.500 ekor ikan laut Indonesia dari 35 spesies yang berbeda dipelihara disini.', 'seaworld.jpg', 'jbr'),
(30, 'Pulau Seribu', '100000', 'Kepulauan Seribu adalah salah satu wilayah administrasi yang berada di sebelah utara Kota Jakarta. Meski jumlah pulau yang ada sebenarnya tidak sampai seribu, wilayah ini memiliki sederet pulau-pulau indah dengan daya tariknya sendiri. Pulau terdekat berjarak sekitar 45 Km dari Kota Jakarta. Karena ditempuh melalui jalur laut, maka anda tidak perlu terlibat kemacetan lalu lintas untuk mencapai objek wisata ini.', 'pulauseribu.jpg', 'jbr'),
(31, 'Taman Buah Mekarsari', '100000', 'Taman Buah Mekarsari adalah tempat rekreasi berkonsep agrowisata. Pada mulanya, Taman Buah Mekarsari didirikan untuk menjadi tempat konservasi tumbuhan. Tetapi seiring waktu, Taman Buah Mekarsari difungsikan juga sebagai tempat edukasi, reboisasi, dan rekreasi.', 'mekarsari.jpg', 'jbr'),
(32, 'Istana Negara', '100000', 'Istana Bogor merupakan salah satu dari enam Istana Presiden Republik Indonesia yang mempunyai keunikan tersendiri dikarenakan aspek historis, kebudayaan, dan faunanya. Salah satunya adalah keberadaan rusa-rusa yang didatangkan langsung dari Nepal dan tetap terjaga dari dulu sampai sekarang.', 'istana.jpg', 'jbr'),
(33, 'Pangandaran', '100000', 'Kabupaten Pangandaran adalah sebuah kabupaten di Provinsi Jawa Barat. Kabupaten ini berbatasan dengan Kabupaten Ciamis di utara, Kabupaten Cilacap di timur, Samudera Hindia di selatan, serta Kabupaten Tasikmalaya di barat.', 'pangandaran.jpg', 'jbr'),
(34, 'Puncak Pass', '100000', 'Puncak adalah sebuah daerah wisata pegunungan yang termasuk ke dalam wilayah Kabupaten Bogor dan Kabupaten Cianjur, Provinsi Jawa Barat. Puncak terletak 70 km sebelah selatan Jakarta.', 'puncakbogor.jpg', 'jbr'),
(35, 'Green Canyon Indonesia', '100000', 'Green Canyon (Ngarai Hijau) adalah salah satu objek wisata di Jawa Barat yang terletak di Desa Kertayasa Kecamatan Cijulang, Kabupaten Pangandaran. Objek wisata ini berjarak ± 31 km dari Pangandaran. Ngarai ini terbentuk dari erosi tanah akibat aliran sungai Cijulang selama jutaan tahun yang menembus gua dengan stalaktit dan stalakmit yang mempesona serta diapit oleh dua bukit dengan bebatuan dan rimbunnya pepohonan menyajikan atraksi alam yang khas dan menantang.', 'greencanyon.jpg', 'jbr'),
(36, 'Tangkuban Perahu', '100000', 'Gunung Tangkuban Parahu adalah salah satu gunung yang terletak di Provinsi Jawa Barat, Indonesia. Sekitar 20 km ke arah utara Kota Bandung, dengan rimbun pohon pinus dan hamparan kebun teh di sekitarnya, Gunung Tangkuban Parahu mempunyai ketinggian setinggi 2.084 meter.', 'tangkubanperahu.jpg', 'jbr'),
(37, 'Ciater', '100000', 'Ciater adalah sebuah kecamatan di Kabupaten Subang, Provinsi Jawa Barat, Indonesia. Kecamatan ini berjarak sekitar 26 Km dari ibu kota Kabupaten Subang ke arah barat daya. Pusat pemerintahannya berada di Desa Ciater. Kecamatan Ciater merupakan hasil pemekaran Kecamatan Jalan Cagak.', 'ciater.jpg', 'jbr'),
(38, 'Cibaduyut', '100000', 'Cibaduyut merupakan sebuah desa yang terletak dalam (daerah) kecamatan Bojongloa Kidul, Kota Bandung, Provinsi Jawa Barat, Indonesia.', 'cibaduyut.jpg', 'jbr'),
(39, 'Cihampelas', '100000', 'Cihampelas adalah nama sebuah kecamatan di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia.', 'ciampelas.jpg', 'jbr'),
(40, 'Danau Toba', '100000', 'Danau Toba adalah sebuah keajaiban alam yang sangat menakjubkan. Danau ini diperkirakan terbentuk dari letusan dahsyat sebuah gunung api, Gunung Toba, yang terjadi sekitar 74.000 tahun yang lalu. Dengan luas lebih dari 1.145 kilometer persegi dan kedalaman 450 meter, Danau Toba sebenarnya lebih mirip lautan daripada danau. Di tengah danau vulkanik terbesar di dunia ini juga terdapat sebuah pulau yang berukuran cukup besar, yaitu Pulau Samosir.', 'danautoba.jpg', 'smt'),
(41, 'Bangka', '100000', 'Bangka Belitung terletak di bagian timur Pulau Sumatra, dekat dengan Provinsi Sumatra Selatan. Bangka Belitung dikenal sebagai daerah penghasil timah, memiliki pantai yang indah dan kerukunan antar etnis.', 'bangka.jpg', 'smt'),
(42, 'Belitong', '100000', 'Bangka Belitung terletak di bagian timur Pulau Sumatra, dekat dengan Provinsi Sumatra Selatan. Bangka Belitung dikenal sebagai daerah penghasil timah, memiliki pantai yang indah dan kerukunan antar etnis.', 'belitung.jpg', 'smt'),
(43, 'Tanjung Pinang', '100000', 'Kota ini memiliki cukup banyak daerah pariwisata seperti Pulau Penyengat yang hanya berjarak kurang lebih 2 mil dari Pelabuhan Sri Bintan Pura, Pantai Trikora dengan pasir putihnya terletak kurang lebih 65 km dari kota, dan Pantai Buatan yaitu Tepi Laut yang terletak di garis pantai pusat kota sebagai pemanis atau wajah kota (waterfront city).', 'tanjungpinang.jpg', 'smt'),
(44, 'Tanah Lot', '100000', 'Pura Tanah Lot merupakan bagian dari Pura Kahyangan Jagat di Bali, ditujukan sebagai tempat memuja dewa penjaga laut. Pada saat air laut pasang, pura akan kelihatan dikelilingi air laut. Di bawahnya terdapat goa kecil yang didalamnya ada beberapa ular laut. Sedangkan pada saat air laut pasang, anda akan dapat berjalan mendekati lokasi pura.', 'tanahlot.jpg', 'bl'),
(45, 'Danau Bedugul', '100000', 'Wisata Bedugul merupakan wisata di Bali utara yang memesona. Di wisata Bedugul terdapat tiga danau kawah yang menjadi daya tarik di kawasan ini. Wisata Bedugul yang berada di dataran tinggi memberi kesejukan berbaur dengan budaya khas Bali yang eksotis.', 'bedugul.jpg', 'bl'),
(46, 'Kintamani', '100000', 'Objek Wisata Kintamani Bali merupakan salah satu dari sekian Daftar Objek Wisata di Bali serta merupakan highlight wisata yang terkenal di dunia, daya tarik utama objek wisata ini terletak pada pesona alam pemandangan Gunung Batur, Danau Baturnya dna masih banyak lainnya.', 'kintamani.jpg', 'bl'),
(47, 'GWK', '100000', 'Garuda Wisnu Kencana sebuah tempat monumental yang merupakan mega proyek yang dikembangkan sebagai taman budaya yang menampung berbagai kegiatan seni dan budaya lokal, berada pada sebuah bukit tandus dengan luas 240 hektar.', 'gwk.jpg', 'bl'),
(48, 'Tanjung Benoa Water Sport', '100000', 'Tanjung Benoa, salah satu tempat wisata terkenal & favorit wisatawan Indonesia saat berlibur di Bali. Selain itu, lokasi Tanjung Benoa sangat strategis, karena berdekatan dengan kawasan tempat wisata Nusa Dua. Daya tarik objek wisata Tanjung Benoa terdapat pada dua hal, yaitu; keindahan pantai Tanjung Benoa, yang memiliki pasir putih dengan ombak tenang dan aktivitas Bali water sports.', 'tanjungbenoa.jpg', 'bl'),
(49, 'Kuta', '100000', 'Kawasan pariwisata Kuta salah satu area di pulau Bali yang paling terkenal sebagai destinasi wisata. Daya tarik utama tempat wisata di Bali Kuta, terletak pada pantai Kuta yang memiliki bentangan pantai pasir putih bersih dengan ombak yang sangat cocok untuk surfing dan pemandangan sunset.', 'kuta.jpg', 'bl'),
(50, 'Pantai Pandawa', '100000', 'Lokasinya yang tersembunyi dan jalan masuk menuju ke lokasi diapit dua tebing batu sempat membuat pantai Pandawa disebut sebagai pantai rahasia “The Secret Beach”, sebuah tempat wisata dengan suasana yang tenang dan belum begitu ramai seperti umumnya wisata pantai di Bali.', 'pandawa.jpg', 'bl'),
(51, 'Rambitan Sade', '100000', 'Bangunan yang ada di desa Sade memiliki ciri khas bangunan tradisional Sasak.  Bangunan yang ada berdinding anyaman bambu dan beratap rumbia kering dengan tiang terbuat dari kayu.\r\nKonstruksi rumah seperti ini membuat rumah terasa sejuk pada siang hari dan hangat pada malam hari. Bangunan rumah yang ada di desa Sade memiliki tiga jenis yang berbeda peruntukannya. ', 'rambitansade.jpg', 'lmb'),
(52, 'Gugusan Gili Gili', '100000', 'Aktivitas snorkeling di Gili Trawangan, tidak cukup hanya di sini saja tetapi juga anda bisa menikmati keindahan bawah laut di dua pulau lainnya yaitu Gili Meno dan Gili Air yang termasuk dalam gugusan 3 gili yang sangat populer di Lombok sebagai tujuan wisata terutama untuk aktivitas snorkeling. ', 'gili.jpg', 'lmb'),
(53, 'Tanjung Aan', '100000', 'Pantai tanjung aan berhadapan langsung dengan samudera hindia, mempunyai garis pantai yang melengkung panjang sekitar 2 km jaraknya.', 'tanjungaan.jpg', 'lmb'),
(54, 'Getap', '100000', 'Getap dan juga di wilayah Babakan menjadi sentra produksi beragam alat-alat dapur dan mesin rekayasa. Dari sana beragam hasil industri dari logam dihasilkan. Konsep industrialisasi telah berkembang lama di kelurahan itu sejak zaman Raja Anak Agung Karang Asem dan masih bertahan hingga kini.', 'getap.jpeg', 'lmb'),
(55, 'Banyumulek', '100000', 'Jika menyebut nama desa Banyumulek, akan terbayang jelas dalam ingatan kita, bagaimana pembuatan dan produksi kerajinan gerabah di sana. Bagaimana tangan-tangan terampil warganya dalam menciptakan seni gerabah. Dari yang besar hingga kecil, bernilai artistik tinggi, bisa diperoleh sebagai cinderamata.', 'banyumulek.jpg', 'lmb'),
(56, 'Sukarara', '100000', 'Wisata Desa Sukarara Lombok adalah desa penghasil kerajinan tenun songket khas Pulau Lombok yang sangat terkenal.', 'sukarara.jpg', 'lmb'),
(57, 'Bukit Malimbu', '100000', 'Bukit Malimbu berada di sisi jalan, memiliki dua titik untuk menikmati pemandangan, yaitu pada sisi timur dan barat jalan raya. Hal menarik lainnya yakni Bukit Malimbu tepat berada diatas Pantai Malimbu yang memiliki pemandangan indah.', 'bukitmalimbu.jpg', 'lmb'),
(58, 'Sendang Gile', '100000', 'Lombok ternyata juga menawarkan tempat wisata alam berupa air terjun tersembunyi yang sejuk nan mempesona. air terjun ini adalah Air Terjun Sendang Gile. Suara gemericik air dan cipratan airnya yang sejuk sungguh menjadi pengalaman tersendiri bagi siapapun yang berkunjung ke sana.', 'sendanggile.jpg', 'lmb'),
(59, 'Sembalun Bumbung/Sembalun Lawang', '100000', 'Sembalun Lawang adalah sebuah desa kecil yang berlokasi di sebelah utara kaki Gunung Rinjani. Desa kecil yang indah di ketinggian sekitar 1.156 m ini menyuguhkan pemandangan alam yang indah sekaligus menjadi salah satu jalur populer titik awal pendakian ke Gunung Rinjani (3.726 mdpl).', 'sembalunlawang.jpg', 'lmb'),
(60, 'Desa Tetebatu', '100000', 'Desa Tete Batu sudah menjadi desa wisata sejak zaman Belanda . Lokasinya di bawah gunung Rinjani dengan ketinggian sekitar 700 meter di atas permukaan laut.', 'tetebatu.jpg', 'lmb'),
(61, 'Desa Kota Raja', '100000', 'Kotaraja adalah sebuah desa di wilayah Kecamatan Sikur, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia.', 'kotaraja.jpg', 'lmb'),
(62, 'Pantai Bunaken', '100000', 'Taman Nasional Bunaken adalah taman laut yang terletak di Sulawesi Utara, Indonesia. Taman ini terletak di Segitiga Terumbu Karang yang menjadi habitat bagi 390 spesies terumbu karang dan juga berbagai spesies ikan, moluska, reptil, dan mamalia laut. Taman Nasional Bunaken merupakan perwakilan ekosistem laut Indonesia, meliputi padang rumput laut, terumbu karang, dan ekosistem pantai.', 'bunaken.jpg', 'slw'),
(63, 'Tana Toraja', '100000', 'Suku Toraja yang mendiami daerah pegunungan dan mempertahankan gaya hidup yang khas dan masih menunjukkan gaya hidup Austronesia yang asli dan mirip dengan budaya suku Nias yang ada di provinsi Sumatra Utara. Daerah ini merupakan salah satu objek wisata unggulan di provinsi Sulawesi Selatan.', 'toraja.jpg', 'slw'),
(64, 'Bantimurung', '100000', 'Taman Nasional Bantimurung sering disebut juga sebagai Kingdom Of Butterfly, atau kerajaan Kupu-Kupu. Karena kupu-kupu menjadi fauna khas wilayah Taman Nasional Bantimurung, bahkan di lokasi tersebut dibuat khusus museum kupu-kupu.', 'batimurung.jpg', 'slw'),
(65, 'Ramang Ramang', '100000', 'Ramang-ramang adalah sebuah gunung kapur atau disebut karst yang terbesar kedua di dunia, yang terbesar pertamanya yaitu South China Karst, Yunan, China.', 'ramangramang.jpg', 'slw'),
(66, 'Makassar', '100000', 'Makassar merupakan kota metropolitan terbesar di kawasan Indonesia Timur dan pada masa lalu pernah menjadi ibu kota Negara Indonesia Timur dan Provinsi Sulawesi. Makassar terletak di pesisir barat daya Pulau Sulawesi dan berbatasan dengan Selat Makassar di sebelah barat, Kabupaten Kepulauan Pangkajene di sebelah utara, Kabupaten Maros di sebelah timur dan Kabupaten Gowa di sebelah selatan.', 'makassar.jpg', 'slw'),
(67, 'Puncak Waringin', '100000', 'Puncak Waringin dibangun tinggi menghadap timur dan barat, sehingga pengunjung bisa dimanjakan oleh pemandangan perairan Labuan Bajo dan matahari terbenam. Water front akan jadi rumah santai untuk melihat sunset.', 'puncakwaringin.jpg', 'pkm'),
(68, 'Pulau Komodo', '100000', 'Pulau Komodo terletak di ujung paling barat Provinsi Nusa Tenggara Timur. Di pulau Komodo, hewan Komodo hidup dan berkembang biak dengan baik, menurut data, hingga pertengahan 2009, pulau ini dihuni sekitar 1300 ekor komodo (+/- 2500 ekor di semua Pulau di  TM. Komodo).', 'pulaukomodo.jpg', 'pkm'),
(69, 'Pulau Rinca', '100000', 'Letak Pulau Rinca sendiri lebih dekat dari Labuan Bajo jika dibandingkan dengan Pulau Komodo, dengan titik tertinggi pulau ini berada di Doro (Gunung) Ora dengan ketinggian sekitar 670 mdpl.', 'pulaurinca.jpg', 'pkm'),
(70, 'Pantai Pink', '100000', 'Pantai Pink Labuan Bajo adalah salah satu pesona bahari Indonesia yang terdapat di beberapa tempat. Pantai ini unik karena warna pasir pantai yang jarang ditemukan di pantai-pantai lainnya.', 'pantaipink.jpg', 'pkm'),
(71, 'Desa Cara', '100000', 'Anda akan menemukan banyak keunikan yang bisa dijumpai begitu kamu berada di desa ini. Seperti banyaknya kambing berkeliaran di pemukiman warga. Bukan tanpa maksud, kambing-kambing ini sengaja dijadikan santapan para komodo yang datang ke pemukiman agar mereka tidak memakan manusia.', 'desacara.jpeg', 'pkm');

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
(1, 'jtm', 'Jawa Timur', '', 'bromo.jpg'),
(2, 'jtg', 'Jawa Tengah', '', 'borobudur1.jpg'),
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
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

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
