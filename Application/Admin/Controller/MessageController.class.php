<?php

namespace Admin\Controller;
use Think\Controller;
// use Tool\AdminController;

class MessageController extends Controller{
    public function contact(){
          $con = D('Contact');
        
         /****************搜索*************** */
                $user_name = isset($_GET['user_name']) ? $_GET['user_name'] : '';
              
        
                $where = [];
        
                if($user_name){
                    $where['user_name'] = ['like',"%$user_name%"];
                }
            
            /*****************翻页********************** */
            $count = $con->where($where)->count();
            $perPage = 5;
            $page = new \Think\Page($count,$perPage);
    
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $btn = $page->show();
            $this->assign('page',$btn);
    
            
            
    
    
            $info= $con->where($where)->order('Id desc')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('info',$info);
            // var_dump($info);
            $this->display();
        }

        public function mdelete(){
            $id=$_GET['id'];
            $model = D('Contact');
            
            $model->where([
                'Id' => $id,
            ])->delete();
            $this->success('消息已删除');
        }
        public function mpldelete(){
            $model = D('Contact');
            //循环每个ID
          //把提交的数据都打印:var_dump($_POST);
          
          foreach($_POST['id'] as $id){
             
            
            
             //再从数据库中把这条记录也删除
             //delect from s7_note where id=$id
             $model->where([
                 'Id'=>$id,
             ])->delete();
          }
          $this->success('操作成功!');
      }
      public function orderlst(){
        $con = D('Dd');
      
       /****************搜索*************** */
              $user_name = isset($_GET['user_name']) ? $_GET['user_name'] : '';
            
      
              $where = [];
      
              if($user_name){
                  $where['user_name'] = ['like',"%$user_name%"];
              }
          
          /*****************翻页********************** */
          $count = $con->where($where)->count();
          $perPage = 5;
          $page = new \Think\Page($count,$perPage);
  
          $page->setConfig('prev','上一页');
          $page->setConfig('next','下一页');
          $btn = $page->show();
          $this->assign('page',$btn);
  
          
          
  
  
          $info= $con->where($where)->order('user_id desc')->limit($page->firstRow.','.$page->listRows)->select();
          $this->assign('info',$info);
          // var_dump($info);
          $this->display();
      }

      public function ddelete(){
          $user_id=$_GET['user_id'];
          $model = D('Dd');
          
          $model->where([
              'user_id' => $user_id,
          ])->delete();
          $this->success('订单已删除');
      }
      public function dpldelete(){
          $model = D('Dd');
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