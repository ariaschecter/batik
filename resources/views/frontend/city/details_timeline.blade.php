@extends('frontend.frontend_master')

@section('frontend')

<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Timeline : {{ $city->city_name }}</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

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

@endsection
