<?php
/* Smarty version 3.1.30, created on 2017-08-12 08:46:55
  from "F:\xampp\htdocs\newSCU\SCU\tpls\main\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598ea45faa73f9_37112875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fbf0430b2535997bb46b066b73fd529afcfbbf9' => 
    array (
      0 => 'F:\\xampp\\htdocs\\newSCU\\SCU\\tpls\\main\\index.html',
      1 => 1502520414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_598ea45faa73f9_37112875 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/index.css">
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
</head>

<body onLoad="load()">
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <section>
    	<div class="scrollImg" id="scrollImg">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp), 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
				<div class="imgs" id="imgs" style="display:block">
				<?php } else { ?>
				<div class="imgs" id="imgs" style="display:none">
				<?php }?>
					<a href="#"  class="tooltip"> 
						<img id='pic' onmouseover="mouseover()" onmouseout="mouseout()" src="../db/activity/<?php echo $_smarty_tpl->tpl_vars['v']->value->aImg;?>
">
					</a>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp) == null) {?>
				<div class="imgs" id="imgs">       	
				<a href="#"  class="tooltip"> 
					<img id='pic' src="./img/images/default.jpg">
				</a>
				</div>
			<?php }?>
			
            <div style="clear:both"></div>
            <div class="scroll">
            	<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp) != null) {?>
				<span  class="last" id="lastPic" onClick="f_lastPic()">&lt;</span>
            	<span  class="next" id="nextPic" onclick="f_nextPic()">&gt;</span>
				<?php }?>
                <div class="opacity"></div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp), 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
					<div class="outline"  style="display:black">
					<?php } else { ?>
					<div class="outline"  style="display:none">
					<?php }?>
						<span id="outll" class="outll"><?php echo $_smarty_tpl->tpl_vars['v']->value->aSummary;?>
</span>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            	<ul class="circle" id="circle">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? null : $tmp), 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
							<li class="hover"  onclick="addEvent(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)" style="color:#fff">●</li>
						<?php } else { ?>
							<li class="hover" onclick="addEvent(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)" style="color:#b3c0cc">●</li>
						<?php }?>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
            </div>
            <div style="clear:both;"></div>
        </div>
        <!--scrollImg end -->
    </section>
    <section>
        <div class="ann">
    		<div class="title" id="title">
                <span id="main">热门活动</span
                ><span id="hot">火热进行</span
                ><span id="history">历史回顾</span>
            </div>
            <div id="mode1" class="mode">
                <div class="mode1" id="mar">
                  <img class="top3" id='borad' src="./img/images/img1.jpg">
                  <div class="title">草地音乐节</div>
                  <div class="content">一次情感的释放,一次灵魂的交流,一次自然与音乐的完美锲合, 无座位 无演员 人人都是舞台重心,满自由 满音量 跟随音乐挥洒热情, 尝试 感受 释放,其实你并不平凡,只是不愿尝试,期待与你遇见, ----再不疯狂我们就老了。</div>
                </div><div class="mode1" id="mar">
                  <img class="top3" id='borad' src="./img/images/img2.jpg">
                  <div class="title">草地音乐节</div>
                  <div class="content">一次情感的释放,一次灵魂的交流,一次自然与音乐的完美锲合, 无座位 无演员 人人都是舞台重心,满自由 满音量 跟随音乐挥洒热情, 尝试 感受 释放,其实你并不平凡,只是不愿尝试,期待与你遇见, ----再不疯狂我们就老了。</div>
                </div><div class="mode1" >
                  <img class="top3" id='borad' src="./img/images/img3.jpg">
                  <div class="title">草地音乐节</div><br/>
                  <div class="content">在草地上来一场音乐盛宴</div>
                </div>                      
            </div>
            <div id="mode2" class="mode">
                <div class="mode1" id="mar">
                  <img class="top3" id='borad' src="./img/images/img11.jpg">
                  <div class="title">草地音乐节2</div><br/>
                  <div class="content">在草地上来一场音乐盛宴</div>
                </div><div class="mode1" id="mar">
                  <img class="top3" id='borad' src="./img/images/img3.jpg">
                  <div class="title">草地音乐节</div><br/>
                  <div class="content">在草地上来一场音乐盛宴</div>
                </div><div class="mode1" >
                  <img class="top3" id='borad' src="./img/images/img2.jpg">
                  <div class="title">草地音乐节</div><br/>
                  <div class="content">在草地上来一场音乐盛宴</div>
                </div>                      
            </div>
            <div id="mode3" class="mode">
                <div class="mode1" id="mar">
                  <img class="top3" id='borad' src="./img/images/img4.jpg">
                  <div class="title">草地音乐节3</div><br/>
                  <div class="content">在草地上来一场音乐盛宴</div>
                </div><div class="mode1" id="mar">
                  <img class="top3" id='borad' src="./img/images/img10.jpg">
                  <div class="title">草地音乐节</div><br/>
                  <div class="content">在草地上来一场音乐盛宴</div>
                </div><div class="mode1" >
                  <img class="top3" id='borad' src="./img/images/img11.jpg">
                  <div class="title">草地音乐节</div><br/>
                  <div class="content">在草地上来一场音乐盛宴</div>
                </div>                      
            </div>
        </div>
    </section><!-- 
	<p class="footer">©&nbsp;2016&nbsp;广东金融学院&nbsp;校社联</p> -->
    <div class="footer"></div>
    <?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
