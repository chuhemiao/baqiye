<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    @yield('info')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="baidu-site-verification" content="a77aBDuWqC" />
    <link href="{{ URL::asset('//source.shengxuezixun.com/baqiye/images/amazeui.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('//source.shengxuezixun.com/baqiye/images/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ URL::asset('//source.shengxuezixun.com/baqiye/images/style.css') }}" rel="stylesheet"> -->
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?cc72461e477344d1c57bc9b60d7efb7c";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</head>
<body>
<!-- header -->
<header class="am-topbar am-topbar-fixed-top">
  <h1 class="am-topbar-brand">
    <a href="{{url('/')}}">扒企业</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
       @foreach($navs as $k=>$v)
       
        <li ><a href="{{$v->nav_url}}">{{$v->nav_name}}</a></li>

       @endforeach
    </ul>
  </div>
</header>
<!-- header  end-->

@yield('content')

<!-- footer -->
<div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
  <a href="#top" title="">
      <img class="am-gotop-icon-custom" src="http://source.shengxuezixun.com/images/scrollup.png" />
  </a>
</div>
  
<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
    <div class="am-footer-miscs ">
        <p>{{Config::get('web.copyright')}}</p>
    </div>
</footer>
<!-- footer end -->
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="http://source.shengxuezixun.com/baqiye/images/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://source.shengxuezixun.com/baqiye/images/jquery.min.js"></script>
<!--<![endif]-->
<script src="http://source.shengxuezixun.com/baqiye/images/amazeui.min.js"></script>
</body>
</html>
