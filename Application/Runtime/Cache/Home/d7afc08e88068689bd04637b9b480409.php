<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>

<head>

    <title>Bigshot Theme by CssTemplateHeaven</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- CSS Files -->

        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/menu/css/simple_menu.css">


<!--JS FILES -->

	
    <script src="http://localhost:3000/Application/Home/Public/js/jquery.tools.min.js" type="text/javascript"></script>
        
    <script type="text/javascript">
        $(function() {
        $("#prod_nav ul").tabs("#panes > div", {effect: 'fade', fadeOutSpeed: 400});
    });
    </script>
    <link href="http://localhost:3000/Application/Home/Public/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
            $(document).ready(function(){
            $(".pane-list li").click(function(){
            window.location=$(this).find("a").attr("href");return false;
        });
    
    }); //close doc ready
    </script>
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



  
   
    <!-- Logo/Title -->
    
   


<!-- tab panes -->

<div id="prod_wrapper">

    <div id="panes">
    <?php if(is_array($goodsname)): $i = 0; $__LIST__ = $goodsname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
    <a href="/index.php/Home/Cart/messages/id/<?php echo ($vo["goods_id"]); ?>"><img  src="/Public/Uploads/<?php echo ($vo["goods_big_img"]); ?>" height="265" width="250" alt="demo" />	</a>			
    <h5><?php echo ($vo["goods_name"]); ?></h5>
    <p><?php echo ($vo["goods_introduce"]); ?></p>
    <p></p>
    <!-- <p style="text-align:right; margin-right: 16px"><a href="#" class="button">更多信息</a> <a href="#" class="button">加入购物车</a></p>	 -->
   </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div> 

<!-- END tab panes -->


<br clear="all" />


<!-- navigator -->
<div id="prod_nav">
<ul>
<?php if(is_array($goodsname)): $i = 0; $__LIST__ = $goodsname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#1"><img src="/Public/Uploads/<?php echo ($vo["goods_small_img"]); ?>" style="margin-right:0px;" text-align:center height="120" width="120" alt="demo"/><strong><?php echo ($vo["goods_name"]); ?></strong> ￥<?php echo ($vo["goods_price"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

</div><!-- close navigator -->



</div><!-- END prod wrapper -->



    
    <div style="clear:both"></div>
    
    <h1 style="padding: 50px 0">This is our new produces</h1>
    
        <blockquote>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. 
            Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat 
            gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi 
            ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam.
    </blockquote>
    <p style="text-align:right; margin-right: 16px; margin-bottom: 15px"><a href="/index.php/Home/Service/index" class="button" style="font-size: 18px">Find out more</a></p>
    

    <!-- First Column -->
    <?php if(is_array($goodsname4)): $i = 0; $__LIST__ = $goodsname4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="one-fourth last">
      <div class="heading_bg"><h2><?php echo ($vo["goods_name"]); ?></h2></div>
      <img src="/Public/Uploads/<?php echo ($vo["goods_big_img"]); ?>" width="216" alt="demo" />	
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <div style="clear:both; height: 40px"></div>
    </div>

    <!-- END container -->

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
 <!-- END footer -->

</body>
</html>