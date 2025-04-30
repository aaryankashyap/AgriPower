<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AgriPower Solutions - Agricultural Power Distribution</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="power distribution, electric power, agricultural power, farm power, irrigation power" name="keywords">
        <meta content="Find the best power distribution solutions for your agricultural needs" name="description">

        <!-- Favicon -->
        <link href="{{ asset('img/incon.png') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        @stack('styles')
    </head>
    <body>
        <div class="wrapper">
            @include('layouts.topbar')
            @include('layouts.header')
            
            <main class="main-content">
                @yield('content')
            </main>
            
            @include('layouts.footer')
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
        @stack('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html> 