@extends('layout.app')
@section('title')
Transfer Pin
@endsection
@section('content')
@include('inc/notification')
 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body"> 
				<div class="row">
					<div class="col-6">
						<form id="form" method="post" action="{{ route('transfer.pin') }}">@csrf 

							<table class="w-100 profile  table table-sm	border">
								<thead>
										<th colspan="2">Verify Transaction Password</th>
								</thead>
								<tr>
									<td> Select Pin</td>
									<td>

										 <select multiple class="form-control  form-control-sm  rounded-0 select2"  name="pin[]" id="sub_category" required >
											@foreach($pin as $p)
											<option value="{{ $p->purchased_pin  }}">
												{{ $p->purchased_pin }}
											</option>
											@endforeach
										</select>
									</td>
								</tr>
								 <!-- <tr>
								 	<td>
								 		 No Of Pins To Transfer
								 	</td>
								 	<td>

								 		<input type="nubmer" class="form-control form-control-sm" name="no_of_pins">
								 	</td>
								 </tr> -->
								<tr>
									<td> Transfer To</td>
									<td>

										<select  class="w-100 form-control form-control-sm rounded-0"  name="transfer_to">
											@foreach($user as $u)
											<option value="{{ $u->member_code  }}">
												{{ $u->name }}
											</option>
											@endforeach
										</select>
									</td>
								</tr>



								<tr>
									<td colspan="2" class=" text-center">
										<button type="submit" class="submit btn btn-warning btn-sm fw-bold text-dark text-uppercase">Submit</button>
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

        </div>
    </div>
</div>

<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<table class="table table-sm" id="datatable-buttons">
					<thead>
						<th>Sno</th>
						<th>Pin Code</th>
						<th>Transfered To</th>
						 
						<th>Transfer Date</th>
					</thead>
					<tbody>
						<?php $sno = 1; ?>
						@foreach($transfer as $row)
						<tr>
							<td>{{$sno}}</td>
							<td>{{$row->transfer_pin}}</td> 
							<td> 
								<?php 
								$u = DB::table('members')->where('member_code', $row->transfer_to)->get(); 
								echo $u[0]->name;
								?>
							</td>
							<td>{{$row->transfer_pin_date}}</td>

						</tr>
						<?php
						$sno++;
						 ?>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')

@endsection
