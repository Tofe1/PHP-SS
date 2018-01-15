<?php
if (!function_exists('get_menu_active_style')){
    /**
     * 根据$controller判断当前菜单是否处于激活状态
     * @param $controller 当前视图所在的控制器，每一个Tab对应一个控制器
     */
    function get_menu_controller_style($controller){
        if ($controller== strtolower(CONTROLLER_NAME)) {
            echo 'nav nav-list collapse in';
        }else {
            echo 'nav nav-list collapse';
        }
    };
    function get_menu_active_style($action){
        if ($action== strtolower(ACTION_NAME)) {
            echo 'active';
        }else {
            echo '';
        }
    };

    
}
function zong($price,$number){
    var_dump($price);
    $p=(int)$price;
    $n=(int)$number;
    $zong=$p*$n;
    return($zong);
}