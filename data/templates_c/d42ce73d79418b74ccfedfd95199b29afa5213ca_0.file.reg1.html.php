<?php
/* Smarty version 3.1.30, created on 2017-09-26 10:01:50
  from "F:\xampp\htdocs\SCU\tpls\main\reg1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca096e2b76b5_11140255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd42ce73d79418b74ccfedfd95199b29afa5213ca' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\reg1.html',
      1 => 1506412755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59ca096e2b76b5_11140255 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>注册界面</title>
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/reg1.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/reg1.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
	<article>
		<img src="./img/images/1.png" alt="1" class="img-position">
		<div id="form-content">
			<form action="<?php echo $_smarty_tpl->tpl_vars['reg2']->value;?>
" method="post" name="form" onsubmit="return confirm()">
				<ul>
					<li>
						<label>&nbsp&nbsp用户名&nbsp<input class="inputDiv" type="text" name="username" placeholder="请输入学号"  /></label><br /><span class="state1"></span><br />
					</li>
					<li>
						<label>&nbsp&nbsp密&nbsp&nbsp码&nbsp<input class="inputDiv" type="password" name="pwd" placeholder="请输入密码"   /></label><br /><span class="state1"></span><br />
					</li>
					<li>
						<label>确认密码&nbsp<input class="inputDiv" type="password" name="pwd2" placeholder="请输入以上密码"   /></label><br /><span class="state1"></span><br />
					</li>
					<li>
						<label>&nbsp&nbsp邮&nbsp&nbsp箱&nbsp<input class="inputDiv" type="text" name="email" placeholder="请输入您的邮箱" /></label><br /><span class="state1"></span><br />
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
