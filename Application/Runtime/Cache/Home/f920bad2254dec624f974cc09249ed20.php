<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="SMS EMS MMS 短消息群发 语音 阅读器 SMS,EMS,MMS,短消息群发语音合成信息阅读器 黑色 白色 滑盖" />
        <meta name="Description" content="" />
        
        <title>商品详情</title>
            <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/menu/css/simple_menu.css">


<!--JS FILES -->

	
        <script src="http://localhost:3000/Application/Home/Public/js/jquery.tools.min.js" type="text/javascript"></script>
        <link href="http://localhost:3000/Application/Home/Public/css/style.css" rel="stylesheet" type="text/css" />
        
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


 
        

        
        <div class="blank5"></div>
        <div class="header_bg_b">
            
            <div class="f_r" style="padding-right: 10px;">
               
                    <span class="cart" id="ECS_CARTINFO">
                        
                    

            </div>
        </div>
        
        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code>  <a href="#"><?php echo ($goodsr["goods_category"]); ?></a> <code>&gt;</code> <?php echo ($goodsr["goods_name"]); ?>
            </div>
        </div>
        <div class="blank"></div>




        <div class="block clearfix">
            <div class="AreaL">
                <h3><span>商品分类</span></h3> 
                
                <div class="blank"></div>

                <!-- <div style="display: block;" class="box" id="history_div">
                    <h3><span>浏览历史</span></h3>
                    <div class="box_1">
                        <div class="boxCenterList clearfix" id="history_list">
                            <ul class="clearfix"><li class="goodsimg"><a href="#" target="_blank"><img src="./images/8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="B_blue"></a></li><li><a href="#" target="_blank" title="飞利浦9@9v">飞利浦9@9v</a><br />本店售价：<font class="f1">￥399元</font><br /></li></ul><ul class="clearfix"><li class="goodsimg"><a href="#" target="_blank"><img src="./images/9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="B_blue"></a></li><li><a href="#" target="_blank" title="诺基亚E66">诺基亚E66</a><br />本店售价：<font class="f1">￥2298元</font><br /></li></ul><ul class="clearfix"><li class="goodsimg"><a href="#" target="_blank"><img src="./images/17_thumb_G_1241969394587.jpg" alt="夏新N7" class="B_blue"></a></li><li><a href="#" target="_blank" title="夏新N7">夏新N7</a><br />本店售价：<font class="f1">￥2300元</font><br /></li></ul><ul id="clear_history"><a onclick="clear_history()">[清空]</a></ul>  </div>
                    </div>
                </div> -->
                <div class="blank5"></div>
            </div>

            <div class="AreaR">
                    
                <div id="goodsInfo" class="clearfix">
                    <div class="imgInfo">
                        <form action="" method="post" id="myform" name="myform" >
                            <input type="hidden" name='user_name' value="<?php echo (session('name')); ?>">   
                            <input type="hidden" name='goods_id' value="<?php echo ($goodsr["goods_id"]); ?>">
                            <input type="hidden" name='goods_price' value="<?php echo ($goodsr["goods_price"]); ?>">
                            <input type="hidden" name='goods_name' value="<?php echo ($goodsr["goods_name"]); ?>">
                            <input type="hidden" name='goods_small_img' value="<?php echo ($goodsr["goods_small_img"]); ?>">
                        <p style="position: relative; display: block; outline: 0pt none; text-decoration: none; width: 310px; -moz-user-select: none;" href="./images/200905/goods_img/9_P_1241511871575.jpg" id="zoom1" class="MagicZoom MagicThumb" title="诺基亚E66">
                            <img id="sim806035" src="/Public/Uploads/<?php echo ($goodsr["goods_big_img"]); ?>" alt="诺基亚E66" height="310px" width="310px;" />
                            <p>价格：￥<?php echo ($goodsr["goods_price"]); ?></p>
                            <P> 购买数量：
                                <input type="number" min="1" step="0" name='goods_number' value="">
                            </P>  
                            <input class="btn btn-primary btn6 mr10" value="加入购物车" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            <div class="MagicZoomBigImageCont" style="width: 200px; height: 269px; overflow: hidden; z-index: 100; visibility: visible; position: absolute; top: -10000px; left: 327px; display: block;" id="bc806035">
                                <div style="position: relative; z-index: 10; left: 0px; top: 0px; padding: 3px;" id="MagicZoomHeaderbc806035" class="MagicZoomHeader">诺基亚E66
                                </div>
                                <div style="overflow: hidden;">
                                    <img style="position: relative; border-width: 0px; padding: 0px; left: 0px; top: 0px; display: block; visibility: visible;" src="./images/9_P_1241511871575.jpg" />
                                </div>
                                <div style="color:red; font-size: 10px; font-weight: bold; font-family: Tahoma; position: absolute; width: 100%; text-align: center; left: 0px; top: 249px;">
                                </div>
                            </div>
                            <div style="z-index: 10; visibility: hidden; position: absolute; opacity: 0.5; width: 98px; height: 98px; left: 31px; top: 1px;" class="MagicZoomPup">
                            </div>
                        </p>
                        
                        <div class="blank5">
                        </div>
                    </div>
                </form> 
                   
                         <div class="textInfo">
                    </div>
                </div>
          
                <div class="blank"></div>
                <div class="box">
                    <div class="box_1">
                        <h3 style="padding: 0pt 5px;">
                            
                        </h3>
                        <div id="com_v" class="boxCenterList RelaArticle">
                            <p><?php echo ($goodsr["goods_introduce"]); ?></p>
                            <p>&nbsp;</p>
                            
                            <p>&nbsp;</p>       
                        </div>
                        
                    </div>
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