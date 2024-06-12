@extends('layout.app')
@section('title')
Change Transaction password
@endsection
@section('content')
@include('inc/notification')

<style type="text/css">
	table.profile tr td{
		text-transform: uppercase;
		font-family:  ;
		font-size: 11px;
		font-weight: bold;
		line-height: 30px;
		text-align: ;
	}
	table.profile thead  {
		 text-transform: uppercase;
	}
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body"> 
            	 
				<div class="row">
					<div class="col-6"> 
						<form class="form" action="{{ route('update.txn.password') }}" method="post" enctype="multipart/form-data">@csrf
							 
							<input type="hidden" name="code" value="{{auth()->guard('web')->user()->member_code}}"  >
							<table class="w-100 profile  table table-sm	border">
							 
								 
								<tr>
									<td>Old Password</td>
									<td>
										<input type="password" class="form-control form-sm" name="oldpassword">
										@error('oldpassword')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr> 
						 
								<tr>
									<td>new password</td>
									<td>
										<input type="password" class="form-control form-sm" name="password" required >
										@error('password')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr>
								 
								<tr>
									<td>Retype password</td>
									<td>
										<input type="password" class="form-control form-sm" name="password_confirmation" required>
									 
									</td>
									
								</tr> 
								 
								<tr>

									<td   class="">
										 
								 	</td>
								 	<td>
								 		<button class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Submit</button>
										<a href="{{ url('/capital/dashboard') }}" class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Cancel</a>
									</td>
								</tr>
								  
							</table>  
							 
						</form>
					</div>
					<div class="col-6">
						
					</div>
				</div>
				 
				
            </div>
        </div>
    </div>
</div>
@endsection 
