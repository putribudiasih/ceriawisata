<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ceriawisata T&T</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/koper.png" rel="icon">
    <link href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('vendor_temp/Ninestars/') ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Ninestars - v2.3.1
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html"><span>Ceriawisata</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#about">Tentang kami</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#portfolio">Portofolio</a></li>
                    <li><a href="#team">Tim kami</a></li>
                    <!-- <li class="drop-down"><a href="">Drop Down</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="drop-down"><a href="#">Drop Down 2</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li> -->
                    <li><a href="#contact">Kontak kami</a></li>

                    <li class="get-started"><a href="<?= base_url('Login_controller') ?>">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                    <h1>Let's Make Your Travel Better</h1>
                    <h2>Ceriawisata adalah salah satu agensi yang menyediakan layanan terbaik untuk perjalanan anda.</h2>
                    <a href="#about" class="btn-get-started scrollto">Jelajahi lebih</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/landing.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/about.png" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">Ceriawisata Tour & Travel</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Sesuai dengan komitmen kami, kami akan selalu memberikan fasilitas-fasilitas terbaik dan fasilitas plus serta pelayanan extra sehingga anda terasa nyaman dalam melakukan wisata.
                        </p>
                        <!-- <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Corporis voluptates sit</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Ullamco laboris nisi</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Layanan</h2>
                    <p>Kami menyediakan berbagai paket wisata yang menarik untuk anda</p>
                </div>

                <div class="row">
                    <!-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                        </div>
                    </div> -->

                    <div class="col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <img src="<?= base_url('assets/img/bag.png'); ?>" class="card-img-top" alt="...">
                            <h4 class="title"><a href="">Paket Wisata Domestik dan Luar Negeri</a></h4>
                            <p class="description">Paket wisata ke berbagai destinasi wisata Nusantara dan Luar Negeri. Pada paket wisata ini kami melayani grup besar maupun kecil dengan fasilitas yang istimewa ataupun by request sesuai dengan keinginan customer.</p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <img src="<?= base_url('assets/img/kerja.png'); ?>" class="card-img-top" alt="...">
                            <h4 class="title"><a href="">Kunjungan Kerja dan Meeting</a></h4>
                            <p class="description">Paket ini kami peruntukkan bagi instansi-instansi pemerintah maupun swasta yang ingin melakukan kunjungan kerja dan meeting atau studi banding ke instansi lain diluar daerah yang kami kemas bersama paket wisata.</p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <img src="<?= base_url('assets/img/study.png'); ?>" class="card-img-top" alt="...">
                            <h4 class="title"><a href="">Study Tour</a></h4>
                            <p class="description">Paket ini kami kemas khusus bagi sekolah / perguruan tinggi yang hendak melakukan study ke instansi/perusahaan/lembaga riset di daerah tertentu yang kami kemas bersama paket wisata.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Portofolio</h2>
                    <p>Dokumentasi Ceriawisata Tour & Travel di berbagai destinasi</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tampilkan Semua</li>
                            <?php foreach ($trayek as $t) { ?>
                                <li data-filter=".filter-<?= $t['kode'] ?>"><?= $t['lokasi'] ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <?php foreach ($destinasi as $d) { ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $d['kode'] ?>">
                            <div class="portfolio-wrap">
                                <img src="<?= base_url('assets/img/Destinasi/') . $d['gambar'] ?>" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/img/Destinasi/') . $d['gambar'] ?>" data-gall="portfolioGallery" class="venobox" title="<?= $d['tujuan'] ?>"><i class="icofont-plus-circle"></i></a>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                    <!-- 
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-plus-circle"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-plus-circle"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-plus-circle"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-plus-circle"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="icofont-plus-circle"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="icofont-plus-circle"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                            </div>

                        </div>
                    </div> -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= F.A.Q Section ======= -->
        <!-- <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <ul class="faq-list">

                    <li data-aos="fade-up" data-aos-delay="100">
                        <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="icofont-simple-up"></i></a>
                        <div id="faq1" class="collapse show" data-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="icofont-simple-up"></i></a>
                        <div id="faq2" class="collapse" data-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
                        <div id="faq3" class="collapse" data-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
                        <div id="faq4" class="collapse" data-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
                        <div id="faq5" class="collapse" data-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="600">
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
                        <div id="faq6" class="collapse" data-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section>-->
        <!--End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tim kami</h2>
                    <p>Tim Ceriawisata Tour & Travels</p>
                </div>

                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Nama Kepala Ceriawisata</h4>
                                    <span>Kepala Ceriawisata</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Nama Kepala Marketting</h4>
                                    <span>Kepala Marketing</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Nama Kepala Administrasi</h4>
                                    <span>Kepala Administrasi</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member">
                            <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Nama Kepala HUMAS</h4>
                                    <span>Kepala HUMAS</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Partners</h2>
                    <p>Kami telah bekerja sama dengan berbagai pihak demi pelayanan yang terbaik</p>
                </div>

                <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/clients/client-1.png" alt="">
                    <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/clients/client-2.png" alt="">
                    <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/clients/client-3.png" alt="">
                    <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/clients/client-4.png" alt="">
                    <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/clients/client-5.png" alt="">
                    <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/clients/client-6.png" alt="">
                    <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/clients/client-7.png" alt="">
                    <img src="<?= base_url('vendor_temp/Ninestars/') ?>assets/img/clients/client-8.png" alt="">
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak kami</h2>
                    <p>Kontak kami untuk informasi lebih lanjut</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Head Office</h4>
                                <p>Perum Pucang Indah 3/C.28, Pasuruan, Jawa Timur <br> Telp. (0343) 701.3000.</p>
                            </div>

                            <div class="email">
                                <i class="icofont-google-map"></i>
                                <h4>Branch Office</h4>
                                <p>Jl. Mayjend Sutoyo No.99 Daerah istimewa Yogyakarta <br> Telp. (0274) 661.9335.</p>

                                <p>Istana Kuta Galeria Central Park. Broadway 2 No.12B Jl. Patih Jelantik Kuta Bali <br> Telp. (0361) 553.2500.</p>
                            </div>


                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.2826606935596!2d112.8932895143249!3d-7.652725377835684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7c5fac8265cef%3A0x1b61af1a10afbcb7!2sCeria%20Wisata%20Tours!5e0!3m2!1sid!2sid!4v1628309174971!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter" data-aos="fade-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Ikuti Perkembangan Ceriawisata</h4>
                        <p>Kirim email anda untuk informasi lebih lanjut mengenai Ceriawisata Tour & Travel</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Kirim">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class=" col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
                        <h3>Ceriawisata Head Office</h3>


                        Perum Pucang Indah 3/C.28,<br>
                        Pasuruan,<br>
                        Jawa Timur. <br><br>
                        <strong>Phone:</strong> Telp. (0343) 701.3000.<br>

                        </p>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> -->

                    <div class=" col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
                        <h4>Social Media kami</h4>
                        <p>Ikuti berbagai sosial media kami untuk informasi dan promo menarik Ceriawisata Tour & Travel</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Ceriawisata Tour & Travel</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('vendor_temp/Ninestars/') ?>assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('vendor_temp/Ninestars/') ?>assets/js/main.js"></script>

    <script type="text/javascript">
        $('#semua').click(function() {
            $.ajax({
                url: "<?= base_url('Landing/getDestinasi') ?>",
                method: "POST",
                success: function(data) {
                    console.log(data);
                }
            });
        });
    </script>

</body>

</html>