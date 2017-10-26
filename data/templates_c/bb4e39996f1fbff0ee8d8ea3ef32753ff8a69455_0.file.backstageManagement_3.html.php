<?php
/* Smarty version 3.1.30, created on 2017-10-26 09:10:11
  from "F:\www\SCU\tpls\admin\backstageManagement_3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1a67363e943_02319344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb4e39996f1fbff0ee8d8ea3ef32753ff8a69455' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\backstageManagement_3.html',
      1 => 1509008699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1a67363e943_02319344 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<meta charset="utf-8">
	<title>校社联后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="./img/css/admin/backstageManagement.css">
	<link rel="stylesheet" type="text/css" href="./img/css/admin/rightReg.css">
	<?php echo '<script'; ?>
 src="./img/js/admin/laydate/laydate.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/backstageManagement_3.js"><?php echo '</script'; ?>
>
	
</head>
<body>

			<div class="rightReg" id="rightReg"> 
				<div class="regForm">
				<div class="currentPosition"><span>当前位置：管理社团>年度注册</span></div><hr>
				<div class="formIformation">
					<form action="admin.php?controller=socSubmit&method=regSubmit" method="post" onsubmit="return check3()">
						<div id="inputDiv">
							<div class="text">
								<span>社团名称</span><input type="text" name="sName"  value=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sName']->value)===null||$tmp==='' ? '' : $tmp);?>
>
								<span class="rightSpan">社团类型</span><select class="sel" name="sType">
									<option>选择一个社团类型</option>
									<option value="学术科技类">学术科技类</option>
									<option value="文娱文化类">文娱文化类</option>
									<option value="体育健身类">体育健身类</option>
									<option value="综合实践类">综合实践类</option>
								</select>
							</div>
							<div class="text">
								<span>创始人</span><input type="text" name="sFounder">
								<span class="rightSpan">创始时间</span><input name="date_of_found" id="date" class="laydate-icon" onclick="laydate()">
							</div>
							<div class="text">
								<span>指导老师</span><input type="text" name="tName">
								<span class="rightSpan">联系方式</span><input type="text" name="tTel">
								
							</div> 
							<div class="text">
								<span>现任负责人</span><input type="text" name="nhName">
								<span class="rightSpan">联系方式</span><input type="text" name="nhTel">
								
							</div>
							<div class="text">
								<span>财务负责人</span><input type="text" name="fhName">
								<span class="rightSpan">联系方式</span><input type="text" name="fhTel">
								
							</div>
							<div class="text">
								<span>入会条件</span><input type="text" name="joinCondition">
								<span class="rightSpan">会员人数</span><input type="text" name="vNum">
							</div>
						</div>
						<div id="textareaDiv">
							<div>
							<span class="textareas">社团宗旨</span>
							<textarea name="sAim"></textarea>
							</div>
							<div>
							<span class="textareas">社团简介</span>
							<textarea name="sSummary">
								
							</textarea>
							</div>
							<div>
							<span class="textareas">年度荣誉</span>
							<textarea name="sGlory">
								
							</textarea>
							</div>
						</div>
						<div class="notice">
							<p>注：1.此表由社团负责人在每年九月份开学三周内填写，并上交学生社团联合会存档，如有特殊原因需要更改的请及时与学生社团联合会联系，并说明情况，由校团委、学生社团联合会批准方可更改</p>
							<p>2. 本表应备附件：</p>
							<p>A.需附经费使用详细情况：经费来源、财务状况和物资情况；</p>
  							<p>B.需附社团年度计划；</p>
						</div>
						<input type="submit" class="submit" name="" value="提交">
					</form>
					</div>
				</div>	
		</div>
</body>
</html>
<?php }
}
