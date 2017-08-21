<?php
/* Smarty version 3.1.30, created on 2017-08-17 10:50:57
  from "F:\xampp\htdocs\SCU\tpls\main\information-of-club.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599558f11b6866_40295522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8183b6e054b32411a970202d566598936b143cd3' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\information-of-club.html',
      1 => 1502959855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_599558f11b6866_40295522 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="./img/js/main/club.js"><?php echo '</script'; ?>
>
</head>
<body onload="club()">
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
                    <!-- <span>|</span> -->
               		<li><a href="main.php?controller=index&method=showAboutUs">关于社联</a></li>
                    <!-- <span>|</span> -->
              		<li class="present"><a href="./main.php?controller=index&method=information">社团信息</a></li>
                    <!-- <span>|</span> -->
               		<li><a href="main.php?controller=index&method=contactUs">联系我们</a></li>
                    <!-- <span>|</span> -->
            	</ul>
        	</div>
        </nav>
    </header>
	<article>
		<div class="informationImage">
			<img src="./img/images/informationImg.png" alt="">
		</div>
		<div class="all">
			<div class="blue">
				<div class="span">
					<span>社团信息</span>
				</div>
				<div class="grey">
					<div class="clubNav">
						<ul class="left-nav" id="left-nav">
							<li>学术科研类</li>
							<li>文娱文化类</li>
							<li>体育健身类</li>
							<li>综合实践类</li>
						</ul>
					</div>
					<div class="arrows">
						<ul class="arrows1" id="arrows1">
							<li class="b1"><img  class="imgArrows" src="./img/images/arrows.png" alt="arrows"></li>
							<li class="b1"><img  class="imgArrows" src="./img/images/arrows.png" alt="arrows"></li>
							<li class="b1"><img  class="imgArrows" src="./img/images/arrows.png" alt="arrows"></li>
							<li class="b1"><img  class="imgArrows" src="./img/images/arrows.png" alt="arrows"></li>
						</ul>
					</div>
				</div>
			</div>
						
			<div class="content">
				<div class="title">
					<span class="titleS" id="aHead">学社科研类</span>
					<div class="searchDiv">
						<input type="text" name="search" id="search" placeholder="输入社团名称">
						<button class="btn" title="SEARCH"></button>
					</div>
				</div><hr>
	
				<div class="div_right">
					<div class="clubStudy" id="clubStudy">
						<table class="clubContent" id="s0">
							<tr>
								<td><a href="" title="">公关协会</a></td>
								<td><a href="" title="">摄影协会</a></td>
								<td><a href="" title="">绿色环保协会</a></td>
							</tr>
							<tr>
								<td><a href="" title="">鲲鹏创客空间 </a></td>
								<td><a href="" title="">大学生创业协会</a></td>
								<td><a href="" title="">米森动物协会 </a></td>
							</tr>
							<tr>
								<td><a href="" title="">金融实践社 </a></td>
								<td><a href="" title="">创行</a></td>						
								<td><a href="" title="">管理学社</a></td>
							</tr>
							<tr>
								<td><a href="" title="">大学生职业生涯规划研究协会</a></td>
							</tr>							
						</table>	                           

						<table class="clubContent" id="s1">
							<tr>
								<td><a href="main.php?controller=index&method=show1&sno=3" title="">出雲音乐协会</a></td>
								<td><a href="" title="">墨染文学社</a></td>
								<td><a href="" title="">西椎动漫社</a></td>
							</tr>
							<tr>
								<td><a href="" title="">尤克里里协会 </a></td>
								<td><a href="" title="">指尖魔方社</a></td>
								<td><a href="" title="">金风灯谜协会 </a></td>
							</tr>
							<tr>
								<td><a href="" title="">魔术协会</a></td>
								<td><a href="" title="">桌游协会</a></td>						
								<td><a href="" title="">书画协会</a></td>
							</tr>
							<tr>
								<td><a href="" title="">戏剧协会</a></td>
								<td><a href="" title="">舞蹈协会</a></td>
								<td><a href="" title="">笛箫协会</a></td>
							</tr>							
						</table>

						<table class="clubContent" id="s2">
							<tr>
								<td><a href="" title="">楚天棋友社</a></td>
								<td><a href="" title="">毽球协会</a></td>
								<td><a href="" title="">篮球协会</a></td>
							</tr>
							<tr>
								<td><a href="" title="">乒乓球协会</a></td>
								<td><a href="" title=""> 排球协会</a></td>
								<td><a href="" title="">轮滑协会</a></td>
							</tr>
							<tr>
								<td><a href="" title="">羽毛球协会</a></td>
								<td><a href="" title=""> 足球协会</a></td>
								<td><a href="" title="">武术协会</a></td>
							</tr>
							<tr>
								<td><a href="" title="">网球协会</a></td>
								<td><a href="" title="">跆拳道协会</a></td>
								<td><a href="" title="">桌球协会</a></td>
							</tr>
							<tr>
								<td><a href="" title="">自行车协会</a></td>
								<td><a href="" title="">瑜伽俱乐部</a></td>
							</tr>							
						</table> 

						<table class="clubContent" id="s3">
							<tr>
								<td><a href="" title="">心理健康与个人发展协会</a></td>
								<td><a href="" title="">电子商务学会</a></td>
								<td><a href="" title="">保险学社</a></td>
							</tr>
							<tr>
								<td><a href="" title="">法学会ERP沙盘学习团队</a></td>
								<td><a href="" title="">朝觉社</a></td>
								<td><a href="" title="">民间艺术研究协会</a></td>
							</tr>
							<tr>
								<td><a href="" title="">数学协会</a></td>
								<td><a href="" title="">会计学会</a></td>
								<td><a href="" title="">韩语学社</a></td>
							</tr>
							<tr>
								<td><a href="" title="">金院英语俱乐部</a></td>
								<td><a href="" title="">人力资源管理学会</a></td>
								<td><a href="" title="">货币金融学会</a></td>
							</tr>
							<tr>
								<td><a href="" title="">计算机技术协会国贸协会</a></td>
								<td><a href="" title="">金融学会</a></td>
								<td><a href="" title="">经济学协会</a></td>
							</tr>
							<tr>
								<td><a href="" title="">燎原文学社</a></td>
							</tr>						
						</table>

					</div>
				</div>
			</div>
		</div>
	</article>
	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
