@extends('frontend.master')
@section('content')
<section id="main">
	<div class="login-content">
		<div class="pag-nav">
			<ul class="p-list">
				<li><a href="{{ URL('/') }}">Trang chủ</a></li> &nbsp;&nbsp;/&nbsp;
				<li class="act">&nbsp;Thanh toán</li>
			</ul>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="login-signup-form">
			<div class="col-md-5 login text-center">
				 <h4>Thông tin khách hàng</h4>
					@include('frontend.block.errors')
					<div class="container">
						<div class="stepwizard">
						    <div class="stepwizard-row setup-panel">
						        <div class="stepwizard-step">
						            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
						            <p></p>
						        </div>
						        <div class="stepwizard-step">
						            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
						            <p></p>
						        </div>
						        <div class="stepwizard-step">
						            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
						            <p></p>
						        </div>
						        
						    </div>
						</div>
						<form role="form">
						    <div class="row setup-content" id="step-1">
						        <div class="col-xs-12">
						            <div class="col-md-12">
						                <h3>Thông tin khách hàng</h3>
						                @if(Auth::guest())
						                <div class="form-group">
						                    <label class="labelTop">
											Họ & tên:
											<span class="require">*</span>
											</label>
						                    <input type="text" required="required" class="form-control" placeholder="Nhập họ tên của bạn" name="txthoten" value="{!! old('txthoten') !!}" />
						                </div>
						               <!--  <div class="form-group">
						                   <label class="labelTop">
						               											Số điện thoại:
						               											<span class="require">*</span>
						               											</label>
						                   <input type="text" required="required" class="form-control" placeholder="Nhập số điện thoại của bạn" name="txtsdt" value="{!! old('txtsdt') !!}" />
						               </div> -->
						                <div class="form-group">
						                    <label class="labelTop">
											Email:
											<span class="require">*</span>
											</label>
						                    <input type="text" required="required" class="form-control" placeholder="Nhập email của bạn" name="txtemail" value="{!! old('txtemail') !!}" />
						                </div>
						                
										
						                @else
										<div class="form-group">
						                    <label class="labelTop">
											Họ & tên:
											<span class="require">*</span>
											</label>
						                    <input type="text" required="required" class="form-control" placeholder="Nhập họ tên của bạn" name="txthoten" value="{!! Auth::user()->username !!}" />
						                </div>
						               
						                <div class="form-group">
						                    <label class="labelTop">
											Email:
											<span class="require">*</span>
											</label>
						                    <input type="text" required="required" class="form-control" placeholder="Nhập email của bạn" name="txtemail" value="{!! Auth::user()->email !!}" />
						                </div>
						                 @endif
						                 <div class="form-group">
						                    <label class="labelTop">
											Số điện thoại:
											<span class="require">*</span>
											</label>
						                    <input type="text" required="required" class="form-control" placeholder="Nhập số điện thoại của bạn" name="txtsdt" value="{!! old('txtsdt') !!}" />
						                </div>
										<div class="form-group">
						                  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Tiếp tục</button>
						                </div>
						               
						            </div>
											
						        </div>
						    </div>
						    <div class="row setup-content" id="step-2">
						        <div class="col-xs-12">
						            <div class="col-md-12">
						                <h3>Địa chỉ giao hàng</h3>
						                <div class="form-group">
						                    <label class="labelTop">
											Tỉnh/TP:
											<span class="require">*</span>
											</label>
						                    <select  name="tp" class="form-control" required>
												<option value="">----- Chọn Tỉnh Thành -----</option>
												@foreach($tinhtp as $item)
												<option value="{{ $item->id }}">{{ $item->name }}</option>
												@endforeach
											</select>
						                </div>
						                <div class="form-group">
						                    <label class="labelTop">
											Quận/huyện:
											<span class="require">*</span>
											</label>
						                    <select  name="qh" class="form-control" required>
												<option value="">----- Chọn Quận/Huyện -----</option>
													
											</select>
						                </div>
						                <div class="form-group">
						                    <label class="labelTop">
											Chi tiết địa chỉ:
											<span class="require">*</span>
											</label>
						                    <input type="text" required="required" name="txtaddress" class="form-control" placeholder="Nhập rõ số nhà, số ngõ, tên đường " value="{!! old('txtaddress') !!}" />
						                </div>
						                
						                <div class="form-group">
						                   <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Tiếp tục</button>
						                </div>
						             
						            </div>
						        </div>
						    </div>
						    <div class="row setup-content" id="step-3">
						        <div class="col-xs-12">
						            <div class="col-md-12">
						                <h3>Chọn hình thức thanh toán</h3>
						                <div class="form-group">
						                    <label class="labelTop">
											Thanh toán qua:
											<span class="require">*</span>
											</label>
						                    <select  name="txtpayment" class="form-control" required>
												<option value="">----- Chọn hình thức thanh toán -----</option>
												<option value="offline">Thanh toán khi nhận hàng</option>
												<option value="baokim">Thanh toán qua bảo kim</option>
											</select>
						                </div> 
						                <div class="form-group">
						                    <label class="labelTop">
											Để lại lời nhắn :
											<span class="require">*</span>
											</label>
						                    <textarea name="txtghichu" class="form-control" placeholder="Không bắt buộc" value="{!! old('txtghichu') !!}"></textarea>
						                </div> 
						                <button class="btn btn-primary btn-lg pull-right" type="submit" >Đặt hàng</button>
						               
						            </div>
						        </div>
						    </div>
						    
						</form>
						</div>
					</div> 
		
			<!-- - -->
			<div class="col-md-2 benefits">
				
				<table id="table_products_tt">
				     <thead>
				        <tr>
							<h4>Đơn hàng</h4>
				        </tr>
				    </thead>
			        <tbody>
			       
			   	 	</tbody>
			   	 	<tfoot>
			   	 	 <tr>
			           <td colspan="2"><p class="product-price red">THÀNH TIỀN:</p></td>
			           <td colspan="2" ><p id="tttt" class="product-price red" style="text-align: center; color: #d0021b; font-weight:600;"></p></td>
			        </tr> 
			   	 	</tfoot>
					</table>
					<!-- dữ liệu truyền sang thongtinthanhtoan -->
					<input type="hidden" id="listchitietdonhang"  name="listchitietdonhang" value=""/>
					
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</form>
	</div>
	</section>


