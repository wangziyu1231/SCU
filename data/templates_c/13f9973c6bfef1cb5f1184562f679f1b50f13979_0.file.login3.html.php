<?php
/* Smarty version 3.1.30, created on 2016-11-23 12:58:33
  from "F:\xampp\htdocs\SCU\tpls\login3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58358469eb6702_71041321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13f9973c6bfef1cb5f1184562f679f1b50f13979' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\login3.html',
      1 => 1479902280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loginn.html' => 1,
  ),
),false)) {
function content_58358469eb6702_71041321 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>注册界面</title>
	<link rel="stylesheet" type="text/css" href="./img/css/login.css">
	<link rel="stylesheet" type="text/css" href="./img/css/loginn.css">
	<link rel="stylesheet" type="text/css" href="./img/css/headAndNav.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/login3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/loginn.js"><?php echo '</script'; ?>
>

</head>
<body onload="Start()">
<?php $_smarty_tpl->_subTemplateRender("file:loginn.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
	
</body>
</html><?php }
}
