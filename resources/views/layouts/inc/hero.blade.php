<!-- Hero -->
<div class="bg-header-dark">
    <div class="content content-full">
        <div class="row pt-3">
            <div class="col-md py-3 d-md-flex align-items-md-center text-center">
                <h1 class="text-white mb-0">
                    <span class="font-w300">@yield('page')</span>
                </h1>
            </div>
            <div class="col-md py-3 d-md-flex align-items-md-center justify-content-md-end text-center">
                <a href="@yield('route')" class="btn btn-hero-primary mr-1"> @yield('action')
                </a>
                <a href="{{ route('logout') }}" class="btn btn-hero-primary" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    <i class="fa fa-user-lock mr-1"></i>Log Out
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->
{{--<li class="nav-item">--}}
{{--    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();--}}
{{--                                             document.getElementById('logout-form').submit();">--}}
{{--        <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out--}}
{{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--            @csrf--}}
{{--        </form>--}}
{{--    </a>--}}
{{--</li>--}}
