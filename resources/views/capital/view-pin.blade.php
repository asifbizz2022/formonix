@extends('layout.app')
@section('title')
View Pin
@endsection
@section('content')
@include('inc/notification')
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
            	 
				<div class="row">
					<div class="col-6"> 
						<form id="form">@csrf
							 
							<input type="hidden" name="table_id"  >
							<table class="w-100 profile  table table-sm	border">
								<thead> 
										<th colspan="2">Verify Transaction Password</th> 
								</thead>
								 
								<tr>
									<td> Enter transaction number</td>
									<td>
										<input type="text" class="form-control form-sm" name="pin" id="pin">
										@error('pin')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr> 
						 
								 
								<tr>
									<td colspan="2" class=" text-center">
										<button type="button" class="submit btn btn-warning btn-sm fw-bold text-dark text-uppercase">Submit</button> 
										<a href="{{ url('/capital/dashboard') }}" class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Cancel</button>
									</td>
								</tr>
								  
							</table>  
							 
						</form>
						 
					</div>
					<div class="col-6">

						
					</div>
				</div>
				 
				
            </div>
            <table class="table table-sm displaytable">
            	<thead>
            		<th>Sno</th>
            		<th>Pin ID</th>
            		<th>Pin No.</th>
            		<th>Pin Value</th>
            		<th>Transfer Date</th>
            		<th>Transfer By</th>
            		<th>Action</th>
            	</thead>
            	<tbody class="tbody">
            		
            	</tbody>
            </table>
        </div>
    </div>
</div>
@endsection 
@section('js')
<script type="text/javascript">
	$(document).on('click', '.submit' , function(){ 
		
		$formdata = $('#form').serialize();

		$.ajax({
			url : '{{ route("display") }}',
			method : 'post', 
			data : {'data': $formdata}, 
			dataType: 'JSON',

			success : function(response){
				var records = response;
				var sno = 1;
				$('.tbody').empty();

				records.forEach(function(record){
			   	var row = '<tr>' +
                    '<td>' + sno + '</td>' +
                    '<td>' + record.id + '</td>' +
                    '<td>' + record.purchased_pin + '</td>' +
                    '<td>' + record.purchased_pin_cost + '</td>' +
                    '<td>' + record.transfer_pin_date + '</td>' +
                    '<td>' + record.transfer_by + '</td>' +
                    '<td>' + record.id + '</td>' +
                    '<td>' + record.transfer_by + '</td>' +
                	'</tr>';
                    $('.tbody').append(row);
				sno++;
				}); 
			},
			error : function(response){

			}
		});

	});
</script>
@endsection
