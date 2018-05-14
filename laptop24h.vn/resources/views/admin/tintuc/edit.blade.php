@extends('admin.master')
@section('content')
@section('content1')
    Sửa tin tức
    <div class="back" style="float:right">
        <a href="{{ URL::route('admin.tintuc.getList') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a>
    </div>
 @endsection
<div class="panel-body">
  <form method="post" action="" enctype="multipart/form-data" name="frmEditPro">
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
            <label for="exampleInputEmail1">Tin tức</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="txtname" value="{!! old('txtname'),isset($tintuc) ? $tintuc['name'] : NULL !!}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Giới thiệu</label>
             <textarea class="form-control" rows="3" placeholder="..." name="txtgioithieu">{!! old('txtgioithieu',isset($tintuc) ? $tintuc['intro'] : NULL) !!}</textarea>
            
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Ảnh</label>
            <img src="{!! asset('resources/uploads/tintuc/'.$tintuc['image']) !!}" id="a" style='width:150px;'>
         </div>

          <div class="form-group">
            <input type="file" name="Image">
          </div>


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
          <textarea class="form-control" rows="3" placeholder="..." name="txtcontent">{!! old('txtcontent'),isset($tintuc) ? $tintuc['content'] : NULL !!}</textarea>
          <script language="javascript">
           ckeditor( 'txtcontent');
          </script>
        </div>

        <!-- textarea -->
        <div class="form-group">
          <label>Mô tả chi tiết</label>
          <textarea class="form-control" rows="3" name="txtdescription" placeholder="...">{!! old('txtdescription'),isset($tintuc) ? $tintuc['description'] : NULL !!}</textarea>
          <script language="javascript">
            ckeditor( 'txtdescription');
          </script>
        </div>

        <!-- text input -->
       
        <div class="form-group">
        <label>Trạng thái</label>
        <label class="radio-inline"><input type="radio" name="txtpublish" value="0" <?php echo $tintuc['published']==0 ? 'checked == "checked"' : null  ?>> Ẩn</label>
        <label class="radio-inline"><input type="radio" name="txtpublish" value="1" <?php echo $tintuc['published']==1 ? 'checked == "checked"' : null  ?>> Hiện</label>
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