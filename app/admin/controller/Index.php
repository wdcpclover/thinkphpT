<?php
declare (strict_types = 1);

namespace app\admin\controller;

class Index
{
    public function index()
    {
        return '您好！这是一个[admin]示例应用';
    }
    public function hello($name = '传递参数测试')
    {
        return 'hello,' . $name.'这里是hello方法';
    }
}
