@extends('frontend.master')
@section('content')
 
<div class="container">
    <?php echo $bc; ?>
</div>
<div class="main">
    <div class="content">
             @foreach($tintuc_cont as $items)  

	      <div class="section group" id="danhsach">
           
             <div class="col-lg-9">
             	
                <article class="news-detail news-wrapper">
                       
                           
                        <h2 class="news-detail-title" itemprop="headline">{{$items->name}}</h2>
                        <div class="news-detail-meta clearfix">
                            <div class="pull-left">
                                <span class="date"><i class="vta-date"></i>
                                     <?php $timestamp = strtotime($items->created_at);
                                      $date = date('d-m-Y',$timestamp); ?>
                                      {!! 
                                      $date;
                                      !!}
                                </span> - <span class="date-status">Tin mới</span>                              
                            </div>

                            <span class="pull-right">
                                <!--Social like here-->
                            </span>
                          <div class="pull-right">
                               <span class="view"><i class="vta-eye"></i> 61555 lượt xem</span>
                               <span class="comment-count"> 0 bình luận</span>
                           </div> 
                        </div>

                  
                    <div class="paragraph">
                        <h2 style="text-align: justify;"><span style="font-size: medium;"><strong>{{ $items->intro }}</strong></span></h2>
                        <p style="text-align: center;"><img src="{{ asset('resources/uploads/tintuc/'.$items->image) }}" alt="{{ $items->name }}" width="700" height="405"></p>
                        <p style="text-align: center;">Ảnh minh họa từ Zing.vn</p>

                        <p style="text-align: justify;"><?php echo $items->intro;?></p>
                        <p style="text-align: center;"><?php echo $items->content;?></p>
                        <p style="text-align: center;"><?php echo $items->description;?></p>

                        <p align="right" style="text-align: right;"><b>LB</b></p>
                        <p style="text-align: justify;">&nbsp;</p>                    
                        </div>

                       
                </article>
               
                   	
            </div>
			
				<div class="clearfix"></div>
			</div>
             @endforeach
		</div>
	</div>
@endsection
