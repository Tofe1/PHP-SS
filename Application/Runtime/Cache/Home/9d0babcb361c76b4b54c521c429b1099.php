<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>

<head>

    <title>Bigshot Theme by CssTemplateHeaven</title>
    <meta name="keywords" content="create from keywords">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- CSS Files -->
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/menu/css/simple_menu.css">


<!--JS FILES -->

	
    
    <link rel="stylesheet" href="http://localhost:3000/Application/Home/Public/css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="http://localhost:3000/Application/Home/Public/css/nivo-slider.css" type="text/css" media="screen"/>
    <!-- <link href="http://localhost:3000/Application/Home/Public/css/style.css" rel="stylesheet" type="text/css" /> -->
<!-- JS Files -->

	<script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/jquery.min.js"></script>
    
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/custom.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/slides/slides.min.jquery.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/cycle-slider/cycle.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/tabify/jquery.tabify.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/prettyPhoto/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/twitter/jquery.tweet.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/scrolltop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/portfolio/filterable.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/modernizr/modernizr-2.0.3.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/easing/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/swfobject/swfobject.js"></script>
    <!-- FancyBox -->
    <link rel="stylesheet" type="text/css" href="http://localhost:3000/Application/Home/Public/js/fancybox/jquery.fancybox.css" media="all">
    <script type="text/javascript" src="http://localhost:3000/Application/Home/Public/js/fancybox/jquery.fancybox-1.2.1.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=kH8o10OVrwhGbowagayxEREh"></script>
            
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




    <h1>我们的信息</h1>
    
    <div class="one-half">

        <div class="heading_bg"><h2>Contact</h2></div>
            <p><strong>Tel:  123456789</strong><br />
            <p><strong>Email:  123456789@qq.com</strong><br />
          <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1260542225&site=qq&menu=yes"><img border="0" src="http://localhost:3000/Application/Home/Public/img/qq.png" /></a>
          </p>
          
        
    
    </div>
    
    <div class="one-half last">
   
        <form action=""  method="post">
    
        <fieldset>
            <input type="hidden" name="user_name" id="Myname" value="<?php echo (session('name')); ?>" class="text requiredField"/>
            <label>Name <span class="required">*</span></label>
            <input type="" name="name" id="Myname" value="" class="text requiredField"/>
        </fieldset>
        
        <fieldset>
            <label>Email <span class="required">*</span></label>
            <input type="" name="email" id="myemail" value="" class="text requiredField email"/>
        </fieldset>
        <fieldset>
            <label>Subject <span class="required">*</span></label>
            <input type="" name="subject" id="mySubject" value="" class="text requiredField subject"/>
        
        </fieldset>
        <fieldset>
            <label>Your Message <span class="required">*</span></label>
            <textarea name="messages" id="Mymessage" rows="20" cols="30" class="text requiredField"></textarea>
        </fieldset>
        <fieldset>
            <input  value="Send Message" class="button white" type="submit"/>
        
        </fieldset>
        
    </form>
    <!--END form ID contact_form -->
    
    </div>
    <h2>我们的地址</h2>
    <div class="map">
        <div id="allmap" style="width: 100%; height: 275px;"></div>
    </div>
<script type="text/javascript">   
// 百度地图API功能
var map = new BMap.Map("allmap");
var point = new BMap.Point(113.315097,22.91161);
var marker = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker);              // 将标注添加到地图中
map.centerAndZoom(point, 15);
map.enableScrollWheelZoom(true);
var opts = {
    width : 200,     // 信息窗口宽度
    height: 100,     // 信息窗口高度
    title : "广州番禺职业技术学院信息工程学院" , // 信息窗口标题
    enableMessage:true,//设置允许信息窗发送短息
    message:"广州番禺职业技术学院欢迎您！"
}
var infoWindow = new BMap.InfoWindow("地址：广州市番禺区市良路1342号", opts);  // 创建信息窗口对象
marker.addEventListener("click", function(){
    map.openInfoWindow(infoWindow,point); //开启信息窗口
});
</script>
    <div style="clear:both; height: 40px"></div>

    </div><!-- close container -->


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