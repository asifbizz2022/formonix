@extends('layout.app')
@section('title')
Add Course
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

</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body"> 
            	 
				<div class="row">
					<div class="col-6  py-3"> 
						<form class="form" action="{{ route('course.update') }}" method="post"  >@csrf
						@foreach($data as $row)	 
							<input type="hidden" name="table_id" value="{{$row->course_id}}"  >
							<table class="w-100 profile  ">
							 
								 
								<tr>
									<td>Course Name</td>
									<td>
										<input type="text" class="form-control form-control-sm" value="{{$row->course_name }}" name="name">
										@error('name')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr> 
						 		<tr>
									<td>Course Code</td>
									<td>
										<input type="text" class="form-control form-control-sm  "  value="{{$row->course_code }}" name="code" required >
										@error('code')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td>Course Rate</td>
									<td>
										<input type="text" class="form-control form-control-sm rate"  value="{{$row->rate }}" name="rate" required >
										@error('rate')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td>Course Gst</td>
									<td>
										<input type="text" readonly class="form-control form-control-sm gst"  value="{{$row->gst }}" name="gst" required >
										@error('rate')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td>Course Total</td>
									<td>
										<input type="text" readonly class="form-control form-control-sm total"  value="{{$row->total }}" name="total" required >
										@error('rate')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td>
										Status
									</td>
									<td>
										<select name="status" class="form-control form-control-sm">
											<option value="A">Active</option>
											<option value="P">Pending</option>
											<option value="R">Rejected</option>
										</select>
									</td>
								</tr>
							 
							 @endforeach
								 
								<tr> 
									<td class=""> 
								 	</td>
								 	<td>
								 		<button type="submit" class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Update</button>
										<a href="#" class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Cancel</a>
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
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$('.rate').on('keyup', function(){
			var rate = parseInt($('.rate').val());
		var gst = parseInt(rate*18/100);
	 
		$('.gst').val(gst);
		$('.total').val(gst+rate);
		});
	});
</script>
@endsection
