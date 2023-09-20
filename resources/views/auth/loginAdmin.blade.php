<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from mannatthemes.com/dastone/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 09:57:49 GMT -->
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

        <!-- Log In page -->
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
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started Dastone</h4>   
                                        <p class="text-muted  mb-0">Sign in to continue to Dastone.</p>  
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                        <div class="tab-pane p-3">                                        
                                            <form class="form-horizontal" action="{{route('admin.login')}}" method="post">
                                                @csrf
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Email</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="">
                                                    </div>
                                                       @error('email')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror                                    
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Mot de passe</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="">
                                                    </div>
                                                        @error('password')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror                               
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group row my-3">
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                            <label class="form-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                        </div>
                                                    </div><!--end col--> 
                                                    <div class="col-sm-6 text-end">
                                                        <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                                    </div><!--end col--> 
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Se connecter <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            <div class="m-3 text-center text-muted">
                                                <p class="mb-0">Don't have an account ?  <a href="{{ route('register')}}" class="text-primary ms-2">Free Register</a></p>
                                            </div>
                                            <div class="account-social">
                                                <h6 class="mb-3">Or Login With</h6>
                                            </div>
                                            <div class="btn-group w-100">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Facebook</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Twitter</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Google</button>
                                            </div>
                                        </div>
                                        {{-- <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">
                                            <form class="form-horizontal auth-form" action="{{route('register')}}">
                                                @csrf
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Username</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="">
                                                    </div>                                    
                                                </div><!--end form-group--> 
            
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="useremail">Email</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="">
                                                    </div>                                    
                                                </div><!--end form-group-->
                    
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Mot de passe</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="">
                                                    </div>                               
                                                </div><!--end form-group--> 
            
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="conf_password">Confirmer mot de passe</label>                                            
                                                    <div class="input-group">                                   
                                                        <input type="password" class="form-control" name="conf-password" id="conf_password" placeholder="">
                                                    </div>
                                                </div><!--end form-group-->
                                                
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="mo_number">Téléphone</label>                                            
                                                    <div class="input-group">                                 
                                                        <input type="text" class="form-control" name="mobile number" id="mo_number" placeholder="">
                                                    </div>                               
                                                </div><!--end form-group-->  
                    
                                                <div class="form-group row my-3">
                                                    <div class="col-sm-12">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess2">
                                                            <label class="form-label text-muted" for="customSwitchSuccess2">You agree to the Dastone <a href="#" class="text-primary">Terms of Use</a></label>
                                                        </div>
                                                    </div><!--end col-->                                             
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="button">S'inscrire <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            <p class="my-3 text-muted">Already have an account ?<a href="{{ route('login')}}" class="text-primary ms-2">Log in</a></p>                                                    
                                        </div> --}}
                                   
                                </div><!--end card-body-->
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
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/feather.min.js')}}"></script>
        <script src="{{ asset('assets/js/simplebar.min.js')}}"></script>

        
    </body>


<!-- Mirrored from mannatthemes.com/dastone/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 09:57:49 GMT -->
</html>