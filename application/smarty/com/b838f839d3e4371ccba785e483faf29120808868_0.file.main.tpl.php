<?php
/* Smarty version 3.1.33, created on 2019-04-10 00:32:36
  from 'D:\OpenServer\OSPanel\domains\mvc\application\smarty\template\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cad0f74cf8575_57160919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b838f839d3e4371ccba785e483faf29120808868' => 
    array (
      0 => 'D:\\OpenServer\\OSPanel\\domains\\mvc\\application\\smarty\\template\\main.tpl',
      1 => 1554845554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cad0f74cf8575_57160919 (Smarty_Internal_Template $_smarty_tpl) {
?></header>
<section class="main clearfix">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    <div class="work">
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['value']->value['id_image'];?>
/">
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
