@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 硬件管理
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>添加硬件</h3>
        @if(count($errors)>0)
            <div class="mark">
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{$errors}}</p>
                @endif
            </div>
        @endif
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="{{url('admin/hardware/create')}}"><i class="fa fa-plus"></i>添加硬件</a>
            <a href="{{url('admin/hardware')}}"><i class="fa fa-recycle"></i>全部硬件</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="{{url('admin/hardware')}}" method="post">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>硬件类型：</th>
                <td>
                    <select name="product_name">
                        @foreach($data as $d)
                            <option value="{{$d->product_id}}">{{$d->_product_name}}</option>
                            @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>硬件名称：</th>
                <td>
                    <input type="text" name="hardware_name">
                    <span><i class="fa fa-exclamation-circle yellow"></i>硬件名称必须填写</span>
                </td>
            </tr>
            <tr>
                <th>硬件价格：</th>
                <td>
                    <input type="text"  name="hardware_price">
                    <span><i class="fa fa-exclamation-circle red"></i>元</span>
                </td>
            </tr>
            {{--缩略图※--}}
            <tr>
                <th>缩略图：</th>
                <td>
                    <input type="text" name="hardware_thumb">
                    <input id ="file_upload" name="file_upload" type="file" multiple="true">
                    <script src="{{asset('org/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
                    <link rel="stylesheet" type="text/css" href="{{asset('org/uploadify/uploadify.css')}}">
                    <script type="text/javascript">
                        <?php $timestamp = time();?>
                          $(function () {
                            $('#file_upload').uploadify({
                                'buttonText' : '图片上传',
                                'formData':{
                                   'timestamp': '<?php echo $timestamp;?>',
                                   '_token' : "{{csrf_token()}}",
                               },
                                'swf'     :  "{{asset('org/uploadify/uploadify.swf')}}",
                                'uploader' :  "{{asset('admin/upload')}}",
                                'onUploadSuccess' : function(file, data, response) {
                                    $('input[name = hardware_thumb]').val(data);
                                    $('#hardware_thumb_img').attr('src','/'+data);
//                                    alert(data);
                                }
                        });
                        });
                    </script>
                    <style>
                        .uploadify{display:inline-block;}
                        .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
                        table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
                    </style>
                 </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <img src="" alt="" id="hardware_thumb_img" style="max-width: 350px; max-height:100px;">
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>硬件特性</th>
                <td>
                    <input type="text" name="hardware_introduce" >
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>浏览次数</th>
                <td>
                    <input type="text"  name="hardware_view">
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>商品评分</th>
                <td>
                    <input type="text"  name="hardware_score">
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>评分人数</th>
                <td>
                    <input type="text"  name="hardware_scorenum">
                </td>
            </tr>

            <tr>
                <th>硬件内容：</th>
                <td>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/ueditor.all.min.js')}}"> </script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                    <script id="editor" name="hardware_content" type="text/plain" style="width:860px;height:500px;"></script>
                    <script type="text/javascript">
                    var ue = UE.getEditor('editor');
                    </script>
                    <style>
                        .edui-default{line-height: 28px;}
                        div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                        {overflow: hidden; height:20px;}
                        div.edui-box{overflow: hidden; height:22px;}
                    </style>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>

@endsection
