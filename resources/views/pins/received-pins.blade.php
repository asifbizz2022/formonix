@extends('layout.app')
@section('title')
Received Pins
@endsection
@section('content')
@include('inc/notification')

<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<table class="table table-sm" id="datatable-buttons">
					<thead>
						<th>Sno</th>
						<th>Pin Code</th>
						<th>Transfer By</th>
						<th>Amount</th>
						<th>Transfer Date</th>
						<th>Pin Status</th>	
						 
					</thead>
					<tbody>
						<?php $sno =1; ?>
						@foreach($data as $row)
						<tr>
							<td>{{ $sno }}</td>
							<td>{{$row->purchased_pin }}</td>
							<td>
								{{$row->transfer_by }}
								<?php
								$code = $row->course_code;
								$mcode = $row->transfer_by;
								$tname = $cname = '-';
								$c = DB::table('courses')->where('course_code', $code)->get();
								$m = DB::table('members')->where('member_code', $mcode)->get();
								$cname = $couseName = $c[0]->course_name;
								$tname =  $m[0]->name;
								?>
								<table>
									<tr>
										<td class="alert-info">{{$tname}}</td>
									</tr>
									<tr>
										<td>{{$cname}}</td>
									</tr>
								</table>
							</td>
							<td>{{$row->purchased_pin_cost}}</td>
							<td>{{$row->date}}</td>
							<td>
								 <?php 
								 if($row->pin_status == 'T'){
									?>
									<button class="btn btn-sm btn-info text-uppercase">Transfered</button>
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


@endsection
@section('js')
<script type="text/javascript">

</script>
@endsection
