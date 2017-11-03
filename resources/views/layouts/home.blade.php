<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    @yield('info')
    <link href="{{asset('css/base.css')}}" rel="stylesheet">
    <link href="{{asset('css/index.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/new.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
    <![endif]-->
</head>
<body>
<header>
    <div id="logo"><a href="{{url('/')}}"></a></div>
    <nav class="topnav" id="topnav">
        @foreach($navs as $k=>$v)
            <a href="{{$v->nav_url}}"><span>{{$v->nav_name}}</span><span class="en">{{$v->nav_alias}}</span></a>
        @endforeach
    </nav>
</header>

@section('content')
    <h3>
        <p>最新<span>文章</span></p>
    </h3>
    <ul class="rank">
        @foreach($new as $n)
            <li><a href="{{url('a/'. $n->art_id)}}" title="{{$n->art_title}}" target="_blank">{{$n->art_title}}   </a></li>
        @endforeach
    </ul>
    <h3 class="ph">
        <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
        @foreach($hot as $h)
            <li><a href="{{url('a/'. $h->art_id)}}" title="{{$h->art_title}}" target="_blank">{{$h->art_title}}</a></li>
        @endforeach
    </ul>
    <h3 class="links">
        <p>友情<span>链接</span></p>
    </h3>
@show
<footer>
    <p>{!! Config::get('web.copyright') !!}<a href="/"></a></p>
</footer>
</body>
</html>
