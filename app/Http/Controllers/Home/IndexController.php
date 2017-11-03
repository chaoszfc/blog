<?php

namespace App\Http\Controllers\Home;



use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Product;
use App\Http\Model\Hardware;
use App\Http\Model\Links;
use Illuminate\Support\Facades\Input;


class IndexController extends CommonController
{
    public function index()
    {
//      点击量最高的6篇文章
        $pics = Article::orderBy('art_view', 'desc')->take(5)->get();

//        友情链接
        $links = Links::orderBy('link_order', 'asc')->get();

        //        图文列表（带分页）
        $data = Article::orderBy('art_time', 'desc')->paginate(5);

        return view('home.index', compact('data', 'links', 'pics'));
    }


    public function cate($cate_id)
    {
//       图文列表4篇（带分页）
        $data = Article::where('cate_id', $cate_id)->orderBy('art_time', 'desc')->paginate(4);

//        当前分类的子分类
        $submenu = Category::where('cate_pid', $cate_id)->get();


        //查看次数自增
        Category::where('cate_id', $cate_id)->increment('cate_view');
        $field = Category::find($cate_id);
        return view('home.list', compact('field', 'data', 'submenu'));
    }

    public function article($art_id)
    {
        $field = Article::Join('category', 'article.cate_id', '=', 'category.cate_id')->where('art_id', $art_id)->first();

        //查看次数自增
        Article::where('art_id', $art_id)->increment('art_view');

        $article['pre'] = Article::where('art_id', '<', $art_id)->orderBy('art_id', 'desc')->first();
        $article['next'] = Article::where('art_id', '>', $art_id)->orderBy('art_id', 'asc')->first();

        $data = Article::where('cate_id', $field->cate_id)->orderBy('art_id', 'desc')->take(4)->get();

        return view('home.new', compact('field', 'article', 'data'));
    }

    public function nowindex()
    {
        $products = Product::tree();
        $categ = Product::where('product_pid', '==', '0')->orderBy('product_name', 'asc')->get();
        $sub = Product::all();
        //$sub = Product::where('product_pid','==','product_id')->orderBy('product_name','asc')->get();
        $pics = Hardware::orderBy('hardware_view', 'desc')->take(4)->get();
        return view('home.nowindex', compact('pics', 'categ', 'sub'));
    }

    public function hardware()
    {
        $products = Product::tree();
        $categ = Product::where('product_pid', '==', '0')->orderBy('product_name', 'asc')->get();
        $sub = Product::all();
        $popular = Hardware::orderBy('hardware_view', 'asc')->paginate(12);
        #硬件特性
        $introduce = Hardware::orderBy('hardware_introduce')->get();


////      硬件排序
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            if ($id == 1) {
                $popular = Hardware::orderBy('hardware_view', 'asc')->get();
            }else if ($id == 2){
                $popular = Hardware::orderBy('updated_at', 'asc')->get();
            }else {
                $popular = Hardware::orderBy('hardware_price', 'asc')->get();
            }
        }
        return view('home.hardware', compact('products', 'categ', 'sub', 'popular','introduce'));

    }


}
