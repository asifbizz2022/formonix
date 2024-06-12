@extends('layout.app')
@section('title')
Members
@endsection
@section('content')
@include('inc/notification')
<div class="status"></div>
 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">  
				<table id="datatable-buttons" class="table table-sm">
            	<thead>
            		<th>Sno</th>
            		<th>Member Code</th>
            		<th>Sponser Id</th>
            	 
            		<th>Email</th>
            		 
            		<th>Date of Birth</th>
            		 
            		<th>Position</th>
            	 
            	</thead>
            	<tbody class="tbody">
            		<?php 
            		$sno = 1; ?>
            		@foreach($data as $row)
            		<tr>
            			<td>{{$sno}}</td>
            			<td>{{$row->member_code}}
            				<table>
            					<tr>
            						<td>{{$row->name}}</td>
            					</tr>
            				</table>
            			</td>
            			<td>
            				{{$row->associate_id}}
            				<?php 
            				$name = '';
            				$d = DB::table('members')->where('member_code', $row->associate_id)->get();
            				 $name = $d[0]->name;
            				 ?>
            				 <table>
            				 	<tr>
            				 		<td>{{$name}}</td>
            				 	</tr>
            				 </table>
            			</td>
            		 
            			<td>{{$row->email}}
            				<table>
            					<tr>
            						<td>{{ $row->contact }}</td>
            					</tr>
            				</table>
            			</td>
            			 
            			<td>{{$row->dob}}
            				<table>
            					<tr>
            						<td>@if($row->gender == 'M')
			            				Male
			            				@else
			           					Female 
			            				@endif
			            			</td>
            					</tr>
            				</table>
            			</td>
            			 
            			<td>{{$row->section}}</td>
            			<!--  <div class="flex-shrink-0 dropdown ms-2">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   	<i class="bx bxs-cog align-middle me-1"></i>Change Status
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item paid" href="javascript:void(0)" value="P"  id="{{$row->id}}">Paid</a>
                                    <a class="dropdown-item unpaid" href="javascript:void(0)" value="U"  id="{{$row->id}}">Unpaid</a>
                                    <a class="dropdown-item reject" href="javascript:void(0)" value="R"  id="{{$row->id}}">Reject</a>
                                </div>
                            </div>  -->
            		</tr>
            		<?php 
            		$sno++; ?>
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
	 
		
		$formdata = $('#form').serialize();

		$.ajax({
			url : '{{ route("view.pin") }}',
			method : 'post',  
			dataType: 'JSON',

			success : function(response){
				var records = response;
				var sno = 1;
				// $('.tbody').empty();

				records.forEach(function(record){
			   	var row = '<tr>' +
                    '<td width="1px" class="align-middle"><input type="checkbox" value='+record.user_code+'>&nbsp;&nbsp;&nbsp;<label>' + sno + '</label></td>' +
                    '<td>' + record.user_code + '</td>' +
                    '<td>' + record.id + '</td>' + 
                    '<td>' + record.purchased_pin + '</td>' +
                    '<td>' + record.purchased_pin_cost + '</td>' +
                    '<td>' + record.transfer_pin_date + '</td>' +
                    '<td>' + record.transfer_to + '</td>' +
                    '<td>' + record.transfer_by + '</td>' +
                    '<td><div class="flex-shrink-0 dropdown ms-2">\
                                <button class="btn btn-success btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                                   	<i class="bx bxs-cog align-middle me-1"></i>Change Status\
                                </button>\
                                <div class="dropdown-menu dropdown-menu-end">\
                                    <a class="dropdown-item paid" href="javascript:void(0)" value="P"   >Paid</a>\
                                    <a class="dropdown-item unpaid" href="javascript:void(0)" value="U"  >Unpaid</a>\
                                    <a class="dropdown-item reject" href="javascript:void(0)" value="R"  >Reject</a>\
                                </div>\
                            </div> </td>' +
                  
                	'</tr>';
                    // $('.tbody').append(row);
				sno++;
				}); 
			},
			error : function(response){

			}
		});
		//status change

		$(document).on('click','.paid', function(){
			var v = $(this).attr('value');
			var id = $(this).attr('id');
			$.ajax({
				url : '{{ route("change.status") }}', 
				method : '', 
				data : {'id': id, 's':v},
				success : function(data){
					$('.status').empty();
					$('.status').append('<div class="alert alert-success p-1 rounded-0 text-uppercase fw-bold fs-5 w-100  ">Pin Status changed succfully</div>');
					$('.status').delay(3000).fadeOut(2000);
				},
				error : function(data){
					$('.status').append('<div class="alert alert-danger p-1 rounded-0 text-uppercase fw-bold fs-5 w-100  "></div>');
				}
			});
		});
		$(document).on('click','.unpaid', function(){
			var v = $(this).attr('value');
			var id = $(this).attr('id');
			$.ajax({
				url : '{{ route("change.status") }}', 
				method : '', 
				data : {'id': id, 's':v},
				success : function(data){
					$('.status').empty();
					$('.status').append('<div class="alert alert-success p-1 rounded-0 text-uppercase fw-bold fs-5 w-100  ">Pin Status changed succfully</div>');
					$('.status').delay(1000).fadeOut(1000);
				},
				error : function(data){
					$('.status').append('<div class="alert alert-danger p-1 rounded-0 text-uppercase fw-bold fs-5 w-100  "></div>');
				}
			});
		});
		$(document).on('click','.reject', function(){
			var v = $(this).attr('value');
			var id = $(this).attr('id');
			$.ajax({
				url : '{{ route("change.status") }}', 
				method : '', 
				data : {'id': id, 's':v},
				success : function(data){
					$('.status').empty();
					$('.status').append('<div class="alert alert-success p-1 rounded-0 text-uppercase fw-bold fs-5 w-100  ">Pin Status changed succfully</div>');
					$('.status').delay(1000).fadeOut(1000);
				},
				error : function(data){
					$('.status').append('<div class="alert alert-danger p-1 rounded-0 text-uppercase fw-bold fs-5 w-100  "></div>');
				}
			});
		});

 
</script>
@endsection
