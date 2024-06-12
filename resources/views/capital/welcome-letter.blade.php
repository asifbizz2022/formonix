@extends('layout.app')
@section('title')
   @endsection
@section('content')
 <style type="text/css">
 	*{
 		font-family: arial;
 	}
 </style>
<div class="row">
	<div class="col">
		<div class="">
			<div class=" ">
				 <div class=" w-75 mx-auto my-auto bg-white p-1" >
			        <div id="printableSection">
			            <div class="   d-flex   justify-content-center">
			            	<table class="w-100 table table-sm ">
			            		<tr>
			            			<td class="mx-auto">
			            				<img src="{{ url('/') }}/public/logo.jpeg" height="100" width="100"> 
			            			</td>
			            			<td class="  mx-auto ">
			            				 <center>
			            				 	<div class="fs-1 fw-bold">
			            				 	 Formonix Capital  

			            				 </div>
			            				 <div class="fs-3">
			            				 	 (A unit of formonix group)
			            				 </div>
			            				 <div>
			            				 	Address : 2nd Floor, Formonix Group   Ramnagri Road beside Patna, Bihar 800025
			            				 </div>
			            				 </center>
			            			</td>
			            		</tr>
			            	</table> 
			            </div>
			            <div class="  " style="font-family: arial;  ">
			            	<div class="text-center fs-5 text-uppercase text-decoration-underline fw-bold" style="text-align: center; font-family: arial;">
			            		Welcome Letter
			            	</div>
			            	<table style="font-family: arial; font-size: 13px;" width="200">
			            		@foreach($data as $row)
			            		<tr>
			            			<td>Member ID </td><td class="fw-bold"> : {{$row->member_code}}</td>
			            		</tr>
			            		<tr>
			            			<td>Name </td><td class="fw-bold"> : {{$row->name}}</td>
			            		</tr>
			            		<tr>
			            			<td>Address </td><td class="fw-bold"> : {{ $row->address }}</td>
			            		</tr>
			            		<tr>
			            			<td>Contact No </td><td class="fw-bold"> : {{$row->contact}}</td>
			            		</tr>
			            		<tr>
			            			<td>Dear  </td><td class="fw-bold">: {{$row->name}}  </td>
			            		</tr>
			            		@endforeach
			            	</table>
			                
			                <br>
			                <p style="text-align:justify;">Our constant concern for the betterment of Formonix Capital Network Marketing in this country has given us a common platform to join handdiv and lift the network marketing and the networkers along with it to new heights, which I believe is overdue! As per information, perhaps, India is one of the largest consumer markets in the world. It is the best country for networking concepts provided they suit Indian values, are presented in an Indian manner, and the business plan caters to the requirements of the leaders, networkers, and consumers.</p>

			                <p style="text-align:justify;">Every human being on this planet has dreams. Everyone does their best to fulfill those dreams. Is there any human who does not like living in luxury and gaining self-recognition? However, self-recognition and the best of finance demand the best of hard work, which in turn depends upon the opportunity available. Formonix Capital aims to fulfill every Indian's dreams. We can convert our dream into reality by making Formonix Capital one of the best network marketing companies, producing the maximum successful winners in India with complete freedom of health and wealth.</p>

			                <p>I bring this amazing opportunity to you and invite everyone to join the wonderful family of Formonix Capital and embark on this breathtaking journey forthwith.</p>
			                
			                <div class="mt-5" style="text-align:right;">
			                <p>For and on behalf of</p>
			                <p><strong>FORMONIX CAPITAL</strong><br>
			                (A UNIT OF FORMONIX GROUP)</p>
			                <hr>
			                <p><em>Authorized Signatory</em></p>
			                </div>
			            </div>
			        </div>

			    </div>
			    <div class=" text-center mt-3">
			    	<button onclick="printSection()" class="btn btn-success btn-sm fw-bold text-uppercase ">Print</button>
			    </div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('js')
<script type="text/javascript">
	function printSection() {
            var printContent = document.getElementById('printableSection').innerHTML;
            var originalContent = document.body.innerHTML;

            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
</script>
@endsection
