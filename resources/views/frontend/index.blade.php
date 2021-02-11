<!doctype html>
<html class="no-js')}}" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tracking Covid</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('frontend/assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html">
                                <h1 style="color: white">Tracking Covid</h1>
                            </a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="listing.html">Catagories</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="directory_details.html">listing Details</a></li>
                                            <li><a href="listing.html">Catagories</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="#" class="mr-40"><i class="ti-user"></i> Log in</a>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Area Start-->
        <div class="slider-area hero-bg1 hero-overly">
            <div class="single-slider hero-overly  slider-height1 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <!-- Hero Caption -->
                            <div class="hero__caption pt-100">
                                <h1>Tracking Covid</h1>
                                <p>Tetap Di Rumah, Selalu Gunakan Masker</p>
                            </div>
                            <!--Hero form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Area End-->
        <!--? Popular Directory End -->
        <!--? Want To work 01-->
        <section class="wantToWork-area">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-7 col-lg-9 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Indonesia</h2>
                                <p>Data Statistik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Our Services Start -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <br>
                                <h3 style="text-align: center">{{ $positif }}</h3>

                                <p style="text-align: center"><b>Positif</b></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <br>
                                <h3 style="text-align: center">{{ $sembuh }}</h3>

                                <p style="text-align: center"><b>Sembuh</b></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <br>
                                <h3 style="text-align: center">{{ $meninggal }}</h3>

                                <p style="text-align: center"><b>Meninggal</b></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3 style="text-align: center">150</h3>

                                <p style="text-align: center">New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <br>
                <br>
                <br>
                <!-- Our Services End -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Positif</th>
                                <th scope="col">Sembuh</th>
                                <th scope="col">Meninggal</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach ($show as $data)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->provinsi }}</td>
                                    <td>{{ $data->positif }}</td>
                                    <td>{{ $data->sembuh }}</td>
                                    <td>{{ $data->meninggal }}</td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!--? Popular Directory Start -->
                <div class="popular-directorya-area section-padding40 border-bottom fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle text-center mb-80">
                                    <h2>New Directory</h2>
                                    <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="directory-active">
                            <!-- Single -->
                            <div class="properties pb-20">
                                <div class="properties__card">
                                    <div class="properties__img overlay1">
                                        <a href="#"><img
                                                src="{{ asset('frontend/assets/img/gallery/newDirectory1.png') }}"
                                                alt=""></a>
                                        <div class="img-text">
                                            <span>$$$</span>
                                            <span>Closed</span>
                                        </div>
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/gallery/categori_icon1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="properties__caption">
                                        <h3><a href="#">Urban areas</a></h3>
                                        <p>Let's uncover the best places to eat, drink</p>
                                    </div>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <img src="{{ asset('frontend/assets/img/gallery/restaurant-icon.png') }}"
                                                alt="">
                                            <h3>Food & Restaurant</h3>
                                        </div>
                                        <div class="heart">
                                            <img src="{{ asset('frontend/assets/img/gallery/heart1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="properties pb-20">
                                <div class="properties__card">
                                    <div class="properties__img overlay1">
                                        <a href="#"><img
                                                src="{{ asset('frontend/assets/img/gallery/newDirectory2.png') }}"
                                                alt=""></a>
                                        <div class="img-text">
                                            <span>$$$</span>
                                            <span>Closed</span>
                                        </div>
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/gallery/categori_icon1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="properties__caption">
                                        <h3><a href="#">Urban areas</a></h3>
                                        <p>Let's uncover the best places to eat, drink</p>
                                    </div>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <img src="{{ asset('frontend/assets/img/gallery/restaurant-icon.png') }}"
                                                alt="">
                                            <h3>Food & Restaurant</h3>
                                        </div>
                                        <div class="heart">
                                            <img src="{{ asset('frontend/assets/img/gallery/heart1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="properties pb-20">
                                <div class="properties__card">
                                    <div class="properties__img overlay1">
                                        <a href="#"><img
                                                src="{{ asset('frontend/assets/img/gallery/newDirectory3.png') }}"
                                                alt=""></a>
                                        <div class="img-text">
                                            <span>$$$</span>
                                            <span>Closed</span>
                                        </div>
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/gallery/categori_icon1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="properties__caption">
                                        <h3><a href="#">Urban areas</a></h3>
                                        <p>Let's uncover the best places to eat, drink</p>
                                    </div>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <img src="{{ asset('frontend/assets/img/gallery/restaurant-icon.png') }}"
                                                alt="">
                                            <h3>Food & Restaurant</h3>
                                        </div>
                                        <div class="heart">
                                            <img src="{{ asset('frontend/assets/img/gallery/heart1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="properties pb-20">
                                <div class="properties__card">
                                    <div class="properties__img overlay1">
                                        <a href="#"><img
                                                src="{{ asset('frontend/assets/img/gallery/properties1.png') }}"
                                                alt=""></a>
                                        <div class="img-text">
                                            <span>$$$</span>
                                            <span>Closed</span>
                                        </div>
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/gallery/categori_icon1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="properties__caption">
                                        <h3><a href="#">Urban areas</a></h3>
                                        <p>Let's uncover the best places to eat, drink</p>
                                    </div>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <img src="{{ asset('frontend/assets/img/gallery/restaurant-icon.png') }}"
                                                alt="">
                                            <h3>Food & Restaurant</h3>
                                        </div>
                                        <div class="heart">
                                            <img src="{{ asset('frontend/assets/img/gallery/heart1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Popular Directory End -->
                <!--? Popular Locations Start 01-->
                <div class="popular-location border-bottom section-padding40">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle text-center mb-80">
                                    <h2>News & Updates</h2>
                                    <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="single-location mb-30">
                                    <div class="location-img">
                                        <img src="{{ asset('frontend/assets/img/gallery/home-blog1.png') }}" alt="">
                                    </div>
                                    <div class="location-details">
                                        <a href="#" class="location-btn">Tips</a>
                                        <ul>
                                            <li>12 March I by Alan</li>
                                        </ul>
                                        <p><a href="blog_details.html">The Best SPA Salons For Your Relaxation</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="single-location mb-30">
                                    <div class="location-img">
                                        <img src="{{ asset('frontend/assets/img/gallery/home-blog2.png') }}" alt="">
                                    </div>
                                    <div class="location-details">
                                        <a href="#" class="location-btn">Tips</a>
                                        <ul>
                                            <li>12 March I by Alan</li>
                                        </ul>
                                        <p><a href="blog_details.html">The Best SPA Salons For Your Relaxation</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Popular Locations End -->
                <!--? Want To work 02-->
                <section class="wantToWork-area">
                    <div class="container">
                        <div class="wants-wrapper w-padding2">
                            <div class="row justify-content-between">
                                <div class="col-xl-8 col-lg-8 col-md-7">
                                    <div class="wantToWork-caption wantToWork-caption2">
                                        <img src="{{ asset('frontend/assets/img/logo/logo2_footer.png') }}" alt=""
                                            class="mb-20">
                                        <p>Users and submit their own items. You can create different packages and by
                                            connecting with your
                                            PayPal or Stripe account charge users for registration to your directory
                                            portal.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-5">
                                    <div class="footer-social f-right sm-left">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Want To work End -->
                <!--? Want To work 01-->
                <section class="wantToWork-area">
                    <div class="container">
                        <div class="wants-wrapper">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-7 col-lg-9 col-md-8">
                                    <div class="wantToWork-caption wantToWork-caption2">
                                        <div class="main-menu2">
                                            <nav>
                                                <ul>
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="explore.html">Explore</a></li>
                                                    <li><a href="pages.html">Pages</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Want To work End -->
    </main>
    <footer>
        <div class="footer-wrapper pt-30">
            <!-- footer-bottom -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-xl-10 col-lg-9 ">
                                <div class="footer-copy-right">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());

                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('frontend/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('frontend/assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('frontend/assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('frontend/assets/js/contact.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>



</body>

</html>
