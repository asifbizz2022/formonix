@extends('layout.app')
@section('title')
Tree View
@endsection
@section('content') 
<style>
 .tree{
    margin:auto;
    padding:0px;

 }

.tree ul {
	padding-top: 20px; 
	position: relative; 

	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree li {
	float: left; text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 5px 5px;

	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before, .tree li::after{
	content: '';
	position: absolute; top: 0; right: 50%;
	border-top: 3px solid red;
	width: 50%; height: 20px;
}
.tree li::after{
	right: auto; left: 50%;
	border-left: 3px solid red;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after{
	border: 0 none;  
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before{
	border-right: 3px solid red;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 3px solid red;
	width: 0; height: 20px;
}

.tree li a{
	border: 3px solid #ccc;
    border-radius: 0px;
	padding: 30px 30px;
	text-decoration: none;
	color: #666;
	font-family: arial, verdana, tahoma;
	font-size: 15px;
	display: vlock;
	
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
	background: #c8e4f8; color: #000; border: 3px solid #94a0b4; 
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
	border-color:  #94a0b4;
}

</style>
 <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body mx-auto">  
                <div class="tree ">
                   	 <ul class=" ">
                        <li class="">
                        
	                       		<?php 
	                       		$data = DB::table('members')->where('member_code', auth()->guard('web')->user()->member_code)->get();

	                       		 ?>
	                       		 @foreach($data as $row)

	                        	<div data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{$row->member_code }}{{$row->name}}{{$row->email}}"> 
	                        		<img src="{{ url('/') }}/public/green.jpg" alt="asd">
	                        	</div>
	                        	<div>
	                        		 {{$row->name}}
	                        	</div>
	                        	@endforeach
	                       		<?php 
	                       		$branch = DB::table('members')->where('associate_id', auth()->guard('web')->user()->member_code)->get();

	                       		 ?>
	                       		
                            <ul class="">
                            	 @foreach($branch as $b)
                                <li class="">
                                <div class="card">
		                        	<div class="card-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{$b->member_code}}  ">
		                        		<img src="{{ url('/') }}/public/green.jpg" alt="asd"> 
		                        	</div>
		                        	<div>
		                        		{{$b->name}}
		                        	</div>
		                        </div>
                                </li> 
                                @endforeach
                            </ul>

                        </li>

                    </ul>
                </div>
               
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<?php 
           			$data = DB::table('members')->where('member_code', auth()->guard('web')->user()->member_code)->get();
           			$data2 = DB::table('members')->where('associate_id', $data[0]->member_code)->get();
           			echo count($data2);
           			
 				?>
			</div>
		</div>
	</div>
</div>

 
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$('li').on('mouseover', function(){

		} );
	});
</script>
@endsection
 
 