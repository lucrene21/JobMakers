<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Profile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highli" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}/css/vendors.bundle.css">
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}/css/app.bundle.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('theme')}}/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('theme')}}/img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="{{asset('theme')}}/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <!-- Optional: page related CSS-->
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}/css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}/css/fa-solid.css">
    @yield('css')
</head>
<body class="mod-bg-1 ">
<!-- BEGIN Page Wrapper -->
<div class="page-wrapper">
    @yield('content')
</div>
<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')
<!-- END Page Wrapper -->
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{asset('theme')}}/js/vendors.bundle.js"></script>
<script src="{{asset('theme')}}/js/app.bundle.js"></script>
@yield('script')

@if(session()->has('success'))
    <script>
        const str = "{{ session('message') }}";
        notify(str, 'inverse');
    </script>
@endif
@if(session()->has('error'))
    <script>
        const str = "{{ session('error') }}";
        notify(str, 'danger');
    </script>
@endif
</body>
</html>
