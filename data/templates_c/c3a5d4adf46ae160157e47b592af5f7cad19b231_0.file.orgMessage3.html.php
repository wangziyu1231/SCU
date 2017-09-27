<?php
/* Smarty version 3.1.30, created on 2017-09-26 09:13:53
  from "F:\xampp\htdocs\SCU\tpls\main\orgMessage3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c9fe317e6013_36064788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a5d4adf46ae160157e47b592af5f7cad19b231' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\orgMessage3.html',
      1 => 1506410032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/oMBegin.html' => 1,
    'file:main/oMEnd.html' => 1,
  ),
),false)) {
function content_59c9fe317e6013_36064788 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/orgMessage3.css">
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/orgMessage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/orgMessage2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:main/oMBegin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    
            	<form method="post" id="form1" action="index.html?<?php echo encrypt_url('controller=login&method=addComment','SCU');?>
">
                    <input type="hidden" name="sNO" value="<?php echo $_smarty_tpl->tpl_vars['sNO']->value;?>
">
                    <textarea class="comment_textarea"  placeholder="请输入评论..." name="content"></textarea>
                    <input type="submit" class="submit" value="提交">                    
                </form>
                <div class="com">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['comment_arr']->value)===null||$tmp==='' ? null : $tmp), 'comment_arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment_arr']->value) {
?>
                        <div class="comment">
                        <img class="head_portrait" src="<?php echo $_smarty_tpl->tpl_vars['comment_arr']->value['portrait'];?>
">
                        <div class="comment_right">
                            <span class="my_name" name="my_name"><?php echo $_smarty_tpl->tpl_vars['comment_arr']->value['name'];?>
</span>
                            <span class="time" name="time"><?php echo $_smarty_tpl->tpl_vars['comment_arr']->value['date_of_entry'];?>
</span>
                            <div class="conDiv">
                               <span class="con"><?php echo $_smarty_tpl->tpl_vars['comment_arr']->value['content'];?>
</span>
                            </div>
                        </div>  
                    </div>
                    <?php
}
} else {
?>

                        <span class="default">该社团暂未收到评论，快来抢沙发吧~</span>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    <!--
                    <div class="comment">
                        <img class="head_portrait" src="./img/images/img11.jpg">
                        <div class="comment_right">
                            <span class="my_name" name="my_name">黄鹏</span>
                            <span class="time" name="time">2016/11/22 22:00:00</span>
                            <div class="conDiv">
                               <span class="con">不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~不错不错~</span>
                            </div>
                        </div>  
                    </div>
                    <div class="comment">
                        <img class="head_portrait" src="./img/images/img10.jpg">
                        <div class="comment_right">
                            <span class="my_name" name="my_name">胡汉三</span>
                            <span class="time" name="time">2016/11/12 08:40:59</span>
                            <div class="conDiv">
                                <span class="con">赞一个</span>
                            </div>
                        </div>  
                    </div>
                    <div class="comment">
                        <img class="head_portrait" src="./img/images/img10.jpg">
                        <div class="comment_right">
                            <span class="my_name" name="my_name">小羔羊</span>
                            <span class="time" name="time">2016/11/02 02:20:05</span>
                            <div class="conDiv">
                               <span class="con">大爱出雲！！！</span>
                            </div>
                        </div>
                    </div> -->
                </div>
                <a href="#" class="comment_a">查看更多</a>           
             
    <?php $_smarty_tpl->_subTemplateRender("file:main/oMEnd.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
