<?php
/* Smarty version 3.1.30, created on 2017-08-11 15:03:00
  from "F:\xampp\htdocs\newSCU\SCU\tpls\main\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598dab047ca202_53159172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fcd5f69e3e502e352a539a8f25abc3f3b16ed80' => 
    array (
      0 => 'F:\\xampp\\htdocs\\newSCU\\SCU\\tpls\\main\\login.html',
      1 => 1502456248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598dab047ca202_53159172 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="back_mark"></div>

<div class="layout">
    <span class="close">x</span>
    <div class="login_div">
            <span class="login">账号登录</span>
            <span class="tips"></span>

            <div class="userDiv">
        	   <input  placeholder="请输入你的学号" class="user" name="username" id="username"/><br />
            </div>

            <div class="psdDiv">
        	<input type="password" placeholder="请输入你的密码" class="psd" name="password" id="password"/><br />
            </div>

            <div class="check_id">
            	<input type="text" placeholder="验证码" class="check_text" id="check_text" name="check_text">
            	<img id="checkedImage" src="main.php?controller=login&method=getCheckedImage" onclick="getCheckedImage()"/> 
            </div>

        	<div class="rem_psd">
                <input type="checkbox"  id="auto_login" name="auto_login"/>自动登录
                <a>忘记密码?</a>
            </div>

        	<input type="submit" value="登录" class="login_btn" onclick="check_str()"/><br />
    </div>
</div>

<?php }
}
