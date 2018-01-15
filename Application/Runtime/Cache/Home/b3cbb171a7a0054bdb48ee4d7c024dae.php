<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <link href="http://localhost:3000/Application/Home/Public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:3000/Application/Home/Public/css/admin_login.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/menu/css/simple_menu.css">


<!--JS FILES -->

	
    <script src="http://localhost:3000/Application/Home/Public/js/jquery.tools.min.js" type="text/javascript"></script>
</head>
<body style="cursor: auto;">
<div id="topNav" class="clearfix">
    <div style="float: left;"> 
        <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
            <?php if(!$_SESSION['name']): ?><a href="/index.php/Home/Lr/login"><span> 登录</span></a>
                    <a href="/index.php/Home/Lr/register">注册</a>
                <?php else: ?> 
                <?php echo (session('name')); endif; ?>
            
        </font>
    </div>
    <div style="float: right;">
        <a href="/index.php/Home/Cart/cat/name/<?php echo (session('name')); ?>">查看购物车</a>
        <?php if(!$_SESSION['name']): else: ?>
        |
        <a href="/index.php/Home/Lr/logout">退出登录</a><?php endif; ?>

    </div>
</div>

<div class="header">

   
    <!-- Logo/Title -->
    
    <div id="site_title"><a href="/index.php/Home/Home/index">
        <img src="http://localhost:3000/Application/Home/Public/img/logo.png" alt="My Site Title" /></a>
    </div>  
        
    <!-- Main Menu -->
    
    <ol id="menu">
             <li  class="<?php echo get_menu_active_style("home");?>"><a href="/index.php/Home/Home/index" >Home</a>
        
              <!-- sub menu -->
              <!-- <ol>  
                <li><a href="nivo.html">Nivo Slider</a></li>
                <li><a href="ei_slider.html">EI Slider</a></li>
                <li><a href="fullscreen_gallery.html">Fullscreen Slider</a></li>
                <li><a href="image_frontpage.html">Static Image</a></li>
              </ol> -->
              </li><!-- end sub menu -->
        
        <li class="<?php echo get_menu_active_style("mobilephone");?>"><a href="/index.php/Home/Mobilephone/index">Mobilephone</a>
        
              <!-- sub menu -->
              <!-- <ol>     
                <li><a href="magazine.html">Magazine</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="full-width.html">Full Width Page</a></li>
                <li><a href="columns.html">Columns</a></li>
              </ol> -->
        </li><!-- end sub menu -->
        
        <li class="<?php echo get_menu_active_style("flatpc");?>"><a href="/index.php/Home/Flatpc/index">Flatpc</a></li>
              
        <li class="<?php echo get_menu_active_style("service");?>"><a href="/index.php/Home/Service/index">More</a>
        
              <!-- sub menu -->
              <!-- <ol>     
                <li><a href="gallery-simple.html">Simple</a></li>
                <li><a href="portfolio.html">Filterable</a></li>
                <li><a href="gallery_fader.html">Fade Scroll</a></li>
                <li><a href="video.html">Video</a></li>
                <li class="last"><a href="photogrid.html">PhotoGrid</a></li>
              </ol> -->
        </li><!-- end sub menu -->
        
               <li class="<?php echo get_menu_active_style("contact");?>"><a href="/index.php/Home/contact/index">Contact</a></li>
    </ol>
     
       </div> 
       
     <!-- END header -->
     <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>

    <div id="container">



<div class="admin_login_wrap">
    <h1>用户登录</h1>
    <div class="adming_login_border">
        <div class="admin_input">



            <form action="" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="user_name" value="" id="user" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="user_password" value="" id="pwd" size="35" class="admin_input_style" />
                    </li>
                    
                           
                         
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>



        </div>
    </div>
</div>
<div id="footer">

    <!-- First Column -->

    <div class="one-fourth">
        <h3>常用软件</h3>
            <ul class="footer_links">
                <li><a href="#">电脑管家</a></li>
                <li><a href="#">手机管家</a></li>
                <li><a href="#">腾讯视频</a></li>
                <li><a href="#">美图秀秀</a></li>
            </ul>
    </div>
    
    <!-- Second Column -->
    
    <div class="one-fourth">
        <h3>实用工具</h3>
            <ul class="footer_links">
                <li><a href="#">腾讯QQ</a></li>
                <li><a href="#">支付宝</a></li>
                <li><a href="#">万年历</a></li>
                <li><a href="#">开心消消乐</a></li>
            </ul>
    </div>
    
    <!-- Third Column -->
    
    <div class="one-fourth">
        <h3>Information</h3>
        ©mi.com 京ICP证110507号 京ICP备10046444号 京公网安备11010802020134号 京网文[2014]0059-0009号 
违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试
        
        <div id="social_icons">
        Collect from <a href="#" title="网页模板" target="_blank"></a>
        </div>
        
    </div>
    
    <!-- Fourth Column -->
    
    <div class="one-fourth last">
        <h3>社交软件</h3>
            <img src="http://localhost:3000/Application/Home/Public/img/icon_fb.png" alt="Facebook">
            <img src="http://localhost:3000/Application/Home/Public/img/icon_twitter.png" alt="Facebook">
            <img src="http://localhost:3000/Application/Home/Public/img/icon_in.png" alt="Facebook">
    </div>

    <div style="clear:both"></div>
    
    </div>
</body>
</html>