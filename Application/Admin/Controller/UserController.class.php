<?php

namespace Admin\Controller;
use Think\Controller;
// use Tool\AdminController;

class UserController extends Controller{
    public function login(){
        //两个逻辑：展示表单、收集表单
        if(!empty($_POST)){
            //收集表单信息:校验用户名和密码、跳转到后台首页面
               $nm = $_POST['admin_user'];
               $pw = $_POST['admin_psd'];
               //利用model模型的"自定义"方法校验用户名和密码
               $user = new \Admin\Model\UserModel();
               $info = $user -> checkNamePwd($nm,$pw);
               if($info){
                   
 
                   session('admin_user',$info['user_name']);
                   session('admin_id',$info['user_id']);
                   $this->redirect('Index/index');
                   //$this->redirect($url,$params,$delay间隔时间,$msg提示信息)
               }
           }

        $this->display();
    }
    function logout(){
        //持久化用户信息，并做页面跳转
        //session(name);//获得name的session信息
        //session(name,value);//设置name的session信息
        //session(name,null);//删除name的session信息
        //session(null);//删除全部的session信息
        session(null); //清空session
        $this ->redirect('login');
    }
}