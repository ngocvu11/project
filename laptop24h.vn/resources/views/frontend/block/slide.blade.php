<div class="slider">	  
  <div class="callbacks_container">
	  <ul class="rslides" id="slider">
	  	 @foreach($slide as $items)
	  	 @if($items->published == 1)
		 <li>
			 <a href="{{ $items->link }}" title="{{ $items->name }}"><img class="slide1" src="{{ asset('resources/uploads/slide/'.$items->image) }}" alt="{{ $items->name }}"/></a>
		 </li>
		 @else
		 
		 @endif
		 @endforeach
	  </ul>	      
  </div>
</div>