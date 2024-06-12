@extends('layout.app')
@section('title')
edit Profile
@endsection
@section('content')
@include('inc/notification')
<style type="text/css">
	table.profile tr td{
		text-transform: uppercase;
		 
		font-size: 11px;
		font-weight: bold;
		line-height: 30px;
		text-align: ;
	}
	table.profile thead  {
		 text-transform: uppercase;
	}
	div.image{
		width: 100px ;
		
	}

</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">  
             
				<div class="row">
					<div class="col-md-6 col-sm-12 col-lg-6"> 
						<form class="form" action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">@csrf
							@foreach($data as $row)
							<input type="hidden" name="table_id" value="{{$row->id}}">
							<table class="w-100 profile  table table-sm	border">
								<thead>
									 
										<th colspan="2">Personal details</th>
									 
								</thead>
								<tr>
									<td>Your Name</td>
									<td>
										<input class="form-control form-control-sm" name="name" value="{{$row->name}}">
									</td>
								</tr>
								<tr>
									<td>Father/Husband's Name</td>
									<td>
										<input class="form-control form-control-sm" name="father_husband_name" value="{{$row->father_husband_name}}">
									</td>
								</tr>
								<tr>
									<td>Date of birth</td>
									<td>
										<input type="date" class="form-control form-control-sm" name="dob" value="{{$row->dob}}">
									</td>
								</tr>
								<tr>
									<td>gender</td>
									<td>
										<div class="row">
											<div class="col"> 
												<input type="radio" name="gender" value="M" class=" ">
												<label>Male</label> 
											</div>
											<div class="col"> 
												<input type="radio" name="gender" value="F" class=" ">
												<label>Female</label> 
											</div>
										</div>
										
									</td>
								</tr>
							 
								<thead> 
										<th colspan="2">Contact details</th> 
								</thead>
							  
								<tr>
									<td>Address</td>
									<td>
										<input class="form-control form-control-sm" name="address" value="{{$row->address}}">
									</td>
								</tr>
								<tr>
									<td>State</td>
									<td>
										<input class="form-control form-control-sm" name="state" value="{{$row->state}}">
									</td>
								</tr>
								<tr>
									<td>district</td>
									<td>
										<input  class="form-control form-control-sm" name="district" value="{{$row->district}}">
									</td>
								</tr>
								<tr>
									<td>city</td>
									<td>
										<input  class="form-control form-control-sm" name="city" value="{{$row->city}}">
									</td>
								</tr>
								<tr>
									<td>pincode</td>
									<td>
										<input  class="form-control form-control-sm" name="pincode" value="{{$row->pincode}}">
									</td>
								</tr>
								<tr>
									<td>Contact No</td>
									<td>
										<input  class="form-control form-control-sm" name="contact" value="{{$row->contact}}">
									</td>
								</tr>
								<tr>
									<td>E-Mail id</td>
									<td>
										<input  class="form-control form-control-sm" name="email" value="{{$row->email}}">
									</td>
								</tr>
								 
								  
						 
								<thead>
									 
										<th colspan="2">Nominee details</th>
									 
								</thead>
						 
								<tr>
									<td>nominee name</td>
									<td>
										<input class="form-control form-control-sm" name="nominee_name" value="{{$row->nominee_name}}">
									</td>
								</tr>
								<tr>
									<td>relation</td>
									<td>
										<input class="form-control form-control-sm" name="relation" value="{{$row->relation}}">
									</td>
								</tr>
								<!-- <tr>
									<td>transaction password</td>
									<td>
										<input  class="form-control form-control-sm" name="transaction_password" value="{{$row->transaction_password}}">
									</td>
								</tr>  -->
								<!-- <tr>
									<td>
										UPload Photo
									</td>
									<td>
										<input type="file" class="form-control form-control-sm" name="image" id="fileInput">
									</td>
								</tr> -->
								<tr>
									<td colspan="2" class="">
										<button class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Update</button>
								 
										<a href="{{ url('/capital/dashboard') }}" class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Cancel</button>
									</td>
								</tr>
								  
							</table>  
							@endforeach
						</form>
						<div width="100px" height="100px" id="imageBox" class="image">
							 
						</div>
					</div>
					<div class="col-6">
						
					</div>
				</div>
				 
				
            </div>
        </div>
    </div>
</div>
@endsection 
@section('js')
<script type="text/javascript">
	$(document).ready(function() {
    $('#fileInput').on('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imageBox').html('<img src="' + e.target.result + '" alt="Selected Image">');
            }
            reader.readAsDataURL(file);
        } else {
            $('#imageBox').html('Select an image');
        }
    });
});


</script>
@endsection
