<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from mannatthemes.com/dastone/default/auth-recover-pw.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 09:57:49 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dastone - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Recover-pw page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="{{ asset('assets/images/logo-sm-dark.png')}}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Reset Password For Dastone</h4>   
                                        <p class="text-muted  mb-0">Enter your Email and instructions will be sent to you!</p>  
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if (session('status'))
                                    
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>     
                                    @endif
                                    <p>Vous devez vérifier votre adresse email</p>
                                    <form class="form-horizontal" action="{{route('verification.send')}}" method="POST"> 
                                        @csrf               
                                  
                                          <div class="form-group mb-2">
                                       
                                            <div class="input-group">                                                                                         
                                                <input type="submit" class="form-control" name="login" id="login" value="Resend">
                                            </div>    
                                                                         
                                        </div>
                                      <!--end form-group-->                           
                                    </form><!--end form-->
                                    <p class="text-muted mb-0 mt-3">Remember It ?  <a href="{{ route('login') }}" class="text-primary ms-2">Sign in here</a></p>
                                </div>
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Mannatthemes © <script>
                                        document.write(new Date().getFullYear())
                                    </script></span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Recover-pw page -->

        


        <!-- jQuery  -->
       <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/feather.min.js')}}"></script>
        <script src="{{ asset('assets/js/simplebar.min.js')}}"></script>

        
    </body>


<!-- Mirrored from mannatthemes.com/dastone/default/auth-recover-pw.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 09:57:49 GMT -->
</html>