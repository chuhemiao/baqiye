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
            <!-- 图片画廊 -->
                <ul data-am-widget="gallery" class="am-gallery am-avg-sm-3 am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }" >
                      <li>
                        <div class="am-gallery-item">
                            <a href="http://s.amazeui.org/media/i/demos/bing-1.jpg" class="">
                              <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg"  alt="远方 有一个地方 那里种有我们的梦想"/>
                                <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                <div class="am-gallery-desc">2016-07-03</div>
                            </a>
                        </div>
                      </li>
                      <li>
                        <div class="am-gallery-item">
                            <a href="http://s.amazeui.org/media/i/demos/bing-2.jpg" class="">
                              <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg"  alt="某天 也许会相遇 相遇在这个好地方"/>
                                <h3 class="am-gallery-title">某天 也许会相遇 相遇在这个好地方</h3>
                                <div class="am-gallery-desc">2016-07-03</div>
                            </a>
                        </div>
                      </li>
                      <li>
                        <div class="am-gallery-item">
                            <a href="http://s.amazeui.org/media/i/demos/bing-3.jpg" class="">
                              <img src="http://s.amazeui.org/media/i/demos/bing-3.jpg"  alt="不要太担心 只因为我相信"/>
                                <h3 class="am-gallery-title">不要太担心 只因为我相信</h3>
                                <div class="am-gallery-desc">2016-07-03</div>
                            </a>
                        </div>
                      </li>
                      <li>
                        <div class="am-gallery-item">
                            <a href="http://s.amazeui.org/media/i/demos/bing-4.jpg" class="">
                              <img src="http://s.amazeui.org/media/i/demos/bing-4.jpg"  alt="终会走过这条遥远的道路"/>
                                <h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
                                <div class="am-gallery-desc">2016-07-03</div>
                            </a>
                        </div>
                      </li>
                </ul>
              <!-- 图片画廊 end -->
          <!-- article list -->
          <div class="am-g">
            @foreach($data as $d)

            <div class="am-u-sm-12">

              <div class="am-thumbnail">
                <img src="{{url($d->art_thumb)}}" alt=""/>
                <div class="am-thumbnail-caption">
                  <h3>{{$d->art_title}}</h3>
                  <p>...</p>
                  <p>
                    <a href="{{url('a/'.$d->art_id)}}"><button class="am-btn am-btn-secondary am-round">阅读更多</button></a>
                  </p>
                </div>
              </div>
            </div>
            @endforeach
            <ul class="am-pagination am-pagination-right">
                {{$data->links()}}
            </ul>
          </div>
          <!-- article list end-->
        </div>
            <!-- 左侧文章end -->
        
          <!-- 右侧推荐 -->
        <div class="am-u-md-4 ">
          <div class="am-panel-group">

            <section class="am-panel am-panel-primary">
              <div class="am-panel-hd">关于我们</div>
              <div class="am-panel-bd">
                <p class="am-thumbnail"><img src="http://source.shengxuezixun.com/baqiye/images/baqiye_erweima.jpg"  alt="扒企业"></p>
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