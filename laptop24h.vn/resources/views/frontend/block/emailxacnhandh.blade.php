<style>
  .tb tr{
    border-bottom: 1px solid #eee; 
  }
</style>
<div class="emailxn" style="padding:2em; border: 1px solid #eee; width: 80%; margin: 0 auto">

<h2 style="text-align: center;color:#00b3ff;">Cảm ơn bạn đã đăt hàng tại Laptop24h</h2>
<p style="text-align: center;">Đơn hàng của bạn đã được gửi và đang chờ duyệt . Chi tiết đơn hàng của bạn được hiển thị dưới đây.</p>
<h4>Mã đơn hàng : #{{ $id }}</h4>
<h4>Thông tin khách hàng</h4>
<p>Họ & tên : {{ $name }}</p>
<p>Email : {{ $email }}</p>
<p>SĐT : {{ $sdt }}</p>
<p>Địa chỉ : 
{{ $address}},
<?php
  $result = DB::table('districts')->where('id',$district)->first();
  echo $result->name;
?>
,
<?php
  $result = DB::table('cities')->where('id',$city)->first();
  echo $result->name;
?>
</p>
<p>Ghi chú : {{ $ghichu }}</p>
<p>Cổng thanh toán : {{ $payment }}</p>
<table  class="tb"  cellpadding="3" cellspacing="2" style="width: 70%; height: auto; border: 1px solid #eee">
    <thead>
      <tr>
        <th style="text-align:center;">Mặt hàng</th>
        <th style="text-align:center;width: 90px;">Số lượng</th>
        <th style="text-align:center;">Giá</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($listctdh as $ctdh) 
    	<tr>    	
    		<td style="text-align:center;">{{ $ctdh->name}}</td>
    		<td style="text-align:center;width: 90px;"> {{ $ctdh->qty }}</td>
    		<td style="text-align:center;">{{ number_format($ctdh->price * $ctdh->qty,0,'.','.') }} đ</td>
    	</tr>
    @endforeach
    </tbody>
    <tfoot>
      <tr>
        <td colspan="2" style="margin-left: 20px;">Tổng đơn hàng</td>
        <td style="color: red; text-align: center;">
        {{number_format($tongtien,0,'.','.')}}đ
        </td>
      </tr>
    </tfoot>
 </table>
</div>
