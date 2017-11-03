<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Model\Hardware;
use App\Http\Model\Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class HardwareController extends CommonController
{
    public function index()
    {
        $data = Hardware::orderBy('hardware_name','desc')->paginate(10);
        return view('admin.hardware.index',compact('data'));
    }

    public function changeorder()
    {
        $input = Input::all();
        $hardware = Hardware::find($input['hardware_id']);
        $hardware->hardware_order = $input['hardware_order'];
        $re = $hardware->update();
        if ($re){
            $data = [
                'status' => 0,
                'msg' => '硬件排序更新成功',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '硬件排序更新失败',];
        }
        return $data;

    }

    public function create()
    {
        $data = (new Product)->tree();
        return view('admin.hardware.add',compact('data'));    //不用读取分类数据
    }

    public function store()
    {
        $input = Input::except('_token');

        $rules =[
            'hardware_name' => 'required',
        ];
        $message =[
          'hardware_name.required'=>'硬件名称不能为空',
        ];

        $validator = Validator::make($input,$rules,$message);
        if($validator->passes()){
            $re = Hardware::create($input);
            if ($re){
                return redirect('admin/hardware');
            }else{
               return back()->with('errors','添加硬件分类失败');
            }
        }else{
            return back()->withErrors($validator);
        }

    }

    public function edit($hardware_id)
    {
       $data = (new Product)->tree();
       $field = Hardware::find($hardware_id);
       return view('admin.hardware.edit',compact('data','field'));
    }

    public function update($hardware_id)
    {
        $input = Input::except('_token', '_method');
        $re = Hardware::where('hardware_id', $hardware_id)->update($input);
        if ($re) {
            return redirect('admin/hardware');
        } else {
            return back()->with('errors', '硬件信息更新失败！');
        }
    }
    public function destroy($hardware_id)
    {
        $re = Hardware::where('hardware_id',$hardware_id)->delete($hardware_id);
        Hardware::where('hardware_id',$hardware_id)->update(['hardware_id'=>0]);
        if($re){
            $data = [
                'status' => 0,
                'msg' => '分类删除成功',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '分类删除失败',
            ];
        }
        return $data;
    }
}