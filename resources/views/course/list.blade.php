@extends('layout.app')
@section('title')
Course List
@endsection
@section('content')
@include('inc/notification')
 
<div class="row">
    <div class="col-12">
        <div class="card">
          
            <table  class="table table-sm table-bordered">
            	<thead>
            		<th>Sno</th>
            		<th>Name</th>
            		<th>Code</th>
            		<th>Amount</th>
            		<th>Gst</th>  
            	</thead>
            	<tbody class="tbody">
            		<?php $sno = 1; ?>
            		@foreach($data as $row)
            		<tr>
            			<td>{{$sno}}</td>
            			<td>{{$row->course_name}}</td>
            			<td>{{$row->course_code}}</td>
            			<td>{{$row->rate}}</td>
            			<td>{{$row->gst}}</td>
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
