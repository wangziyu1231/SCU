<?php
/* Smarty version 3.1.30, created on 2016-11-23 14:07:42
  from "F:\xampp\htdocs\SCU\tpls\orgMessage2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835949e8d9130_50335974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06b049a2b7769bede858e65faf800793e82191fd' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\orgMessage2.html',
      1 => 1479906431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835949e8d9130_50335974 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/orgMessage.css">
<link rel="stylesheet" type="text/css" href="./img/css/orgMessage2.css">
<?php echo '<script'; ?>
 src="file:///C|/Users/婵娜/Desktop/网页设计/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/orgMessage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/orgMessage2.js"><?php echo '</script'; ?>
>
</head>
<body>
	<header>
    	<div class="top">
    		<img src="./img/images/head.jpg">
            <div class="loRe">
        		<span class="lr" onclick="login()">登录</span>
        		<span>|</span>
        		<a href="main.php?controller=reg&method=one"><span class="lr" >注册</span></a>
            </div>
        </div>
        <nav>
        	<div class="nav">
           		<ul>
          	        <li ><a href="./main.php">首页</a></li>
                    <span>|</span>
               		<li><a href="#">关于社联</a></li>
                    <span>|</span>
              		<li class="present"><a href="./main.php?controller=index&method=information">社团信息</a></li>
                    <span>|</span>
               		<li><a href="#">联系我们</a></li>
                    <span>|</span>
            	</ul>
        	</div>
        </nav>
    </header>
	<div class="wrapped">
    	<div class="content">
        	<!--fixed-->
    		<div class="name">
            	<div class="name_left">
            		<span class="org">出雲音乐协会</span><br>
                    <a onclick="attention()">
                    	<img src="./img/images/atten.png" id="attention_img">
                    	<span id="attention_span">关注</span>
                    </a>
                </div>
                <input type="button" value="加入社团">
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
                	<a class="nav" href="main.php?controller=index&method=show1"><span>社团简介</span></a>
                </li>
                <li>
                	<a class="nav" href="main.php?controller=index&method=show2"><span>社团活动</span></a>
                </li>
                <li>
                	<a class="nav" href="main.php?controller=index&method=show3"><span>社团评论</span></a>
                </li>                
            </ul>
               <!-- <div class="popup">
        			<span><em></em></span>
    			</div>-->
    	</div>
	</div>
</body>
</html>
    
<?php }
}
