<?php
/* Smarty version 3.1.30, created on 2017-10-25 17:49:16
  from "F:\xampp\htdocs\SCU\tpls\admin\scuManagement_5.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f0b27c20a1f8_03240445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecf5e1a6e2fcdad7913c62420deef8dce7c900c8' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\admin\\scuManagement_5.html',
      1 => 1507645671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f0b27c20a1f8_03240445 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="./img/js/admin/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jsurl']->value)===null||$tmp==='' ? 'scuManagement_5.js' : $tmp);?>
"><?php echo '</script'; ?>
>
</head>
<body style="overflow-x: hidden">
	
<div class="right" id="activeShow">
	<div class="nowPosition"><span>你现在的位置：社联相关>活动发布</span></div>
	<div class="rightTable" style="width: 96%">
		<table>
			<tr class="bgk">
				<td style="width: 15%">活动名称</td>
				<td style="width: 10%">负责人</td>
				<td style="width: 10%">发布时间</td>
				<td style="width: 15%">展示位置</td>
				<td style="width: 8%">操作</td>
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
				<td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['value']->value->aName;?>
</td>
				<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['value']->value->hName;?>
</td>
				<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['value']->value->date_of_entry;?>
</td>
        <td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['value']->value->location;?>

          <?php if ($_smarty_tpl->tpl_vars['value']->value->location == "公告") {?>
              <?php echo $_smarty_tpl->tpl_vars['value']->value->category;?>

          <?php }?>
        </td>
				<td style="width: 8%">
          <form method="POST" class="form1" action="admin.php?controller=sManage&method=activityUpdate" id="myform">
            <input style="display:none" type="text" name="aNO" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->aNO;?>
"/>
            <span class="operationLook" onclick="test()">修改</span><span class="operationLine">|</span>
            <span class="operationDel" onclick="dell(<?php echo $_smarty_tpl->tpl_vars['value']->value->aNO;?>
)">删除</span>
          </form>
				
				</td>							
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp) == null) {?><span style="position:relative;display:inline-block;left:40%">暂无发布的活动</span><?php }?>
		<div class="cutPages">
				<a href="admin.php?controller=sManage&method=activityGetpage&page=1" class="firstAndLast"><span>首页</span></a>
				<?php if ($_smarty_tpl->tpl_vars['p']->value-1 < 1) {?>
				<?php $_smarty_tpl->_assignInScope('pp', 1);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('pp', $_smarty_tpl->tpl_vars['p']->value-1);
?>
				<?php }?>
				<a href="admin.php?controller=sManage&method=activityGetpage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span><<</span></a>
				<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp)+1 - (1) : 1-((($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
					<a href="admin.php?controller=sManage&method=activityGetpage&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
				<a href="admin.php?controller=sManage&method=activityGetpage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span>>></span></a>
				<a href="admin.php?controller=sManage&method=activityGetpage&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="firstAndLast"><span>尾页</span></a>
		</div>
		<div class="right_sbt"><input type="submit" id="right_sbts" onclick="add()" value="发布新活动"></div>
	</div>
	
	<div class="actShow_transparent_bgk_del" style="display: none">
			<div class="activityAlertDelDiv">
					<p class="activityAlertP">确定删除该活动</p>
						<div class="activityAlertSbm">
							<input type="submit" name="" onclick="del()" value="确定">
							<input type="submit" id="OperationCancel" name="" value="取消">
						</div>
			</div>
	</div>
</div>
</body>
</html>
<?php }
}
