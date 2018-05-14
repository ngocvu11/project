@extends('frontend.master')
@section('content')
<section id="main">
	@include('frontend.block.errors')
	 @include('frontend.block.flash_messages')
		<div class="login-content">
			<div class="pag-nav">
				<ul class="p-list">
					<li><a href="index.html">Trang chủ</a></li> &nbsp;&nbsp;/&nbsp;
					
					<li class="act">&nbsp;Đăng nhập</li>
					
				</ul>
			</div>
			<div class="login-signup-form" style="background: url(../../public/frontend/images/bg-login-2.gif) no-repeat;">
				<form method="POST" accept-charset="utf-8">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<div class="col-md-5 sign-up text-center">
					<h4>Đăng nhập</h4>
					<div class="how_to">
						<a href="{{URL('facebook')}}"><div class="reg_fb"><img src="{{'public/frontend/images/facebook.png'}}" alt=""><i>Facebook</i><div class="clearfix"></div></div></a>
						<a href="{{URL('google')}}"><div class="reg_gp"><img src="{{'public/frontend/images/gp.png'}}" alt=""><i>GOOGLE</i><div class="clearfix"></div></div></a>
						<p><img src="{{'public/frontend/images/locked.png'}}" alt="" />Hãy yên tâm chúng tôi không lưu mật khẩu của bạn</p>
					</div>
					<h5 style="border-bottom: 1px solid #eee; margin-bottom:1em;">Hoặc</h5>

					<div class="cus_info_wrap">
						<div class="input-group">
                                <span class="input-group-addon">
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                </span>
                                <input class="form-control" size="30" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is required." id="Email" name="email" placeholder="Email" tabindex="1" type="text" value="" style="width: 100%;height: 40px;">
                        </div>	
						
					</div>
					<div class="clearfix"></div>
					<div class="cus_info_wrap">
						<div class="input-group">
                                <span class="input-group-addon">
                                    <span class="fa fa-key" aria-hidden="true"></span>
                                </span>
                                <input class="form-control" site="30" data-val="true" data-val-required="The Password field is required." id="Password" name="pass" placeholder="Password" tabindex="2" type="password" style="width: 100%;height: 40px;">
                         </div>
						
					</div>
					<div class="clearfix"></div>
					<div class="sky-form">
					 <!-- <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Remember me on this computer </label>  -->
				</div>
				<div class="botton1">
					<input type="submit" value="Đăng nhập" class="botton">
				</div>
				
				</div>
			</form>
				
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
		</section>
		@endsection