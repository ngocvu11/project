
<div class="header">
		<div class="top-header">
			<div class="wrap">
				<div class="header-left">
					<ul>
						<li><a href="#">☎ : 0166.3999.482  </a></li> |
						<li><a href="#"> Khách hàng là ông chủ</a></li>
					</ul>
				</div>
				<div class="header-right">
					<ul>
						<li>
							@if(Auth::guest())
							
							<a href="{{ URL('dangnhap') }}"><i class="user"></i> Đăng nhập |</a>
							<a href="{{ URL('dangky') }}">Đăng ký</a>
							@else
							<a><img alt="" src="{{Auth::user()->image}}" width="25px" style="border-radius: 50%; "></a>
							<a href="">{{  Auth::user()->username  }}</a>

							<a href="{{ URL('logout') }}">| Logout</a>
							@endif
							
						</li>
						
						<!-- <li class="login">
							<i class="lock"></i>
							<a href="login.html">Login</a>|
						</li> -->
						<li>
							<a class="dropbtn" data-toggle="modal" data-target="#myModal"><i class="cart"></i>Giỏ hàng</a>		
							<!-- Modal -->
							  <div class="modal fade" id="myModal" role="dialog">
							    <div class="modal-dialog modal-lg">
							    
							      <!-- Modal content-->
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Giỏ hàng của bạn</h4>
							        </div>
							        <div class="modal-body">
								      <table class="table table-bordered table-striped" id="table_products">
								     <thead>
								        <tr>
								            <th class="product-price" style="text-align: center;">Ảnh</th>
								            <th class="product-price" style="text-align: center;">Thông tin sản phẩm</th>
								            <th class="product-price" width="150" style="text-align: center;">SL</th>
								            <th class="product-price" width="120" style="text-align: center;">Thành tiền</th>
								             <th class="product-price" width="20" style="text-align: center;">Xóa</th>
								            
								        </tr>
								    </thead>
								        <tbody>
								       
								   	 	</tbody>
								   	 	<tfoot>
								   	 	 <tr>
								            <td colspan="3"><p class="product-price red">TỔNG SỐ TIỀN:</p></td>
								           <td colspan="3" style="text-align: center; color: #2a80b9;"><p id="tt" class="product-price red"></p></td>
								        </tr> 
								   	 	</tfoot>
										</table>
							        </div>
							        <div class="modal-footer">
							    		<button class="btn btn-success pull-left" ><a style="color: #fff;" pull-left" href="{{ URL('/') }}">Tiếp tục mua hàng</a></button>
							    		
										<button class="btn btn-info pull-right" id="dathang"><a style="color: #fff;" href="{{ URL('thongtinthanhtoan') }}">Đặt hàng ngay</a></button>
							    	   
									</div>
							      </div>
							</div>
							</div>
							<!-- end Modal content-->
						</li>
						<li class="last"><p id='number_c'>0</p></li>
					</ul>
					<!-- <div class="sign-up-right">
						<a href="login.html">Sign Up</a>
					</div> -->
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="wrap">
			<div class="header-bottom">
				<div class="logo">
					<a href="{{ URL('/') }}"><img src="{{url('public/frontend/images/logo1.jpg')}}" class="img-responsive" alt="" /></a>
				</div>
				<div class="search">
					<div class="search2">
					  <form role="search" method="get" id="searchform" action="{{route('timkiem')}}">
						
						 <input type="text" name="key" id="key" type="text" value="Bạn cần tìm sản phẩm gì" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Bạn cần tìm sản phẩm gì ';}"/>
						 <input type="submit" value="">
					  </form>

					</div>
					<ul id="list_key" style="z-index: 999; background: #fff"></ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<script>
 $(document).ready(function(){
        $("#key").autocomplete({
            source:  "{{URL('autotimkiem')}}",
            minLength: 1,
            autoFocus:true,
            select: function( event, ui ) {
               /*$('#product_id_1').val(ui.item.id);
                getProduct();*/
            }
        });
        
    });
</script>