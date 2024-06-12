<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Maintenance Page | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/public/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ url('/') }}/public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('/') }}/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('/') }}/public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
       <center>
            <div class="home-btn   d-sm-block ">
                <a href="{{ url('capital/dashboard') }}" class="text-dark"><i class="fas fa-home h2"></i><br>Back to Dashboard</a>
            </div>
       </center>

        <section class="my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-12  ">
                        <div class="home-wrapper">

                            <div class="row  ">
                              @include('inc/notification')
                            </div>
                            <h3 class="mt-5 text-uppercase">Enter your Query here</h3>
                            <form action="{{ route('submit.query') }}"   method="post">@csrf
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-sm rounded-0">
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-sm rounded-0" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label for="">Contact</label>
                                    <input type="number" name="contact" value="{{ old('contact') }}" class="form-control form-control-sm rounded-0" required>
                                  </div>
                                </div>
                              </div>


                              <div class="form-group">
                                <label for="">Query</label>
                                <textarea name="query" rows="8" cols="80" class="form-control rounded-0 "></textarea>
                              </div>
                              <div class="form-group mt-1">
                                <button type="submit" class="btn btn-success rounded-0" name="button">Submit Query</button>
                              </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- JAVASCRIPT -->
        <script src="{{ url('/') }}/public/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
