<?php
/* Smarty version 3.1.30, created on 2016-11-21 13:29:25
  from "F:\www\SCU\tpls\login2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5832f6b55f2bf9_96798895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '830da348982034e1879d166577e20860c67740a8' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\login2.html',
      1 => 1479734944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loginn.html' => 1,
  ),
),false)) {
function content_5832f6b55f2bf9_96798895 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>注册界面</title>
	<link rel="stylesheet" type="text/css" href="./img/css/login.css">
	<link rel="stylesheet" type="text/css" href="./img/css/loginn.css">
	<link rel="stylesheet" type="text/css" href="./img/css/login2.css">
	<link rel="stylesheet" type="text/css" href="./img/css/headAndNav.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/login2.js"><?php echo '</script'; ?>
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
        		<span class="lr">注册</span>
            </div>
        </div>
        <nav>
        	<div class="nav">
           		<ul>
          	        <li class="present"><a href="./main.php">首页</a></li>
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
	<div id="null">
		
	</div>
		<div id="img">
			<img src="./img/images/2.png" alt="1" class="img-position">
		</div>
		<div id="null1"></div>
		<div id="form-content">
			<form action="main.php?controller=reg&method=three" method="post" onsubmit="return confirm2()">
			<div class="content-div1">
				<div class="ipt"><label><span class="tit">姓名&nbsp</span>
				<input type="text" name="realname" class="text" placeholder="请输入你的真实姓名" /><span class="state1"></span></label></div>
				<div class="ipt"><label><span class="tit">系别&nbsp</span>
				<input type="text" name="dept" class="text" placeholder="请输入你的系别全称" /><span class="state1"></span></label></div>
				<div class="ipt"><label><span class="tit">专业&nbsp</span>
				<input type="text" name="major" class="text" placeholder="请输入专业编号" /><span class="state1"></span></label></div>
			</div>
			<div class="content-div2">
				<div class="ipt"><label><span class="tit">性别&nbsp</span>
				<input type="text" name="sex" class="text" placeholder="请选择你的性别" /><span class="state1"></span></label></div>
				<div class="ipt"><label><span class="tit">手机&nbsp</span>
				<input type="text" name="tel" class="text" placeholder="请输入你的手机号" /><span class="state1"></span></label></div>
				<div class="ipt"><label><span class="tit">微信&nbsp</span>
				<input type="text" name="chat" class="text" placeholder="请输入你的微信号" /><span class="state1"></span></label></div>
			</div>
				<div><input type="submit" class="submitBtn btn"  value="下一步"/></div>
			</form>
		</div>
	</article>
	<?php $_smarty_tpl->_subTemplateRender("file:loginn.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
