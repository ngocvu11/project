@extends('admin.master')
@section('content1')
     Tin tức
 @endsection
@section('content')
<div class="panel-body">
  <div class="adv-table editable-table ">
    <div class="clearfix">
      <div class="btn-group">
        <a href="{!! route('admin.tintuc.getAdd') !!}">
          <button class="btn btn-primary">
            Thêm mới <i class="fa fa-plus"></i>
          </button></a>
        </div>

      </div>

      <table class="table table-striped table-hover table-bordered" id="editable-sample">
        <thead>
          <tr>
          
            <th>STT</th>
            
            <th>id</th>
            <th>Tên</th>  
            <th>Image</th>
            
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
           
           <td>{!! $items['id']; !!}</td>
           <td>{!! $items['name'] !!}</td>
           <td class="center">
           
              <img src="<?php echo '/resources/uploads/tintuc/'.$items['image'];?>" style='width:100px;'>
            
           </td>
           <td style="text-align:center;">
             <?php \Carbon\Carbon::setLocale('vi') ?>
            {!! 
              \Carbon\Carbon::createFromTimeStamp(strtotime($items['created_at']))->diffForHumans()
              
              !!}
            </td>
           <td style="text-align:center;">
               @if($items['published'] == 1 )
               
               <a href="{!! URL::route('admin.tintuc.getUnpublished',$items['id']) !!}" class="btn btn-success btn-xs fa fa-check"></a>
               
               @else
               <a href="{!! URL::route('admin.tintuc.getPublished',$items['id']) !!}" class="btn btn-danger btn-xs fa fa-times"></a>
               
               @endif
            <a href="{!! URL::route('admin.tintuc.getEdit',$items['id']) !!}" class="btn btn-primary btn-xs fa fa-pencil"></a>
            <a href="{!! URL::route('admin.tintuc.getDelete',$items['id']) !!}" class="btn btn-danger btn-xs fa fa-trash-o" onclick="return xacnhanxoa('Bạn có muốn xóa ko ?')"></a>
          </td>
          
            
          </tr>
         @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection