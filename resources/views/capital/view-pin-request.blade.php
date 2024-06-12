@extends('layout.app')
@section('title')
View Pin Request
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
            	<form action="{{ route('change.status') }}" method="post">@csrf
            		 
				<table id="datatable-buttons" class="table table-sm">
            	<thead>
            		<th>Sno</th>
            		<th>User Code</th>
            		<th>No of Pins</th>
            		<th>Cost</th>
            		<th>Action</th>
            	</thead>
            	<tbody class="tbody">
            		<?php $sno = 1; ?>
            		@foreach($data as $row)
            		<?php 
            		$list = DB::table('pin_list')->where('user_code',$row->user_code)->where('req_status', 'P')->get();

            		?>
            		@if(count($list))
            			<tr>
            			<td>{{ $sno }}</td> 
            			<td> 
            				<?php 

            				$code = DB::table('pin_list')->where('user_code', $row->user_code)->where('req_status', 'P')->get();
            				if(count($code)){
            					echo $row->user_code;
            					$code[0]->user_code;
            				}  
            				?>
            			</td>
            			<td>
            				<?php 
            			 
            				@$no_of_pins = DB::table('pin_list')->where('user_code', $row->user_code)->where('req_status', 'P')->get();
            				echo @$no_of_pins[0]->no_of_pins;
            			 
            				   
            				 
            				?>
            			</td>
            			<td>
            				<?php 
            				$amount = DB::table('pin_list')->where('user_code', $row->user_code)->where('req_status', 'P')->sum('amount');
            				 
            				 if($amount){
            				 	echo $amount;
            				 }
            				?> 
            			</td>
            			<td>
            				<?php $status = DB::table('pin_list')->where('user_code', $row->user_code)->where('req_status', 'P')->get();
            				if(count($status)){
            					  $status[0]->req_status;
            				}
            			 
            				 ?>
            				<div class="dropdown ms-2">
	                            <a class="text-muted font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <button class="btn btn-primary btn-sm">Action</button>
	                            </a>
	                            
	                            <div class="dropdown-menu dropdown-menu-end">
	                                <a class="dropdown-item" href="{{ route('change.status', ['id'=>$row->user_code, 'sts'=>'A']) }}">Aproove</a>
	                                <a class="dropdown-item" href="{{ route('change.status', ['id'=>$row->user_code, 'sts'=>'R']) }}">Reject</a>
	                                 
	                            </div>
	                        </div>
            			</td>

            		</tr>
            		
            		@endif
            		<?php $sno++; ?>
            		@endforeach
            	</tbody>
            	</table>
            	</form> 
            </div> 
        </div>
    </div>
</div>
@endsection 
@section('js')
<script type="text/javascript">
	 
		
		$formdata = $('#form').serialize();

		$.ajax({
			url : '{{ route("requested.pin") }}',
			method : 'post',  
			dataType: 'JSON',

			success : function(response){
				var records = response;
				var sno = 1;
				//$('.tbody').empty();

				records.forEach(function(record){
					if(record.req_status == "P"){
                    	var sts = 'Pending';
                    	var cls = 'btn-primary';
                    }
                    if(record.req_status == "A"){
                    	var sts = 'Approoved';
                    	var cls = 'btn-success';
                    }
                    if(record.req_status == "U"){
                    	var sts = 'Unpaid';
                    	var cls = 'btn-info';
                    }
                    if(record.req_status == "R"){
                    	var sts = 'Rejected';
                    	var cls = 'btn-danger';
                    }

			   	var row = '<tr>' +
                    '<td width="1px" class="align-middle">'+
                    '<input type="checkbox" value='+record.id+' name="table_id[]">&nbsp;&nbsp;&nbsp;<label>' + sno + '</label></td>' +
                    '<td>' + record.user_code + '</td>' + 
                    '<td>' + record.course_name + '</td>' +
                    '<td>' + record.no_of_pins + '</td>' +
                    '<td>' + record.amount + '</td>' +
                    '<td>' + record.date + '</td>' +
                    '<td>' +'<button class="btn btn-sm '+cls+'">'+sts+'</button></td>'+
                    '<td><div class="flex-shrink-0 dropdown ms-2">\
                                <button class="btn btn-success btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                                   	<i class="bx bxs-cog align-middle me-1"></i>Change Status\
                                </button>\
                                <div class="dropdown-menu dropdown-menu-end">\
                                 <a class="dropdown-item paid" href="javascript:void(0)" value="P"  code='+record.id+'  >Pending</a>\
                                    <a class="dropdown-item paid" href="javascript:void(0)" value="A" code='+record.id+'  >Approoved</a>\
                                    <a class="dropdown-item unpaid" href="javascript:void(0)" value="U" code='+record.id+' >Unpaid</a>\
                                    <a class="dropdown-item reject" href="javascript:void(0)" value="R" code='+record.id+' >Reject</a>\
                                </div>\
                            </div> </td>' +
                  
                	'</tr>';
                    $('.tbodyc').append(row);
				sno++;
				}); 
			},
			error : function(response){

			}
		});
		//status change

		$(document).on('click','.paid', function(){
			$('.status').empty();
			var v = $(this).attr('value');
			var id = $(this).attr('code');
			$.ajax({
				url : '{{ route("change.status") }}', 
				method : '', 
				data : {'id': id, 's':v},
				success : function(data){
					alert('Status Updated');
					$('.status').append('<div class="alert alert-success p-1 rounded-0 text-uppercase fw-bold fs-5 w-100  ">Pin Status changed succfully</div>').delay(3000).fadeOut(2000);

					document.location.reload();
				},
				 
			});
		});

		$(document).on('click','.unpaid', function(){
			$('.status').empty();
			var v = $(this).attr('value');
			var id = $(this).attr('code');
			$.ajax({
				url : '{{ route("change.status") }}', 
				method : '', 
				data : {'id': id, 's':v},
				success : function(data){
				 alert('Status Updated');
					$('.status').append('<div class="alert alert-success p-1 rounded-0 text-uppercase fw-bold fs-5 w-100  ">Pin Status changed succfully</div>').delay(1000).fadeOut(1000);

					document.location.reload();
				},
				 
			});
		});

		$(document).on('click','.reject', function(){
			$('.status').empty();
			var v = $(this).attr('value');
			var id = $(this).attr('code');
			$.ajax({
				url : '{{ route("change.status") }}', 
				method : '', 
				data : {'id': id, 's':v},
				success : function(data){
					alert('Status Updated'); 
					$('.status').append('<div class="alert alert-success p-1 rounded-0 text-uppercase fw-bold fs-5 w-100  ">Pin Status changed succfully</div>').delay(1000).fadeOut(1000);

					document.location.reload();
				},
				 
			});
		});

 
</script>
@endsection
