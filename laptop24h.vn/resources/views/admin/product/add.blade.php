@extends('admin.master')
@section('content')
@section('content1')
    Thêm sản phẩm
    <div class="back" style="float:right">
        <a href="{{ URL::route('admin.product.getList') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a>
    </div>
 @endsection
<div class="panel-body">
  <form method="post" action="" enctype="multipart/form-data">
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
              {!! cate_parent($parent,0,'--|',old('txtcate')) !!}
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Mã SP</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtmasp" value="{!! old('txtmasp') !!}">
          </div>

          
             <div class="form-group">
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="txtname" value="{!! old('txtname') !!}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Nhập stt</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtstt" value="{!! old('txtstt') !!}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Giá</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtprice" value="{!! old('txtprice') !!}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Giá mới</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtprice_new" value="{!! old('txtprice_new') !!}">
          </div>

         <div class="form-group">
            <label for="exampleInputPassword1">Màu sắc</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txtcolor" value="{!! old('txtcolor') !!}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Tình trạng</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="..." name="txttinhtrang" value="{!! old('txttinhtrang') !!}">
          </div>

           <div class="form-group">
           <label>Keywords</label>
           <input type="text" class="form-control" placeholder="..." name="txtkeywords" value="{!! old('txtkeywords') !!}"/>
           </div>
           
           <div class="form-group">
           <label>Kích thước</label>
           <input type="text" class="form-control" placeholder="..." name="txtkichthuoc" value="{!! old('txtkichthuoc') !!}"/>
           </div>
           <div class="form-group">
           <label>Trọng lượng</label>
           <input type="text" class="form-control" placeholder="..." name="txttrongluong" value="{!! old('txttrongluong') !!}"/>
           </div>
           <div class="form-group">
           <label>Màn hình</label>
           <input type="text" class="form-control" placeholder="..." name="txtmanhinh" value="{!! old('txtmanhinh') !!}"/>
           </div>
           <div class="form-group">
           <label>Độ phân giải</label>
           <input type="text" class="form-control" placeholder="..." name="txtdophangiai" value="{!! old('txtdophangiai') !!}"/>
           </div>
           <div class="form-group">
           <label>Dung lượng Pin</label>
           <input type="text" class="form-control" placeholder="..." name="txtpin" value="{!! old('txtpin') !!}"/>
           </div>
           <div class="form-group">
           <label>Ram</label>
           <input type="text" class="form-control" placeholder="..." name="txtram" value="{!! old('txtram') !!}"/>
           </div>
           <div class="form-group">
           <label>CPU</label>
           <input type="text" class="form-control" placeholder="..." name="txtcpu" value="{!! old('txtcpu') !!}"/>
           </div>
           <div class="form-group">
           <label>Ổ cứng</label>
           <input type="text" class="form-control" placeholder="..." name="txtocung" value="{!! old('txtocung') !!}"/>
           </div>
           <div class="form-group">
           <label>Card đồ họa</label>
           <input type="text" class="form-control" placeholder="..." name="txtcacdohoa" value="{!! old('txtcacdohoa') !!}"/>
           </div>
           <div class="form-group">
           <label>Đĩa quang</label>
           <input type="text" class="form-control" placeholder="..." name="txtdiaquang" value="{!! old('txtdiaquang') !!}"/>
           </div>
           <div class="form-group">
           <label>Cổng giao tiếp</label>
           <input type="text" class="form-control" placeholder="..." name="txtconggiaotiep" value="{!! old('txtconggiaotiep') !!}"/>
           </div>
           <div class="form-group">
           <label>Webcam</label>
           <input type="text" class="form-control" placeholder="..." name="txtwebcam" value="{!! old('txtwebcam') !!}"/>
           </div>
           <div class="form-group">
           <label>Hệ điều hành</label>
           <input type="text" class="form-control" placeholder="..." name="txthedieuhanh" value="{!! old('txthedieuhanh') !!}"/>
           </div>
           <div class="form-group">
           <label>Bảo hành</label>
           <input type="text" class="form-control" placeholder="..." name="txtbaohanh" value="{!! old('txtbaohanh') !!}"/>
           </div>

          <div class="form-group">
            <label for="exampleInputFile">Ảnh</label>
            <input type="file" id="exampleInputFile" name="txtimage" value="{!! old('txtimage') !!}"></br>
            <span class="label label-danger">NOTE!</span>
            <span>Vui lòng chọn file ảnh</span> 
          </div>

          <div class="form-group">
            <p class="help-block"></p>
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
             <textarea class="form-control" rows="3" placeholder="..." name="txtgioithieu">{!! old('txtgioithieu') !!}</textarea>
            <script language="javascript">
           ckeditor("txtgioithieu")
          </script>
          </div>


         <div class="form-group">
          <label for="exampleInputPassword1">Nội dung</label>
          <textarea class="form-control" rows="3" placeholder="..." name="txtcontent">{!! old('txtcontent') !!}</textarea>
          <script language="javascript">
            ckeditor( 'txtcontent');
          </script>
        </div>

        <!-- textarea -->
        <div class="form-group">
          <label>Mô tả chi tiết</label>
          <textarea class="form-control" rows="5" name="txtdescription" placeholder="...">{!! old('txtdescription') !!}</textarea>
          <script language="javascript">
            ckeditor( 'txtdescription');
          </script>
        </div>

        <!-- text input -->
       
         <!-- <div class="form-group">
          <label>Trạng thái</label>
          <label class="radio-inline"><input type="radio" name="txtpublish" value="0"> Ẩn</label>
          <label class="radio-inline"><input type="radio" name="txtpublish" value="1"> Hiện</label>
                 </div> -->

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Save  </button>
        </div>

      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!--/.col (right) -->

</form>
</div>
@endsection