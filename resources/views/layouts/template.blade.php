<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>{{config('app.name')}} - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- jvectormap -->
        <link href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="">
        <!-- Left Sidenav -->
        @include('includes.menuAdmin')
        <!-- end left-sidenav-->


        <div class="page-wrapper">
            <!-- Top Bar Start -->
            @include('includes.headAdmin')
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">@yield('title')</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{config('app.name')}}</a></li>
                                            <li class="breadcrumb-item active">@yield('title')</li>
                                        </ol>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="ay-name" id="Day_Name">Aujourd'hui:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end page-title-box-->
                        </div>
                        <!--end col-->
                    </div>

                    @yield('contenu')

                </div>


                <footer class="footer text-center text-sm-start">
                    &copy; <script> document.write(new Date().getFullYear())
                    </script> {{config('app.name')}} <span class="text-muted d-none d-sm-inline-block float-end">Conçu par <i
                            class="mdi mdi-heart text-danger"></i> by {{config('app.author')}}</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->




        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/feather.min.js')}}"></script>
        <script src="{{ asset('assets/js/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/js/moment.js')}}"></script>
        <script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{ asset('plugins/apex-charts/apexcharts.min.js')}}"></script>
        <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{ asset('assets/pages/jquery.analytics_dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>

    </body>

</html>
