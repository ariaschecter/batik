@extends('frontend.frontend_master')

@section('frontend')
@php
    $setting = \App\Models\Setting::first();
@endphp
<section class="page-header" style="background-image: url({{ asset($setting->setting_banner) }});">
    <div class="container">
        <h2>{{ $batik->batik_name }}</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="blog-one blog-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details__main">
                    <div class="blog-details__image">
                        <img src="{{ asset($batik->batik_picture) }}" class="img-fluid" alt="">
                    </div><!-- /.blog-details__image -->

                    <div>{!! $batik->batik_description !!}</div>
                </div><!-- /.blog-details__main -->

            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar__single">
                        <h3 class="sidebar__title">Kategori</h3>
                        <ul class="list-unstyled sidebar__cat-list">
                            <li><a href="{{ route('frontend.category.index', $batik->category->category_slug) }}">{{ $batik->category->category_name }}</a></li>
                        </ul><!-- /.list-unstyled sidebar__cat-list -->
                    </div><!-- /.sidebar__single -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one blog-grid-page -->
@endsection
