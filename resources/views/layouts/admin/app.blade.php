<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', config('app.name', 'Laravel'))">
    <meta name="author" content="@yield('meta_author', config('app.name', 'Laravel'))">
    @yield('meta')
    {{--<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">--}}
    <link rel="icon" href="{{ asset('front/images/AdirohaLogo1.png') }}" type="image/png">
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    @stack('before-styles')
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('admin/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('admin/assets/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('admin/assets/css/colors/megna-dark.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .error{
            color: #ee2558;
        }
        .invalid-feedback{
            color: #ee2558;
        }
        .swal2-popup{
            font-size: 16px !important;
        }
        .dropify-wrapper{
            height: 110px !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            color: #fff !important;
            border: 1px solid #2cabe3 !important;
            background-color: #2cabe3 !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: white !important;
            border: 1px solid #2cabe3 !important;
            background-color: #2cabe3 !important;
        }
    </style>
    @stack('after-styles')
    @if (trim($__env->yieldContent('page-style')))
        @yield('page-style')
    @endif
    <script type="text/javascript">
        window.Laravel  = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>;
        var BASE_URL    = "{{ url('/') }}";
    </script>
</head>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('layouts.admin.includes.topheader')
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.admin.includes.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- /.content -->
                @yield('breadcrumb')
                @yield('content')
                @yield('modal')
                <!-- /.content -->
                <!-- ============================================================== -->
                <!-- start right sidebar -->
                <!-- ============================================================== -->
                @include('layouts.admin.includes.rightsidebar')
                <!-- ============================================================== -->
                <!-- end right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            @include('layouts.admin.includes.footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- Scripts -->
    @stack('before-scripts')
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ asset('admin/assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script type="text/javascript" src="{{ asset('admin/assets/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script type="text/javascript" src="{{ asset('admin/assets/js/waves.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="{{ asset('admin/assets/js/custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/mask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/jasny-bootstrap.js') }}"></script>
    <!--Style Switcher -->
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/bower_components/validate/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/bower_components/validate/additional-methods.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/bower_components/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 70000000
        });
        @if (Session::has('alert-message'))
            Toast.fire({
                type: "{{ Session::get('alert-class', 'info') }}",
                title: "{{ Session::get('alert-message') }}"
            });
        @endif
    </script>
    <!--  -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!--  -->
    @stack('after-scripts')
    @if (trim($__env->yieldContent('page-script')))
        @yield('page-script')
    @endif
</body>
</html>
