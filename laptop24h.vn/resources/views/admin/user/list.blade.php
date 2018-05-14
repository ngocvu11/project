@extends('admin.master')
@section('content1')
     Danh sách quản trị viên
 @endsection
@section('content')
<div class="panel-body">
  <div class="adv-table editable-table ">
    <div class="clearfix">
      <div class="btn-group">
        <a href="{!! route('admin.user.getAdd') !!}">
          <button class="btn btn-primary">
            Thêm mới <i class="fa fa-plus"></i>
          </button></a>
        </div>

      </div>

      <table class="table table-striped table-hover table-bordered" id="editable-sample">
        <thead>
          <tr>
            <th style="width: 50px;">STT</th>
           
            <th>Tên người dùng</th>
            <th>Tên đăng nhập</th>
            <th>Phân quyền</th>
             <th style="text-align:center;">Thời gian tạo</th>
            <th style="width: 150px; text-align:center;">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          <?php $stt = 0 ?>
         @foreach($data as $items)
          <tr class="">
           <?php $stt = $stt+1; ?>
           <td>{!! $stt; !!}</td>
           
           <td>{!! $items['fullname'] !!}</td>
            <td>{!! $items['username'] !!}</td>
           <td class="center">
            @if($items['id'] == 1)
                Supper Admin
            @elseif($items['level'] == 1)
                Admin
            @else
                Member
            @endif       
           </td>
           <td style="text-align:center;">
             <?php \Carbon\Carbon::setLocale('vi') ?>
            {!! 
              \Carbon\Carbon::createFromTimeStamp(strtotime($items['created_at']))->diffForHumans()
              
              !!}
            </td>
           <td style="text-align:center;">
               @if($items['published'] == 1 )
               
               <a href="{!! URL::route('admin.user.getUnpublished',$items['id']) !!}" class="btn btn-success btn-xs fa fa-check"></a>
               
               @else
               <a href="{!! URL::route('admin.user.getPublished',$items['id']) !!}" class="btn btn-danger btn-xs fa fa-times"></a>
               
               @endif
            <a href="{!! URL::route('admin.user.getEdit',$items['id']) !!}" class="btn btn-primary btn-xs fa fa-pencil"></a>
            <a href="{!! URL::route('admin.user.getDelete',$items['id']) !!}" class="btn btn-danger btn-xs fa fa-trash-o" onclick="return xacnhanxoa('Bạn có muốn xóa ko ?')"></a>
          </td>
          
            
          </tr>
         @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection