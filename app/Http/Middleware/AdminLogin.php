<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/10/3
 * Time: 12:08
 */
namespace App\Http\Middleware;
use  Closure;

class AdminLogin
{
    public  function handle($request, Closure $next){
        if (!session('user')){
            return redirect('admin/login');
        }
        return $next($request);
    }
}