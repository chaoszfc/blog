<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/10/2
 * Time: 17:24
 */
namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;



class IndexController extends CommonController
{
    public  function index()
    {
        return view('admin.index');
    }

    public  function info()
    {
        return view('admin.info');
    }
    public function pass()
    {
        if ($input = Input::all())
        {
            $rules = [
                'password'=>'required|confirmed',
            ];
            $message = [
                'password.required'=>'新密码不能为空',
                'password.confirmed'=>'两密码不一致',
            ];
            $validator =  Validator::make($input,$rules,$message);
            if ($validator->passes()){
                $user = User::first();
                $_password = ($user->user_pass);
                if($input['password_o'] == $_password){
                    $user->user_pass = $input['password'];
                    $user->update();
                    return redirect('admin/info');
                }else{
                    return back()->withErrors('errors','原密码错误');
                }


            }else{
              return back()->withErrors($validator);


            }

        }else{
            return view('admin.pass');
        }
    }

}