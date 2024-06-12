@extends('layout.app')
@section('title')
Buy Pin
@endsection
@section('content')
@include('inc/notification')

<div class="row">
	<div class="col-6   ">
		<div class="card">
			<div class="card-body">
				<form class="form" method="post" action="{{ route('buy.pin') }}">@csrf	
				<table class="table table-sm">
					<thead>
						<th>Buy Pins</th>
					</thead> 
					<tbody class="form-body">
						<tr>
						<td>
							<label>Select Course</label>
							<select class="form-control rounded-0 course" name="course">
								<?php 
								$course = DB::table('courses')->get();
								foreach($course as $row){
								?>
									<option value="{{$row->course_code}}">{{$row->course_name}}-({{$row->rate}})</option>
								<?php
								}
								?>
							</select>
						</td>
						</tr> 
					</tbody> 
				</table> 
				<div class="text-center">
					<button class="btn btn-dark btn-sm">Buy now</button>
				</div>
				</form>
			</div>
		</div>
	</div> 
</div>

<!-- <div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				
				<table class="table table-sm list table-bordered">
					<thead>
						<th>Sno</th>
						<th>No of Pins</th>
						<th>Course Name</th>
						<th>Course code</th>
						<th>Cost</th>
						<th>Action</th>
					</thead> 
					<tbody class="tbody">
						<?php $sno = 1; ?>
						@foreach($data as $row)
						<tr>
							<td>{{$sno}}</td>
							<td>{{$row->no_of_pins}}</td>
							<td>
								<?php 
								$c = DB::table('courses')->where('course_code', $row->course_code)->get();
									echo $c[0]->course_name; 
								?>
							</td>
							<td>{{$row->course_code}}</td>
							<td>{{$row->amount}}</td>
							<td>
								<button class="btn btn-danger btn-sm">
									 @if($row->req_status == 'P') 
									 PENDING
									 @endif

								</button>
							</td>
						</tr>
						<?php $sno++; ?>
						@endforeach
					</tbody>	
					
					
				</table>
			 
			</div>
		</div>
	</div>
</div> -->
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change', '.course', function(){
			var id = $(this).val();
			$.ajax({
			url : '{{ route("get.course") }}',
			method : 'post', 
			data : { id : id} , 
			dataType : 'json',

			success : function(response){
				var record = response ; 
				var sno = 1; 
				 //$('.tbody').empty(); 
				record.forEach(function(rec){
					 var row = '<tr>'+
					 '<td>'+sno+'</td>'+
					 '<td> </td>'+
					 '<td> '+rec.course_name+'</td>'+
					 '<td>'+rec.course_code+'</td>'+
					 '<td> '+rec.rate+'</td>'+
					 '<td><i class="fa fa-times bg-danger text-white fw-bold p-1 delete_row"></i></td>'; 
					 
					 var formRow = '<tr><td>'+
						'<label>Enter No of Pins for '+rec.course_name+'</label>'+
						'<input type="text" name="no_of_pins[]" class="form-control">'+
						'<input type="hidden" name="course_code[]"value='+rec.course_code+' >'+
				 		'<input type="hidden" name="amount[]" value='+rec.total+'>'+
				 		'<i class="fa fa-times p-1 bg-danger text-white delete-a"></i></td></tr>';
					 $('.form-body').append(formRow);
					 $('.tbody').append(row);
					
				});
				
				
			},

			error : function(data){
				console.log(data);
			}
		});
			 sno++;
		});

		//
		$(document).on('click', '.delete_row', function(){
			$(this).parent().parent().remove();
		});
		$(document).on('click', '.delete-a', function(){
			$(this).parent().parent().remove();
		});
		
	});
</script>
@endsection