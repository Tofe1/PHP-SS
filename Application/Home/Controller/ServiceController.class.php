<?php
namespace Home\Controller;
use Think\Controller;
class ServiceController extends Controller {
    public function index(){
        $goods=D('goods');
        $info=$goods->where()->select();
        $this->assign('info',$info);
        $this->display();
    }
}