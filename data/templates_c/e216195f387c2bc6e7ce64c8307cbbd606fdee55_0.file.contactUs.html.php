<?php
/* Smarty version 3.1.30, created on 2017-08-17 10:06:18
  from "F:\xampp\htdocs\SCU\tpls\main\contactUs.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59954e7a487d22_24122661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e216195f387c2bc6e7ce64c8307cbbd606fdee55' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\contactUs.html',
      1 => 1502456248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59954e7a487d22_24122661 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>联系我们</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/contactUs.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/login.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/contactUs.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/login.js"><?php echo '</script'; ?>
>
</head>
<body>
		<header>
        <div class="top">
            <img src="./img/images/head1.png">
            <div class="loRe">
               	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value)===null||$tmp==='' ? "<span class='lr' onclick='login()'>登录</span>" : $tmp);?>

        		<span>|</span>
				<?php echo (($tmp = @$_smarty_tpl->tpl_vars['reg']->value)===null||$tmp==='' ? "<a href='main.php?controller=reg&method=one'><span class='lr'>注册</span></ a>" : $tmp);?>

            </div>
        </div>
        <nav>
            <div class="nav">
                <ul>
                    <li><a href="main.php">首页</a></li>
                    
                    <li><a href="main.php?controller=index&method=showAboutUs">关于社联</a></li>
                   
                    <li><a href="main.php?controller=index&method=information">社团信息</a></li>
                   
                    <li class="present"><a href="main.php?controller=index&method=contactUs">联系我们</a></li>
                    
                </ul>
            </div>
        </nav>
    </header>
    <article>
    	<div class="content">
    		<div class="content_us">
    			<div class="content_us_pbl"><span>问题反馈</span></div>
    			<div class="content_us_hr"><hr></div>
    			<div class="content_us_deprt">
    				<p>对你给予的建议和支持，深表感谢！</p>
    				<input type="text" id="phdIe" name="" placeholder="问题描述" onfocus="if(placeholder=='问题描述'){placeholder=''}" onblur="if(placeholder==''){placeholder='问题描述'}">
    			</div>
    			<div class="content_us_txt">
    			<textarea id="txtPhdIe" placeholder="这里描述你所遇到的问题..." placeholder="这里描述你所遇到的问题..." onfocus="if(placeholder=='这里描述你所遇到的问题...'){placeholder=''}" onblur="if(placeholder==''){placeholder='这里描述你所遇到的问题...'}"></textarea></div>
    			<div class="content_us_ident"><span>请输入验证码：</span><input type="text" name=""><img src="main.php?controller=index&method=getCheckedImage_contactUs" id="checkedd"onclick="getCheckedImage_contactUs()"></div>
    			<input type="submit" class="content_us_sbt" name="" value="提交">
    		</div>
    	</div>
    </article>
	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
