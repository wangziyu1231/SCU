<?php
/* Smarty version 3.1.30, created on 2016-11-25 13:28:41
  from "F:\www\SCU\tpls\main\reg1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58383c897e7933_26959319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd586e05d15b08fd28155da9f14f74edfb43fede7' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\main\\reg1.html',
      1 => 1480080464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_58383c897e7933_26959319 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>注册界面</title>
	<link rel="stylesheet" type="text/css" href="./img/css/reg1.css">
		<link rel="stylesheet" type="text/css" href="./img/css/login.css">
	<link rel="stylesheet" type="text/css" href="./img/css/reg11.css">
	<link rel="stylesheet" type="text/css" href="./img/css/headAndNav.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/reg1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/login.js"><?php echo '</script'; ?>
>
</head>
<body>
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
	<div id="null">
		
	</div>
		<div id="img">
			<img src="./img/images/1.png" alt="1" class="img-position">
		</div>
		<div id="null1">
			
		</div>

		<div id="form-content">
			<form action="main.php?controller=reg&method=two" method="post" name="form" onsubmit="return confirm()">
				<ul>
					<li>
						<label>&nbsp用户名&nbsp</label>
						<input type="text" name="username" placeholder="请输入学号"  />
						<span class="state1"></span><br /><br />
					</li>
					<li>
						<label>&nbsp&nbsp密码&nbsp</label>
						<input type="password" name="pwd" placeholder="请输入密码"   />
						<span class="state1"></span><br /><br />
					</li>
					<li>
						<label>确认密码&nbsp</label>
						<input type="password" name="pwd2" placeholder="请输入以上密码"   />
						<span class="state1"></span><br /><br />
					</li>
					<li>
						<label>&nbsp&nbsp邮箱&nbsp</label>
						<input type="text" name="email" placeholder="请输入您的邮箱" />
						<span class="state1"></span><br /><br />
					</li>
				</ul>
				<input type="submit" class = "submitBtn" value="下一步">
			</form>
		</div>
	</article>
	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
