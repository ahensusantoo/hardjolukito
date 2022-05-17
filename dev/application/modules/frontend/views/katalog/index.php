<?php $this->view('template/frontend/header') ?>

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
                        <li><a href="#about" class="page-scroll">Home</a></li>
                        <li><a href="#about" class="page-scroll">Katalog</a></li>
                        <li><a href="#contact" class="page-scroll">Kontak</a></li>
                        <li><a href="#contact" class="page-scroll">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->

    <div class="main">

        

        <!--promo section start-->
        <section class="promo-section ptb-100" id="about" style="background-color: var(--color-primary);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="section-heading text-center">
                            <h2>Daftar Daftar Theme/Template</h2>
                            <p>
                                <!-- <span style="text-align:center !important;">Ruang Akad</span> -->
                                PILIH DESAIN UNDANGANMU
                                Buat Undangan Pernikahan Anda Tampil Cantik Dan Modern
                                Dengan Desain Undangan Yang Kami Buat Khusus Untuk Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row list-katalog-theme justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="card">
                            <div class="imgBox">
                                <img src="<?= site_url() ?>assets/frontend/img/template/template-01/all-device.png" alt="Thema" class="images-list-katalog">
                            </div>
                            <div class="contentBox">
                                <h3>Template-01</h3>
                                <!-- <h2 class="price">61.<small>98</small> €</h2> -->
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <center>
                                        <a href="<?= site_url() ?>katalog-theme/template-01" target="_blank" class="buy">DEMO</a>
                                    </center>
                                </div>
                                <div class="col-6">
                                    <center>
                                        <a href="#" class="buy">PILIH</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="card">
                            <div class="imgBox">
                                <img src="<?= site_url() ?>assets/frontend/img/template/template-01/all-device.png" alt="Thema" class="images-list-katalog">
                            </div>
                            <div class="contentBox">
                                <h3>Template-01</h3>
                                <!-- <h2 class="price">61.<small>98</small> €</h2> -->
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <center>
                                        <a href="#" class="buy">DEMO</a>
                                    </center>
                                </div>
                                <div class="col-6">
                                    <center>
                                        <a href="#" class="buy">PILIH</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="card">
                            <div class="imgBox">
                                <img src="<?= site_url() ?>assets/frontend/img/template/template-01/all-device.png" alt="Thema" class="images-list-katalog">
                            </div>
                            <div class="contentBox">
                                <h3>Template-01</h3>
                                <!-- <h2 class="price">61.<small>98</small> €</h2> -->
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <center>
                                        <a href="#" class="buy">DEMO</a>
                                    </center>
                                </div>
                                <div class="col-6">
                                    <center>
                                        <a href="#" class="buy">PILIH</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--promo section end-->

<?php $this->view('template/frontend/footer') ?>