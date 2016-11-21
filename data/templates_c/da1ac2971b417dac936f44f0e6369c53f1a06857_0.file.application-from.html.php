<?php
/* Smarty version 3.1.30, created on 2016-11-19 14:00:10
  from "F:\www\SCU\tpls\application-from.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58305aea8b8f07_48906652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da1ac2971b417dac936f44f0e6369c53f1a06857' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\application-from.html',
      1 => 1477839279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58305aea8b8f07_48906652 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>广东金融学院学生品牌活动审批表</title>
	<style>
		*{
			margin: 0 auto;
		}
		table{
			white-space: normal;
			line-height: normal;
			font-weight: normal;
			font-size: 16px;
			font-variant: normal;
			text-align: center;
			border-collapse: collapse;
		}	
		td{
			border: 1px solid #000;
			border-collapse: collapse;
			margin: 0;
			width: 10%;
		}
		.notNull{
			color: #FF3333;
		}
	</style>	
</head>
<body onload= "init()" >
	<div id="mian">
		<table>
			<tbody>
				<tr>
					<td  class = "atitle" width="100%" colspan="4">广东金融学院学生品牌活动审批表</td>
				</tr>
				<tr class="WhiteBr">
					<td align="center" width="15%"><span class="notNull">*</span>申报社团</td>
					<td align="left" width="35%"><input class="application-corporate" type="text" name="application-corporate" ></td>
					<td align="center" width="15%"><span class="notNull">*</span>申报人</td>
					<td align="left" width="35%"><input class="application-userName" type="text" name="application-userName" ></td></td>
				</tr>
				<tr class="WhiteBr">
				<td align="center" width="15%"><span class="notNull">*</span>活动名称</td>
					<td align="left" width="35%"><input class="activityName" type="text" name="activityName" ></td></td>
					<td align="center" width="15%"><span class="notNull">*</span>活动时间</td>
					<td align="left" width="35%">
					<select name="year" id="year" onchange="swap_day()">
						<option value="1" selected = "selected">请选择</option>
					</select>年
				<select name="month" id="month" onchange="swap_day()"><option value="1" selected = "selected">请选择</option></select>月
				<select name="day" id="day"><option value="1" selected = "selected">请选择</option></select>日
				<select name="day" id="hour"><option value="1" selected = "selected">请选择</option></select>时
				<select name="day" id="minute"><option value="1" selected = "selected">请选择</option></select>分
				</td>
					
				</tr>
				<tr class="WhiteBr">
					<td align="center" width="15%"><span class="notNull">*</span>活动形式</td>
					<td align="left" width="35%"><input class="activityForm" type="text" name="activityForm" onsubmit="return submit_check()"></td>
					<td align="center" width="15%"><span class="notNull">*</span>活动地点</td>
					<td align="left" width="35%"><input class="activityLocation" type="text" name="activityLaction" onsubmit="return submit_check()"></td></td>
				</tr>
				<tr class="WhiteBr">
					<td align="center" width="15%"><span class="notNull">*</span>活动对象</td>
					<td align="left" width="35%"><input class="activityObject" type="text" name="activityObject" onsubmit="return submit_check()"></td>
					<td align="center" width="15%"><span class="notNull">*</span>联系电话</td>
					<td align="left" width="35%"><input class="contactTel" type="text" name="contactTel" placeholder="请填写11位的数字"onsubmit="return submit_check()"></td></td>
				</tr>
				<tr class="WhiteBr">
					<td align="center" width="15%">活动跟进人</td>
					<td align="left" width="35%"><input class="followUpPerson" type="text" name="followUpPerson" placeholder="人力部跟进人填写"></td>
					<td align="center" width="15%">活动评估人</td>
					<td align="left" width="35%"><input class="appraiser" type="text" name="appraiser" placeholder="会员部活动评估人填写"></td>
				</tr>
				<tr>
					<td colspan="2" width="50%">是否申报为品牌社团</td>
					<td colspan="2" class="50%" align="left">是</td>
				</tr>
				<tr>
					<td colspan="2" width="15%">活动简介</td>
					<td colspan="2" width="85%"><textarea name="" onsubmit="return submit_check()"></textarea></td>
				</tr>
				<tr>
					
				</tr>
			</tbody>
		</table>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		var month_big = new Array("1","3","5","7","8","10","12");//包含所有31天的月份
		var month_small =new Array("4","6","9","11");//包含所有30天的月份
		function init(){
			var select_year = document.getElementById("year");
			var select_month = document.getElementById("month");
			var select_day = document.getElementById("day");
			var select_hour = document.getElementById("hour");
			var select_minute = document.getElementById("minute");
			for(var i = 2000; i <= 2200;i++){
				select_year_option = new Option(i,i);
				select_year.options.add(select_year_option);
			}
			for(var i = 1; i <= 24;i++){
				select_hour_option = new Option(i,i);
				select_hour.options.add(select_hour_option);
			}
			for(var i = 1; i <= 60;i++){
				select_minute_option = new Option(i,i);
				select_minute.options.add(select_minute_option);
			}
			
			for(var i = 1; i <= 12;i++){
				select_month_option = new Option(i,i);
				select_month.options.add(select_month_option);
			}
			swap_day();
			
			
		}
		function array_contain(array,obj){
			for(var i = 1;i<array.length;i++){
				if(array[i]===obj){
					return true

				}
			}
			return false;
		}
		function swap_day(){
			var select_year = document.getElementById("year");
			var select_month = document.getElementById("month");
			var select_day = document.getElementById("day");
			var seleect_hour = document.getElementById("hour");
			var select_minute = document.getElementById("minute");
			select_day.options.length = 0;
			var month = select_month.options[select_month.selectedIndex].value;
		
		if(array_contain(month_big,month)){
			for(var i = 1; i <= 31; i++){
				select_day_option = new Option(i,i);
				select_day.options.add(select_day_option);
			}

		}

		else if(array_contain(month_small,month)){
			for(var i = 1; i <= 30; i++){
				select_day_option = new Option(i,i);
				select_day.options.add(select_day_option);
			}

		}
		else{
			initFeb();
		}
			
	}	
	function isLeapYear(year){
		var year1 = year % 4;
		var year2 = year % 100;
		var year3 = year % 400;
		if((year1 == 0)&&(year2 != 0)&&(year3 == 0)){
			return true;
		}
		else{
			return false;
		}
	}
	function initFeb(){
		var select_year = document.getElementById("year");
		var select_month = document.getElementById("month");
		var select_day = document.getElementById("day");
		var seleect_clock = document.getElementById("clock");
		var select_minute = document.getElementById("minute");
		if(isLeapYear(year)){
			for(var i = 1;i <= 29;i++){
				select_day_option = new Option(i,i);
				select_day.options.add(select_day_option);
			}
		}
		else{
			for(var i = 1;i <= 29;i++){
				select_day_option = new Option(i,i);
				select_day.options.add(select_day_option);
			}
		}
	}
	
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
