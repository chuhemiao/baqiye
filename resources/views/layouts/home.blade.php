<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    @yield('info')
    <link href="{{ URL::asset('//source.shengxuezixun.com/baqiye/images/base.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('//source.shengxuezixun.com/baqiye/images/index.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('//source.shengxuezixun.com/baqiye/images/new.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('//source.shengxuezixun.com/baqiye/images/style.css') }}" rel="stylesheet">
    <meta name="baidu-site-verification" content="a77aBDuWqC" />
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('//source.shengxuezixun.com/baqiye/images/modernizr.js') }}"></script>
    <![endif]-->
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
<header>
    <div id="logo"><a href="{{url('/')}}"></a></div>
    <nav class="topnav" id="topnav">
        @foreach($navs as $k=>$v)<a href="{{$v->nav_url}}"><span>{{$v->nav_name}}</span><span class="en">{{$v->nav_alias}}</span></a>@endforeach
    </nav>
</header>

@yield('content')

<footer>
    <p>Design by chuhe <a href="http://idiot6.com/" target="_blank">梦遥奇缘</a></p>
</footer>
</body>
</html>
