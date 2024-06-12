 @extends('frontend.layout.app')
 @section('content')
    <!-- Navbar End --> 
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="display-4 mb-3 animated slideInDown">Make Better Life With <span style="color:orange">Formonix Captial</span></h5>
                    <p class="animated slideInDown text-dark fw-bold">No one should be denied the opportunity to get an education and increase their earning potential based solely on their inability to pay for a college education.</p>
                     
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="{{ url('/') }}/public/frontend/img/people.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End --> 
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ url('/') }}/public/frontend/assets/img/corporate.jpg" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">About Us</h1>
                        <p class="text-primary fs-5 mb-4">The Most Trusted Learning and Earning Platform</p>
                        <p class='text-justify'>Formonix Capital offers a range of affordable educational programs designed to enhance your skills in various domains, with a limited-time offer on GST and income tax filing knowledge. Additionally, by participating in their earning programs, you can potentially earn significant income through referrals and network building.
                        </p>
                       
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Learn Computer Knowledge</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Learn Child Education</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Learn Meditation and Yoga</span>
                        </div>
                         <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Refer and Earn</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Team Building</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Network is Net Worth</span>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> 
    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/public/frontend/assets/img/icon-9.png" alt="">
                    <h1 class="display-4" data-toggle="counter-up">123456</h1>
                    <p class="fs-5 text-primary mb-0">Today Joining</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/public/frontend/assets/img/icon-10.png" alt="">
                    <h1 class="display-4" data-toggle="counter-up">123456</h1>
                    <p class="fs-5 text-primary mb-0">Monthly Joining</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/public/frontend/assets/img/icon-2.png" alt="">
                    <h1 class="display-4" data-toggle="counter-up">123456</h1>
                    <p class="fs-5 text-primary mb-0">Total Joining</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End --> 
    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Why Us!</h1>
                <p class="text-primary fs-5 mb-5">The Best In The Formonix Capital</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{ url('/') }}/public/frontend/assets/img/icon-7.png" alt="">
                        <div class="ps-4" style="font-size:12px;">
                            <h5 class="mb-3">Learn Computer Knowledge</h5>
                            <span> 
                                <ul>
                                    <li>Description: Comprehensive computer knowledge program.</li>
                                    <li>Offer Price : ₹199 + GST (Course Price ₹1999).</li>
                                    <li>Details: This course offers in-depth training in computer skills essential for various professional and personal applications.</li>
                                </ul>
                            </span>  <a href="contact.php">Join Now <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{ url('/') }}/public/frontend/assets/img/icon-6.png" alt="">
                        <div class="ps-4" style="font-size:12px;">
                            <h5 class="mb-3">Learn Child Education</h5>
                            <span> 
                                <ul>
                                    <li>Description: High-quality educational program for children.</li>
                                    <li>Cost: ₹199 + GST (formerly ₹1999).</li>
                                    <li>Details: The program features excellent video and audio content aimed at enhancing children's educational experience.</li>
                                </ul>
                            </span>  <a href="contact.php">Join Now <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{ url('/') }}/public/frontend/assets/img/icon-5.png" alt="">
                         <div class="ps-4" style="font-size:12px;">
                            <h5 class="mb-3">Learn Meditation and Yoga</h5>
                            <span> 
                                <ul>
                                    <li>Description: Holistic wellness program focusing on meditation and yoga..</li>
                                    <li>Cost: ₹199 + GST (formerly ₹1999).</li>
                                    <li>Details: This course provides comprehensive guidance on meditation and yoga practices to promote physical and mental well-being..</li>
                                </ul>
                            </span>  <a href="contact.php">Join Now <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{ url('/') }}/public/frontend/assets/img/icon-4.png" alt="">
                        <div class="ps-4" style="font-size:12px;">
                            <h5 class="mb-3">Refer and Earn</h5>
                            <span> 
                                <ul>
                                    <li>Potential Earnings: Up to ₹17 crore.</li>
                                    <li>Details: Refer others to join Formonix Capital’s programs and earn substantial rewards. The more you refer, the higher your earnings.</li>
                                     
                                </ul>
                            </span>  <a href="contact.php">Join Now <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{ url('/') }}/public/frontend/assets/img/icon-3.png" alt="">
                           <div class="ps-4" style="font-size:12px;">
                            <h5 class="mb-3">Team Building</h5>
                            <span> 
                                <ul>
                                    <li>Description: Expand your network by building a large team..</li>
                                    <li>Benefits: Increased earnings and a stronger support system for your business endeavors.</li>
                                     
                                </ul>
                            </span>  <a href="contact.php">Join Now <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{ url('/') }}/public/frontend/assets/img/icon-8.png" alt="">
                           <div class="ps-4" style="font-size:12px;">
                            <h5 class="mb-3">Network is Net Worth</h5>
                            <span> 
                                <ul>
                                    <li>Concept: Your network's value determines your net worth.</li>
                                    <li>Strategy: Focus on creating and maintaining a robust network to maximize your financial success and opportunities within Formonix Capital.</li>
                                     
                                </ul>
                            </span>
                            <a href="contact.php">Join Now <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End --> 
    <!-- Roadmap Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Roadmap</h1>
                <p class="text-primary fs-5 mb-5">We Translate Your Dream Into Reality</p>
            </div>
            <div class="owl-carousel roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>June 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>July 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>August 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>September 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>October 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>November 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                  <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>December 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                  <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>January 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                  <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>February 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                  <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>March 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
            </div>
            
        </div>
    </div> 

    <!-- Token Sale Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">
                    <a href="contact.php">Join Now</a>
                    </h1>
                <p class="text-primary fs-5 mb-5">Offers Ending</p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">30</h1>
                        <span class="text-primary fs-5">Days</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">24</h1>
                        <span class="text-primary fs-5">Hours</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">59</h1>
                        <span class="text-primary fs-5">Minutes</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">59</h1>
                        <span class="text-primary fs-5">Seconds</span>
                    </div>
                </div>
                <div class="col-12 text-center py-4">
                    <a class="btn btn-primary py-3 px-4 fw-bold" href="contact.php">Click to Join Offer Price 199+GST </a>
                </div>
                <div class="col-12 text-center">
                    <img class="img-fluid m-1" src="{{ url('/') }}/public/frontend/assets/img/payment-1.png" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="{{ url('/') }}/public/frontend/assets/img/payment-2.png" alt="" style="width: 50px;">
                   
                       <img class="img-fluid m-1" src="{{ url('/') }}/public/frontend/assets/img/gateway.png" alt="" style="width: 100px;">
                </div>
            </div>
        </div>
    </div>
@endsection