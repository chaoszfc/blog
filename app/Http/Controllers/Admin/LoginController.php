<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/10/2
 * Time: 17:15
 */
namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

require_once  'org/code/Code.class.php';

class LoginController extends CommonController
{
    public function login()
    {
        if($input = Input::all()) {
            $code = new \Code;
            $_code = $code->get();
            if (strtoupper($input['code']) != $_code)                    //strtoupper 是一个把所有大小写转换成大写
            {
                return back()->with('msg', '验证码错误');                 //back 可以返回前一个页面
            }

            $user = User::first();
            if ($user->user_name != $input['user_name'] || $user->user_pass != $input['user_pass']) {
                return back()->with('msg', '用户名或密码错误');
            }

                session(['user'=>$user]);

                return redirect('admin/index');

        }else{

            return view('admin.login');
        }

    }
    public function quit(){
        session(['user'=>null]);
        return redirect('admin/login');
    }

    public function code()
    {
       $code = new \Code;
       $code->make();
    }


}