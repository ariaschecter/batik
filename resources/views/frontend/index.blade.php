@extends('frontend.frontend_master')

@section('frontend')
@php
    $setting = \App\Models\Setting::first();
@endphp
    <div class="container">
        <h2 class="text-center">Daur Hidup Batik Khas {{ $city->city_name }}</h2>
    </div><!-- /.container -->

    <!-- Banner Section -->
    <section class="banner-section">
        <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
            <div class="cd-h-timeline__container container">
              <div class="cd-h-timeline__dates">
                <div class="cd-h-timeline__line">
                  <ol>
                    @php($i = 1)
                    @foreach ($categories as $category)
                        <li><a href="#0" data-date="{{ $i++ }}/01/2022" class="cd-h-timeline__date {{ $i == 2 ? 'cd-h-timeline__date--selected' : '' }}" style="font-family:'Playfair Display'">{{ $category->category_name }}</a></li>
                    @endforeach

                  </ol>

                  <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                </div> <!-- .cd-h-timeline__line -->
              </div> <!-- .cd-h-timeline__dates -->

              <ul>
                <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive" style="font-family:'Playfair Display'">Sebelum</a></li>
                <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next" style="font-family:'Playfair Display'">Sesudah</a></li>
              </ul>
            </div> <!-- .cd-h-timeline__container -->

            @include('frontend.components.timelineCity')

          </section>
        </section>
    <!--End Banner Section -->


    <section class="collection-one" style="background-image: url(frontend/assets/images/shapes/collection-bg-1-1.jpg);">
        <div class="container">
            <div class="collection-one__top">
                <div class="block-title">
                    <p>Galeri</p>
                    <h3>Eksplorasi Koleksi Batik</h3>
                </div><!-- /.block-title -->
                <div class="more-post__block">
                    <a class="more-post__link" href="{{ route('frontend.batik.index') }}">
                        Lainnya
                        <span class="curved-circle">Lainnya &nbsp;&emsp;Lainnya &nbsp;&emsp;Lainnya Lainnya Lainnya &nbsp;&emsp; Lainnya &nbsp;&emsp; Lainnya</span>
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
                        <div class="collection-one__single" style="width:100%; max-height:217px; overflow: hidden;">
                            <img src="{{ asset($batik->batik_picture) }}" alt="{{ $batik->batik_name }} Picture">
                            <div class="collection-one__content">
                                <h3><a href="{{ route('frontend.batik.show', $batik->batik_slug) }}">{{ $batik->batik_name }}</a></h3>
                            </div><!-- /.collection-one__content -->
                        </div><!-- /.collection-one__single -->
                    </div><!-- /.item -->
                @endforeach
            @endforeach

        </div><!-- /.collection-one__carousel thm__owl-carousel owl-theme -->
    </section><!-- /.collection-one -->


    <section class="team-one">
        <div class="container">
            <div class="block-title-two text-center">
                <h3>Pengembang</h3>
            </div><!-- /.block-title-two -->
            <div class="row">
                @foreach ($teams as $team)
                <div class="col-lg-4">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{ asset($team->team_picture) }}" alt="">
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h3>{{ $team->team_name }}</h3>
                            <p>{{ $team->team_positition }}</p>
                        </div><!-- /.team-one__content -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-4 -->
                @endforeach

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-one -->



    <section class="brand-one">
        <div class="container">
            <div class="brand-one__carousel thm__owl-carousel owl-carousel owl-theme" data-options='{"items": 5, "margin": 150, "smartSpeed": 700, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": false, "nav": false, "dots": false, "responsive": {"0": { "margin": 20, "items": 2 }, "575": { "margin": 30, "items": 3 },"767": { "margin": 40, "items": 4 },   "991": { "margin": 70, "items": 4 }, "1199": { "margin": 150, "items": 5 } } }'>
                @foreach ($brands as $brand)
                <div class="item">
                    <img src="{{ asset($brand->brand_picture) }}" alt="Brand {{ $brand->brand_name }}">
                </div><!-- /.item -->
                @endforeach

            </div><!-- /.brand-one__carousel thm__owl-carousel owl-carousel owl-theme -->
        </div><!-- /.container -->
    </section><!-- /.blog-one -->
@endsection
