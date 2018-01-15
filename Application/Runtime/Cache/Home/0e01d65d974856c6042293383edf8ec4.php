<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <title>购物车</title>
            <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:3000/Application/Home/Public/menu/css/simple_menu.css">


<!--JS FILES -->

	
        <script src="http://localhost:3000/Application/Home/Public/js/jquery.tools.min.js" type="text/javascript"></script>
        
        <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <!-- <script>
            $(document).ready(function(){
                $('.bb').change(function() {
                    
                var ra = "#bb"+Math.random();
                var price = "#price"+Math.random();
                $('.bb').attr('id',ra);
                $('.price').attr('id',price);
                var aa = $(ra).val();
                var price = $(price).html();




                $('.bb').change(function() {
                var aa = $('.bb').val();
                var price = $('.price').html();
                    $.ajax({
                        type : 'post',
                        url : "<?php echo U('Home/Cart/aa');?>",   
                        data : {
                            "goods_number" : aa,
                            "goods_price" : price
                        },
                        success : function (response) {
                            alert(response.data);
                        },
                        error : function (response) {
                            alert(JSON.stringify());
                        }
                    });
                });
            });
        </script> -->
        <link href="http://localhost:3000/Application/Home/Public/css/style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            table {border:1px solid #dddddd; border-collapse: collapse; width:99%; margin:auto;}
            td {border:1px solid #dddddd;}
            #consignee_addr {width:450px;}
        </style>
    </head>
    <body>
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



        <div class="header_bg">

            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <!-- <form id="searchForm" method="get" action="#">
                <input name="keywords" id="keyword" type="text" />
                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('./images/sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />

            </form> -->
        </div>
        <div class="blank5"></div>

        <div class="header_bg_b">
        </div>

        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 购物流程 
            </div>
        </div>
        <div class="blank"></div>

        <div class="blank"></div>
        <div class="block">
            <div class="flowBox">
                <h6><span>商品列表</span></h6>
                <form id="formCart">
                    <table cellpadding="5" cellspacing="1">
                            
                        <tbody><tr>
                                <th>商品名称</th>
                                <th>商品id</th>
                                <th>单价</th>
                                <th>购买数量</th>
                                <th></th>
                                <th>小计</th>
                                <th>操作</th>
                            </tr>
                            <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>>
                                <tr>
                                <td align="center">
                                    <a href="#" target="_blank"><img style="width: 80px; height: 80px;" src="/Public/Uploads/<?php echo ($vo["goods_small_img"]); ?>" title="P806" /></a><br />
                                    <a href="#" target="_blank" class="f6"><?php echo ($vo["goods_name"]); ?></a>
                                </td>
                                <!-- <input type='hidden' name='user_id' value="<?php echo ($vo["goods_price"]); ?>"/> -->
                                <td><?php echo ($vo["goods_id"]); ?> <br />
                                </td>
                                <td align="right" class="price"><?php echo ($vo["goods_price"]); ?></td>
                                <td align="right" ><input class="bb" type="number" value="<?php echo ($vo["goods_number"]); ?>"/></td>
                                <td align="right"><?php echo zong($vo[goods_price],$vo[goods_number]);?></td>
                                <td align="right" class="aa"><?php echo ($vo[goods_price]*$vo[goods_number]); ?></td>
                                
                                <td align="center">
                                    <a class="link-del" onclick="return confirm('确定删除？')" href="/index.php/Home/Cart/del/id/<?php echo ($vo["user_id"]); ?>/name/<?php echo (session('name')); ?>">删除</a>
                                    <a class="link-del" onclick="return confirm('确定提交？')" href="/index.php/Home/Cart/payh/id/<?php echo ($vo["user_id"]); ?>/name/<?php echo (session('name')); ?>">提交订单</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    
                    </table>
                    <table cellpadding="5" cellspacing="1"> 
                        <tbody><tr>               
                                <td>
                                        <p title="查看购物车">您的购物车中有<?php echo ($count); ?>件商品，总计金额<?php echo ($zong); ?>元。</p>            </td>
                                <td align="right">
                                        <a class="link-del" onclick="return confirm('确定删除所有？')" href="/index.php/Home/Cart/delall/name/<?php echo (session('name')); ?>">清除购物车</a>
                                    <input name="submit" class="bnt_blue_1" value="更新购物车" type="submit" />
                                </td>
                            </tr>

                        </tbody></table>
                    <input name="step" value="update_cart" type="hidden"  />
                </form>
            </div>
            <div class="blank"></div>
            <div class="blank5"></div>
        </div>

        <div class="blank"></div>
      
    </body>
</html>