@extends('frontend.master')
@section('content')
<div class="main-top">
			<div class="col-md-8 banner">
				<!-- start slider -->			
				@include('frontend.block.slide')
				<!-- end  slider -->
		   </div>
		  		@include('frontend.block.sale')
		</div>
				<!-- start slider -->
				@include('frontend.block.newproduct')
				<!-- start list -->
				@include('frontend.block.listproduct')
	 <div class="clients">
	  	<!-- start logo -->
			@include('frontend.block.logo')
			<!-- - -->
			
	</div>
	
@endsection