<?php

declare (strict_types=1);

namespace app\demo\controller;
use app\BaseController;
use think\facade\Request;
class Canshu extends BaseController{
    public function canshu(){

    echo '你好';
    dump($this->request->param());
    dump($this->request->get());
    dump($this->request->param('id'));
     dump($this->request->param('id',0));
     dump($this->request->param('id',0,'intval'));
    dump(Request::param('id'));
    dump(input('id'));
    dump(input('get.id'));
    }

}
