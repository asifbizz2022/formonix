@extends('layout.app')
@section('title')
View All Pin
@endsection
@section('content')
@include('inc/notification')
<div class="status"></div>
<style type="text/css">
	table.profile tr td{
		text-transform: uppercase;
		font-family: arial;
		font-size: 11px;
		font-weight: bold;
		line-height: 30px;
		text-align: right;
	}
	table.profile thead  {
		 text-transform: uppercase;
	}
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">  
				<table id="datatable-buttons" class="table table-sm">
            	<thead>
            		<th>Sno</th>
            		<th>User Code</th>
            		<th>Pin ID</th>
            		<th>Pin No.</th>
            		<th>Pin Value</th>
            		<th>Transfer Date</th>
            		<th>Transfer To</th>
            		<th>Transfer By</th>
            		<th>Action</th>
            	</thead>
            	<tbody class="tbody">
            		<?php 
            		$sno = 1; ?>
            		@foreach($data as $row)
            		<tr>
            			<td>{{$sno}}</td>
            			<td>{{$row->user_code}}</td>
            			<td>{{$row->id}}</td>
            			<td>{{$row->purchased_pin}}</td>
            			<td>{{$row->purchased_pin_cost}}</td>
            			<td>{{$row->transfer_pin_date}}</td>
            			<td>{{$row->transfer_to}}</td>
            			<td>{{$row->transfer_by}}</td>
            			<td><div class="flex-shrink-0 dropdown ms-2">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   	<i class="bx bxs-cog align-middle me-1"></i>Change Status
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item paid" href="javascript:void(0)" value="P"  id="{{$row->id}}">Paid</a>
                                    <a class="dropdown-item unpaid" href="javascript:void(0)" value="U"  id="{{$row->id}}">Unpaid</a>
                                    <a class="dropdown-item reject" href="javascript:void(0)" value="R"  id="{{$row->id}}">Reject</a>
                                </div>
                            </div></td>
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
