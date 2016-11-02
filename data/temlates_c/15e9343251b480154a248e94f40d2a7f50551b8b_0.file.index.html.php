<?php
/* Smarty version 3.1.30, created on 2016-11-01 15:42:43
  from "F:\www\SCU\tpls\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5818b7f389ef35_36153808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e9343251b480154a248e94f40d2a7f50551b8b' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\index.html',
      1 => 1478014961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5818b7f389ef35_36153808 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/index.css">
<?php echo '<script'; ?>
 src="./img/js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/jqControl.js"><?php echo '</script'; ?>
>

</head>

<body onLoad="changload()">
	<header>
    	<div class="top">
    		<img src="./img/images/head.jpg">
            <div class="loRe">
        		<span class="lr" onClick="login()">登录</span>
        		<span>|</span>
        		<span class="lr" onClick="register()">注册</span>
            </div>
        </div>
        <nav>
        	<div class="nav">
           		<ul>
          	        <li class="present"><a href="./index.html">首页</a></li>
                    <span>|</span>
               		<li><a href="#">关于社联</a></li>
                    <span>|</span>
              		<li><a href="#">社团信息</a></li>
                    <span>|</span>
               		<li><a href="#">联系我们</a></li>
                    <span>|</span>
            	</ul>
        	</div>
        </nav>
    </header>
    
    <section>
    	<div class="scrollImg">         
        	<div class="imgs">       	
				<img src="./img/images/scrollPicture1.jpg" id="pic">
            </div>
            <div style="clear:both"></div>
            <div class="scroll">
            	<span class="lastPic" id="lastPic">&lt;</span>
            	<span class="nextPic" id="nextPic">&gt;</span>
                <div class="opacity"></div>
            	<div class="outline" id="spans">
                	<span>此处是概要1</span>
                    <span>此处是概要2</span>
            		<span>此处是概要3</span>
                    <span>此处是概要4</span>
                </div>
            	<ul class="circle" id="circle">
					<li class="hover">●</li>
					<li class="out">●</li>
					<li class="out">●</li>
                	<li class="out">●</li>
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
            </div>
            <div class="annContent">
                <video src="" class="video" controls></video>
                <ul>
                	<li><a href="#">我校召开学分制教务管理系统启动筹备会议
                    	<span>2016-08-27</span></a>
                    </li>
                    <li><a href="#">我校暑假校园基础设施建设工作显成效
                    	<span>2016-08-24</span></a>
                    </li>
            	    <li><a href="#">病魔无情人有情，各界捐款帮助病人
                    	<span>2016-08-22</span></a>
                    </li>
                    <li><a href="#">校企合作协同育人
                    	<span>2016-08-10</span></a>
                    </li>            	    
                    <li><a href="#">雍和明：广金要为广州金融发展做贡献
                    	<span>2016-08-08</span></a>
                    </li>
                    <li><a href="#">走进企业深入调研
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
                 	   		<span class="lastPic">&lt;&lt;&lt;</span>
                    		<span class="titleSpan">宣传照片</span>
                    		<span class="nextPic">&gt;&gt;&gt;</span>
                    	</div>
                        <div class="imgs">
                    		<img class="top3" src="./img/images/img1.jpg">
                    		<img class="top3" src="./img/images/img2.jpg">
                    		<img class="top3" src="./img/images/img3.jpg">
                    		<img src="./img/images/img4.jpg"> 
                        </div>              
                	</div>
             	</div>
             </section>
        </div>
    </section>
    <p class="footer">©&nbsp;2016&nbsp;广东金融学院&nbsp;校社联</p>
</body>
</html>
<?php }
}
