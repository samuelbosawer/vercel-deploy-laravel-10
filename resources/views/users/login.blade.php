<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

		<!-- App css -->
		<link href="{{asset('assets/css/bootstrap-modern.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{asset('assets/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{asset('assets/css/bootstrap-modern-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{asset('assets/css/app-modern-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <div class="auth-logo">
                                <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-sacode-adminpanel-dark.png')}}" alt="" height="50">
                                    </span>
                                </a>
            
                                <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-sacode-adminpanel-white.png')}}" alt="" height="50">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0">Sign In</h4>
                        <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                        <!-- form -->
                        <form action="/users/authenticate" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email" value="{{old('email')}}">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <a href="auth-recoverpw-2.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                <label for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                                    @error('password')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                    <div class="input-group-append" data-password="false">
                                        <div class="input-group-text">
                                            <span class="password-eye font-12"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit">Log In </button>
                            </div>
                            
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Don't have an account? <a href="/register" class="text-muted ml-1"><b>Register</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3 text-white">I love the color!</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> I've been using your theme from the previous developer for our web app, once I knew new version is out, I immediately bought with no hesitation. Great themes, good documentation with lots of customization available and sample app that really fit our need. <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <h5 class="text-white">
                        - Fadlisaad (Ubold Admin User)
                    </h5>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        
    </body>
</html>