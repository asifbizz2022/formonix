<!doctype html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8" />
        <title>Formonix Capital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->

        <!-- Bootstrap Css -->
        <link href="{{ url('/') }}/public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('/') }}/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('/') }}/public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" /> 
    </head>

    <style type="text/css">
    	body{
    		background-image: url("{{ url('/') }}/public/img/wh23.jpg") ;
    		background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%; /* Ensures the container spans the full width */
            height: 300px; /* Set the height as needed */

    	}
    	input.form-control, .btn{
    		border-radius: 0px;

    	}
    </style>

    <body class="bg-info">
        <div class="account-pages my-1 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center mt-2">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden rounded-0" style="width: 4in; margin:auto; border: thin solid white">
                            <div class="mt-3">
                               <div class="row">
                                    <div class="col-10">
                                        <div class="px-4 w-100">
                                            <span class="fs-5 text-uppercase">Admin Login</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body pt-3">
                                <div class="p-2">
                                    <form class="form-horizontal" method="post" action="{{ url('login/check') }}">
                                    	@csrf

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Phone Number</label>
                                            <input type="" name="contact" class="form-control form-control-sm" id="username" placeholder="Enter Contact" value="{{ old('contact') }}">
                                            @error('contact')
                                            <p class="text-danger">
                                            	{{ $message }}
                                            </p>
                                            @enderror
                                        </div>

                                       <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup border">
                                                <input type="password" name="password" class="form-control form-control-sm  " placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light btn-sm" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                            @error('password')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button type="submit" class="btn btn-warning text-black waves-effect waves-light btn-sm" type="submit">Log In</button>
                                        </div>


                                        <div class="mt-4 text-center">
                                            <a href="{{ route('admin.register.form') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                            <p>Don't have an account ? <a href="{{ route('admin.register.form') }}" class="fw-medium text-primary"> Signup now </a> </p>

                                        </div>

                                        <div class="text-danger text-center fw-bold fs-4 text-uppercase">
                                        	@if(session()->has('message'))
                                        	{{ session()->get('message') }}
                                        	@endif
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="{{ url('/') }}/public/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/node-waves/waves.min.js"></script>

        <!-- App js -->
        <script src="{{ url('/') }}/public/assets/js/app.js"></script>
    </body>
</html>
