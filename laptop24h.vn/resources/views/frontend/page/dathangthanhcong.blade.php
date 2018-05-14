@extends('frontend.master')
@section('content')
 <!-- start order -->
<section id="main">
		<div class="wrap">
			
			<div class="order text-center">
				<img src="{{('public/frontend/images/image1.png')}}" alt="">
				<h4>Cảm ơn quý khách đã mua hàng tại Laptop24h.vn</h4>
				<p>
					Quý khách sẽ nhận được email tổng đài tự động trong vòng 5 phút. Vui lòng vào gmail để xác nhận đơn hàng.

Xin cảm ơn quý khách đã cho chúng tôi cơ hội được phục vụ!
</p>
				<a href="{{url('/')}}">Tiếp tục mua hàng</a>
			</div>
		</div>
	</section>
<!-- ends order -->
<script>
    
    $( document ).ready(function() {
    sessionStorage.removeItem('shopping-cart-items');
    if(document.URL.indexOf("#")==-1)
    {
    url = document.URL+"#";
    location = "#";
    //Reload the page
    location.reload(true);
    }
});
</script>
@endsection