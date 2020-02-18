<div class="page-logo">
    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal"
       data-target="#modal-shortcut">
        <img src="{{asset('theme')}}/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
        <span class="page-logo-text mr-1">JobMaker </span>
        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
    </a>
</div>
<!-- BEGIN PRIMARY NAVIGATION -->
<nav id="js-primary-nav" class="primary-nav" role="navigation">
    <div class="nav-filter">
        <div class="position-relative">
            <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
            <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle"
               data-class="list-filter-active" data-target=".page-sidebar">
                <i class="fal fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="info-card">
        <img src="{{asset('theme')}}/img/demo/avatars/avatar-m.png" class="profile-image rounded-circle"
             alt="Dr. Codex Lantern">
        <div class="info-card-text">
            <a href="#" class="d-flex align-items-center text-white">
                <span
                    class="text-truncate text-truncate-md opacity-80">{{ Auth::user()->first_name .' '. Auth::user()->last_name }}</span>
            </a>
            <span class="d-inline-block text-truncate text-truncate-sm">Cameroon</span>
        </div>
        <img src="{{asset('theme')}}/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
        <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle"
           data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
            <i class="fal fa-angle-down"></i>
        </a>
    </div>
    <ul id="js-nav-menu" class="nav-menu">

        <li class="{{ Route::is('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" title="Application Intel" data-filter-tags="application intel">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-link-text" data-i18n="nav.application_intel">DashBoard</span>
            </a>
        </li>

        @auth()
            @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                <li class="{{ Route::is('payments.index') ? 'active' : '' }}">
                    <a href="{{ route('payments.index') }}" title="manage payments" data-filter-tags="manage payments">
                        <i class="fas fa-money-bill-alt"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Manage Payments</span>
                    </a>
                </li>

                <li class="{{ Route::is('jobs.*') || Route::is('offers.*') || Route::is('orders.*') ? 'active' : '' }}">
                    <a href="#" title="Application Intel" data-filter-tags="application intel">
                        <i class="fas fa-forklift"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Manage Job</span>
                    </a>
                    <ul>
                        <li class="{{ Route::is('jobs.*') ? 'active' : '' }}">
                            <a href="{{ route('jobs.index') }}" title="Analytics Dashboard"
                               data-filter-tags="application intel analytics dashboard">
                                <i class="fas fa-laptop"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">View Job</span>
                            </a>
                        </li>
                        <li class="{{ Route::is('offers.*') ? 'active' : '' }}">
                            <a href="{{ route('offers.index') }}" title="Marketing Dashboard"
                               data-filter-tags="application intel marketing dashboard">
                                <i class="fas fa-laptop"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">View Offer</span>
                            </a>
                        </li>
                        <li class="{{ Route::is('orders.*') ? 'active' : '' }}">
                            <a href=" {{ route('orders.index') }}" title="Introduction"
                               data-filter-tags="application intel introduction">
                                <i class="fas fa-handshake"></i>
                                <span class="nav-link-text"
                                      data-i18n="nav.application_intel_introduction">View Order</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="{{ Route::is('users.index') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" title="Application Intel" data-filter-tags="application intel">
                        <i class="fas fa-user-circle"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Manage Users</span>
                    </a>
                </li>
                <li class="{{ Route::is('categories.index') ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}" title="Application Intel" data-filter-tags="application intel">
                        <i class="fas fa-edit"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Manage Job Categories</span>
                    </a>
                </li>
            @endif
            @if(!Auth::user()->isAdmin())
                @if(\Illuminate\Support\Facades\Auth::user()->isWorker())
                    <li class="nav-title">Search</li>
                    <li class="{{ Route::is('jobs.index') ? 'active' : '' }}">
                        <a href="{{ route('jobs.index') }}" title="Application Intel"
                           data-filter-tags="application intel">
                            <i class="fas fa-search"></i>
                            <span class="nav-link-text" data-i18n="nav.application_intel">Find Job</span>
                        </a>
                    </li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::user()->isEmployer())
                    <li class="nav-title">Need Jobber</li>
                    <li class="{{ Route::is('jobs.create') ? 'active' : '' }}">
                        <a href="{{ route('jobs.create') }}" title="Application Intel"
                           data-filter-tags="application intel">
                            <i class="fas fa-plus"></i>
                            <span class="nav-link-text" data-i18n="nav.application_intel">Post new Job</span>
                        </a>
                    </li>
                @endif
                <li class="nav-title">My works</li>
                <li class="{{ Route::is('users.index') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" title="Application Intel" data-filter-tags="application intel">
                        <i class="fas fa-list"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">
                           Current {{ \Illuminate\Support\Facades\Auth::user()->isEmployer() ? 'Jobs' : 'Works' }}</span>
                    </a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user()->isWorker())
                    <li class="{{ Route::is('users.index') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}" title="Application Intel"
                           data-filter-tags="application intel">
                            <i class="fas fa-thumbs-up"></i>
                            <span class="nav-link-text" data-i18n="nav.application_intel">My Offers</span>
                        </a>
                    </li>
                @endif
                <li class="{{ Route::is('users.index') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" title="Application Intel" data-filter-tags="application intel">
                        <i class="fas fa-thumbs-up"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">My skills</span>
                    </a>
                </li>
                <li class="nav-title">Operations histories</li>
                <li class="{{ Route::is('users.index') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" title="Application Intel" data-filter-tags="application intel">
                        <i class="fas fa-history"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Jobs histories</span>
                    </a>
                </li>
                <li class="{{ Route::is('users.index') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" title="Application Intel" data-filter-tags="application intel">
                        <i class="fas fa-credit-card"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Payments histories</span>
                    </a>
                </li>
            @endif
        @endauth
    </ul>
    <div class="filter-message js-filter-message bg-success-600"></div>
</nav>
<!-- END PRIMARY NAVIGATION -->
