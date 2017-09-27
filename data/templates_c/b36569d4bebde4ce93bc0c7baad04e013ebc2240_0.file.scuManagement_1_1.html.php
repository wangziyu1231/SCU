<?php
/* Smarty version 3.1.30, created on 2017-09-26 12:18:36
  from "F:\xampp\htdocs\SCU\tpls\admin\scuManagement_1_1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca297c21d620_64142401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36569d4bebde4ce93bc0c7baad04e013ebc2240' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\admin\\scuManagement_1_1.html',
      1 => 1502456248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ca297c21d620_64142401 (Smarty_Internal_Template $_smarty_tpl) {
?>
						<!--<!--模块=============社联相关-成员管理-=========的子模块=========--更改成员-->
						<div class="changeAlert">
							<div class="addAlertTop" ><span>更改所选</span><img id="changeAlertTopX" class="addAlertTopX" src="./img/images/addalertTopX.png"></div>
							<form method="POST" action="admin.php?controller=sManage&method=scuUpdate" id="updateForm">
							<div class="addAlertSelect">
								<span class="addAlertFormSpan">选择职位</span>
								<select id='department' name="department">
									<option value="0">选择部门</option>
									<option value="1" >办公室</option>
									<option value="2" >人力资源部</option>
									<option value="3" >财务监控部</option>
									<option value="4" >外联部</option>
									<option value="5" >文娱部</option>
									<option value="6" >网络信息部</option>
									<option value="7" >会员服务部</option>
									<option value="8" >宣传策划部</option>
								</select >
								<select id='job' name="job">
									<option value="0">选择职位</option>
									<option value="1" >主席团</option>
									<option value="2" >部长</option>
									<option value="3" >副部长</option>
									<option value="4" >干事</option>
								</select>
							</div>
						<div class="addAlertIptall">
							<div class="addAlertIpt">
								<span>姓名</span><input type="text" name="realname" id="realname">
								<span>学号</span><input type="text" name="username" id="username">
							</div>
							<div class="addAlertIpt">
								<span>系名</span><input type="text" name="dname" id="dname">
								<span>专业</span><input type="text" name="major" id="major">
							</div>
							<div class="addAlertIpt">
								<span>班级</span><input type="text" name="dclass" id="dclass">
								<span>宿舍</span><input type="text" name="dorm" id="dorm">
							</div>
							<div class="addAlertIpt">
								<span>手机</span><input type="text" name="phone" id="phone">
								<span>微信</span><input type="text" name="wechat" id="wechat">
							</div>
							<input id="ID" name="ID" value="">
							
							<input type="submit"  class="addAlertSbt" name="" value="提交">
						</div>
						</form>
						</div>
<?php }
}
