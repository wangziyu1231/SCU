<?php
/* Smarty version 3.1.30, created on 2016-11-25 13:32:46
  from "F:\www\SCU\tpls\main\orgMessage3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58383d7e731750_60036760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf4cc98e7ab86c90d9a4a0cbb4469f07525552ee' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\main\\orgMessage3.html',
      1 => 1480080714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_58383d7e731750_60036760 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/orgMessage.css">
<link rel="stylesheet" type="text/css" href="./img/css/orgMessage3.css">
<link rel="stylesheet" type="text/css" href="./img/css/login.css">
<?php echo '<script'; ?>
 src="./img/js/orgMessage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/login.js"><?php echo '</script'; ?>
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
          	        <li ><a href="./main.php">首页</a></li>
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
            	<form method="post">
	            	<textarea class="comment_textarea" ></textarea>
                    <input type="submit" class="submit" value="提交">                    
                </form>
                <hr style="clear:both;">
                <div class="comment">
                    <img class="head_portrait" src="img/images/img11.jpg">
                    <div class="comment_right">
                    	<span class="my_name" name="my_name">黄鹏</span>
                    	<span class="time" name="time">2016/11/22 22:00:00</span><br>
                    	<span class="con">不错不错~</span>
                    </div>                    
                    <hr>
                </div>
                <div class="comment">
                    <img class="head_portrait" src="img/images/img10.jpg">
                    <div class="comment_right">
                    	<span class="my_name" name="my_name">胡汉三</span>
                    	<span class="time" name="time">2016/11/12 08:40:59</span><br>
                    	<span class="con">赞一个</span>
                    </div>                    
                    <hr>
                </div>
                <div class="comment">
                    <img class="head_portrait" src="img/images/img9.jpg">
                    <div class="comment_right">
                    	<span class="my_name" name="my_name">小羔羊</span>
                    	<span class="time" name="time">2016/11/02 02:20:05</span><br>
                    	<span class="con">大爱出雲！！！</span>
                    </div>                    
                    <hr>
                </div>
                <a href="#" class="comment_a"> >>查看更多评论</a>           
             </div>
    	</div>
	    <div class="pre_nav">
        	<img src="img/images/logo.png">
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
	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
