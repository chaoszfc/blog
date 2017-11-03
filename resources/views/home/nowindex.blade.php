<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>配now</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="css/qfbase.css">
<!--齐峰的共有样式-->
<link rel="stylesheet" href="css/ql_index.css">
<!--齐峰首页banner样式-->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/qlclass.pl.js"></script>
<body>
<!--web-top start-->
<div class="w-all w-minw bd-sd-b hg-45">
    <div class="w-main m-auto"> 
        <!-- top left start-->
        <div class="fl"> <a href="index.html" class="dsblock fl fs-12 ftc-000000 line-h45 m-l-70">首页</a>
        </div>
        <!-- top left end--> 
        <!-- top right start-->
        <div class="fr"> 
            <!--登录注册 start-->
            <div class="fl"> <a class="fs-12 ftc-000000 line-h45" href="#"><i class="p-l-20 ql_icon login_icon hg-45 fl m-r-10"></i>请登录</a> <span class="fs-12 ftc-000000 line-h45 m-l-15 m-r-15">|</span> <a class="fs-12 ftc-000000 line-h45" href="#">注册</a> </div>
            <!--登录注册 end--> 

            <!--top 客服中心 start-->
            <div class="hover-topkf fl m-l-45">
                <div class="top_kf fl fs-12 ftc-000000 line-h45"><span class="dsblock hg-45">客服中心<i class="p-l-10 m-l-10 ql_icon top_kficon hg-45 fr"></i></span>
                    <ul class="top_kf_list bg-c-ffffff bd-sd-b">
                        <li> <a href="#"><i class="ql_icon"></i>联系电话：18814129925</a> </li>
                        <li> <a href="#"><i class="ql_icon"></i>微信：4313414</a> </li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <!--top 客服中心 start--> 
        </div>
        <!-- top right end--> 
    </div>
</div>
<!--web-top end-->
<div class="clear"></div>
<!--web logo and search start-->
<div class="w-main m-auto m-t-37 m-b-25 ovhidden"> 
    <!--web logo start--> 
    <a href="index.html" class="logo fl"><img src="pics/logo.jpg" width="240" height="100" alt="peinow(图)"/></a>
    <!--web logo end-->
    <!--web search start-->
    <div class="search w-540 m-l-115 m-t-15 fl">
        <form action="#" method="get" id="searchform" name="searchform" onSubmit="return checkSearchForm()" class="w-540 search-form">
            <input class="p-l-15 bd-2s-e9511b w-435 line-h35 hg-35 fs-12 ftc-a9a9a9 fl" type="text" name="keywords" id="keyword" value="搜索：初中物理" onfocus="if(this.value == '搜索：初中物理')this.value = ''" onblur="if(this.value == '')this.value='搜索：初中物理'" autocomplete="off">
            <input type="hidden" value="k1" name="dataBi">
            <button type="submit" class="w-85 line-h39 hg-39 fs-16 ftc-ffffff bg-c-e9511b fl">提交</button>
        </form>
        <div class="w-540 fl" id="hotkeywords"> <a href="#" class="dsblock fs-12 ftc-8b8b8b line-h30 fl m-r-20">一年级</a> <a href="#" class="dsblock fs-12 ftc-8b8b8b line-h30 fl m-r-20">二年级</a> <a href="#" class="dsblock fs-12 ftc-8b8b8b line-h30 fl m-r-20">三年级</a> <a href="#" class="dsblock fs-12 ftc-8b8b8b line-h30 fl m-r-20">语文</a> <a href="#" class="dsblock fs-12 ftc-8b8b8b line-h30 fl m-r-20">数学</a>
            <div class="clear"></div>
        </div>
    </div>
    <!--web search end-->
    <div class="fr"><a href="now" class="logo fl"><img src="pics/logo.jpg" width="240" height="100" alt="peinow(图)"/></a> </div>
</div>
<!--web logo and search end--> 
<!--网站导航 start-->
<div class="w-all w-minw hg-60 bd-bs-e9511b bg-c-ffffff ql_webnav">
    <!--网站导航 start-->
    <div class="w-main m-auto ps-r hg-60">
        <!--全部商品分类-->
        <div class="hc_lnav jslist">
            <div class="allbtn">
                <h2><a href="#">全部硬件分类</a></h2>
                <ul style="width:250px" class="jspop box">
                    <!--导航-->
                    @foreach($categ as $c)
                        <li class="a1">
                            <div class="tx"><a href="">{{$c->product_name}}</a> </div>
                            <dl>
                                @foreach($sub as $s)
                                    @if($s->product_pid == $c->product_id)
                                        <dd><a href="#">{{$s->product_name}}</a><span>/</span></dd>
                                    @endif
                                @endforeach
                            </dl>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="w-all w-minw bg-c-fcfcfc ovhidden">
        <!--全部商品分类-->
        <ul class="w-950 hg-60 ql_nav">
            <li><a href="now" class="cur">首页</a></li>
            <li><a href="hardware">硬件|外设</a></li>
            <li><a href="双师单页.html">资讯</a></li>
            <li><a href="考试日历.html">图赏</a></li>
            <li><a href="讲师.html">名匠推荐</a></li>
            <li><a href="分校列表.html">智能硬件</a></li>
            <li><a href="分校列表.html">IT百科</a></li>
        </ul>
