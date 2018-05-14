@extends('frontend.master')
@section('content')
<!-- start main -->
<script>
	jQuery(document).ready(function($){

		$('#etalage').etalage({
			thumb_image_width: 300,
			thumb_image_height: 300,
			source_image_width: 800,
			source_image_height: 800,
			show_hint: true,
			click_callback: function(image_anchor, instance_id){
				alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
			}
		});

	});
</script>

<div class="container">
	<?php echo $bc; ?>
</div>
<div class="main_bg">
	<div class="main">	
	@foreach($chitietsp as $items)   		           	         
		<!-- start span1_of_1 -->
			<div class="chitiet">
			<div class="span_1_of_left">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							
							<li>
								<a value="">
									<img class="etalage_thumb_image" src="{!! asset('resources/uploads/'.$items->image) !!}" class="img-responsive" />
									<img class="etalage_source_image" src="{!! asset('resources/uploads/'.$items->image) !!}" class="img-responsive" title="" />
								</a>
							</li>
							@foreach($image_detail as $items1)  
							<li>
								<img class="etalage_thumb_image" src="{!! asset('resources/uploads/detail/'.$items1->image) !!}" class="img-responsive" />
								<img class="etalage_source_image" src="{!! asset('resources/uploads/detail/'.$items1->image) !!}" class="img-responsive" title="" />
							</li>
							@endforeach
							
						</ul>
						 <div class="clearfix"></div>		
				  </div>

			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					<h4>{{ $items->name }}</h4>
					<p>{{ strip_tags($items->intro) }}</p>
				<div class="filter-by-color"  id="pro_color">
				<ul class="w_nav2">
				@if($items->color == 'Black')
				<li><a class="color1"  value="Black" title="Black"></a></li>
				@elseif($items->color == 'Silver')
				<li><a class="color2"  value="Sliver" title="Sliver"></a></li>
				@elseif($items->color == 'Rose Gold')
				<li><a class="color3"  value="Rose Gold" title="Rose Gold"></a></li>
				@elseif($items->color == 'Dark Grey')
				<li><a class="color4"  value="Dark Grey" title="Dark Grey"></a></li>
				@endif
				</ul>
				<div class="tinhtrang">Tình trạng: 
					@if($items->tinhtrang == 0)
					<i class="fa fa-check"></i><span style="color: green">Còn hàng</span>
					@else
					<span style="color: red">Hết hàng</span>
					@endif
				</div>
				</div>
				<script>
				document.getElementById('pro_color').value = '{{$items->color}}';
				</script>
				<h5>@if($items->price_new != 0)
			                      
			                        <span class="price">{{ number_format($items->price_new,0,'.','.') }}đ</span>
			                        <span class="strike" style="font-size: 16px;color: #444;text-decoration: line-through;">{{ number_format($items->price,0,'.','.') }}đ</span>
			                        @elseif($items->price_new == 0)
			                        <span class="price">{{ number_format($items->price,0,'.','.') }}đ</span>
			                        @endif</h5>
					<div class="filter-by-color">
						<h4>Quà khuyến mãi:</h4>
						<ul class="w_nav21">
							<span><?php echo $items->content; ?></span>
						</ul>
					</div>
					
			
					<div class="available">
						<div class="btn_form">
							<button type="button" id="{{ $items->id }}" data-name="{{ $items->name }}" data-price="{{ $items->price }}" data-image="{{ $items->image }}" data-color="{{ $items->color }}" class="add-to-cart btn btn-info" data-toggle="modal" data-target="#myModal">Thêm vào giỏ</button>
						</div>
						<a href="{{ URL('sosanh') }}" title="">
						<div class="sosanh">
							So sánh
						</div>
						</a>
						<div class="clearfix"></div>

					</div>
						
					
					
					   	 </div>
					   	</div>
					<div class="clearfix"></div>
				</div>
				<div class="mota">
					<ul id="tabs">
					    <li><a href="#tab1" class="active">Thông số kĩ thuật</a></li>
					    <li><a href="#tab2">Đánh giá chi tiết</a></li>
					    <li><a href="#tab3">Bình luận sản phẩm</a></li>
					  
					</ul>
					
					<div class="content" id="tab1">
					    <div class="thongso">
					    	<h3>Thông số kĩ thuật {{ $items->name }}</h3>
					    	<table>
					    		<tbody>
					    			<tr>
					    				<th class="th">Kích thước</th>
					    				<td class="td">{{ $items->kichthuoc }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Trọng lượng</th>
					    				<td class="td">{{ $items->trongluong }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Màn hình</th>
					    				<td class="td">{{ $items->manhinh }} inch</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Độ phân giải</th>
					    				<td class="td">{{ $items->dophangiai }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Dung lượng pin</th>
					    				<td class="td">{{ $items->pin }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Ram</th>
					    				<td class="td">{{ $items->ram }} GB</td>
					    			</tr>
					    			<tr>
					    				<th class="th">CPU</th>
					    				<td class="td">{{ $items->cpu }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Ổ cứng</th>
					    				<td class="td">{{ $items->ocung }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Card đồ họa</th>
					    				<td class="td">{{ $items->cacdohoa }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Đĩa quang</th>
					    				<td class="td">{{ $items->diaquang }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Cổng giao tiếp</th>
					    				<td class="td">{{ $items->conggiaotiep }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Webcam</th>
					    				<td class="td">{{ $items->webcam }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Hệ điều hành</th>
					    				<td class="td">{{ $items->hedieuhanh }}</td>
					    			</tr>
					    			<tr>
					    				<th class="th">Bảo hành</th>
					    				<td class="td">{{ $items->baohanh }}</td>
					    			</tr>
					    	
					    		</tbody>
					    	</table>
							<!-- <ul>
								<li><div class="st">Kích thước</div><div class="st1">Thông số kĩ thuật Thông số kĩ thuật Thông số kĩ thuật Thông số kĩ thuật Thông số kĩ thuật </div></li>
								<li><span>Trọng lượng</span></li>
								<li><span >Màn hình</span> </li>
								<li><span>Độ phân giải</span></li>
								<li><span>Dung lượng pin</span></li>
								<li><span>Ram</span> </li>
								<li><span>CPU</span></li>
								<li><span>Ổ cứng</span></li>
								<li><span>Card đồ họa</span></li>
								<li><span>Đĩa quang</span></li>
								<li><span>Cổng giao tiếp</span></li>
								<li><span>Webcam</span> </li>
								<li><span>Hệ điều hành</span></li>
								<li><span>Bảo hành</span> </li>
							</ul> -->
					    </div>
					</div>
					
					<div class="content" id="tab2">
					    <div class="thongso"><?php echo $items->description;?></div>
					</div>
					<div class="content" id="tab3">
					    <div class="thongso">
							<div class="ratings">
<p class="pull-right">3 reviews</p>
<p>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
4.0 stars
</p>
</div>
</div>
 
<div class="well">
 
<div class="text-right">
<a class="btn btn-success">Leave a Review</a>
</div>
 
<hr>
 
<div class="row">
<div class="col-md-12">
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
Anonymous
<span class="pull-right">10 days ago</span>
<p>This product was great in terms of quality. I would definitely buy another!</p>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-12">
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
Anonymous
<span class="pull-right">12 days ago</span>
<p>I've alredy ordered another one!</p>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-12">
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
Anonymous
<span class="pull-right">15 days ago</span>
<p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
</div>
</div>
 
</div>
 
</div>
					    </div>
					</div>
					
				</div>
			   	</div>
		@endforeach
	
	 <div class="clearfix"> </div>
</div>
</div>

</div>	
@endsection