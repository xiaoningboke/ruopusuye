<?php
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller {
    public function _initialize(){
        if(!session('user')){
            $this->error('对不起，您还没有登录!请先登录在进行操作',U('Login/Index/index'));
        }

    }
}
