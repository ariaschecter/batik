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
                    <li><a href="#0" data-date="{{ $i++ }}/01/2022" class="cd-h-timeline__date {{ $i == 2 ? 'cd-h-timeline__date--selected' : '' }}">{{ $category->category_name }}</a></li>
                @endforeach

              </ol>

              <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
            </div> <!-- .cd-h-timeline__line -->
          </div> <!-- .cd-h-timeline__dates -->

          <ul>
            <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Sebelum</a></li>
            <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Sesudah</a></li>
          </ul>
        </div> <!-- .cd-h-timeline__container -->

        @include('frontend.components.timelineCity')

      </section>
    </section>
<!--End Banner Section -->

@endsection
