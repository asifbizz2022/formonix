@include('layout.header_links')
 
@include('inc.notification')
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
    	div.form-group{
    	    margin-top: 5px;
    	}
    </style>

    <body class="bg-light">
		<div class="account-pages my-1 pt-sm-5">
		<div class="container">
		<div class="row justify-content-center mt-2">
		<div class="col-md-8 col-lg-6 col-xl-5">
		<div class="card overflow-hidden rounded-0" style="width: 4in; margin:auto; border: thin solid black">
		<div class="mt-3">
		<div class="row">
		    <div class="col-12">
		        <div class=" ">
		            <center><span class="fs-5 text-uppercase fw-bold">Registration Form</span></center>
		        </div>
		    </div>

		</div>
		</div>
		<div class="card-body pt-3">
        <div class="p-2">
        <form class="form" method="post" action="{{ route('user.register') }}">@csrf
        <div class="form-group">
             <label>Pin No</label>
               <input type="" name="member_code" class="form-control form-control-sm pin-no" >
               @error('member_code')
               <span class="text-danger"> 
                {{$message}}
               </span>
               @enderror
        </div>
        <div class="form-group">
            <label>Our Packages</label>
               <input type="" name="packages" class="form-control form-control-sm package border-secondary" readonly>
             <span class="package text-danger"></span>
        </div>
        <div class="form-group">
           <label>Sponser Id</label>
            <input type="" name="sponser_id" class="form-control form-control-sm sponser_id">
        </div>
        <div class="form-group">
              <label>Sponser Name</label>
               <input type="" name="sponser_name" class="form-control form-control-sm sponser_name border-secondary" readonly>
        </div>
        <div class="form-group">
          <label>Position</label>
            <select class="form-control form-control-sm" name="position">
               <option value="L">Left</option>
               <option value="R">Right</option>
             </select>
        </div>
        <div class="form-group">
            <label>Your Name</label>
             <input type="" name="name" class="form-control form-control-sm">
        </div>
        <div class="form-gruop">
            <label>Date of Birth</label>
             <input type="date" name="dob" class="form-control form-control-sm">
        </div>
        <div class="form-group">
          <label>Gender</label>
              <select class="form-control form-control-sm" name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Others</option>
              </select>
        </div>
        <div class="form-group">
            <label>Mobile No</label>
            <input type="" name="contact" class="form-control form-control-sm" minlength="10" maxlength="10" value="{{old('contact')}}">
               @error('contact')
               <span class="text-danger"> {{$message}}</span>
               @enderror
        </div>
        <div class="form-group">
            <label>E-Mail Id</label>
              <input type="email" name="email" class="form-control form-control-sm" value="{{ old('email')}}">
               @error('email')
               <span class="text-danger"> {{$message}}</span>
               @enderror
        </div>
        <div class="form-group">
             
              <input type="checkbox" name="agree" required>
                 <label>I Agree <span><a href="#">Terms and Conditions</a></span></label>
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-warning btn-sm   text-dark fw-bold ">Register</button>
             <a href="{{ url('/') }}" class="btn btn-warning btn-sm  fw-bold  text-dark ">Login</a>
        </div> 
      	</form> 
       	</div> 
    	</div>
		</div>
		<div class="mt-5 text-center"> </div> 
		</div>
		</div>
		</div>
		</div>
 
@include('layout.footer_links')
<script type="text/javascript">
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('.pin-no').on('keyup', function(){
      var id = $(this).val();
      $.ajax({
        url : '{{ route("get.package") }}',
        method : 'post',
        data : { 'id' : id},
        dataType : 'json',
        success : function(response){ 
 				console.log(response.course[0].course_name, response.member[0].member_code, response.member[0].name);
	          $('.package').val(response.course[0].course_name);
	          // $('.sponser_id').val(response.member[0].member_code);
	          // $('.sponser_name').val(response.member[0].name);  
        	},
        error : function(response){ 

        }
      });
    });
    //sponser get
    $(document).on('keyup', '.sponser_id', function(){
        var id = $(this).val();

            $.ajax({
                url : '{{ route("sponser") }}', 
                method : 'POST', 
                data : { 'id' : id },
                dataType : 'json', 
                success : function(response){
                    console.log(response.data[0].name);
                    $('.sponser_name').val(response.data[0].name);
                }
            });

    });
    
 });
</script>
