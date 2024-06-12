
@extends('layout.app')
@section('title')
 
    Formonix capital 
 
@endsection
@section('content')
<style type="text/css">
    .card{
        padding: 5px;
        height: 1in;

    }
    .card.mini-stats-wid >div >div >p {
        color: red;
    }
     
    .card:hover{
       background: yellow;
       color:white;
    }
    .bg-light img:hover{
         transform: scale(1.5);
         transition: all .3s ease-in-out;
    }
</style>
@include('inc.d-section1')
    <!-- end row --> 
 
 
<!-- end row second section started -->

@endsection
