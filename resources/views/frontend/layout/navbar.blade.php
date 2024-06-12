 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="{{ route('frontend') }}" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary">
                <img src="{{ url('/') }}/public/frontend/img/fc.jpg" class="img-fluid me-2 rounded"   alt=""
                    style="width: 45px;">Formonix Capital</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="{{ route('frontend') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/aboutus') }}" class="nav-item nav-link">About</a>
                <a href="{{route('user.login.form')}}" class="nav-item nav-link">Login</a>
                <a href="{{ route('user.register.form') }}" class="nav-item nav-link">Join Now</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-instagram"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-youtube"></i></a>
                         <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-whatsapp"></i></a>
              
            </div>
        </div>
    </nav>