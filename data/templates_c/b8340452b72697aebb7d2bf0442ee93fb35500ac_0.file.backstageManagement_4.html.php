<?php
/* Smarty version 3.1.30, created on 2017-08-21 15:21:38
  from "F:\xampp\htdocs\SCU\tpls\admin\backstageManagement_4.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599ade625df9e5_64127530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8340452b72697aebb7d2bf0442ee93fb35500ac' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\admin\\backstageManagement_4.html',
      1 => 1502456248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599ade625df9e5_64127530 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="./img/js/admin/backstageManagement_4.js"><?php echo '</script'; ?>
>
  <style>
		
		body{
			overflow-y: hidden;
			overflow-y: hidden;
		}
		html{
			overflow-y: hidden;
		}
		.bg{
			background: #eeeced;
			width: 100%;
			height: 44rem;
		}
	</style>	
</head>
<body>
<?php echo '<script'; ?>
>
$(function(){
})
laydate({
		elem: '#actDate', 
		event: 'focus'
	});	
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function check4(){
	inputs=document.getElementById('layout').getElementsByTagName('input');
	spans=document.getElementById('layout').getElementsByTagName('span');
	textarea=document.getElementById('layout').getElementsByTagName('textarea')[0];
	tSpan=document.getElementById('layout').getElementsByTagName('span')[spans.length-1];
	for(i=0;i<inputs.length;i++){
		if(inputs[i].value==""){
			alert(spans[i].innerHTML+'不能为空');
			return false;
		}
	}
	if(textarea.value==""){
		alert(tSpan.innerHTML+'不能为空');
		return false;
	}
	return true;
}
<?php echo '</script'; ?>
>
<div class="rightReg" id="activeReg"> 
	<div class="regForm">
		<div class="currentPosition"><span>当前位置：管理社团>活动申请</span></div><hr>
		<div class="rightTable1" >
		<table>
			<tr class="bgk">
				<td style="width: 15%">活动名称</td>
				<td style="width: 10%">负责人</td>
				<td style="width: 15%">活动时间</td>
				<td style="width: 10%">审核进度</td>
				<td style="width: 8%">操作</td>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['actlist']->value)===null||$tmp==='' ? null : $tmp), 'arr', false, NULL, 'now', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_now']->value['iteration']++;
?>
				<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_now']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_now']->value['iteration'] : null))%2 != 0) {?>
				<tr class="oneLine">
				<?php } else { ?>
				<tr class= "twoLine">
				<?php }?>
				
					<td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['aName'];?>
</td>
					<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['applicantName'];?>
</td>
					<td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['date_of_activity'];?>
</td>
					<td style="width: 10%"><?php if ($_smarty_tpl->tpl_vars['arr']->value['review'] == '1') {?>已通过
					<?php } elseif ($_smarty_tpl->tpl_vars['arr']->value['review'] == '0') {?>待审核
					<?php } else { ?>不通过
					<?php }?>
					</td>
					<td style="width: 8%">
					<span class="operationLook">查看</span><span class="operationLine">|</span>
					<span class="operationDel">修改</span>
					</td>
				</tr>
			<?php
}
} else {
?>

				<tr class="oneLine"></tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			<!-- <tr class="twoLine">
				<td style="width: 15%"></td>
				<td style="width: 10%"></td>
				<td style="width: 10%"></td>
				<td style="width: 15%"></td>
				<td style="width: 8%">
				<span class="operationLook">查看</span><span class="operationLine">|</span>
				<span class="operationDel">修改</span>
				</td>
			</tr> -->
		</table>
		<div class="cutPages">
			<!-- 分页相关js -->
					<?php echo '<script'; ?>
 type="text/javascript">
						//分页链接获取页码js
						function page(para){
							if(para === 'prev')
								var page = <?php echo $_smarty_tpl->tpl_vars['page']->value['page_prev'];?>
;
							else if(para === 'next')
								var page = <?php echo $_smarty_tpl->tpl_vars['page']->value['page_next'];?>
;
							else if(para === 'first')
									var page = 1;
							else if(para === 'last')
								var page = <?php echo $_smarty_tpl->tpl_vars['page']->value['page_max'];?>
;
							else
								var page = para;
							var url_now =window.location.href;

							if(url_now.indexOf("page=")== -1)
								document.getElementById(para).href = url_now + "&page="+ page;
							else
								document.getElementById(para).href =url_now.substring(0,url_now.indexOf("page=")+5) + page;
						}
						
						function orderSort(order,sort){
							var url_now2 =window.location.href;
							var url_handle ;

							//如果当前url有page  裁掉page 没有page默认是1
							if(url_now2.indexOf("&page=")!=-1){
								temp = url_now2.indexOf("&page=");
								url_now2 = url_now2.substring(0,temp);
							}
							//如果当前url不存在order 和 sort 参数  把order和sort传入url
							if(url_now2.indexOf("&order=")== -1 && url_now2.indexOf("&sort=")== -1 ){
								url_handle = url_now2 + "&order=" + order + "&sort=" + sort;
								document.getElementById(order).href = url_handle;
							}
							//如果当前url已存在与当前一样的order参数 
							else if(url_now2.indexOf("&order="+order)!=-1){
								//如果url存在order情况下 get到的sort是desc 则变为 asc
								if(url_now2.indexOf("&sort=desc")!=-1){
									sort = "asc";
									temp = url_now2.indexOf("&sort=desc");
									url_now2 = url_now2.substring(0,temp);
									url_handle = url_now2  + "&sort=" + sort;	
									document.getElementById(order).href = url_handle;
								}
								//get到的sort是asc 变desc
								else if(url_now2.indexOf("&sort=asc")!=-1){
									temp = url_now2.indexOf("&sort=asc");
									url_now2 = url_now2.substring(0,temp);
									url_handle = url_now2 + "&sort=" + sort;	
									document.getElementById(order).href = url_handle;
								}
							}
							//与当前不一样的 order 则 去掉原有的order和sort
							else{
								temp = url_now2.indexOf("&order=");
								url_now2 = url_now2.substring(0,temp);
								url_handle = url_now2 + "&order=" + order + "&sort=" + sort;
								document.getElementById(order).href = url_handle;
							}
						}
						
						
					<?php echo '</script'; ?>
>

					
					<a id="first" href="" class="firstAndLast" onclick="page('first')"><span>首页</span></a>
					<a class="fbgk" id="prev" href="" onclick="page('prev')"><span><<</span></a>

					<?php
$__section_page_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_page']) ? $_smarty_tpl->tpl_vars['__smarty_section_page'] : false;
$__section_page_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page']->value['page_max']) ? count($_loop) : max(0, (int) $_loop));
$__section_page_0_total = $__section_page_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_page'] = new Smarty_Variable(array());
if ($__section_page_0_total != 0) {
for ($__section_page_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] = 0; $__section_page_0_iteration <= $__section_page_0_total; $__section_page_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']++){
?>

						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1 < $_smarty_tpl->tpl_vars['page']->value['page_now']) {?>
							<?php if ($_smarty_tpl->tpl_vars['page']->value['page_now']-(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null) < 5) {?>
								<a class="fbgk" id="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>
" href="" onclick="page(<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>
)"><span><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>
</span></a>
							<?php }?>

						<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1 == $_smarty_tpl->tpl_vars['page']->value['page_now']) {?>
							<a class="ebgk" id="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_now'];?>
" href="" onclick="page(<?php echo $_smarty_tpl->tpl_vars['page']->value['page_now'];?>
)"><span><?php echo $_smarty_tpl->tpl_vars['page']->value['page_now'];?>
</span></a>
						<?php } else { ?>
							<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)-$_smarty_tpl->tpl_vars['page']->value['page_now'] < 3) {?>
								<a class="fbgk" id="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>
" href="" onclick="page(<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>
)"><span><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>
</span></a>
							<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1 != $_smarty_tpl->tpl_vars['page']->value['page_max']) {?>
								<span>…</span>
								<a class="fbgk" id="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_max'];?>
" href="" onclick="page(<?php echo $_smarty_tpl->tpl_vars['page']->value['page_max'];?>
)"><span><?php echo $_smarty_tpl->tpl_vars['page']->value['page_max'];?>
</span></a>
								<?php break 1;?>

							
							<?php }?>
						<?php }?>

					<?php
}
}
if ($__section_page_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_page'] = $__section_page_0_saved;
}
?>

					<a class="fbgk" id="next" href="" onclick="page('next')"><span>>></span></a>
					<a id="last" href="" class="firstAndLast" onclick="page('last')"><span>尾页</span></a>
				</div>
				<div class="right_sbt"><input type="submit" id="right_sbts" name="" value="添加活动申请"></div>
		</div>
		</div>	
		<div class="opBgk">
			<div class="formIformation1">
				<form action="admin.php?controller=socSubmit&method=actSubmit" method="post" onsubmit="return check4();">
				<div class="actCheck_title">
					<span>活动申请</span>
				</div>
			<div id="layout">
			<div class="text">
			<span>申报社团</span><input type="text" name="sName" value=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sName']->value)===null||$tmp==='' ? '' : $tmp);?>
 />
			<span class="rightSpan">申报人</span><input type="text" name="applicantName">
			</div>
						<div class="text">
							<span>活动名称</span><input type="text" name="aName">
							<span class="rightSpan">活动时间</span><input name="date_of_activity" id="actDate" class="laydate-icon" 
							onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
							
						</div>
						<div class="text">
							<span>活动形式</span><input type="text" name="aType">
							<span class="rightSpan">活动地点</span><input type="text" name="aPlace">
							
						</div> 
						<div class="text">
							<span>活动对象</span><input type="text" name="aPerson">
							<span class="rightSpan">联系方式</span><input type="text" name="aTel">
							
						</div>
						
						<div class="brand">
							<span class="yesOrNo">是否申报为社团品牌项目</span>
							<input class="radio" type="radio" name="isBrand" checked="checked" value="是"><span class="yon" >是</span>
							<input class="radio" type="radio" name="isBrand"><span class="yon" value="否">否</span>
						</div>
						<div class="texte">
						<span class="textareas">活动简介</span>
						<textarea name="aSummary"></textarea>
						</div>
						</div>
						<div class="submit1">
						<input type="submit" class="submit2" name="" value="提交">
						<input type="button" class="submitClose" name="" value="返回">
						</div>

					</form>
			</div>
		</div>
    </body>
</html>
<?php }
}
