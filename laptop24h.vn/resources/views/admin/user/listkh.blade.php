@extends('admin.master')
@section('content1')
     Danh sách khách hàng đăng ký
 @endsection
@section('content')
<div class="panel-body">
  <div class="adv-table editable-table ">
    <div class="clearfix">
      

      </div>

      <table class="table table-striped table-hover table-bordered" id="editable-sample">
        <thead>
          <tr>
            <th style="width: 50px;">STT</th>
           
            <th>Tên người dùng</th>
            <th>Email</th>
            <th>Ảnh</th>
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
           
          
            <td>{!! $items['username'] !!}</td>
           <td>{!! $items['email'] !!}</td>
           <td><img src="{{$items['image']}}" style="width: 50px; height:50px"></td>
           <td style="text-align:center;">
             <?php \Carbon\Carbon::setLocale('vi') ?>
            {!! 
              \Carbon\Carbon::createFromTimeStamp(strtotime($items['created_at']))->diffForHumans()
              
              !!}
            </td>
           <td style="text-align:center;">
             
            <a class="btn btn-primary btn-xs fa fa-eye" data-toggle="modal" href="#myModal{{$items->id}}"></a>
          </td>
          
             <!-- Modal -->
            <div class="modal fade top-modal-without-space" id="myModal{{$items->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                  <div class="modal-dialog ">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                  <h4 class="modal-title">Thông tin khách hàng đăng ký</h4>
                                              </div>
                                              <div class="modal-body">
                                                  <div class="col-lg-6">
                                                    <img src="{{$items['image']}}" style="width: 50px; height:50px">
                                                  </div>   
                                                  <div class="col-lg-6">
                                                   {{ $items->username }}
                                                  </div>
                                                   <div class="col-lg-6">
                                                    {{ $items->email }}
                                                  </div>

                                                   <div class="col-lg-6">
                                                    <?php $timestamp = strtotime($items['created_at']);
                                                    $date = date('d-m-Y',$timestamp); ?>
                                                    Ngày tạo: {!! 
                                                    $date;
                                                    !!}
                                                  </div>
                                                   @foreach($chitietkh as $item)
                                                   @if($item->user_id == $items->id)
                                                        <div class="col-lg-6">
                                                         Mã kh: {{ $item->provider_user_id }}
                                                        </div>
                                                        <div class="col-lg-6">
                                                         Đăng nhập qua: {{ $item->provider }}
                                                        </div>
                                                    @endif
                                                   @endforeach
                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                 
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
          <!-- end modal -->
          </tr>
         @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection