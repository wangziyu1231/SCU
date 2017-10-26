<?php
/* Smarty version 3.1.30, created on 2017-10-25 17:37:41
  from "F:\xampp\htdocs\SCU\tpls\main\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f0afc525fbb3_82991780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efa73bd5822912d1e6a20ecaf9704f2568266869' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\index.html',
      1 => 1506421037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59f0afc525fbb3_82991780 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!--
        <a href="main.php?controller=index&method=activityMore&aNO=<?php echo $_smarty_tpl->tpl_vars['v']->value->aNO;?>
"  class="tooltip"> 
            <img id='pic' onmouseover="mouseover()" onmouseout="mouseout()" src="<?php echo $_smarty_tpl->tpl_vars['v']->value->aImg;?>
">
          </a>
          -->
          <a href="index.html?<?php echo encrypt_url(('controller=index&method=activityMore&aNO=').($_smarty_tpl->tpl_vars['v']->value->aNO),'SCU');?>
"  class="tooltip"> 
            <img id='pic' onmouseover="mouseover()" onmouseout="mouseout()" src="<?php echo $_smarty_tpl->tpl_vars['v']->value->aImg;?>
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
            <span id="outll" class="outll"><?php echo $_smarty_tpl->tpl_vars['v']->value->aName;?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['arr2']->value)===null||$tmp==='' ? null : $tmp), 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <div class="mode1" id="mar">
                  <a href="index.html?<?php echo encrypt_url(('controller=index&method=activityMore&aNO=').($_smarty_tpl->tpl_vars['v']->value->aNO),'SCU');?>
"><img class="top3" id='borad' src="<?php echo $_smarty_tpl->tpl_vars['v']->value->aImg;?>
"></a>
                  <div class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value->aName;?>
</div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>

            <div id="mode2" class="mode">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['arr3']->value)===null||$tmp==='' ? null : $tmp), 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <div class="mode2" id="mar">
                  <a href="index.html?<?php echo encrypt_url(('controller=index&method=activityMore&aNO=').($_smarty_tpl->tpl_vars['v']->value->aNO),'SCU');?>
"><img class="top3" id='borad' src="<?php echo $_smarty_tpl->tpl_vars['v']->value->aImg;?>
"></a>
                  <div class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value->aName;?>
</div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div id="mode3" class="mode">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['arr4']->value)===null||$tmp==='' ? null : $tmp), 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <div class="mode3" id="mar">
                  <a href="index.html?<?php echo encrypt_url(('controller=index&method=activityMore&aNO=').($_smarty_tpl->tpl_vars['v']->value->aNO),'SCU');?>
"><img class="top3" id='borad' src="<?php echo $_smarty_tpl->tpl_vars['v']->value->aImg;?>
"></a>
                  <div class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value->aName;?>
</div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
