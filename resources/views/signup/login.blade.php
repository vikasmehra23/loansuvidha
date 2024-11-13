<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Loan Shuvidhaa - One stop solutiion for all services">
    <meta name="keywords" content="loan-assistance,business-loan,vehicle-loan, property-loan, home-loan, insurance and investment.">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Loan Shuvidhaa - One stop solutiion for all services</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav_icon_1.png') }}">
    <!-- Start css -->
    <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">


                                    @if(session('error'))
                                        <div class="alert alert-danger alert-dismissable fade show">
                                            <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                                            {{session('error')}}
                                        </div>
                                    @endif
                                    <form action="{{ route('authenticate') }}" method="post">
                                        @csrf
                                        <div class="form-head">
                                            <a href="{{ url('/') }}" class="logo"><img src="{{ asset('assets/img/logo/top_design_logo.png') }}" class="img-fluid" alt="logo"></a>
                                        </div>                                        
                                        <h4 class="text-primary my-4">Log in !</h4>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="username" name="email" value="{{ old('email') }}" placeholder="Enter Email here" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Enter Password here" required>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>                                
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="forgot-psw"> 
                                                <a id="forgot-psw" href="javascript:void(0)" class="font-14">Forgot Password?</a>
                                              </div>
                                            </div>
                                        </div>                          
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>
                                    </form>
                                    <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div>
                                    <div class="social-login text-center">
                                        {{-- <button type="submit" class="btn btn-primary-rgba font-18"><i class="mdi mdi-facebook mr-2"></i>Facebook</button>
                                        <button type="submit" class="btn btn-danger-rgba font-18"><i class="mdi mdi-google mr-2"></i>Google</button>
                                    </div> --}}
                                    <p class="mb-0 mt-3">Don't have a account? <a href="javascript:void(0)">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="{{ asset('assets/admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/js/modernizr.min.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/js/detect.js')}}"></script>
    <script src="{{ asset('assets/admin/assets/js/jquery.slimscroll.js')}}"></script>
    <!-- End js -->
</body>
</html>