@extends('layout.app')
@section('title')
edit bank account
@endsection
@section('content')
@include('inc/notification')
<style type="text/css">
	table.profile tr td{
		text-transform: uppercase;
		font-family: ;
		font-size: 11px;
		font-weight: bold;
		line-height: 30px;
		text-align: ;
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
						<form class="form" action="{{ route('update.bank.account') }}" method="post">@csrf
							@foreach($bank as $row)
							<input type="hidden" name="table_id" value="{{$row->id}}">
							<input type="hidden" name="member_code" value="{{$row->member_code}}">
							<table class="w-100 profile  table table-sm	border">
								<thead>
									 
										<th colspan="2">Bank Account Details</th>
									 
								</thead>
								<tr>
									<td>Account No</td>
									<td>
										<input class="form-control form-sm" name="account_no" value="{{$row->account_no}}" maxlength="12" minlength="12">
									</td>
								</tr>
								<tr>
									<td>bank</td>
									<td>
										<input class="form-control form-sm" name="bank_name" value="{{$row->bank_name}}">
									</td>
								</tr>
								<tr>
									<td>branch name</td>
									<td>
										<input type="text" class="form-control form-sm" name="branch_name" value="{{$row->branch_name}}">
									</td>
								</tr>
								<tr>
									<td>ifsc code</td>
									<td>
										<input type="text" class="form-control form-sm text-uppercase" name="ifsc" value="{{ $row->ifsc }}" maxlength="12" minlength="12">
									</td>
								</tr>
								<tr>
									<td>pan no</td>
									<td>
										<input type="text" class="form-control form-sm text-uppercase" name="pan_no" value="{{$row->pan_no}}" maxlength="10" minlength="1">
									</td>
								</tr>
								<tr>
									<td>transaction password</td>
									<td>
										<input type="text" class="form-control form-sm" name="transaction_password" value="{{$row->transaction_password }}">
									</td>
								</tr>
								 
								 
								 
								<tr>
									<td colspan="2" class="">
										<button class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Update</button>
								 
										<a href="{{ url('/capital/dashboard') }}" class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Cancel</button>
									</td>
								</tr>
								  
							</table>  
							@endforeach
						</form>
					</div>
					<div class="col-6">
						
					</div>
				</div>
				 
				
            </div>
        </div>
    </div>
</div>
@endsection 
