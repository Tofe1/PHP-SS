<?php

namespace Home\Model;
use Think\Model;

//后台model模型类
class HomeuserModel extends Model{

    protected $_validate = array(
        array('user_name','require','用户名不能为空！',1,'regex',3),
        array('user_name','','该用户名已被使用！',1,'unique',3), 
      );


    function checkNamePwd($name,$password){
        //首先验证名字
        $info = $this ->where("user_name='$name'")->find();
        //var_dump($info);
        if($info!==null){
            //其次再验证密码
            if($info['user_password']===$password){
                return true;
            }
            else{return false;}
       
       
    }
   
}
}