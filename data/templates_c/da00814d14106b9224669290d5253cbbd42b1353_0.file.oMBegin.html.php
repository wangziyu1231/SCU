<?php
/* Smarty version 3.1.30, created on 2017-09-15 08:36:13
  from "F:\xampp\htdocs\SCU\tpls\main\oMBegin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bb74dd7176f2_86990731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da00814d14106b9224669290d5253cbbd42b1353' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\oMBegin.html',
      1 => 1505457221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
  ),
),false)) {
function content_59bb74dd7176f2_86990731 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
	<div class="wrapped">
    	<div class="content">
    		<div class="name">
            	<div class="name_left">
                    <span class="org">出雲音乐协会</span><br>
                    <a id="concern">
                        <input name="username" type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['username'])===null||$tmp==='' ? null : $tmp);?>
">
                        <?php if ($_smarty_tpl->tpl_vars['isConcern']->value === '1') {?>
                            <img src="./img/images/attened.png" id="attention_img">
                            <span id="attention_span">取消关注</span>

                        <?php } else { ?>
                            <img src="./img/images/atten.png" id="attention_img">
                            <span id="attention_span">关注</span>
                        <?php }?>
                    </a>
                </div>
                <input type="button" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['isJoin']->value)===null||$tmp==='' ? '加入社团' : $tmp);?>
" onclick="joinSociety(3)">
            </div>
            <div style="clear:both;"></div>
        	<div class="main">
            <?php }
}
