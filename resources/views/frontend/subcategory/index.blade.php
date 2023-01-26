@extends('frontend.frontend_master')

@section('frontend')
@php
    $setting = \App\Models\Setting::first();
@endphp
<section class="page-header" style="background-image: url({{ asset('storage/' . $setting->setting_banner) }});">
    <div class="container">
        <h2>Sub Category : {{ $subcategory->sub_name }}</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="collection-grid">
    <div class="container">
        <div class="collection-grid__top">
            <div class="block-title-two text-center">
                <p>Batik</p>
                <h3>Eksplorasi <br> Sub Kategori</h3>
            </div><!-- /.block-title-two -->
        </div><!-- /.collection-grid__top -->
        <div class="row high-gutter filter-layout">
            @foreach ($subcategory->batik as $batik)
                <div class="col-lg-4 col-md-6 filter-item">
                    <div class="collection-grid__single">
                        <div class="collection-grid__image">
                            <img src="{{ asset('storage/' . $batik->batik_picture) }}" alt="{{ $batik->batik_name }} Picture">
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
