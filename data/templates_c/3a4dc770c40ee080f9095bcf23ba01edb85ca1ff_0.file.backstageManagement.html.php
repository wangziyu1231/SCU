<?php
/* Smarty version 3.1.30, created on 2017-08-12 09:12:50
  from "F:\xampp\htdocs\newSCU\SCU\tpls\admin\backstageManagement.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598eaa722b77a7_51647995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a4dc770c40ee080f9095bcf23ba01edb85ca1ff' => 
    array (
      0 => 'F:\\xampp\\htdocs\\newSCU\\SCU\\tpls\\admin\\backstageManagement.html',
      1 => 1502521742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eaa722b77a7_51647995 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>校社联后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="./img/css/admin/backstageManagement.css">
	<link rel="stylesheet" type="text/css" href="./img/css/admin/rightReg.css">
	<?php echo '<script'; ?>
 src="./img/js/admin/laydate/laydate.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/backstageManagement.js"><?php echo '</script'; ?>
>
	<style>
		
		body{
			overflow-y: hidden;
			overflow-y: hidden;
		}
		html{
			overflow-y: hidden;
		}
		.bg{
			background: #eeeced;
			width: 100%;
			height: 44rem;
		}
	</style>
		
</head>
<body>
		<header><img src="./img/images/backstage.png"></header>
		<article>
			<div class="left">
			<div class="leftUser">
				
				<span class="leftUserSpan">当前社团：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sName']->value)===null||$tmp==='' ? '' : $tmp);?>
</span>
				<form action="admin.php?controller=admin&method=logout" method="post"><input type="submit" name="exit" class="leftUserIpt" value="退出"></form>
				
				
				<div class="leftNav">
					<div class="leftNavImg"><img src="./img/images/circleArrows.png"><span>管理社团</span></div><hr>
					<div><span class="leftNavNOImg" id="activReg">活动申请</span></div><hr>
					<div><span class="leftNavNOImg" id="reg">年度注册</span></div><hr>
					<div class="leftNavImg"><img src="./img/images/circleArrows.png"><span>管理成员</span></div><hr>
					<div><span class="leftNavNOImg" id="check">成员审核</span></div><hr>
					<div><span class="leftNavNOImg" id="rnow">现有成员</span></div><hr>
				</div>
				<div class="leftUpon"></div>
			</div>
			</div>
        <div class="bg">
          <iframe id="ifr" scrolling="yes" width="80%" height="700px" frameborder="0" src="./admin.php?controller=socmem&method=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" scrolling="yes" width="80%" height="700px" frameborder="0"></iframe>
        </div>
		</article>

</body>
</html>
<?php }
}
