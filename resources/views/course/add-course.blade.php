@extends('layout.app')
@section('title')
View and add course
@endsection
@section('content')
@include('inc/notification')

 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body"> 
            	 
            	 
				<div class="row">
					<div class="col-6  py-3"> 
						<form class="form" action="{{ route('save.course') }}" method="post"  >@csrf
							 
							<input type="hidden" name="code" value="{{auth()->guard('web')->user()->member_code}}"  >
							<table class="w-100 profile table table-sm ">
							<thead>
								<th colspan="2">Add Course Form</th>
							</thead> 
								 
								<tr>
									<td>Course Name</td>
									<td>
										<input type="text" class="form-control form-control-sm" name="course_name">
										@error('name')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr> 
						 
								<tr>
									<td>Course Rate</td>
									<td>
										<input type="text" class="form-control form-control-sm rate" name="rate" required >
										@error('rate')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td>GST</td>
									<td><input type="text" class="form-control form-control-sm gst" name="gst" readonly></td>
								</tr>
								<tr>
									<td>Total</td>
									<td><input type="text" class="form-control form-control-sm total" name="total" readonly></td>
								</tr>
							 
								 
								<tr> 
									<td class=""> 
								 	</td>
								 	<td>
								 		<button class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Add</button>
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
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<table id="datatable-buttons" class="table table-sm">
					<thead>
						<th>Sno</th>
						<th>Status</th>
						<th>Name</th>
						<th>Rate</th>
						
						<th>Action</th>
					</thead>
					<tbody>
						<?php $sno = 1; ?>
						@foreach($data as $row)
						<tr>
							<td>{{$sno}}</td>
							<td>
								<table>
								 
							<?php 
							if($row->course_status == 'A'){
								?>
								<tr><td class="alert-success w-100 text-uppercase px-5" >Active</td></tr>
								<?php
							}
							if($row->course_status == 'P'){
								?>
								<tr><td class="alert-info w-100 text-uppercase px-5" >Pending</td></tr>
								<?php
							}
							if($row->course_status == 'R'){
								?>
								<tr><td class="alert-danger w-100 text-uppercase px-5" >Rejected</td></tr>
								<?php
							}
							 ?>
								</table> 

							</td>
							<td>
								<table>
									<tr>
										<td>{{$row->course_code}}</td>
									</tr>
									<tr>
										<td>
											{{$row->course_name}}
										</td>
									</tr>
								</table>
							</td>
							<td>{{$row->rate}}</td>
							
							<td>
								 <div class="dropdown ms-2">
                                    <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <button class="btn btn-sm btn-danger">Action </button>
                                    </a>
                                    
                                    <div class="dropdown-menu dropdown-menu-startdt">
                                        <a class="dropdown-item" href="{{ route('course.edit', $row->course_id) }}">Edit</a>
                                        <a class="dropdown-item" href="{{ route('course.delete', $row->course_id) }}" onclick="return confirm('Confirm Delete')">Delete</a>
                                        <a class="dropdown-item" href="{{ route('course.view' , $row->course_id) }}">View</a>
                                    </div>
                                </div>
                            </div>
							</td>
						</tr>
						<?php $sno++; ?>
						@endforeach
					</tbody>
				</table>
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
