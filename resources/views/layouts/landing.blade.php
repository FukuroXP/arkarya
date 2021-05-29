<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('wavee/img/arkarya_logo.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('wavee/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wavee/vendors/fullpage/fullpage.css') }}">
    <link rel="stylesheet" href="{{ asset('wavee/vendors/elagent-icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('wavee/vendors/animation/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('wavee/vendors/magnify-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('wavee/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('wavee/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('wavee/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('wavee/vendors/slick/slick-theme.css') }}">
    <title>Arkarya Studio</title>
</head>

<body>
@include('layouts.header')

@yield('content')

@include('layouts.footer_landing')

<script src="{{ asset('wavee/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('wavee/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('wavee/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('wavee/vendors/fullpage/scroll-overflow.js') }}"></script>
<script src="{{ asset('wavee/vendors/wow/wow.min.js') }}"></script>
<script src="{{ asset('wavee/vendors/fullpage/fullpage.js') }}"></script>
<script src="{{ asset('wavee/js/parallax.js') }}"></script>
<script src="{{ asset('wavee/vendors/particale/particles.js') }}"></script>
<script src="{{ asset('wavee/vendors/particale/app.js') }}"></script>
<script src="{{ asset('wavee/vendors/magnify-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('wavee/js/custom.js') }}"></script>

<script src="{{ asset('wavee/vendors/slick/slick.min.js') }}"></script>
<script src="{{ asset('wavee/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('wavee/vendors/isotope/isotope-min.js') }}"></script>
</body>
</html>
