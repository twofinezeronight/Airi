<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Andshop - Admin Dashboard HTML Template.">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('layout_admin/assets/css/materialdesignicons.min.css')}}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('layout_admin/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('layout_admin/assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

    <!-- custom css -->
    <link id="style.css" href="{{asset('layout_admin/assets/css/style.css')}}" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="{{asset('layout_admin/assets/img/favicon.png')}}" rel="shortcut icon" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light">
    <div class="wrapper">
        <div class="ec-left-sidebar ec-bg-sidebar">
            @include('admin.partials.nav')
        </div>
        <div class="ec-page-wrapper">
            @include('admin.partials.header')
            {{ $slot }}
            @include('admin.partials.footer')
        </div>
    </div>

    <!-- Common Javascript -->
    <script src="{{asset('layout_admin/assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('layout_admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('layout_admin/assets/plugins/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('layout_admin/assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('layout_admin/assets/plugins/slick/slick.min.js')}}"></script>

    <!-- Chart -->
    <script src="{{asset('layout_admin/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{asset('layout_admin/assets/js/chart.js')}}"></script>

    <!-- Google map chart -->
    <script src="{{asset('layout_admin/assets/plugins/charts/google-map-loader.js')}}"></script>
    <script src="{{asset('layout_admin/assets/plugins/charts/google-map.js')}}"></script>

    <!-- Date Range Picker -->
    <script src="{{asset('layout_admin/assets/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('layout_admin/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('layout_admin/assets/js/date-range.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('layout_admin/assets/js/custom.js')}}"></script>
</body>

</html>