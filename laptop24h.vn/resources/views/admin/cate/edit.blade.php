 @extends('admin.master')
 @section('content1')
    Sửa danh mục
    <div class="back" style="float:right">
        <a href="{{ URL::route('admin.cate.getList') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a>
    </div>
 @endsection
 @section('content')
 <div class="row">
    <div class="col-lg-12">
    @include('admin.blocks.errors')
        <div class="panel-body">
          <form role="form" class="form-horizontal tasi-form" method="post" action="">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="form-group">
              <label class="col-lg-2 ">Danh mục</label>
              <div class="col-lg-5">
                <select class="form-control" name="txtparent" >              
                  <option value="0">Chọn danh mục</option>
                  {!! cate_parent($data2,0,"--|",$cate['parent_id']) !!}
                </select>
                <p class="help-block" style="padding-top:15px"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-2 ">Tên danh mục</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" name="txtname" value="{!! old('txtname',isset($cate) ? $cate['name'] : NULL) !!}">
                <p class="help-block" style="padding-top:15px"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-2 ">Order</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" name="txtorder" value="{!! old('txtorder', isset($cate) ? $cate['order'] : Null) !!}">
                <p class="help-block" style="padding-top:15px"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-2 ">Keywords</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" name="txtkeywords" value="{!! old('txtkeywords', isset($cate) ? $cate['keywords'] : Null) !!}">
                <p class="help-block" style="padding-top:15px"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-2 ">Mô tả</label>
              <div class="col-lg-5">
                <textarea rows="3" type="text" class="form-control" name="txtdesc">{{ old('txtdesc', isset($cate) ? $cate['description'] : Null) }}</textarea>
                <p class="help-block" style="padding-top:15px"></p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-2 ">Trạng thái</label>
              <div class="col-lg-5">              
                  <label class="radio-inline"><input type="radio" name="txtpublish" value="0" <?php echo $cate['published']==0?'checked="checked"':''?>> Ẩn</label>
                  <label class="radio-inline"><input type="radio" name="txtpublish" value="1" <?php echo $cate['published']==1?'checked="checked"':''?>> Hiện</label>
                  <p class="help-block" style="padding-top:15px"></p>
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-5">
                <button class="btn btn-primary" type="submit">Lưu</button>
              </div>
            </div>
          </form>
        </div>
     
    </div>
  </div>
  @endsection