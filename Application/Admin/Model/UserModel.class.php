<?php

namespace Admin\Model;
use Think\Model;

//后台model模型类
class UserModel extends Model{

    //制作方法实现用户名和密码的校验
    //返回值：
    //成功-->当前用户的信息记录
    //失败-->返回false
    function checkNamePwd($name,$pwd){
        //首先验证名字
        $info = $this ->where("user_name='$name'")->find();
        //var_dump($info);
        if($info!==null){
            //其次再验证密码
            if($info['password']===$pwd){
                return $info;
            }
       }
       return false;
    }
}