<!doctype html>
<html lang="en">
    @include('layouts.inc.head')
    <body>
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('{{ asset('assets/media/photos/photo32@2x.jpg') }}');">
                    <div class="hero bg-black-75">
                        <div class="hero-inner">
                            <div class="content content-full">
                                <div class="px-3 py-5 text-center">
                                    <div class="display-1 text-danger font-w700 invisible" data-toggle="appear" data-class="animated fadeInDown">@yield('code')</div>
                                    <h1 class="h2 font-w700 text-white mt-5 mb-3 invisible" data-toggle="appear" data-class="animated fadeInUp">Oops.. Something went wrong..</h1>
                                    <h1 class="h3 font-w400 text-white-75 mb-5 invisible" data-toggle="appear" data-class="animated fadeInUp">@yield('message')..</h1>
                                    <div class="invisible" data-toggle="appear" data-class="animated zoomIn">
                                        <a class="btn btn-hero-warning" href="{{ url()->previous() }}">
                                            <i class="fa fa-arrow-left mr-1"></i> Take me Back
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

   @include('layouts.inc.scripts')
    </body>
</html>
