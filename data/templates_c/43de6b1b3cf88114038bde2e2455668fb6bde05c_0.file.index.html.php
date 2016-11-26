<?php
/* Smarty version 3.1.30, created on 2016-11-23 12:54:07
  from "F:\xampp\htdocs\SCU\tpls\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835835f3ac092_99781269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43de6b1b3cf88114038bde2e2455668fb6bde05c' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\index.html',
      1 => 1479736978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loginn.html' => 1,
  ),
),false)) {
function content_5835835f3ac092_99781269 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/index.css">
<link rel="stylesheet" type="text/css" href="./img/css/loginn.css">
<?php echo '<script'; ?>
 type="text/javascript" src="./img/js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/loginn.js"><?php echo '</script'; ?>
>
</head>

<body onLoad="load()">
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
          	        <li class="present"><a href="./main.php">首页</a></li>
                    <span>|</span>
               		<li><a href="#">关于社联</a></li>
                    <span>|</span>
              		<li><a href="./main.php?controller=index&method=information">社团信息</a></li>
                    <span>|</span>
               		<li><a href="#">联系我们</a></li>
                    <span>|</span>
            	</ul>
        	</div>
        </nav>
    </header>
    
    <section>
    	<div class="scrollImg">         
        	<div class="imgs" id="imgs">       	
            <a href="#"  class="tooltip"> 
        		<img id='pic' src="./img/images/default.jpg">
            </a>
            </div>
            <div style="clear:both"></div>
            <div class="scroll">
            	<span  class="last" id="lastPic" onClick="f_lastPic()">&lt;</span>
            	<span  class="next" id="nextPic" onclick="f_nextPic()">&gt;</span>
                <div class="opacity"></div>
            	<div class="outline" id="spans">
                	<span id="outll"></span>
                </div>
            	<ul class="circle" id="circle">
					<li class="hover" value='0' style="color:#b3c0cc">●</li>
				</ul>
            </div>
            <div style="clear:both;"></div>
        </div>
        <!--scrollImg end -->
    </section>
    <section>
        <div class="announcement">
        	<div class="column">
            	<span>社/联/公/告</span>
                <img src="">
            </div>
            <div class="annContent">
			<div id="video">
                <embed  class="video"  src="./img/scuvideo.mp4" autostart="false"></embed></div>
                <ul>
                	<li><a href="./main.php?controller=index&method=notice">我校召开学分制教务管理系统启动筹备会议
                    	<span>2016-08-27</span></a>
                    </li>
                    <li><a href="./main.php?controller=index&method=notice">我校暑假校园基础设施建设工作显成效
                    	<span>2016-08-24</span></a>
                    </li>
            	    <li><a href="./main.php?controller=index&method=notice">病魔无情人有情，各界捐款帮助病人
                    	<span>2016-08-22</span></a>
                    </li>
                    <li><a href="./main.php?controller=index&method=notice">校企合作协同育人
                    	<span>2016-08-10</span></a>
                    </li>            	    
                    <li><a href="./main.php?controller=index&method=notice">雍和明：广金要为广州金融发展做贡献
                    	<span>2016-08-08</span></a>
                    </li>
                    <li><a href="./main.php?controller=index&method=notice">走进企业深入调研
                    	<span>2016-08-03</span></a>
                    </li>
                    <li style="list-style:none;"><a href="#">
                    	<span>更多公告...</span></a>
                    </li>
                </ul>
             </div>
             <div style="clear:both;"></div>
             <section class="ann">
             	<div class="annpicture">
             		<div class="innerDiv">
                		<div class="title" id="title">
                 	   		<span class="last" onClick="last_borad()">&lt;&lt;&lt;</span>
                    		<span class="titleSpan">宣传照片</span>
                    		<span class="next" onclick="next_borad()">&gt;&gt;&gt;</span>
                    	</div>
                        <div class="imgs" id="imgss">
                    		<img class="top3" id='borad' src="./img/images/img1.jpg">
                    		<img class="top3" id='borad' src="./img/images/img2.jpg">
                    		<img class="top3" id='borad' src="./img/images/img3.jpg">
                    		<img id='borad' src="./img/images/img4.jpg"> 
                        </div>              
                	</div>
             	</div>
             </section>
        </div>
    </section>
	<p class="footer">©&nbsp;2016&nbsp;广东金融学院&nbsp;校社联</p>
    <?php $_smarty_tpl->_subTemplateRender("file:loginn.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
