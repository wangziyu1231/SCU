<?php
/* Smarty version 3.1.30, created on 2017-10-25 17:38:33
  from "F:\xampp\htdocs\SCU\tpls\admin\scuManagement_1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f0aff91c4312_58720096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af72e2d2008e8cfc860f15b8e0fb59a2b7b9b130' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\admin\\scuManagement_1.html',
      1 => 1505466244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/scuManagement_1_1.html' => 2,
  ),
),false)) {
function content_59f0aff91c4312_58720096 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="./img/css/admin/scuManagement.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/scuManagement.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/scuManagement_1.js"><?php echo '</script'; ?>
>
	<title>
	</title>
</head>
<body style="overflow-x: hidden">
				
			<!--模块=============社联相关-成员管理-==================-->
			<div  class="right" id="memberDiv">
				<div class="nowPosition"><span>你现在的位置：社联相关>成员管理</span></div>
				<div class="rightle">
				<form method="POST" action="admin.php?controller=sManage&method=scuShow">
					<div class="userSearch">
						<div class="titleBgk">
							<div class="userSearchS"><span class="userSearchSpan">用户查询</span></div>
						</div>
						<div class="formIptBgk">
							<div class="select">
								<span>选择部门：</span>
								<select name="department">
									<option value="0">不限</option>
									<option value="1">办公室</option>
									<option value="2">人力资源部</option>
									<option value="3">财务监控部</option>
									<option value="4">外联部</option>
									<option value="5">文娱部</option>
									<option value="6">网络信息部</option>
									<option value="7">会员服务部</option>
									<option value="8">宣传策划部</option>
								</select>
							</div>
							<div class="selectNextDiv">
								<span>姓名</span><input class="ipt" type="text" name="realname"></div>
								<input type="submit" class="submitSbt" name="" value="查询">
						</div>
					</div>
				</form>
					<div class="rightTable">
						<table>
						<tr class="bgk">
							<td style="width: 5%;">全选</td>
							<td style="width: 10%">姓名</td>
							<td style="width: 10%">学号</td>
							<td style="width: 10%">部门</td>
							<td style="width: 10%">职位</td>
							<td style="width: 12%">手机</td>
							<td style="width: 10%">宿舍</td>
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
								<td style="width: 5%;"><input type="checkbox" name="smNo" class="one" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->ID;?>
"></td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['value']->value->realname;?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['value']->value->username;?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['value']->value->department;?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['value']->value->job;?>
</td>
								<td style="width: 12%"><?php echo $_smarty_tpl->tpl_vars['value']->value->phone;?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['value']->value->dorm;?>
</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</table>
						<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp) != null) {?><input type="checkbox" name="all" id="all" onclick="changeState()"/>全选<?php } else { ?><span style="position:relative;display:inline-block;left:40%">没有查询结果</span><?php }?>
						
						<div class="cutPages">
							<a href="admin.php?controller=sManage&method=getPage&page=1" class="firstAndLast"><span>首页</span></a>
							<?php if ($_smarty_tpl->tpl_vars['p']->value-1 < 1) {?>
							<?php $_smarty_tpl->_assignInScope('pp', 1);
?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('pp', $_smarty_tpl->tpl_vars['p']->value-1);
?>
							<?php }?>
							<a href="admin.php?controller=sManage&method=getPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span><<</span></a>
							<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp)+1 - (1) : 1-((($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 1 : $tmp))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<a href="admin.php?controller=sManage&method=getPage&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['p']->value) {?>class="ebgk"><?php } else { ?>class="fbgk"<?php }?><span><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
							<a href="admin.php?controller=sManage&method=getPage&page=<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" class="fbgk"><span>>></span></a>
							<a href="admin.php?controller=sManage&method=getPage&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="firstAndLast"><span>尾页</span></a>
						</div>
						<div class="del">
							<input type="button" id="delSelect" name="" onclick="dell()" value="删除所选">
							<input type="button" id="addSelect" name="" value="添加成员">
							<input type="button" id="changeSelect" name="" onclick="update()" value="更改所选">
						</div>
						
						
						<!--删除成员-->
						<div class="alert">
							<p class="alertP">确定删除所选成员的全部信息</p>
								<div class="alertSbm">
									<input type="button" onclick="del()" value="确定">
									<input type="button" id="cancel" name="" value="取消">
								</div>
						</div>
						
						<!--添加成员-->
						<div class="addAlert">
							<div class="addAlertTop" ><span>添加成员</span><img id="addAlertTopX" class="addAlertTopX" src="./img/images/addAlertTopX.png"></div>
						<form method="POST" action="admin.php?controller=sManage&method=scuAdd">
							<div class="addAlertSelect">
								<span class="addAlertFormSpan">选择职位</span>
								<select name="department">
									<option value="0">选择部门</option>
									<option value="1">办公室</option>
									<option value="2">人力资源部</option>
									<option value="3">财务监控部</option>
									<option value="4">外联部</option>
									<option value="5">文娱部</option>
									<option value="6">网络信息部</option>
									<option value="7">会员服务部</option>
									<option value="8">宣传策划部</option>
								</select>
								<select name="job">
									<option value="0">选择职位</option>
									<option value="1">主席团</option>
									<option value="2">部长</option>
									<option value="3">副部长</option>
									<option value="4">干事</option>
								</select>
							</div>
						<div class="addAlertIptAll">
							<div class="addAlertIpt">
								<span>姓名</span><input type="text" name="realname">
								<span>学号</span><input type="text" name="username">
							</div>
							<div class="addAlertIpt">
								<span>系名</span><input type="text" name="dname">
								<span>专业</span><input type="text" name="major">
							</div>
							<div class="addAlertIpt">
								<span>班级</span><input type="text" name="class">
								<span>宿舍</span><input type="text" name="dorm">
							</div>
							<div class="addAlertIpt" id="a">
								<span>手机</span><input type="text" name="phone">
								<span>微信</span><input type="text" name="wechat">
							</div>
							
							
							<div class="addAlertIptAdmin1">
								<span>管理员账号</span><input type="text" name="admin_usr"><br>
								<span class="passWord">密码</span><input type="password" name="admin_pwd">
							</div>
							<input type="submit"  class="addAlertSbt" name="" value="提交">
						</div>
						</form>
						</div>
						<?php $_smarty_tpl->_subTemplateRender("file:admin/scuManagement_1_1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						
						
						
					</div>
					
				</div>
			</div>
      <?php $_smarty_tpl->_subTemplateRender("file:admin/scuManagement_1_1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



</body>
</html>
<?php }
}
