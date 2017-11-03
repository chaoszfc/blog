<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    public $timestamps=false;
    protected $guarded = [];

    public static  function tree()
    {
        $products = (new Product)->orderBy('product_order','asc')->get();
        return (new Product)->getTree($products,'product_name','product_id','product_pid');
    }

    public function getTree($data,$field_name,$field_id='id',$field_pid='pid',$pid=0)
    {
        $arr = array();
        foreach ($data as $k=>$v){
            if ($v->$field_pid==0){
                $data[$k]["_".$field_name] = $data[$k]["$field_name"];
                $arr[] = $data[$k];
                foreach ($data as $m=>$n){
                    if($n->$field_pid == $v->$field_id){
                        $data[$m]["_".$field_name] = '|---'.$data[$m]["$field_name"];
                        $arr[] = $data[$m];
                    }
                }

            }
        }
        return $arr;
    }


}

