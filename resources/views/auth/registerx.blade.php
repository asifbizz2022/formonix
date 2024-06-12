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
    	.form-control, .btn{
    		border-radius: 0px;
            
    	}
        select {
            height: 35px; 
            display:block;
           
        }
    </style>

    <body class="bg-dark">
        <div class="account-pages  pt-sm-5">
            <div class="container">
                <div class="row justify-content-center mt-1">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden rounded-0"  >
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="px-4 w-100">
                                            <span class="fs-5 text-uppercase">Formonix Capital Registration</span> 
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="card-body pt-3"> 
                                <div class="auth-logo"> 
                                  
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="post" action="{{ route('capital.register') }}">
                                    	@csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">REferal Code (Optional)</label>
                                            <input type="text" name="referal_code" class="form-control" id="username" placeholder="Enter Referal Code" value="{{ old('referal_code') }}">
                                            @error('referal_code')
                                            <p class="text-danger">
                                            	{{ $message }}
                                            </p>
                                            @enderror
                                        </div>
        								 <div class="mb-3">
                                            <label for="username" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="username" placeholder="Enter username" value="{{ old('email') }}">
                                            @error('name')
                                            <p class="text-danger">
                                            	{{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="username" placeholder="Enter username" value="{{ old('email') }}">
                                            @error('email')
                                            <p class="text-danger">
                                            	{{ $message }}
                                            </p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Contact</label>
                                            <input type="text" name="contact" class="form-control" id="username" placeholder="Enter username" value="{{ old('contact') }}">
                                            @error('contact')
                                            <p class="text-danger">
                                            	{{ $message }}
                                            </p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Select Course</label>
                                            <select name="course" id="" class=" w-100">
                                                @foreach($courses as $row)
                                                <option value="{{ $row->course_code }}">{{$row->course_name}}</option>
                                                @endforeach         
                                            </select>
                                        </div>
                
                                        <div class="row     ">
						                    <div class="col">
						                            <label for="password" class="col-md-4 col-form-label  ">{{ __('Password') }}</label>
						                            <input id="password"  placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

						                            @error('password')
						                                <p class="text-danger">
			                                            	{{ $message }}
			                                            </p>
						                            @enderror    
						                    </div>
						                </div>
						                <div class="row">
						                    <div class="col">
						                    <label for="password-confirm" class="col-md-4 col-form-label  ">{{ __('Confirm Password') }}</label>
						                            <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						                       
						                        </div>
						                    </div>

                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>
                                        
                                        <div class="mt-3 d-grid">
                                            <button type="submit" class="btn btn-warning text-black waves-effect waves-light" type="submit">Register</button>
                                        </div>
            
                                        
                                        <div class="mt-4 text-center">
                                            
                                            <p>Already have an account ? <a href="{{ url('/login') }}" class="fw-medium text-primary"> Login </a> </p>
                                        
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
