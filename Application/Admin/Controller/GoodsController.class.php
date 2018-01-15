<?php

namespace Admin\Controller;
use Think\Controller;
// use Tool\AdminController;

class GoodsController extends Controller{
    public function lst(){
        $goods = D(Goods);

        /****************搜索*************** */
        $goods_name = isset($_GET['goods_name']) ? $_GET['goods_name'] : '';
        // $a = isset($_GET['goods_category']) ? $_GET['goods_category'] : '未分类';
        // $b = isset($_GET['goods_category']) ? $_GET['goods_category'] : '手机';
        // $c = isset($_GET['goods_category']) ? $_GET['goods_category'] : '平板';

        $where = [];

        if($goods_name){
            $where['goods_name'] = ['like',"%$goods_name%"];
        }
    //    if($_GET['goods_category']==0){
    //         $where = '';
    //     }
    //     if($_GET['goods_category']==3){
    //         $where['goods_category'] = '未分类';
    //     }
    //     if($_GET['goods_category']==1){
    //         $where['goods_category'] = '手机';
    //     }
    //     if($_GET['goods_category']==2){
    //         $where['goods_category'] = '平板';
    //     }
        
        /*****************翻页********************** */
        $count = $goods->where($where)->count();
        $perPage = 5;
        $page = new \Think\Page($count,$perPage);

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $btn = $page->show();
        $this->assign('page',$btn);

        
        


        $info= $goods->where($where)->order('goods_id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('info',$info);
        // var_dump($info);
        $this->display();
    }
    public function doedit(){
        $id = trim($_POST['id']);
        $goods_name = trim($_POST['goods_name']);
        $goods_price = trim($_POST['goods_price']);
        $goods_number = trim($_POST['goods_number']);
        $goods_introduce = trim($_POST['goods_introduce']);
         /*********************上传图片************************/
         $upload = new \Think\Upload();//生成类的对象
         //配置以下几个值
         $upload->rootPath  = './Public/Uploads/'; // 设置附件上传根目录-->手动创建
 
         //上传图片,如果失败返回 false如果成功返回上传之后图片的信息
         $info = $upload->upload();
 
         /******************构造要修改的数据***************************/
         $data = [
                 'goods_name' => $goods_name,
                 'goods_price' => $goods_price,
                 'goods_number' => $goods_number,
                 'goods_introduce' => $goods_introduce,
         ];
 
        //  var_dump($data);
         //是否上传图片成功
         if($info){
             /***************生成缩略图******************************/
             //获取图片二级目录开始的路径
 
             //       Note/2016-11-19/              big_123456.jpg
             $image = $info['goods_pic']['savepath'] . $info['goods_pic']['savename'];
 
             /*****************************把这个刚上传好了再生成缩略图*************************************/
             //先把缩略图的名字起好
             $smImg = $info['goods_pic']['savepath'] . 'small_' . $info['goods_pic']['savename'];
             //开始生成
             $imgObj = new \Think\Image();
             $imgObj->open('./Public/Uploads/'.$image);//打开要处理图片
             $imgObj->thumb(173,156,6)->save('./Public/Uploads/'.$smImg);
             /**********************把图片路径放到数据一起修改***********************/
             $data['goods_big_img'] = $image;
             $data['goods_small_img'] = $smImg;
            
            unlink('./Public/Uploads/'.$_POST['obig_img']);
            unlink('./Public/Uploads/'.$_POST['osmall_img']);
        }
        //插入数据库并返回新添加的记录的ID
        $model = D('Goods'); //生成Note类的对象
        $id = $model->where([
            'goods_id' => $id
        ])->save($data);
        //提示信息
        $this->success("修改成功!",'/Admin/Goods/lst');
    }
    public function edit(){
        
        $goods_id = $_GET['id'];
        
        $goods = D('Goods');
        
        $info = $goods->where([
            'goods_id' => $goods_id,
        ])->find();

        

        $this->assign('info',$info);
        $this->display();
    }
    public function add(){
        $goods = D(Goods);
        if(!empty($_POST)){

            if($_FILES['goods_pic']['error']!=4){
                $cfg = array(
                    'rootPath'       => './Public/Uploads/',//保存根路径
                );
                $up = new \Think\Upload($cfg);
                $z = $up->uploadOne($_FILES['goods_pic']);       
                $imgname=$z['savepath'].$z['savename'];
                $_POST['goods_big_img']=$imgname;

                $im = new \Think\Image();
                $im ->open('./Public/uploads/'.$imgname);
                $im ->thumb(173,156,6);
                $smallimgname = $z['savepath'].'small_'.$z['savename'];
                $im ->save('./Public/Uploads/'.$smallimgname);
                $_POST['goods_small_img']=$smallimgname; 
            }

            $info = $goods ->create();
            // var_dump($info);
            $z = $goods->add($info);
            if($z){
                $this->redirect('lst',array(),2,'添加商品成功!');
            }
            
        }
        $this->display();
    }

    public function delete(){
        $goods_id=$_GET['goods_id'];
        $model = D('Goods');
        $info = $model->field('goods_big_img,goods_small_img')->where([
            'goods_id'  => $goods_id,
        ])->find();
        unlink('__UP__'.$info['goods_big_img']);
        unlink('__UP__'.$info['goods_small_img']);
        $model->where([
            'goods_id' => $goods_id,
        ])->delete();
        $this->success('商品已删除');
    }
    public function pldelete(){
        $model = D('Goods');
        //循环每个ID
      //把提交的数据都打印:var_dump($_POST);
      
      foreach($_POST['goods_id'] as $goods_id){
         
        
         //先取出这个留言的图片路径是什么
         // SELECT image,big_image,mid_image,sm_image FROM s7_note WHERE id=$id LIMIT 1
        $info = $model->field('goods_big_img,goods_small_img')
              ->where([
                 'goods_id' => $goods_id,
               ])->find();
         // 从1硬盘上删除这些图片
         unlink('__UP__'.$info['goods_big_img']);
         unlink('__UP__'.$info['goods_small_img']);
         //再从数据库中把这条记录也删除
         //delect from s7_note where id=$id
         $model->where([
             'goods_id'=>$goods_id,
         ])->delete();
      }
      $this->success('操作成功!');
  }
}