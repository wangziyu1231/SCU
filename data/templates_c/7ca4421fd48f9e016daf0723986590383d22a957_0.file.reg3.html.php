<?php
/* Smarty version 3.1.30, created on 2016-11-25 13:43:22
  from "F:\www\SCU\tpls\main\reg3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58383ffa761ae8_73600506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ca4421fd48f9e016daf0723986590383d22a957' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\main\\reg3.html',
      1 => 1480081311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_58383ffa761ae8_73600506 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>注册界面</title>
	<link rel="stylesheet" type="text/css" href="./img/css/main/reg1.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/login.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/reg3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/login.js"><?php echo '</script'; ?>
>

</head>
<body onload="Start()">

	<header>
    	<div class="top">
    		<img src="./img/images/head1.png">
            <div class="loRe">
        		<span class="lr" onclick="login()">登录</span>
        		<span>|</span>
        		<a href="main.php?controller=reg&method=one"><span class="lr" >注册</span></a>
            </div>
        </div>
        <nav>
        	<div class="nav">
           		<ul>
          	        <li class="present"><a href="main.php">首页</a></li>
                    <span>|</span>
               		<li><a href="#">关于社联</a></li>
                    <span>|</span>
              		<li><a href="./main.php?controller=index&method=information">社团信息</a></li>
                    <span>|</span>
               		<li><a href="#">联系我们</a></li>
                    <span>|</span>
            	</ul>
        	</div>
        </nav>
    </header>
    <article>
		<div id="null"></div>
		<div id="img">
				<img src="./img/images/3.png" alt="1" class="img-position">
		</div>
		<div id="null1"></div>
	
	<div margin="0 auto" width="700">
	<canvas id="myCanvas" width="1300" height="700">您的浏览器不支持canvas！</canvas><br/>
	</div>
	</article>
	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
