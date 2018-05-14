@if(count($errors) > 0)
 @foreach($errors->all() as $error)
 <div class="row">
  <div class="col-lg-12">
    <div class="alert alert-danger">
      <button type="button" class="close close-sm" data-dismiss="alert">
        <i class="fa fa-times"></i>
      </button>
      {!! $error !!}  
    </div>
  </div>
</div>
@endforeach
@endif