<style type="text/css">
    .metismenu, .menu-title{
        color:yellow;
    }
   body[data-sidebar=dark] #sidebar-menu ul li ul.sub-menu li a {
        font-family: tahoma;
        font-weight: 500;
       font-size: 12px;
       font-family:  ;
       padding-top: 5px;
       padding-bottom: 5px;
       margin:0px;

    }
   body[data-sidebar=dark] #sidebar-menu ul li a {
        font-family: tahoma;
        font-weight: 500;
        font-size: 12px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-family:  ;

   }
</style>
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <?php
                if(auth()->guard('web')->user()->user_type == 'A'){
                ?>
                <li class="menu-title text-warning fs-6" key="t-apps">SUper Admin</li>
                <li>
                    <a href="{{ url('/capital/main/board') }}" class="waves-effect">
                        <i class="fa fa-square"></i>
                        <span key="t-chat">Dashboard</span>
                    </a>
                </li>

                 <li>
                    <a href="{{ route('add.course.form') }}" class="waves-effect">
                        <i class="fa fa-square"></i>
                        <span key="t-chat">Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('member.list') }}" class="waves-effect">
                        <i class="fa fa-square"></i>
                        <span key="t-chat">Member</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pin.request') }}" class="waves-effect">
                        <i class="fa fa-square"></i>
                        <span key="t-chat">View Requested Pin</span>
                    </a>
                </li>

               <li class="menu-title text-warning fs-6" key="t-apps">User</li>
                 <li>
                    <a href="{{ url('/capital/dashboard') }}" class="waves-effect">
                        <i class="fa fa-square"></i>
                        <span key="t-chat">Dashboard</span>
                    </a>
                </li>
                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">E-Pin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('capital/view-all-pins') }}" key="t-products">View All Pin</a></li>
                        <li><a href="{{ url('capital/view-used-pins') }}" key="t-products">View Used Pin</a></li>
                        <li><a href="{{ url('capital/view-unused-pins') }}" key="t-products">View unused Pin</a></li>
                        <li><a href="{{ url('capital/transfer/pin/page') }}" key="t-products">Transfer Pin</a></li>
                         <li><a href="{{ route('user.transfered.pin') }}" key="t-products">User Transfered Pin</a></li>
                         <li><a href="{{ route('received.pins') }}" key="t-products">Received Pins</a></li>
                        <li><a href="{{ route('buy.pin.form') }}" key="t-products">Buy Pin</a></li>
                    </ul>
                </li>

                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Profile</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('edit.profile', auth()->guard('web')->user()->member_code) }}" key="t-products">View / Edit Profile </a></li>
                        <li><a href="#" key="t-products">View / Edit Bank Detail</a></li>
                        <li><a href="#" key="t-products">Welcome Letter</a></li>
                        <li><a href="#" key="t-products">Upload Document</a></li>
                        <li><a href="#" key="t-products">Change Login Password</a></li>
                        <li><a href="#" key="t-products">Change Transaction password</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Tree</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-products">Direct Associates </a></li>
                        <li><a href="{{ route('view.tree') }}" key="t-products">Tree</a></li>
                        <li><a href="#" key="t-products">Left Tree</a></li>
                        <li><a href="#" key="t-products">Right Tree</a></li>
                        <li><a href="#" key="t-products">All Tree</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Course Booking</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-products">View Courses </a></li>
                        <li><a href="#" key="t-products">Search Purchase Course</a></li>
                        <li><a href="#" key="t-products">Team Purchase Course</a></li>
                        <li><a href="#" key="t-products">Left Course Booking</a></li>
                        <li><a href="#" key="t-products">Right Course Booking</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Income </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-products">My Matching Income </a></li>
                        <li><a href="#" key="t-products">My Total Income</a></li>
                        <li><a href="#" key="t-products">My Reward</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Support </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('query')}}" key="t-products">New Query </a></li>
                        <li><a href="#" key="t-products">Query Status</a></li>
                    </ul>
                </li>

                <li>
                    <hr>
                    <a href="{{ route('logout') }}" class="waves-effect">
                        <i class="fa fa-power-off"></i>
                        <span key="t-chat">Logout</span>
                    </a>
                </li>
                <?php
                }
                ?>
                <?php
                if(auth()->guard('web')->user()->user_type != 'A')
                {
                ?>
                <li class="menu-title text-warning fs-6" key="t-apps">User</li>
                 <li>
                    <a href="{{ url('/capital/dashboard') }}" class="waves-effect">
                        <i class="fa fa-square"></i>
                        <span key="t-chat">Dashboard</span>
                    </a>
                </li>
                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">E-Pin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li><a href="{{ url('capital/view-all-pins') }}" key="t-products">View All Pin</a></li>
                        <li><a href="{{ url('capital/view-used-pins') }}" key="t-products">View Used Pin</a></li>
                        <li><a href="{{ url('capital/view-unused-pins') }}" key="t-products">View unused Pin</a></li>
                        <li><a href="{{ url('capital/transfer/pin/page') }}" key="t-products">Transfer Pin</a></li>
                         <li><a href="{{ route('user.transfered.pin') }}" key="t-products">User Transfered Pin</a></li>
                         <li><a href="{{ route('received.pins') }}" key="t-products">Received Pins</a></li>
                        <li><a href="{{ route('buy.pin.form') }}" key="t-products">Buy Pin</a></li>
                    </ul>
                </li>

                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Profile</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('edit.profile', auth()->guard('web')->user()->member_code) }}" key="t-products">View / Edit Profile </a></li>
                        <li><a href="{{ route('bank.details') }}" key="t-products">Bank Detail</a></li>
                        <li><a href="{{ route('welcome.letter') }}" key="t-products">Welcome Letter</a></li>
                        <li><a href="{{ url('capital/upload/form') }}" key="t-products">Upload Document</a></li>
                        <!-- <li><a href="{{ route('edit.profile', auth()->guard('web')->user()->member_code) }}" key="t-products">Change Login Password</a></li> -->

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Tree</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-products">Direct Associates </a></li>
                        <li><a href="{{ route('view.tree') }}" key="t-products">Tree</a></li>
                        <li><a href="#" key="t-products">Left Tree</a></li>
                        <li><a href="#" key="t-products">Right Tree</a></li>
                        <li><a href="#" key="t-products">All Tree</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Course Booking</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('course.booked') }}" key="t-products">View Courses </a></li>

                        <li><a href="{{ route('team.course.booked') }}" key="t-products">Team Purchase Course</a></li>
                        <li><a href="{{ route('left.course.booked') }}" key="t-products">Left Course Booking</a></li>
                        <li><a href="{{ route('right.course.booked') }}" key="t-products">Right Course Booking</a></li>


                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Income </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-products">My Matching Income </a></li>
                        <li><a href="#" key="t-products">My Total Income</a></li>
                        <li><a href="#" key="t-products">My Reward</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-circle"></i>
                        <span key="t-ecommerce">Support </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('query') }}" key="t-products">New Query </a></li>
                        <li><a href="#" key="t-products">Query Status</a></li>
                    </ul>
                </li>

                <li>
                    <hr>
                    <a href="{{ route('logout') }}" class="waves-effect">
                        <i class="fa fa-power-off"></i>
                        <span key="t-chat">Logout</span>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
