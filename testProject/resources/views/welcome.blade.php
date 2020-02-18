<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    <link href="{{ asset('landing') }}/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="{{ asset('landing') }}/owl-carousel/assets/owl.carousel.min.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing') }}/css/bootstrap.min.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('landing') }}/css/style.css">
    <title>JobMaker</title>
    <style>

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
    <div class="container"><a class="navbar-brand">JobMaker</a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="{{ route('login') }}" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">login</a>
                <a href="{{ route('register') }}" class="btn btn-info my-2 my-sm-0 text-uppercase">sign
                    up</a>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid gtco-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1> We promiss to bring
                    the best <span>Worker</span> for
                    your Job. </h1>
                <p> Need help for some job ? </p>
                <a href="{{ route('login') }}">Start now <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-md-6">
                <div class="card"><img class="card-img-top img-fluid" src="{{ asset('landing') }}/images/banner-img.png"
                                       alt=""></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-feature" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cover">
                    <div class="card">
                        <svg
                            class="back-bg"
                            width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                            <defs>
                                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                        </svg>
                        <!-- *************-->

                        <svg width="100%" viewBox="0 0 700 500">
                            <clipPath id="clip-path">
                                <path
                                    d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                            </clipPath>
                            <!-- xlink:href for modern browsers, src for IE8- -->
                            <image clip-path="url(#clip-path)" xlink:href="{{ asset('landing') }}/images/learn-img.jpg"
                                   width="100%"
                                   height="465" class="svg__image"></image>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h2> We are a Locale Freelance Platform </h2>
                <p> No need for any high school degree. You just need to justify your skills and competences in order to
                    get a job. </p>
                <p>
                    <small>
                        We verify our employer's profile in order to provide the best outcome for your needs.
                    </small>
                </p>
                <a href="{{ route('register') }}">Register now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-features" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2> Explore The Services<br/>
                    We Offer For You </h2>
                <p> You need a distant or home worker we offer the oportunity to have a competent an adapted worker with
                    respect to your needs</p>
                <a href="{{ route('login') }}">Login now<i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-lg-8">
                <svg id="bg-services"
                     width="100%"
                     viewBox="0 0 1000 800">
                    <defs>
                        <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                            <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                            <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                        </linearGradient>
                    </defs>
                    <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                          d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z"/>
                </svg>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top"
                                                   src="{{ asset('landing') }}/images/web-design.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Computer science</h3>
                                <p class="card-text">We offer diverse IT services</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top"
                                                   src="{{ asset('landing') }}/images/marketing.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Payment</h3>
                                <p class="card-text">We have secured payments processes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="{{ asset('landing') }}/images/seo.png"
                                                   alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Certification</h3>
                                <p class="card-text">We have certified workers. No need to be worry about a worker's integrity</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top"
                                                   src="{{ asset('landing') }}/images/graphics-design.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">At home</h3>
                                <p class="card-text">You have the opportunity to get your work done at home</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid" id="gtco-footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="row">
                    <div class="col-12">
                        <p>&copy; {{ \Carbon\Carbon::now()->year }} JobMaker. All Rights Reserved by
                            <a href="https://lab2view.com"
                               target="_blank">Lab2View</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('landing') }}/js/jquery-3.3.1.slim.min.js"></script>
<script src="{{ asset('landing') }}/js/popper.min.js"></script>
<script src="{{ asset('landing') }}/js/bootstrap.min.js"></script>
<!-- owl carousel js-->
<script src="{{ asset('landing') }}/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ asset('landing') }}/js/main.js"></script>
</body>
</html>
