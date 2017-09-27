<?php
/* Smarty version 3.1.30, created on 2017-09-26 09:29:39
  from "F:\xampp\htdocs\SCU\tpls\main\reg3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca01e344fab2_65507813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb0f4119136a7e877e3bcb5204e2d3cd5e9ecbdb' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\reg3.html',
      1 => 1506409946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59ca01e344fab2_65507813 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>注册界面</title>
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/reg1.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/reg3.js"><?php echo '</script'; ?>
>
</head>
<body onload="Start()">
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

    <article>
		<img src="./img/images/3.png" alt="1" class="img-position">
		<div class="canvasContainer">
			<canvas id="myCanvas">您的浏览器不支持canvas！</canvas>	
		</div>
	</article>

	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
