<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 01 || Muzex || Museum and Artists HTML Template - shared on themelock.com</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">

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
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

    <style>
        /* The actual timeline (the vertical ruler) */
        .main-timeline-2 {
        position: relative;
        }

        /* The actual timeline (the vertical ruler) */
        .main-timeline-2::after {
        content: "";
        position: absolute;
        width: 3px;
        background-color: #26c6da;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
        }

        /* Container around content */
        .timeline-2 {
        position: relative;
        background-color: inherit;
        width: 50%;
        }

        /* The circles on the timeline */
        .timeline-2::after {
        content: "";
        position: absolute;
        width: 25px;
        height: 25px;
        right: -11px;
        background-color: #26c6da;
        top: 15px;
        border-radius: 50%;
        z-index: 1;
        }

        /* Place the container to the left */
        .left-2 {
        padding: 0px 40px 20px 0px;
        left: 0;
        }

        /* Place the container to the right */
        .right-2 {
        padding: 0px 0px 20px 40px;
        left: 50%;
        }

        /* Add arrows to the left container (pointing right) */
        .left-2::before {
        content: " ";
        position: absolute;
        top: 18px;
        z-index: 1;
        right: 30px;
        border: medium solid white;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent white;
        }

        /* Add arrows to the right container (pointing left) */
        .right-2::before {
        content: " ";
        position: absolute;
        top: 18px;
        z-index: 1;
        left: 30px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
        }

        /* Fix the circle for containers on the right side */
        .right-2::after {
        left: -14px;
        }

        /* Media queries - Responsive timeline on screens less than 600px wide */
        @media screen and (max-width: 600px) {
        /* Place the timelime to the left */
        .main-timeline-2::after {
            left: 31px;
        }

        /* Full-width containers */
        .timeline-2 {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }

        /* Make sure that all arrows are pointing leftwards */
        .timeline-2::before {
            left: 60px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        /* Make sure all circles are at the same spot */
        .left-2::after,
        .right-2::after {
            left: 18px;
        }

        .left-2::before {
            right: auto;
        }

        /* Make all right containers behave like the left ones */
        .right-2 {
            left: 0%;
        }
        }
    </style>


</head>

<body>
    {{-- <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader --> --}}
    <div class="page-wrapper">

        <nav class="main-nav-one stricky">
            <div class="container">
                <div class="inner-container">
                    <div class="logo-box">
                        <a href="index.html">
                            <img src="{{ asset('frontend/assets/images/logo-1-1.png') }}" alt="" width="143">
                        </a>
                        <a href="#" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
                    </div><!-- /.logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class="main-nav__navigation-box">
                            <li class="dropdown">
                                <a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="index-rtl.html">Home RTL</a></li>
                                    <li class="dropdown">
                                        <a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="index.html">Header 01</a></li>
                                            <li><a href="index-2.html">Header 02</a></li>
                                            <li><a href="index-3.html">Header 03</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="about.html">About</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="donate.html">Donate</a></li>
                                    <li><a href="venue.html">Veneu</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="membership.html">Membership</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="collection-grid.html">Collections</a>
                                <ul>
                                    <li><a href="collection-fullwidth.html">Collections Full</a></li>
                                    <li><a href="collection-grid.html">Collections Grid</a></li>
                                    <li><a href="collection-masonary.html">Collections Masonary</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Pages</a>
                                <ul>
                                    <li class="dropdown">
                                        <a href="event-1.html">Events</a>
                                        <ul>
                                            <li><a href="event-1.html">Events 01</a></li>
                                            <li><a href="event-2.html">Events 02</a></li>
                                            <li><a href="event-3.html">Events 03</a></li>
                                            <li><a href="event-details.html">Events Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="donate.html">Donate</a></li>
                                    <li><a href="venue.html">Veneu</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="membership.html">Membership</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="news-standard.html">News</a>
                                <ul>
                                    <li><a href="news-standard.html">News Standard</a></li>
                                    <li><a href="news-grid.html">News Grid</a></li>
                                    <li><a href="news-masonary.html">News Masonary</a></li>
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul><!-- /.main-nav__navigation-box -->
                    </div><!-- /.main-nav__main-navigation -->
                    <div class="main-nav__right">
                        <a href="#" class="search-popup__toggler"><i class="muzex-icon-search"></i></a>
                        <a class="sidemenu-icon side-content__toggler" href="#"><i class="muzex-icon-menu"></i></a>
                    </div><!-- /.main-nav__right -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </nav><!-- /.main-nav-one -->


        <!-- Banner Section -->
        <section class="banner-section">
            <div class="container py-5">
                <div class="main-timeline-2">
                    @php($i = 1)
                    @foreach ($categories as $category)
                        <?php
                            $batik = collect($category->batik_most);
                        ?>
                        @if($i % 2 == 1)
                        <div class="timeline-2 left-2">
                        @else
                        <div class="timeline-2 right-2">
                        @endif
                            <div class="card">
                            <img src="{{ asset('storage/' . $category->batik_most[0]->batik_picture) }}" class="card-img-top"
                                alt="Responsive image">
                            <div class="card-body p-4">
                                <a href="#link"><h4 class="fw-bold mb-4">{{ $category->category_name }}</h4></a>
                                <p class="mb-0">{{ $batik[0]->batik_picture }}</p>
                            </div>
                            </div>
                        </div>
                        @php($i++)
                    @endforeach
                </div>
            </div>
        </section>
        <!--End Banner Section -->


        <section class="collection-one" style="background-image: url(frontend/assets/images/shapes/collection-bg-1-1.jpg);">
            <div class="container">
                <div class="collection-one__top">
                    <div class="block-title">
                        <p>Gallery</p>
                        <h3>Explore The Collection</h3>
                    </div><!-- /.block-title -->
                    <div class="more-post__block">
                        <a class="more-post__link" href="#link">
                            View More
                            <span class="curved-circle">View More &nbsp;&emsp;View More &nbsp;&emsp;View More View More View More &nbsp;&emsp;View &nbsp;&emsp; </span>
                            <!-- /.curved-circle -->
                        </a>
                    </div><!-- /.more-post__block -->
                </div><!-- /.collection-one__top -->
            </div><!-- /.container -->

            <div class="collection-one__carousel thm__owl-carousel owl-theme owl-carousel" data-options='{
                    "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": true, "smartSpeed": 700, "items": 3, "margin": 100, "dots": false, "nav": false, "responsive": {
                        "0": { "items": 1, "margin": 0 },
                        "625": { "items": 2, "margin": 30 },
                        "767": { "items": 2, "margin": 30 },
                        "991": { "items": 2, "margin": 30},  "1199": { "margin": 30, "items": 3}, "1366": { "margin": 50, "items": 3 }, "1440": { "margin": 50, "items": 3 }, "1750": { "items": 3, "margin": 70 }, "1920": { "items": 3, "margin": 100 } }
                }'>

                @foreach ($categories as $category)
                    @foreach ($category->batik as $batik)
                        <div class="item">
                            <div class="collection-one__single">
                                <img src="{{ asset('storage/' . $batik->batik_picture) }}" alt="{{ $batik->batik_name }} Picture">
                                <div class="collection-one__content">
                                    <h3><a href="#link">{{ $batik->batik_name }}</a></h3>
                                </div><!-- /.collection-one__content -->
                            </div><!-- /.collection-one__single -->
                        </div><!-- /.item -->
                    @endforeach
                @endforeach

            </div><!-- /.collection-one__carousel thm__owl-carousel owl-theme -->
        </section><!-- /.collection-one -->


        <section class="blog-one">
            <div class="container">
                <div class="blog-one__top">
                    <div class="block-title">
                        <p>Muzex News</p>
                        <h3>Latest From Our News</h3>
                    </div><!-- /.block-title -->
                    <div class="more-post__block">
                        <a class="more-post__link" href="#">
                            All Post
                            <span class="curved-circle">View More &nbsp;&emsp;View More &nbsp;&emsp;View More View More View More &nbsp;&emsp;View &nbsp;&emsp; </span>
                            <!-- /.curved-circle -->
                        </a>
                    </div><!-- /.more-post__block -->
                </div><!-- /.blog-one__top -->
                <div class="row">
                    @foreach ($last_posts as $last_post)
                        <div class="col-lg-4">
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <img src="{{ asset('storage/' . $last_post->batik_picture) }}" alt="">
                                    <div class="blog-one__date">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ Carbon\Carbon::parse($last_post->created_at)->diffForHumans() }}
                                    </div><!-- /.blog-one__date -->
                                </div><!-- /.blog-one__image -->
                                <div class="blog-one__content">
                                    <h3><a href="#link">{{ $last_post->batik_name }}</a></h3>
                                </div><!-- /.blog-one__content -->
                            </div><!-- /.blog-one__single -->
                        </div><!-- /.col-lg-4 -->
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one -->

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

        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget footer-widget__about">
                                <p>Welcome to the World’s Leading Museum of Modern Art. It in- cludes works of art created during the period stretching. from about 1860 to the 1970s.</p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-2">
                            <div class="footer-widget footer-widget__links">
                                <h3 class="footer-widget__title">Quick Link</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Event</a>
                                    </li>
                                    <li>
                                        <a href="#">Photo Gallery</a>
                                    </li>
                                    <li>
                                        <a href="#">Latest Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul><!-- /.footer-widget__links-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-3">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                                <p>Muszex Museums 32 Quincy <br>
                                    Street Cambridge, MA</p>
                                <p><a href="tel:(617)-495-9400">(617) 495-9400</a></p>
                                <p><a href="mailto:example@muzex.com">example@muzex.com</a></p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3">
                            <div class="footer-widget footer-widget__open-hrs">
                                <h3 class="footer-widget__title">Open Hours</h3><!-- /.footer-widget__title -->
                                <p>Daily: 9.30 AM–6.00 PM <br>
                                    Sunday & Holidays: Closed</p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container">
                        <p>&copy; Copyright 2020 Muzex. All Rights Reserved</p>
                        <a href="index.html" class="site-footer__bottom-logo">
                            <img src="frontend/assets/images/logo-footer-1.png" alt="">
                        </a>
                        <div class="site-footer__bottom-links">
                            <a href="#">Terms & conditions</a>
                            <a href="#">Privacy policy & Terms of use</a>
                        </div><!-- /.site-footer__bottom-links -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
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
</body>

</html>
