@extends('layout.app')
@section('title')
purchased Course
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
            <table class="table table-sm  " id="datatable-buttons" >
            	<thead>
            		<th>Sno</th>
            		<th>Course Name and Code</th>  
            	 
            	</thead>
            	<tbody class="tbody">
            		<?php $sno = 1; ?>
            		@foreach($data as $row)
            		<tr>
            			<td>{{$sno}}</td>
            			<td> 
            				<?php 
            				$c = DB::table('courses')->where('course_code', $row->course_code)->get();
            				  $courseName = $c[0]->course_name;

            				 
            				 ?>
            				 <table>
            				 	<tr>
            				 		 
            				 		<td class="alert-info">{{$row->course_code}}</td>
            				 	</tr>
            				 	<tr>
            				 		 
            				 	 	<td class="alert-danger">{{$courseName}}</td>
            				 	</tr>
            				 </table>
            			</td>
            		  
            		</tr>
            		<?php $sno++; ?>
            		@endforeach
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
