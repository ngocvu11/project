@extends('admin.master')
@section('content1')
     Sản phẩm trong đơn hàng
 @endsection
@section('content')
<div class="panel-body">
  <div class="adv-table editable-table ">

      <table class="table table-striped table-hover table-bordered" id="editable-sample">
        <thead>
          <tr>
            <th style="width: 50px;">STT</th>
            <th>Mã giao dịch</th>
            <th>Ảnh</th>
            <th>Mặt hàng</th>
            <th style="text-align:center;width: 90px;">Số lượng</th>
            <th>Giá</th>
            <th>Đơn hàng</th>
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
            <td>#{!! $items['transaction_id']; !!}</td>
           <td> @if($items['product_image'])
              <img src="<?php echo '/resources/uploads/'.$items['product_image'];?>" style='width:100px;'>
            @endif</td>
           <td>{!! $items['product_name']; !!}</td>
           <td style="text-align:center;">{!! $items['soluong']; !!}</td>
           <td class="center">
            {!! number_format($items['total'],0,'.','.') !!}đ
           </td>
          
           <td>
           @if($items['status'] == 0)
              Đang xử lý
           @elseif($items['status'] == 1)
              Đã giao hàng
           @elseif($items['status'] == 2)
              Đã hủy
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
            <a href="" class="btn btn-primary btn-xs fa fa-trash-o" data-toggle="modal" data-target="#myModal"></a>
            
          </td>
          
          </tr>
         @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection