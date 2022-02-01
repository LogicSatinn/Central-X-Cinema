<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-primary">
        <!-- Logo -->
        <a class="text-dual d-inline-block font-w600" href="{{url('/')}}">
            <i class="fa fa-globe-americas mr-1"></i> Dash<span class="font-w700">mix</span>
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
            <!-- Close Sidebar, Visible only on mobile screens -->
            <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times-circle"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
    </div>
    <!-- END Side Header -->

    <!-- User Info -->
    <div class="smini-hidden">
        <div class="content-side content-side-full bg-black-10 d-flex align-items-center">
            <a class="img-link d-inline-block" href="javascript:void(0)">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{asset('assets/media/avatars/avatar13.jpg')}}" alt="">
            </a>
            <div class="ml-3">
                <a class="font-w600 text-dual" href="javascript:void(0)">John Doe</a>
                <div class="font-size-sm font-italic text-dual">Web Developer</div>
            </div>
        </div>
    </div>
    <!-- END User Info -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link active" href="#">
                    <i class="nav-main-link-icon far fa-compass"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{route('movies.index')}}">
                    <i class="nav-main-link-icon far fa-user-circle"></i>
                    <span class="nav-main-link-name">Movies</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{route('genre.index')}}">
                    <i class="nav-main-link-icon far fa-envelope-open"></i>
                    <span class="nav-main-link-name">Genre</span>
                    <span class="nav-main-link-badge badge badge-pill badge-primary">2</span>
                </a>
            </li>
{{--            <li class="nav-main-heading">More</li>--}}
{{--            <li class="nav-main-item">--}}
{{--                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">--}}
{{--                    <i class="nav-main-link-icon fa fa-briefcase"></i>--}}
{{--                    <span class="nav-main-link-name">Projects</span>--}}
{{--                </a>--}}
{{--                <ul class="nav-main-submenu">--}}
{{--                    <li class="nav-main-item">--}}
{{--                        <a class="nav-main-link" href="">--}}
{{--                            <i class="nav-main-link-icon fa fa-check"></i>--}}
{{--                            <span class="nav-main-link-name">Active</span>--}}
{{--                            <span class="nav-main-link-badge badge badge-pill badge-success">3</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-main-item">--}}
{{--                        <a class="nav-main-link" href="">--}}
{{--                            <i class="nav-main-link-icon fa fa-users"></i>--}}
{{--                            <span class="nav-main-link-name">Colleagues</span>--}}
{{--                            <span class="nav-main-link-badge badge badge-pill badge-primary">24</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-main-item">--}}
{{--                        <a class="nav-main-link" href="">--}}
{{--                            <i class="nav-main-link-icon fa fa-cog"></i>--}}
{{--                            <span class="nav-main-link-name">Manage</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>
<!-- END Sidebar -->

{{--<li class="nav-item">--}}
{{--    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();--}}
{{--                                             document.getElementById('logout-form').submit();">--}}
{{--        <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out--}}
{{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--            @csrf--}}
{{--        </form>--}}
{{--    </a>--}}
{{--</li>--}}
