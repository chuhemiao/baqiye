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
    <link href="{{asset('resources/views/home/style/css/amazeui.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/style/css/app.css')}}" rel="stylesheet">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68661235-2', 'auto');
      ga('send', 'pageview');

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
      <img class="am-gotop-icon-custom" src="{{asset('resources/views/home/style/images/scrollup.png')}}" />
  </a>
</div>
  
<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
    <div class="am-footer-miscs ">
        <p>{{Config::get('web.copyright')}}</p>
    </div>
</footer>
<!-- footer end -->
<!--[if lt IE 9]>
<script src="{{asset('resources/views/home/style/js/jquery.min.js')}}"></script>
<script src="{{asset('resources/views/home/style/js/modernizr.js')}}"></script>
<script src="{{asset('resources/views/home/style/js/amazeui.ie8polyfill.min.js')}}"></script>

<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{asset('resources/views/home/style/js/jquery.min.js')}}"></script>
<!--<![endif]-->
<script src="{{asset('resources/views/home/style/js/amazeui.min.js')}}"></script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

</body>
</html>
