@extends('layouts.default')

@section('contenu')
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">JobMaker</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-plus-circle'></i> Profile
                <small>
                    Follow your profile
                </small>
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-3 order-lg-1 order-xl-1">
                <!-- profile summary -->
                <div class="card mb-g rounded-top">
                    <div class="row no-gutters row-grid">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center justify-content-center p-4">
                                <img src="{{asset('theme')}}/img/demo/avatars/avatar-m.png" class="rounded-circle shadow-2 img-thumbnail" alt="">
                                <h5 class="mb-0 fw-700 text-center mt-3">
                                   {{ Auth::user()->first_name .' '. Auth::user()->last_name }}<br/>
                                    {{ Auth::user()->email }}
                                    <small class="text-muted mb-0">Cameroon</small>
                                </h5>
                                <div class="mt-4 text-center demo">
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#3b5998">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#38A1F3">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#db3236">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#0077B5">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#000000">
                                        <i class="fab fa-reddit-alien"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#00AFF0">
                                        <i class="fab fa-skype"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#0063DC">
                                        <i class="fab fa-flickr"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center py-3">
                                <h5 class="mb-0 fw-700">
                                    764
                                    <small class="text-muted mb-0">Offers</small>
                                </h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center py-3">
                                <h5 class="mb-0 fw-700">
                                    1,673
                                    <small class="text-muted mb-0">Jobs</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- add : -->
                <div class="card mb-2">
                    <div class="card-body">
                        <a href="javascript:void(0);" class="d-flex flex-row align-items-center">
                            <div class='icon-stack display-3 flex-shrink-0'>
                                <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                <i class="fas fa-graduation-cap icon-stack-1x opacity-100 color-primary-500"></i>
                            </div>
                            <div class="ml-3">
                                <strong>
                                    Add Awards
                                </strong>
                                <br>
                                Adding qualifications will help gain more clients
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card mb-g">
                    <div class="card-body">
                        <a href="javascript:void(0);" class="d-flex flex-row align-items-center">
                            <div class='icon-stack display-3 flex-shrink-0'>
                                <i class="fal fa-circle icon-stack-3x opacity-100 color-warning-400"></i>
                                <i class="fas fa-handshake icon-stack-1x opacity-100 color-warning-500"></i>
                            </div>
                            <div class="ml-3">
                                <strong>
                                    Add Skills
                                </strong>
                                <br>
                                Gain more potential clients by adding skills
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                <div class="card border mb-g">
                    <div class="card-body pl-4 pt-4 pr-4 pb-0">
                        <div class="d-flex flex-column">
                            <div class="border-0 flex-1 position-relative shadow-top">
                                <div class="pt-2 pb-1 pr-0 pl-0 rounded-0 position-relative" tabindex="-1">
                                    <span class="profile-image rounded-circle d-block position-absolute" style="background-image:url('img/demo/avatars/avatar-admin.png'); background-size: cover;"></span>
                                    <div class="pl-5 ml-5">
                                        <textarea class="form-control border-0 p-0 fs-xl" rows="4" placeholder="Make a post....."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="height-8 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1 mr-1" data-toggle="tooltip" data-original-title="More options" data-placement="top">
                                    <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Attach files" data-placement="top">
                                    <i class="fal fa-paperclip color-fusion-300"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Insert photo" data-placement="top">
                                    <i class="fal fa-camera color-fusion-300"></i>
                                </a>
                                <button class="btn btn-info shadow-0 ml-auto">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- post comment -->
                <div id="panel-5" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Users <span class="fw-300"><i>Info</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="accordion accordion-hover" id="js_demo_accordion-5">
                                <div class="card">
                                    <div class="card-header">
                                        <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_demo_accordion-5a" aria-expanded="true">
                                            <i class="fal fa-cloud-upload-alt width-2 fs-xl"></i>
                                           Skills
                                            <span class="ml-auto">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-chevron-up fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                      <i class="fal fa-chevron-down fs-xl"></i>
                                                                </span>
                                                            </span>
                                        </a>
                                    </div>

                                    @if(isset($skills) && count($skills) > 0)
                                        @foreach($skills as $key => $skill)
                                    <div id="js_demo_accordion-5a" class="collapse show" data-parent="#js_demo_accordion-5">
                                        <div class="card-body">
                                          <b><h3><i> {{ $skill->label }} </i></h3></b>
                                            <br/>
                                            {{ $skill-> description }}

                                        </div>
                                    </div>
                                        @endforeach
                                        @endif
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-5b" aria-expanded="false">
                                            <i class="fal fa-cloud-upload-alt width-2 fs-xl"></i>
                                            Awards
                                            <span class="ml-auto">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-chevron-up fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-chevron-down fs-xl"></i>
                                                                </span>
                                                            </span>
                                        </a>
                                    </div>

                                    @if(isset($awards) && count($awards) > 0)
                                        @foreach($awards as $key => $award)
                                    <div id="js_demo_accordion-5b" class="collapse" data-parent="#js_demo_accordion-5">
                                        <div class="card-body">
                                            <b><h3><i> {{ $award->label }} </i></h3></b>
                                            <br/>
                                            {{ $award-> description }}
                                        </div>
                                    </div>
                                        @endforeach
                                        @endif
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-5c" aria-expanded="false">
                                            <i class="fal fa-cloud-upload-alt width-2 fs-xl"></i>
                                            Offers
                                            <span class="ml-auto">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-chevron-up fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-chevron-down fs-xl"></i>
                                                                </span>
                                                            </span>
                                        </a>
                                    </div>

                                    @if(isset($offers) && count($offers) > 0)
                                        @foreach($offers as $key => $offer)
                                    <div id="js_demo_accordion-5c" class="collapse" data-parent="#js_demo_accordion-5">
                                        <div class="card-body">
                                            <b><h3><i> {{ $offer->label }} </i></h3></b><br/>
                                            {{ $offer-> description }}
                                            <br/>
                                            Maximum price <b>{{ $offer->price_max }}</b><br/>
                                            Minimum price <b>{{ $offer->price_min }}</b>
                                        </div>
                                    </div>
                                    @endforeach
                                        @endif
                                </div>


                                <div class="card">
                                    <div class="card-header">
                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-5c" aria-expanded="false">
                                            <i class="fal fa-cloud-upload-alt width-2 fs-xl"></i>
                                          Localisation
                                            <span class="ml-auto">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-chevron-up fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-chevron-down fs-xl"></i>
                                                                </span>
                                                            </span>
                                        </a>
                                    </div>
                                    @if(isset($localisations) && count($localisations) > 0)
                                        @foreach($localisations as $key => $localisation)
                                            <div id="js_demo_accordion-5c" class="collapse" data-parent="#js_demo_accordion-5">
                                                <div class="card-body">
                                                   Country <b>{{ $localisation->country }}</b><br/>
                                                   Region <b>{{ $localisation->region }}</b><br/>
                                                   City <b>{{ $localisation->city }}</b><br/>
                                                    Address <b>{{ $localisation->address }}</b>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- post article -->

                <!-- post article - end -->
            </div>
            <div class="col-lg-6 col-xl-3 order-lg-2 order-xl-3">
                <!-- skills -->
                <div class="card mb-g">
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <div class="p-3">
                                <h2 class="mb-0 fs-xl">
                                    Current Project
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">

                                <div class="row fs-b fw-300">
                                    <div class="col text-left">
                                        Progress
                                    </div>
                                    <div class="col text-right">
                                        26%
                                    </div>
                                </div>
                                <div class="progress progress-xs d-flex mb-2 mt-1">
                                    <span class="progress-bar bg-danger-500 progress-bar-striped" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></span>
                                </div>
                                <div class="fw-300 mb-3">
                                    <div class="row">
                                        <div class="col">
                                            Budget
                                        </div>
                                        <div class="col text-right text-danger">
                                            -$155,473.70
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="row fs-b fw-300">
                                    <div class="col text-left">
                                        Progress
                                    </div>
                                    <div class="col text-right">
                                        90%
                                    </div>
                                </div>
                                <div class="progress progress-xs d-flex mb-2 mt-1">
                                    <span class="progress-bar bg-primary-500 progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></span>
                                </div>
                                <div class="fw-300 mb-0">
                                    <div class="row">
                                        <div class="col">
                                            Budget
                                        </div>
                                        <div class="col text-right">
                                            $1,325,987.30
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 text-center">
                                <div class="text-left fw-400 ">
                                    <div class="text-secondary mb-1">Project Owners</div>
                                    <div class="fs-sm d-flex align-items-center">
                                        <a href="#" class="btn-m-s">
                                            <img src="{{asset("theme")}}/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="{{asset("theme")}}/img/demo/avatars/avatar-b.png" class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="{{asset("theme")}}/img/demo/avatars/avatar-c.png" class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="{{asset("theme")}}/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="{{asset("theme")}}/img/demo/avatars/avatar-h.png" class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="{{asset("theme")}}/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s fs-xs">
                                                            <span data-hasmore="+7" class="rounded-circle profile-image-sm">
                                                                <img src="{{asset("theme")}}/img/demo/avatars/avatar-j.png" class="profile-image-sm rounded-circle" alt="aa">
                                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
