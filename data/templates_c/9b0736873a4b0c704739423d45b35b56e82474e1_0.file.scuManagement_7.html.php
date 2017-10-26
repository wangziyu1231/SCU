<?php
/* Smarty version 3.1.30, created on 2017-10-26 09:08:06
  from "F:\www\SCU\tpls\admin\scuManagement_7.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1a5f68ca526_63897726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b0736873a4b0c704739423d45b35b56e82474e1' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\scuManagement_7.html',
      1 => 1509008699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1a5f68ca526_63897726 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="./img/js/admin/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jsurl']->value)===null||$tmp==='' ? 'scuManagement_7.js' : $tmp);?>
"><?php echo '</script'; ?>
>
	<title>
	</title>
</head>
<body style="overflow-x: hidden">
				
			<!--模块=============权限管理-账号管理-==================-->
			<div  class="right" id="memberDiv">
				<div class="nowPosition"><span>你现在的位置：权限管理>账号管理</span></div>
				<div class="account-table">
					<table>
						<tr class="account-title">
							<td>用户名</td>
							<td>负责人</td>
							<td>职位</td>
							<td>联系方式</td>
							<td>系别</td>
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
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value->username;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['value']->value->realname;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['value']->value->work;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['value']->value->phone;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['value']->value->department;?>
</td>
              <td><span id="account-change" class="account-op" onclick="update(<?php echo $_smarty_tpl->tpl_vars['value']->value->ID;?>
)">修改</span><span>|</span><span class="account-op2" id="account-del" onclick="del(<?php echo $_smarty_tpl->tpl_vars['value']->value->ID;?>
)">删除</span></td>
						</tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp) == null) {?><span style="position:relative;display:inline-block;left:40%">当前没有账号</span><?php }?>
          
					<div class="cutPages">
						<a href="admin.php?controller=sManage&method=scuAccountPage&page=1" class="firstAndLast"><span>首页</span></a>
						<?php if ($_smarty_tpl->tpl_vars['p']->value-1 < 1) {?>
						<?php $_smarty_tpl->_assignInScope('pp', 1);
?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('pp', $_smarty_tpl->tpl_vars['p']->value-1);
?>
						<?php }?>
						<a href="admin.php?controller=sManage&method=scuAccountPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span><<</span></a>
						<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp)+1 - (1) : 1-((($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
							<a href="admin.php?controller=sManage&method=scuAccountPage&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
						<a href="admin.php?controller=sManage&method=scuAccountPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span>>></span></a>
						<a href="admin.php?controller=sManage&method=scuAccountPage&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="firstAndLast"><span>尾页</span></a>
					</div>
					<button id="account-add">添加新管理员</button>
				</div>	
		</div>


		<!-- 添加成员的弹出层 -->
		<div id="add-bg"></div>
			<div id="add-content">
				<div class="add-title">
					<span id="change"></span>
					<img id="add-close" src="./img/images/addAlertTopX.png">
				</div>
				<div class="add-form">
					<div class="add-input">
						<label class="label2">用户名</label>
						<input class="input" type="text" name="username" id="username" onblur="exist()"/>
						<label class="label1">负责人</label>
						<input class="input" type="text" name="realname" id="realname"/>
					</div>
					<div class="add-input">
						<label class="label2">职位</label>
						<input class="input" type="text" name="work" id="work" />
						<label class="label1">联系方式</label>
						<input class="input" type="text" name="phone" id="phone"/>
					</div>
					<div class="add-input">
						<label class="label2">系别</label>
						<input class="input" type="text" name="department" id="department"/>
						<label class="label1">专业</label>
						<input class="input" type="text" name="major" id="major"/>
					</div>
					<div class="add-input">
						<label class="label2">新密码</label>
						<input class="input" type="password" name="password" id="password"/>
						<label class="label1">确认密码</label>
						<input class="input" type="password" name="rpassword" id="rpassword" />
					</div>
					<span class="add-mess" id="add-mess"></span><br />
					<input type="button" class="add-submit" id="add-submit" name="" value="确定">
					<input type="button" class="add-submit" id="add-submit2" onclick="add()" name="" value="确定">

				</div>
			</div>
		


		<!-- 确认是否删除 -->

		<div id="del">
			<div class="del-span"><span>确定删除该账号</span></div>
			<div class="del-input">
				<input type="button" name="" value="确定" onclick="dell()">
				<input type="button" id="cn" name="" value="取消">
			</div>
			
		</div>
		

	
</body>
</html>
<?php }
}
