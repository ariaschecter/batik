<div class="cd-h-timeline__events">
    <ol>
      @php($i = 1)
      @foreach ($categories as $category)
      <?php
          $batik = $category->batik_most->first();
          $i++;
      ?>
      <li class="cd-h-timeline__event {{ $i == 2 ? 'cd-h-timeline__event--selected' : '' }} text-component">
        <div class="container">
          <a href="{{ route('frontend.category.index', $category->category_slug) }}"><h2 class="cd-h-timeline__event-title text-center" style="font-family:'Karla'">{{ $category->category_name }}</h2></a>
          @if ($batik)
              <div class="row">
                  <div class="col-lg-8 col-md-12 col-sm-12">
                      <img src="{{ asset($batik->batik_picture) }}" alt="{{ $category->category_name }} Picture">
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12" style="font-family:'Karla'">
                      {{ Str::of($batik->batik_description)->limit(500) }}
                      <small class="btn text-info" style="cursor: default;">Diambil dari data view terbanyak</small>
                  </div>
              </div>
          @else
              <h3 class="block-title-one text-center" style="font-family:'Karla'">Data Batik Masih Kosong</h3>
          @endif
        </div>
      </li>
      @endforeach
    </ol>
  </div> <!-- .cd-h-timeline__events -->
