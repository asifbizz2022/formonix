@include('layout.header_links')

<div class="text-center fs-3 my-3">
	Total Payable Amount (Including GST) :
</div>
<div class="text-center fs-1 my-3 text-black">
	<?php 
	$amt = DB::table('pin_list')->where('paid_status', 0)->where('user_code','=',auth()->guard('web')->user()->member_code)->sum('amount');
	echo '&#8377'.' '.$amt;
	 ?>
</div>
<div class="row">
	<div class="col-12 text-center">
		<img src="{{ url('/') }}/public/qrcode.jpeg" width="300">
	</div>
</div>
<div class="text-center w-25 mx-auto my-3">
	<form>
		<div class="form-group">
			<label class="fw-bold fs-3 text-dark">
				Enter Transaction Number
			</label>
			<input type="" name="txn_number" class="form-control border-dark">
		</div>
		<div class="form-group">
			<label class="fw-bold fs-3 text-dark">Upload Receipt</label>
			<input type="file" class="form-control border-dark" name="reciept" >
			
		</div>
		<div>
			<button type="submit" class="btn btn-warning text-uppercase  my-3 text-dark fw-bold"> Buy now</button>
		</div>
	</form>
</div>