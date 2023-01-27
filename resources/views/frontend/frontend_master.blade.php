@php
    $setting = \App\Models\Setting::first();
@endphp
<!DOCTYPE html>
<html lang="en" dir="ltr" class="js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | {{ $setting->setting_title }}</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/favicon/icon.jpg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/favicon/icon.jpg') }}    ">
    <link rel="manifest" href="{{ asset('frontend/assets/images/favicon/icon.jpg') }}">

    <!-- Fonts URL -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700%7CPlayfair+Display:400,500,600,700,800,900%7CWork+Sans:300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/muzex-icons.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/timeline/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

</head>

<body>
    {{-- <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader --> --}}
    <div class="page-wrapper">

        @include('frontend.body.topbar')

        @yield('frontend')

        {{-- <section class="brand-one">
            <div class="container">
                <div class="brand-one__carousel thm__owl-carousel owl-carousel owl-theme" data-options='{
            "items": 5, "margin": 150, "smartSpeed": 700, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": false, "nav": false, "dots": false, "responsive": {"0": { "margin": 20, "items": 2 }, "575": { "margin": 30, "items": 3 },"767": { "margin": 40, "items": 4 },   "991": { "margin": 70, "items": 4 }, "1199": { "margin": 150, "items": 5 } } }'>
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="frontend/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.item -->
                </div><!-- /.brand-one__carousel thm__owl-carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.brand-one --> --}}

        @include('frontend.body.footer')
    </div><!-- /.page-wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <div class="side-content__block">
        <div class="side-content__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-content__block-overlay -->
        <div class="side-content__block-inner ">
            <a href="index.html">
                <img src="frontend/assets/images/logo-1-1.png" alt="" width="143">
            </a>
            <div class="side-content__block-about">
                <h3 class="side-content__block__title">About Us</h3><!-- /.side-content__block__title -->
                <p class="side-content__block-about__text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and </p><!-- /.side-content__block-about__text -->
                <a href="#" class="thm-btn side-content__block-about__btn">Get Consultation</a>
            </div><!-- /.side-content__block-about -->
            <hr class="side-content__block-line" />
            <div class="side-content__block-contact">
                <h3 class="side-content__block__title">Contact Us</h3><!-- /.side-content__block__title -->
                <ul class="side-content__block-contact__list">
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-map-marker"></i>
                        Rock St 12, Newyork City, USA
                    </li><!-- /.side-content__block-contact__list-item -->
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-phone"></i>
                        <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
                    </li><!-- /.side-content__block-contact__list-item -->
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:example@mail.com">example@mail.com</a>
                    </li><!-- /.side-content__block-contact__list-item -->
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-clock"></i>
                        Week Days: 09.00 to 18.00 Sunday: Closed
                    </li><!-- /.side-content__block-contact__list-item -->
                </ul><!-- /.side-content__block-contact__list -->
            </div><!-- /.side-content__block-contact -->
            <p class="side-content__block__text site-footer__copy-text"><a href="#">Muzex</a> <i class="fa fa-copyright"></i> 2020 All Right Reserved</p>
        </div><!-- /.side-content__block-inner -->
    </div><!-- /.side-content__block -->

    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            <!-- /.fa fa-close --></a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">

            <a href="index.html" class="side-menu__logo"><img src="frontend/assets/images/logo-light-1-1.png" alt="" width="143"></a>
            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <p class="side-menu__block__copy">(c) 2020 <a href="#">Muzex</a> - All rights reserved.</p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Template JS -->

    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.circleType.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
    <script src="{{ asset('frontend/timeline/js/util.js') }}"></script> <!-- util functions included in the CodyHouse framework -->
    <script src="{{ asset('frontend/timeline/js/swipe-content.js') }}"></script> <!-- A Vanilla JavaScript plugin to detect touch interactions -->
    <script src="{{ asset('frontend/timeline/js/main.js') }}"></script>
</body>

</html>
