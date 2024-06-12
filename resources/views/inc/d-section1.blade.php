<style type="text/css">
    img{
        width: 100%;
        height: 100%;
    }
</style>
<div class="row">

    <div class="col-xl-12">
        <div class="row">  
            <div class="col-lg-4" > 
                <a href="#">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">New Business details</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">New Left Business : <span class="ml-1">000</span></div>
                                <div class="text-dark title fs-6 fw-bold text-capitalize">New Right Business : <span class="ml-1">000</span></div>
                              
                            </div>

                            <div class="   ">
                                <div class="bg-light p-0 " style="height: 70px; width: 70px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/Update.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ route('welcome.letter') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Welcome Letter</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">You can view here your welcome letter.  </div>
                               
                              
                            </div>

                            <div class="   ">
                                <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/welcome-letter.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ route('edit.profile', auth()->guard('web')->user()->member_code) }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Edit Profile</div>
                                 
                                <div class="text-dark title fw-bold text-capitalize"  >This is where you may update<br> your profile on the website.  
                                </div> 
                              
                            </div>

                            <div class="   ">
                               <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/edit-profile.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>   
        </div>

        <!-- end row --> 
        <div class="row">  
            <div class="col-lg-4" > 
                <a href="{{ route('edit.bank.account', auth()->guard('web')->user()->member_code) }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Edit Bank Account</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may update<span class="ml-1"></div>
                                <div class="text-dark title fs-6 fw-bold text-capitalize">your Bank Account on the website.</div>
                              
                            </div>

                            <div class="   ">
                               <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/bank-ac.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ url('capital/upload/form') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Upload document</div> 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may updload <br>your document on the website. </div> 
                              
                            </div>

                            <div class="   ">
                               <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/upload-document.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ route('change.password', auth()->guard('web')->user()->member_code ) }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Change Login Pwd</div>
                                 
                                <div class="text-dark title fw-bold text-capitalize"  >This is where you may change<br> Login password on the website.  
                                </div> 
                              
                            </div>

                            <div class="   ">
                             <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/change_pass.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>   
        </div>

        <!-- end row --> 
      
        <div class="row">  
           <!--  <div class="col-lg-4" > 
                <a href="{{ route('change.txn.password', auth()->guard('web')->user()->member_code ) }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Change Txn Pwd</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may Change txn<span class="ml-1"></div>
                                <div class="text-dark title fs-6 fw-bold text-capitalize">password on the website.</div>
                              
                            </div>

                            <div class="   ">
                             <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/txn-pwd.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  
 -->
            <div class="col-lg-4" > 
                <a href="{{ route('tree.structure') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">view tree structure</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may view your  <br>tree structure on the website. </div>
                               
                              
                            </div>

                            <div class="   ">
                                <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/tree.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ route('down.line') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">View down line</div>
                                 
                                <div class="text-dark title fw-bold text-capitalize"  >This is where you may view your<br> down line on the website.  
                                </div> 
                              
                            </div>

                            <div class="   ">
                                <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/down-line.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>   
        

       
            <div class="col-lg-4" > 
                <a href="{{ route('direct.associates') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">view direct members</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may view <span class="ml-1"></div>
                                <div class="text-dark title fs-6 fw-bold text-capitalize">your direct members on the website.</div>
                              
                            </div>

                            <div class="   ">
                                <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/direct-member.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ url('capital/view-all-pins') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">list / join pins</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may view our list / <br>join pins on the website. </div>
                               
                              
                            </div>

                            <div class="   ">
                               <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/join-pins.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ route('payout.summary') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Payout Summary</div>
                                 
                                <div class="text-dark title fw-bold text-capitalize"  >This is where you may view your<br> Paout Summary on the website.  
                                </div> 
                              
                            </div>

                            <div class="   ">
                               <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/payout.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>   
              
        
            <div class="col-lg-4" > 
                <a href="{{ route('send.messages') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Send Messages</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may send messages <span class="ml-1"></div>
                                <div class="text-dark title fs-6 fw-bold text-capitalize">  on the website.</div>
                              
                            </div>

                            <div class="   ">
                               <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/send-message.png" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ route('view.messages') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">view messages</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may view messages / <br>  on the website. </div>
                               
                              
                            </div>

                            <div class="   ">
                               <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/message.jpg" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ route('course.booked') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">course booking</div>
                                 
                                <div class="text-dark title fw-bold text-capitalize"  >you can view here all details of <br>course booking<br> 
                                </div> 
                              
                            </div>

                            <div class="   ">
                                <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/courses.jpg" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>    
       
          
            <div class="col-lg-4" > 
                <a href="{{ route('seminar.meeting') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">seminar & meetings</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may view  <span class="ml-1"></div>
                                <div class="text-dark title fs-6 fw-bold text-capitalize">all details of seminars & meetings</div>
                              
                            </div>

                            <div class="   ">
                             <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/courses.jpg" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ route('logout') }}">
                <div class="card mini-stats-wid rounded-1"   >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">sign out</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may sign out <br>  on the website. </div>
                               
                              
                            </div>

                            <div class="   ">
                               <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/signout.jpg" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <!-- <div class="col-lg-4" > 
                <a href="{{ route('pin.request') }}">
                <div class="card mini-stats-wid rounded-1"   >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">View Pin Request</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">This is where you may sign out <br>  on the website. </div>
                               
                              
                            </div>

                            <div class="   ">
                               <div class="  bg-light     p-0 " style="height: 75px; width: 75px; color:#16D5FF ">
                                    <img src="{{ url('/') }}/public/logos/signo2ut.jpg" width="100%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div> -->

           

            
        </div>
      
    </div>
    <!-- end col -->  
 
    </div>