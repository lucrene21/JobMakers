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
                    <span class="text-white opacity-50 ml-auto mr-2 hidden-sm-down">
                                Already a member?
                            </span>
                    <a href="{{ route('login') }}" class="btn-link text-white ml-auto ml-sm-0">
                        Secure Login
                    </a>
                </div>
            </div>
            <div class="flex-1"
                 style="background: url({{ asset('theme') }}/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
                                Register now, its free!
                            </h2>
                        </div>
                        <div class="col-xl-6 ml-auto mr-auto">
                            <div class="card p-4 rounded-plus bg-faded">
                                <form id="js-login" novalidate="" method="POST" action="{{ route('register') }}">

                                    @csrf

                                    <div class="form-group">
                                        <label class="form-label" for="first_name">First Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="fisrt_name"
                                               class="form-control @error('first_name') is-invalid @enderror"
                                               name="first_name" value="{{ old('first_name') }}" required
                                               placeholder="Enter your first name"/>
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="last_name">last Name</label>
                                        <input type="text" id="last_name"
                                               class="form-control @error('last_name') is-invalid @enderror"
                                               name="last_name"
                                               value="{{ old('last_name') }}" required
                                               placeholder="Enter your last name">
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="phone">Phone
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="numeric" id="phone"
                                               class="form-control @error('phone') is-invalid @enderror" name="phone"
                                               value="{{ old('phone') }}" required
                                               placeholder="Enter your phone number">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="role">Account type</label>
                                        <select id="role" class="form-control @error('role_id') is-invalid @enderror"
                                                name="role_id" value="{{ old('role_id') }}" required>
                                            <option value="{{ null  }}">Choose the account type</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->label }}</option>
                                            @endforeach
                                        </select>
                                        @error('role_id')
                                        <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="emailverify">Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="email" id="emailverify"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required placeholder="Enter your email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="userpassword">Pick a password:
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="password" id="userpassword"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="current-password"
                                               placeholder="Enter your password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                        <div class="help-block">Your password must be 8-20 characters long, contain
                                            letters and numbers, and must not contain spaces, special characters, or
                                            emoji.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password-confirm">Confirm password:
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation"
                                               required autocomplete="new-password" placeholder="Confirm your password">
                                        <div class="invalid-feedback">Sorry, you missed this one.</div>
                                    </div>
                                    <div class="form-group demo">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="terms" required>
                                            <label class="custom-control-label" for="terms"> I agree to terms &
                                                conditions</label>
                                            <div class="invalid-feedback">You must agree before proceeding</div>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newsletter">
                                            <label class="custom-control-label" for="newsletter">Sign up for newsletters
                                                (dont worry, we won't send so many)</label>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-md-4 ml-auto text-right">
                                            <a href="passwords.reset">
                                                <button class="btn btn-block btn-danger btn-lg mt-3">Register</button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
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

