<?php
/* Smarty version 3.1.30, created on 2017-10-26 09:08:32
  from "F:\www\SCU\tpls\main\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1a61029c973_11478010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '594f2bf2c0a3e45465bfc8b2f8cee5c6e366be0c' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\main\\header.html',
      1 => 1509008699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1a61029c973_11478010 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <header>
        <div class="top">
            <img id="logo01" src="./img/images/logo/logo01.png"/><img id="logo02" src="./img/images/logo/logo02.png"/>
            <div id="span">
                <span id="name">广东金融学院学生社团联合会</span><br/>
                <span id="website">www.xxx.com</span>
            </div>
            <nav>
                <div class="nav">
                    <ul id="nav">
                        <li><a href="index.html">首页</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_aboutUs']->value;?>
">关于社联</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_information']->value;?>
">社团信息</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_contactUs']->value;?>
">联系我们</a></li>
                    </ul>
                </div>
            </nav>            
            <div class="loRe">
                <div class="list">
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value)===null||$tmp==='' ? "<span class='lr' id='login'>登录</span>" : $tmp);?>
<span>|
                    </span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['reg']->value)===null||$tmp==='' ? "<a href='".((string)$_smarty_tpl->tpl_vars['url_reg']->value)."'><span class='lr'>注册</span></a>" : $tmp);?>

                    <a href="./img/images/logo/ma.png" title="校社联公众号二维码" id="showPic"><img id="ma" src="./img/images/logo/ma.png"></a>
                </div>
            </div>
            <img id="menu" src="./img/images/menu.png"/>
        </div>
    </header><?php }
}
