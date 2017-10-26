<?php
/* Smarty version 3.1.30, created on 2017-10-26 09:07:56
  from "F:\www\SCU\tpls\admin\scuManagement_3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1a5ecebe570_34938703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d5adcaaa963aeeb79f57f2106d38da514ff4e7' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\scuManagement_3.html',
      1 => 1509008699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/scuManagement_3_2.html' => 1,
  ),
),false)) {
function content_59f1a5ecebe570_34938703 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="./img/js/admin/scuManagement_3.js"><?php echo '</script'; ?>
>
</head>
<body style="overflow-x: hidden">
	<!--模块=============社联相关-现有社团-==================-->


<div class="right" id="now">
	<div class="nowPosition"><span>你现在的位置：社团相关>现有社团</span></div>
	<div class="rightle">
		<form method="POST" action="admin.php?controller=sManage&method=now">
					<div class="userSearch">
						<div class="titleBgk">
							<div class="userSearchS"><span class="userSearchSpan">用户查询</span></div>
						</div>
						<div class="formIptBgk">
							<div class="select">
								<span>选择类型：</span>
								<select name="department">
									<option value="0">不限</option>
									<option value="1">学术科技类</option>
									<option value="2">体育健身类</option>
									<option value="3">文娱文化类</option>
									<option value="4">综合实践类</option>
								</select>
							</div>
							<div class="selectNextDiv">
								<span>社团名称</span><input class="ipt" type="text" name="realname"></div>
								<input type="submit" class="submitSbt" value="查询">
						</div>
					</div>
		</form>
				<div class="rightTable">
					<table>
						<tr class="bgk">
							<td style="width: 3%;">全选</td>
							<td style="width: 10%">社团名</td>
							<td style="width: 10%">社团类型</td>
							<td style="width: 10%">负责人</td>
							<td style="width: 10%">成立时间</td>
							<td style="width: 12%">指导老师</td>
							<td style="width: 10%">会员人数</td>
							<td style="width: 10%">操作</td>
						</tr>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp), 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['k']->value%2 == 0) {?>
								<tr class="twoLine">
							<?php } else { ?>
								<tr class="oneLine">
							<?php }?>
									<td style="width: 3%;"><input type="checkbox" class="one" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value->sNO;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
"></td>
									<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['v']->value->sName;?>
</td>
									<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['v']->value->sType;?>
</td>
									<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['v']->value->hName;?>
</td>
									<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['v']->value->date_of_found;?>
</td>
									<td style="width: 12%"><?php echo $_smarty_tpl->tpl_vars['v']->value->tName;?>
</td>
									<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['v']->value->vNum;?>
</td>
									<td style="width: 10%">
									<span class="operationLook" onclick="getData(<?php echo $_smarty_tpl->tpl_vars['v']->value->sNO;?>
)">查看</span><span class="operationLine">|</span>
									<span class="operationDel" onclick="dell()">删除</span>
									</td>
								</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>
					<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp) == null) {?>
					<div style="text-align:center">当前没有社团</div>
					<?php } else { ?>
						<input type="checkbox" name="all" id="all" onclick="changeState()"/>全选
						<div class="cutPages">
							<a href="admin.php?controller=sManage&method=nowgetPage&page=1" class="firstAndLast"><span>首页</span></a>
							<?php if ($_smarty_tpl->tpl_vars['p']->value-1 < 1) {?>
							<?php $_smarty_tpl->_assignInScope('pp', 1);
?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('pp', $_smarty_tpl->tpl_vars['p']->value-1);
?>
							<?php }?>
							<a href="admin.php?controller=sManage&method=nowgetPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span><<</span></a>
							<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp)+1 - (1) : 1-((($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<a href="admin.php?controller=sManage&method=nowgetPage&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['p']->value) {?>class="ebgk"<?php } else { ?>class="fbgk"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
							<a href="admin.php?controller=sManage&method=nowgetPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span>>></span></a>
							<a href="admin.php?controller=sManage&method=nowgetPage&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="firstAndLast"><span>尾页</span></a>
						</div>
					<?php }?>
				</div>
	</div>

	<div class="transparent_bgk_del" style="display: none">
			<div class="activityAlertDelDiv">
					<p class="activityAlertP">确定删除所选社团的全部信息</p>
						<div class="activityAlertSbm">
							<input type="button" onclick="del()" value="确定">
							<input type="button" id="OperationCancel" value="取消">
						</div>
			</div>
  </div>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:admin/scuManagement_3_2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
