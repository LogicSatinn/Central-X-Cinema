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
                <button type="button" class="btn btn-hero-primary">
                    <i class="fa fa-cog"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->
