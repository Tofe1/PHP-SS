<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
    public function messages(){
        $goods=D('goods');
        $goodsr=$goods->find(I('id'));
        $this->assign('goodsr',$goodsr);
        $cat=D('cat');
        if(IS_POST){
            $name=$_POST['user_name'];
            if(!$name){
                $this->error('请先登录',U('Home/Lr/login')); 
            }else{$number=$_POST['goods_number'];
                if($number<1){
                    $this->error('商品数量不能小于一'); 
                }else{
         $date['user_name']=$_POST['user_name'];
         $date['goods_id']=$_POST['goods_id'];
         $date['goods_number']=$_POST['goods_number'];
         $date['goods_price']=$_POST['goods_price'];
         $date['goods_name']=$_POST['goods_name'];
         $date['goods_small_img']=$_POST['goods_small_img'];
        }
    }
         if($cat->create($date)){
             if($cat->add()){
                 $this->success("成功添加到购物车");
             }else {
                 $this->error('添加失败'); 
             }
         }else{
        $this->error($cat->getError());
         }
         return;
     }
        $this->display();
 
     }
    
    public function cat(){
        if(!I('name')){
            $this->error('请先登录',U('Home/Lr/login')); 
        }
        $cat=D('cat');
        $name=I('name');
        $catr=$cat->where("user_name='$name'")->select();
        
        $count = 0;
        foreach($catr as $aa){
            $count +=$aa[goods_number];
        }
        $zong = 0;
        foreach($catr as $zz){
            $zong +=($zz[goods_number]*$zz[goods_price]);
        }
        $this->assign(array('show'=>$catr,'count'=>$count,'zong'=>$zong));
        $this->display();
    }
    public function del(){
        $cat=D('cat');
        $name=I('name');
        if($cat->delete(I('id'))){
            $this->success('删除成功', U("Home/cart/cat/name/$name"));
        }else{$this->error('删除栏目失败');
     }
}
    public function payh(){
        $cat=D('cat');
        $dd=D('dd');
        $id=I('id');
        $goods=$cat->where("user_id='$id'")->select();
        $data['user_id']=$goods[0]['user_id'];
        $data['goods_id']=$goods[0]['goods_id'];
        $data['goods_name']=$goods[0]['goods_name'];
        $data['goods_number']=$goods[0]['goods_number'];
        $data['goods_zprice']=$goods[0]['goods_price']*$goods[0]['goods_number'];
        $data['goods_small_img']=$goods[0]['goods_small_img'];
        $name=I('name');
        if(($cat->delete(I('id')))&&($dd->create($data))&&($dd->add())){
            $this->success('提交成功', U("Home/cart/cat/name/$name"));
        }else{$this->error('提交订单失败');
    }
    }
    public function delall(){
        $cat=D('cat');
        $cc=I('name');
        echo ($W);
        if($cat->where("user_name='$cc'")->delete()){
            $this->success('删除成功', U('Home/home/index'));
        }else{
            $this->error('清空失败');
        }
    }
    public function aa($goods_number,$goods_price){
        if(IS_AJAX){
            $cat=D('cat');
            
            $p=$goods_number;
            $a = $goods_price;
            $zong = $p*$a;
            $this->ajaxReturn(
                array(
                    code => 0,//正常
                    data => $zong
                )
            );
        }
    }
    
}