@extends('layout.app')
@section('title')
Upload Documents
@endsection
@section('content')
@include('inc/notification')
<style type="text/css">
	table.profile tr td{
		text-transform: uppercase;
		font-family: barlow;
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
						<form class="form" action="{{ route('upload.document') }}" method="post" enctype="multipart/form-data">@csrf
							 
							<input type="hidden" name="table_id"  >
							<table class="w-100 profile  table table-sm	border">
								<thead> 
										<th colspan="2">Upload Document</th> 
								</thead>
								 
								<tr>
									<td>Photo</td>
									<td>
										<input type="file" class="form-control form-sm" name="photo" id="photo">
										@error('photo')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr> 
						 
								<tr>
									<td>Pan Card</td>
									<td>
										<input type="file" class="form-control form-sm" name="pancard" id="pan" >
										@error('pancard')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr>
								 
								<tr>
									<td>Signature</td>
									<td>
										<input type="file" class="form-control form-sm" name="signature" id="sign">
										@error('signature')
										<span class="text-danger">
											{{ $message }}
										</span>
										@enderror
									</td>
								</tr> 
								<tr>
									<td colspan="2" class="">
										<button class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Upload</button> 
										<a href="{{ url('/capital/dashboard') }}" class="btn btn-warning btn-sm fw-bold text-dark text-uppercase">Cancel</button>
									</td>
								</tr>
								  
							</table>  
							 
						</form>
						<table>
							<tr>
								<td>
									 
									<div id="photoPreview"  ></div>
								</td>
									<td>
									 
									<div id="panPreview"  ></div>
								</td>
									<td>
									 
									<div id="signaturePreview"  ></div>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-6">

						
					</div>
				</div>
				 
				
            </div>
        </div>
    </div>
</div>
@endsection 
@section('js')
<script type="text/javascript">
	document.getElementById('photo').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const preview = document.getElementById('photoPreview');
        const image = new Image();
        image.src = e.target.result;
        image.style.maxWidth = '150px';
        image.style.maxHeight = '150px';
        preview.innerHTML = ''; // Clear previous preview
        preview.appendChild(image);
    };

    reader.readAsDataURL(file);
});
</script>
<script type="text/javascript">
	document.getElementById('pan').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const preview = document.getElementById('panPreview');
        const image = new Image();
        image.src = e.target.result;
        image.style.maxWidth = '150px';
        image.style.maxHeight = '150px';
        preview.innerHTML = ''; // Clear previous preview
        preview.appendChild(image);
    };

    reader.readAsDataURL(file);
});
</script>
<script type="text/javascript">
	document.getElementById('sign').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const preview = document.getElementById('signaturePreview');
        const image = new Image();
        image.src = e.target.result;
        image.style.maxWidth = '150px';
        image.style.maxHeight = '150px';
        preview.innerHTML = ''; // Clear previous preview
        preview.appendChild(image);
    };

    reader.readAsDataURL(file);
});
</script>
@endsection
