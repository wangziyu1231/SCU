<?php
/* Smarty version 3.1.30, created on 2017-10-26 09:08:04
  from "F:\www\SCU\tpls\admin\scuManagement_6.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1a5f4e5dbe4_46539740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ddcce53d9b3d48e9ce2058bf2123e10d00cfaf' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\scuManagement_6.html',
      1 => 1509008699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1a5f4e5dbe4_46539740 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="./img/js/admin/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jsurl']->value)===null||$tmp==='' ? 'scuManagement_6.js' : $tmp);?>
"><?php echo '</script'; ?>
>
	<title>
	</title>
</head>
<body style="overflow-x: hidden">
				
			<!--模块=============权限管理-信息反馈-==================-->
			<div  class="right" id="memberDiv">
				<div class="nowPosition"><span>你现在的位置：权限管理>信息反馈</span></div>
				<div class="account-table">
					<table>
						<tr class="account-title">
							<td width="50%">主题</td>
							<td>日期</td>
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
              <td><?php echo $_smarty_tpl->tpl_vars['value']->value->msg_title;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['value']->value->msg_date;?>
</td>
              <td><span id="account-search" class="account-op" onclick="view(<?php echo $_smarty_tpl->tpl_vars['value']->value->msg_id;?>
)">查看</span><span>|</span><span class="account-op2" id="account-reply" onclick="reply(<?php echo $_smarty_tpl->tpl_vars['value']->value->msg_who;?>
)">回复</span><span>|</span><span class="account-op3" id="account-del" onclick="del(<?php echo $_smarty_tpl->tpl_vars['value']->value->msg_id;?>
)">删除</span></td>
						</tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp) == null) {?><span style="position:relative;display:inline-block;left:40%">暂无信息反馈内容</span><?php }?>
          <!-- 页码  --!>
					<div class="cutPages">
							<a href="admin.php?controller=sManage&method=msgFeedbackPage&page=1" class="firstAndLast"><span>首页</span></a>
							<?php if ($_smarty_tpl->tpl_vars['p']->value-1 < 1) {?>
							<?php $_smarty_tpl->_assignInScope('pp', 1);
?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('pp', $_smarty_tpl->tpl_vars['p']->value-1);
?>
							<?php }?>
							<a href="admin.php?controller=sManage&method=msgFeedbackPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span><<</span></a>
							<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp)+1 - (1) : 1-((($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<a href="admin.php?controller=sManage&method=msgFeedbackPage&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
							<a href="admin.php?controller=sManage&method=msgFeedbackPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span>>></span></a>
							<a href="admin.php?controller=sManage&method=msgFeedbackPage&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="firstAndLast"><span>尾页</span></a>
						</div>
				</div>	
				
		</div>


		<!-- 查看及回复弹出层 -->
		<div id="add-bg"></div>
			<div id="add-content2">
				<div class="add-title">
					<span id="change"></span>
					<img id="add-close" src="./img/images/addAlertTopX.png">
				</div>
				<div id="add-form" class="add-form">
				  <div>
					  <span>主题</span>
						<input id="reply-title" type="text" />
					</div>
					<div class="add-input">
						<span class="weizhi">内容</span>
						<textarea id="reply-textarea"></textarea>
					</div>
					<div id="center">
					  <input id='center-sub' class='input-sub' type='submit' name='' value='确定' onclick="replySubmit()">
					  <input id='center-sub2' class='input-sub' type='submit' name='' value='返回'>	
					</div>
			  </div>
      </div>
		
		<!-- 确认是否删除 -->

		<div id="del">
			<div class="del-span"><span>确定删除该条反馈</span></div>
			<div class="del-input">
				<input type="button" onclick="dell()" name="" value="确定">
				<input type="button" id="cn" name="" value="取消">
			</div>
			
		</div>


</body>
</html>
<?php }
}
