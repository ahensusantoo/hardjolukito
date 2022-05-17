<?php $this->view('template/frontend/header') ?>
    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="<?= site_url() ?>">
                    <img src="<?= site_url() ?>assets/images/logo/logo-header.png" alt="logo" class="img-fluid" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <!-- <li><a href="#home" class="page-scroll">Home</a></li> -->
                        <li><a href="#about" class="page-scroll">Tentang Kami</a></li>
                        <li><a href="#features" class="page-scroll">Fitur</a></li>
                        <!-- <li><a href="#" class="dropdown-toggle">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="#" class="dropdown-toggle-inner">Login & Sign Up</a>
                                    <ul class="sub-menu">
                                        <li><a href="login.html">Login Page</a></li>
                                        <li><a href="sign-up.html">Signup Page</a></li>
                                        <li><a href="password-reset.html">Reset Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="dropdown-toggle-inner">Utilities</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">FAQ Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="thank-you.html">Thank You Page</a></li>
                                        <li><a href="download.html">Download Page <span class="badge accent-bg text-white">New</span></a></li>
                                        <li><a href="review.html">Review Page <span class="badge accent-bg text-white">New</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="dropdown-toggle-inner">Team</a>
                                    <ul class="sub-menu">
                                        <li><a href="team.html">Our Team Members</a></li>
                                        <li><a href="team-single.html">Team Member Profile</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="dropdown-toggle-inner">Our Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-default.html">Blog Grid</a></li>
                                        <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Details Left Sidebar</a></li>
                                        <li><a href="blog-single-right-sidebar.html">Details Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us </a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="sale-invoice.html">Sale Invoice <span class="badge badge-danger">New</span></a></li>
                            </ul>
                        </li> -->
                        <li><a href="#screenshots" class="page-scroll">Katalog</a></li>
                        <!-- <li><a href="#process" class="page-scroll">Process</a></li> -->
                        <li><a href="#pricing" class="page-scroll">Harga</a></li>
                        <li><a href="#contact" class="page-scroll">Kontak</a></li>
                        <li><a href="#contact" class="page-scroll">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->

    <div class="main">

        <!--hero section start-->
        <section id="home" class="ptb-100 bg-image overflow-hidden" image-overlay="8">
            <div class="background-image-wraper" style="background: url('<?= site_url() ?>assets/frontend/img/slider-bg-1.jpg'); opacity: 1;"></div>
            <div class="hero-bottom-shape-two" style="background: url('<?= site_url() ?>assets/frontend/img/wave-shap.svg')no-repeat bottom center"></div>
            <!-- <div class="effect-1 opacity-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 361.1 384.8" style="enable-background:new 0 0 361.1 384.8;" xml:space="preserve" class="injected-svg svg_img dark-color">
                    <path d="M53.1,266.7C19.3,178-41,79.1,41.6,50.1S287.7-59.6,293.8,77.5c6.1,137.1,137.8,238,15.6,288.9 S86.8,355.4,53.1,266.7z"></path>
                </svg>
            </div> -->
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-slider-content text-white py-5">
                            <h1 class="text-white">Ruang Akad</h1>
                            <p class="lead">Jasa Pembuatan Website Undangan Pernikahan</p>
                            <p class="lead" style="text-align: justify;">Buat pernikahan kamu semakin eksklusif dengan undangan online yang PREMIUM! Bagikan ke seluruh teman, saudara, sahabat dan keluarga tanpa perlu kamu mendatanginya. Buat pernikahanmu semakin Keren! dengan Website Undangan Pernikahan</p>

                            <div class="action-btns mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="<?= site_url('list-katalog-theme') ?>" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fa fa-book-open icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Lihat</small>
                                                <h5 class="mb-0">Katalog</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#pricing" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fa fa-cart-plus icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Mulai</small>
                                                <h5 class="mb-0">Pesan</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="img-wrap">
                            <img src="<?= site_url() ?>assets/frontend/img/top-1.jpg" alt="app image" style="height: 500px !important; margin-left: 35px !important;" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--hero section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="section-heading text-center">
                            <h2>Tentang Kami</h2>
                            <p>
                                <span style="color: var(--color-primary-2) !important;">Ruang Akad</span> adalah penyedia jasa pembuatan undangan pernikahan online berbentuk sebuah website pernikahan. 
                                Kami berupaya menjadikan website pernikahanmu lebih berkesan dan terlihat sempurna ketika dibuka di berbagai layar perangkat gawai para tamu undanganmu (laptop, tablet, dan smartphone), tentunya dengan berbagai fitur yang akan kami tawarkan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center justify-content-sm-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-cubes icon-size-lg color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Modular</h5>
                                    <p class="mb-0">
                                        Semua komponen dibangun untuk digunakan dalam kombinasi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-window-restore icon-size-lg color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Responsive</h5>
                                    <p class="mb-0">
                                        Cepat dioptimalkan untuk bekerja untuk berbagai jenis perangkat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-sync-alt icon-size-lg color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Scalable</h5>
                                    <p class="mb-0">
                                        Tetap konsisten saat mengembangkan fitur baru.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-bezier-curve icon-size-lg color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Customizable</h5>
                                    <p class="mb-0">
                                        Ubah beberapa variabel dan seluruh tema akan beradaptasi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-headset icon-size-lg color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Chat Admin</h5>
                                    <p class="mb-0">
                                        Admin siap bantu membantu setiap pertanyaan anda terkait ruang akad
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-4">
                        <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-lock icon-size-lg color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Keamanan Data</h5>
                                    <p class="mb-0">
                                        Keamanan data
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100 position-relative overflow-hidden" style="display: none;">
            <div class="effect-2 opacity-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 463.6 616" style="enable-background:new 0 0 463.6 616;" xml:space="preserve" class="injected-svg svg_img dark-color">
                    <path d="M148.4,608.3C25.7,572.5-3.5,442.2,0.3,375.8s24.8-117,124.8-166.5s125.7-77.4,165-129.6 c43.2-57.4,96.5-94.4,127.9-73c63,43,53.9,280,14,358s-68.9,75.5-98.9,118.7S271,644,148.4,608.3z"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <div class="section-heading">
                            <h2>Kami Akan Membantu Anda Membuat Undangan Pernikahan Yang Elegan</h2>
                            <!-- <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4" style="height: 90%;">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-concierge-bell icon-size-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Modular</h5>
                                    <p class="mb-0">Semua komponen dibangun untuk digunakan dalam kombinasi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4" style="height: 90%;">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-window-restore icon-size-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Responsive</h5>
                                    <p class="mb-0">Cepat dioptimalkan untuk bekerja untuk berbagai jenis perangkat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4" style="height: 90%;">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-sync-alt icon-size-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Scalable</h5>
                                    <p class="mb-0">Tetap konsisten saat mengembangkan fitur baru.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4" style="height: 90%;">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-bezier-curve icon-size-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Customizable</h5>
                                    <p class="mb-0">Ubah beberapa variabel dan seluruh tema akan beradaptasi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--about us section start-->
        <section id="about" class="about-us ptb-100 position-relative gray-light-bg" style="display: none;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center">
                    <div class="col-md-5 col-lg-4">
                        <div class="about-content-right">
                            <img src="<?= site_url() ?>assets/frontend/img/app-mobile-image-2.png" alt="about us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="about-content-left section-heading">
                            <h2>Use Our App to Manage Everything.</h2>

                            <ul class="check-list-wrap pt-3">
                                <li><strong>Big Data Consulting</strong> – Holisticly leverage existing tactical core competencies with error-free methods of empowerment. Holisticly foster client-centric partnerships.</li>
                                <li><strong>Machine Learning</strong> – Assertively engage backend web-readiness through efficient web services. Enthusiastically innovate frictionless e-commerce after prospective.</li>
                                <li><strong>Artificial Intelligence</strong> – Dynamically incubate transparent technologies after cost effective action items. Competently promote user-centric sources via empowered experiences.</li>
                                <li><strong>Big Data Analytics</strong> – Quickly incubate revolutionary data and effective infomediaries. Credibly transform high standards in convergence via market positioning interfaces.</li>
                            </ul>
                            <div class="action-btns mt-4">
                                <a href="#" class="btn btn-brand-02 mr-3">Get Start Now</a>
                                <a href="#" class="btn btn-outline-brand-02">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative feature-section ptb-100">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-12 col-lg-6">
                        <div class="feature-contents section-heading">
                            <h2>Bagikan Undangan Anda Dengan Mudah</h2>
                            <p>
                                Beberapa keungulan dari menggunakan undangan pernikahan online
                            </p>
                            <ul class="dot-circle pt-2">
                                <li>Ramah Lingkungan 
                                    <br>undangan cetak biasanya akan menjadi barang yang dibuang begitu saja karena dinilai sudah tidak terpakai selepas pesta usai
                                </li>
                                <li>Modern dan Kekinian 
                                    <br>bukan berarti undangan cetak diartikan kuno, namun dengan menggunakan undangan berbasis online akan dinilai lebih modern. Memiliki nuansa yang lebih efisien dan kesan berbeda bagi para tamu undangan.
                                </li>
                                <li>Hemat Waktu 
                                    <br>kendala dari undangan cetak adalah proses dimana kita membagikannya kepada para teman, kerabat, dan saudara dan perlu waktu untuk mengirimkan satu persatu kepada calon undangan.
                                </li>
                                <li>Hemat Biaya 
                                    <br>Ada beberapa kendala dalam undangan cetak, salah satunya adalah kesalahan cetak atau revisi cetak. Dalam revisi cetak membutuhkan biaya untuk ke percetakan, atau biaya revisi lainnya.
                                </li>
                                <li>Mudah Memberi Arah Pada Tamu
                                    <br>Kendala para tamu undangan untuk mencapai tujuan adalah detail denah lokasi.
                                </li>
                                <li>Design yang Keren
                                    <br>Pernahkah terlintas dalam pikiran anda ingin memiliki tampilan undangan pernikahan yang berbeda dari lainnya.
                                </li>
                            </ul>
                            <div class="row pt-3" style="display: none;">
                                <div class="col-4 col-lg-3 border-right">
                                    <div class="count-data text-center">
                                        <h4 class="count-number mb-0 color-primary font-weight-bold">1023</h4>
                                        <span>Customers</span>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-3 border-right">
                                    <div class="count-data text-center">
                                        <h4 class="count-number mb-0 color-primary font-weight-bold">5470</h4>
                                        <span>Downloads</span>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-3 border-right">
                                    <div class="count-data text-center">
                                        <h4 class="count-number mb-0 color-primary font-weight-bold">3560</h4>
                                        <span>Satisfied</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="download-img">
                            <img src="<?= site_url() ?>assets/frontend/img/mobile-pana.svg" alt="download" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us section end-->

        <!--features section start-->
        <div id="features" class="feature-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-9">
                        <div class="section-heading text-center mb-5">
                            <h2>Ruang Akad Fitur</h2>
                            <p class="text-muted para-desc mb-0 mx-auto">Fitur - fitur yang akan Kamu dapatkan ketika membuat Website Undangan Pernikahan Online kamu di Ruang Akad</p>
                        </div>
                    </div>
                </div>

                <!--feature new style start-->
                <div class="row align-items-center justify-content-md-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa-solid fa-power-off p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Website Selalu Aktif</h5>
                                        <p>Website yang cepat dan aman akan aktif tanpa ada batasan waktu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-globe p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Custom Domain</h5>
                                        <p>Lebih bermakna dan tampil unik dengan nama domain kamu sendiri (pernikahankamu.com)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-gem p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Tampilan Premium</h5>
                                        <p>Jaminan 100% tampilan website undangan pernikahan kamu premium, modern dan elegant</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-mobile p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Responsive</h5>
                                        <p>Website undangan pernikahan online kamu kompatible dengan semua device yang digunakan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-database p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Ekspor Data</h5>
                                        <p>Sudah selesai acaranya? Giliran kamu ekspor datanya, siapa saja yang datang ke acara spesial kamu!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-users p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Kolaborasi</h5>
                                        <p>Ajak pasangan kamu, panitia ataupun keluarga untuk berkolaborasi di acara pernikahan kamu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 d-none d-sm-none d-md-block d-lg-block">
                        <div class="position-relative pb-md-5 py-lg-0">
                            <img alt="Image placeholder" src="<?= site_url() ?>assets/frontend/img/fitur2.jpg" style="border-radius: 5% !important;" class="img-center img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-heart p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Cerita Cinta</h5>
                                        <p>Bagikan kisah cinta kamu dengan pasangan, buat para tamu kagum dengan kisah cinta kamu!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-music p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Music</h5>
                                        <p>Pilih music favorit mu untuk dijadikan backsound pada undangan anda</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-video p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Video</h5>
                                        <p>Bisa membagikan video prewedding juga di undangan anda</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-map p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Navigasi Lokasi</h5>
                                        <p>Lengkapi dengan google maps sehingga memudahkan anda dalam menemukan lokasi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-clock p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Hitung Mundur</h5>
                                        <p>CountDown time untuk mengingatkan tamu menuju hari H</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="fa fa-comment p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Doa & Ucapan</h5>
                                        <p>Semua tamu yang kamu undang dapat memanjatkan doa dan ucapan atas pernikahan bahagia kamu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--feature new style end-->
            </div>
        </div>

        <!--features section end-->

        <!--video with download start-->
        <section class="position-relative overflow-hidden ptb-100" style="display: none;">
            <div class="mask-65"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center text-white">
                            <h2 class="text-white">The Most Uses App Platform</h2>
                            <p>Start working with that can provide everything you need to generate awareness, drive traffic, connect. Efficiently transform granular value with client-focused content.</p>
                        </div>
                        <div class="video-promo-content my-5 pb-4">
                            <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon text-center m-auto"><span class="ti-control-play"></span> </a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row justify-content-md-center justify-content-sm-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white p-5 rounded text-center shadow mt-lg-0 mt-4">
                            <div class="icon-text-wrap">
                                <i class="fab fa-apple icon-size-md color-primary mb-2"></i>
                                <h5>Apple Store</h5>
                            </div>
                            <div class="p-20px">
                                <p class="m-0px">Seamlessly foster fully researched convergence and interactive resources administrate data.</p>
                                <a class="btn btn-brand-02 btn-sm btn-rounded" href="#">Download Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white p-5 rounded text-center shadow mt-lg-0 mt-4">
                            <div class="icon-text-wrap">
                                <i class="fab fa-google-play icon-size-md color-primary mb-2"></i>
                                <h5>Google Play</h5>
                            </div>
                            <div class="p-20px">
                                <p class="m-0px">Assertively build B2C manufactured products before front-end optimize frictionless communities tailers.</p>
                                <a class="btn btn-brand-02 btn-sm btn-rounded" href="#">Download Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white p-5 rounded text-center shadow mt-lg-0 mt-4">
                            <div class="icon-text-wrap">
                                <i class="fab fa-windows icon-size-md color-primary mb-2"></i>
                                <h5>Microsoft Store</h5>
                            </div>
                            <div class="p-20px">
                                <p class="m-0px">Completely engineer pandemic human capital via reconceptualize installed base niche markets.</p>
                                <a class="btn btn-brand-02 btn-sm btn-rounded" href="#">Download Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--video with download end-->

         <!--screenshots section start-->
        <section id="screenshots" class="screenshots-section pb-100 pt-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Contoh Desain</h2>
                            <p>Beberapa contoh desain undangan pernikahan saat dibuka menggunakan mobile</p>
                            <a href="<?=site_url('katalog-theme')?>" class="btn btn-brand-02 btn-rounded" title="Katalog">
                                <i class="fa fa-book-open"></i> Lihat semua Katalog
                            </a>
                        </div>
                    </div>
                </div>
                <!--start app screen carousel-->
                <div class="screenshot-wrap">
                    <div class="screenshot-frame"></div>
                    <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-01/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-02/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-03/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-04/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-05/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-06/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-07/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-08/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-09/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-10/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-11/mobile.png" class="img-fluid" alt="screenshots" />
                        <img src="<?= site_url() ?>assets/frontend/img/template/template-12/mobile.png" class="img-fluid" alt="screenshots" />
                    </div>
                </div>
                <!--end app screen carousel-->
            </div>
        </section>
        <!--screenshots section end-->


        <!--work process start-->
        <section id="process" class="work-process-section position-relative  ptb-100 cs-primary-bg" style="display: none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Tata cara Order/Pesan</h2>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-md-center justify-content-sm-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="work-process-wrap">
                            <div class="process-single-item">
                                <div class="process-icon-item left-shape">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon mr-4">
                                            <i class="fas fa-project-diagram color-primary"></i>
                                        </div>
                                        <div class="process-content text-left">
                                            <h5>Planning Idea</h5>
                                            <p>Holisticly architect sustainable meta-services for process-centric core competencies. Enthusiastically re-engineer best-of-breed outsourcing.</p>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338"></path>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338 "></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="process-single-item">
                                <div class="process-icon-item right-shape">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon ml-4">
                                            <i class="fas fa-puzzle-piece color-primary"></i>
                                        </div>
                                        <div class="process-content text-right">
                                            <h5>Developed Final Product</h5>
                                            <p>Monotonectally harness holistic web-readiness after multimedia based catalysts for change. Completely brand front-end systems before visionary.</p>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="process-single-item">
                                <div class="process-icon-item left-shape mb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon mr-4">
                                            <i class="fas fa-truck color-primary"></i>
                                        </div>
                                        <div class="process-content text-left">
                                            <h5>Deliver to Customer</h5>
                                            <p>Monotonectally plagiarize synergistic e-business for stand-alone communities. Professionally enhance visionary manufactured products progressive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="img-wrap">
                            <img src="<?= site_url() ?>assets/frontend/img/app-mobile-image-3.png" alt="features" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--work process end-->

        <!--pricing section start-->
        <section id="pricing" class="pricing-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <h2>Harga</h2>
                            <p>
                                Pilih Paket Website Undangan Online Pernikahan Kamu
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-md-center justify-content-center">
                    <div class="col-12">
                        <div class="d-flex justify-content-center text-center">
                            <label class="pricing-switch-wrap">
                                <span class="beforeinput year-switch text-success">
                                    PAKET
                                </span>
                                    <input type="checkbox" class="d-none" id="js-contcheckbox">
                                    <span class="switch-icon"></span>
                                    <span class="afterinput year-switch">
                                    CUSTOM
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <style type="text/css" media="screen">
                    .pricing-content ul li span{
                        color: var(--color-primary-2) !important;
                    }
                    .pricing-content ul li{
                        color: var(--color-third) !important;
                    }
                </style>
                <div class="row justify-content-center" id="pricing_paket">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center cs-primary-bg single-pricing-pack mt-4">
                            <div class="price-img pt-4">
                                <img src="<?= site_url() ?>assets/frontend/img/priching-img-1.png" alt="price" width="120" class="img-fluid">
                            </div>
                            <div class="py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price color-secondary" style="display: block;">
                                    Rp. 100.000<span></span>
                                </div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">Reguler</h5>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>Custom Nama Tamu</span></li>
                                    <li><span>Music</span></li>
                                    <li><span>Hitung Mundur</span></li>
                                    <li><span>Kolom Ucapan</span></li>
                                    <li><span>Free Revisi</span></li>
                                    <li><span>Protokol Kesehatan</span></li>
                                    <li class="text-deem"><span><del> RSVP (Reservasi) </del></span></li>
                                    <li class="text-deem"><span><del>Navigasi Lokasi</del></span></li>
                                    <li class="text-deem"><span><del> Wedding Gift </del></span></li>
                                    <li class="text-deem"><span><del> Video </del></span></li>
                                    <li class="text-deem"><span><del> Link Sosmed </del></span></li>
                                    <li class="text-deem"><span><del> Love Story </del></span></li>
                                </ul>
                                <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3" target="_blank">Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price cs-primary-bg text-center single-pricing-pack mt-4">
                            <div class="price-img pt-4">
                                <img src="<?= site_url() ?>assets/frontend/img/priching-img-2.png" alt="price" width="120" class="img-fluid">
                            </div>
                            <div class="py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price color-secondary" style="display: block;">
                                    Rp. 200.000<span></span>
                                </div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">Premium</h5>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>Custom Nama Tamu</span></li>
                                    <li><span>Music</span></li>
                                    <li><span>Hitung Mundur</span></li>
                                    <li><span>Kolom Ucapan</span></li>
                                    <li><span>Free Revisi</span></li>
                                    <li><span>Protokol Kesehatan</span></li>
                                    <li><span>RSVP (Reservasi)</span></li>
                                    <li><span>Navigasi Lokasi</span></li>
                                    <li><span>Video</span></li>
                                    <li><span>Gallery</span></li>
                                    <li class="text-deem"><span><del> Wedding Gift </del></span></li>
                                    <li class="text-deem"><span><del> Link Sosmed </del></span></li>
                                    <li class="text-deem"><span><del> Love Story </del></span></li>
                                </ul>
                                <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3" target="_blank">Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center cs-primary-bg single-pricing-pack mt-4">
                            <div class="price-img pt-4">
                                <img src="<?= site_url() ?>assets/frontend/img/priching-img-3.png" alt="price" width="120" class="img-fluid">
                            </div>
                            <div class="py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price color-secondary" style="display: block;">
                                    Rp. 300.000<span></span>
                                </div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">Eksklusif</h5>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>Custom Nama Tamu</span></li>
                                    <li><span>Music</span></li>
                                    <li><span>Hitung Mundur</span></li>
                                    <li><span>Kolom Ucapan</span></li>
                                    <li><span>Free Revisi</span></li>
                                    <li><span>Protokol Kesehatan</span></li>
                                    <li><span>RSVP (Reservasi)</span></li>
                                    <li><span>Navigasi Lokasi</span></li>
                                    <li><span>Video</span></li>
                                    <li><span>Gallery</span></li>
                                    <li><span>Wedding Gift</span></li>
                                    <li><span>Link Sosmed</span></li>
                                    <li><span>Love Story</span></li>
                                </ul>
                                <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3" target="_blank">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="pricing_custom" style="display: none;">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center cs-primary-bg single-pricing-pack mt-4">
                            <div class="price-img pt-4">
                                <img src="<?= site_url() ?>assets/frontend/img/priching-img-1.png" alt="price" width="120" class="img-fluid">
                            </div>
                            <div class="py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price color-secondary" style="display: block;">
                                    Rp. 800.000<span></span>
                                </div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">Eksklusif Custom</h5>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>Bikin Undangan dengan nama sendiri</span></li>
                                    <li><span>nama-pasangan.com sehingga terkesan lbh elegan</span></li>
                                    <li><span>Termasuk fitur standar</span></li>
                                </ul>
                                <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3" target="_blank">Pesan</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price cs-primary-bg text-center single-pricing-pack mt-4">
                            <div class="price-img pt-4">
                                <img src="<?= site_url() ?>assets/frontend/img/priching-img-2.png" alt="price" width="120" class="img-fluid">
                            </div>
                            <div class="py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price color-secondary" style="display: block;">
                                    Rp. 300.000<span></span>
                                </div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">Premium custom</h5>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>Custom Nama Tamu</span></li>
                                    <li><span>Music</span></li>
                                    <li><span>Hitung Mundur</span></li>
                                    <li><span>Kolom Ucapan</span></li>
                                    <li><span>Navigasi Lokasi</span></li>
                                    <li><span>Free Revisi</span></li>
                                    <li><span>Protokol Kesehatan</span></li>
                                    <li class="text-deem"><span><del> RSVP (Reservasi) </del></span></li>
                                    <li class="text-deem"><span><del> Wedding Gift </del></span></li>
                                    <li class="text-deem"><span><del> Video </del></span></li>
                                    <li class="text-deem"><span><del> Link Sosmed </del></span></li>
                                </ul>
                                <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3" target="_blank">Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center cs-primary-bg single-pricing-pack mt-4">
                            <div class="price-img pt-4">
                                <img src="<?= site_url() ?>assets/frontend/img/priching-img-3.png" alt="price" width="120" class="img-fluid">
                            </div>
                            <div class="py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price color-secondary" style="display: block;">
                                    Rp. 400.000<span></span>
                                </div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">Unlimited custom</h5>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>Custom Nama Tamu</span></li>
                                    <li><span>Music</span></li>
                                    <li><span>Hitung Mundur</span></li>
                                    <li><span>Kolom Ucapan</span></li>
                                    <li><span>Navigasi Lokasi</span></li>
                                    <li><span>Free Revisi</span></li>
                                    <li><span>Protokol Kesehatan</span></li>
                                    <li class="text-deem"><span><del> RSVP (Reservasi) </del></span></li>
                                    <li class="text-deem"><span><del> Wedding Gift </del></span></li>
                                    <li class="text-deem"><span><del> Video </del></span></li>
                                    <li class="text-deem"><span><del> Link Sosmed </del></span></li>
                                </ul>
                                <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3" target="_blank">Pesan</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="support-cta text-center mt-5" style="color: black;">
                            Catatan :
                            </h5>
                            <p>
                                <ul>
                                    <li>Kilat +50k (1 hari pengerjaan)</li>
                                    <li>Tambah fitur +25k </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="support-cta text-center mt-5">
                            <h5 class="mb-1"><span class="ti-headphone-alt color-secondary mr-3"></span>Kami Siap Membantu Anda
                            </h5>
                            <p>Ada beberapa pertanyaan? 
                                <a href="https://api.whatsapp.com/send/?phone=6288215189486&text&app_absent=0">Hubungi Kami sekarang</a>, atau 
                                <a href="https://api.whatsapp.com/send/?phone=6288215189486&text&app_absent=0">kirim E-mail kepada kami</a>
                                untuk mambantu Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing section end-->

        <!--testimonial section start-->
        <section class="position-relative gradient-bg ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                        <div class="testimonial-heading text-white">
                            <h2 class="text-black">Apa Kata Klien Kami Tentang Ruang Akad ?</h2>
                            <!-- <p>Collaboratively actualize excellent schemas without effective models. Synergistically engineer functionalized applications rather than backend e-commerce.</p> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="testimonial-content-wrap">
                            <div class="owl-carousel owl-theme client-testimonial-1 dot-indicator testimonial-shape">
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="<?= site_url() ?>assets/frontend/img/testimoni/2.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>Head Of Admin</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Interactively optimize fully researched expertise vis-a-vis plug-and-play relationships. Intrinsicly develop viral core competencies for fully tested customer service. Enthusiastically create next-generation growth strategies and.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="<?= site_url() ?>assets/frontend/img/testimoni/2.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Arabella Ora</h5>
                                                <span>HR Manager</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Rapidiously develop user friendly growth strategies after extensive initiatives. Conveniently grow innovative benefits through fully tested deliverables. Rapidiously utilize focused platforms through end-to-end schemas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="<?= site_url() ?>assets/frontend/img/testimoni/2.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Jeremy Jere</h5>
                                                <span>Team Leader</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Objectively synthesize client-centered e-tailers for maintainable channels. Holisticly administrate customer directed vortals whereas tactical functionalities. Energistically monetize reliable imperatives through client-centric.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="<?= site_url() ?>assets/frontend/img/testimoni/2.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>Marketing Head</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Enthusiastically innovate B2C data without clicks-and-mortar convergence. Monotonectally deliver compelling testing procedures vis-a-vis B2B testing procedures. Competently evisculate integrated resources whereas global.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->

        <!--faq or accordion section start-->
        <section id="faq" class="ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Pertanyaan yang Sering Diajukan</h2>
                            <p>Beberapa Pertanyaan yang sering di tanyakan dan berserta jawabannya sehingga bisa membanu anda. Jika masih ada beberapa hal yang masih di binggungkan bisa hubungi customer service kami. <br>Semoga membantu</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6 mb-5 mb-md-5 mb-sm-5 mb-lg-0">
                        <div class="img-wrap">
                            <img src="<?= site_url() ?>assets/frontend/img/faq.svg" alt="download" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div id="accordion" class="accordion faq-wrap">
                            <div class="card mb-3">
                                <a class="card-header " data-toggle="collapse" href="#collapse0" aria-expanded="false">
                                    <h6 class="mb-0 d-inline-block">Apa itu Ruang Akad</h6>
                                </a>
                                <div id="collapse0" class="collapse show" data-parent="#accordion" style="">
                                    <div class="card-body white-bg">
                                        <p>
                                            Ruang akad adalah jasa pembuatan undangan website dengan berbagai fitur yang menarik yang memudahkan kamu untuk mengundang orang orang terdekat ke acara bahagia kamu
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                    <h6 class="mb-0 d-inline-block">Cara pemesanannya gimana min?</h6>
                                </a>
                                <div id="collapse1" class="collapse " data-parent="#accordion" style="">
                                    <div class="card-body white-bg">
                                        <p>
                                            Untuk cara pemesanannya, kamu bisa langsung hubungin admin, pilih paket dan tema yang kamu mau, isi kelengkapan data, lakukan pembayaran, lalu undangan kamu siap dikerjakan ya kak
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapse2" aria-expanded="false">
                                    <h6 class="mb-0 d-inline-block">Kalo ga ada foto, apakah bisa min?</h6>
                                </a>
                                <div id="collapse2" class="collapse " data-parent="#accordion" style="">
                                    <div class="card-body white-bg">
                                        <p>Tenang aja kak, kita bisa ganti dengan animasi yang bagus kok</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapse3" aria-expanded="false">
                                    <h6 class="mb-0 d-inline-block">Kalo buat undangan selain pernikahan bisa ga min?</h6>
                                </a>
                                <div id="collapse3" class="collapse " data-parent="#accordion" style="">
                                    <div class="card-body white-bg">
                                        <p>
                                            Bisa dongg. Kita terima pembuatan undangan selain acara pernikahan kok kak :))
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq or accordion section end-->

        <!--our blog section start-->
        <section class="our-blog-section ptb-100 gray-light-bg" style="display: none;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center">
                            <h2>Our Latest News</h2>
                            <p>
                                Efficiently matrix robust total linkage after market positioning bandwidth. Holisticly restore B2B materials rather than brand flexible paradigms vis-a-vis mission-critical e-commerce.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-card card border-0 shadow-sm mt-4">
                            <div class="blog-img position-relative">
                                <img src="<?= site_url() ?>assets/frontend/img/blog/1.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date">
                                    <strong>24</strong>
                                    <small>Apr</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                            Comments
                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                            Share
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-card card border-0 shadow-sm mt-4">
                            <div class="blog-img position-relative">
                                <img src="<?= site_url() ?>assets/frontend/img/blog/2.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date">
                                    <strong>24</strong>
                                    <small>Apr</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                            Comments
                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                            Share
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>
                                <p class="card-text">Synergistically engage effective ROI after customer directed
                                    partnerships.</p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-card card border-0 shadow-sm mt-4">
                            <div class="blog-img position-relative">
                                <img src="<?= site_url() ?>assets/frontend/img/blog/3.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date">
                                    <strong>24</strong>
                                    <small>Apr</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                            Comments
                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                            Share
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                                <p class="card-text">Holisticly mesh open-source leadership rather than proactive
                                    users. </p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our blog section end-->

        <!--our contact section start-->
        <section id="contact" class="contact-us-section ptb-100">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-12 pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="col-md-12 col-lg-5 mb-5 mb-md-5 mb-sm-5 mb-lg-0">
                        <div class="contact-us-form cs-primary-bg rounded p-5">
                            <h4>Saran atau masukan untuk Ruang Akad</h4>
                            <form action="" method="POST" id="contactForm" class="contact-us-form">
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Nama Anda" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="E-mail Anda" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Pesan Anda untuk Ruang Akad"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" class="btn btn-brand-02" style="color: #fff !important; background-color: var(--color-primary-2) !important;" id="btnContactUs">
                                            Kirim Pesan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="contact-us-content">
                            <h2>Anda ingin membuat aplikasi Mobile atau Website ?</h2>
                            <p class="lead">
                                Selain membuat undangan pernikahan Ruang Akad juga menerima pembuatan Aplikasi berbasis Mobile mau Website.
                                <br> Silahkan hubungi Admin untuk lebih lanjut nya.
                            </p>
                            <a href="#" class="btn btn-outline-brand-01 align-items-center">Hub Amin
                                <span class="fa-brands fa-whatsapp pl-2" style="color: green !important;"></span>
                            </a>

                            <hr class="my-5">

                            <ul class="contact-info-list">
                                <li class="d-flex pb-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-location-arrow color-secondary rounded-circle p-3"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h5 class="mb-1">Company Location</h5>
                                        <p>
                                            Jl Babadan Bangun Tapan Yogyakarta
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex pb-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fa-brands fa-whatsapp color-secondary rounded-circle p-3"></span>
                                    </div>
                                    <div class="contact-text">
                                        <a href="https://api.whatsapp.com/send/?phone=6288215189486&text&app_absent=0" title="">
                                            <h5 class="mb-1">Whatsapp</h5>
                                            <p>
                                                +6288-2151-89486
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li class="d-flex pb-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-envelope color-secondary rounded-circle p-3"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h5 class="mb-1">Email</h5>
                                        <p>
                                            ruangakad@gmail.com
                                        </p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our contact section end-->

        <!--our team section start-->
        <section class="client-section  ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Pelanggan Kami yang Berharga</h2>
                            <p>
                                Rapidiously morph transparent internal or sources whereas resource sucking e-business. Conveniently innovate compelling internal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-customer">
                                <img src="<?= site_url() ?>assets/frontend/img/customers/clients-logo-01.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="<?= site_url() ?>assets/frontend/img/customers/clients-logo-02.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="<?= site_url() ?>assets/frontend/img/customers/clients-logo-03.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="<?= site_url() ?>assets/frontend/img/customers/clients-logo-04.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="<?= site_url() ?>assets/frontend/img/customers/clients-logo-05.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="<?= site_url() ?>assets/frontend/img/customers/clients-logo-06.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="<?= site_url() ?>assets/frontend/img/customers/clients-logo-07.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="<?= site_url() ?>assets/frontend/img/customers/clients-logo-08.png" alt="client logo" class="customer-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our team section end-->

    </div>

    <?php $this->view('template/frontend/footer') ?>