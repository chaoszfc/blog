<?php

namespace App\Http\Controllers\Admin;


use App\Http\Model\Links;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class LinksController extends Controller
{
    public function index()
    {
        $data = Links::orderBy('link_order','asc')->get();
        return view('admin.links.index',compact('data'));
    }

    public function changeOrder()
    {

            $input = Input::all();
            $links = Links::find($input['link_id']);
            $links->link_order = $input['link_order'];
            $re = $links->update();
            if($re){
                $data = [
                    'status' => 0,
                    'msg'=> '友情链接更新成功',

                ];

            }else{
                $data = [
                    'status' => 1,
                    'msg'=> '友情链接更新失败',];
            }
            return $data;

        }
//        添加友情链接
    public function create()
    {

        return view('admin/links/add');
    }
//    添加友情分类提交
    public function store()
    {
        $input = Input::except('_token');

        $rules = [
            'link_name' => 'required',
            'link_url' =>'required',
        ];

        $message = [
            'link_name.required' => '友情链接名称不能为空',
            'link_url.required'=> '链接地址不能为空',
        ];

        $validator = Validator::make($input, $rules, $message);

        if ($validator->passes()) {
            $re = Links::create($input);
            if($re){
                return redirect('admin/links');
            }else{
                return back()->with('errors','数据填充失败');
            }

        }else{
            return back()->withErrors($validator);
        }
}

//  编辑友情链接
    public function edit($link_id)
    {
        $fieldd = Links::find($link_id);
        return view('admin.links.edit',compact('fieldd'));
    }


//    更新友情链接
    public function update($link_id)
    {
        $input = Input::except('_token','_method');
        $re = Links::where('link_id',$link_id)->update($input);

        if($re){
            return redirect('admin/links');
        }else{
            return back()->with('errors','友情链接更新失败！');
        }
    }

//

        public function show()
        {

        }
//        删除友情分类
    public function destroy($link_id)
    {
        $re = Links::where('link_id',$link_id)->delete($link_id);
        Links::where('link_id')->update(['link_id'=>0]);
        if($re){
            $data = [
                'status' => 0,
                'msg' => '友情链接删除成功',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '友情链接删除失败',
            ];
        }
        return $data;
    }

}
