<?php
/* Smarty version 3.1.30, created on 2017-08-21 11:13:46
  from "F:\xampp\htdocs\SCU\tpls\main\orgMessage1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599aa44a2b52b8_76330165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af6f0e5ab6e663dd5b9781104caa34ab6358d882' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\orgMessage1.html',
      1 => 1503306590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_599aa44a2b52b8_76330165 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage1.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/login.css">
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/orgMessage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/orgMessage2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
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
                    <li class="present"><a href="main.php?controller=index&method=information">社团信息</a></li>
                    <li><a href="main.php?controller=index&method=contactUs">联系我们</a></li>
                </ul>
            </div>
        </nav>
    </header>

	<div class="wrapped">
    	<div class="content">
            <div class="name">
                <div class="name_left">
                    <span class="org">出雲音乐协会</span><br>
                    <a id="concern">
                        <input name="username" type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['username'])===null||$tmp==='' ? null : $tmp);?>
">
                        <?php if ($_smarty_tpl->tpl_vars['isConcern']->value == '1') {?>
                            <img src="./img/images/attened.png" id="attention_img">
                            <span id="attention_span">取消关注</span>
                        <?php } else { ?>
                            <img src="./img/images/atten.png" id="attention_img">
                            <span id="attention_span">关注</span>
                        <?php }?>
                    </a>
                </div>
                <input type="button" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['isJoin']->value)===null||$tmp==='' ? '加入社团' : $tmp);?>
">
            </div>
            <div style="clear:both;"></div>
        	<div class="main">
            	<div class="main_left">
                <p>
                广东金融学院音乐协会诞生于1992年，致力于打造广金音乐文化传播第一平台，成为卓越的大学获得策划者和出色的舞台执行团队，至今已经走过了22个春秋，本社团于2014年3月21日正式更名为“出雲音乐协会”我们对“出雲”的理解是希望这个组织能够出色，出众，出人头地。</p>
                </div>
                <img src="img/images/music.png" class="main_right">
        	</div>
    	</div>
	    <div class="pre_nav" id="floatdiv">
        	<img src="img/images/logo.png"/>
            <ul>
                <li><hr>
                	<a class="nav" href="main.php?controller=index&method=show1&sNO=3"><span>社团介绍</span></a>
                </li>
                <li>
                	<a class="nav" href="main.php?controller=index&method=show2&sNO=3"><span>社团活动</span></a>
                </li>
                <li>
                	<a class="nav" href="main.php?controller=index&method=show3&sNO=3"><span>社团评论</span></a>
                </li>                
            </ul>
               <!-- <div class="popup">
        			<span><em></em></span>
    			</div>-->
    	</div>
	</div>
    <p class="footer">©&nbsp;2016&nbsp;广东金融学院&nbsp;校社联</p>
	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
