<?php
/* Smarty version 3.1.30, created on 2017-08-17 10:07:19
  from "F:\xampp\htdocs\SCU\tpls\main\orgMessage2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59954eb71ea413_75259563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0bd54b7c63c70d324c3b3476b3161996bd7987a' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\orgMessage2.html',
      1 => 1502456248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59954eb71ea413_75259563 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage2.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/login.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
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
                    <a onclick="attention()">
                        <img src="./img/images/atten.png" id="attention_img">
                        <span id="attention_span">关注</span>
                    </a>
                </div>
                <input type="button" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['isJoin']->value)===null||$tmp==='' ? '加入社团' : $tmp);?>
" onclick="joinSociety(3)">
            </div>
            <div style="clear:both;"></div>
            <div class="main">
            	<div class="activity">
        			<div class="activity_content">
    		            <span>草地音乐节</span>
            		    <p>一次情感的释放,一次灵魂的交流,一次自然与音乐的完美锲合,                      	无座位 无演员 人人都是舞台重心,满自由 满音量 跟随音乐挥洒热情,
                            尝试 感受 释放,其实你并不平凡,只是不愿尝试,期待与你遇见,
                            ----再不疯狂我们就老了。</p>
			        </div>
			        <img class="activity_img" src="img/images/img12.jpg">
			        <hr>
			    </div> 
                <div class="activity">
        			<div class="activity_content">
		            <span>草地音乐节</span>
        		    <p>一次情感的释放,一次灵魂的交流,一次自然与音乐的完美锲合,                      	无座位 无演员 人人都是舞台重心,满自由 满音量 跟随音乐挥洒热情,
                        尝试 感受 释放,其实你并不平凡,只是不愿尝试,期待与你遇见,
                        ----再不疯狂我们就老了。</p>
			        </div>
			        <img class="activity_img" src="img/images/img12.jpg">
			        <hr>
			    </div> 
                <div class="activity">
        			<div class="activity_content">
		            <span>草地音乐节</span>
        		    <p>一次情感的释放,一次灵魂的交流,一次自然与音乐的完美锲合,                      	无座位 无演员 人人都是舞台重心,满自由 满音量 跟随音乐挥洒热情,
                        尝试 感受 释放,其实你并不平凡,只是不愿尝试,期待与你遇见,
                        ----再不疯狂我们就老了。</p>
			        </div>
			        <img class="activity_img" src="img/images/img12.jpg">
			        <hr>
			    </div> 
                <div class="activity">
        			<div class="activity_content">
		            <span>草地音乐节</span>
        		    <p>一次情感的释放,一次灵魂的交流,一次自然与音乐的完美锲合,                      	无座位 无演员 人人都是舞台重心,满自由 满音量 跟随音乐挥洒热情,
                        尝试 感受 释放,其实你并不平凡,只是不愿尝试,期待与你遇见,
                        ----再不疯狂我们就老了。</p>
			        </div>
			        <img class="activity_img" src="img/images/img12.jpg">
			        <hr>
			    </div>            	
        	</div>
    	</div>
        <!--fixed-->
	    <div class="pre_nav" id="floatdiv">
        	<img src="img/images/logo.png">
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
</html>
    
<?php }
}
