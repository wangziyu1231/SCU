<?php
/* Smarty version 3.1.30, created on 2017-09-05 15:32:25
  from "F:\xampp\htdocs\SCU\tpls\main\aboutUs.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aea769c66297_84136600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '638babde03fd787ccae094f1513d3c86082585b6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\SCU\\tpls\\main\\aboutUs.html',
      1 => 1504618343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.html' => 1,
    'file:main/login.html' => 1,
  ),
),false)) {
function content_59aea769c66297_84136600 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校社联欢迎你</title>
<link rel="stylesheet" type="text/css" href="./img/css/main/headAndNav.css">
<link rel="stylesheet" type="text/css" href="./img/css/main/aboutUs.css">
<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/aboutUs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./img/js/main/main.js"><?php echo '</script'; ?>
>
</head>

<body onload="change()">
    <?php $_smarty_tpl->_subTemplateRender("file:main/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <article>
        <ul class="aNav" id="aNav">
            <li>社联简介</li>
            <li>社联历史</li>
            <li>现任管理</li>
        </ul>
        <div class="main">
            <div class="model">
                <div class="topDiv">
                    <div class="circle">
                        <span>1</span>
                    </div>
                    <div class="aHead">
                        <span>社联简介</span>
                    </div>
                </div>
                <div class="bottom">
                    <div class="img">
                        <img src="./img/images/img11.jpg">
                    </div> 
                    <p>广东金融学院学生社团联合会，简称“校社联”或“社联”。广东金融学院社联是在院团委的指导下，与校学生会并称为“一体两翼“的三大校级学生组织之一。社联成立于2002年，秉承着”服务、团结、开拓、发展“的宗旨，管理和服务全院学术科技类、文娱文化类、体育健身类以及综合实践类共60个社团。在社联主席团指导下，社联内设八大部门：办公室、人力资源部、财务监控部、宣传策划部、外联部、网络信息部、文娱部和会员服务部。全体社联人上下一心，为丰富同学们的社团生活，活跃我院学术氛围，建设更高层次、更富内涵的校园文化而不懈努力。</p>                                   
                </div>            
            </div>
            <div class="model">
                <div class="topDiv">
                    <div class="circle">
                        <span>2</span>
                    </div>
                    <div class="aHead">
                        <span>社联历史</span>
                    </div>
                </div>
                <div class="bottom">
                    <div class="img">
                        <img src="./img/images/img10.jpg">
                    </div> 
                    <p>随着我院办学规模的日益扩大，学生社团队伍也逐渐壮大，从1992年我院首个社团——演讲与口才协会成立至2002年在院注册社团覆盖学术、文娱、体育三大类，2002年4月28日，经学校讨论批准成立学生社团联合会，由黄永达担任广州金融高等专科学校学生社团联合会第一届主席。自此，学生社团联合会宣布正式成立，统一管理和服务全院社团，对日常社团活动进行协调和指导，促进各社团全面和谐发展。社联自诞生日起便是我院“一体两翼“的三大校级学生组织之一，被赋予重大的使命和责任。成立之初的社联如同一个新生的婴儿，睁着好奇的眼睛打量这万紫千红的世界，一切工作都是未知之数；但是，社联并不是养在温室的孩子，它肩负着建设更富内涵更高层次的校园文化的使命和责任，这决定了它必须在风雨中摸索、成长、壮大、奔跑。</p>         
                </div> 
            </div>
            <div class="model">
                <div class="topDiv">
                    <div class="circle">
                        <span>3</span>
                    </div>
                    <div class="aHead">
                        <span>现任管理</span>
                    </div>
                </div>
                <div class="bottom">
                    <div class="img">
                        <img src="./img/images/img4.jpg">
                    </div> 
                    <p>这里是现任管理....</p>                
                </div>            
            </div>
        </div>
    </article>
    <?php $_smarty_tpl->_subTemplateRender("file:main/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
