<div class="navigation-strip">			
<div class="top-menu">
		<ul class="megamenu skyblue">

			 <li class="grid"><a class="color2" href="{{ URL('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
				
			 </li>
			 @foreach($menu1 as $items1)
			 
			<li>
								
				<a class="color4" href="{{ URL('loaisp',$items1->id) }}" ><i class="fa fa-laptop" aria-hidden="true"></i> {{ $items1->name }}</a>
				<div class="megapanel" style="background:url('https://cdn1.vienthonga.vn/image/2018/1/1/100000_bg-menu-laptop.jpg') no-repeat;">
					<div class="row">
						@if($items1->id == 1)
						<div class="col1">
							<div class="h_nav">
								<h4 >Hãng sản xuất</h4>
								<ul>
									@foreach($menu2 as $items2)
									@if($items2->parent_id == $items1->id)
									<li><a href="{{ URL('loaisanpham',[$items2->id]) }}">{{ $items2->name }}</a></li>
									@endif
									@endforeach
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Giá</h4>
								<ul>
									
									@for($i = 0; $i < 5;$i++)
									@if($i < 4)
									<li><a href="{{ URL('locsanpham', ($i+1))}}">{{ (($i+1)*5).' triệu - ' .(($i+2)*5).' triệu'}}</a></li>
									
									@else
									<li><a href="{{ URL('locsanpham', ($i+1))}}">{{ 'Trên '.(($i+1)*5).' triệu'}}</a></li>
								
									@endif
									@endfor
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Màn hình</h4>
								<ul>
									
									@for($i = 0; $i < 5;$i++)
									@if($i < 4)
									<li><a href="{{ URL('locsanphamtheomh', ($i+1))}}">{{ 'Khoảng ' . (($i+1)+11) .' inch'}}</a></li>
									@endif
									@endfor
									
								</ul>	
							</div>							
						</div>
						@elseif($items1->id ==2)
						<div class="col1">
							<div class="h_nav">
								<h4>Loại phụ kiện</h4>
								<ul>
									@foreach($menu2 as $items2)
									@if($items2->parent_id == $items1->id)
									<li><a href="{{ URL('loaisanpham',[$items2->id]) }}">{{ $items2->name }}</a></li>
									@endif
									@endforeach
								</ul>	
							</div>							
						</div>
						
						@endif
					</div>
					<!-- <div class="row">
						<div class="col2" ></div>
						<div class="col1"></div>
						<div class="col1" ></div>
						<div class="col1" ></div>
						<div class="col1"></div>
					</div> -->
			    </div>
			
				</li>
				

				@endforeach
				<li>
					<a class="color8" href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Dịch vụ</a>			
				</li> 
				<li>
					<a class="color8" href="{{URL('tintuc')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Tin tức</a>			
				</li> 
				<li>
					<a class="color8" href="#"><i class="fa fa-gift" aria-hidden="true"></i> Khuyến mãi</a>			
				</li> 
		</ul> 
</div>
<div class="clearfix"></div>
</div>