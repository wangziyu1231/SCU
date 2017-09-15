<?php
/* Smarty version 3.1.30, created on 2017-09-15 09:09:42
  from "F:\xampp\htdocs\SCU\tpls\main\individualInterface2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bb7cb6366021_45238758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a84e2ead238706390d5a8cda13a0b5ff1a8774' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\individualInterface2.html',
      1 => 1505459380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59bb7cb6366021_45238758 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>个人信息</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/individualInterface2.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>	
    <?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./img/js/main/individual2.js"><?php echo '</script'; ?>
>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
    <div class="back_mark"></div>
    <article>
    	<div class="out">
            <div id="individualCenter">个人中心</div>
            <div id="left">
                <div id="photo">
                    <img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['portrait'])===null||$tmp==='' ? '' : $tmp);?>
?rand=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['rand']->value)===null||$tmp==='' ? '' : $tmp);?>
" onerror="this.src='./img/images/default_portrait/default.jpg'" />
                    <span id="editPhoto">修改头像</span>

                    <div class="uploadPhoto">
                        <div class="subTitle">
                            <span>编辑头像</span>
                            <span class="close">x</span>
                        </div>
                        <img src="./img/images/default_portrait/default.jpg">
                        <form id="form0" method="post" enctype="multipart/form-data" action="main.php?controller=uploadPort&method=upload">
                            <input name="username" type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['username'])===null||$tmp==='' ? null : $tmp);?>
">
                            <div class="uploader">
                                <input type="text" class="filename" readonly="readonly"/>
                                <input type="button" name="file" class="button" value="Browse..."/>
                                <input name="portrait" type="file" size="30"/>
                            </div>
                            <input type="submit" class="submit" value="上传图片">
                        </form>
                        
                        <p class="fileErrorTip"></p>
                    </div>

                </div>
                
            </div>
            <div id="right">
                <div id="rightTop">
                    <span id="perInfor">个人信息</span>
                    <span id="perOrg">我的社团</span>
                </div>
                <!-- 个人信息 -->
                <div id="rightMid">
                    <span>基本资料</span>
                    <span id="edit">编辑</span>
                </div>
                <form id="information" method="post" enctype="multipart/form-data" action="">
                    <label>姓名：<input type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" disabled="disabled"></label><br>
                    <label>学号：<input type="text" name="username" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['username'])===null||$tmp==='' ? '' : $tmp);?>
" disabled="disabled"></label><br>
                    <label>性别：<input type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['sex'])===null||$tmp==='' ? '' : $tmp);?>
" disabled="disabled"></label><br>
                    <label>系别：<input type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['dept'])===null||$tmp==='' ? '' : $tmp);?>
" disabled="disabled"></label><br>
                    <label>专业：<input type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['major'])===null||$tmp==='' ? '' : $tmp);?>
" disabled="disabled"></label><br>
                    <label>手机号：<input type="text" name="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
"    disabled="disabled" class="editable" placeholder="请输入手机号码"></label><br><div class="tip"></div>
                    <label>微信号：<input type="text" name="wechat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['wechat'])===null||$tmp==='' ? '' : $tmp);?>
" disabled="disabled" class="editable" placeholder="请输入微信号"></label><br><div class="tip"></div>
                    <label>邮箱：<input type="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" disabled="disabled" class="editable" placeholder="请输入邮箱地址"></label><br><div class="tip"></div>
                </form>
                <!-- 我的社团 -->
                <div id="intention">
                    <span class="subTitle">关注的社团：</span>
                    <div class="outBox">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['concern']->value)===null||$tmp==='' ? null : $tmp), 'concern');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['concern']->value) {
?>
                        <div class="box">
                            <a href="index.html?<?php echo encrypt_url(('controller=index&method=show1&sNO=').($_smarty_tpl->tpl_vars['concern']->value['sNO']),'SCU');?>
">
                                <img src=""><span class="itsName"><?php echo $_smarty_tpl->tpl_vars['concern']->value['sName'];?>
</span>
                            </a>
                        </div>
                    <?php
}
} else {
?>

                        <span class="default">一个社团都没关注哦</span>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                </div>
                <br style="clear: both">
                <div id="attend">
                    <span class="subTitle">加入的社团：</span>
                    <div class="outBox">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['society']->value)===null||$tmp==='' ? null : $tmp), 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
                        <div class="box"><a href="index.html?<?php echo encrypt_url(('controller=index&method=show1&sNO=').($_smarty_tpl->tpl_vars['arr']->value['sNO']),'SCU');?>
"><img src=""><span class="itsName"><?php echo $_smarty_tpl->tpl_vars['arr']->value['sName'];?>
</span></a></div>
                    <?php
}
} else {
?>
                        
                        <span class="default">一个社团都没加哦</span>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  
                    </div>                  
                </div>
            </div>
            <br style="clear: both">
    	</div>
    </article>
    <?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}
