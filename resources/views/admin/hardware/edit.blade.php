@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 分类管理
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>编辑分类</h3>
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
            <a href="{{url('admin/hardware/create')}}"><i class="fa fa-plus"></i>添加分类</a>
            <a href="{{url('admin/hardware')}}"><i class="fa fa-recycle"></i>全部分类</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="{{url('admin/hardware/'.$field->hardware_id)}}" method="post">
        <input type="hidden" name="_method" value="put">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>硬件类型：</th>
                <td>
                        <select name="product_name">
                            @foreach($data as $d)
                                <option value="{{$d->product_name}}"
                                    @if($field->product_id == $d->product_name) selected @endif>
                                      {{$d->_product_name}}</option>
                            @endforeach
                        </select>
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>硬件名称：</th>
                <td>
                    <input type="text" name="hardware_name" value="{{$field->hardware_name}}">
                    <span><i class="fa fa-exclamation-circle yellow"></i>硬件名称必须填写</span>
                </td>
            </tr>
            <tr>
                <th>硬件价格：</th>
                <td>
                    <input type="text"  name="hardware_price" value="{{$field->hardware_price}}">
                    <span><i class="fa fa-exclamation-circle red"></i>元</span>
                </td>
            </tr>
            <tr>
                <th>缩略图：</th>
                <td>
                    <input type="text" size="50" name="hardware_thumb" value="{{$field->hardware_thumb}}">
                    <input id="file_upload" name="file_upload" type="file" multiple="true">
                    <script src="{{asset('org/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
                    <link rel ="stylesheet" type="text/css" href="{{asset('org/uploadify/uploadify.css')}}"></script>
                    <script type="text/javascript">
                        <?php $timestamp = time();?>
                        $(function() {
                            $('#file_upload').uploadify({
                                'buttonText' : '图片上传',
                                'formData'     : {
                                    'timestamp' : '<?php echo $timestamp;?>',
                                    '_token'     : "{{csrf_token()}}"
                                },
                                'swf'      : "{{asset('org/uploadify/uploadify.swf')}}",
                                'uploader' : "{{url('admin/upload')}}",
                                'onUploadSuccess' : function(file, data, response) {
                                    $('input[name=hardware_thumb]').val(data);
                                    $('#hardware_thumb_img').attr('src','/'+data);
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
                    <img alt="" id="hardware_thumb_img" src="/{{$field->hardware_thumb}}" style="max-width: 350px; max-height:100px;">
                </td>
            </tr>
            <tr>
                <th>硬件特性：</th>
                <td>
                    <input type="text" name="hardware_introduce" value="{{$field->hardware_introduce}}">
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>浏览次数</th>
                <td>
                    <input type="text"  name="hardware_view" value="{{$field->hardware_view}}">
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>商品评分</th>
                <td>
                    <input type="text"  name="hardware_score" value="{{$field->hardware_score}}">
                </td>
            </tr>
            <tr>
                <th><i class="require"></i>评分人数</th>
                <td>
                    <input type="text"  name="hardware_scorenum" value="{{$field->hardware_scorenum}}">
                </td>
            </tr>

            <tr>
                <th>硬件内容：</th>
                <td>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/ueditor.all.min.js')}}"> </script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                    <script id="editor" name="hardware_content" type="text/plain" style="width:860px;height:350px;">{!! $field->hardware_content !!}</script>
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
