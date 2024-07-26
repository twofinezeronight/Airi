<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon.png')}}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dl-icon.css')}}">

    <!-- All Plugins CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Revoulation CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/revoulation.css')}}">

    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <!-- modernizr JS
============================================ -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @include('partials.header')
    <div class="min-h-screen bg-gray-100">
        <!-- include('layouts.navigation') -->

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @include('partials.footer')

    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- All Plugins Js -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- Ajax Mail Js -->
    <script src="{{asset('assets/js/ajax-mail.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('assets/js/revoulation/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.video.min.js')}}"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="{{asset('assets/js/revoulation.js')}}"></script>
    <script>
        function updateCart(productId, quantity) {
            fetch('/update-cart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        quantity: quantity
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.shippingFee !== undefined) {
                        document.getElementById('shippingFee').innerText = 'Phí vận chuyển: ' + data.shippingFee;
                    }
                    // Cập nhật lại giỏ hàng trong view nếu cần
                })
                .catch(error => console.error('Error:', error));
        }
    </script>

</body>

</html>