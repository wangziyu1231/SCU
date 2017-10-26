<?php
/* Smarty version 3.1.30, created on 2017-10-26 09:08:03
  from "F:\www\SCU\tpls\admin\scuManagement_4_2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1a5f33d2553_31812093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f15b979afde0ba5300ca65085372b96d8c671f5' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\scuManagement_4_2.html',
      1 => 1509008699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1a5f33d2553_31812093 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<div class="activity_right_check">
			<div class="nowPosition"><span>你现在的位置：审核信息>活动注册审核</span></div>
			<div class="changeLe">
				<div class="change_table" id="check">
					<table>
						<tr>
							<td class="change_table_bgk1" style="width: 20%">申报社团</td>
							<td class="change_table_bgk2" style="width:30%"></td>
							<td class="change_table_bgk1" style="width: 20%">申报人</td>
							<td class="change_table_bgk2" style="width:30%"></td>
						</tr>
						<tr>
							<td class="change_table_bgk1" style="width: 20%">活动名称</td>
							<td class="change_table_bgk2" style="width:30%"></td>
							<td class="change_table_bgk1" style="width: 20%">活动时间</td>
							<td class="change_table_bgk2" style="width:30%"></td>
						</tr>
						<tr>
							<td class="change_table_bgk1" style="width: 20%">活动形式</td>
							<td class="change_table_bgk2" style="width:30%"></td>
							<td class="change_table_bgk1" style="width: 20%">活动地点</td>
							<td class="change_table_bgk2" style="width:30%"></td>
						</tr>
						
						<tr>
							<td class="change_table_bgk1" style="width: 20%">活动对象</td>
							<td class="change_table_bgk2" style="width:30%"></td>
							<td class="change_table_bgk1" style="width: 20%">联系方式</td>
							<td class="change_table_bgk2" style="width:30%"></td>
						</tr>
						<tr>
							<td class="change_table_bgk1" style="width: 20%">活动跟进人</td>
							<td class="change_table_bgk2" style="width:30%"></td>
							<td class="change_table_bgk1" style="width: 20%">活动评估人</td>
							<td class="change_table_bgk2" style="width:30%"></td>
						</tr>
						<tr>
							<td class="change_table_bgk1" style="width: 20%" colspan="">是否申报为品牌活动</td>
							<td class="change_table_bgk2" style="width:60%" colspan="3"><span><input type="radio" name="yes" id="cy" disabled="disabled">是<input type="radio" name="yes" id="cn" disabled="disabled">否</span></td>
						</tr>
						<tr class="change_table_textarea">
							<td class="change_table_bgk1" style="width:20%">活动简介</td>
							<td class="change_table_bgk2" style="width:80%" colspan="3"></td>
						</tr>
						
					</table>
				</div>
				<div class="change_table_check">
					<input type="submit" class="change_check_sbt" onclick="activeSubmit(1)" value="审核通过">
					<input type="submit" class="change_check_sbt" onclick="activeSubmit(2)" value="审核不通过">
					<input type="submit" class="change_check_sbt" id="activity_check_return" name="" value="返回">
				</div>
			</div>
		</div><?php }
}
