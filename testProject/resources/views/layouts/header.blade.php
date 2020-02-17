<div class="page-logo">
    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
        <img src="{{asset('theme')}}/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
        <span class="page-logo-text mr-1">JobMaker</span>
        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
    </a>
</div>
<!-- DOC: nav menu layout change shortcut -->
<div class="hidden-md-down dropdown-icon-menu position-relative">
    <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
        <i class="ni ni-menu"></i>
    </a>
    <ul>
        <li>
            <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                <i class="ni ni-minify-nav"></i>
            </a>
        </li>
        <li>
            <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                <i class="ni ni-lock-nav"></i>
            </a>
        </li>
    </ul>
</div>
<!-- DOC: mobile button appears during mobile width -->
<div class="hidden-lg-up">
    <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
        <i class="ni ni-menu"></i>
    </a>
</div>
<div class="search">
    <form class="app-forms hidden-xs-down" role="search" action="https://www.gotbootstrap.com/themes/smartadmin/4.0.2/page_search.html" autocomplete="off">
        <input type="text" id="search-field" placeholder="Search for anything" class="form-control" tabindex="1">
        <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
            <i class="fal fa-times"></i>
        </a>
    </form>
</div>
<div class="ml-auto d-flex">
    <!-- activate app search icon (mobile) -->
    <div class="hidden-sm-up">
        <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
            <i class="fal fa-search"></i>
        </a>
    </div>
    <!-- app notification -->
    <div>
        <a href="#" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
            <i class="fal fa-envelope"></i>
            <span class="badge badge-icon">{{ Auth::User()->countReadMessage() }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
            <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                <h4 class="m-0 text-center color-white">
                    11 New
                    <small class="mb-0 opacity-80">User Notifications</small>
                </h4>
            </div>

            <div class="tab-content tab-notification">
                <div class="custom-scroll h-100">
                    <ul class="notification">
                        @foreach(Auth::user()->messages()->where('is_read', false)->get() as $message)
                            <li class="unread">
                                <a href="#" class="d-flex align-items-center">
                                    <span class="status mr-2">
                                        <span class="profile-image rounded-circle d-inline-block"></span>
                                    </span>
                                    <span class="d-flex flex-column flex-1 ml-1">
                                        <span class="name">Melissa Ayre <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-1">INBOX</span></span>
                                        <span class="msg-a fs-sm">Re: New security codes</span>
                                        <span class="msg-b fs-xs">Hello again and thanks for being part...</span>
                                        <span class="fs-nano text-muted mt-1">56 seconds ago</span>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
                <a href="#" class="fs-xs fw-500 ml-auto">view all notifications</a>
            </div>
        </div>
    </div>
    <!-- app user menu -->
    <div>
        <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
            <img src="{{asset('theme')}}/img/demo/avatars/avatar-m.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
            <!-- you can also add username next to the avatar with the codes below:
            <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
            <i class="ni ni-chevron-down hidden-xs-down"></i> -->
        </a>
        <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
            <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="{{asset('theme')}}/img/demo/avatars/avatar-m.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                            </span>
                    <div class="info-card-text">
                        <div class="fs-lg text-truncate text-truncate-lg">{{ Auth::user()->first_name .' '. Auth::user()->last_name }}</div>
                        <span class="text-truncate text-truncate-md opacity-80 text-uppercase">{{ Auth::user()->role->label }}</span>
                    </div>
                </div>
            </div>
            <div class="dropdown-divider m-0"></div>
            <a href="{{ route('users.show', \Illuminate\Support\Facades\Auth::user()->id) }}" class="dropdown-item">
                <span data-i18n="drpdwn.reset_layout">My profile</span>
            </a>
            <div class="dropdown-divider m-0"></div>
            <a class="dropdown-item fw-500 pt-3 pb-3" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span data-i18n="drpdwn.page-logout">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
