<?php
/* Smarty version 3.1.30, created on 2016-11-25 12:59:44
  from "F:\www\SCU\tpls\orgMessage1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583835c00de2c2_93697650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6d3d7cd45d28d20b097a35fcad5024f671a0188' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\orgMessage1.html',
      1 => 1480078772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loginn.html' => 1,
  ),
),false)) {
function content_583835c00de2c2_93697650 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/orgMessage.css">
<link rel="stylesheet" type="text/css" href="./img/css/orgMessage1.css">
<link rel="stylesheet" type="text/css" href="./img/css/loginn.css">
<?php echo '<script'; ?>
 src="./img/js/orgMessage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/loginn.js"><?php echo '</script'; ?>
>
</head>
<body>
	<header>
    	<div class="top">
    		<img src="./img/images/head.jpg">
            <div class="loRe">
        		<span class="lr" onclick="login()">登录</span>
        		<span>|</span>
        		<a href="main.php?controller=reg&method=one"><span class="lr" >注册</span></a>
            </div>
        </div>
        <nav>
        	<div class="nav">
           		<ul>
          	        <li><a href="./main.php">首页</a></li>
                    <span>|</span>
               		<li><a href="#">关于社联</a></li>
                    <span>|</span>
              		<li class="present"><a href="./main.php?controller=index&method=information">社团信息</a></li>
                    <span>|</span>
               		<li><a href="#">联系我们</a></li>
                    <span>|</span>
            	</ul>
        	</div>
        </nav>
    </header>
	<div class="wrapped">
    	<div class="content">
    		<div class="name">
            	<div class="name_left">
            		<span class="org">出雲音乐协会</span><br>
                    <a onclick="attention()">
                    	<img src="./img/images/atten.png" id="attention_img">
                    	<span id="attention_span">关注</span>
                    </a>
                </div>
                <input type="button" value="加入社团">
        	</div>
            <div style="clear:both;"></div>
        	<div class="main">
            	<div class="main_left">
                <p>
                广东金融学院音乐协会诞生于1992年，致力于打造广金音乐文化传播第一平台，成为卓越的大学获得策划者和出色的舞台执行团队，至今已经走过了22个春秋，本社团于2014年3月21日正式更名为“出雲音乐协会”我们对“出雲”的理解是希望这个组织能够出色，出众，出人头地。</p>
                </div>
                <img src="img/images/music.png" class="main_right">
        	</div>
    	</div>
	    <div class="pre_nav">
        	<img src="img/images/logo.png"/>
            <ul>
                <li><hr>
                	<a class="nav" href="main.php?controller=index&method=show1"><span>社团简介</span></a>
                </li>
                <li>
                	<a class="nav" href="main.php?controller=index&method=show2"><span>社团活动</span></a>
                </li>
                <li>
                	<a class="nav" href="main.php?controller=index&method=show3"><span>社团评论</span></a>
                </li>                
            </ul>
               <!-- <div class="popup">
        			<span><em></em></span>
    			</div>-->
    	</div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:loginn.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