</div>
<!--网站导航 end--> 
<!--web banner start-->
<div class="w-main m-auto">
    <div id="full-screen-slider">
        <ul id="slides">
            <li style="background:url('pics/lunbo1.jpg') center top no-repeat;"><a href="javascript:void(0)"></a></li>
            <li style="background:url('pics/lunbo2.jpg') center top no-repeat;"><a href="javascript:void(0)"></a></li>
            <li style="background:url('pics/lunbo3.jpg') center top no-repeat;"><a href="javascript:void(0)"></a></li>
        </ul>
    </div>
</div>
<script type="text/javascript" src="js/banner.index.js"></script> 
<!--web banner end--> 
<!--web home main-body start-->
    <!--hot_news start--> 
    <!--分割线 start-->
    <div class="w-main m-auto">
        <div class="w-main fl hg-30"></div>
        <div class="w-main fl hg-1 bg-c-e5e5e5"></div>
        <div class="w-main fl hg-30"></div>
    </div>
    <!--分割线 start--> 
    <!--web home Advertisement start-->
    <div class="w-main m-auto">
        <div class="w-main m-t-15 ovhidden fl">
            <h3 class="fl fs-20 ft-w-b line-h50"><span class="dsblock ql_icon ql_h_class tx-ind m-r-15 fl">热门配置</span>图赏</h3>
            <a href="课程列表页面.html" class="fr fs-14 ftc-000000 line-h50">查看更多></a> </div>
        <a href="分校列表.html" class="dsblock homead ovhidden w-380 hg-170 fl">
            <img src="pics/no1.jpg"  alt=""/></a> <a  class="dsblock homead ovhidden w-380 hg-170 m-l-30 fl">
            <img src="pics/tu2.jpg"  alt=""/></a> <a  class="dsblock homead ovhidden w-380 hg-170 m-l-30 fl">
            <img src="pics/tu3.jpg"  alt=""/></a>
    </div>
    <!--web home Advertisement end-->
    <!--分割线 start-->
    <div class="w-main m-auto">
        <div class="w-main fl hg-40"></div>
        <div class="w-main fl hg-1 bg-c-e5e5e5"></div>
        <div class="w-main fl hg-8"></div>
    </div>
    <!--分割线 start--> 
    <!--精选课程 start-->
    <div class="w-main m-auto"> 
        <!--title start-->
        <div class="w-main m-t-15 ovhidden fl">
            <h3 class="fl fs-20 ft-w-b line-h50"><span class="dsblock ql_icon ql_h_class tx-ind m-r-15 fl">热门配置</span>热门配置</h3>
            <a href="课程列表页面.html" class="fr fs-14 ftc-000000 line-h50">查看更多></a> </div>
        <!--title end--> 
    </div>
    <div class="w-main m-auto">
        <ul class="home_calss w-1224 ovhidden">
            @foreach($pics as $p)
            <li class="w-280 m-l-13 m-r-13 bg-c-ffffff m-t-8 m-b-23 fl">
                <a href="{{url('a/'.$p->hardware_id)}}" class="dsblock w-280 hg-200 ovhidden ps-r">
                    <img src="{{url('/'.$p->hardware_thumb)}}">
                </a>
                <div class="w-255 p-l-10 p-r-15 fl">
                    <div class="home_calsstxt w-155 fl">
                        <h3 class="w-all fs-16 ftc-000000 line-h32  one_hidden  m-t-6 fl">{{($p->hardware_name)}}</h3>

                        <span class="dsblock w-all fs-14 ftc-ff0000 line-h32 fl">类   型：{{($p->product_name)}}</span> </div>

                    <a href="{{url(''.$p->hardware_id)}}" class="dsblock ql_icon hg-34 line-h34 fs-14 ftc-ffffff m-t-22 ql_h_btnfr w-86 text-c fr">查看详情</a> </div>
            </li>
            @endforeach
            <div class="clear"></div>
        </ul>
    </div>
    <!--精选课程 end--> 
    <!--分割线 start-->
    <div class="w-main m-auto">
        <div class="w-main fl hg-11"></div>
        <div class="w-main fl hg-1 bg-c-e5e5e5"></div>
        <div class="w-main fl hg-8"></div>
    </div>
    <!--分割线 start--> 
    <!--名师团队 start-->
    <div class="w-main m-auto"> 
        <!--分割线 start-->
        <div class="w-main m-auto hg-60"></div>
        <!--分割线 start--> 
    </div>
    <!--名师团队 end--> 
</div>
<!--web home main-body end--> 


<script>
    $(document).ready(function(){
        var w = parseInt(($(window).width()-1200)/2);
        $(".qlban_ad").css("right",w)
    });

</script>
</body>
</html>