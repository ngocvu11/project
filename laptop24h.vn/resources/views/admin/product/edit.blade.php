@extends('admin.master')
@section('content')
@section('content1')
    Sửa sản phẩm
    <div class="back" style="float:right">
        <a href="{{ URL::route('admin.product.getList') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a>
    </div>
 @endsection
<div class="panel-body">
  <form method="post" action="" enctype="multipart/form-data" name="frmEditPro">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <!-- left column -->
    @include('admin.blocks.errors')
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">

        <!-- form start -->
        <div class="col-lg-12">
          <!-- select -->
          <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="txtcate">
              <option value="">Chọn danh mục</option>
             {{ cate_parent($data,0,"--|",$product['cate_id']) }}
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Mã SP</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtmasp" value="{!! old('txtmasp',isset($product) ? $product['masp'] : NULL ) !!}">
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="txtname" value="{!! old('txtname'),isset($product) ? $product['name'] : NULL !!}">
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">STT hiển thị</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtstt" value="{!! old('txtstt',isset($product) ? $product['stt'] : NULL) !!}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Giá</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtprice" value="{!! old('txtprice',isset($product) ? $product['price'] : NULL) !!}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Giá mới</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtprice_new" value="{!! old('txtprice_new'),isset($product) ? $product['price_new'] : NULL !!}">
          </div>

         <div class="form-group">
            <label for="exampleInputPassword1">Màu sắc</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtcolor" value="{!! old('txtcolor',isset($product) ? $product['color'] : NULL) !!}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Tình trạng</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txttinhtrang" value="{!! old('txttinhtrang'),isset($product) ? $product['tinhtrang'] : NULL !!}">
          </div>

           <div class="form-group">
           <label>Keywords</label>
           <input type="text" class="form-control" placeholder="..." name="txtkeywords" value="{!! old('txtkeywords'),isset($product) ? $product['keywords'] : NULL !!}"/>
           </div>

          <div class="form-group">
           <label>Kích thước</label>
           <input type="text" class="form-control" placeholder="..." name="txtkichthuoc" value="{!! old('txtkichthuoc'),isset($product) ? $product['kichthuoc'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Trọng lượng</label>
           <input type="text" class="form-control" placeholder="..." name="txttrongluong" value="{!! old('txttrongluong'),isset($product) ? $product['trongluong'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Màn hình</label>
           <input type="text" class="form-control" placeholder="..." name="txtmanhinh" value="{!! old('txtmanhinh'),isset($product) ? $product['manhinh'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Độ phân giải</label>
           <input type="text" class="form-control" placeholder="..." name="txtdophangiai" value="{!! old('txtdophangiai'),isset($product) ? $product['dophangiai'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Dung lượng Pin</label>
           <input type="text" class="form-control" placeholder="..." name="txtpin" value="{!! old('txtpin'),isset($product) ? $product['pin'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Ram</label>
           <input type="text" class="form-control" placeholder="..." name="txtram" value="{!! old('txtram'),isset($product) ? $product['ram'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>CPU</label>
           <input type="text" class="form-control" placeholder="..." name="txtcpu" value="{!! old('txtcpu'),isset($product) ? $product['cpu'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Ổ cứng</label>
           <input type="text" class="form-control" placeholder="..." name="txtocung" value="{!! old('txtocung'),isset($product) ? $product['ocung'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Card đồ họa</label>
           <input type="text" class="form-control" placeholder="..." name="txtcacdohoa" value="{!! old('txtcacdohoa'),isset($product) ? $product['cacdohoa'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Đĩa quang</label>
           <input type="text" class="form-control" placeholder="..." name="txtdiaquang" value="{!! old('txtdiaquang'),isset($product) ? $product['diaquang'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Cổng giao tiếp</label>
           <input type="text" class="form-control" placeholder="..." name="txtconggiaotiep" value="{!! old('txtconggiaotiep'),isset($product) ? $product['conggiaotiep'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Webcam</label>
           <input type="text" class="form-control" placeholder="..." name="txtwebcam" value="{!! old('txtwebcam'),isset($product) ? $product['webcam'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Hệ điều hành</label>
           <input type="text" class="form-control" placeholder="..." name="txthedieuhanh" value="{!! old('txthedieuhanh'),isset($product) ? $product['hedieuhanh'] : NULL !!}"/>
           </div>
           <div class="form-group">
           <label>Bảo hành</label>
           <input type="text" class="form-control" placeholder="..." name="txtbaohanh" value="{!! old('txtbaohanh'),isset($product) ? $product['baohanh'] : NULL !!}"/>
           </div>


          <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <img src="{!! asset('resources/uploads/'.$product['image']) !!}" id="a" style='width:100px;'>
            <p class="help-block"></p>
            <input type="hidden" name="img_c"  value="{!! $product['image'] !!}">
          </div>

          <div class="form-group">
            <input type="file" name="Image">
          </div>

          <div class="form-group">
            <label>Ảnh Detail</label></br>
            @foreach ($product_image as $key => $item)
            <div  id="{!! $key !!}" >
            <img src="{!! asset('resources/uploads/detail/'.$item['image']) !!}"  idhinh="{!! $item['id'] !!}"  id="{!! $key !!}"   class="img_detail" style='width:100px;'>
            <a href="javascript:void(0)" type="button" id="del_img_demo" class="btn btn-danger btn-circle icon_del" ><i class="fa fa-times"></i></a>
            <p class="help-block"></p>
            </div>
            @endforeach
            <button type="button" class="btn btn-primary" id="add_img">Thêm ảnh</button>
            <div class="insert"></div>
          </div>

        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-12">
      <!-- general form elements disabled -->
      <div class="box box-warning">

        <div class="box-body">

          <div class="form-group">
            <label for="exampleInputPassword1">Giới thiệu</label>
             <textarea class="form-control" rows="3" placeholder="..." name="txtgioithieu">{!! old('txtgioithieu',isset($product) ? $product['intro'] : NULL) !!}</textarea>
            <script language="javascript">
            ckeditor('txtgioithieu');
          </script>
          </div>

         <div class="form-group">
          <label for="exampleInputPassword1">Nội dung</label>
          <textarea class="form-control" rows="3" placeholder="..." name="txtcontent">{!! old('txtcontent'),isset($product) ? $product['content'] : NULL !!}</textarea>
          <script language="javascript">
            ckeditor('txtcontent');
          </script>
        </div>

        <!-- textarea -->
        <div class="form-group">
          <label>Mô tả chi tiết</label>
          <textarea class="form-control" rows="3" name="txtdescription" placeholder="...">{!! old('txtdescription'),isset($product) ? $product['description'] : NULL !!}</textarea>
          <script language="javascript">
            ckeditor( 'txtdescription');
          </script>
        </div>

        <!-- text input -->
       
        <div class="form-group">
        <label>Trạng thái</label>
        <label class="radio-inline"><input type="radio" name="txtpublish" value="0" <?php echo $product['published']==0 ? 'checked == "checked"' : null  ?>> Ẩn</label>
        <label class="radio-inline"><input type="radio" name="txtpublish" value="1" <?php echo $product['published']==1 ? 'checked == "checked"' : null  ?>> Hiện</label>
        </div> 

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Save  </button>
        </div>

      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!--/.col (right) -->

</form>
</div>
@endsection