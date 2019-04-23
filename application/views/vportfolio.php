<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- css -->
        <?= $css ?>

        <!-- Title -->
        <title>My Portfolio</title>

<body>
            <!-- Preloader -->
            <div id="preloader">
                <div class="loader"></div>
            </div>
            <!-- /Preloader -->

            <!-- Top Search Form Area -->
            <div class="top-search-area">
                <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <!-- Close -->
                                <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                                <!-- Form -->
                                <form action="index.html" method="post">
                                    <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Area Start -->
                <header class="header-area">
                    <!-- Main Header Start -->
                    <div class="main-header-area">
                        <div class="classy-nav-container breakpoint-off">
                            <div class="container">
                                <!-- Classy Menu -->
                                <nav class="classy-navbar justify-content-between" id="alimeNav">

                                    <!-- Logo -->
                                    <a class="nav-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/') ?>./img/core-img/logo.png" alt=""></a>

                                    <!-- Navbar Toggler -->
                                    <div class="classy-navbar-toggler">
                                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                                    </div>

                                    <!-- Menu -->
                                    <div class="classy-menu">
                                        <!-- Menu Close Button -->
                                        <div class="classycloseIcon">
                                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                        </div>
                                        <!-- Nav Start -->
                                        <div class="classynav">
                                            <ul id="nav">
                                                <li class="active"><a href="">Home</a></li>
                                                <li><a href="#">Pages</a>
                                                    <ul class="dropdown">
                                                        <li><a href="">- Home</a></li>
                                                        <li><a href="portfolio/about">- About</a></li>
                                                        <li><a href="portfolio/gallery">- Gallery</a></li>
                                                        <li><a href="portfolio/contact">- Contact</a></li>
                                                        <li><a href="#">- Dropdown</a>
                                                            <ul class="dropdown">
                                                                <li><a href="#">- Dropdown Item</a></li>
                                                                <li><a href="#">- Dropdown Item</a></li>
                                                                <li><a href="#">- Dropdown Item</a></li>
                                                                <li><a href="#">- Dropdown Item</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="portfolio/about">About</a></li>
                                                <li><a href="portfolio/gallery">Gallery</a></li>
                                                <li><a href="portfolio/contact">Contact</a></li>
                                                <li><a href="login">Login</a></li>
                                            </ul>

                                            <!-- Search Icon -->
                                            <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                                        </div>
                                        <!-- Nav End -->
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?= base_url('assets/') ?>img/bg-img/asrul.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms" class="fontasrul">Haloo... <br>Saya <?= $nama ?></h2>
                                <p data-animation="bounceInDown" data-delay="500ms"><?= $deskripsi ?></p>
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                    <a href="login" class="btn alime-btn mb-3 mb-sm-0 mr-4">Log in</a>
                                    <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com"><?= $ig ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?= base_url('assets/') ?>img/bg-img/asrul.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms" style="color: #b0b012;">Haloo... <br>Saya <?= $nama ?></h2>
                                <p data-animation="bounceInUp" data-delay="500ms"><?= $deskripsi ?></p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="login" class="btn alime-btn mb-3 mb-sm-0 mr-4">Log in</a>
                                    <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com"><?= $ig ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter=".human">Human</button>
                            <button class="btn" data-filter=".nature">Nature</button>
                            <button class="btn" data-filter=".country">Country</button>
                            <button class="btn" data-filter=".video">Video</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- single gallery -->
            <?= $foto ?>

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    <!-- Follow Area Start -->
    <section class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <p><?= $ig ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?= base_url('assets/') ?>img/bg-img/11.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?= base_url('assets/') ?>img/bg-img/12.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?= base_url('assets/') ?>img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?= base_url('assets/') ?>img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?= base_url('assets/') ?>img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?= base_url('assets/') ?>img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Follow Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="#"><img src="<?= base_url('assets/') ?>img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-twitter-alt" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer Area End -->

    <?= $js ?>

</body>

</html>
