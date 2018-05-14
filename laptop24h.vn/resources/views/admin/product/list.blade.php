@extends('admin.master')
@section('content1')
     Sản phẩm
 @endsection
@section('content')
<div class="panel-body">
  <div class="adv-table editable-table ">
    <div class="clearfix">
      <div class="btn-group">
        <a href="{!! route('admin.product.getAdd') !!}">
          <button class="btn btn-primary">
            Thêm mới <i class="fa fa-plus"></i>
          </button></a>
        </div>

      </div>

      <table class="table table-striped table-hover table-bordered" id="editable-sample">
        <thead>
          <tr>
            <th style="width: 50px;">STT</th>
            <th>MÃ SP</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Tình Trạng</th>
            <th>Danh mục</th>
            <th>Thời gian tạo</th>
            <th>Top STT</th>
            <th style="width: 150px; text-align:center;">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          <?php $stt = 0 ?>
          @foreach($data as $items)
          <tr class="">
           <?php $stt = $stt+1; ?>
           <td>{!! $stt; !!}</td>
           <td>{{ $items['masp'] }}</td>
           <td>{{ $items['name'] }}</td>
           <td>
            @if($items['image'])
              <img src="<?php echo '/resources/uploads/'.$items['image'];?>" style='width:100px;'>
            @endif
           </td>
           <td>{{ number_format($items['price'],0,",",".") }} VNĐ</td>
           <td>{{ $items['tinhtrang'] }}</td>
           <td>
              <?php 
                 $cate = DB::table('cates')->where('id',$items["cate_id"])->first();  
              ?>
              @if(!empty($cate->name))
                {!! $cate->name !!}       
              @endif
                  
           </td>
           <td class="center">
                <?php \Carbon\Carbon::setLocale('vi') ?>
            {!! 
              \Carbon\Carbon::createFromTimeStamp(strtotime($items['created_at']))->diffForHumans()
              
              !!}
           </td>
            <td>{{ $items['stt'] }}</td>
           <td style="text-align:center;">
              @if($items['published'] == 1)
               <a href="{!! URL::route('admin.product.getUnpublished',$items['id']) !!}" class="btn btn-success btn-xs fa fa-check"></a>
              @else 
               <a href="{!! URL::route('admin.product.getPublished',$items['id']) !!}" class="btn btn-danger btn-xs fa fa-times"></a>
              @endif
            <a href="{!! URL::route('admin.product.getEdit',$items['id']) !!}" class="btn btn-primary btn-xs fa fa-pencil"></a>
            <a href="{!! URL::route('admin.product.getDelete',$items['id']) !!}" class="btn btn-danger btn-xs fa fa-trash-o" onclick="return xacnhanxoa('Bạn có muốn xóa ko ?')"></a>
          </td>
          </tr>
          @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection