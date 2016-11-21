<?php
/* Smarty version 3.1.30, created on 2016-11-20 13:21:24
  from "F:\www\SCU\tpls\regform.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5831a35493e6d4_81750596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a908e73c2625c8381de216f1770adf02c88e01ae' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\regform.html',
      1 => 1479648079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5831a35493e6d4_81750596 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
	<head>
		<title>社团注册审核</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<table width="300" border="1">
		  <caption>
			社团注册表
		  </caption>
		  <tr>
			<td>编号</td>
			<td><span id="sNo" name='sNo'><?php echo $_smarty_tpl->tpl_vars['sNO']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>社团名称</td>
			<td><span id="sName" name='sName'><?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>社团类型</td>
			<td><span id="sType" name='sType'><?php echo $_smarty_tpl->tpl_vars['sType']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>创始人</td>
			<td><span id="sFounder" name='sFounder'><?php echo $_smarty_tpl->tpl_vars['sFounder']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>创世时间</td>
			<td><span id="date_of_found" name='date_of_found'><?php echo $_smarty_tpl->tpl_vars['date_of_found']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>注册时间</td>
			<td><span id="date_of_entry" name='date_of_entry'><?php echo $_smarty_tpl->tpl_vars['date_of_entry']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>指导老师</td>
			<td><span id="tName" name='tName'><?php echo $_smarty_tpl->tpl_vars['tName']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>指导老师联系方式</td>
			<td><span id="tTel" name='tTel'><?php echo $_smarty_tpl->tpl_vars['tTel']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>现任负责人</td>
			<td><span id="nhName" name='nhName'><?php echo $_smarty_tpl->tpl_vars['nhName']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>现任负责人联系方式</td>
			<td><span id="nhTel" name='nhTel'><?php echo $_smarty_tpl->tpl_vars['nhTel']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>财务负责人</td>
			<td><span id="fhName" name='fhName'><?php echo $_smarty_tpl->tpl_vars['fhName']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>财务负责人联系方式</td>
			<td><span id="fhTel" name='fhTel'><?php echo $_smarty_tpl->tpl_vars['fhTel']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>入会条件</td>
			<td><span id="joinCondition" name='joinCondition'><?php echo $_smarty_tpl->tpl_vars['joinCondition']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>会员人数</td>
			<td><span id="vNum" name='vNum'><?php echo $_smarty_tpl->tpl_vars['vNum']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>社团宗旨</td>
			<td><span id="sAim" name='sAim'><?php echo $_smarty_tpl->tpl_vars['sAim']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>社团简介</td>
			<td><span id="sSummary" name='sSummary'><?php echo $_smarty_tpl->tpl_vars['sSummary']->value;?>
</span></td>
		  </tr>
		  <tr>
			<td>年度荣誉</td>
			<td><span id="sGlory" name='sGlory'><?php echo $_smarty_tpl->tpl_vars['sGlory']->value;?>
</span></td>
		  </tr>
		</table>
		
		<br/>
		<span onclick="" style="color:#00f">审核通过</span><br/>
		<span onclick="" style="color:#f00">审核不通过</span><input id="remark" name="remark" type="text"/>

	</body>
</html><?php }
}
