<?php
/* Smarty version 3.1.30, created on 2016-11-23 11:45:26
  from "F:\www\SCU\tpls\backstageManagement_1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835815691c0a3_13828262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56311afe3043ab1811f218dd71781a2908eb32d6' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\backstageManagement_1.html',
      1 => 1479901041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835815691c0a3_13828262 (Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="right"  id="rightNow">
			<div class="rightIfo">
				<div class="currentPosition"><span>你当前的位置：管理成员>现有成员</span></div>
				<div class="information">
					<div class="rightNav">
						<ul>
							<li class="userSearch" style="cursor:pointer"><span  class="userSearched" >用户查询</span></li>
							<li class="seniorSearch" style="cursor:pointer"><span class="seniorSearched" >高级查询</span></li>
						</ul>
					</div>
					<div class="searchIframe"  >
						<iframe src="./tpls/iframe.html" scrolling="yes"></iframe>
					</div>
					<div class="searchContent" >
						<span>用户名</span><input type="text" name="userName" id="userName">
						<span class="us">姓名</span><input type="text" name="userName" id="userName">
						<input type="button" name="" id="btn" value="查询">
					</div>
				</div>
				<div class="cutPages">
					<ul>
						<li><a href=""><img  class="imgLeft" src="./img/images/arrows.png"></a></li>
						<li><a href=""><span>1</span></a></li>
						<li><a href=""><span>2</span></a></li>
						<li><a href=""><span>3</span></a></li>
						<li><a href=""><img class="imgRight" src="./img/images/arrows.png"></a></li>
					</ul>
				</div>
				<div class="searchTable">
					<table>
					<form action="admin.php?controller=socmem&method=del" method="post">
						<tr class="bgk">
							<td style="width: 5%;"><input type="checkbox" name="" id="all" onclick="changeState()">全选</td>
							<td style="width: 10%">姓名</td>
							<td style="width: 10%">性别</td>
							<td style="width: 10%">学号</td>
							<td style="width: 10%">系别与专业</td>
							<td style="width: 12%">手机号码（长短号）</td>
							<td style="width: 10%">微信</td>
							<td style="width: 10%">备注</td>
							
						</tr>
						
						<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
							<tr>
							<td style="width: 5%;"><input type="checkbox" name="smNO" value="<?php echo $_smarty_tpl->tpl_vars['smNO']->value;?>
" class="one" ></td>
							<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['smName']->value;?>
</td>
							<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['smSex']->value;?>
</td>
							<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['smUsername']->value;?>
</td>
							<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['smDep']->value;?>
</td>
							<td style="width: 30%"><?php echo $_smarty_tpl->tpl_vars['smTel']->value;?>
</td>
							<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['smWechat']->value;?>
</td>
							<td style="width: 10%"></td>
						</tr>
						<?php }
}
?>

						
						
							
					
					</table>
					<input type="submit" class="allSBtn" name="" value="删除所选">
					</form>
				</div>
				</div>
			</div><?php }
}
