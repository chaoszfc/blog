<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/10/2
 * Time: 21:28
 */
namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    public $timestamps=false;
}