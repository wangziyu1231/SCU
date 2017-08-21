<?php
/* Smarty version 3.1.30, created on 2017-08-17 10:07:21
  from "F:\xampp\htdocs\SCU\tpls\main\orgMessage3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59954eb942ae27_53580976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a5d4adf46ae160157e47b592af5f7cad19b231' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\orgMessage3.html',
      1 => 1502456248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59954eb942ae27_53580976 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage3.css">
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
                    <li class="present"><a href="./main.php?controller=index&method=information">社团信息</a></li>
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
">
            </div>
            <div style="clear:both;"></div>
            <div class="main">
            	<form method="post">
	            	<textarea class="comment_textarea"  placeholder="请输入评论..."></textarea>
                    <input type="submit" class="submit" value="提交">                    
                </form>
                <div class="comment comment1">
                    <img class="head_portrait" src="./img/images/img11.jpg">
                    <div class="comment_right">
                    	<span class="my_name" name="my_name">黄鹏</span>
                    	<span class="time" name="time">2016/11/22 22:00:00</span>
                        <div class="conDiv">
                    	   <span class="con">不错不错~</span>
                        </div>
                    </div>  
                </div>
                <div class="comment">
                    <img class="head_portrait" src="./img/images/img10.jpg">
                    <div class="comment_right">
                    	<span class="my_name" name="my_name">胡汉三</span>
                    	<span class="time" name="time">2016/11/12 08:40:59</span>
                    	<div class="conDiv">
                            <span class="con">赞一个</span>
                        </div>
                    </div>  
                </div>
                <div class="comment">
                    <img class="head_portrait" src="./img/images/img9.jpg">
                    <div class="comment_right">
                    	<span class="my_name" name="my_name">小羔羊</span>
                    	<span class="time" name="time">2016/11/02 02:20:05</span>
                        <div class="conDiv">
                    	   <span class="con">大爱出雲！！！</span>
                        </div>
                    </div>
                </div>
                <a href="#" class="comment_a"> >>查看更多评论</a>           
             </div>
    	</div>
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
</html><?php }
}
