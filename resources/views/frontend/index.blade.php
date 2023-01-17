@extends('frontend.frontend_master')

@section('frontend')

<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Timeline : {{ $city->city_name }}</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

    <!-- Banner Section -->
    <section class="banner-section">
        <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
            <div class="cd-h-timeline__container container">
              <div class="cd-h-timeline__dates">
                <div class="cd-h-timeline__line">
                  <ol>
                    @php($i = 1)
                    @foreach ($categories as $category)
                        <li><a href="#0" data-date="{{ $i++ }}/01/2022" class="cd-h-timeline__date {{ $i == 2 ? 'cd-h-timeline__date--selected' : '' }}">{{ $category->category_name }}</a></li>
                    @endforeach

                  </ol>

                  <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                </div> <!-- .cd-h-timeline__line -->
              </div> <!-- .cd-h-timeline__dates -->

              <ul>
                <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
                <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a></li>
              </ul>
            </div> <!-- .cd-h-timeline__container -->

            <div class="cd-h-timeline__events">
              <ol>
                @php($i = 1)
                @foreach ($categories as $category)
                <?php
                    $batik = $category->batik_most->first();
                    $i++;
                ?>
                <li class="cd-h-timeline__event {{ $i == 2 ? 'cd-h-timeline__event--selected' : '' }} text-component">
                  <div class="cd-h-timeline__event-content container">
                    <a href="{{ route('frontend.category.index', $category->category_slug) }}"><h2 class="cd-h-timeline__event-title">{{ $category->category_name }}</h2></a>
                    @if ($batik)
                        <img src="{{ asset('storage/' . $batik->batik_picture) }}" alt="{{ $category->category_name }} Picture">
                    @else
                        <h3 class="block-title-one text-center">Data Batik Masih Kosong</h3>
                    @endif
                  </div>
                </li>
                @endforeach
              </ol>
            </div> <!-- .cd-h-timeline__events -->

          </section>
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
                                <h3><a href="{{ route('frontend.batik.show', $batik->batik_slug) }}">{{ $batik->batik_name }}</a></h3>
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
                                <h3><a href="{{ route('frontend.batik.show', $batik->batik_slug) }}">{{ $last_post->batik_name }}</a></h3>
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one -->
@endsection
