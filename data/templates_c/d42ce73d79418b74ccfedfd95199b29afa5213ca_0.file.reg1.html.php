<?php
/* Smarty version 3.1.30, created on 2017-09-15 05:17:12
  from "F:\xampp\htdocs\SCU\tpls\main\reg1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bb4638708417_05298245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd42ce73d79418b74ccfedfd95199b29afa5213ca' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\reg1.html',
      1 => 1505445334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59bb4638708417_05298245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>注册界面</title>
	<link rel="stylesheet" type="text/css" href="./img/css/main/reg1.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/login.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/reg11.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/reg1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
	<article>
		<div id="img">
			<img src="./img/images/1.png" alt="1" class="img-position">
		</div>
		<div id="form-content">
			<form action="main.php?controller=reg&method=two" method="post" name="form" onsubmit="return confirm()">

				<ul>
					<li>
						<label>&nbsp用户名&nbsp</label>
						<div class="inputDiv">
							<input type="text" name="username" placeholder="请输入学号"  />
						</div>
						<span class="state1"></span><br /><br />
					</li>
					<li>
						<label>&nbsp&nbsp密码&nbsp</label>
						<div class="inputDiv">
							<input type="password" name="pwd" placeholder="请输入密码"   />
						</div>
						<span class="state1"></span><br /><br />
					</li>
					<li>
						<label>确认密码&nbsp</label>
						<div class="inputDiv">
							<input type="password" name="pwd2" placeholder="请输入以上密码"   />
						</div>
						<span class="state1"></span><br /><br />
					</li>
					<li>
						<label>&nbsp&nbsp邮箱&nbsp</label>
						<div class="inputDiv">
							<input type="text" name="email" placeholder="请输入您的邮箱" />
						</div>
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
