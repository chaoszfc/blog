<?php

namespace App\Http\Controllers\Home;



use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Product;
use App\Http\Model\Hardware;
use App\Http\Model\Links;
use Illuminate\Support\Facades\Input;

class CpuController extends CommonController
{
    public function index()
    {
        $products = Product::tree();
        $categ = Product::where('product_pid', '==', '0')->orderBy('product_name', 'asc')->get();
        $sub = Product::all();
        $cpu = Hardware::where('product_pid', '=', '1')->orderBy('hardware_name', 'asc')->get();
//        $cpu_price = $_GET['cpu_price'];
        if (!empty($_GET['name'])) {
            $name = $_GET['name'];
            if ($name == 1) {
                $cpu = Hardware::where('product_name', '=', 'Intel')->orderBy('product_name', 'asc')->get();
            } else {
                $cpu = Hardware::where('product_name', '=', '_AMD')->orderBy('product_name', 'asc')->get();
            }
            if (!empty($_GET['name']) && !empty($_GET['price'])) {
                $name = $_GET['name'];
                $price = $_GET['price'];
                if ($name == 1) {
                    if ($price == 1) {
                        $cpu = Hardware::where('product_name', '=', 'Intel')->
                        where('hardware_price', '<', '1999')->orderBy('hardware_name', 'asc')->get();
                    } else if ($price == 2) {
                        $cpu = Hardware::where('product_name', '=', 'Intel')->
                        where('hardware_price', '>', '2000')->where('hardware_price', '<', '3999')
                            ->orderBy('hardware_name', 'asc')->get();
                    } else if ($price == 3) {
                        $cpu = Hardware::where('product_name', '=', 'Intel')->
                        where('hardware_price', '>', '4000')->where('hardware_price', '<', '5999')
                            ->orderBy('hardware_name', 'asc')->get();
                    } else if ($price == 4) {
                        $cpu = Hardware::where('product_name', '=', 'Intel')->
                        where('hardware_price', '>', '6000')
                            ->orderBy('hardware_name', 'asc')->get();
                    }
                } else {
                    if ($price == 1) {
                        $cpu = Hardware::where('product_name', '=', '_AMD')->
                        where('hardware_price', '<', '1999')->orderBy('hardware_name', 'asc')->get();
                    } else if ($price == 2) {
                        $cpu = Hardware::where('product_name', '=', '_AMD')->
                        where('hardware_price', '>', '2000')->where('hardware_price', '<', '3999')
                            ->orderBy('hardware_name', 'asc')->get();
                    } else if ($price == 3) {
                        $cpu = Hardware::where('product_name', '=', '_AMD')->
                        where('hardware_price', '>', '4000')->where('hardware_price', '<', '5999')
                            ->orderBy('hardware_name', 'asc')->get();
                    } else if ($price == 4) {
                        $cpu = Hardware::where('product_name', '=', '_AMD')->
                        where('hardware_price', '>', '6000')
                            ->orderBy('hardware_name', 'asc')->get();
                    }
                }
            }
            if (!empty($_GET['name']) && !empty($_GET['price']) && !empty($_GET['spe'])) {
                $spe = $_GET['spe'];
                if ($name == 1) {
                    if ($price == 1) {
                        if ($spe == 1) {
                            $cpu = Hardware::where('product_name', '=', 'Intel')->
                            where('hardware_price', '<', '1999')->where('hardware_introduce', '=', '价格友好')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                        if ($spe == 2) {
                            $cpu = Hardware::where('product_name', '=', 'Intel')->where('hardware_price', '<', '2000')->
                            where('hardware_price', '<', '1999')->where('hardware_introduce', '=', '性价比高')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                        if ($spe == 3) {
                            $cpu = Hardware::where('product_name', '=', 'Intel')->
                            where('hardware_price', '<', '1999')->where('hardware_introduce', '=', '极致性能')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                    }
                    if ($price == 2) {
                        if ($spe == 1) {
                            $cpu = Hardware::where('product_name', '=', 'Intel')->
                            where('hardware_price', '>', '2000')->where('hardware_price', '<', '3999')->where('hardware_introduce', '=', '价格友好')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                        if ($spe == 2) {
                            $cpu = Hardware::where('product_name', '=', 'Intel')->where('hardware_price', '<', '2000')->
                            where('hardware_price', '>', '2000')->where('hardware_price', '<', '3999')->where('hardware_introduce', '=', '性价比高')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                        if ($spe == 3) {
                            $cpu = Hardware::where('product_name', '=', 'Intel')->
                            where('hardware_price', '>', '2000')->where('hardware_price', '<', '3999')->where('hardware_introduce', '=', '极致性能')
                                ->orderBy('hardware_name', 'asc')->get();
                        }

                    }
                } else {
                    if ($price == 1) {
                        if ($spe == 1) {
                            $cpu = Hardware::where('product_name', '=', '_AMD')->
                            where('hardware_price', '<', '1999')->where('hardware_introduce', '=', '价格友好')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                        if ($spe == 2) {
                            $cpu = Hardware::where('product_name', '=', '_AMD')->where('hardware_price', '<', '2000')->
                            where('hardware_price', '<', '1999')->where('hardware_introduce', '=', '性价比高')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                        if ($spe == 3) {
                            $cpu = Hardware::where('product_name', '=', '_AMD')->
                            where('hardware_price', '<', '1999')->where('hardware_introduce', '=', '极致性能')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                    }
                    if ($price == 2) {
                        if ($spe == 1) {
                            $cpu = Hardware::where('product_name', '=', '_AMD')->
                            where('hardware_price', '>', '2000')->where('hardware_price', '<', '3999')->where('hardware_introduce', '=', '价格友好')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                        if ($spe == 2) {
                            $cpu = Hardware::where('product_name', '=', '_AMD')->where('hardware_price', '<', '2000')->
                            where('hardware_price', '>', '2000')->where('hardware_price', '<', '3999')->where('hardware_introduce', '=', '性价比高')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                        if ($spe == 3) {
                            $cpu = Hardware::where('product_name', '=', '_AMD')->
                            where('hardware_price', '>', '2000')->where('hardware_price', '<', '3999')->where('hardware_introduce', '=', '极致性能')
                                ->orderBy('hardware_name', 'asc')->get();
                        }
                    }
                }
            }
            if (!empty($_GET['name']) && !empty($_GET['spe'])) {
                $name = $_GET['name'];
                $spe = $_GET['spe'];
                if ($name == 1) {
                    if ($spe == 1) {
                        $cpu = Hardware::where('product_name', '=', 'Intel')->where('hardware_introduce', '=', '价格友好')
                            ->orderBy('hardware_name', 'asc')->get();
                    }
                    if ($spe == 2) {
                        $cpu = Hardware::where('product_name', '=', 'Intel')->where('hardware_price', '<', '2000')->
                        where('hardware_introduce', '=', '性价比高')
                            ->orderBy('hardware_name', 'asc')->get();
                    }
                    if ($spe == 3) {
                        $cpu = Hardware::where('product_name', '=', 'Intel')->where('hardware_introduce', '=', '极致性能')
                            ->orderBy('hardware_name', 'asc')->get();
                    }
                } else {
                    if ($spe == 1) {
                        $cpu = Hardware::where('product_name', '=', '_AMD')->where('hardware_introduce', '=', '价格友好')
                            ->orderBy('hardware_name', 'asc')->get();
                    }
                    if ($spe == 2) {
                        $cpu = Hardware::where('product_name', '=', '_AMD')->where('hardware_price', '<', '2000')->
                        where('hardware_introduce', '=', '性价比高')
                            ->orderBy('hardware_name', 'asc')->get();
                    }
                    if ($spe == 3) {
                        $cpu = Hardware::where('product_name', '=', '_AMD')->where('hardware_introduce', '=', '极致性能')
                            ->orderBy('hardware_name', 'asc')->get();
                    }
                }
            }
        }

        return view('home.cpu', compact('products', 'categ', 'sub', 'cpu', 'cpu_price'));
    }

    public function board()
    {
        $products = Product::tree();
        $categ = Product::where('product_pid', '==', '0')->orderBy('product_name', 'asc')->get();
        $sub = Product::all();
        $board = Hardware::where('product_pid', '=', '3')->orderBy('hardware_name', 'asc')->get();
        if (!empty($_GET['company'])) {
            $company = $_GET['company'];
            if ($company == 1) {
                $board = Hardware::where('product_name', '=', '技嘉')->orderBy('product_name', 'asc')->get();
            } else {
                $board = Hardware::where('product_name', '=', '华硕')->orderBy('product_name', 'asc')->get();
            }
        }
        if (!empty($_GET['company']) && !empty($_GET['price'])) {
            $company = $_GET['company'];
            $price = $_GET['price'];
            if ($company == 1) {
                if ($price == 1) {
                    $board = Hardware::where('product_name', '=', '技嘉')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $board = Hardware::where('product_name', '=', '技嘉')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $board = Hardware::where('product_name', '=', '技嘉')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $board = Hardware::where('product_name', '=', '技嘉')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            } else {
                if ($price == 1) {
                    $board = Hardware::where('product_name', '=', '华硕')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $board = Hardware::where('product_name', '=', '华硕')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $board = Hardware::where('product_name', '=', '华硕')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $board = Hardware::where('product_name', '=', '华硕')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            }
        }
        return view('home.board', compact('categ', 'products', 'sub', 'board'));
    }

    public function driver()
    {
        $products = Product::tree();
        $categ = Product::where('product_pid', '==', '0')->orderBy('product_name', 'asc')->get();
        $sub = Product::all();
        $driver = Hardware::where('product_pid', '=', '2')->orderBy('hardware_name', 'asc')->get();
        if (!empty($_GET['company'])) {
            $company = $_GET['company'];
            if ($company == 1) {
                $driver = Hardware::where('product_name', '=', 'AMD')->orderBy('product_name', 'asc')->get();
            } else {
                $driver = Hardware::where('product_name', '=', 'NVIDIA')->orderBy('product_name', 'asc')->get();
            }
        }
        if (!empty($_GET['company']) && !empty($_GET['price'])) {
            $company = $_GET['company'];
            $price = $_GET['price'];
            if ($company == 1) {
                if ($price == 1) {
                    $driver = Hardware::where('product_name', '=', 'AMD')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $driver = Hardware::where('product_name', '=', 'AMD')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $driver = Hardware::where('product_name', '=', 'AMD')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $driver = Hardware::where('product_name', '=', 'AMD')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            } else {
                if ($price == 1) {
                    $driver = Hardware::where('product_name', '=', 'NVIDIA')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $driver = Hardware::where('product_name', '=', 'NVIDIA')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $driver = Hardware::where('product_name', '=', 'NVIDIA')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $driver = Hardware::where('product_name', '=', 'NVIDIA')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            }
        }
        return view('home.driver', compact('products', 'categ', 'sub', 'driver'));
    }

    public function memory()
    {
        $products = Product::tree();
        $categ = Product::where('product_pid', '==', '0')->orderBy('product_name', 'asc')->get();
        $sub = Product::all();
        $memory = Hardware::where('product_pid', '=', '4')->orderBy('hardware_name', 'asc')->get();
        if (!empty($_GET['company'])) {
            $company = $_GET['company'];
            if ($company == 1) {
                $memory = Hardware::where('product_name', '=', '金士顿')->orderBy('product_name', 'asc')->get();
            } else {
                $memory = Hardware::where('product_name', '=', '海盗船')->orderBy('product_name ', 'asc')->get();
            }
        }
        if (!empty($_GET['company']) && !empty($_GET['price'])) {
            $company = $_GET['company'];
            $price = $_GET['price'];
            if ($company == 1) {
                if ($price == 1) {
                    $memory = Hardware::where('product_name', '=', '金士顿')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $memory = Hardware::where('product_name', '=', '金士顿')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $memory = Hardware::where('product_name', '=', '金士顿')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $memory = Hardware::where('product_name', '=', '金士顿')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            } else {
                if ($price == 1) {
                    $memory = Hardware::where('product_name', '=', '海盗船')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $memory = Hardware::where('product_name', '=', '海盗船')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $memory = Hardware::where('product_name', '=', '海盗船')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $memory = Hardware::where('product_name', '=', '海盗船')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            }
        }
        return view('home.memory', compact('categ', 'products', 'sub', 'memory'));
    }

    public function discs()
    {
        $products = Product::tree();
        $categ = Product::where('product_pid', '==', '0')->orderBy('product_name', 'asc')->get();
        $sub = Product::all();
        $discs = Hardware::where('product_pid', '=', '5')->orderBy('hardware_name', 'asc')->get();
        if (!empty($_GET['company'])) {
            $company = $_GET['company'];
            if ($company == 1) {
                $discs = Hardware::where('product_name', '=', '东芝')->orderBy('product_name', 'asc')->get();
            } else {
                $discs = Hardware::where('product_name', '=', '希捷')->orderBy('product_name', 'asc')->get();
            }
        }
        if (!empty($_GET['company']) && !empty($_GET['price'])) {
            $company = $_GET['company'];
            $price = $_GET['price'];
            if ($company == 1) {
                if ($price == 1) {
                    $discs = Hardware::where('product_name', '=', '东芝')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $discs = Hardware::where('product_name', '=', '东芝')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $discs = Hardware::where('product_name', '=', '东芝')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $discs = Hardware::where('product_name', '=', '东芝')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            } else {
                if ($price == 1) {
                    $discs = Hardware::where('product_name', '=', '希捷')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $discs = Hardware::where('product_name', '=', '希捷')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $discs = Hardware::where('product_name', '=', '希捷')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $discs = Hardware::where('product_name', '=', '希捷')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            }
        }return view('home.discs', compact('categ', 'products', 'sub', 'discs'));
    }

    public function waishe()
    {
        $products = Product::tree();
        $categ = Product::where('product_pid', '==', '0')->orderBy('product_name', 'asc')->get();
        $sub = Product::all();
        $waishe = Hardware::where('product_pid', '=', '6')->orderBy('hardware_name', 'asc')->get();
        if (!empty($_GET['company'])) {
            $company = $_GET['company'];
            if ($company == 1) {
                $waishe = Hardware::where('product_name', '=', '樱桃机械键盘')->orderBy('product_name', 'asc')->get();
            } else if($company == 2) {
                $waishe = Hardware::where('product_name', '=', 'ikbc机械键盘')->orderBy('product_name', 'asc')->get();
            }else{
                $waishe = Hardware::where('product_name', '=', '雷蛇系列')->orderBy('product_name', 'asc')->get();
            }
        }
        if (!empty($_GET['company']) && !empty($_GET['price'])) {
            $company = $_GET['company'];
            $price = $_GET['price'];
            if ($company == 1) {
                if ($price == 1) {
                    $waishe = Hardware::where('product_name', '=', '樱桃机械键盘')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $waishe = Hardware::where('product_name', '=', '樱桃机械键盘')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $waishe = Hardware::where('product_name', '=', '樱桃机械键盘')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $waishe = Hardware::where('product_name', '=', '樱桃机械键盘')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            } else if($company == 2){
                if ($price == 1) {
                    $waishe = Hardware::where('product_name', '=', 'ikbc机械键盘')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $waishe = Hardware::where('product_name', '=', 'ikbc机械键盘')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $waishe = Hardware::where('product_name', '=', 'ikbc机械键盘')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $waishe = Hardware::where('product_name', '=', 'ikbc机械键盘')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }
            }else{
                if ($price == 1) {
                    $waishe = Hardware::where('product_name', '=', '雷蛇系列')->
                    where('hardware_price', '<', '1999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 2) {
                    $waishe = Hardware::where('product_name', '=', '雷蛇系列')->where('hardware_price', '>', '2000')->
                    where('hardware_price', '<', '3999')->orderBy('product_name', 'asc')->get();
                } else if ($price == 3) {
                    $waishe = Hardware::where('product_name', '=', '雷蛇系列')->where('hardware_price', '>', '4000')->
                    where('hardware_price', '<', '5999')->orderBy('product_name', 'asc')->get();
                } else {
                    $waishe = Hardware::where('product_name', '=', '雷蛇系列')->
                    where('hardware_price', '>', '6000')->orderBy('product_name', 'asc')->get();
                }}
        }return view('home.waishe', compact('categ', 'products', 'sub', 'waishe'));
}
}
