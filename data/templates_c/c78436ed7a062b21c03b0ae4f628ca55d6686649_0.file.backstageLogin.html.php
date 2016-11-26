<?php
/* Smarty version 3.1.30, created on 2016-11-25 13:58:14
  from "F:\www\SCU\tpls\admin\backstageLogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583843769aabd7_05863372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c78436ed7a062b21c03b0ae4f628ca55d6686649' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\backstageLogin.html',
      1 => 1480082063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583843769aabd7_05863372 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>校社联后台登录界面</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./img/css/admin/backstageLogin.css">
</head>
<body>
		<header>
			<img src="./img/images/backstage.png">
		</header>
		<article>
			<div class="background">
				<div class="leftImg">
					<img src="./img/images/SCULoginPic.png">
				</div>
				<div class="rightLogin">
					<div class="SCUTitle">
						<img  class="circleArrowsLeft" src="./img/images/circleArrowsLeft.png"><span class="sTitle">成员管理系统</span><img  class="circleArrowsRight" src="./img/images/circleArrowsRight.png">
					</div>
					<form method="post" onSubmit="return check_str()" action="admin.php?controller=backstageLogin&method=login">
					<div class="formIpt">
						<div class="imgUser"><input type="text" class="user" name="username" id="username"/></div>
    					<div class="imgPwd"><input type="password" class="psd" name="password" id="password"/></div>
						<span class="tips"></span>
					</div>

					<div class="loginBtn"><input type="submit" value="登录" class="login_btn" /><br /></div>
				</div>
				</form>
			</div>
		</article>
</body>
</html><?php }
}
