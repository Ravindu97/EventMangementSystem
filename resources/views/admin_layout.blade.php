<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Event Management System')</title>

    {{-- boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Themefisher Font -->
    <link href="{{ asset('plugins/themefisher-font/style.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('plugins/font-awsome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- Slick Carousel -->
    <link href="{{ asset('plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/slick/slick-theme.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper">
    {{-- nav bar --}}
    @include('admin.admin-navbar')
    {{-- @include('components.navbar', ['userName' => 'Prabuddhika']) --}}

    {{-- @if (session()->has('msg'))
            <div class="alert alert-success" role="alert">
                <strong>Success</strong> {{ session()->get('msg') }}
            </div>
        @endif --}}

    <div style="">
        @yield('content')
    </div>


    @include('components.footer')

    {{-- boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('plugins/popper/popper.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Smooth Scroll -->
    <script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('plugins/isotope/mixitup.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Slick Carousel -->
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <!-- SyoTimer -->
    <script src="{{ asset('plugins/syotimer/jquery.syotimer.min.js') }}"></script>
    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>
    <!-- Custom Script -->
    <script src="{{ asset('js/custom.js') }}"></script>

    {{-- <script>
        var name = "abc";
        // Get user ID from local storage
        var userData = localStorage.getItem('admin');
        var user = JSON.parse(userData); // Corrected JSON.parse() here

        if (userData) {
            window.location.href = '/admin/login';
        }
    </script> --}}

</body>

</html>
