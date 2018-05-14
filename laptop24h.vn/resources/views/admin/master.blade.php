<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:42:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{ url('public/admin/img/favicon.html')}}">
    <title>Trang quản trị</title>
    <script src="{{ url('public/admin/js/jquery.js')}}"></script>
    <!--Cke and CKf -->
    <script type="text/javascript" src="{{ url('public/admin/js/ckeditor/ckeditor.js')}}"></script>  
    <script type="text/javascript" src="{{ url('public/admin/js/ckfinder/ckfinder.js')}}"></script>
    <script type="text/javascript">
        var baseURL = "{{URL('/')}}";
    </script>
    <script type="text/javascript" src="{{ url('public/admin/js/fc_ckfinder.js')}}"></script>
    <script type="text/javascript" src="{{ url('public/admin/js/lib.js')}}"></script>
    <!-- Bootstrap core CSS -->
    <link href="{{ url('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/admin/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('public/admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{ url('public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ url('public/admin/css/owl.carousel.css')}}" type="text/css">
    <!--right slidebar-->
    <link href="{{ url('public/admin/css/slidebars.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!--  summernote -->
    <link href="{{ url('public/admin/assets/summernote/dist/summernote.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ url('public/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{ url('public/admin/css/style-responsive.css')}}" rel="stylesheet" />
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<section id="container" >
    <!--header start-->
      @include('admin.home.header')
        <!--header end-->
        <!--sidebar start-->
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <li>
              <a class="active" href="{!! URL::route('admin.getIndex') !!}">
                <i class="fa fa-dashboard"></i>
                <span>Trang chủ</span>
            </a>
            </li>

            <li class="sub-menu">
                  <a href="{{ URL::route('admin.user.getList') }}" >
                  <i class="fa fa-th"></i>
                  <span>Người dùng</span>
                  </a>
                   <ul class="sub">
                    <li>
                    <a  href="{!! URL::route('admin.user.getList') !!}">Quản trị viên</a>
                    
                    </li>
                    <li>
                    <a  href="{{ URl::route('admin.user.getListkh') }}">Khách hàng đăng ký</a>
                    
                    </li> 
                </ul>
              
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="fa fa-tasks"></i>
                <span>Sản phẩm</span>
                </a>
                <ul class="sub">
                    <li>
                    <a  href="{!! URL::route('admin.cate.getList') !!}">Danh mục</a>
                    
                    </li>
                    <li>
                    <a  href="{{ URl::route('admin.product.getList') }}">Danh sách sản phẩm</a>
                    
                    </li> 
                </ul>
            </li>


            <li>
                  <a href="{{ URL::route('admin.tintuc.getList') }}" >
                  <i class="fa fa-tasks" aria-hidden="true"></i>
                  <span>Tin tức</span>
                  </a>
            </li>

            <li class="sub-menu">
                  <a href="add_sanpham.html" >
                  <i class="fa fa-shopping-cart"></i>
                  <span>Quản lý đơn hàng</span>
                  </a>
              <ul class="sub">
                  <li><a  href="{{ URL::route('admin.bill.getGiaodich') }}">Đang xử lý </a></li>
                  <li><a  href="{{ URL::route('admin.bill.getDonhangcho') }}">Đang chờ</a></li>
                  <li><a  href="{{ URL::route('admin.bill.getDonhanght') }}">Đã hoàn thành</a></li>
                  <li><a  href="{{ URL::route('admin.bill.getDonhanghuy') }}">Đã hủy</a></li>
                  <li><a  href="{{ URL::route('admin.bill.getDonhang') }}">Sản phẩm trong đơn hàng</a></li>
              </ul>
            </li>
            
            <li>
                  <a href="{{ URL::route('admin.slide.getList') }}" >
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <span>Slideshow</span>
                  </a>
            </li>

            <li>
                  <a href="{{ URL::route('admin.logo.getList') }}" >
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <span>Logo</span>
                  </a>
            </li>

            <li>
                  <a  href="#">
                  <i class="fa fa-tasks"></i>
                  <span>Giới thiệu</span>
                  </a>
            </li>  

             <li>
                  <a href="google_maps.html" >
                  <i class="fa fa-map-marker"></i>
                  <span>Google Maps </span>
                  </a>
            </li>         
        </ul>
<!-- sidebar menu end-->
</div>
</aside>

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
          <header class="panel-heading">
            @yield('content1')
          </header>
            <!-- thong bao bang messages -->
            @include('admin.blocks.flash_messages')
            <!-- main content -->
            @yield('content')
        </section>
  <!-- page end-->
</section>
</section>

<!-- Right Slidebar end -->

<!--footer start-->
<footer class="site-footer">
  <div class="text-center">
      2017 &copy; Admin by Hoàng Thắng.
      <a href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
      </a>
  </div>
</footer>
<!--footer end-->
</section>
<!--this page plugins-->
<!-- js placed at the end of the document so the pages load faster -->

<script src="{{ url('public/admin/js/bootstrap.min.js')}}"></script>
<!--script for this page only-->
<script src="{{ url('public/admin/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{ url('public/admin/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{ url('public/admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ url('public/admin/js/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/admin/assets/data-tables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{ url('public/admin/assets/data-tables/DT_bootstrap.js')}}"></script>
<script src="{{ url('public/admin/js/editable-table.js')}}"></script>


<!-- END JAVASCRIPTS -->


<!--right slidebar-->
<script src="{{ url('public/admin/js/slidebars.min.js')}}"></script>

<!--common script for all pages-->
<script src="{{ url('public/admin/js/common-scripts.js')}}"></script>
<!--this page  script only-->

<script type="text/javascript">
    
    $(function(){
        /*Check & uncheck all*/
        $(document).on('change', '.checkall,.chkitem', function(){
            var $_this = $(this);
            if($_this.hasClass('checkall')){
                $('.chkitem').prop('checked', $_this.prop('checked'));
            }else{
                var $_checkedall = true;
                $('.chkitem').each(function(){
                    if(!$(this).is(':checked')){
                        $_checkedall = false;
                    }
                    $('.checkall').prop('checked', $_checkedall);
                });
            }
        });
    });
</script>

<script>
$("div.alert").delay(3000).slideUp();
//
  //
$(document).ready(function() {
      $("#add_img").click(function(){
        $(".insert").append(' <div class="form-group"><p class="help-block"></p><input type="file" name="Detail_Image[]"></div>');
      });
  });
  //
    $(document).ready(function($id) {
        $("a#del_img_demo").on('click',function(){
            var url    = "http://laptop24h.vn:8080/admin/product/delete_img/";
            var _token = $("form[name='frmEditPro']").find("input[name='_token']").val();
            var idhinh = $(this).parent().find("img").attr("idhinh");
            var img    = $(this).parent().find("img").attr('src');
            var rid    = $(this).parent().find("img").attr("id");
            //alert(idhinh);
            $.ajax({
                url: url + idhinh,
                type: 'GET',
                cache: false,
                data: {"_token":_token,"idhinh":idhinh,"urlhinh":img},
                success: function(data){
                    if(data == "ok"){
                        $("#"+rid).remove();
                    }else{
                        alert("Error !");
                    }
                } 
            });
        });
    });

//
 jQuery(document).ready(function() {
    EditableTable.init();
});

</script>

</body>
<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:32 GMT -->
</html>
