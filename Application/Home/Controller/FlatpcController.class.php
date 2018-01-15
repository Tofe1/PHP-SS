<?php
namespace Home\Controller;
use Think\Controller;
class FlatpcController extends Controller {
    public function index(){
        $goods=D('goods');
        $info=$goods->where('goods_category="平板"')->select();
        $this->assign('info',$info);
    
        $this->display();
    }
}