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
                                <form id="js-login" novalidate="" method="POST" action="{{ route('jobs.update', $job->id) }}">

                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <label class="form-label" for="label">Label
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="label" class="form-control @error('label') is-invalid @enderror"
                                               name="label" value="{{ $job->label }}"  required placeholder="Edit label"/>
                                        @error('label')
                                        <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="description">Description
                                            <span class="text-danger">*</span></label>
                                        <input type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                                               value="{{ $job->description }}" required placeholder="Enter a description">
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="type">Type
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="phone" class="form-control @error('type') is-invalid @enderror" name="type"
                                               value="{{ $job->type }}" required placeholder="Enter your phone number">
                                        @error('type')
                                        <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="price_min">Minimum Price
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="numeric" id="price_min" class="form-control @error('price_min') is-invalid @enderror" name="price_min"
                                               value="{{ $job->price_min }}" required placeholder="Enter min price">
                                        @error('price_min')
                                        <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="price_max">Maximun Price
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="numeric" id="price_max" class="form-control @error('price_max') is-invalid @enderror" name="price_max"
                                               value="{{ $job->price_max }}" required placeholder="Enter max price">
                                        @error('price_min')
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

