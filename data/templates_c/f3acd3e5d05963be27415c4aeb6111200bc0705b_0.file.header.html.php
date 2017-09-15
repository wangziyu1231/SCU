<?php
/* Smarty version 3.1.30, created on 2017-09-05 14:49:24
  from "F:\xampp\htdocs\SCU_xxx\SCU_lynnjyu\tpls\main\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ae9d544e9044_20679333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3acd3e5d05963be27415c4aeb6111200bc0705b' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU_xxx\\SCU_lynnjyu\\tpls\\main\\header.html',
      1 => 1501235614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ae9d544e9044_20679333 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <li><a href="main.php">首页</a></li>
                        <li><a href="main.php?controller=index&method=showAboutUs">关于社联</a></li>
                        <li><a href="main.php?controller=index&method=information">社团信息</a></li>
                        <li><a href="main.php?controller=index&method=contactUs">联系我们</a></li>
                    </ul>
                </div>
            </nav>
            <div class="loRe">
				<?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value)===null||$tmp==='' ? "<span class='lr' onclick='login()'>登录</span>" : $tmp);?>
<span>|
                </span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['reg']->value)===null||$tmp==='' ? "<a href='main.php?controller=reg&method=one'><span class='lr'>注册</span></a>" : $tmp);?>

                <a href="./img/images/logo/ma.png" title="校社联公众号二维码" id="showPic"><img id="ma" src="./img/images/logo/ma.png"></a>
            </div>
            <img id="menu" src="./img/images/menu.png"/>
        </div>
		<div class="nextAlert" style="display:none">
            <a href="main.php?controller=login&method=showPI2">个人信息</a><hr>
            <a href="main.php?controller=login&method=logout">退出</a>
        </div>
    </header><?php }
}
