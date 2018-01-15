<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends Controller {
    public function index(){
        $contact=D('contact');
        if(IS_POST){
            if(!($_POST['user_name'])){
                $this->error('请先登录',U('Home/Lr/login'));
            }else{
            $data['user_name']=$_POST['user_name'];
            $data['name']=$_POST['name'];
            $data['email']=$_POST['email'];
            $data['subject']=$_POST['subject'];
            $data['messages']=$_POST['messages'];
            }
        if($contact->create($data)){
            echo ('1231');
            if($contact->add()){
            $this->success("成功发送信息");}
        else{ $this->error("失败");
                  }
                }else{
       $this->error($contact->getError()); }
            return;  }
             $this->display();
    }
    
    
        
       
    
   
} 
