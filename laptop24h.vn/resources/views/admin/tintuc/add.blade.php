@extends('admin.master')
@section('content')
@section('content1')
    Thêm tin tức
    <div class="back" style="float:right">
        <a href="{{ URL::route('admin.product.getList') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a>
    </div>
 @endsection
<div class="panel-body">
  <form method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <!-- left column -->
    @include('admin.blocks.errors')
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">

        <!-- form start -->
        <div class="col-lg-10">
          <!-- select -->
          
           <div class="form-group">
            <label for="exampleInputEmail1">Tên</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="txtname" value="{!! old('txtname') !!}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Giới thiệu</label>
             <textarea class="form-control" rows="3" placeholder="..." name="txtgioithieu">{!! old('txtgioithieu') !!}</textarea>
            
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Ảnh</label>
            <input type="file" id="exampleInputFile" name="txtimage" value="{!! old('txtimage') !!}"></br>
            <span class="label label-danger">NOTE!</span>
            <span>Vui lòng chọn file ảnh</span> 
          </div>

          <!-- <div class="form-group">
            <p class="help-block"></p>
            <button type="button" class="btn btn-primary" id="add_img">Thêm ảnh</button>
            <div class="insert"></div>
          </div> -->

        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">
      <!-- general form elements disabled -->
      <div class="box box-warning">

        <div class="box-body">

        

         <div class="form-group">
          <label for="exampleInputPassword1">Nội dung</label>
          <textarea class="form-control" rows="3" placeholder="..." name="txtcontent" id="content1">{!! old('txtcontent') !!}</textarea>
          <script language="javascript">
            ckeditor( 'content1');
          </script>
        </div>

        <!-- textarea -->
        <div class="form-group">
          <label>Mô tả chi tiết</label>
          <textarea class="form-control" rows="3" name="txtdescription" placeholder="...">{!! old('txtdescription') !!}</textarea>
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
          <button type="submit" class="btn btn-primary">Save</button>
        </div>

      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!--/.col (right) -->

</form>
</div>
@endsection