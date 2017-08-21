<?php
/* Smarty version 3.1.30, created on 2017-08-21 14:02:12
  from "F:\xampp\htdocs\SCU\tpls\main\individualInterface.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599acbc4300f23_04367473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b0705a6a130663686452a4bf11cbe2550802b5' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\individualInterface.html',
      1 => 1503316927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
  ),
),false)) {
function content_599acbc4300f23_04367473 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>个人信息</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/individualInterface.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    

    <article class="content">
    	<div class="massage">
    		<div class="massage1"><div><span class="dot">.</span><span class="date">11月16日</span></div>
				<div class="line"><hr></div>
				<div class="notice1">
				<h2>乒乓协会</h2>
				<span class="tit">第五届“挑战杯”乒乓球比赛开始了！</span><span class="details"><a href="">>>点击了解详情</a></span></div>
				<div class="notice2">
				<h2>职协</h2>
				<span class="tit">华南名企实习生招聘节 </span><span class="details"><a href="">>>点击了解详情</a></span></div>
			</div>
    		<div class="massage1"><div><span class="dot">.</span><span class="date">11月9日</span></div>
				<div class="line"><hr></div>
				<div class="notice1">
				<h2>键球协会</h2>
				<span class="tit">第五届“挑战杯”乒乓球比赛开始了！</span><span class="details"><a href="">>>点击了解详情</a></span></div>
			</div>
    	</div>
    </article>
    <footer></footer>
</body>
</html><?php }
}
