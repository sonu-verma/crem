<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('public/assets/images/favicon.ico') }}" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('public/externalcss/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('public/externalcss/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('public/externalcss/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('public/externalcss/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('public/externalcss/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('public/externalcss/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('public/externalcss/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('public/assets/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- Side menu -->
              @include('admin.layouts.sidebar')
        <!-- Side menu -->

        <!-- top navigation -->
             @include('admin.layouts.header')
        <!-- /top navigation -->

        <!-- page content -->
            @yield('content')
        <!-- /page content -->

        <!-- footer content -->
             @include('admin.layouts.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('public/externalcss/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('public/externalcss/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('public/externalcss/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('public/externalcss/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('public/externalcss/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('public/externalcss/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('public/externalcss/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('public/externalcss/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('public/externalcss/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('public/externalcss/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/externalcss/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('public/externalcss/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('public/externalcss/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('public/externalcss/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('public/externalcss/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('public/externalcss/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('public/externalcss/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('public/externalcss/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('public/externalcss/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('public/externalcss/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('public/externalcss/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('public/externalcss/bootstrap-daterangepicker/daterangepicker.js') }}"></script>


    <script src="{{ asset('public/assets/js/custom.min.js') }}"></script>

    @yield('script')


  </body>
</html>
