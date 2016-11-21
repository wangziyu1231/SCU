<?php
/* Smarty version 3.1.30, created on 2016-11-19 14:23:07
  from "F:\www\SCU\tpls\activity-release.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5830604bc1fd28_48123784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cc53bd8d7e77f25609e81102f022500d2adff9b' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\activity-release.html',
      1 => 1479565281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5830604bc1fd28_48123784 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
	<head>
		<title>校社联活动发布</title>
		<meta charset="utf-8"/>
	</head>
		
	<body>
		<form action="./main.php?controller=sManage&method=activity_apply" method="POST">
			活动标题<input type="text" id='aTitle' name='aTitle'/><br/>
			活动概要<input type="text" id='aSummary' name='aSummary'/><br/>
			活动内容<input type="textarea" id='aContent' name='aContent'/><br/>
			活动图片<input type="text" id="aImage" name="aImage"/>
			<input type="submit" value="发布"/>
		</form>
	</body>
</html><?php }
}
