@extends('frontend.frontend_master')

@section('frontend')
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>City : {{ $city->city_name }}</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="collection-grid">
    <div class="container">
        <div class="collection-grid__top">
            <div class="block-title-two text-center">
                <p>Gallery</p>
                <h3>Explore <br> the City</h3>
            </div><!-- /.block-title-two -->

            <ul class="collection-filter post-filter list-unstyled">
                <li data-filter=".filter-item" class="active"><span>All Batik</span></li>
                @foreach ($city->category as $category)
                    <li data-filter=".{{ $category->category_slug }}"><span>{{ $category->category_name }}</span></li>
                @endforeach

            </ul><!-- /.collection-filter list-unstyled -->
        </div><!-- /.collection-grid__top -->
        <div class="row high-gutter filter-layout">
            @foreach ($city->category as $category)
                @foreach ($category->batik as $batik)
                <div class="col-lg-4 col-md-6 filter-item {{ $category->category_slug }}">
                        <div class="collection-grid__single">
                            <div class="collection-grid__image">
                                <img src="{{ asset('storage/' . $batik->batik_picture) }}" alt="{{ $batik->batik_name }} Picture">
                                @if ($batik->sub_category)
                                <div class="blog-one__date">
                                    <a href="{{ route('frontend.subcategory.index', $batik->sub_category->sub_slug) }}">{{ $batik->sub_category->sub_name }}</a>
                                </div><!-- /.blog-one__date -->
                                @endif
                            </div><!-- /.collection-grid__image -->
                            <div class="collection-grid__content">
                                <h3><a href="{{ route('frontend.batik.show', $batik->batik_slug) }}">{{ $batik->batik_name }}</a></h3>
                            </div><!-- /.collection-grid__content -->
                        </div><!-- /.collection-grid__single -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            @endforeach

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.collection-grid -->
@endsection
