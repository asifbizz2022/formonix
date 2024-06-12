<!DOCTYPE html>
@include('frontend.layout.header')

<body>
    <!-- Spinner Start -->
    
    <!-- Spinner End --> 

    <!-- Navbar Start -->
@include('frontend.layout.navbar')
    <!-- Navbar End -->
 @yield('content')
 @include('frontend.layout.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
 @include('frontend.layout.footer-files')
</body>

</html>