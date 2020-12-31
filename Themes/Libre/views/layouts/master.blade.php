<!doctype html>
<html lang="en">
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')"/>
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title')@setting('core::site-name')@show</title>
    @if(isset($alternate))
        @foreach($alternate as $alternateLocale=>$alternateSlug)
            <link rel="alternate" hreflang="{{$alternateLocale}}" href="{{url($alternateLocale.'/'.$alternateSlug)}}">
        @endforeach
    @endif
    <link rel="canonical" href="{{url()->current()}}" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{!! asset('themes/libre/assets/vendor/bootstrap/css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('themes/libre/assets/vendor/icofont/icofont.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('themes/libre/assets/vendor/boxicons/css/boxicons.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('themes/libre/assets/vendor/animate.css/animate.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('themes/libre/assets/vendor/venobox/venobox.css')!!}" rel="stylesheet">
    <link href="{!! asset('themes/libre/assets/vendor/owl.carousel/assets/owl.carousel.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('themes/libre/assets/vendor/aos/aos.css')!!}" rel="stylesheet">
    <link href="{!! asset('themes/libre/assets/vendor/remixicon/remixicon.css')!!}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{!! asset('themes/libre/assets/css/style.css')!!}" rel="stylesheet">
    @yield('css')
</head>
<body>
@if(session('flash'))
    <div class="alert alert-primary" role="alert">
        {{ session('flash') }}
    </div>
@endif
@include('partials.header')
@yield('subnav')
<main id="main">
@yield('content')
</main>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{!! asset('themes/libre/assets/vendor/jquery/jquery.min.js')!!}"></script>
    <script src="{!! asset('themes/libre/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')!!}"></script>
    <script src="{!! asset('themes/libre/assets/vendor/jquery.easing/jquery.easing.min.js')!!}"></script>
    <script src="{!! asset('themes/libre/assets/vendor/php-email-form/validate.js')!!}"></script>
    <script src="{!! asset('themes/libre/assets/vendor/jquery-sticky/jquery.sticky.js')!!}"></script>
    <script src="{!! asset('themes/libre/assets/vendor/isotope-layout/isotope.pkgd.min.js')!!}"></script>
    <script src="{!! asset('themes/libre/assets/vendor/venobox/venobox.min.js')!!}"></script>
    <script src="{!! asset('themes/libre/assets/vendor/waypoints/jquery.waypoints.min.js')!!}"></script>
    <script src="{!! asset('themes/libre/assets/vendor/owl.carousel/owl.carousel.min.js')!!}"></script>
    <script src="{!! asset('themes/libre/assets/vendor/aos/aos.js')!!}"></script>

    <!-- Template Main JS File -->
    <script src="{!! asset('themes/libre/assets/js/main.js') !!}"></script>
@yield('js')
</body>

</html>
