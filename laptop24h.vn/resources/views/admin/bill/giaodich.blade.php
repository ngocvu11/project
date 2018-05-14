@extends('admin.master')
@section('content1')
     Đơn hàng chưa được xử lý ({{$count}}) 
 @endsection
@section('content')
<div class="panel-body">
  <form role="form">
  <div class="adv-table editable-table ">

      <table class="table table-striped table-hover table-bordered" id="editable-sample">
        <thead>
          <tr>
            <th style="width: 50px;">STT</th>
            <th>Đơn hàng</th>
            <th>Số tiền</th>
           
            <th>Tình Trạng</th>
           
             <th style="text-align:center;">Thời gian tạo</th>
            <th style="width: 150px; text-align:center;">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          <?php $stt = 0 ?>
         @foreach($data as $items)
          <tr class="">
           <?php $stt = $stt+1; ?>
           <td>{!! $stt; !!}</td>
           <td>#{{ $items['id'] }} bởi {!! $items['namekh']; !!} <p>{!! $items['emailkh']; !!}</p></td>
           <td>{!! number_format($items['total'],0,'.','.'); !!} đ <p>Qua thanh toán {!! $items['payment']; !!}</p></td>
           
           <td class="center" style="color:blue">
            @if($items['status'] == 0)
                Chưa thanh toán
            @else 
                 Đã thanh toán
            @endif
           </td>
           <td style="text-align:center;">
              <?php $timestamp = strtotime($items['created_at']);
              $date = date('d-m-Y',$timestamp); ?>
              {!! 
              $date;
              !!}
              </td>
           <td style="text-align:center;">
            
            <a class="btn btn-primary btn-xs fa fa-eye" data-toggle="modal"  href="#myModal{{$items['id']}}"></a>
            <a href="{{ URL::route('admin.bill.getDestroy',$items['id']) }}" class="btn btn-danger btn-xs fa fa-trash-o" onclick="return xacnhanxoa('Bạn có muốn hủy đơn hàng này ko ?')"></a>
          </td>
          <!-- Modal -->
            <div class="modal fade" id="myModal{{$items['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                              <h4 class="modal-title">Chi tiết đơn hàng</h4>
                                          </div>
                                          <div class="modal-body">

                                              <div class="left pullleft" style="float:left; margin: 3em">
                                                <h4>Thông tin thanh toán</h4>
                                                <ul>
                                                  <li class="chitietdh">Mã giao dịch :</li>
                                                  <li class="chitietdh">#{{ $items['id'] }}</li>
                                                </ul>
                                                <ul>
                                                  <li class="chitietdh">Ngày tạo :</li>
                                                  <li class="chitietdh"> <?php $timestamp = strtotime($items['created_at']);
                                                    $date = date('d-m-Y',$timestamp); ?>
                                                    {!! 
                                                    $date;
                                                     !!}
                                                   </li>
                                                </ul>
                                                <ul>
                                                  <li class="chitietdh">Số tiền :</li>
                                                  <li class="chitietdh">{{ number_format($items['total'],0,'.','.') }}đ</li>
                                                </ul>
                                                <ul>
                                                  <li class="chitietdh">Hình thức :</li>
                                                  <li class="chitietdh">{{ $items['payment'] }}</li>
                                                </ul>
                                                 <ul>
                                                  <li class="chitietdh">Trạng thái :</li>
                                                  <li class="chitietdh" style="color: green"> @if($items['status'] == 0)
                                                        Chưa thanh toán
                                                    @else 
                                                         Đã thanh toán
                                                    @endif</li>
                                                </ul>
                                              </div> 
                                              <div class="right pullright" style="float:right;margin: 3em">
                                                <h4>Thông tin khách hàng</h4>
                                                <ul>
                                                  <li class="chitietdh">Họ & tên :</li>
                                                  <li class="chitietdh">{{ $items['namekh'] }}</li>
                                                </ul>
                                                <ul>
                                                  <li class="chitietdh">Email :</li>
                                                  <li class="chitietdh"> 
                                                    {{ $items['emailkh'] }}
                                                   </li>
                                                </ul>
                                                <ul>
                                                  <li class="chitietdh">Số điện thoại :</li>
                                                  <li class="chitietdh">(+84){{ $items['phonekh'] }}</li>
                                                </ul>
                                                <ul>
                                                  <li class="chitietdh">Địa chỉ :</li>
                                                  <li class="chitietdh">{{$items['address']}},
                                                  <?php
                                                    $result = DB::table('districts')->where('id',$items['district'])->first();
                                                    echo $result->name;
                                                  ?>
                                                  ,
                                                  <?php
                                                    $result = DB::table('cities')->where('id',$items['city'])->first();
                                                    echo $result->name;
                                                  ?></li>
                                                </ul>
                                                 <ul>
                                                  <li class="chitietdh">Lời nhắn :</li>
                                                  <li class="chitietdh">{{ $items['ghichu']}}</li>
                                                </ul>
                                              </div>
                                              <div class="mainct" style="clear: both; margin: 3em">
                                                <div class="mainctleft">
                                                <h4>Thông tin sản phẩm</h4>
                                                @foreach($chitiet as $value)
                                                @if($value['transaction_id'] == $items['id'])
                                                <ul>
                                                
                                                  <li class="chitietdh">
                                                    <img src="{!! asset('resources/uploads/'.$value['product_image']) !!}" id="a" style='width:50px;'>
                                                  </li>
                                                  <li class="chitietdh">{{ $value['product_name'] }} | </li>
                                                  <li class="chitietdh">x{{ $value['soluong'] }} | </li>
                                                  <li class="chitietdh">{{ number_format($value['total'],0,'.','.') }}đ</li>
                                                </ul>
                                                 @endif
                                                @endforeach
                                              </div>
                                                <div class="totalct" style="clear: both;">
                                                <h4 style="color: red;">
                                                Tổng đơn hàng : {{ number_format($items['total'],0,'.','.') }}đ
                                                </h4>
                                              </div>
                                              </div>
                                             
                                              
                                          </div>
                                          <div class="modal-footer" style="clear: both">
                                              <a href="{{ URL::route('admin.bill.getTtcho',$items['id']) }}" class="btn btn-warning">Chuyển sang trạng thái chờ</a>
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Đóng</button>   
                                          </div>
                                      </div>
                                  </div>
                              </div>
          <!-- end modal -->
          </tr>
         @endforeach
    </tbody>
  </table>
</div>
</form>
</div>
@endsection