<!-- -- -->
        @if(Session::has('flash_message'))
        <div class="row">
          <div class="col-lg-12">
              <div class="alert alert-success">
                  <button type="button" class="close close-sm" data-dismiss="alert">
                      <i class="fa fa-times"></i>
                  </button>
                  {!! Session::get('flash_message') !!}  
              </div>
          </div>
        </div>
         @endif
<!-- -- -->