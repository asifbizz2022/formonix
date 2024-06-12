@extends('layout.app')
@section('title')
Bank Details
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
	thead tr td{
		
	}
	.form-group{
		margin-top: 5px;
	}

</style>
<section>
	<div class="row">
		<div class="col-5">
			<div class="card">
				<div class="card-body">
					<div class="bg-primary py-1 px-1 text-light">
						Add Bank Account
					</div>
					<table class="w-100">
						<form method="post" action="{{ route('add.bank.account') }}">@csrf
							<tr>
							<td><label>Bank Name</label></td>
							<td>
								<input type="hidden" name="id" value="{{auth()->guard('web')->user()->member_code}}">
								<input type="text" name="bank_name" class="form-control form-control-sm" placeholder="Bank Name">
							</td>
						</tr>
						<tr>
							<td><label>Branch Name</label></td>
							<td>
								<input type="text" name="branch_name" class="form-control form-control-sm" placeholder="Branch Name">
							</td>
						</tr>
						<tr>
							<td><label>Account Name</label></td>
							<td>
								<input type="text" name="account_name" class="form-control form-control-sm" placeholder="Account Name">
							</td>
						</tr>
						<tr>
							<td><label>Account Number</label></td>
							<td>
								<input type="text" name="account_no" class="form-control form-control-sm" placeholder="Account No">
							</td>
						</tr>
						<tr>
							<td><label>IFSC Code</label></td>
							<td>
								<input type="text" name="ifsc_code" class="form-control form-control-sm text-uppercase" maxlength="12" minlength="12" placeholder="ifsc code">
							</td>
						</tr>
						<tr>
							<td><label>Pan Number</label></td>
							<td>
								<input type="text" name="pan_no" class="form-control form-control-sm text-uppercase" maxlength="10" minlength="10" placeholder="pan number">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button class="btn btn-primary  btn-sm">Submit</button>
							</td>
						</tr>
						</form>
					</table>
					 
				</div>
			</div>
		</div>
	</div>
</section>
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				 <table class="table table-sm  " id="datatable-buttons">
				 	<thead> 
				 			<th>
				 				Sno
				 			</th>
				 			 
				 			<th>
				 				Bank
				 			</th>
				 			<th>
				 				Account No
				 			</th>
				 			<th>
				 				IFSC Code
				 			</th>
				 			<th>
				 				Branch
				 			</th>  
				 	</thead>
				 	<tbody>
				 		<?php $sno = 1; ?>
				 		@foreach($data as $row)
				 		<tr>
				 			<td>{{$sno}}</td>
				 			<td>{{$row->bank_name}}</td>
				 			<td>{{$row->account_number}}</td>
				 			<td>{{$row->ifsc}}</td>
				 			<td>{{$row->branch_name}}</td>
				 			 
				 			 
				 		</tr>
				 		<?php $sno++; ?>
				 		@endforeach
				 	</tbody>
				 </table>
			</div>
		</div>
	</div> 
</div>

<div>


</div>
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