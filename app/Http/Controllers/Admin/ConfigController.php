<?php

namespace App\Http\Controllers\Admin;


use App\Http\Model\Links;
use App\Http\Model\config;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class ConfigController extends Controller
{
    public function index()
    {

        $data = config::orderBy('conf_order','asc')->get();
        foreach ($data as $k=>$v) {
            switch ($v->field_type){
                case 'input';
                     $data[$k]->_html = '<input type ="text" class="lg"  name = "conf_content[]" value="'.$v->conf_content.'">';

                         break;

                  case 'textarea':
                      $data[$k]->_html = '<textarea type ="text" name = "conf_content[]">'.$v->conf_content.'</textarea>';

                         break;

                case 'radio':
                       $arr = explode(',', $v->field_value);
                       $str = '';
                    foreach ($arr as $m=>$n) {
                        //1|开启
                        $r = explode('|', $n);
                        $c = $v->conf_content==$r[0]?' checked ':'';
                        $str .= '<input type="radio" name="conf_content[]" value="'.$r[0].'" '.$c.' >'.$r[1].'';
                    }
                       $data[$k]->_html = $str;
                      break;
                  }

        }

    return view('admin.config.index',compact('data'));
    }


    public function changeContent()
    {
        $input = Input::all();
        //dd($input);
        foreach($input['conf_id'] as $k=>$v){
            Config::where('conf_id',$v)->update(['conf_content'=>$input['conf_content'][$k]]);
        }
         $this->putFile();
          return back()->with('errors','配置项更新成功');
    }
// 将网站配置项写在程序中
    public function putFile()
   {
     $config = Config::pluck('conf_content','conf_name')->all();
     $path = base_path().'\config\web.php';
     $str = '<?php return '.var_export($config,true).';';
     file_put_contents($path,$str);
   }



    public function changeOrder()
    {

            $input = Input::all();
            $config = config::find($input['conf_id']);
            $config->conf_order = $input['conf_order'];
            $re = $config->update();
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

        return view('admin/config/add');
    }
//    添加友情分类提交
    public function store()
    {
        $input = Input::except('_token');

        $rules = [
            'conf_name' => 'required',

        ];

        $message = [
            'conf_name.required' => '配置项名称不能为空',
            'conf_title.required'=> '配置项标题不能为空',
        ];

        $validator = Validator::make($input, $rules, $message);

        if ($validator->passes()) {

            $re = config::create($input);
            if($re){
                return redirect('admin/config');
            }else{
                return back()->with('errors','数据填充失败');
            }

        }else{
            return back()->withErrors($validator);
        }
}

//  编辑自定义导航
    public function edit($conf_id)
    {
        $fieldd = config::find($conf_id);
        return view('admin.config.edit',compact('fieldd'));
    }


//    更新自定义导航
    public function update($conf_id)
    {
        $input = Input::except('_token','_method');
        $re = config::where('conf_id',$conf_id)->update($input);

        if($re){
            $this->putFile();
            return redirect('admin/config');
        }else{
            return back()->with('errors','自定义导航更新失败！');
        }
    }

//

        public function show()
        {

        }
//        删除友情分类
    public function destroy($conf_id)
    {
        $re = config::where('conf_id',$conf_id)->delete($conf_id);
        config::where('conf_id')->update(['conf_id'=>0]);
        if($re){
            $this->putFile();
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
