<?php
/* Smarty version 3.1.30, created on 2016-11-25 14:18:22
  from "F:\www\SCU\tpls\admin\backstageManagement.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5838482e5521d4_78744950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '296929e4f737c364174efdc71623787d517fcd77' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\backstageManagement.html',
      1 => 1480082185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/backstageManagement_1.html' => 1,
    'file:admin/backstageManagement_2.html' => 1,
    'file:admin/backstageManagement_3.html' => 1,
  ),
),false)) {
function content_5838482e5521d4_78744950 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>校社联后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="./img/css/admin/backstageManagement.css">
	<link rel="stylesheet" type="text/css" href="./img/css/admin/rightReg.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/backstageManagement.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function(){
			$(".searchIframe").hide();
			$(".searchContent").show();
			$(".userSearch").click(function(){
				$(".searchContent").show();
				$(".searchIframe").hide();
			})
			$(".seniorSearch").click(function() {
				$(".searchIframe").show();
				$(".searchContent").hide();
			});
		})
	<?php echo '</script'; ?>
>
	
</head>
<body>
		<header><img src="./img/images/backstage.png"></header>
		<article>
			<div class="left">
			<div class="leftUp">
				<div class="user"><span class="userAndExit">当前社团：<?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
</span><input type="button" name="exit" class="exit" value="退出"></div>
				<div class="backstageMainNav">
					<div class="manageNav"><img src="./img/images/circleArrows.png"><span class="navName">管理社团</span></a>
					</div>
					<div class="manageNav"><span class="navNameUpon" style=" cursor:pointer" >活动注册</span></a><img class="triangle-up" id="i_rightaReg" src="./img/images/triangle.png"></div>
					<div class="manageNav"><span class="navNameUpon" id="reg" style=" cursor:pointer">年度注册</span></a><img class="triangle-up" id="i_rightReg"  src="./img/images/triangle.png"></div>
					<div class="manageNav"><img src="./img/images/circleArrows.png"><span class="navName" style=" cursor:pointer">管理成员</span></a></div>
					<div class="manageNav"><span class="navNameUpon" id="check" style=" cursor:pointer"  >成员审核</span></a><img class="triangle-up" src="./img/images/triangle.png" id="i_rightCheck" ></div>
					<div class="manageNav"><span class="navNameUpon" id="rnow" style=" cursor:pointer" >现有成员</span></a><img class="triangle-up" src="./img/images/triangle.png" id="i_rightNow" ></div>
					
				</div>
				</div>
				<div class="leftUpon"></div>
			</div>
			<?php $_smarty_tpl->_subTemplateRender("file:admin/backstageManagement_1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php $_smarty_tpl->_subTemplateRender("file:admin/backstageManagement_2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php $_smarty_tpl->_subTemplateRender("file:admin/backstageManagement_3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			
		</article>
</body>
</html><?php }
}
