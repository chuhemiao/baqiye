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
                            <a href="{{asset('resources/views/home/style/images/bing-1.jpg')}}" class="">
                              <img src="{{asset('resources/views/home/style/images/bing-1.jpg')}}"  alt="远方 有一个地方 那里种有我们的梦想"/>
                                <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                <div class="am-gallery-desc">2016-07-03</div>
                            </a>
                        </div>
                      </li>
                      <li>
                        <div class="am-gallery-item">
                            <a href="{{asset('resources/views/home/style/images/bing-2.jpg')}}" class="">
                              <img src="{{asset('resources/views/home/style/images/bing-2.jpg')}}"  alt="某天 也许会相遇 相遇在这个好地方"/>
                                <h3 class="am-gallery-title">某天 也许会相遇 相遇在这个好地方</h3>
                                <div class="am-gallery-desc">2016-07-03</div>
                            </a>
                        </div>
                      </li>
                      <li>
                        <div class="am-gallery-item">
                            <a href="{{asset('resources/views/home/style/images/bing-3.jpg')}}" class="">
                              <img src="{{asset('resources/views/home/style/images/bing-3.jpg')}}"  alt="不要太担心 只因为我相信"/>
                                <h3 class="am-gallery-title">不要太担心 只因为我相信</h3>
                                <div class="am-gallery-desc">2016-07-03</div>
                            </a>
                        </div>
                      </li>
                      <li>
                        <div class="am-gallery-item">
                            <a href="{{asset('resources/views/home/style/images/bing-4.jpg')}}" class="">
                              <img src="{{asset('resources/views/home/style/images/bing-4.jpg')}}"  alt="终会走过这条遥远的道路"/>
                                <h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
                                <div class="am-gallery-desc">2016-07-03</div>
                            </a>
                        </div>
                      </li>
                  </ul>
                <!-- 图片画廊 end -->
                <article class="am-article">
                    <div class="am-article-hd">
                      <h1 class="am-article-title">{{$field->art_title}}</h1>
                      <p class="am-article-meta">
                      <span>发布时间：{{date('Y-m-d',$field->art_time)}}</span> &nbsp;
                      <span>编辑：{{$field->art_editor}}</span> &nbsp;
                      <span>已阅读：{{$field->art_view}}</span>&nbsp;
                      </p>
                    </div>

                    <div class="am-article-bd">
                      {!! $field->art_content !!}
                    </div>
                    <h3>关键字：<span>{{$field->art_tag}} <small><div id="share-baqiye" class="am-fr" data-sites="weibo,wechat,linkedin,facebook,twitter,douban"></div></small></span> </h3>
                    <div data-am-widget="duoshuo" class="am-duoshuo am-duoshuo-default" data-ds-short-name="baqiye">
                      <div class="ds-thread" data-thread-key="{{$field->art_id}}" data-title="{{$field->art_title}}">
                      </div>
                    </div>
                    <div>
                      <p>上一篇：
                          @if($article['pre'])
                              <a href="{{url('a/'.$article['pre']->art_id)}}">{{$article['pre']->art_title}}</a>
                          @else
                              <span>没有上一篇了</span>
                          @endif
                      </p>
                      <p>下一篇：
                          @if($article['next'])
                              <a href="{{url('a/'.$article['next']->art_id)}}">{{$article['next']->art_title}}</a>
                          @else
                              <span>没有下一篇了</span>
                          @endif
                      </p>
                    </div>
                    <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />

                    <div>
                        <h2>类似企业</h2>
                        <ul>
                            @foreach($data as $d)
                            <li><a href="{{url('a/'.$d->art_id)}}" title="{{$d->art_title}}">{{$d->art_title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </article>            
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