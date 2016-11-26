<?php
/* Smarty version 3.1.30, created on 2016-11-23 12:54:07
  from "F:\xampp\htdocs\SCU\tpls\loginn.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835835f3bb070_37067389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a6b27c9fb4274cbd8300ad23022d9f606852b08' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\loginn.html',
      1 => 1479732243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835835f3bb070_37067389 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="back_mark"></div>
<div class="layout">
    <div class="layout2">
		<div class="login_back"></div>
		<div class="login_div">
			<img class="login_img" src="./img/images/loginImg.png"/>
    		<img class="close" src="./img/images/close.png" />
            <form method="post" action="main.php?controller=login&method=login" onSubmit="return check_str()">
    		<input type="text" placeholder="用户名" class="user" name="username" id="username"/><br />
    		<input type="password" placeholder="密码" class="psd" name="password" id="password"/><br />
            <div class="check_id">
            	<input type="text" placeholder="验证码" class="check_text" id="check_text" name="check_text">
            	<img id="checkedImage" src="./main.php?controller=login&method=getCheckedImage" onclick="getCheckedImage()"/> 
            </div>
    		<div class="rem_psd"><input type="checkbox" value="on" name="auto_login"/>记住密码</div>
            <span class="tips"></span>
    		<input type="submit" value="登录" class="login_btn" /><br />
            </form>
		</div>
    </div>
</div>
<?php }
}
