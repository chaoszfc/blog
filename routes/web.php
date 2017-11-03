<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function(){
//    主页路由
    Route::get('/','Home\IndexController@index');
    Route::get('/cate/{cate_id}','Home\IndexController@cate');
    Route::get('/a/{art_id}','Home\IndexController@article');


//    配置页面
    Route::get('/now','Home\IndexController@nowindex');
    Route::any('/hardware','Home\IndexController@hardware');
//cpu页面
    Route::any('/cpu','Home\CpuController@index');
//主板页面
    Route::any('/board','Home\CpuController@board');
//显卡页面
    Route::any('/driver','Home\CpuController@driver');
//内存页面
    Route::any('/memory','Home\CpuController@memory');
//硬盘页面
    Route::any('/discs','Home\CpuController@discs');
//    外设页面
    Route::any('/waishe','Home\CpuController@waishe');
#验证码路由
    Route::any('admin/login','Admin\LoginController@login');
    Route::get('admin/code','Admin\LoginController@code');
});

Route::get('admin/config/putfile','Admin\ConfigController@putFile');

Route::group([ 'middleware'=>['admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function()
{

    #后台首页
    Route::any('/index','IndexController@index');
    #后台显示页
    Route::any('info','IndexController@info');
    #推出登陆
    Route::any('quit','LoginController@quit');
    #修改密码
    Route::any('pass','IndexController@pass');

    Route::post('cate/changeorder','CategoryController@changeOrder');

    #资源路由
    Route::resource('category','CategoryController');

    Route::any('cate/changeorder','CategoryController@changeorder');

    Route::resource('article','ArticleController');
    #图片上传验证
    Route::any('upload','CommonController@upload');

    #友情链接
    Route::resource('links','LinksController');
    Route::any('links/changeorder','LinksController@changeorder');

    #自定义导航
    Route::resource('navs','NavsController');
    Route::any('navs/changeorder','NavsController@changeorder');

    #网站配置
    Route::resource('config','ConfigController');
    Route::post('config/changeorder','ConfigController@changeorder');
    Route::post('config/changecontent','ConfigController@changeContent');

    #产品分类
    Route::resource('product','ProductController');
    Route::post('product/changeorder','ProductController@changeorder');


    Route::resource('hardware','HardwareController');
    Route::post('hardware/changeorder','HardwareController@changeorder');
});

