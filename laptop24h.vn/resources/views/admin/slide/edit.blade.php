@extends('admin.master')
@section('content')
@section('content1')
    Sửa slide
    <div class="back" style="float:right">
        <a href="{{ URL::route('admin.slide.getList') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a>
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
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="txtname" value="{!! old('txtname',isset($data) ? $data['name'] : '') !!}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Link</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="txtlink" value="{!! old('txtlink',isset($data) ? $data['link'] : '') !!}">
          </div>
        </div>
      </div>
    </div>

    <!-- right column -->
    <div class="col-md-6">
      <div class="box box-warning">
        <div class="box-body">

         <div class="form-group">
            <label for="exampleInputFile">Ảnh</label>
            <img src="{!! asset('resources/uploads/slide/'.$data['image']) !!}" id="a" style='width:150px;'>
         </div>

          <div class="form-group">
            <input type="file" name="Image">
          </div>

        <div class="form-group">
            <label>Trạng thái</label>
            <label class="radio-inline"><input type="radio" name="txtpublish" value="0" <?php echo $data['published']==0 ? 'checked == "checked"' : null  ?>> Ẩn</label>
            <label class="radio-inline"><input type="radio" name="txtpublish" value="1" <?php echo $data['published']==1 ? 'checked == "checked"' : null  ?>> Hiện</label>
        </div> 

         <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
         </div>

      </div>
    </div>
  </div>

</form>
</div>
@endsection