<script>
	$(document).ready(function(){
		displayShoppingCartItemsTT();
	});

	 function displayShoppingCartItemsTT(){
      if(sessionStorage["shopping-cart-items"] != null){
        shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
        //
        $("#table_products_tt > tbody").html("");
        
        $.each(shoppingCartItems, function(index,item){
          var htmlString = "";
          htmlString += "<tr style='border-bottom:1px solid #eee'>";
          htmlString += "<td style=' font-size:11px;width:55%;'>" + item.name +' <p style=" font-size:11px">Màu sắc: '+ item.color + ' </p> '+"</td>";
          htmlString += "<td style=' font-size:11px; width:10%;'>"+'x'+item.qty+"</td>";
          htmlString += "<td style='text-align: center; font-size:11px;width:35%;'>" +'<span class="tt">'+ number_format(item.qty*item.price,0,'.','.') +'</span>'+' đ'+ "</td>";
          htmlString += "</tr>";
          $("#table_products_tt > tbody:last").append(htmlString);
          
        });
        //Truyền dữ liệu sang thongtinthanhtoan
        $('#listchitietdonhang').attr("value",sessionStorage["shopping-cart-items"].toString());

        //load tong tien luc dau
        $tongtienld =0;
        $('table#table_products_tt > tbody > tr ').each(function(index, el) {
          
         $tongtienld += parseFloat($(this).find('span[class="tt"]').html().replace('đ','').replace('.','').replace('.',''));
        });
         $("#tttt").html(number_format($tongtienld,0,'.','.')+' đ');
      }  
    }
	</script>

	<script type="text/javascript">
    var url = "{{ url('district') }}";
    $("select[name='tp']").change(function(){
        var tp_id = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: url,
            method: 'GET',
            data: {
                citi_id: tp_id,
                _token: token
            },
            success: function(data) {
                 $("select[name='qh']").html('');
                $.each(data, function(key, value){
                    $("select[name='qh']").append(

                        "<option value=" + value.id + ">" + value.name + "</option>"
                    );
                });
            }
        });
    });

//
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide(300);
            $target.show(300);
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>

	@endsection