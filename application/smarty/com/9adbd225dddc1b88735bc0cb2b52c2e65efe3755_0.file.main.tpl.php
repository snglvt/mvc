<?php
/* Smarty version 3.1.33, created on 2019-04-08 16:22:57
  from 'D:\OpenServer\OSPanel\domains\mvc\application\smarty\template\main\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab4b31af4415_24162743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9adbd225dddc1b88735bc0cb2b52c2e65efe3755' => 
    array (
      0 => 'D:\\OpenServer\\OSPanel\\domains\\mvc\\application\\smarty\\template\\main\\main.tpl',
      1 => 1554729145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab4b31af4415_24162743 (Smarty_Internal_Template $_smarty_tpl) {
?></header>
<section class="main clearfix">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    <div class="work">
        <a href="/portfolio/element/<?php echo $_smarty_tpl->tpl_vars['value']->value['id_image'];?>
">
            <img class="img" src="img/work<?php echo $_smarty_tpl->tpl_vars['value']->value['id_image'];?>
.jpg" class="media" alt=""/>
            <div class="caption">
                <div class="work_title">
                    <h1><?php echo $_smarty_tpl->tpl_vars['value']->value['image_name'];?>
</h1>
                </div>
            </div>
        </a>
        <p class="image_content"><?php echo $_smarty_tpl->tpl_vars['value']->value['image_content'];?>
</p>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
