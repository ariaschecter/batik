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

@endsection
