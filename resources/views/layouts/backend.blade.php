<!doctype html>
<html lang="en">
@include('layouts.inc.head')
<body>
<div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-dark main-content-boxed">
@include('layouts.inc.nav')

@include('layouts.inc.header')
<!-- Main Container -->
    <main id="main-container">

        @include('layouts.inc.hero')

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success_message') }}
            </div>
        @endif

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
