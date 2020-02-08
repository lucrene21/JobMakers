@extends('layouts.default')
@section('css')
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}css/fa-brands.css">
@endsection

@section('contenu')
    <div class="page-inner bg-brand-gradient">
        <div class="page-content-wrapper bg-transparent m-0">

            <div class="flex-1" style="background: url('/public/theme/img/svg/pattern-1.svg') no-repeat center bottom fixed; background-size: cover;">
                <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
                               Update Your Info
                                <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60 hidden-sm-down">
                                    Enjoy JobMaker on your desktop.
                                </small>
                            </h2>
                        </div>
                        <div class="col-xl-6 ml-auto mr-auto">
                            <div class="card p-4 rounded-plus bg-faded">
                                <form id="js-login" novalidate="" method="POST" action="{{ route('users.update', $user->id) }}">

                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <label class="form-label" for="first_name">First Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="fisrt_name" class="form-control @error('first_name') is-invalid @enderror"
                                               name="first_name" value="{{ $user->first_name }}"  required placeholder="Edit your first name"/>
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="last_name">last Name
                                            <span class="text-danger">*</span></label>
                                        <input type="text" id="last_name" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                               value="{{ $user->last_name }}" required placeholder="Enter your last name">
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
                                        <input type="numeric" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                               value="{{ $user->phone }}" required placeholder="Enter your phone number">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="role">Account type</label>
                                        <select id="role" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required>
                                            <option value="{{ $user->role_id }}">Choose the account type</option>
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
                                        <input type="email" id="emailverify" class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{$user->email}}" required placeholder="Enter your email" >
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-md-4 ml-auto text-right">
                                            <button class="btn btn-block btn-primary btn-lg mt-3">update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

