@extends('frontend.master')
@section('content')
 
<div class="container">
    <?php echo $bc; ?>
</div>
<div class="main">
    <div class="content">
             

	      <div class="section group" id="danhsach">
           
             <div class="col-lg-9">
             	@foreach($data as $items)  
               <div class="news-item">
  
                  <div class="row">
                      <div class="col-sm-5" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                          <a href="{{URL('chitiettintuc',[$items->id])}}">
                              <figure data-feedback="fb:likes, fb:comments">
                                  <img alt="{{ $items->name }}" class="img-responsive" width="550" height="282" src="{{ asset('resources/uploads/tintuc/'.$items->image) }}">
                              </figure>
                          </a>
                          <meta itemprop="url" content="{{ asset('resources/uploads/tintuc/'.$items->image) }}">
                          <meta itemprop="width" content="330">
                          <meta itemprop="height" content="185">
                      </div>
                      <div class="col-sm-7">
                          <div class="news-item-content">
                              <h3 class="title" itemprop="headline">
                                  <a href="{{URL('chitiettintuc',[$items->id])}}"> {{$items->name}}</a>
                              </h3>
                              <div class="meta">
                                  <span class="date"><i class="vta-date"></i>
                                                   <?php $timestamp = strtotime($items->created_at);
                                                    $date = date('d-m-Y',$timestamp); ?>
                                                    {!! 
                                                    $date;
                                                    !!}  </span> - <span class="date-status">Tin mới</span>
                              </div>
                              <div itemprop="description">
                                  <p><span>{{$items->intro}}</span></p>
                              </div>
                              
                          </div>
                      </div>
                  </div>
                  <div class="news-item-comment">
                      <span class="view"><i class="vta-eye"></i> 6596  lượt xem</span>
                      <span class="comment-count"> 0   bình luận</span>
                  </div>
              </div>
                  @endforeach  	
            </div>
			       <div class="col-lg-3">
                    <aside class="news-detail-widget">
                        <h3 class="title"><span>TIN HOT</span></h3>
                        <ul class="clearlist" id="newhot">
                        <li class="tin-hot">
                            <div itemscope="" itemtype="http://schema.org/NewsArticle">
                                <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://google.com/article">
                                <div itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                                    <a href="dan-dau-xu-huong-mau-cua-nam-2018-samsung-ra-mat-galaxy-a8-tim-bac-tu-tin-khang-dinh-chat-toi.html" title="Dẫn đầu xu hướng màu của năm 2018, Samsung ra mắt Galaxy A8 Tím Bạc tự tin khẳng định chất tôi">
                    <figure data-feedback="fb:likes, fb:comments"> <img src="https://cdn1.vienthonga.vn/image/2018/2/1/270_dan-dau-xu-huong-mau-cua-nam-2018-samsung-ra-mat-galaxy-a8-tim-bac-tu-.jpg" alt="Dẫn đầu xu hướng màu của năm 2018, Samsung ra mắt Galaxy A8 Tím Bạc tự tin khẳng định chất tôi" class="img-responsive"></figure>
                                                           
                                                        </a>
                                                      
                                </div>
                                <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization" style="display: none;">
                                    <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                                      <img src="https://vienthonga.vn/Content/images/logo_vta.png" alt="Dẫn đầu xu hướng màu của năm 2018, Samsung ra mắt Galaxy A8 Tím Bạc tự tin khẳng định chất tôi">
                                      <meta itemprop="url" content="https://vienthonga.vn/Content/images/logo_vta.png">
                                      <meta itemprop="width" content="180">
                                      <meta itemprop="height" content="37">
                                    </div>
                                    <meta itemprop="name" content="Google">
                                </div>
                                <a href="dan-dau-xu-huong-mau-cua-nam-2018-samsung-ra-mat-galaxy-a8-tim-bac-tu-tin-khang-dinh-chat-toi.html" itemprop="headline" title="Dẫn đầu xu hướng màu của năm 2018, Samsung ra mắt Galaxy A8 Tím Bạc tự tin khẳng định chất tôi">Dẫn đầu xu hướng màu của năm 2018, Samsung ra mắt Galaxy A8 Tím Bạc tự tin khẳng định chất tôi</a>             
                                <meta itemprop="datePublished" content="2/5/2018 3:11:06 PM">
                                <meta itemprop="dateModified" content="2/5/2018 3:11:06 PM">
                            </div>
                            </li>
                            </ul>
                    </aside>
                    
                </div>
				<div class="clearfix"></div>
			</div>
            
		</div>
	</div>
@endsection
