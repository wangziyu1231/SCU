<?php
/* Smarty version 3.1.30, created on 2017-09-26 10:26:58
  from "F:\xampp\htdocs\SCU\tpls\main\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca0f52426132_94549618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd2f3924ed95573aa77325682596f588f852b88' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\header.html',
      1 => 1506414240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ca0f52426132_94549618 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value)===null||$tmp==='' ? "<span class='lr' onclick='login()'>登录</span>" : $tmp);?>
<span>|
                    </span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['reg']->value)===null||$tmp==='' ? "<a href='".((string)$_smarty_tpl->tpl_vars['url_reg']->value)."'><span class='lr'>注册</span></a>" : $tmp);?>

                    <a href="./img/images/logo/ma.png" title="校社联公众号二维码" id="showPic"><img id="ma" src="./img/images/logo/ma.png"></a>
                </div>
            </div>
            <img id="menu" src="./img/images/menu.png"/>
        </div>
    </header><?php }
}
