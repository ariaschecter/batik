@php
    $citytopbar = \App\Models\City::orderBy('city_name', 'ASC')->get();
@endphp

<nav class="main-nav-one stricky">
    <div class="container">
        <div class="inner-container">
            <div class="logo-box">
                <a href="{{ route('frontend.index') }}">
                    <img src="{{ asset('frontend/assets/images/logo-1-1.png') }}" alt="" width="143">
                </a>
                <a href="#" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
            </div><!-- /.logo-box -->
            <div class="main-nav__main-navigation">
                <ul class="main-nav__navigation-box">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li class="dropdown">
                        <a href="{{ route('frontend.city.index') }}">City</a>
                        <ul>
                            @foreach ($citytopbar as $citytop)
                                <li><a href="{{ route('frontend.city.show', $citytop->city_slug) }}">{{ $citytop->city_name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Timeline City</a>
                        <ul>
                            @foreach ($citytopbar as $citytop)
                                <li><a href="{{ route('frontend.timeline.show', $citytop->city_slug) }}">{{ $citytop->city_name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('frontend.batik.index') }}">Batik</a></li>

                    <div class="main-nav__right">
                        <form action="{{ route('frontend.batik.index') }}" class="search-popup__form">
                            <input type="text" name="search" placeholder="Search...." value="{{ request()->search ? request()->search : '' }}">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- /.main-nav__right -->
                </ul><!-- /.main-nav__navigation-box -->
            </div><!-- /.main-nav__main-navigation -->
        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</nav><!-- /.main-nav-one -->
