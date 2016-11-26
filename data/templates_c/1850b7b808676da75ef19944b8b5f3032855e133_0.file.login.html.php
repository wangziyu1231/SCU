<?php
/* Smarty version 3.1.30, created on 2016-11-25 13:10:53
  from "F:\www\SCU\tpls\main\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5838385d602b66_45613228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1850b7b808676da75ef19944b8b5f3032855e133' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\main\\login.html',
      1 => 1479732243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5838385d602b66_45613228 (Smarty_Internal_Template $_smarty_tpl) {
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
