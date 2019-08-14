<?php
/* Smarty version 3.1.33, created on 2019-04-08 11:24:22
  from 'D:\OpenServer\OSPanel\domains\mvc\app\smarty\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab0536277107_43272911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87315bc5c41c6f73e52c55320e652a722b74a74c' => 
    array (
      0 => 'D:\\OpenServer\\OSPanel\\domains\\mvc\\app\\smarty\\template\\index.tpl',
      1 => 1554711824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/header.tpl' => 1,
    'file:main/footer.tpl' => 1,
  ),
),false)) {
function content_5cab0536277107_43272911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:main/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>
    <?php echo $_smarty_tpl->tpl_vars['welcome']->value;?>

<h1>
<?php $_smarty_tpl->_subTemplateRender("file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
