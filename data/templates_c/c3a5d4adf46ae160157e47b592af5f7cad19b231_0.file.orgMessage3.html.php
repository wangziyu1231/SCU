<?php
/* Smarty version 3.1.30, created on 2017-10-25 17:37:50
  from "F:\xampp\htdocs\SCU\tpls\main\orgMessage3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f0afce4f1634_82800126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a5d4adf46ae160157e47b592af5f7cad19b231' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\orgMessage3.html',
      1 => 1508473006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/oMBegin.html' => 1,
    'file:main/oMEnd.html' => 1,
  ),
),false)) {
function content_59f0afce4f1634_82800126 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
var time=0;
    $(".comment_a").click(function(){
        var json = {'i':time,'sNO':<?php echo $_smarty_tpl->tpl_vars['sNO']->value;?>
};
        $.ajax({
            type:"POST",
            url:"main.php?controller=getMoreComm&method=getMoreComm",
            data:json,
            async:true,
            success:function(data){
                var data=eval("("+data+")");
                if(data.length>0){
                    for(i=0;i<data.length;i++){
                        commentDemo="<div class='comment'> <img class='head_portrait' src='"+data[i].portrait+"'> <div class='comment_right'> <span class='my_name' name='my_name'>"+data[i].name+"</span> <span class='time' name='time'>"+data[i].date_of_entry+"</span> <div class='conDiv'><span class='con'>"+data[i].content+"</span> </div> </div> </div>";
                        $(".com").append(commentDemo);
                    }   
                    time++;             
                }else{
                    if(time==0&& data.length==0){
                        $(".default").css("display","block");
                        $(".comment_a").css("display","none");
                    }
                    else{
                        $(".comment_a").css("display","none");
                        $(".bottom").css("display","block");
                    }
                }
            },
            error: function(jqXHR){     
                   alert("发生错误：" + jqXHR.status);  
                }
        });
    });
    $(window).scroll(function(){
        var viewHeight =$(this).height();//可见高度  
        var contentHeight =$("body").get(0).scrollHeight;//内容高度  
        var scrollHeight =$(this).scrollTop();//滚动高度 
        var bottom= contentHeight-viewHeight;
        if( bottom == scrollHeight) { 
            $(".comment_a").click();
        }  
    });
    $(".comment_a").click();
    //评论后更新？？
})
<?php echo '</script'; ?>
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

        </div>
        <a href="#" class="comment_a">查看更多</a>   
        <span class="default">该社团暂未收到评论，快来抢沙发吧~</span>
        <div class="bottom">
            <hr><span>我也是有底线的</span><hr>
        </div>
    <?php $_smarty_tpl->_subTemplateRender("file:main/oMEnd.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
