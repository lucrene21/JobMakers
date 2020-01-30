<div class="page-logo">
    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
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
            <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                <i class="fal fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="info-card">
        <img src="{{asset('theme')}}/img/demo/avatars/avatar-m.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
        <div class="info-card-text">
            <a href="#" class="d-flex align-items-center text-white">
                <span class="text-truncate text-truncate-md opacity-80">{{ Auth::user()->first_name .' '. Auth::user()->last_name }}</span>
            </a>
            <span class="d-inline-block text-truncate text-truncate-sm">Cameroon</span>
        </div>
        <img src="{{asset('theme')}}/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
        <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
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

        <li class="">
            <a href="#" title="manage payments" data-filter-tags="manage payments">
                <i class="fas fa-money-bill-alt"></i>
                <span class="nav-link-text" data-i18n="nav.application_intel">Manage Payments</span>
            </a>
        </li>

        <li class="">
            <a href="#" title="Application Intel" data-filter-tags="application intel">
                <i class="fas fa-forklift"></i>
                <span class="nav-link-text" data-i18n="nav.application_intel">Manage Job</span>
            </a>
            <ul>
                <li class="">
                    <a href="#" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard">
                        <i class="fas fa-laptop"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">View Job</span>
                    </a>
                </li>
                <li>
                    <a href="#" title="Marketing Dashboard" data-filter-tags="application intel marketing dashboard">
                        <i class="fas fa-laptop"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">View Offer</span>
                    </a>
                </li>
                <li>
                    <a href="#" title="Introduction" data-filter-tags="application intel introduction">
                        <i class="fas fa-handshake"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel_introduction">View Work</span>
                    </a>
                </li>

                <li>
                    <a href="#" title="Introduction" data-filter-tags="application intel introduction">
                        <i class="fas fa-handshake"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel_introduction">View Order</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="{{ Route::is('users.*') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}" title="Application Intel" data-filter-tags="application intel">
                <i class="fas fa-user-circle"></i>
                <span class="nav-link-text" data-i18n="nav.application_intel">Manage Users</span>
            </a>
        </li>
    </ul>
    <div class="filter-message js-filter-message bg-success-600"></div>
</nav>
<!-- END PRIMARY NAVIGATION -->
<!-- NAV FOOTER -->
<div class="nav-footer shadow-top">
    <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
        <i class="ni ni-chevron-right"></i>
        <i class="ni ni-chevron-right"></i>
    </a>
    <ul class="list-table m-auto nav-footer-buttons">
        <li>
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                <i class="fal fa-comments"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                <i class="fal fa-life-ring"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                <i class="fal fa-phone"></i>
            </a>
        </li>
    </ul>
</div> <!-- END NAV FOOTER -->
<!-- BEGIN Shortcuts -->
<div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="app-list w-auto h-auto p-0 text-left">
                    <li>
                        <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                            <div class="icon-stack">
                                <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                            </div>
                            <span class="app-list-name">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="page_inbox_general.html" class="app-list-item text-white border-0 m-0">
                            <div class="icon-stack">
                                <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                <i class="ni ni-envelope icon-stack-1x text-white"></i>
                            </div>
                            <span class="app-list-name">Inbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                            <div class="icon-stack">
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                            </div>
                            <span class="app-list-name">Add More</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Shortcuts -->
