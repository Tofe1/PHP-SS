<?php
namespace Admin\Controller;
use Think\Controller;
// use Tool\AdminController;

class IndexController extends Controller {
    public function index(){
        $goods = D('Goods');
        $user = D('Homeuser');
        $con = D('contact');
        $order = D('dd');

        $info1=$goods->count();
        $info2=$user->count();
        $info3=$con->count();
        $info4=$order->count();

        $this->assign('info1',$info1);
        $this->assign('info2',$info2);
        $this->assign('info3',$info3);
        $this->assign('info4',$info4);
        $this->display();
    }
}