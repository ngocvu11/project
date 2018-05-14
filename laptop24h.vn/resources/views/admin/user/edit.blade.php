 @extends('admin.master')
 @section('content')
 @section('content1')
  Sửa quản trị viên
  <div class="back" style="float:right">
        <a href="{{ URL::route('admin.user.getList') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a>
    </div>
 @endsection
 <!-- page start-->
 <div class="row">
  <div class="col-lg-12">
   
    <div class="panel-body">
      <form role="form" action="" class="form-horizontal tasi-form" method="post">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
          <label class="col-lg-2 ">Username</label>
          <div class="col-lg-5">
           <input type="text" placeholder="Nhập vào Username" class="form-control" name="username"
            value="{!! old('username',isset($data) ? $data['username'] : null) !!}">
           <p class="help-block" style="padding-top:15px"></p>
         </div>
       </div>

       <div class="form-group">
        <label class="col-lg-2 ">Password</label>
        <div class="col-lg-5">
          <input type="password"  class="form-control" name="password"  value="{!! old('password',isset($data) ? $data['password'] : null) !!}">
          <p class="help-block" style="padding-top:15px"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 ">Fullname</label>
        <div class="col-lg-5">
          <input type="text"  class="form-control" name="fullname" value="{!! old('fullname',isset($data) ? $data['fullname'] : null) !!}">
          <p class="help-block" style="padding-top:15px"></p>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 ">Email</label>
        <div class="col-lg-5">
          <input type="text" placeholder="Nhập vào Email" class="form-control" name="email" value="{!! old('email',isset($data) ? $data['email'] : null) !!}"">
          <p class="help-block" style="padding-top:15px"></p>
        </div>
      </div>
      @if(Auth::guard('admin')->user()->id != $id)
      <div class="form-group">
        <label class="col-lg-2 ">Kích hoạt</label>
        <div class="col-lg-5">
        <label class="radio-inline"><input type="radio" name="txtpublish" value="0" <?php echo $data['published']==0 ? 'checked == "checked"' : null  ?>> Không</label>
        <label class="radio-inline"><input type="radio" name="txtpublish" value="1" <?php echo $data['published']==1 ? 'checked == "checked"' : null  ?>> Có</label>
      </div>
        </div> 
     
      <div class="form-group">
        <label class="col-lg-2 ">User Level</label>
        <div class="col-lg-5">
          <label class="radio-inline"><input type="radio" name="level" value="1"
              @if($data['level'] == 1)
                checked="checked"
              @endif 
            > Admin</label>
          <label class="radio-inline"><input type="radio" name="level" value="2"
              @if($data['level'] == 2)
                checked="checked"
              @endif 
            > Member</label>
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
        <tbody> 
          <tr>
           <td style="text-align:center;"></td>
           
           <td style="text-align:center;">
            <input type="checkbox">
           </td>
           <td style="text-align:center;">
           <input type="checkbox">
           </td>
           <td style="text-align:center;">         
           <input type="checkbox">
           </td>   
          </tr>    
          </tbody>
        </table>
        </div>
      </div>
      @endif
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