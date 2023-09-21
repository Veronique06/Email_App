<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>{{config('app.name')}} - Complete Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

    <!--Form Wizard-->
    <link rel="stylesheet" href="{{asset('plugins/jquery-steps/jquery.steps.css')}}">

     <!-- App css -->
     <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Left Sidenav -->
    @include('includes.menuUser')
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        <!-- Top Bar Start -->
        @include('includes.head')
        <!-- Top Bar End -->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Complèter votre profil</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dastone</a></li>
                                        <li class="breadcrumb-item active">Finaliser votre inscription</li>
                                    </ol>
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                        <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                        <span class="" id="Select_date">Jan 11</span>
                                        <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
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
                <!--end row-->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Complèter votre profil</h4>
                                <p class="text-muted mb-0">
                                    Pour une meilleur utilisation de notre système, nous vous avons besoins de quelques informations.
                                </p>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <form id="form-vertical" class="form-horizontal form-wizard-wrapper" method="POST">
                                    <h3>Détails</h3>
                                    <fieldset>
                                        <div class="form-group ">
                                            <label for="example-email-input1" class="col-form-label">Téléphone</label>
                                            <div class="">
                                                <input class="form-control" name="telephone" type="text" value="{{ old('telephone') }}"
                                                    id="example-email-input1" placeholder="">
                                            </div>
                                              @error('telephone')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group ">
                                            <label for="example-password-input1" class="col-form-label">Adresse</label>
                                            <div class="">
                                                <input class="form-control" name="adresse" value="{{ old('adresse') }}" type="text" id="example-password-input1"
                                                    placeholder="">
                                            </div>
                                              @error('adresse')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group ">
                                            <label for="example-password-input01" class="col-form-label">Date de naissance
                                                </label>
                                            <div class="">
                                                <input class="form-control" name="date" type="date"
                                                    id="example-password-input01" value="{{ old('date') }}" placeholder="">
                                            </div>
                                            @error('date')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                        </div>
                                        <!--end form-group-->

                                        <div class="custom-control custom-checkbox my-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I accept the terms
                                                and conditions</label>
                                        </div>
                                    </fieldset>
                                    <!--end fieldset-->

                                    <h3>Autres infos</h3>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-12 col-lg-6">

                                            <select class="form-control custom-select" name="account_type">
                                                <option selected disabled>Sélectionner</option>
                                                <option value="User" {{ old('account_type') == "User" ? 'selected' : '' }} >User</option>
                                                <option value="Society"  {{ old('account_type') == "Society" ? 'selected' : '' }} >Society</option>
                                            </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <input class="form-control" name="pays" value="{{ old('pays') }}" type="text" id="example-email-input3"
                                                    placeholder="Pays">
                                            </div>
                                            @error('pays')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                 <label for="exampleInputFile">Photo</label>
                                                <input type="file" name="photo" value="{{ old('photo') }}" id="exampleInputFile">
                                            </div>
                                              @error('photo')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="about"
                                                placeholder="A propos de vous"></textarea>

                                                @error('about')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-check  ms-1">
                                            <input class="form-check-input" type="radio" name="sexe" value="{{ old('homme') }}"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                               Homme
                                            </label>
                                        </div>
                                        <div class="form-check  ms-1">
                                            <input class="form-check-input" type="radio" name="sexe" value="{{ old('femme') }}"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Femme
                                            </label>
                                        </div>
                                    </fieldset>
                                    <!--end fieldset-->
                                    <h3>Confirmer</h3>
                                    <fieldset>
                                        <p>I agree with the Terms and Conditions.</p>
                                    </fieldset>
                                    <!--end fieldset-->
                                </form>
                                <!--end form-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div><!-- container -->

            <footer class="footer text-center text-sm-start">
                &copy; <script>
                    document.write(new Date().getFullYear())

                </script> Dastone <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
            </footer>
            <!--end footer-->
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

     <script src="{{asset('plugins/jquery-steps/jquery.steps.min.js')}}"></script>
     <script src="{{asset('assets/pages/jquery.form-wizard.init.js')}}"></script>

     <!-- App js -->
     <script src="{{ asset('assets/js/app.js')}}"></script>




</body>

</html>

