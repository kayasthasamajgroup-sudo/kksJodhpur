<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.7.2-web/css/all.min.css') }}">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
   
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('partials.header')

    <div class="container-fluid p-0">
        @yield('content')
    </div>

    @include('partials.footer')

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa-solid fa-arrow-up"></i></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    {{-- <script src="{{ asset('lib/easing/easing.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script> --}}

    {{-- <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script> --}}
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script> --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script> 

    <script>
        window.addEventListener("load", function() {
            document.getElementById("spinner").classList.remove("show");
        });
    </script>
</body>

</html>
