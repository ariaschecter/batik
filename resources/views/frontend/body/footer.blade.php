<footer class="site-footer">
    <div class="site-footer__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget footer-widget__about">
                        <p>{{ $setting->setting_description_footer }}</p>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="footer-widget footer-widget__links">
                        <h3 class="footer-widget__title">Quick Link</h3><!-- /.footer-widget__title -->
                        <ul class="footer-widget__links-list list-unstyled">
                            <li>
                                <a href="{{ route('frontend.city.index') }}">City</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.batik.index') }}">Batik</a>
                            </li>
                        </ul><!-- /.footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-2 -->
                <div class="col-lg-4">
                    <div class="footer-widget footer-widget__contact">
                        <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                        <p>{{ $setting->setting_address }}</p>
                        <p><a href="tel:{{ $setting->setting_no_phone }}">{{ $setting->setting_no_phone }}</a></p>
                        <p><a href="mailto:{{ $setting->setting_email }}">{{ $setting->setting_email }}</a></p>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->
                {{-- <div class="col-lg-3">
                    <div class="footer-widget footer-widget__open-hrs">
                        <h3 class="footer-widget__title">Open Hours</h3><!-- /.footer-widget__title -->
                        <p>Daily: 9.30 AM–6.00 PM <br>
                            Sunday & Holidays: Closed</p>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 --> --}}
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__upper -->
    <div class="site-footer__bottom">
        <div class="container">
            <div class="inner-container">
                <p>&copy; Copyright {{ date('Y') }} {{ $setting->setting_title }}. All Rights Reserved</p>
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__bottom -->
</footer><!-- /.site-footer -->
