<?php
/* Smarty version 3.1.30, created on 2017-09-26 11:17:56
  from "F:\xampp\htdocs\SCU\tpls\main\new.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca1b4460ed88_85083487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d1ea5650ed9546ebae8415f7a752d89566a3c78' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\new.html',
      1 => 1505463696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59ca1b4460ed88_85083487 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>活动内容</title>
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/new.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/login.css">
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
 
    <article>
      <!-- 
      <div class="newImg"><img src="./img/images/newImg.jpg" alt="placeholder+image"></div>  -->
    	<div id="newNav">
    		<ul class="newNavUl">
    			<li class="leftDes"><a href="">当前位置</a><span class="kuohao">></span></li>
    			<li><a href="main.php">首页</a><span class="kuohao">></li>
    			<li><a href="">新闻</a><span class="kuohao">></li>
    		</ul><hr>
    	</div>
    	<div class="newsContent">
        <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['content']->value->aName;?>
</h2>
        <?php echo $_smarty_tpl->tpl_vars['content']->value->aContent;?>

    		<div class="null"></div>

    	</div>
    </article>
	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
