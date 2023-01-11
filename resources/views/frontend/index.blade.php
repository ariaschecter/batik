@extends('frontend.frontend_master')

@section('frontend')

<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Timeline : {{ $city->city_name }}</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

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
                            <a href="{{ route('frontend.category.index', [$category->category_slug]) }}"><h4 class="fw-bold mb-4">{{ $category->category_name }}</h4></a>
                            {{-- <p class="mb-0">{{ $batik[0]->batik_picture }}</p> --}}
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
@endsection