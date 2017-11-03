<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class ProductController extends CommonController
{
    public function index()
    {
        $products = (new Product)->tree();
        return view('admin.product.index')->with('data',$products);
    }
//产品分类排序
    public function changeorder()
    {
       $input = Input::all();
       $product = Product::find($input['product_id']);              //查找id
       $product->product_order = $input['product_order'];           //根据查找的id改变排序
       $re = $product->update();
       if ($re){
           $data = [
               'status' => 0,
               'msg' => '分类排序更新成功',
           ];
       }else{
           $data = [
               'status' => 1,
               'msg' =>'分类排序更新失败',
           ];
       }
       return $data;
    }
//添加产品分类
    public function create()
    {
        $data =  Product::where('product_pid',0)->get();

        return view('admin.product.add',compact('data'));
    }

    public function store()
    {
        $input = Input::except('_token');

        $rules = [
            'product_name' => 'required',
        ];

        $message = [
            'product_name.required' => '分类名称不能为空',
        ];
        $validator = Validator::make($input, $rules, $message);

        if ($validator->passes()) {
            $re = Product::create($input);
            if($re){
                return redirect('admin/product');
            }else{
                return back()->with('errors','数据填充失败');
            }
        }else{
            return back()->withErrors($validator);
        }
    }
//编辑硬件分类
    public function edit($product_id)
    {
        $field = Product::find($product_id);
        $data = Product::where('product_id')->get();
        return view('admin.product.edit',compact('field','data'));
    }

    public function update($product_id)
    {
        $input = Input::except('_token','_method');
        $re = Product::where('product_id',$product_id)->update($input);

        if($re){
            return redirect('admin/product');
        }else{
            return back()->with('errors','产品分类信息更新失败！');
        }
    }
    public function destroy($product_id)
    {
       $re = Product::where('product_id',$product_id)->delete($product_id);
       Product::where('product_id',$product_id)->update(['product_id'=>0]);
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
