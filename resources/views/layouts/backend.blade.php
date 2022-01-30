<!doctype html>
<html lang="en">
@include('layouts.inc.head')
<body class="horizontal light  ">
<div class="wrapper">
@include('layouts.inc.nav')

    @yield('content')

</div> <!-- .wrapper -->
@include('layouts.inc.scripts')
</body>
</html>
