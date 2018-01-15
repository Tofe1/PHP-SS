<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller {
    public function index(){
        $goods=D('goods');
        $goodses=$goods->order('goods_id desc')->limit(5)->select();
        $this->assign('goodsname',$goodses);
        
        
        $goods=D('goods');
        $goodses4=$goods->order('goods_id desc')->limit(4)->select();
        $this->assign('goodsname4',$goodses4);
        $this->display();
    }
}