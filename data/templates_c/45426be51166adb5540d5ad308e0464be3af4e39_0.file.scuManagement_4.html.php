<?php
/* Smarty version 3.1.30, created on 2017-10-26 09:08:03
  from "F:\www\SCU\tpls\admin\scuManagement_4.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1a5f33bd1a7_26055440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45426be51166adb5540d5ad308e0464be3af4e39' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\scuManagement_4.html',
      1 => 1509008699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/scuManagement_4_2.html' => 1,
  ),
),false)) {
function content_59f1a5f33bd1a7_26055440 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./img/css/admin/scuManagement.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/scuManagement.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/scuManagement_4.js"><?php echo '</script'; ?>
>
	<style>
		
		body{
			overflow-y: hidden;
		}
		.bg{
			background: #eeeced;
			width: 100%;
			height: 44rem;
		}
	</style>
</head>
<body style="overflow-x: hidden">
	<!--==模块====审核信息=活动注册审核========================-->
			
<div class="right" id="acyRegDiv">
	<div class="nowPosition"><span>你现在的位置：社团相关>活动注册审核</span></div>
	<div class="rightTable">
		<table class="activityTable">
			<tr class="bgk">
				<td style="width: 30%;">活动名称</td>
				<td style="width: 10%">负责人</td>
				<td style="width: 20%">申请时间</td>
				<td style="width: 10%">审核状态</td>
				<td style="width: 30%">操作</td>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp), 'value', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 1) {?>
					<?php $_smarty_tpl->_assignInScope('class', "oneLine");
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('class', "twoLine");
?>
				<?php }?>
			<tr class=<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
>
				<td style="width: 30%;"><?php echo $_smarty_tpl->tpl_vars['value']->value->aName;?>
</td>
				<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['value']->value->applicantName;?>
</td>
				<td style="width: 20%"><?php echo $_smarty_tpl->tpl_vars['value']->value->date_of_entry;?>
</td>
				<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['value']->value->review;?>
</td>
				<td style="width: 30%">
					<span class="operation" id="activityOperationChange" onclick="check(<?php echo $_smarty_tpl->tpl_vars['value']->value->aNO;?>
)">审核
				</td>															
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp) == null) {?><span style="position:relative;display:inline-block;left:40%">暂无未活动审核</span><?php }?>
		<div class="cutPages">
				<a href="admin.php?controller=sManage&method=activeRegGetpage&page=1" class="firstAndLast"><span>首页</span></a>
				<?php if ($_smarty_tpl->tpl_vars['p']->value-1 < 1) {?>
				<?php $_smarty_tpl->_assignInScope('pp', 1);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('pp', $_smarty_tpl->tpl_vars['p']->value-1);
?>
				<?php }?>
				<a href="admin.php?controller=sManage&method=activeRegGetpage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span><<</span></a>
				<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp)+1 - (1) : 1-((($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
					<a href="admin.php?controller=sManage&method=activeRegGetpage&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
				<a href="admin.php?controller=sManage&method=activeRegGetpage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span>>></span></a>
				<a href="admin.php?controller=sManage&method=activeRegGetpage&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="firstAndLast"><span>尾页</span></a>
		</div>
		<!--<div class="change_table_check">
					<input type="submit" class="change_check_sbt" id="check_return2" name="" value="返回">
    </div>-->
	</div>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:admin/scuManagement_4_2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
