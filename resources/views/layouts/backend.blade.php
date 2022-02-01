<!doctype html>
<html lang="en">
@include('layouts.inc.head')
<body>
<div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-dark main-content-boxed">
@include('layouts.inc.nav')

@include('layouts.inc.header')
<!-- Main Container -->
    <main id="main-container">
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
                        <button type="button" class="btn btn-hero-primary">
                            <i class="fa fa-cog"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        @yield('content')

    </main>
    <!-- END Main Container -->

    @include('layouts.inc.footer')
</div>
<!-- END Page Container -->


@include('layouts.inc.scripts')
</body>
</html>
