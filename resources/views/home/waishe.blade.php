<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>配now--硬件--外设</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="css/qfbase.css">
<!--齐峰的共有样式-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="js/qlclass.pl.js"></script>
<body>
<!--web-top start-->
<div class="w-all w-minw bd-sd-b hg-45">
    <div class="w-main m-auto"> 
        <!-- top left start-->
        <div class="fl">
            <a href="index.html" class="dsblock fl fs-12 ftc-000000 line-h45 m-l-70">首页</a>
            <!--top 导航 start-->
            <div class="hover-topnav fl m-l-45">
                <div class="dh_nav fl fs-12 ftc-000000 line-h45"><span class="dsblock hg-45"><i class="p-l-15 ql_icon dh_topnav hg-45 fl"></i>导航</span>
                     <ul class="dh_nav_sub bg-c-ffffff bd-sd-b">
                         <li><a href="index.html" class="cur">首页</a></li>
                         <li><a href="课程列表页面.html">CPU</a></li>
                         <li><a href="双师单页.html">显卡</a></li>
                         <li><a href="考试日历.html">主板</a></li>
                         <li><a href="讲师.html">硬盘</a></li>
                         <li><a href="分校列表.html">外设</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <!--top 导航 end--> 
            <!--top wap start-->
            <div class="hover-topnav fl m-l-45">
                <div class="dh_nav fl fs-12 ftc-000000 line-h45"><span class="dsblock hg-45"><i class="p-l-15 ql_icon top_wapewem hg-45 fl"></i>手机端</span>
                    <div class="top_wap_ewem bg-c-ffffff bd-sd-b"> <img src="pics/wap.png" width="100" alt=""/>
                        <p class="w-all fs-13 text-c line-h25">扫描二维码</p>
                    </div>
                </div>
            </div>
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
    <a href="now" class="logo fl"><img src="pics/logo.jpg" width="240" height="100" alt="peinow(图)"/></a>
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
                        <div class="tx"><a href="/">{{$c->product_name}}</a> </div>
                        <dl>
                            @foreach($sub as $s)
                                @if($s->product_pid == $c->product_id)
                            <dd>
                                <a href="#">{{$s->product_name}}</a><span>/</span>
                            </dd>
                                @endif
                            @endforeach
                        </dl>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--全部商品分类-->
         <ul class="w-950 hg-60 ql_nav">
             <li><a href="now" >首页</a></li>
             <li><a href="hardware" class="cur">硬件|外设</a></li>
             <li><a href="双师单页.html">资讯</a></li>
             <li><a href="考试日历.html">图赏</a></li>
             <li><a href="讲师.html">名匠推荐</a></li>
             <li><a href="分校列表.html">智能硬件</a></li>
             <li><a href="分校列表.html">IT百科</a></li>
    </ul>
    </div>
</div>
<!--网站导航 end--> 

