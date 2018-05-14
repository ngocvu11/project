<div class="course_demo1">
      <ul id="flexiselDemo1">	
      	@foreach($logo as $items)
      	@if($items->published == 1)
		<li>
			<div class="client">
				<a href="{{ $items->link}}" title="{{ $items->name }}"><img src="{{ asset('resources/uploads/logo/'.$items->image) }}" alt="{{ $items->name }}" /></a>

			</div>
		</li>
		@endif
		@endforeach
	</ul>
</div>
<link rel="stylesheet" href="{{url('public/frontend/css/flexslider.css')}}" type="text/css" media="screen" />
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 7,
					animationSpeed: 200,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 3
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="{{url('public/frontend/js/jquery.flexisel.js')}}"></script>