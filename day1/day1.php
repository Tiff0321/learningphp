<?php 
// 练习题
// 请大家用 strpos() 函数和 substr() 函数获取这个 URL 的域名
// $url = "http://www.google.com/users/index.html";

$url = "http://www.google.com/users/index.html";
$result=substr($url,strpos($url,"."));
$pos2=strpos($result,"/");
$result2=substr($result,1,$pos2-1);
echo $result2;

// 练习题
// 请大家定义一个汽车类，汽车有属性：品牌、颜色、价格，汽车有方法：启动、加速、刹车、停止。
// 子类：轿车、卡车，轿车有方法：开窗、放音乐，卡车有方法：装货、卸货。
// 或者是其他的类，大家可以自由发挥。

// class car
// {
//     // 属性
//     public $brand;
//     public $color;
//     public $price;

//     // 构造函数 __construct() 是 PHP 的一个构造函数，当一个对象被创建时调用。

//     public function __construct($brand)
//     {
//         $this->brand = $brand;
//     }

//     // 方法
//     public function start()
//     {
//         var_dump("启动");
//     }
    
//     // 方法
//     public function speedup()
//     {
//         var_dump("加速");
//     }

//     // 方法
//     public function brake()
//     {
//          var_dump("刹车");
//     }

//             // 方法
//     public function stop()
//     {
//         var_dump("停止");
//     }
// }

// // 子类：轿车、卡车，轿车有方法：开窗、放音乐，卡车有方法：装货、卸货。
// // 或者是其他的类，大家可以自由发挥。

// class texi extends car
// {
//     public function openWindow()
//     {
//         var_dump("开窗");
//     }
//     public function outMusic()
//     {
//         var_dump("放音乐");
//     }
// }

// class truck extends car
// {
//     public function uploadGoods()
//     {
//         var_dump("装货");
//     }
//     public function downloadGoods()
//     {
//         var_dump("卸货");
//     }
// }


//$animal = new animal("动物");

// 实例化对象
// $texi = new texi("丰田");
// $texi->brand = "丰田";
// $texi->color = "黑色";
// $texi->price = "10万";
// var_dump($texi->brand);
// $texi->openWindow();
// $texi->outMusic();



// __get() 方法用于从不可访问属性读取数据。
// __set() 方法用于写入不可访问属性。

class Magic2
{
    private $data = [];
    // ['name' => '张三']

    public function __get($name)
    {
        // $name = "name"
        return $this->data[$name];
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

//$array = [];
//$array["name"] = "张三";
//$array["age"] = 20;
//// ['name' => '张三', 'age' => 20];
//var_dump($array);
//die;

$magic2 = new Magic2();
$magic2->name = "张三";
var_dump($magic2->name);
