<?php
/* Smarty version 3.1.30, created on 2017-10-25 17:37:49
  from "F:\xampp\htdocs\SCU\tpls\main\orgMessage2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f0afcddff603_87755192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0bd54b7c63c70d324c3b3476b3161996bd7987a' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\orgMessage2.html',
      1 => 1508473005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/oMBegin.html' => 1,
    'file:main/oMEnd.html' => 1,
  ),
),false)) {
function content_59f0afcddff603_87755192 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage2.css">
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/orgMessage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:main/oMBegin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_act']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
                    <div class="activity">
                    <span><?php echo $_smarty_tpl->tpl_vars['arr']->value['aName'];?>
</span>
                    <img class="activity_img" src="img/images/img12.jpg">
                    <p><?php echo $_smarty_tpl->tpl_vars['arr']->value['aSummary'];?>
</p>
                    <p>联系方式：<?php echo $_smarty_tpl->tpl_vars['arr']->value['aTel'];?>
</p>
                    <p>活动时间：<?php echo $_smarty_tpl->tpl_vars['arr']->value['date_of_activity'];?>
</p>
                    <p>活动地点：<?php echo $_smarty_tpl->tpl_vars['arr']->value['aPlace'];?>
</p>
                    <hr>
                    </div>
                <?php
}
} else {
?>

                        <span class="default">该社团最近没有新活动发布</span>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                
                            
            
    <?php $_smarty_tpl->_subTemplateRender("file:main/oMEnd.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
    
<?php }
}
