<?php
namespace Home\Controller;
use Think\Controller;
class MobilephoneController extends Controller {
    public function index(){
        $goods=D('goods');
        $info=$goods->where('goods_category="手机"')->select();
        $this->assign('info',$info);
        $this->display();
    }
} 