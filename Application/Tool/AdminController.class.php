<?php

namespace Tool;
use Think\Controller;

class AdminController extends Controller{
    //构造方法
    function __construct(){
        parent::__construct();
        //实现访问权限控制器过滤功能（防止翻墙访问）
       //1.获得当前请求的controller和action
       $nowac = CONTROLLER_NAME."-".ACTION_NAME;
       //2.获得当前用户对应的角色权限
       $adminid = session('admin_id');
      
     

       //-----------------------------------------------------//
       //禁止未登录系统用户访问后台
       $ac = "User-login";//未登陆系统也允许访问的操作
       if(empty($adminid) && strpos($ac,$nowac)===false){
           $url = U('User/login');
           $js=<<<eof
                <script type="text/javascript">
                    window.top.location.href="$url";
                </script>
eof;
           echo $js;
           //$this -> redirect('User/login');
       }

     
    }
}