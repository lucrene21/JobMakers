<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JobMaker') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!--
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE
    DESIGNED & DEVELOPED by FreeHTML5.co

    Website: 		http://freehtml5.co/
    Email: 			info@freehtml5.co
    Twitter: 		http://twitter.com/fh5co
    Facebook: 		https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">	 -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('landing')}}/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('landing')}}/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('landing')}}/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('landing')}}/css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('landing')}}/css/style.css">

    <!-- Modernizr JS -->
    <script src="{{asset('landing')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="/">JOBMAKER<span>.</span></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Job</a></li>
                            <li><a href="#">Make Offer</a></li>
                            <!-- <li class="has-dropdown">
                                 <a href="#">Make Offer</a>
                                 <ul class="dropdown">
                                      <li><a href="#">Web Design</a></li>
                                     <li><a href="#">eCommerce</a></li>
                                     <li><a href="#">Branding</a></li>
                                     <li><a href="#">API</a></li>
                                </ul>
                            </li>-->
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="btn-cta"><a href=" {{ route('login') }} "><span>Login</span></a></li>
                            <li class="btn-cta"><a href=" {{ route('register') }} "><span>Register</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t js-fullheight">
                        <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                            <h1>Discover New Job Opportunities </h1>
                            <h2>Post Jobs and Make offers on  <a href="{{ route('welcome') }}" >JOBMAKER</a></h2>
                            <p><a class="btn btn-primary btn-lg btn-demo" href="{{ route('login') }}">Employer</a> <a class="btn btn-primary btn-lg btn-learn" href="{{ route('login') }}">Worker</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('landing')}}/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{asset('landing')}}/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{asset('landing')}}/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('landing')}}/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="{{asset('landing')}}/js/jquery.flexslider-min.js"></script>
<!-- Main -->
<script src="{{asset('landing')}}/js/main.js"></script>

</body>
</html>

