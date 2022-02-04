<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-primary">
        <!-- Logo -->
        <a class="text-dual d-inline-block font-w600" href="{{url('/')}}">
            <i class="fa fa-globe-americas mr-1"></i> XYZ <span class="font-w700">Cinema</span>
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
                <a class="font-w600 text-dual" href="javascript:void(0)">{{auth()->user()->name}}</a>
                <div class="font-size-sm font-italic text-dual">Web Developer</div>
            </div>
        </div>
    </div>
    <!-- END User Info -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            @include('layouts.inc.menu')
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
