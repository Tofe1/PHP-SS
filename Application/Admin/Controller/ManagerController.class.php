<?php

namespace Admin\Controller;
use Think\Controller;
// use Tool\AdminController;

class ManagerController extends Controller{
    public function userlst(){
        $user = D(Homeuser);

        /****************搜索*************** */
        $user_name = isset($_GET['user_name']) ? $_GET['user_name'] : '';
      

        $where = [];

        if($user_name){
            $where['user_name'] = ['like',"%$user_name%"];
        }
       
        
        /*****************翻页********************** */
        $count = $user->where($where)->count();
        $perPage = 5;
        $page = new \Think\Page($count,$perPage);

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $btn = $page->show();
        $this->assign('page',$btn);

        
        


        $info= $user->where($where)->order('user_id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('info',$info);
        // var_dump($info);
        $this->display();
    }
    public function userdoedit(){
        $id = trim($_POST['id']);
        $user_name = trim($_POST['user_name']);
        $user_password = trim($_POST['user_password']);
        $user_email = trim($_POST['user_email']);
        $user_relname = trim($_POST['user_relname']);
        
         /******************构造要修改的数据***************************/
         $data = [
                 'user_name' => $user_name,
                 'user_password' => $user_password,
                 'user_email' => $user_email,
                 'user_relname' => $user_relname,
         ];
 
         
       
        //插入数据库并返回新添加的记录的ID
        $model = D('Homeuser'); //生成对象
        $id = $model->where([
            'user_id' => $id
        ])->save($data);
        //提示信息
        $this->success("修改成功!",'/Admin/Manager/userlst');
    }
    public function useredit(){
        
        $user_id = $_GET['id'];
        
        $user = D('Homeuser');
        
        $info = $user->where([
            'user_id' => $user_id,
        ])->find();

        

        $this->assign('info',$info);
        $this->display();
    }
    public function useradd(){
        $user = D(Homeuser);
        if(!empty($_POST)){

            
            

            $info = $user ->create();
            // var_dump($info);
            $z = $user->add($info);
            if($z){
                $this->redirect('userlst',array(),2,'用户添加成功!');
            }
         }   
        
        $this->display();
    }

    public function userdelete(){
        $user_id=$_GET['user_id'];
        $model = D('Homeuser');
        
        $model->where([
            'user_id' => $user_id,
        ])->delete();
        $this->success('用户已删除');
    }
    public function userpldelete(){
        $model = D('Homeuser');
        //循环每个ID
      //把提交的数据都打印:var_dump($_POST);
      
      foreach($_POST['user_id'] as $user_id){
         
        
        
         //再从数据库中把这条记录也删除
         //delect from s7_note where id=$id
         $model->where([
             'user_id'=>$user_id,
         ])->delete();
      }
      $this->success('操作成功!');
  }
}