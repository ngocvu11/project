<!DOCTYPE html>
<html>
<head>
<title>laptop24h.vn</title>
 <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
   <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  -->
  
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
 
<link href="{{url('public/frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{url('public/frontend/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{url('public/frontend/css/style.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ url('public/frontend/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="BOX SHOP Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->

<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="{{url('public/frontend/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{url('public/frontend/js/megamenu.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
//phan trang
$(document).on('click','.pagination a', function(e){
       e.preventDefault();
       var page = $(this).attr('href').split('page=')[1];
       getPosts(page);
   });

   function getPosts(page)
   {
       $.ajax({
           type: "GET",
           url: '?page='+ page
       })
       .done(function(data) {
           $('body').html(data);
       });
   }
 // 

$(document).ready(function(){
	$(".megamenu").megamenu();
});
$(document).ready(function() {
	$('.best-sellers-menu ul li a').click(function(event) {
		var id = $(this).attr('href').replace('#','');
		$('.best-sellers-menu ul li a').removeClass('active');
		$(this).addClass('active');
		$('.course_demolaptop').hide();
		$('#' + id).show(); 
		return false;
	});
	$('.best-sellers-menu ul li:first-child a').click();

});
$(document).ready(function() {
	$('.mota ul li a').click(function(event) {
		var id = $(this).attr('href').replace('#','');
		$('.mota ul li a').removeClass('active');
		$(this).addClass('active');
		$('.content').hide();
		$('#' + id).show(); 
		return false;
	});
	$('.mota ul li:first-child a').click();

});
$(document).ready(function() {
  $('.thongtinkhach ul li a').click(function(event) {
    var id = $(this).attr('href').replace('#','');
    $('.thongtinkhach ul li a').removeClass('active');
    $(this).addClass('active');
    $('.content_tt').hide();
    $('#' + id).show(); 
    return false;
  });
  $('.thongtinkhach ul li:first-child a').click();

});

$(document).ready(function() {
  $('.thongtindathang ul li a').click(function(event) {
    var id = $(this).attr('href').replace('#','');
    $('.thongtindathang ul li a').removeClass('active');
    $(this).addClass('active');
    $('.content_dh').hide();
    $('#' + id).show(); 
    return false;
  });
  $('.thongtindathang ul li:first-child a').click();

});

</script>
<!-- start slider -->
<script src="{{url('public/frontend/js/responsiveslides.min.js')}}"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 1000,
        namespace: "callbacks",
        pager: true,
      });
    });
    
    //number_formar
    function number_format( number, decimals, dec_point, thousands_sep ) {                       
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
                              
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    }
    //đếm số sản phẩm
   function number_cart(){
      var n = 0;
      if(sessionStorage["shopping-cart-items"]!= null){  
      var  listCart = JSON.parse(sessionStorage["shopping-cart-items"]);
      $.each(listCart, function(index,item){
        n+=item.qty;
      });
      document.getElementById('number_c').innerHTML=parseInt(n);
      //alert('Bạn đã thêm sản phẩm thành công');
    }
  }
    //dinh nghia mang phan tu
    function displayShoppingCartItems(){
      if(sessionStorage["shopping-cart-items"]!= null){
        $("#dathang").removeAttr('style');
        shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"]);
        //
        $("#table_products > tbody").html("");
        
        $.each(shoppingCartItems, function(index,item){
          var htmlString = "";
          htmlString += "<tr>";
          htmlString += "<td style='text-align: center;'><img src='/resources/uploads/" +item.image + "' alt=' "+item.name+ "' style='width:100px;height:100px;'/></td>";
          htmlString += "<td style='line-height:30px;'>" + item.name +' ( '+ item.color + ' ) '+'<p style="color:#7acb4a;">'+ number_format(item.price,0,'.','.') +'' + ' đ</p>'+ "</td>";
          htmlString += "<td style='text-align: center;'>"
           +'<input type="button" class="minus-btn" value="-" style="width:30px;background:#eee; border:1px solid gray; color: blue;font-weight:700; border-radius:5px;">'
           +'<input type="text" readonly="readonly" value="'+item.qty+'" style="width:40px; margin:0.5em;text-align:center;" id="textbox" >'
           +'<input type="hidden" value="'+item.price+'" style="width:40px; margin:0.5em;text-align:center;" class="ip-price" />'
           +'<input type="button" class="plus-btn" value="+" style="width:30px;background:#eee; border:1px solid gray; border-radius:5px; color: blue; font-weight:700;">'
           + "</td>";
          htmlString += "<td style='text-align: center;'>" +'<span class="tt">'+ number_format(item.qty*item.price,0,'.','.') +'</span>'+' đ'+ "</td>";
          htmlString += "<td style='text-align: center;'>" + '<div class="remove_field glyphicon glyphicon-trash"  data-value="'+ item.id +'"></div>' + "</td>";
          htmlString += "</tr>";
          $("#table_products > tbody:last").append(htmlString);
          
        });
        //load tong tien luc dau

        $tongtienld =0;
        $('table#table_products > tbody > tr ').each(function(index, el) {
          
         $tongtienld += parseFloat($(this).find('span[class="tt"]').html().replace('đ','').replace('.','').replace('.',''));
        });
         $("#tt").html(number_format($tongtienld,0,'.','.')+' đ');
      } 
      else{
        $("#dathang").attr('style','pointer-events: none;');
      } 
    }
