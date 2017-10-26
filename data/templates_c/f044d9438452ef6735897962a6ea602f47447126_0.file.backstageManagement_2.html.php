<?php
/* Smarty version 3.1.30, created on 2017-10-26 09:10:12
  from "F:\www\SCU\tpls\admin\backstageManagement_2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1a6746062b0_79722156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f044d9438452ef6735897962a6ea602f47447126' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\backstageManagement_2.html',
      1 => 1509008699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1a6746062b0_79722156 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="./img/js/admin/backstageManagement_2.js"><?php echo '</script'; ?>
>
	
</head>
<body>
			<div class="right" id="rightCheck">
			<div class="rightIfo">
				<div class="currentPosition"><span>当前位置：管理成员>成员审核</span></div>
				<div class="information">
					<div class="rightNav"> 
						<ul>
							<li style="cursor:pointer" class="userSearch" style=" cursor:pointer"><span   class="userxSearched">用户查询</span></li>
						</ul>
					</div>
					<div class="searchContent" >
						<form action="admin.php?controller=socmem&method=search_pend" method="post">
						<span>用户名</span><input type="text" name="username" id="userName">
						<span class="us">姓名</span><input type="text" name="name" id="userName">
						<input type="submit" name="" id="btn" value="查询">
						</form>
					</div>
				</div>
				
				<div class="searchTable">
					<form action="admin.php?controller=socmem&method=review" method="post"> 
						<table>
							<tr class="bgk">
								<td style="width: 5%;"><input type="checkbox" name="" id="all" onclick="changeState()">全选</td>
								<td style="width: 10%"><a id="name" href="" onclick="orderSort('name','desc')">姓名</a></td>
								<td style="width: 10%"><a id="sex" href="" onclick="orderSort('sex','desc')">性别</a></td>
								<td style="width: 10%"><a id="username" href="" onclick="orderSort('username','desc')">学号</a></td>
								<td style="width: 10%"><a id="dept" href="" onclick="orderSort('dept','desc')">系别</a></td>
								<td style="width: 12%"><a id="tel" href="" onclick="orderSort('tel','desc')">手机号码（长短号）</a></td>
								<td style="width: 10%"><a id="wechat" href="" onclick="orderSort('wechat','desc')">微信</a></td>
								<td style="width: 10%"><a id="smRemark" href="" onclick="orderSort('smRemark','desc')">备注</a></td>
							</tr>
							
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['pendmem']->value)===null||$tmp==='' ? null : $tmp), 'arr', false, NULL, 'now', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_now']->value['iteration']++;
?>
								<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_now']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_now']->value['iteration'] : null))%2 != 0) {?>
							<tr bgcolor="#fafafa">
								<?php } else { ?>
								<tr bgcolor="#FFF">
								<?php }?>
								<td style="width: 5%;"><input type="checkbox" name="smNO[]" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
" class="one" ></td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['sex'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['dept'];?>
</td>
								<td style="width: 12%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['tel'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['wechat'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['arr']->value['smRemark'];?>
</td>
							</tr>
							<?php
}
} else {
?>

							<tr class="">
								<td colspan="8">当前社团成员信息为空</td>
							</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


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

						<input type="submit" class="allSBtn" name="" value="审核">
					</form>	
				</div>
				</div>
			</div>
</body>
</html>
<?php }
}
