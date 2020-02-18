@extends('layouts.app')

@section('content')
    <div class="page-inner bg-brand-gradient">
        <div class="page-content-wrapper bg-transparent m-0">
            <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                <div class="d-flex align-items-center container p-0">
                    <div
                        class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                        <a href="{{ route('welcome') }}"
                           class="page-logo-link press-scale-down d-flex align-items-center">
                            <span class="page-logo-text mr-1">JobMaker WebApp</span>
                        </a>
                    </div>
                    <a href="{{ route('register') }}" class="btn-link text-white ml-auto">
                        Create Account
                    </a>
                </div>
            </div>
            <div class="flex-1"
                 style="background: url({{ asset('theme') }}/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                    <div class="row">
                        <div class="col col-md-6 col-lg-7 hidden-sm-down">
                            <h2 class="fs-xxl fw-500 mt-4 text-white">
                                The simplest Platform for Workers &amp; Employers
                                <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                                    Presenting you the new Freelance Platform JobMaker .
                                    The most efficient and effective means to find a worker and get a job online.
                                    Experience the simplicity of JobMaker, everywhere you go!
                                </small>
                            </h2>
                            <a href="{{ route('welcome') }}#about" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
                            <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                                <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                                    Find us on social media
                                </div>
                                <div class="d-flex flex-row opacity-70">
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-google-plus-square"></i>
                                    </a>
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                            <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                Secure login
                            </h1>
                            <div class="card p-6 rounded-plus bg-faded">
                                <form id="js-login" novalidate="" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-label" for="username">Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="email" id="username"
                                               class="form-control form-control-lg @error('email') is-invalid @enderror"
                                               name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus
                                               placeholder="Enter Your Email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="password" id="password"
                                               class="form-control form-control-lg @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password"
                                               placeholder="Your password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="rememberme"> Remember me </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <a href="{{route('password.request')}}">Forgot password</a>
                                        </div>
                                    </div>
                                    <div class="row no-gutters" class="justify-content-center">

                                        <div class="col-lg-12 pl-lg-1 my-2">
                                            <button id="js-login-btn" type="submit"
                                                    class="btn btn-danger btn-block btn-lg">Secure login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                        <p>&copy; {{ \Carbon\Carbon::now()->year }} JobMaker. All Rights Reserved by
                            <a href="https://lab2view.com"
                               target="_blank">Lab2View</a>.</p>
                    </div>
                </div>
            </div>
        </div>

@endsection
