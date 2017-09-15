<?php
/* Smarty version 3.1.30, created on 2017-09-06 16:41:32
  from "F:\xampp\htdocs\SCU\tpls\main\orgMessage3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b0091c133778_68808988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a5d4adf46ae160157e47b592af5f7cad19b231' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\orgMessage3.html',
      1 => 1504708751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/oMBegin.html' => 1,
    'file:main/oMEnd.html' => 1,
  ),
),false)) {
function content_59b0091c133778_68808988 (Smarty_Internal_Template $_smarty_tpl) {
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
 
    
            	<form method="post" id="form1">
                    <textarea class="comment_textarea"  placeholder="请输入评论..."></textarea>
                    <input type="submit" class="submit" value="提交">                    
                </form>
                <div class="com">
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
                    </div>
                </div>
                <a href="#" class="comment_a"> >>评论(分页显示)</a>           
             
    <?php $_smarty_tpl->_subTemplateRender("file:main/oMEnd.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
