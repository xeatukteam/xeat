<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Xeat')</title> <!-- Default title if none is provided -->

        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <!-- new home page on live website -->
        <link rel="shortcut icon" href="{{ asset('public/images/logo.jpeg') }}" type="image/png">
        <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
                <!-- FontAwesome (CDN - No Change) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!-- CSS Files from Public Folder -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/slick.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/slick-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/custom-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile-responsive.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public/js/slick.min.js') }}"></script>

        <!-- /end -->

        
        <!-- Include Toastr CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>






    </head>
<body>

    <!-- Include Header -->
    @if (!request()->is('login') && !request()->is('signup'))  {{-- Hide header on login page --}}
        @include('partials.header')
    @endif
   
    @yield('content')

    <!-- Include Footer -->
    @if (!request()->is('login') && !request()->is('signup')) {{-- Hide footer on login page --}}
        @include('partials.footer')
    @endif
    <!-- Include Scripts -->
    @include('partials.scripts')

    @stack('scripts') 

<script>
    window.APP_CONFIG = {
        baseUrl: "{{ $APP_URL }}",
        apiBaseUrl: "{{ $apiBaseUrl }}",
        accessToken: "{{ $accessToken }}"
    };
</script>


</body>

</html>
