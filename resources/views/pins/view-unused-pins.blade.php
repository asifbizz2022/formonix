@extends('layout.app')
@section('title')
Unused Pins
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
						<th>Course</th>
						<th>Amount</th>
						<th>Date</th>	
						<th>Status</th>
					</thead>
					<tbody>
						<?php $sno =1; ?>
						@foreach($data as $row)
						<tr>
							<td>{{ $sno }}</td>
							<td>{{$row->purchased_pin }}</td>
							<td>
								<?php
								$code = $row->course_code;
								$c = DB::table('courses')->where('course_code', $code)->get();
								echo $couseName = $c[0]->course_name;
								?>
							</td>
							<td>{{$row->purchased_pin_cost}}</td>
							<td>{{$row->transfer_pin_date}}</td>
							<td>
								@if($row->req_status ==  'A')
								<button class="btn btn-success btn-sm fw-bold">Approoved</button>
								@endif
								@if($row->req_status ==  'P')
								<button class="btn btn-warning btn-sm fw-bold">Pending</button>
								@endif
								@if($row->req_status ==  'R')
								<button class="btn btn-danger btn-sm fw-bold">Rejected</button>
								@endif
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
