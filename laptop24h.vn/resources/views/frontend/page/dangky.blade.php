@extends('frontend.master')
@section('content')
<section id="main">
	@include('frontend.block.errors')
		<div class="login-content">
			<div class="pag-nav">
				<ul class="p-list">
					<li><a href="index.html">Trang chủ</a></li> &nbsp;&nbsp;/&nbsp;
					
					<li class="act">&nbsp;Đăng ký</li>
					
				</ul>
			</div>
			<div class="login-signup-form" style="background: url(../../public/frontend/images/bg-login.gif) no-repeat;">
				<form action="" method="post" accept-charset="utf-8">
					
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				<div class="col-md-5 sign-up text-center">
					<h4>Đăng ký thành viên</h4>
					
					<div class="cus_info_wrap">
						<div class="input-group">
                            <span class="input-group-addon">
                                <span class="fa fa-user" aria-hidden="true"></span>
                            </span>
                            <input class="form-control" id="FullName" name="username" placeholder="Tên hiển thị trên web" tabindex="1" type="text" value="" style="width: 100%;height: 40px;">
                        </div>
						
					</div>
					<div class="cus_info_wrap">
						<div class="input-group">
                            <span class="input-group-addon">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            </span>
                            <input class="form-control" id="Email" name="email" placeholder="Email" type="text" value="" style="width: 100%;height: 40px;">
                        </div>
						
					</div>
					<div class="cus_info_wrap">
						<div class="input-group">
                            <span class="input-group-addon">
                                <span class="fa fa-key" aria-hidden="true"></span>
                            </span>
                            <input class="form-control" id="Password" name="password" placeholder="Mật khẩu" tabindex="3" type="password" style="width: 100%;height: 40px;">
                        </div>
						
					</div>
					<div class="cus_info_wrap">
						<div class="input-group">
                            <span class="input-group-addon">
                                <span class="fa fa-key" aria-hidden="true"></span>
                            </span>
                            <input class="form-control" id="RePassword" name="repassword" placeholder="Nhập lại mật khẩu" tabindex="3" type="password" style="width: 100%;height: 40px;">
                        </div>
					</div>
					<div class="clearfix"></div>
					
				<div class="botton1">
					<input type="submit" value="Đăng ký" class="botton">
				</div>
				
				</div>
			
				
				<div class="clearfix"></div>
			</div>
		</div>
		</form>
		</div>
		</section>
		@endsection