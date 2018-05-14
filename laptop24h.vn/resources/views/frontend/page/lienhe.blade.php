@extends('frontend.master')
@section('content')
<section id="main">
	 @include('frontend.block.flash_messages')
	@include('frontend.block.errors')
<div class="new-product">
			<div class="new-product-top">
			<div class="pag-nav">
				<ul class="p-list">
					<li><a href="{{ URL('/') }}">Trang chủ</a></li> &nbsp;&nbsp;/&nbsp;
					<li class="act">&nbsp;Liên hệ</li>
				</ul>
			</div>
			<div class="coats">
		        <h3 class="c-head">Gửi thông tin liên hệ với chúng tôi</h3>
	        </div>
				<div class="clearfix"></div>
			</div>
			<div class="singel_right">
		     <div class="lcontact span_1_of_contact">
			      <div class="contact-form">
			  	        <form method="post">
			  	        	<input type="hidden" name="_token" value="{{ csrf_token() }}" >
				    	    <p class="comment-form-author"><label for="author">Họ & tên*</label>
				    	    	<input type="text" class="textbox" name="name" value="Họ & tên" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}">
					    	</p>
					        <p class="comment-form-author"><label for="author">Email*</label>
					     	   <input type="text" class="textbox" name="email" value="Địa chỉ email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					        </p>
					        <p class="comment-form-author"><label for="author">Nội dung*</label>
					    	  <textarea value="Nội dung liên hệ" name="contact" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Nội dung liên hệ</textarea>
					        </p>
					        <input name="submit" type="submit" id="submit" value="Gửi thông tin liên hệ">
				        </form>
			       </div>
		     </div>
		     <div class="contact_grid span_2_of_contact_right">
				<h3>Địa chỉ</h3>
			    <div class="address">
					<i class="pin_icon"></i>
				    <div class="contact_address">
					
						CẦU GIẤY: Số 8 Hồ Tùng Mậu, Cầu Giấy, Hà Nội
						Vietcombank - CN Thăng Long - Nguyễn Xuân Tưởng: Số TKNH: 0491000072795 - Số thẻ:
						9704366804133818014


				    </div>
				    <div class="clearfix"></div>
				</div>
				<div class="address">
					<i class="phone"></i>
				    <div class="contact_address">
					   1-25-2568-897
				    </div>
				    <div class="clearfix"></div>
				</div>
				<div class="address">
					<i class="mail"></i>
				    <div class="contact_email">
					  <a href="mailto:example@gmail.com">info(at)company.com</a>
				    </div>
				    <div class="clearfix"></div>
				</div>
	        </div>
	        <div class="clearfix"></div>
	    </div>
	    <div class="map">
	    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14895.65826033469!2d105.7701222!3d21.0361042!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b55d7e924f%3A0x70859b913d450af8!2zOCBI4buTIFTDuW5nIE3huq11LCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1516294396061" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	    	<!-- <iframe src="https://www.google.com/maps/@21.0400526,105.7821039,14z?authuser=1" frameborder="0" style="border:0"></iframe> -->
	    </div>
		</div>
		<div class="clearfix"></div>
	</div>
@endsection