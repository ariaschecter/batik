@extends('frontend.frontend_master')

@section('frontend')
@php
    $setting = \App\Models\Setting::first();
@endphp
<section class="page-header" style="background-image: url({{ asset($setting->setting_banner) }});">
    <div class="container">
        <h2>Semua Batik</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

{{-- <form action="{{ route('frontend.batik.index') }}" method="get">
<input type="text" name="search" class="form-control">
<button type="submit" class="form-control">Search</button>
</form> --}}

<section class="collection-grid">
    <div class="container">
        <div class="collection-grid__top">
            <div class="block-title-two text-center">
                <p>Galeri</p>
                <h3>Explorasi <br> Batik</h3>
            </div><!-- /.block-title-two -->

            <ul class="collection-filter post-filter list-unstyled">
                <li data-filter=".filter-item" class="active"><span>Semua Batik</span></li>
                @foreach ($cities as $city)
                    <li data-filter=".{{ $city->city_slug }}"><span>{{ $city->city_name }}</span></li>
                @endforeach
            </ul><!-- /.collection-filter list-unstyled -->
        </div><!-- /.collection-grid__top -->
        <div class="row high-gutter filter-layout">
                @foreach ($batiks as $batik)
                <div class="col-lg-4 col-md-6 filter-item {{ $batik->category->city->city_slug }}">
                    <div class="collection-grid__single">
                        <div class="collection-grid__image">
                            <img src="{{ asset($batik->batik_picture) }}" alt="{{ $batik->batik_name }} Picture">
                        </div><!-- /.collection-grid__image -->
                        <div class="collection-grid__content">
                            <h3><a href="{{ route('frontend.batik.show', $batik->batik_slug) }}">{{ $batik->batik_name }}</a></h3>
                        </div><!-- /.collection-grid__content -->
                    </div><!-- /.collection-grid__single -->
                </div><!-- /.col-lg-4 -->
            @endforeach

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.collection-grid -->
@endsection
