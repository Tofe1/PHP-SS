<?php
namespace Home\Controller;
use Think\Controller;
class LrController extends Controller {
    public function register(){
        $homeuser=D('homeuser');
        if(IS_POST){
            $date['user_name']=I('user_name');
            $date['user_password']=I('user_password');
            
            $date['user_email']=I('user_email');
            $date['user_relname']=I('user_relname');
            if($homeuser->create($date)){
                if($homeuser->add()){
                    $this->success("注册成功",U('login'));
                }else {
                    $this->error('注册失败'); 
                }
            }else{
                $this->error($homeuser->getError());
            }
            return;
        }
        $this->display();
    }



    function login(){
        
        //两个逻辑：展示表单、收集表单
        if(!empty($_POST)){
            //收集表单信息：校验验证码、校验用户名和密码、跳转到后台品字首页面
           //校验验证码
          
           
               //校验用户名和密码
               $name = $_POST['user_name'];
               $password = $_POST['user_password'];
               //利用model模型的"自定义"方法校验用户名和密码
               $user = new \Home\Model\HomeuserModel();
               $info = $user -> checkNamePwd($name,$password);
               if($info){
                   session('name',$name);
                   $this->success("登录成功",U('./Home'));

                   //$this->redirect($url,$params,$delay间隔时间,$msg提示信息)
               
           }else
           {$this->error('登录失败',U('Lr/login'));}
        }

        //展示表单
        $this->display();
    }

    
    public function register1(){
        
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