<?php
/* Smarty version 3.1.30, created on 2017-09-26 10:00:07
  from "F:\xampp\htdocs\SCU\tpls\main\reg2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca09077782a5_95329526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d5149bf19c7b22eca4c62292272b8e8e7cc941f' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\reg2.html',
      1 => 1506412755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59ca09077782a5_95329526 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>注册界面</title>
	<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/reg1.css">
	<link rel="stylesheet" type="text/css" href="./img/css/main/reg2.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/main/reg2.js"><?php echo '</script'; ?>
>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
	<article>
		<img src="./img/images/2.png" alt="1" class="img-position">
		<div id="form-content">
			<form action="<?php echo $_smarty_tpl->tpl_vars['reg3']->value;?>
" method="post" onsubmit="return confirm2()">
				<ul>
					<li>
						<label>&nbsp&nbsp姓&nbsp&nbsp名&nbsp<input type="text" name="realname" class="inputDiv" placeholder="请输入你的真实姓名" /></label><br><span class="state1"></span>
					</li>
					<li class="dept">
						&nbsp&nbsp学&nbsp&nbsp院&nbsp<select name="dept">
							<option value="金融与投资学院" selected>金融与投资学院</option>
							<option value="会计学院">会计学院</option>
							<option value="保险学院">保险学院</option>
							<option value="经济贸易学院">经济贸易学院</option>
							<option value="信用管理学院">信用管理学院</option>
							<option value="工商管理学院">工商管理学院</option>
							<option value="互联网金融与信息工程学院">互联网金融与信息工程学院</option>
							<option value="外国语言与文化学院">外国语言与文化学院</option>
							<option value="法学院">法学院</option>
							<option value="财经与新媒体学院">财经与新媒体学院</option>
							<option value="金融数学与统计学院">金融数学与统计学院</option>
							<option value="公共管理学院">公共管理学院</option>
							<option value="创业教育学院">创业教育学院</option>
							<option value="马克思主义学院">马克思主义学院</option>
							<option value="体育教学部">体育教学部</option>
							<option value="继续教育学院">继续教育学院</option>
							<option value="国际教育学院">国际教育学院</option>
						</select><br><br>
					</li>
					<li>
						<label>&nbsp&nbsp专&nbsp&nbsp业&nbsp<input type="text" name="major" class="inputDiv" placeholder="请输入专业编号" /></label><br><span class="state1"></span>
					</li>
				</ul>
				<ul>
					<li class="sex">
						&nbsp&nbsp性&nbsp&nbsp别&nbsp<select name="sex" >
							<option value="男" selected>男</option>
							<option value="女">女</option>
						</select><br><br>
					</li>
					<li>
						<label>&nbsp&nbsp手&nbsp&nbsp机&nbsp<input type="text" name="tel" class="inputDiv" placeholder="请输入你的手机号" /></label><br><span class="state1"></span>
					</li>
					<li>
						<label>&nbsp&nbsp微信号&nbsp<input type="text" name="chat" class="inputDiv" placeholder="请输入你的微信号" /></label><br><span class="state1"></span>
					</li>
				</ul>
				<input type="submit" class="submitBtn btn"  value="下一步"/>
			</form>
		</div>
	</article>
	<?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
