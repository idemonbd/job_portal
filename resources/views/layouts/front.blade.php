<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JobPanel</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,500,700,800,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/all.min.css') }}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/owl.carousel.min.css') }}" />
    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{ asset('public/admin/assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/style.css') }}" />

</head>

<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')

    <!-- LinkUp Js -->
    <script type="text/javascript" src="{{ asset('public/admin/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/admin/assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/admin/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/admin/assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/admin/assets/js/owl.carousel2.thumbs.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/admin/assets/js/active.js') }}"></script>

</body>

</html>
