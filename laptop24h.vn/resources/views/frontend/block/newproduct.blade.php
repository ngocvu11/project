<div class="new-arrivals text-center">
			
			<div class="col-md-3 product-item" style="padding-right: 10px">
				<a href="products.html"><img src="{{'public/frontend/images/15166404155945.jpg'}}"  alt="" /></a>
			</div>
			     
					
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="{{'public/frontend/images/15166404294211.jpg'}}"  alt="" /></a>
			</div>
			
			
			<div class="clearfix"></div></br>
					<h4>SẢN PHẨM BÁN CHẠY</h4>
				
	<div class="clients">
		<div class="course_demo">

		          <ul id="flexiselDemo">
		           @foreach($spbc as $items)
		            @if($items->published == 1)	
					
						<li>
						<!-- <div class="ipad text-center"> -->
							<a href="{{ URL('chitietsanpham',[$items->id]) }}">
							<div class="namesp">
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
						<!-- </div> -->
						</li>
					
					@else
		          
		          		@endif
		          		
					@endforeach
				</ul>
			</div>
			
				
		</div>
	<div class="clearfix"></div>
</div>
<script type="text/javascript">
			
			      $(window).load(function() {
			        $("#flexiselDemo").flexisel({
			          visibleItems: 5,
			          animationSpeed: 400,
			          autoPlay: true,
			          autoPlaySpeed: 5000,        
			          pauseOnHover: true,
			          enableResponsiveBreakpoints: true,
			            responsiveBreakpoints: { 
			              portrait: { 
			                changePoint:550,
			                visibleItems: 1
			              }, 
			              landscape: { 
			                changePoint:650,
			                visibleItems: 2
			              },
			              tablet: { 
			                changePoint:1000,
			                visibleItems: 3
			              }
			            }
			          });
			         
			      });
    
		</script>
