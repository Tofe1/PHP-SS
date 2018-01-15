<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
  <body>
      <table height="100%" cellspacing=0 cellpadding=0 width=170>
        <div class="sidebar-nav">
            <form class="search form-inline">
                <input type="text" placeholder="Search...">
            </form>
    
            <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li><a href="/index.php/Admin/Index/index">Home</a></li>
                <li ><a href="/index.php/Admin/Goods/lst">商品列表</a></li>
                <li ><a href="/index.php/Admin/Goods/edit">修改商品</a></li>
                <li ><a href="media.html">Media</a></li>
                <li ><a href="calendar.html">Calendar</a></li>
                
            </ul>
    
            <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Account<span class="label label-info">+3</span></a>
            <ul id="accounts-menu" class="nav nav-list collapse">
                <li ><a href="sign-in.html">Sign In</a></li>
                <li ><a href="sign-up.html">Sign Up</a></li>
                <li ><a href="reset-password.html">Reset Password</a></li>
            </ul>
    
            <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Error Pages <i class="icon-chevron-up"></i></a>
            <ul id="error-menu" class="nav nav-list collapse">
                <li ><a href="403.html">403 page</a></li>
                <li ><a href="404.html">404 page</a></li>
                <li ><a href="500.html">500 page</a></li>
                <li ><a href="503.html">503 page</a></li>
            </ul>
    
            <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>Legal</a>
            <ul id="legal-menu" class="nav nav-list collapse">
                <li ><a href="privacy-policy.html">Privacy Policy</a></li>
                <li ><a href="terms-and-conditions.html">Terms and Conditions</a></li>
            </ul>
    
            <a href="help.html" class="nav-header" ><i class="icon-question-sign"></i>Help</a>
            <a href="faq.html" class="nav-header" ><i class="icon-comment"></i>Faq</a>
        </div>
        
      </table>
      <script src="/Application/Admin/Public/js/bootstrap.js"></script>
      <script type="text/javascript">
          $("[rel=tooltip]").tooltip();
          $(function() {
              $('.demo-cancel-click').click(function(){return false;});
          });
      </script>
  </body>
  </html>