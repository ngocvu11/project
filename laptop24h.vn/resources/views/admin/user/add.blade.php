 @extends('admin.master')
 @section('content')
 @section('content1')
  Thêm quản trị viên
  <div class="back" style="float:right">
        <a href="{{ URL::route('admin.user.getList') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a>
    </div>
 @endsection
 <!-- page start-->
 <div class="row">
  <div class="col-lg-12">
   @include('admin.blocks.errors')
    <div class="panel-body">
      <form role="form" class="form-horizontal tasi-form" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
          <label class="col-lg-2 ">Tên đăng nhập</label>
          <div class="col-lg-5">
           <input type="text" placeholder="Nhập vào Username" class="form-control" name="username" value="{!! old('username') !!}">
           <p class="help-block" style="padding-top:15px"></p>
         </div>
       </div>

       <div class="form-group">
        <label class="col-lg-2 ">Mật khẩu</label>
        <div class="col-lg-5">
          <input type="password" placeholder="Nhập vào Password" class="form-control" name="password">
          <p class="help-block" style="padding-top:15px"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 ">Fullname</label>
        <div class="col-lg-5">
          <input type="text" placeholder="Nhập họ tên" class="form-control" name="fullname">
          <p class="help-block" style="padding-top:15px"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 ">Email</label>
        <div class="col-lg-5">
          <input type="text" placeholder="Nhập vào Email" class="form-control" name="email" value="{!! old('email') !!}">
          <p class="help-block" style="padding-top:15px"></p>
        </div>
      </div>

      <!-- <div class="form-group">
        <label class="col-lg-2">Image</label>
        <div class="col-lg-5">
          <input type="file" name="Image" value="{!! old('Image') !!}"></br>
          <span class="label label-danger">NOTE!</span>
          <span>Vui lòng chọn file ảnh</span>
        </div>
      </div> -->

      <div class="form-group">
        <label class="col-lg-2 ">Level</label>
        <div class="col-lg-5">
          <label class="radio-inline"><input type="radio" name="level" value="1"> Admin</label>
          <label class="radio-inline"><input type="radio" name="level" value="2"> Member</label>
          <p class="help-block" style="padding-top:15px"></p>
        </div>
      </div>

       <div class="form-group">
        <label class="col-lg-2 ">Phân Quyền</label>
        <div class="col-lg-5">
          <table class="table table-striped table-hover table-bordered" >
             
        <thead>
          <tr>
            <th style="text-align:center;">Module</th>
            <th style="text-align:center;">Xem</th>
            <th style="text-align:center;">Sửa</th>
            <th style="text-align:center;">Xóa</th>
          </tr>
        </thead>
        @foreach($config as $value => $key)
        <tbody> 
          <tr>
           <td style="text-align:center;">{{ $value }} </td>
            @foreach($key as $val) 
           <td style="text-align:center;">
            <input type="checkbox" name="permissions[<?php echo $value; ?>]" value="<?php echo $val; ?>">
           </td>
            @endforeach
          </tr>  

          </tbody>
          @endforeach
        </table>
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-offset-2 col-lg-5">
          <button class="btn btn-primary" type="submit">Save</button>
        </div>
      </div>
    </form>
  </div>

</div>
</div>


@endsection