<?php
/* Smarty version 3.1.30, created on 2017-10-26 09:09:22
  from "F:\www\SCU\tpls\admin\scuManagement_5_3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1a6423330e8_15465310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abdf82fc73b997a2c78156f8e6bb9947b14a4e8a' => 
    array (
      0 => 'F:\\www\\SCU\\tpls\\admin\\scuManagement_5_3.html',
      1 => 1509008699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1a6423330e8_15465310 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./img/js/ueditor/css/ueditor.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>  
	<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="./img/js/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="./img/js/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="./img/js/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    
</head>
<body>
	<div class="right-editor">
    		<div>
    		    <span class="position">你现在的位置:社联相关&gt活动发布&gt活动编辑</span>
            <form method="POST" action="admin.php?controller=sManage&method=activitySubmit">
				<div class="main-title">
          <input style="display:none" type="text" name="aNO" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->aNO;?>
"/>
				<label>活动主题</label>
        <input type="text" name="aname" class="main-title-input" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->aName;?>
">
				</div>
                <div class="host">
                <label>负责人</label>
                <input type="text" name="hname" class="host-input" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->hName;?>
">
                </div>
                <div class="display-pos">
                <label>展示位置</label>
                <select name="location" id="location" onchange="gradeChange()">
                     <option>轮播图</option>
                     <option>公告</option>
                </select>
                <div id="div_category">
                <label>类别</label>
                <select name="category" id="category">
                     <option>热门活动</option>
                     <option>火热进行</option>
                     <option>往期回顾</option>
                </select>
                </div> 
                </div>
                
            <?php echo '<script'; ?>
 id="editor" type="text/plain"><?php echo $_smarty_tpl->tpl_vars['data']->value->aContent;
echo '</script'; ?>
>
    	 </div>
    		 <div class="sub">
             <input type="submit" value="确认" name="" class="sub-button">
             <input type="button" value="返回" onclick="re()" class="sub-button">
            </form>
             </div>
    				</div>  
		<?php echo '<script'; ?>
>
	var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    //更新活动的返回按钮
    function re(){
      window.location.href="admin.php?controller=sManage&method=remove";
    }
    //设定原先的location
    <?php if ($_smarty_tpl->tpl_vars['data']->value->location == "轮播图") {?>
      $('#location option:first').attr('selected','selected');
      $('#div_category').hide()
    <?php } else { ?>
      $('#location option:last').attr('selected','selected');
      $('#div_category').show()
    <?php }?>

    //设定类别
    <?php if ($_smarty_tpl->tpl_vars['data']->value->category == "热门活动") {?>
      $('#category option:first').attr('selected','selected');
    <?php } elseif ($_smarty_tpl->tpl_vars['data']->value->category == "火热进行") {?>
      $('#category option:eq(1)').attr('selected','selected');
    <?php } else { ?>
      $('#category option:last').attr('selected','selected');
    <?php }?>

    //下拉框更改事件
    function gradeChange(){
      if("公告"==$('#location option:selected').text())
          $('#div_category').show()
      else
          $('#div_category').hide()
    }
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
