<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
   @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
   @include('layouts.css')
   <link rel="stylesheet" href="{{ asset('assets/css/pages/authentication.css')}}">

</head>

<body>
    <!-- [ Preloader ] Start -->
    @include('layouts.preloader')
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="authentication-wrapper authentication-3">
        <div class="authentication-inner">

            <!-- [ Side container ] Start -->
            <!-- Do not display the container on extra small, small and medium screens -->
            <div class="d-none d-lg-flex col-lg-8 align-items-center ui-bg-cover ui-bg-overlay-container p-5" style="background-image: url('assets/img/bg/21.jpg');">
                <div class="ui-bg-overlay bg-dark opacity-50"></div>
                <!-- [ Text ] Start -->
                <div class="w-100 text-white px-5">
                    <h1 class="display-2 font-weight-bolder mb-4">JOIN OUR<br>COMMUNITY</h1>
                    <div class="text-large font-weight-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula ex eu gravida faucibus. Suspendisse viverra pharetra purus. Proin fringilla ac lorem at sagittis. Proin tincidunt dui et nunc ultricies dignissim.
                    </div>
                </div>
                <!-- [ Text ] End -->
            </div>
            <!-- [ Side container ] End -->

            <!-- [ Form container ] Start -->
            <div class="d-flex col-lg-4 align-items-center bg-white p-5">
                <!-- Inner container -->
                <!-- Have to add `.d-flex` to control width via `.col-*` classes -->
                <div class="d-flex col-sm-7 col-md-5 col-lg-12 px-0 px-xl-4 mx-auto">
                    <div class="w-100">

                        <!-- [ Logo ] Start -->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="ui-w-60">
                                <div class="w-100 position-relative">
                                    <img src="{{ asset('assets/img/logo-dark.png')}}" alt="Brand Logo" class="img-fluid">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Logo ] End -->

                        <h4 class="text-center text-lighter font-weight-normal mt-5 mb-0">Login to Your Account</h4>
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- [ Form ] Start -->
                        <form method="POST" action="{{ route('login') }}" class="my-5">
                         @csrf
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label d-flex justify-content-between align-items-end">
                                        <span>Password</span>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="d-block small">Forgot password?</a>
                                        @endif
                                    </label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                <div class="clearfix"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center m-0">
                                <label class="custom-control custom-checkbox m-0">
                                        <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                        <span class="custom-control-label">Remember me</span>
                                    </label>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </form>
                        <!-- [ Form ] End -->

                        <div class="text-center text-muted">
                            Don't have an account yet?
                            <a href="{{ route('register') }}">Sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- [ Form container ] End -->

        </div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
     <!-- Core scripts -->
    <script src="{{ asset('assets/js/pace.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/sidenav.js')}}"></script>
    <script src="{{ asset('assets/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('assets/js/demo.js')}}"></script>
    <script src="{{ asset('assets/js/analytics.js')}}"></script>
</body>
</html>


