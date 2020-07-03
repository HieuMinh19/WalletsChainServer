<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#007bff" />
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#007bff">
    <!-- iOS Safari -->
     <meta name="apple-mobile-web-app-status-bar-style" content="#007bff">
    
    <title>@yield('title')</title>
     <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('img/ducfavicon.ico')}}" sizes="16x16">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{URL::asset('lib/font-awesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/font-awesome-5/css/fontawesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('lib/adminlte/css/adminlte.min.css')}}">
    <!-- SPLUS style -->
    <link rel="stylesheet" href="{{URL::asset('css/splus.css')}}">
    <!-- Pace style -->
    <link rel="stylesheet" href="{{URL::asset('lib/pace/pace.css')}}">
    <!-- Animated CSS -->
    <link rel="stylesheet" href="{{ URL::asset('lib/bootstrap-notify/Animated.css') }}">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{URL::asset('lib/iCheck/all.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/datatables/css/dataTables.bootstrap4.min.css')}}">
	
    @stack('page-styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <!-- Control sidebar content goes here -->

        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-block-down">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong> &nbsp; Copyright &copy; 2019 <a href="#">SPLUS-SOFTWARE</a>.</strong> All rights reserved.
            <br>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{URL::asset('lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{URL::asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE -->
    <script src="{{URL::asset('lib/adminlte/js/adminlte.js')}}"></script>
    <!-- pace -->
    <script src="{{URL::asset('js/pace.js')}}"></script>
    <!-- commonjs -->
    <script src="{{URL::asset('js/common.js')}}"></script>
    <!-- DataTables -->
    <script src="{{URL::asset('lib/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('lib/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Bootstrap Notify -->
    <script src="{{ URL::asset('lib/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <!-- Moment date format-->
    <script src="{{URL::asset('lib/moment/moment.js')}}"></script>

    <script type="text/javascript">
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
    </script>

    @stack('page-scripts')
</body>

</html>
