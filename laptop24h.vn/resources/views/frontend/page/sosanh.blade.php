@extends('frontend.master')
@section('content')
 <!-- start order -->
<div class="container">
    <?php echo $bc; ?>
</div>
<div class="main">
    <div class="content">
    	
            <div class="row" style="min-height: 500px">
                <div class="heading">
                <h3>SO SÁNH</h3>
                <div class="arrow-right1 pull-left"></div>
                </div>
                <div class="col-md-4" style="margin-top:5px">
                   
                             <input type="text" name="product_1" id="product_1" class="form-control" placeholder="Nhập tên sản phẩm 1">
                             <input type="hidden" id="product_id_1" value="" />
                       
                   
                </div>

                <div class="col-md-4 btn-pullright panel-defualt" style="margin-top:5px">
                   
                       
                             <input type="text" name="product_2" id="product_2" class="form-control" placeholder="Nhập tên sản phẩm 2">
                             <input type="hidden" id="product_id_2" value="" />
                       
                        
                   
                </div>
                <div id="content_compare">
                  
                </div>
            </div>
    </div>
</div>
<script type="text/javascript">
    function getProduct(){
        var p1 = $('#product_id_1').val();
        var p2 = $('#product_id_2').val();
        if(p1 || p2){
          $.ajax({
          type: 'GET',
          dataType : 'json',
          url: '{{URL('listproduct')}}',
          data: {p1: p1,p2:p2},
          success: function (respon) {  
           $('#content_compare').empty(); 
           $html='';
           $image_p2= ''; $image_p1= '';
           $name_p2= ''; $name_p1= ''; 
           $price_p1='';$price_p2=''; 
           $cpu_p1='';$cpu_p2=''; 
           $ram_p1='';$ram_p2='';
           $rom_p1='';$rom_p2='';
           $mh_p1='';$mh_p2='';      
           $dpg_p1='';$dpg_p2=''; 
           $cac_p1='';$cac_p2='';     
           $pin_p1='';$pin_p2=''; 
           $c_p1='';$c_p2='';
           $w_p1='';$w_p2=''; 
           $o_p1='';$o_p2=''; 
           $kt_p1='';$kt_p2=''; 
           $hdh_p1='';$hdh_p2=''; 


            $.each(respon,function(i,item){              
              if(item.id == p1){
              $image_p1= '<a href="#"><img src="/resources/uploads/'+item.image+'" alt="'+item.name+'" style="width:200px;height:200px;text-align:center;"/></a>';
              $name_p1= item.name;
              $price_p1 = number_format(item.price,0,'.','.')+ ' đ';
              $cpu_p1 = item.cpu;
              $ram_p1 = item.ram + 'GB';
              $rom_p1 = item.ocung;
              $mh_p1 = item.manhinh + ' INCH';
              $dpg_p1 = item.dophangiai;
              $cac_p1 = item.cacdohoa;
              $pin_p1 = item.pin;
              $c_p1 = item.conggiaotiep;
              $w_p1 = item.webcam;
              $o_p1 = item.diaquang;
              $kt_p1 = item.kichthuoc;
              $hdh_p1 = item.hedieuhanh;

             }
                          
            if(item.id == p2){
              $image_p2= '<img src="/resources/uploads/'+item.image+'" alt="'+item.name+'" style="width:200px;height:200px;text-align:center;"/>';
              $name_p2 = item.name;
              $price_p2 = number_format(item.price,0,'.','.')+' đ';
               $cpu_p2 = item.cpu;
               $ram_p2 = item.ram + 'GB';
               $rom_p2 = item.ocung;
               $mh_p2 = item.manhinh + ' INCH';
               $dpg_p2 = item.dophangiai;
                $cac_p2 = item.cacdohoa;
               $pin_p2 = item.pin;
               $c_p2 = item.conggiaotiep;
                $w_p2 = item.webcam;
                $o_p2 = item.diaquang;
                 $kt_p2 = item.kichthuoc;
                 $hdh_p2 = item.hedieuhanh;
           }
                 
                                
            }) ;   
             $html +='<div class="col-md-12"><div class="col-md-2"></div><div class="col-md-5">'+ $image_p1+'</div><div class="col-md-5">'+ $image_p2 +'</div></div>';
            $html +='<div class="col-md-12" style="line-height:50px"><div class="col-md-2"></div><div class="col-md-5" style="color:green">'+$name_p1+'</div><div class="col-md-5" style="color:green">'+$name_p2+'</div></div>';
             $html +='<div class="col-md-12"><div class="col-md-2">GIÁ</div><div class="col-md-5" style="color:red">'+$price_p1+'</div><div class="col-md-5" style="color:red">'+$price_p2+'</div></div>';
            $html +='<div class="col-md-12" style="background-color:#e0dede;line-height:40px;margin-top:10px"><div class="col-md-2">BỘ XỬ LÝ, RAM, ROM</div><div class="col-md-5"></div><div class="col-md-5"></div></div>';

            $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">CPU</div><div class="col-md-5">'+ $cpu_p1 +'</div><div class="col-md-5">'+ $cpu_p2 +'</div></div>';

            $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">RAM</div><div class="col-md-5">'+ $ram_p1 +'</div><div class="col-md-5">'+ $ram_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">Ổ CỨNG</div><div class="col-md-5">'+ $rom_p1 +'</div><div class="col-md-5">'+ $rom_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="background-color:#e0dede;line-height:40px;margin-top:10px"><div class="col-md-2">MÀN HÌNH</div><div class="col-md-5"></div><div class="col-md-5"></div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">KÍCH THƯỚC MH</div><div class="col-md-5">'+ $mh_p1 +'</div><div class="col-md-5">'+ $mh_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">ĐỘ PHÂN GIẢI</div><div class="col-md-5">'+ $dpg_p1 +'</div><div class="col-md-5">'+ $dpg_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">CẠC ĐỒ HỌA</div><div class="col-md-5">'+ $cac_p1 +'</div><div class="col-md-5">'+ $cac_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="background-color:#e0dede;line-height:40px;margin-top:10px"><div class="col-md-2">PIN</div><div class="col-md-5"></div><div class="col-md-5"></div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">THÔNG TIN PIN</div><div class="col-md-5">'+ $pin_p1 +'</div><div class="col-md-5">'+ $pin_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="background-color:#e0dede;line-height:40px;margin-top:10px"><div class="col-md-2">KHÁC</div><div class="col-md-5"></div><div class="col-md-5"></div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">CỔNG GIAO TIẾP</div><div class="col-md-5">'+ $c_p1 +'</div><div class="col-md-5">'+ $c_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">WEBCAM</div><div class="col-md-5">'+ $w_p1 +'</div><div class="col-md-5">'+ $w_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">Ổ ĐĨA</div><div class="col-md-5">'+ $o_p1 +'</div><div class="col-md-5">'+ $o_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">KÍCH THƯỚC</div><div class="col-md-5">'+ $kt_p1 +'</div><div class="col-md-5">'+ $kt_p2 +'</div></div>';

             $html +='<div class="col-md-12" style="line-height:40px;"><div class="col-md-2">HỆ ĐIỀU HÀNH</div><div class="col-md-5">'+ $hdh_p1 +'</div><div class="col-md-5">'+ $hdh_p2 +'</div></div>';

             $('#content_compare').append($html);      
          },
          error: function(respon,code) {
            
          }
        });
        }
    }


     $(document).ready(function(){
        $("#product_1").autocomplete({
            source:  "{{URL('autotimkiem')}}",
            minLength: 1,
            autoFocus:true,
            select: function( event, ui ) {
               $('#product_id_1').val(ui.item.id);
                getProduct();
            }
        });
        
        $("#product_2").autocomplete({
            source:  "{{URL('autotimkiem')}}",
            minLength: 1,
            select: function( event, ui ) {
                $('#product_id_2').val(ui.item.id);
               getProduct();
            }
        });
    });

</script>

@endsection
