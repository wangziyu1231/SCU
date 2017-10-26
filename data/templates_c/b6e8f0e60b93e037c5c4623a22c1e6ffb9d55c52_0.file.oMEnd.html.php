<?php
/* Smarty version 3.1.30, created on 2017-10-25 17:37:48
  from "F:\xampp\htdocs\SCU\tpls\main\oMEnd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f0afccc48170_36070001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6e8f0e60b93e037c5c4623a22c1e6ffb9d55c52' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\oMEnd.html',
      1 => 1505459691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59f0afccc48170_36070001 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
    	</div>
	    <div class="pre_nav" id="floatdiv">
            <img src="img/images/logo.png"/>
            <ul>
                <li><hr>
                    <a class="nav" href="<?php echo $_smarty_tpl->tpl_vars['url_club1']->value;?>
"><span>社团介绍</span></a>
                </li>
                <li>
                    <a class="nav" href="<?php echo $_smarty_tpl->tpl_vars['url_club2']->value;?>
"><span>社团活动</span></a>
                </li>
                <li>
                    <a class="nav" href="<?php echo $_smarty_tpl->tpl_vars['url_club3']->value;?>
"><span>社团评论</span></a>
                </li>                 
            </ul>
        </div>
	</div>
    <?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
