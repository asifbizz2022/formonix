 @extends('frontend.layout.app')
 @section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/corporate.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-top">
                <div class="col-6">
                    <img src='{{ url("/") }}/public/frontend/img/about.jpg' width="500">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">About Us</h1>
                        <p class="text-primary fs-5 mb-4"> </p>
                        
                        <p class="mb-4" style="text-align: justify">
                        Welcome to Formonix Capital, 
                        the most trusted learning and earning platform dedicated to empowering individuals with essential skills and providing opportunities for financial growth.
                        </p>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
        <!-- mission Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-top">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Our Mission</h1>
                        <p class="text-primary fs-5 mb-4"> </p>
                        
                        <p class="mb-4" style="text-align: justify">
                       At Formonix Capital, our mission is to make high-quality education and income-generating opportunities accessible to everyone. We believe in the power of knowledge and networking as the cornerstone of personal and professional success.
                        </p>
                        
                      
                    </div>
                </div>
                 <div class="col-6">
                      <img src='{{ url("/") }}/public/frontend/img/mission.jpg' width="500">
                </div>
            </div>
        </div>
    </div>
    <!-- mission End -->
    
        <!-- offer Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-top">
                 <div class="col-6">
                      <img src='{{ url("/") }}/public/frontend/img/weoffer.jpg' width="500">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">What we Offer</h1>
                        <p class="text-primary fs-5 mb-4" style="text-align: justify"> </p>
                        
                        <p class="mb-4" style="text-align: justify">
                      What We Offer
Educational Programs
We offer a diverse range of affordable educational programs designed to enhance your skills and knowledge across various domains. Our courses are crafted by experts to ensure you receive the best learning experience. Some of our key educational offerings include:

Learn Computer Knowledge: Master the fundamentals of computing, from basic computer operations to advanced programming and software development.
Learn Child Education: Gain insights into effective child education strategies, early childhood development, and modern teaching techniques.
Learn Meditation and Yoga: Discover the benefits of meditation and yoga, and learn practices to improve your mental and physical well-being.
For a limited time, we are also offering specialized knowledge on GST and income tax filing, ensuring you stay informed about essential financial regulations and processes.
                        </p>
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offer End -->
    
            <!-- earnings Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-top">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Earning Programms</h1>
                        <p class="text-primary fs-5 mb-4"> </p>
                        
                        <p class="mb-4" style="text-align: justify">
                     Earning Programs
Formonix Capital is not just about learning; it's also about earning. By participating in our earning programs, you can potentially earn significant income through referrals and network building. Our earning opportunities include:

Refer and Earn: Share our platform with your friends, family, and professional network to earn referral bonuses. The more you refer, the more you earn.
Team Building: Develop and lead your own team to maximize your earning potential. Team building helps you create a supportive network that contributes to your financial growth.
Network is Net Worth
At Formonix Capital, we believe in the adage "Network is Net Worth." By building a strong network, you can unlock countless opportunities for personal and professional growth. Our platform encourages collaboration, knowledge sharing, and mutual support, helping you leverage your network to achieve your goals.

Why Choose Formonix Capital?
Trusted Platform: We have a proven track record of providing quality education and earning opportunities.
Expert Guidance: Learn from industry experts and experienced professionals.
Flexible Learning: Access our courses and programs from anywhere, at any time, to suit your schedule.
Community Support: Join a community of like-minded individuals dedicated to learning and earning.
Join Formonix Capital today and take the first step towards enhancing your skills and boosting your income. Together, let's create a future where knowledge and financial stability are within everyone's reach.
                        </p>
                        
                      
                    </div>
                </div>
                 <div class="col-6">
                      <img src='{{ url("/") }}/public/frontend/img/earning.jpg' width="500">
                </div>
            </div>
        </div>
    </div>
    @endsection 