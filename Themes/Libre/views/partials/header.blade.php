<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <!--<h1 class="logo mr-auto"><a href="{{ URL::to('/') }}">@setting('core::site-name')</h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ URL::to('/') }}" class="logo mr-auto "><img style="position: absolute; margin-top: -23px" src="{{ asset('assets/media/logo.png') }}" alt="" class="img-fluid"></a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
            {!! Menu::get('NavBar','librenavbar') !!}

            @if(count(LaravelLocalization::getSupportedLocales())>1)
                <li class="drop-down">
                    <a href="#" >{{ LaravelLocalization::getCurrentLocaleName()  }}</a>
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li  class="{{ App::getLocale() == $localeCode ? 'active' : '' }}">
                                <a rel="alternate"  lang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                    {!! $properties['native'] !!}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            @endif
        </nav><!-- .nav-menu -->


        <div class="header-social-links">
            <a href="https://twitter.com/Honduraslibrea1" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="https://www.facebook.com/WILLATLANTIDA/" target="_blank"  class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram" target="_blank" ><i class="icofont-instagram"></i></a>
        </div>

    </div>
</header><!-- End Header -->