//
    var shoppingCartItems = [];
    $(document).ready(function(){
      
    
   
        number_cart();
        displayShoppingCartItems();
      // giảm san pham
       $(document).on('click','.minus-btn', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('td').find('input[type="text"]');
        var $inputprice = $this.closest('td').find('input[type="hidden"]');
        var value = parseInt($input.val());
        var productnewid = $.trim($(this).closest('tr').find('.remove_field').attr('data-value'));
        var price = 0;
        if (value > 2) {
        value = value - 1;
        } else {
        value = 1;
        }
        $input.val(value);
        price = parseFloat($inputprice.val())* value;
        $this.closest('tr').find('span[class="tt"]').html(number_format(price,0,'.','.'));
        $tongtien =0;
        $('table#table_products > tbody > tr ').each(function(index, el) {
          
         $tongtien += parseFloat($(this).find('span[class="tt"]').html().replace('đ','').replace('.','').replace('.',''));
        });
         $("#tt").html(number_format($tongtien,0,'.','.')+' đ');

          shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
          if(shoppingCartItems.length > 0){
            $.each(shoppingCartItems,function(index,v){
              var itemnew   = {
                          id:v.id,
                          name:v.name,
                          price:v.price,
                          color:v.color,
                          image:v.image,
                          qty:v.qty
                        };
              if(v.id == productnewid && v.qty > 1){
                v.qty--;
                return false;
              }
            });
          }               
          sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
          number_cart();
        });

        //tang san pham
        $(document).on('click','.plus-btn',function() {
        //e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('td').find('input[type="text"]');
        var $inputprice = $this.closest('td').find('input[type="hidden"]');
        var price = 0;
        var value = parseInt($input.val());
        var productnewid = $.trim($(this).closest('tr').find('.remove_field').attr('data-value'));
        if (value < 5) {
        value = value + 1;
        } else {
        value = 5;
        alert('Bạn chỉ mua đc 5 sản phẩm này');
        }
        
        $input.val(value);
        price = parseFloat($inputprice.val())* value;
        $this.closest('tr').find('span[class="tt"]').html(number_format(price,0,'.','.'));

          shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
          if(shoppingCartItems.length > 0){
            $.each(shoppingCartItems,function(index,v){
              var itemnew   = {
                          id:v.id,
                          name:v.name,
                          price:v.price,
                          color:v.color,
                          image:v.image,
                          qty:v.qty
                        };
              if(v.id == productnewid && v.qty < 5){
                v.qty++;
                return false;
              }
            });
          }
          
          sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);      
        //tinh lai tong tien
        $tongtien =0;
        $('table#table_products > tbody > tr ').each(function(index, el) {
          
         $tongtien += parseFloat($(this).find('span[class="tt"]').html().replace('đ','').replace('.','').replace('.',''));
        });
         $("#tt").html(number_format($tongtien,0,'.','.')+' đ');
         number_cart();

        });
        

    	//kiem tra 
    	//if(sessionStorage["shopping-cart-items"] != null){
    	//	shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
      
     // }
    	//hien thi thong tin gio hang
    	

    //add vao gio hang
    $(".add-to-cart").click(function(){
      var button = $(this);
      var id     = button.attr("id");
      var name   = button.attr("data-name");
      var image  = button.attr("data-image");
      var color  = button.attr("data-color");
      var price  = button.attr("data-price");
      var qty    = 1;
      var item   = {
    		id:id,
    		name:name,
    		price:price,
    		color:color,
    		image:image,
    		qty:qty
    	};
    	var exists = false;
      if(sessionStorage["shopping-cart-items"]){
      shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
    	if(shoppingCartItems.length > 0){
    		$.each(shoppingCartItems,function(index,value){
    			//
    			if(value.id == item.id && value.qty <= 5){
    				
            if(value.qty < 5)
            {
              value.qty++;
            }
    				exists = true;
    				return false;
         
    			}
    		});
    	}
    }
    	if(!exists){
    		shoppingCartItems.push(item);
    	}
    	//kiểm tra 
    	sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
    	number_cart();
    	displayShoppingCartItems();
    });
    
    //xóa sản phẩm
    $(document).on('click', '.remove_field', function () {   
      var shoppingCartItemsTtemp = [];
      var listCart ={};
      var productid =$.trim($(this).attr("data-value"));
      if(JSON.parse(sessionStorage["shopping-cart-items"]).length > 0){  
        listCart = JSON.parse(sessionStorage["shopping-cart-items"].toString());
        $.each(listCart, function(index,item){
          if(item.id != productid){

            shoppingCartItemsTtemp.push(item);
          }

        });
        sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItemsTtemp);
      }
      
      $(this).closest('tr').remove();

      //load tong tien luc dau
        $tongtienld =0;
        $('table#table_products > tbody > tr ').each(function(index, el) {
         $tongtienld += parseFloat($(this).find('span[class="tt"]').html().replace('đ','').replace('.','').replace('.',''));
         });
         $("#tt").html(number_format($tongtienld,0,'.','.')+' đ');
       number_cart();
       if(JSON.parse(sessionStorage["shopping-cart-items"]).length == 0){ 
        $("#dathang").attr('style','pointer-events: none;');
        }

    });
    //remove all san pham
   /* $("#remove_field").click(function() {
      shoppingCartItems = [];
      sessionStorage['shopping-cart-items'] = JSON.stringify(shoppingCartItems);
      $("#table_products > tbody").html("");
    });*/
    //hàm hiển thị 
    $("div.alert").delay(3000).slideUp();
});
  </script> 
<!--end slider -->
<link rel="stylesheet" href="{{url('public/frontend/css/etalage.css')}}">
<script src="{{url('public/frontend/js/jquery.etalage.min.js')}}"></script>

</head>
<body>
			<!-- header-section-starts -->
			@include('frontend.block.header')
			<!-- header-section-ends -->
	<div class="wrap">		
			<!-- start header menu -->
			@include('frontend.block.menu')
			<!-- end header menu -->
		    <!-- start home -->
			@yield('content')
		    <!-- end home -->			
	 </div>
	 <div class="footer">
			<!-- start footer -->
			@include('frontend.block.footer')
			<!-- end footer- -->
	 </div>
   
   <link rel="stylesheet" type="text/css" href="{{url('public/frontend/js/jquery-ui-themes-1.11.4/themes/smoothness/jquery-ui.css')}}"  />
    <script src="{{url('public/frontend/js/jquery-ui-1.11.4/jquery-ui.min.js')}}"></script>
</body>
</html>