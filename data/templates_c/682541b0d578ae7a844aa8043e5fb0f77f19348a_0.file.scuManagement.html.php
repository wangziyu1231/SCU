<?php
/* Smarty version 3.1.30, created on 2017-10-25 17:38:33
  from "F:\xampp\htdocs\SCU\tpls\admin\scuManagement.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f0aff909c661_92592151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '682541b0d578ae7a844aa8043e5fb0f77f19348a' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\admin\\scuManagement.html',
      1 => 1506421037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f0aff909c661_92592151 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>校社联后台管理系统</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="./img/css/admin/scuManagement.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/scuManagement.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jsurl']->value)===null||$tmp==='' ? "scuManagement_1.js" : $tmp);?>
"><?php echo '</script'; ?>
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
			background: #ededed;
			width: 81.2%;
			min-width: 40rem;
			height: 44rem;
			position: absolute;
			margin-left: 18rem;
			float: right; 
		}
	</style>
</head>
<body>
		<header><img src="./img/images/backstage.png"></header>
		<article>
			<div class="left">
										<div class="leftUser">
											<span class="leftUserSpan">用户名:<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
</span>
											<input  class="leftUserIpt" type="button" name="" value="退出" onclick="exit()">
										</div>
										<div class="leftNav">
											<div class="leftNavImg"><img src="./img/images/circleArrows.png"><span>社团相关</span></div><hr>
											<div><span class="leftNavNOImg" id="noww">现有社团</span></div><hr>
											<div><span class="leftNavNOImg" id="club-man">社团管理员</span></div><hr>
											
											<div class="leftNavImg"><img src="./img/images/circleArrows.png"><span>社联相关</span></div><hr>
											<div><span class="leftNavNOImg" id="member">成员管理</span></div><hr>
											<div><span class="leftNavNOImg" id="activity">活动发布</span></div><hr>
											<div class="leftNavImg"><img src="./img/images/circleArrows.png"><span>审核信息</span></div><hr>
											<div><span class="leftNavNOImg" id="yearReg">年度注册审核</span></div><hr>
											<div><span class="leftNavNOImg" id="activeReg">活动申请审核</span></div><hr>
											<div class="leftNavImg"><img src="./img/images/circleArrows.png"><span>权限管理</span></div><hr>
											<div><span class="leftNavNOImg" id="msgFeedback">信息反馈</span></div><hr>
											<div><span class="leftNavNOImg" id="scuAccount">账号管理</span></div><hr>
										</div>
									</div>
			<div class="bg">
        <iframe id="ifr" src="http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/SCU/web/admin.php?controller=sManage&method=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" scrolling="yes" width="100%" height="700px" frameborder="0"></iframe>
			</div>
		</article>
		<?php echo '<script'; ?>
>
			
				window.onlond = function(){
					document.getElementById('ifr').style.overflowX = 'hidden';
				}
			
			
		<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
