<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="/Application/Admin/Public/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="/Application/Admin/Public/css/theme.css">
    <link rel="stylesheet" href="/Application/Admin/Public/css/font-awesome.css">

    <script src="/Application/Admin/Public/js/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
  <div class="navbar">
    <div class="navbar-inner">
            <ul class="nav pull-right">
                
                
                <li id="fat-menu" class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i> <?php echo (session('admin_user')); ?>
                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        
                        <li class="divider visible-phone"></li>
                        <li><a tabindex="-1" href="/index.php/Admin/User/logout">Logout</a></li>
                    </ul>
                </li>
                
            </ul>
            <a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Company</span></a>
    </div>
</div>
    


  <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
<div class="sidebar-nav">
    

    <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>后台首页</a>
    <ul id="dashboard-menu" class="<?php echo get_menu_controller_style("index");?>">
        <li  class="<?php echo get_menu_active_style("index");?>"><a href="/index.php/Admin/Index/index">Home</a></li>
        
        
    </ul>

    <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>商品管理</a>
    <ul id="accounts-menu" class="<?php echo get_menu_controller_style("goods");?>">
        <li class="<?php echo get_menu_active_style("lst");?>"><a href="/index.php/Admin/Goods/lst">商品列表</a></li>
        <li class="<?php echo get_menu_active_style("add");?>"><a href="/index.php/Admin/Goods/add">添加商品</a></li>
        <li class="<?php echo get_menu_active_style("edit");?>"><a href="/index.php/Admin/Goods/edit">修改商品</a></li>
    </ul>

    <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-user"></i>用户管理</a>
    <ul id="error-menu" class="<?php echo get_menu_controller_style("manager");?>">
        <li class="<?php echo get_menu_active_style("userlst");?>"><a href="/index.php/Admin/Manager/userlst">用户列表</a></li>
        <li class="<?php echo get_menu_active_style("useradd");?>"><a href="/index.php/Admin/Manager/useradd">添加新用户</a></li>
        <li class="<?php echo get_menu_active_style("useredit");?>"><a href="/index.php/Admin/Manager/useredit">修改用户信息</a></li>
    </ul>

    <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>信息管理</a>
    <ul id="legal-menu" class="<?php echo get_menu_controller_style("message");?>">
        <li class="<?php echo get_menu_active_style("contact");?>"><a href="/index.php/Admin/Message/contact">用户联系</a></li>
        <li class="<?php echo get_menu_active_style("orderlst");?>"><a href="/index.php/Admin/Message/orderlst">订单处理</a></li>
    </ul>

</div>
    

    
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">用户管理</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.html">用户管理</a> <span class="divider">/</span></li>
            <li><a href="users.html">修改用户</a> <span class="divider">/</span></li>
          
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    

<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
    <form id="tab" action="/index.php/Admin/Manager/userdoedit" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo ($info[user_id]); ?>">
        <input type="hidden" name="name" value="<?php echo ($info[user_name]); ?>">
        <input type="hidden" name="password" value="<?php echo ($info[user_password]); ?>">
        <input type="hidden" name="email" value="<?php echo ($info[user_email]); ?>">
        <input type="hidden" name="relname" value="<?php echo ($info[user_relname]); ?>">
      
      
        <label>用户姓名</label>
        <input value="<?php echo ($info['user_name']); ?>" type="text" name="user_name" class="input-xlarge">
        <label>用户密码</label>
        <input value="<?php echo ($info['user_password']); ?>" type="text" name="user_password" class="input-xlarge">
        <label>用户邮箱</label>
        <input value="<?php echo ($info['user_email']); ?>" type="text" name="user_email" class="input-xlarge">
        <label>用户真实姓名</label>
        <input value="<?php echo ($info['user_relname']); ?>" type="text" name="user_relname" class="input-xlarge">
      
        <div class="btn-toolbar">
         <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
         <div class="btn-group">
         </div>
        </div>
    </form>
      </div>

  </div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Delete Confirmation</h3>
  </div>
  <div class="modal-body">
    
    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
  </div>
</div>


                    
<footer>
    <hr>
    
    <p class="pull-right"> <a  target="_blank"></a></p>
    

    
</footer>

</div>
</div>
</div>



<script src="/Application/Admin/Public/js/bootstrap.js"></script>
<script type="text/javascript">
$("[rel=tooltip]").tooltip();
$(function() {
$('.demo-cancel-click').click(function(){return false;});
});
</script>
    
  </body>
</html>