<!--web main body start-->
<div class="w-all w-minw bg-c-fcfcfc ovhidden">
    <div class="w-main m-auto"> 
        <!--面包屑 start-->
        <div class="w-main fs-14 ftc-7a7a7a line-h45 m-t-18 m-b-18 fl"> 网站位置：首页  >  硬件|外设</div>
        <!--filter start-->
        <div class="w-1150 p-l-25 p-r-25 bg-c-ffffff fl">
            <div class="w-1150 fl">
                <h3 class="fs-14 ftc-000000 line-h60 fl">全部硬件</h3>
            </div>
            
            <!--分割线-->
            <div class="w-all fl hg-1 bg-c-d2d2d2"></div>
            <!--分割线-->
            <div class="w-1150 ql_ftclass">
                <div class="w-all p-t-16 p-b-16 ovhidden">
                    <div class="w-80 fs-14 line-h28 m-t-6 m-b-6 ftc-888888 fl">硬件类型</div>
                    <ul class="w-970 fl">
                        <li class="w-70 m-l-24 fl"><a href="/cpu" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl">CPU</a></li>
                        <li class="w-70 m-l-24 fl"><a href="/board" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl ">主板</a></li>
                        <li class="w-70 m-l-24 fl"><a href="/memory" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl ">内存</a></li>
                        <li class="w-70 m-l-24 fl"><a href="/driver" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl  ">显卡</a></li>
                        <li class="w-70 m-l-24 fl"><a href="/discs" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl ">硬盘</a></li>
                        <li class="w-70 m-l-24 fl"><a href="/waishe" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl class_cur">外设</a></li>
                        <div class="clear"></div>

                    </ul>
                </div>

                <!--分割线-->
                <div class="w-all fl hg-1 bg-c-d2d2d2"></div>
                <div class="w-all p-t-16 p-b-16 ovhidden">
                    <div class="w-80 fs-14 line-h28 m-t-6 m-b-6 ftc-888888 fl">生产厂方</div>
                    <ul class="w-970 fl">
                        {{--<li class="w-70 m-l-24 fl"><a href="#" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl class_cur">不限</a></li>--}}
                        <li class="w-70 m-l-24 fl"><a href='/waishe?company=1' class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl
                        <?php if(isset($_GET['company'])&&$_GET['company']=='1'){echo "class_cur";}?>
                         ">樱桃键盘</a></li>
                        <li class="w-70 m-l-24 fl"><a href='/waishe?company=2' class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl
                        <?php if(isset($_GET['company'])&&$_GET['company']==2){echo "class_cur";}?>
                         ">ikbc键盘</a></li>
                        <li class="w-70 m-l-24 fl"><a href='/waishe?company=3' class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl
                        <?php if(isset($_GET['company'])&&$_GET['company']==3){echo "class_cur";}?>
                                    ">雷蛇系列</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>

                <!--分割线-->
                <div class="w-all fl hg-1 bg-c-d2d2d2"></div>
                <!--分割线-->
                <div class="w-all p-t-16 p-b-16 ovhidden">
                    <div class="w-80 fs-14 line-h28 m-t-6 m-b-6 ftc-888888 fl">硬件价格</div>
                    <ul class="w-970 fl">
                        {{--<li class="w-70 m-l-24 fl"><a href="#" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl class_cur">不限</a></li>--}}
                        <li class="w-70 m-l-24 fl">
                            <a href='<?php echo $_SERVER['REQUEST_URI']?>&price=1' class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl
                            <?php if(isset($_GET['price'])&&$_GET['price']==1){echo "class_cur";}?>">0-1999</a>
                        </li>
                        <li class="w-70 m-l-24 fl">
                            <a href='<?php echo $_SERVER['REQUEST_URI']?>&price=2' class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl
                            <?php if(isset($_GET['price'])&&$_GET['price']==2){echo "class_cur";}?>">2000-3999</a>
                        </li>
                        <li class="w-70 m-l-24 fl">
                            <a href='<?php echo $_SERVER['REQUEST_URI']?>&price=3' class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl
                            <?php if(isset($_GET['price'])&&$_GET['price']==3){echo "class_cur";}?>">4000-5999</a>
                        </li>
                        <li class="w-70 m-l-24 fl">
                            <a href='<?php echo $_SERVER['REQUEST_URI']?>&price=4' class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl
                            <?php if(isset($_GET['price'])&&$_GET['price']==4){echo "class_cur";}?>">6000以上</a>
                        </li>
                        <div class="clear"></div>
                    </ul>
                </div>

                <!--分割线-->
                <div class="w-all fl hg-1 bg-c-d2d2d2"></div>
                <!--分割线-->
                {{--<div class="w-all p-t-16 p-b-16 ovhidden">--}}
                    {{--<div class="w-80 fs-14 line-h28 m-t-6 m-b-6 ftc-888888 fl">硬件特点</div>--}}
                    {{--<ul class="w-970 fl">--}}
                        {{--<li class="w-70 m-l-24 fl"><a href="#" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl class_cur">不限</a></li>--}}
                        {{--<li class="w-70 m-l-24 fl"><a href="#" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl">价格友好</a></li>--}}
                        {{--<li class="w-70 m-l-24 fl"><a href="#" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl">性价比高</a></li>--}}
                        {{--<li class="w-70 m-l-24 fl"><a href="#" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl">极致性能</a></li>--}}
                        {{--<li class="w-70 m-l-24 fl"><a href="#" class="dsblock w-all fs-14 line-h28 ftc-888888 m-t-6 m-b-6 curpter text-c fl"></a></li>--}}

                        {{--<div class="clear"></div>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                
                <!--分割线-->
                <div class="w-all fl hg-1 bg-c-d2d2d2"></div>
                <!--分割线-->

        <!--filter end--> 
        
        <!--排序 start------------------------------------------------------------------------------------------------------>

        <div class="w-main m-auto m-t-25 fl">
            <ul class="home_calss w-1224 ovhidden" id="test">

                    @foreach($waishe as $wai)
                <li class="w-265 m-l-13 m-r-13 bg-c-ffffff m-t-8 m-b-33 fl">
                    <a href="课程详情.html" class="dsblock w-280 hg-200 ovhidden ps-r">
                        <img src="{{$wai->hardware_thumb}}" alt=""/> </a>
                    <div class="w-255 p-l-10 p-r-15 p-b-10 fl">
                        <div class="home_calsstxt w-155 fl">
                            <h3 class="w-all fs-16 ftc-000000 line-h32  one_hidden  m-t-6 fl">{{$wai->hardware_name}}</h3>
                            <span class="dsblock w-all fs-20 ftc-ff0000 line-h32 fl">{{$wai->product_name}}</span>
                        </div>
                        <a href="课程详情.html" class="dsblock ql_icon hg-34 line-h34 fs-14 ftc-ffffff m-t-22 ql_h_btnfr w-86 text-c fr">查看详情</a>
                    </div>
                </li>
                @endforeach
                <div class="clear"></div>
            </ul>
            <div class="w-amin hg-30"></div>
            <!--pages start-->
            <ul class="w-560 hg-36 ql_pages m-auto">
                <li class="fl"><a class="" href="#">&lt;</a></li>
                <li class="fl"><a class="cur" href="#">1</a></li>
                <li class="fl"><a class="" href="#">2</a></li>
                <li class="fl"><a class="" href="#">3</a></li>
                <li class="fl"><a class="" href="#">...</a></li>
                <li class="fl"><a class="" href="#">12</a></li>
                <li class="fl"><a class="" href="#">&gt;</a></li>
            </ul>
            <!--pages end-->
            <div class="w-amin hg-30"></div>
        </div>
        <!--精选课程 end--> 
    </div>
</div>
<!--web main body start--> 
<!--like start-->
<div class="w-all w-minw bg-c-f6f6f6 ovhidden">
    <div class="w-main m-auto"> 
        <!--title start-->
        <div class="w-main ovhidden p-t-10 fl">
            <h3 class="fl fs-20 ft-w-b line-h40"><span class="dsblock ql_icon ql_like tx-ind m-r-15 fl">猜你喜欢</span>猜你喜欢</h3>
        </div>
        <!--title end-->
        <ul class="ql_likeclass w-1210 ovhidden">
            <li class="w-230 bg-c-ffffff m-t-10 m-r-6 m-l-6 m-b-10 fl">
                <a href="../../../../../../毕业设计模板/课程详情.html" class="dsblock w-230 hg-165 ovhidden ps-r">
                    <img src="../../../../../../毕业设计模板/pics/12.jpg" alt=""/>
                </a>
                <a href="../../../../../../毕业设计模板/课程详情.html" class="w-210 p-l-10 p-r-10 fl">
                    <h3 class="w-all fs-16 ftc-000000 line-h32  one_hidden  m-t-6 fl">初中全科1V1定制初中全科1V1定制</h3>
                <span class="dsblock w-all fs-20 ftc-ff0000 line-h32 fl">￥：300</span>
                </a>
            </li>

        </ul>
        <div class="w-amin hg-30 ovhidden"></div>
    </div>
</div>
<!--like end--> 
<!--web footer start-->


<!--web footer copyright start-->
<div class="w-all w-minw bg-c-cccccc p-t-6 p-b-6 ovhidden">
    <div class="w-main m-auto text-c fs-12 ftc-414141 line-24"> peinow <br/>
       </div>
</div>



<!--web footer copyright end-->
<!--web footer end-->
</body>
</html>