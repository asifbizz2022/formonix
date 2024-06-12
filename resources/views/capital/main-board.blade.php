
@extends('layout.app')
@section('title')
 
    Formonix capital 
 
@endsection
@section('content')
<style type="text/css">
    .card{
        padding: 5px;
        height: 1in;

    }
    .card.mini-stats-wid >div >div >p {
        color: red;
    }
     
    .card:hover{
       background: yellow;
       color:white;
    }
    .bg-light img:hover{
         transform: scale(1.5);
         transition: all .3s ease-in-out;
    }
</style>
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
                <a href="{{ route('new.business.details') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Member details</div>
                                 
                                <div class="text-dark title fs-6 fw-bold text-capitalize">New Left Business : <span class="ml-1">123000</span></div>
                                <div class="text-dark title fs-6 fw-bold text-capitalize">New Right Business : <span class="ml-1">123000</span></div>
                              
                            </div>

                            <div class="   ">
                                <div class="bg-light p-0 " style="height: 70px; width: 70px; color:#16D5FF ">
                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>  

            <div class="col-lg-4" > 
                <a href="{{ url('capital/view/pin/request') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Pin Details</div>
                                 
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
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Payout</div>
                                 
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

             <div class="col-lg-4" > 
                <a href="{{ url('capital/add/course') }}">
                <div class="card mini-stats-wid rounded-1"  >
                    <div class="card-body"> 
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <div class=" fw-bold title fs-4 text-capitalize"  style="color:#16D5FF ;">Course</div>
                                 
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
    </div>
</div>
<!-- end row --> 
<!-- end row second section started -->

@endsection
