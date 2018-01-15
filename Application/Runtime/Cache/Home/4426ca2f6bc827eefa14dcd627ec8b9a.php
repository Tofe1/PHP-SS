<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <title>用户注册</title>
    <link href="http://localhost:3000/Application/Home/Public/css/style.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="http://localhost:3000/Application/Home/Public/css/register.css">  
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/register.js"></script>  
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
            <?php echo (session('name')); ?>&nbsp;
            <a href="/index.php/Home/Lr/login"> 登录</a>
            <a href="/index.php/Home/Lr/register">注册</a>
        </font>
    </div>
    <div style="float: right;">
        <a href="/index.php/Home/Cart/cat/name/<?php echo (session('name')); ?>">查看购物车</a>
        |
        <a href="/index.php/Home/Lr/logout">退出登录</a>


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
              <ol>  
                <li><a href="nivo.html">Nivo Slider</a></li>
                <li><a href="ei_slider.html">EI Slider</a></li>
                <li><a href="fullscreen_gallery.html">Fullscreen Slider</a></li>
                <li><a href="image_frontpage.html">Static Image</a></li>
              </ol>
              </li><!-- end sub menu -->
        
        <li class="<?php echo get_menu_active_style("mobilephone");?>"><a href="/index.php/Home/Mobilephone/index">Mobilephone</a>
        
              <!-- sub menu -->
              <ol>     
                <li><a href="magazine.html">Magazine</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="full-width.html">Full Width Page</a></li>
                <li><a href="columns.html">Columns</a></li>
              </ol>
        </li><!-- end sub menu -->
        
        <li class="<?php echo get_menu_active_style("flatpc");?>"><a href="/index.php/Home/Flatpc/index">Flatpc</a></li>
              
        <li class="<?php echo get_menu_active_style("service");?>"><a href="/index.php/Home/Service/index">Service</a>
        
              <!-- sub menu -->
              <ol>     
                <li><a href="gallery-simple.html">Simple</a></li>
                <li><a href="portfolio.html">Filterable</a></li>
                <li><a href="gallery_fader.html">Fade Scroll</a></li>
                <li><a href="video.html">Video</a></li>
                <li class="last"><a href="photogrid.html">PhotoGrid</a></li>
              </ol>
        </li><!-- end sub menu -->
        
               <li class="<?php echo get_menu_active_style("contact");?>"><a href="/index.php/Home/contact/index">Contact</a></li>
    </ol>
     
       </div> 
       
     <!-- END header -->
     <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>

    <div id="container">



<form action="" method="post" onsubmit="return validateForm()"> <!-- 当触发提交事件时调用validateForm()方法  -->
    <table border="26" align="center" width="50%">
        <div align="center"><h1>用户注册</h1></div>
        <tr>
            <th align="right">
                <sup><font color="red">*</font></sup>用户名：
            </th>
            <th><input type="text" name="user_name" id="username" class="input_class" onblur="checkUsername(this)" /><span id="username_span">用户名由3-5个字符组成</span></th>					
        </tr>
        
        <tr>
            <th align="right">
                <sup><font color="red">*</font></sup>密码：
            </th>
            <th><input type="password" name="user_password" id="password" class="input_class" onblur="checkPassword(this)" /><span id="password_span">请输入8-12位密码</span></th>					
        </tr>
        
        <tr>
            <th align="right">
                <sup><font color="red">*</font></sup>确认密码：
            </th>
            <th><input type="password" name="user_password2" id="rePassword" class="input_class" onblur="checkRePassword(this)" /><span id="rePassword_span">两次密码不一致</span></th>					
        </tr>
        
        <tr>
            <th align="right">
                <sup><font color="red">*</font></sup>Email：
            </th>
            <th><input type="text" name="user_email" id="Email" class="input_class" onblur="checkEmail(this)" /><span id="Email_span" >格式示例：xxxxxxxx@163.com</span></th>					
        </tr>
        
        <tr>
            <th align="center">
                <sup><font color="red">*</font></sup>真实姓名：
            </th>
            <th><input type="text" name="user_relname" id="realName" class="input_class" onblur="checkName(this)" /><span id="realName_span">由2-5个中文组成</span></th>					
        </tr>
        
        <tr>
            
                    <th width=48%><input type="submit"  class="btn btn-primary"  value="注册" /></th>
                    <th><input type="reset" class="btn btn-primary"  value="重置" /></th>
            
        </tr>
    </table>
</form>

<div id="footer">

    <!-- First Column -->

    <div class="one-fourth">
        <h3>Useful Links</h3>
            <ul class="footer_links">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Ellem Ciet</a></li>
                <li><a href="#">Currivitas</a></li>
                <li><a href="#">Salim Aritu</a></li>
            </ul>
    </div>
    
    <!-- Second Column -->
    
    <div class="one-fourth">
        <h3>Terms</h3>
            <ul class="footer_links">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Ellem Ciet</a></li>
                <li><a href="#">Currivitas</a></li>
                <li><a href="#">Salim Aritu</a></li>
            </ul>
    </div>
    
    <!-- Third Column -->
    
    <div class="one-fourth">
        <h3>Information</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.
        
        <div id="social_icons">
        Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
        </div>
        
    </div>
    
    <!-- Fourth Column -->
    
    <div class="one-fourth last">
        <h3>Socialize</h3>
            <img src="http://localhost:3000/Application/Home/Public/img/icon_fb.png" alt="Facebook">
            <img src="http://localhost:3000/Application/Home/Public/img/icon_twitter.png" alt="Facebook">
            <img src="http://localhost:3000/Application/Home/Public/img/icon_in.png" alt="Facebook">
    </div>

    <div style="clear:both"></div>
    
    </div>
</body>
</html>