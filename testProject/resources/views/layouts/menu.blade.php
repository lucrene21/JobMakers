<div class="page-logo">
    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
        <img src="{{asset('theme')}}/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
        <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
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
        <img src="{{asset('theme')}}/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
        <div class="info-card-text">
            <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        Dr. Codex Lantern
                                    </span>
            </a>
            <span class="d-inline-block text-truncate text-truncate-sm">Toronto, Canada</span>
        </div>
        <img src="{{asset('theme')}}/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
        <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
            <i class="fal fa-angle-down"></i>
        </a>
    </div>
    <ul id="js-nav-menu" class="nav-menu js-nav-built">
        <li class="active">
            <a href="#" title="Application Intel" data-filter-tags="application intel" aria-expanded="false" class=" waves-effect waves-themed">
                <i class="fal fa-info-circle"></i>
                <span class="nav-link-text" data-i18n="nav.application_intel">Application Intel</span>
                <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">2</span></a>
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
                            <span class="app-list-name">
                                                    Home
                                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="page_inbox_general.html" class="app-list-item text-white border-0 m-0">
                            <div class="icon-stack">
                                <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                <i class="ni ni-envelope icon-stack-1x text-white"></i>
                            </div>
                            <span class="app-list-name">
                                                    Inbox
                                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                            <div class="icon-stack">
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                            </div>
                            <span class="app-list-name">
                                                    Add More
                                                </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Shortcuts -->
