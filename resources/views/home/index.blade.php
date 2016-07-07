@extends('layouts.home')
@section('info')
    <title>{{Config::get('web.web_title')}} - {{Config::get('web.seo_title')}}</title>
    <meta name="keywords" content="{{Config::get('web.keywords')}}" />
    <meta name="description" content="{{Config::get('web.description')}}" />
@endsection

@section('content')
    <!-- content -->
<div class="am-g am-g-fixed ">
            <!-- 左侧文章 -->
        <div class="am-u-md-8">
            <!-- 轮播 -->
            <div data-am-widget="slider" class="am-slider am-slider-c3" data-am-slider='{"controlNav":false}' >
                <ul class="am-slides">
                    <li>
                    <a href="/a/8"><img src="{{asset('resources/views/home/style/images/bing-1.jpg')}}">
                    <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">1</span>/4</div>远方 有一个地方 那里种有我们的梦想</div></a>

                    </li>
                    <li>
                    <a href="/a/8"><img src="{{asset('resources/views/home/style/images/bing-2.jpg')}}">
                    <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">2</span>/4</div>某天 也许会相遇 相遇在这个好地方</div></a>

                    </li>
                    <li>
                    <a href="/a/8"><img src="{{asset('resources/views/home/style/images/bing-3.jpg')}}">
                    <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">3</span>/4</div>不要太担心 只因为我相信 终会走过这条遥远的道路</div></a>

                    </li>
                    <li>
                    <a href="/a/8"><img src="{{asset('resources/views/home/style/images/bing-4.jpg')}}">
                    <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">4</span>/4</div>OH PARA PARADISE 是否那么重要 你是否那么地遥远</div></a>

                    </li>
                </ul>
            </div>
            <!-- 轮播 end-->

            <div class="am-g">
                @foreach($data as $d)
                    
                    <div class="am-u-sm-12">

                      <div class="am-thumbnail">
                        <img src="{{url($d->art_thumb)}}" alt=""/>
                        <div class="am-thumbnail-caption">
                          <h3>{{$d->art_title}}</h3>
                          <p>{{$d->art_description}}</p>
                          <p>
                            <a href="{{url('a/'.$d->art_id)}}"><button class="am-btn am-btn-secondary am-round">阅读更多</button></a>
                          </p>
                        </div>
                      </div>
                    </div>
                @endforeach

            </div>
        </div>
            <!-- 左侧文章end -->
        
          <!-- 右侧推荐 -->
        <div class="am-u-md-4 ">
          <div class="am-panel-group">

            <section class="am-panel am-panel-primary">
              <div class="am-panel-hd">关于我们</div>
              <div class="am-panel-bd">
                <p class="am-thumbnail"><img src="{{asset('resources/views/home/style/images/baqiye_erweima.jpg')}}"  alt="扒企业"></p>
              </div>
            </section>

            <section class="am-panel am-panel-secondary">
              <div class="am-panel-hd">热门企业</div>
              <ul class="am-list blog-list">
                  @foreach($pics as $d)
                      <li><a href="{{url('a/'.$d->art_id)}}" title="{{$d->art_title}}">{{$d->art_title}}</a></li>
                  @endforeach
              </ul>
            </section>

            <section class="am-panel am-panel-success">
              <div class="am-panel-hd">团队成员</div>
              <div class="am-panel-bd">
                <ul class="am-avg-sm-4 blog-team">
                    <p>梦遥奇缘</p>
                </ul>
              </div>
            </section>

            <section class="am-panel am-panel-default">
              <div class="am-panel-hd">友情链接</div>
              <div class="am-panel-bd">
                <ul class="am-avg-sm-4 blog-team">
                    @foreach($links as $l)
                    <p><a href="{{$l->link_url}}" target="_blank">{{$l->link_name}}</a></p>
                    @endforeach
                </ul>
              </div>
            </section>
          </div>
        </div>
          <!-- 右侧推荐 end-->

</div>
<!-- content end -->
@endsection