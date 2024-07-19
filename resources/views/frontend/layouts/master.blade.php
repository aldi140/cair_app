<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('build/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" /> --}}


    <!-- Pe-7 icon -->
    <link href="{{ asset('assets/css/pe-icon-7.css') }}" rel="stylesheet" type="text/css" />
    <!--Slider-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />

    @stack('css')





</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('frontend.layouts.navbar')
    <!-- Navbar End -->

    <div class="button-wa">
        <a href="https://wa.me/6281806942266/?text=Halo Kak Saya Ingin Bertanya"><i class="bi bi-whatsapp"></i></a>
    </div>
    <main>
        @yield('content')

    </main>


    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- Footer End -->
    @stack('scripts')

    <!-- javascript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/scrollspy.min.js') }}"></script> --}}
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <script src="{{ asset('assets/js/contact.js') }}"></script>

    <!-- carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- Choices.js -->
    <script src="{{ asset('build/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Main Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>
