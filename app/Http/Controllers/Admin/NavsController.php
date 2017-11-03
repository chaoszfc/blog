<?php

namespace App\Http\Controllers\Admin;


use App\Http\Model\Links;
use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class NavsController extends Controller
{
    public function index()
    {
        $data = Navs::orderBy('nav_order','asc')->get();
        return view('admin.navs.index',compact('data'));
    }

    public function changeOrder()
    {

            $input = Input::all();
            $navs = Navs::find($input['nav_id']);
            $navs->nav_order = $input['nav_order'];
            $re = $navs->update();
            if($re){
                $data = [
                    'status' => 0,
                    'msg'=> '自定义导航更新成功',

                ];

            }else{
                $data = [
                    'status' => 1,
                    'msg'=> '自定义导航更新失败',];
            }
            return $data;

        }
//        添加自定义导航
    public function create()
    {

        return view('admin/navs/add');
    }
//    添加友情分类提交
    public function store()
    {
        $input = Input::except('_token');

        $rules = [
            'nav_name' => 'required',
            'nav_url' =>'required',
        ];

        $message = [
            'nav_name.required' => '自定义导航名称不能为空',
            'nav_url.required'=> '链接地址不能为空',
        ];

        $validator = Validator::make($input, $rules, $message);

        if ($validator->passes()) {

            $re = Navs::create($input);
            if($re){
                return redirect('admin/navs');
            }else{
                return back()->with('errors','数据填充失败');
            }

        }else{
            return back()->withErrors($validator);
        }
}

//  编辑自定义导航
    public function edit($nav_id)
    {
        $fieldd = Navs::find($nav_id);
        return view('admin.navs.edit',compact('fieldd'));
    }


//    更新自定义导航
    public function update($nav_id)
    {
        $input = Input::except('_token','_method');
        $re = Navs::where('nav_id',$nav_id)->update($input);

        if($re){
            return redirect('admin/navs');
        }else{
            return back()->with('errors','自定义导航更新失败！');
        }
    }

//

        public function show()
        {

        }
//        删除友情分类
    public function destroy($nav_id)
    {
        $re = Navs::where('nav_id',$nav_id)->delete($nav_id);
        Navs::where('nav_id')->update(['nav_id'=>0]);
        if($re){
            $data = [
                'status' => 0,
                'msg' => '自定义导航删除成功',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '自定义导航删除失败',
            ];
        }
        return $data;
    }

}
