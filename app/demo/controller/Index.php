<?php
declare (strict_types = 1);

namespace app\demo\controller;
use think\facade\view;

class Index
{
    public function index()
    {
        return '您好！这是一个[demo]示例应用';
    }
    public function hello($name = '传递参数测试')
    {
        return 'hello,' . $name.'这里是hello方法';}
    public function viewtest()
    {
//    return View::fetch();
    return View::fetch('demo');
    }
}
