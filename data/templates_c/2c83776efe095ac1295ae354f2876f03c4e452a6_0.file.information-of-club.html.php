<?php
/* Smarty version 3.1.30, created on 2016-11-25 13:43:47
  from "F:\www\SCU\tpls\main\information-of-club.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58384013195201_84183837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c83776efe095ac1295ae354f2876f03c4e452a6' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\main\\information-of-club.html',
      1 => 1480081312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_58384013195201_84183837 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>社团信息</title>
	<link rel="stylesheet" type="text/css" href="./img/css/main/information-of-club.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/login.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/login.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
	$(function(){
		$("#s2").hide();
		$("#s3").hide();
		$("#s4").hide();
		$("#s0").hide();
		$("#study").hover(function(){
			$("#s1").show();
			$("#s2").hide();
			$("#s3").hide();
		 	$("#s4").hide();
			$("#s0").hide();
			$("#s1").show();
			
			
		});
		$("#cultrue").hover(function(){
			$("#s2").show();
			$("#s1").hide();
			$("#s3").hide();
			$("#s4").hide();
			$("#s0").hide();
		});
		$("#PE").hover(function(){
			$("#s3").show();
			$("#s2").hide();
			$("#s1").hide();
			$("#s4").hide();
			$("#s0").hide();
			
			
		});
		$("#practice").hover(function(){
			$("#s4").show();
			$("#s3").hide();
			$("#s2").hide();
			$("#s1").hide();
			$("#s0").hide();
		});
	
	})
		
	<?php echo '</script'; ?>
>
</head>
<body>
	<header>
    	<div class="top">
    		<img src="./img/images/head1.png">
            <div class="loRe">
        		<span class="lr" onClick="login()">登录</span>
        		<span>|</span>
        		<a href="main.php?controller=reg&method=one"><span class="lr" >注册</span></a>
            </div>
        </div>
        <nav>
        	<div class="nav">
           		<ul>
          	        <li class="present"><a href="main.php">首页</a></li>
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
	<article>
		<div class="informationImage"><img src="./img/images/informationImg.jpg" alt=""></div>
		<div class="all">
			<div class="blue">
			<div class="grey">
				<div class="clubNav">
					<ul class="left-nav">
					<li><a href="" title="" id="study">学术科研类</a></li><hr>
					<li><a href="" title="" id="cultrue">文娱文化类</a></li><hr>
					<li><a href="" title="" id="PE">体育健身类</a></li><hr>
					<li><a href="" title="" id="practice">综合实践类</a></li><hr>
				</ul>
				</div>
				<div class="arrows">
					<ul class="arrows1">
						<li class="b0"><img  class="imgArrows" src="./img/images/arrows.png" alt="arrows"></li><hr>
						<li class="b1"><img  class="imgArrows" src="./img/images/arrows.png" alt="arrows"></li><hr>
						<li class="b1"><img  class="imgArrows" src="./img/images/arrows.png" alt="arrows"></li><hr>
						<li class="b1"><img  class="imgArrows" src="./img/images/arrows.png" alt="arrows"></li><hr>
					</ul>
				</div>
			</div>
			</div>
			
		<div class="content">
			<div class="title"><span class="titleS">社团	</span>
				<input type="text" name="search" id="search">
				<button class="btn" title="SEARCH"></button>
			</div><hr>
			<div class="div_right">
				<div class="clubStudy">
					<table class="clubContent" id="s1">
						<tr>
							<td class="small"><a href="main.php?controller=index&method=show1" title="">出云音乐协会</a></td>
							<td class="small"><a href="" title="">保险学社</a></td>
							<td class="big"><a href="" title="">燎原文学社</a></td>
							<td class="big"><a href="" title="">ERP沙盘学习团队</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">朝觉社</a></td>
							<td class="small"><a href="" title="">法学会</a></td>
							<td class="big"><a href="" title="">电子商务协会</a></td>
							<td class="big"><a href="" title="">人力资源管理协会</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">金融学会</a></td>
							<td class="small"><a href="" title="">会计协会</a></td>
							<td class="big"><a href="" title="">韩语学社</a></td>
							<td class="big"><a href="" title="">金融英语俱乐部</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">货币金融学</a></td>
							<td class="small"><a href="" title="">国贸协会</a></td>
							<td class="big"><a href="" title="">计算机技术协会</a></td>
							<td class="big"><a href="" title="">民间艺术研究协会</a></td>
						</tr>
						<tr>
							<td class="small" ><a href="" title="">经济学协会</a></td>
							<td class="big"><a href="" title="">心理健康与个人发展协会</a></td>
						</tr>
					</table>
				</div>
				<div class="clubCultrue" id="s2"><table class="clubContent">
<tr>
							<td class="small"><a href="" title="">数学协会</a></td>
							<td class="small"><a href="" title="">保险学社</a></td>
							<td class="big"><a href="" title="">燎原文学社</a></td>
							<td class="big"><a href="" title="">ERP沙盘学习团队</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">朝觉社</a></td>
							<td class="small"><a href="" title="">法学会</a></td>
							<td class="big"><a href="" title="">电子商务协会</a></td>
							<td class="big"><a href="" title="">人力资源管理协会</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">金融学会</a></td>
							<td class="small"><a href="" title="">会计协会</a></td>
							<td class="big"><a href="" title="">韩语学社</a></td>
							<td class="big"><a href="" title="">金融英语俱乐部</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">货币金融学</a></td>
							<td class="small"><a href="" title="">国贸协会</a></td>
							<td class="big"><a href="" title="">计算机技术协会</a></td>
							<td class="big"><a href="" title="">民间艺术研究协会</a></td>
						</tr>
						<tr>
							<td class="small" ><a href="" title="">经济学协会</a></td>
							<td class="big"><a href="" title="">心理健康与个人发展协会</a></td>
						</tr>
					</table></div>
				<div class="clubPE" id="s3"><table class="clubContent">
						<tr>
							<td class="small"><a href="" title="">数学协会</a></td>
							<td class="small"><a href="" title="">保险学社</a></td>
							<td class="big"><a href="" title="">燎原文学社</a></td>
							<td class="big"><a href="" title="">ERP沙盘学习团队</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">朝觉社</a></td>
							<td class="small"><a href="" title="">法学会</a></td>
							<td class="big"><a href="" title="">电子商务协会</a></td>
							<td class="big"><a href="" title="">人力资源管理协会</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">金融学会</a></td>
							<td class="small"><a href="" title="">会计协会</a></td>
							<td class="big"><a href="" title="">韩语学社</a></td>
							<td class="big"><a href="" title="">金融英语俱乐部</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">货币金融学</a></td>
							<td class="small"><a href="" title="">国贸协会</a></td>
							<td class="big"><a href="" title="">计算机技术协会</a></td>
							<td class="big"><a href="" title="">民间艺术研究协会</a></td>
						</tr>
						<tr>
							<td class="small" ><a href="" title="">经济学协会</a></td>
							<td class="big"><a href="" title="">心理健康与个人发展协会</a></td>
						</tr>
					</table></div>
				<div class="Practice" id="s4"><table class="clubContent" >
						<tr>
							<td class="small"><a href="" title="">数学协会</a></td>
							<td class="small"><a href="" title="">保险学社</a></td>
							<td class="big"><a href="" title="">燎原文学社</a></td>
							<td class="big"><a href="" title="">ERP沙盘学习团队</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">朝觉社</a></td>
							<td class="small"><a href="" title="">法学会</a></td>
							<td class="big"><a href="" title="">电子商务协会</a></td>
							<td class="big"><a href="" title="">人力资源管理协会</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">金融学会</a></td>
							<td class="small"><a href="" title="">会计协会</a></td>
							<td class="big"><a href="" title="">韩语学社</a></td>
							<td class="big"><a href="" title="">金融英语俱乐部</a></td>
						</tr>
						<tr>
							<td class="small"><a href="" title="">货币金融学</a></td>
							<td class="small"><a href="" title="">国贸协会</a></td>
							<td class="big"><a href="" title="">计算机技术协会</a></td>
							<td class="big"><a href="" title="">民间艺术研究协会</a></td>
						</tr>
						<tr>
							<td class="small" ><a href="" title="">经济学协会</a></td>
							<td class="big"><a href="" title="">心理健康与个人发展协会</a></td>
						</tr>
					</table></div>
			</div>
		</div>
		</div>
	</article>
	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
