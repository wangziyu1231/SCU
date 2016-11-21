<?php
/* Smarty version 3.1.30, created on 2016-11-20 07:50:23
  from "F:\www\SCU\tpls\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583155bfd3aa29_62333139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dcb8f9f4184f986623d64274ceba78a7ced2933' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\test.html',
      1 => 1479562129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583155bfd3aa29_62333139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>校社联管理人员登陆</title>
	</head>
	
	<body>
		<form action="./main.php?controller=sManage&method=login" method="POST">
			用户名：<input type="text" placeholder="用户名" name="username"/><br/>
			密码：&nbsp;<input type="password" placeholder="密码" name="password"/><br/>
			<input type="submit" value="登录"/>
		</form>
	</body>
</html><?php }
}
