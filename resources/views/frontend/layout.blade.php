<!DOCTYPE html>
<html lang="en">

@include('frontend.inc.head')

<body>
<!-- ==========Preloader========== -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ==========Preloader========== -->
<!-- ==========Overlay========== -->
<div class="overlay"></div>
<a href="#0" class="scrollToTop">
    <i class="fas fa-angle-up"></i>
</a>
<!-- ==========Overlay========== -->
@include('frontend.inc.header')

@yield('content')

@include('frontend.inc.footer')

@include('sweetalert::alert')

@include('frontend.inc.scripts')
</body>

</html>
