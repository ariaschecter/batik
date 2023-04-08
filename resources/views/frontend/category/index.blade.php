@extends('frontend.frontend_master')

@section('frontend')
@php
    $setting = \App\Models\Setting::first();
@endphp

<div class="container">
    <h2 class="text-center">Daur Hidup Batik Khas {{ $category->city->city_name }}</h2>
</div><!-- /.container -->

<!-- Banner Section -->
<section class="banner-section">
    <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
        <div class="cd-h-timeline__container container">
          <div class="cd-h-timeline__dates">
            <div class="cd-h-timeline__line">
              <ol>
                @foreach ($categories as $key => $item)
                    <li><a href="#0" data-date="{{ $key }}/01/2022" class="cd-h-timeline__date {{ $item->id == $category->id ? 'cd-h-timeline__date--selected' : '' }}" style="font-family:'Playfair Display'">{{ $item->category_name }}</a></li>
                @endforeach

              </ol>

              <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
            </div> <!-- .cd-h-timeline__line -->
          </div> <!-- .cd-h-timeline__dates -->

          {{-- <ul>
            <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive" style="font-family:'Playfair Display'">Sebelum</a></li>
            <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next" style="font-family:'Playfair Display'">Sesudah</a></li>
          </ul> --}}
        </div> <!-- .cd-h-timeline__container -->

        @include('frontend.components.timelineEmpty')

      </section>
    </section>
<!--End Banner Section -->


<section class="page-header" style="background-image: url({{ asset($setting->setting_banner) }});">
    <div class="container">
        <h2>Category : {{ $category->category_name }}</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="collection-grid">
    <div class="container">
        <div class="collection-grid__top">
            <div class="block-title-two text-center">
                <p>Galeri</p>
                <h3>Eksplorasi <br> Kategori</h3>
            </div><!-- /.block-title-two -->

            <ul class="collection-filter post-filter list-unstyled">
                <li data-filter=".filter-item" class="active"><span>Semua Batik</span></li>
                @foreach ($category->sub_category as $sub)
                    <li data-filter=".{{ $sub->id }}"><span>{{ $sub->sub_name }}</span></li>
                @endforeach

            </ul><!-- /.collection-filter list-unstyled -->
        </div><!-- /.collection-grid__top -->
        <div class="row high-gutter filter-layout">
            @foreach ($category->batik as $batik)
                <div class="col-lg-4 col-md-6 filter-item {{ $batik->sub_id }}">
                    <div class="collection-grid__single">
                        <div class="collection-grid__image">
                            <img src="{{ asset($batik->batik_picture) }}" alt="{{ $batik->batik_name }} Picture">
                            <a href="{{ route('frontend.batik.show', $batik->batik_slug) }}" class="collection-grid__link">→</a>
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
