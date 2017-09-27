<?php
/* Smarty version 3.1.30, created on 2017-09-26 12:18:46
  from "F:\xampp\htdocs\SCU\tpls\admin\scuManagement_8.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca298635ee63_17814560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a3ef9d58638b131c493084b29d2a1357f8fcbf' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\admin\\scuManagement_8.html',
      1 => 1502456248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ca298635ee63_17814560 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./img/css/admin/scuManagement.css">
	<link rel="stylesheet" type="text/css" href="./img/css/admin/account.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/scuManagement.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="./img/js/admin/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jsurl']->value)===null||$tmp==='' ? 'scuManagement_8.js' : $tmp);?>
"><?php echo '</script'; ?>
>
	<title>
	</title>
</head>
<body style="overflow-x: hidden">
				
			<!--模块=============权限管理-账号管理-==================-->
			<div  class="right" id="memberDiv">
				<div class="nowPosition"><span>你现在的位置：社团相关>社团管理员</span></div>
				<div class="account-table">
					<table>
						<tr class="account-title">
							<td>所属社团</td>
							<td>用户名</td>
							<td>操作</td>
						</tr>
			  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp), 'value', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
				  <?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 1) {?>
					  <?php $_smarty_tpl->_assignInScope('class', "account-fff");
?>
				  <?php } else { ?>
					  <?php $_smarty_tpl->_assignInScope('class', "account-fafa");
?>
				  <?php }?>
          <tr class=<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value->sName;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value->sUsername;?>
</td>
              <td><span id="account-change" class="account-op" onclick="update(<?php echo $_smarty_tpl->tpl_vars['value']->value->sNo;?>
)">修改</span><td>
						</tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp) == null) {?><span style="position:relative;display:inline-block;left:40%">当前社团管理员账号</span><?php }?>
          
					<div class="cutPages">
						<a href="admin.php?controller=sManage&method=socAccountPage&page=1" class="firstAndLast"><span>首页</span></a>
						<?php if ($_smarty_tpl->tpl_vars['p']->value-1 < 1) {?>
						<?php $_smarty_tpl->_assignInScope('pp', 1);
?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('pp', $_smarty_tpl->tpl_vars['p']->value-1);
?>
						<?php }?>
						<a href="admin.php?controller=sManage&method=socAccountPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span><<</span></a>
						<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp)+1 - (1) : 1-((($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
							<a href="admin.php?controller=sManage&method=socAccountPage&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="ebgk"><span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span></a>
						<?php }
}
?>

						<?php if ($_smarty_tpl->tpl_vars['p']->value+1 > $_smarty_tpl->tpl_vars['page']->value) {?>
							<?php $_smarty_tpl->_assignInScope('pp', $_smarty_tpl->tpl_vars['page']->value);
?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('pp', $_smarty_tpl->tpl_vars['p']->value+1);
?>
						<?php }?>
						<a href="admin.php?controller=sManage&method=socAccountPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span>>></span></a>
						<a href="admin.php?controller=sManage&method=socAccountPage&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="firstAndLast"><span>尾页</span></a>
					</div>
				</div>	
		</div>


		<!-- 修改社团管理员信息-->
		<div id="add-bg"></div>
			<div id="add-content">
				<div class="add-title">
					<span id="change"></span>
					<img id="add-close" src="./img/images/addAlertTopX.png">
				</div>
				<div class="add-form">
					<div class="add-input">
						<label class="label2">用户名</label>
						<input class="input" type="text" name="sUsername" id="sUsername"  disabled="true"/>
						<label class="label1">所属社团</label>
						<input class="input" type="text" name="sName" id="sName" disabled="true"/>
					</div>
					<div class="add-input">
						<label class="label2">新密码</label>
						<input class="input" type="password" name="sPassword" id="password"/>
						<label class="label1">确认密码</label>
						<input class="input" type="password" name="rpassword" id="rpassword"/>
					</div>
					<span class="add-mess" id="add-mess"></span><br />
					<input type="button" class="add-submit" id="add-submit" name="" value="确定">
				</div>
			</div>
		
</body>
</html>
<?php }
}
