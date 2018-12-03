<?php
namespace Login\Controller;
use Think\Controller;
use Login\Model\UserModel;
class IndexController extends Controller {

/**
 * 显示登录页面。判断是否登录
 * @return [type] [description]
 */
public function index(){
    //var_dump(md5(md5(123456)));exit;
        if(!session('?user')){
            $this->display();
        }else{
            $this->redirect(U('Admin/Index/index'));
    }
}

    /**
     * 登录方法
     * @return [type] [description]
     */
    public function login(){
        /*var_dump($identity);exit;*/
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = new UserModel();
        session('username');
        $UsData = $user->findUser($username);
            /*var_dump($f);exit;*/
            if(md5(md5($password))==$UsData["password"]){
                /*var_dump(session('user')["identity"]);exit;*/
                session('user',$UsData);
                $this->redirect('Admin/Index/index');
                //$this->success('登陆成功',U('Costom/Index/account'));
                //$this->redirect('Costom/Index/index');
            }else{
                $this->error('账号或密码错误',U('Login/Index/index'));
            }
    }

    /**
     * 退出
     * @return [type] [description]
     */
    public function quit(){
        session('[destroy]');
        $this->redirect('Login/Index/index');
    }
}