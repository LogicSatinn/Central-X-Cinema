<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="text-dual link-fx" href="{{url('/')}}">
                <i class="fa fa-globe-americas mr-1"></i> XYZ <span class="font-w700">Cinema</span>
            </a>
            <!-- END Logo -->

            <!-- Menu -->
            <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block ml-4">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{url('/')}}">
                        <i class="nav-main-link-icon far fa-compass"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('movies.index')}}">
                        <i class="nav-main-link-icon fa fa-film"></i>
                        <span class="nav-main-link-name">Movie</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('theatre.index')}}">
                        <i class="nav-main-link-icon fa fa-university"></i>
                        <span class="nav-main-link-name">Theatre</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('hall.index')}}">
                        <i class="nav-main-link-icon far fa-user-circle"></i>
                        <span class="nav-main-link-name">Hall</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('genre.index')}}">
                        <i class="nav-main-link-icon far fa-envelope-open"></i>
                        <span class="nav-main-link-name">Genre</span>
{{--                        <span class="nav-main-link-badge badge badge-pill badge-primary">2</span>--}}
                    </a>
                </li>
{{--                <li class="nav-main-heading">More</li>--}}
{{--                <li class="nav-main-item">--}}
{{--                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"--}}
{{--                       aria-expanded="false" href="#">--}}
{{--                        <i class="nav-main-link-icon fa fa-briefcase"></i>--}}
{{--                        <span class="nav-main-link-name">Projects</span>--}}
{{--                    </a>--}}
{{--                    <ul class="nav-main-submenu">--}}
{{--                        <li class="nav-main-item">--}}
{{--                            <a class="nav-main-link" href="">--}}
{{--                                <i class="nav-main-link-icon fa fa-check"></i>--}}
{{--                                <span class="nav-main-link-name">Active</span>--}}
{{--                                <span class="nav-main-link-badge badge badge-pill badge-success">3</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-main-item">--}}
{{--                            <a class="nav-main-link" href="">--}}
{{--                                <i class="nav-main-link-icon fa fa-users"></i>--}}
{{--                                <span class="nav-main-link-name">Colleagues</span>--}}
{{--                                <span class="nav-main-link-badge badge badge-pill badge-primary">24</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-main-item">--}}
{{--                            <a class="nav-main-link" href="">--}}
{{--                                <i class="nav-main-link-icon fa fa-cog"></i>--}}
{{--                                <span class="nav-main-link-name">Manage</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
            <!-- END Menu -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div>

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-dual d-lg-none ml-1" data-toggle="layout"
                    data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary-darker">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
