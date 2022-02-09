<!doctype html>
<html lang="en">
@include('layouts.inc.head')
<body>
<div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-dark main-content-boxed">
@include('layouts.inc.nav')

@include('layouts.inc.header')
<!-- Main Container -->
    <main id="main-container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success_message') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error_message') }}
            </div>
        @endif

        @include('layouts.inc.hero')

        @yield('content')

    </main>
    <!-- END Main Container -->

    @include('layouts.inc.footer')
</div>
<!-- END Page Container -->

@include('sweetalert::alert')

@include('layouts.inc.scripts')
</body>
</html>
