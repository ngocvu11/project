<div class="content_top">
    		<div class="heading">
    		<h3>Tìm theo</h3>
            <div class="arrow-right1 pull-left"></div>
    		</div>
    		<div class="dropdown1">
              <button class="dropbtn1">Thương hiệu <i class="fa fa-caret-down" aria-hidden="true"></i></button>
              <div class="dropdown-content1">
                
               
                @foreach($menu1 as $items1)
                @if($items1->id == 1)
                @foreach($menu2 as $items2)
                @if($items2->parent_id == $items1->id)
                <a href="{{ URL('loaisanpham',[$items2->id]) }}">{{$items2->name}}</a>
                @endif
                @endforeach
                 @endif
                 @endforeach
                 
                
              </div>
            </div>
    		
            <div class="dropdown1">
              <button class="dropbtn1">Giá sản phẩm <i class="fa fa-caret-down" aria-hidden="true"></i></button>
              <div class="dropdown-content1">
                @for($i = 0; $i < 5;$i++)
                @if($i < 4)
                <a href="{{ URL('locsanpham', ($i+1))}}">{{ (($i+1)*5).' triệu - ' .(($i+2)*5).' triệu'}}</a>
                
                @else
                <a href="{{ URL('locsanpham', ($i+1))}}">{{ 'Trên '.(($i+1)*5).' triệu'}}</a>
            
                @endif
                @endfor
              </div>
            </div>

            <div class="dropdown1">
              <button class="dropbtn1">Màn hình <i class="fa fa-caret-down" aria-hidden="true"></i></button>
              <div class="dropdown-content1">
                @for($i = 0; $i < 5;$i++)
                @if($i < 4)
                <a href="{{ URL('locsanphamtheomh', ($i+1))}}">{{ 'Khoảng ' . (($i+1)+11) .' inch'}}</a>
                @endif
                @endfor
              </div>
            </div>

            <div class="dropdown1">
              <button class="dropbtn1">Bộ nhớ RAM <i class="fa fa-caret-down" aria-hidden="true"></i></button>
              <div class="dropdown-content1">
                @for($i = 0; $i < 5;$i++)
                @if($i == 0)
                <a href="{{ URL('locsanphamtheoram', ($i+1))}}">{{' Dưới ' .(($i+1)*4).' GB'}}</a>
                @elseif($i < 4 )
                <a href="{{ URL('locsanphamtheoram', ($i+1))}}">{{ (($i+1)*2).' GB '}}</a>
                @else
                <a href="{{ URL('locsanphamtheoram', ($i+1))}}">{{ '16 GB '}}</a>
                @endif
                @endfor
              </div>
            </div>

    		<div class="clearfix"></div>
    	</div>