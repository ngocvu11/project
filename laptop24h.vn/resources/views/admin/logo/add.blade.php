@extends('admin.master')
@section('content')
@section('content1')
    Thêm logo
    <div class="back" style="float:right">
        <a href="{{ URL::route('admin.logo.getList') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a>
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
            <label for="exampleInputEmail1">Link</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="..." name="txtlink" value="{!! old('txtlink') !!}">
          </div>

        </div>
      </div>
    </div>

    <!-- right column -->
    <div class="col-md-6">
      <!-- general form elements disabled -->
      <div class="box box-warning">
        <div class="box-body">

         <div class="form-group">
            <label for="exampleInputFile">Ảnh</label>
            <input type="file" id="exampleInputFile" name="txtimage" value="{!! old('txtimage') !!}"></br>
            <span class="label label-danger">NOTE!</span>
            <span>Vui lòng chọn file ảnh</span> 
          </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Save  </button>
        </div>

      </div>
    </div>
  </div>

</form>
</div>
@endsection