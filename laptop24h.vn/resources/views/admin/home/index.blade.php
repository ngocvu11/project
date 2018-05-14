@extends('admin.master')
@section('content')
@section('content1')
    Thống kê
 @endsection
<!--state overview start-->
<div class="row state-overview" style="padding: 1em;background: #f1f2f7">
  <div class="col-lg-3 col-sm-6" >
      <section class="panel">
          <div class="symbol terques">
              <i class="fa fa-user"></i>
          </div>
          <div class="value">
              <h1 class="count">
                  {{ $countadmin }}
              </h1>
              <p>Quản trị viên</p>
          </div>
      </section>
  </div>
  <div class="col-lg-3 col-sm-6">
      <section class="panel">
          <div class="symbol red">
              <i class="fa fa-tags"></i>
          </div>
          <div class="value">
              <h1 class=" count2">
                  {{ $countsale }}
              </h1>
              <p>Khuyến mãi</p>
          </div>
      </section>
  </div>
  <div class="col-lg-3 col-sm-6">
      <section class="panel">
          <div class="symbol yellow">
              <i class="fa fa-shopping-cart"></i>
          </div>
          <div class="value">
              <h1 class=" count3">
                  {{ $countgd }}
              </h1>
              <p>Đơn hàng mới</p>
          </div>
      </section>
  </div>
  <div class="col-lg-3 col-sm-6">
      <section class="panel">
          <div class="symbol blue">
              <i class="fa fa-bar-chart-o"></i>
          </div>
          <div class="value">
              <h4 class=" count4">
                  {{ number_format($counttotal,0,'.','.') }}đ
              </h4>
              <p>Tổng doanh số</p>
          </div>
      </section>
  </div>
</div>

 <section class="panel" style="padding: 1em; background:#f1f2f7" >
<div class="flat-carousal">
  <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
      
      
      
  <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""><h4>Thống kê chi tiết</h4></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"></div></div></div>
</div>
<div class="panel-body" style="padding: 1em; background:#fff">
  <ul class="ft-link" style="border-bottom: 1px solid #eee">
      <li >
          <a href="javascript:;" >
              <i class="fa " style="font-size: 20px"> {{ $countuser }}</i>
             Khách hàng đăng ký
          </a>
      </li>
      <li>
          <a href="javascript:;">
              <i class=" fa " style="font-size: 20px">{{ $countslsp }}</i>
              Sản phẩm
          </a>
      </li>
      <li>
          <a href="javascript:;">
              <i class=" fa " style="font-size: 20px">{{$countsldm}}</i>
              Danh mục
          </a>
      </li>
      <li>
          <a href="javascript:;">
              <i class=" fa " style="font-size: 20px">{{ $countsl }}</i>
              Sản phẩm đã bán trong 1 tuần qua
          </a>
      </li>
  </ul>
   <ul class="ft-link">
      <li >
          <a href="javascript:;" >
              <i class="fa " style="font-size: 20px"> {{ $countgdc }}</i>
             Giao dịch chờ
          </a>
      </li>
      <li>
          <a href="javascript:;">
              <i class=" fa " style="font-size: 20px">{{ $countgdtc }}</i>
              Giao dịch thành công
          </a>
      </li>
      <li>
          <a href="javascript:;">
              <i class=" fa " style="font-size: 20px">{{$countgdh}}</i>
              Giao dịch đã hủy
          </a>
      </li>
      <li>
          <a href="javascript:;">
              <i class=" fa " style="font-size: 20px">{{ $counttt }}</i>
              Tin tức
          </a>
      </li>
  </ul>
</div>

                      </section> 

@endsection