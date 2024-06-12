@extends('layout.header_links')
<div class="row">
	<div class="col mx-auto">
		<div class="card align-middle" style="height: 7in;">
			<div class="card-body align-middle text-center justify-content-center h-100">
				<div class=" " style="margin-top: 2in;">
					<div class="display-5 w-100">Welcome Mr/Ms : {{ $name}}</div> 
					<table class="table table-sm w-25 table-bordered mx-auto">
						<tr>
							<td class="float-right">Member id</td>
							<td> {{$member_code}}</td>
						</tr>
						<tr>
							<td class="float-right">Email</td>
							<td> {{$email}}</td>
						</tr>
						<tr>
							<td class="float-right">Contact</td>
							<td> {{$contact}}</td>
						</tr>
						<tr>
							<td class="float-right">Password</td>
							<td> {{$password}}</td>
						</tr>
						<tr>
							<td colspan="2">
								<a href="{{ route('user.login.form') }}" class="btn btn-warning ">Login</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>