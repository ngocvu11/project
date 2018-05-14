<div class="best-sellers">
			<div class="best-sellers-head">
				<h3>
					<span>Laptop</span>
				</h3>
				<div class="arrow-right pull-left"></div>
			</div>
			 <div class="best-sellers-menu">
				<ul class="tabs">
					<li><a href="#tab_1" class="active">Laptop hot</a></li>
					<li><a href="#tab_2" >Laptop giảm giá</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="device">
			<div class="course_demolaptop"  id=tab_1>
		          
		           <div class="section group">
		           
		            @foreach($laptophot as $items)
		            @if($items->published == 1)
		            <a href="{{ URL('chitietsanpham',[$items->id]) }}">
						<div class="grid_1_of_4 images_1_of_4">
							 <img src="{{ asset('resources/uploads/'.$items->image) }}" alt="" />
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
						@else
		          
		          		@endif
		          		
					@endforeach
						<div class="clearfix"></div>
					</div>
				
			 </div>
			
 		</div>
 		<div class="device">
			<div class="course_demolaptop"  id=tab_2>
		          
		           <div class="section group">
		           
		            @foreach($laptopsale as $items)
		            @if($items->published == 1)
		            <a href="{{ URL('chitietsanpham',[$items->id]) }}">
						<div class="grid_1_of_4 images_1_of_4">
							 <img src="{{ asset('resources/uploads/'.$items->image) }}" alt="" />
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
						@else
		          
		          		@endif
		          		
					@endforeach
						<div class="clearfix"></div>
					</div>
				
			 </div>
			
 		</div>
<!-- phu kien -->
		<div class="best-sellers">
			<div class="best-sellers-head">
				<h3>
					<span>Phụ kiện</span>
				</h3>
				<div class="arrow-right pull-left"></div>
			</div>

			<div class="clearfix"></div>
		</div>
		<div class="device">
			<div class="course_demo">
		          
		           <div class="section group">
		            @foreach($phukien as $items)
		            @if($items->published == 1)
		            <a href="{{ URL('chitietsanpham',[$items->id]) }}">
						<div class="grid_1_of_4 images_1_of_4">
							 <img src="{{ asset('resources/uploads/'.$items->image) }}" alt="" />
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
						@else
		          
		          		@endif
		          		
					@endforeach
						<div class="clearfix"></div>
					</div>
				
			 </div>
			
 		</div>
<!--end phu kien -->