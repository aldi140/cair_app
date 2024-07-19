<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Webadmin - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    <!-- icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- include head css -->
    @include('layouts.head-css')

    <!-- App css -->
    <link href="{{ asset('build/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />



</head>

@yield('body')

<!-- Begin page -->
<div id="layout-wrapper">
    <!-- topbar -->
    @include('layouts.topbar')

    <!-- sidebar components -->
    @include('layouts.sidebar')
    @include('layouts.horizontal')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- footer -->
        @include('layouts.footer')

    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->

{{-- <!-- customizer -->
@include('layouts.right-sidebar') --}}
{{-- app --}}

{{-- jqery --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- vendor-scripts -->
@include('layouts.vendor-scripts')


<!-- App js -->
<script src="{{ asset('build/js/app.js') }}"></script>
<script src="{{ asset('build/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>


</body>

</html>
