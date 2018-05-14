@extends('frontend.master')
@section('content')
 
<div class="container">
    <?php echo $bc; ?>
</div>
<div class="main">
    <div class="content">
        
    	@include('frontend.block.timtheo')
       
	      <div class="section group" id="danhsach">
            @foreach($loaisp as $items)
             <a href="{{ URL('chitietsanpham',[$items->id]) }}" title="{{ $items->name }}">
				<div class="grid_1_of_4 images_1_of_4">
					<img src="{{ asset('resources/uploads/'.$items->image) }}" alt="{{ $items->name }}" />
					 <h2>{{ $items->name }}</h2>
					 <p>
                        			 @if($items->price_new != 0)
			                         <span class="strike">{{ number_format($items->price,0,'.','.') }}đ</span>
			                        <span class="price">{{ number_format($items->price_new,0,'.','.') }}đ</span>
			                        @elseif($items->price_new == 0)
			                        <span class="price">{{ number_format($items->price,0,'.','.') }}đ</span>
			                        @endif
                       
                    </p>
				</div>
            </a>
			@endforeach
				<div class="clearfix"></div>
			</div></br>
            
		</div>
	</div>
@endsection
