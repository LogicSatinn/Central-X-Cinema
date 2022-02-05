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
                @include('layouts.inc.menu')
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
