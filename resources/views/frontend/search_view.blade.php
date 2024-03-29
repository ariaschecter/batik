@extends('frontend.frontend_master')

@section('frontend')@php
$setting = \App\Models\Setting::first();
@endphp
<section class="page-header" style="background-image: url({{ asset($setting->setting_banner) }});">
    <div class="container">
        <h2>Search Batik</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="collection-grid">
    <div class="container">
        <div class="collection-grid__top">
            <div class="block-title-two text-center">
                <p>Batik</p>
                <h3>Explore <br> the Batik</h3>
            </div><!-- /.block-title-two -->
        </div><!-- /.collection-grid__top -->
        <div class="row high-gutter filter-layout">
            @foreach ($cities as $city)
                <div class="col-lg-4 col-md-6 filter-item">
                    <div class="collection-grid__single">
                        <div class="collection-grid__image">
                            <img src="{{ asset($city->city_picture) }}" alt="{{ $city->city_name }} Picture">
                        </div><!-- /.collection-grid__image -->
                        <div class="collection-grid__content">
                            <h3><a href="{{ route('frontend.city.show', $city->city_slug) }}">{{ $city->city_name }}</a></h3>
                        </div><!-- /.collection-grid__content -->
                    </div><!-- /.collection-grid__single -->
                </div><!-- /.col-lg-4 -->
            @endforeach

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.collection-grid -->
@endsection
