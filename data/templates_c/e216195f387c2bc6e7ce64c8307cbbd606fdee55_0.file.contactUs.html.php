<?php
/* Smarty version 3.1.30, created on 2017-09-05 15:21:08
  from "F:\xampp\htdocs\SCU\tpls\main\contactUs.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aea4c4315d25_96026191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e216195f387c2bc6e7ce64c8307cbbd606fdee55' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\contactUs.html',
      1 => 1504617667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59aea4c4315d25_96026191 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>联系我们</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
    <link rel="stylesheet" type="text/css" href="./img/css/main/contactUs.css">
    <?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./img/js/main/contactUs.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <article>
        <div class="content">
            <div class="content_us">
                <div class="content_us_pbl"><span>问题反馈</span></div>
                <div class="content_us_hr"><hr></div>
                <div class="content_us_deprt">
                    <p>对你给予的建议和支持，深表感谢！</p>
                    <input type="text" id="phdIe" name="" placeholder="问题描述" 
                        onfocus="if(placeholder=='问题描述'){placeholder=''}" 
                        onblur="if(placeholder==''){placeholder='问题描述'}">
                </div>
                <div class="content_us_txt">
                    <textarea id="txtPhdIe" placeholder="这里描述你所遇到的问题..." 
                        onfocus="if(placeholder=='这里描述你所遇到的问题...'){placeholder=''}" 
                        onblur="if(placeholder==''){placeholder='这里描述你所遇到的问题...'}"></textarea>
                </div>
                <div class="content_us_ident">
                    <span>请输入验证码：</span><input type="text" name=""><img src="main.php?controller=index&method=getCheckedImage_contactUs" id="checked"onclick="getCheckedImage_contactUs()">
                </div>
                <input type="submit" class="content_us_sbt" name="" value="提交">
            </div>
        </div>
    </article>
    <?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
