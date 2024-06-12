@extends('layout.app')
@section('title')
Down Tree
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

</style>

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
		 				Member Id
		 			</th>
		 			<th>
		 				Registration Date
		 			</th>
		 			<th>
		 				Sponser Id
		 			</th>
		 			<th>
		 				Position
		 			</th>  
				 	</thead>
				 	<tbody>
				 		<?php $sno = 1; ?>
				 		@foreach($data as $row)
				 		<tr>
				 			<td>{{$sno}}</td>
				 			 
				 			<td>
				 				<table>
				 					<tr>
				 						<td>{{$row->member_code}}</td>
				 					</tr>
				 					<tr>
				 						<td class="">{{$row->name}}</td>
				 					</tr>
				 				</table>
				 			</td>
				 			<td>{{$row->date_of_join}}</td>
				 			<td>
				 				<?php 	
				 				@$name = @$id = '-';
				 				@$s = DB::table('members')->where('member_code', $row->sponser_id)->get();
				 			
				 		 		@$name = $s[0]->name;
				 				@$id = $s[0]->member_code;
				 				 ?>
				 				<table>
				 					<tr>
				 						<td>{{@$id}}</td>
				 					</tr>
				 					<tr>
				 						<td>{{@$name}}</td>
				 					</tr>
				 				</table>
				 			</td>
				 			<td width="3px" >
				 				<?php 
				 				if($row->section == 'R'){
				 				?>
				 				<div class="alert-success text-center">RIGHT</div>
				 				<?php	
				 				}
				 				?>
				 				<?php 
				 				if($row->section == 'L'){
				 				?>
				 				<div class="alert-danger text-center">LEFT</div>
				 				<?php	
				 				} 
				 				?>
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