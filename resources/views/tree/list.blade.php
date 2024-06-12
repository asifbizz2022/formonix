@extends('layout.app')
@section('title')
Tree
@endsection
@section('content')
@include('inc/notification')
<style type="text/css">
	div.card{
		width: auto;
		height: auto;
		 padding: 10px;
		 margin: 5px;
		 text-align: center; 
		text-transform: uppercase;
		display: inline-block;
		border: 0.5px solid gray;
		border-radius: 3px;

	}
	div.card:hover{
		background: lightyellow;
		cursor: pointer;
	}
</style>
<div class="status"></div>
 
<section class="text-center">
	<div class="row">
    <div class="col-12">
        <div class="card  ">
        	<div class="card-body head ">
        		 
        	</div> 
        </div>
    </div>
</div>

<div class="row">
	<div class="col p-3 bg-white m-1"> 
		<div class="row"> 
		    <div class="col-12 branch-left">
		         
		    </div>
		</div>
	</div>
	<div class="col p-3 bg-white m-1">
		<div class="row"> 
		    <div class="col-12 branch-right">
		         
		    </div>
		</div>
	</div>
	
</div>



</section>
@endsection 
@section('js')
<script type="text/javascript">
	refresh();
	function refresh(id){
		var id = id;
	 	$.ajax({
	 		url : '{{ route("get.member") }}', 
	 		method : 'post',
	 		data : {'id': id},
	 		dataType : 'json', 
	 		success : function(response){
	 			$('.head').empty();
	 			$.each(response.member, function(key, mem){
	 				 $row = '<div class="details" code="'+mem.member_code+'"><div>'+
	 				 '<img src="{{ url("/") }}/public/green.jpg"></div>'+
	 				 '<div >'+mem.name+'</div></div>';
	 			});
	 			$('.head').append($row);
	 		},
	 		error : function(response){

	 		}
	 	});

	 	//

		var sid;
	 	if(id == null){
	 		sid = "{{ auth()->guard('web')->user()->member_code }}";
	 	}
	 	else {
	 		sid = id;
	 	}
	 	$.ajax({
	 		url : '{{ route("get.sponser") }}', 
	 		method : 'post',
	 		data : {'id': sid},
	 		dataType : 'json', 
	 		success : function(response){
	 			$('.branch-right, .branch-left').empty();
	 			$.each(response.sponser, function(key, spn){
	 				 if(spn.section == 'R'){
	 				 	 $row2 = '<div class="card"> <div class="card-body"><div class="details" code="'+spn.member_code+'"><img src="{{ url("/") }}/public/red.jpg"></div>'+
	 				 		'<div>'+spn.name+'</div></div></div>';
	 				 		$('.branch-right').append($row2);
	 				 		console.log(spn.section);
	 				 }
	 				 
	 				 if(spn.section == 'L'){
	 				 	 $row2 = '<div class="card"> <div class="card-body"><div class="details" code="'+spn.member_code+'"><img src="{{ url("/") }}/public/red.jpg"></div>'+
	 				 		'<div>'+spn.name+'</div></div></div>';
	 				 		$('.branch-left').append($row2);
	 				 		console.log(spn.section);
	 				 }


	 				  
	 			});

	 			
	 		},
	 		error : function(response){

	 		}
	 	});
	}
	 	

	 	$(document).on('click', '.details', function(){
	 		var id = $(this).attr('code');
	 		 
 			 refresh(id);		
	 	});
	 
		
		 

 
</script>
@endsection
