<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:56 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mosaddek">
  <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <link rel="shortcut icon" href="img/favicon.html">

  <title>Đăng nhập hệ thống</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ url('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ url('public/admin/css/bootstrap-reset.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{ url('public/admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ url('public/admin/css/style.css')}}" rel="stylesheet">
  <link href="{{ url('public/admin/css/style-responsive.css')}}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="login-body" style="background-image: url('/public/admin/img/bg1.jpg') ;">

  <div class="container">

    <form class="form-signin" action="{{URL('admin/login')}}" method="post">
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
      <h2 class="form-signin-heading">đăng nhập hệ thống</h2>
      <div class="login-wrap">
        @include('admin.blocks.errors')
        @include('admin.blocks.flash_messages')
        <input type="text" class="form-control" placeholder="User ID" autofocus name="username">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Lưu đăng nhập
          <span class="pull-right">
            <a data-toggle="modal" href="#myModal"> Quên mật khẩu ?</a>

          </span>
        </label>
        <button class="btn btn-lg btn-success btn-block" type="submit"><i class="fa fa-lock"></i> ĐĂNG NHẬP</button>
      </div>
      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Quên mật khẩu ?</h4>
            </div>
            <div class="modal-body">
              <p>Nhập địa chỉ email của bạn dưới đây để đặt lại mật khẩu.</p>
              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
              <button class="btn btn-success" type="button">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal -->
    </form>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ url('public/admin/js/jquery.js')}}"></script>
  <script src="{{ url('public/admin/js/bootstrap.min.js')}}"></script>
</body>
<!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:57 GMT -->
</html>
