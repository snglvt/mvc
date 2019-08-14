<?php
/* Smarty version 3.1.33, created on 2019-04-10 00:47:40
  from 'D:\OpenServer\OSPanel\domains\mvc\application\smarty\template\question.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cad12fc590833_63409846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0399b8ae97ea80fb2135ce2a7b1e86ea3d0e765d' => 
    array (
      0 => 'D:\\OpenServer\\OSPanel\\domains\\mvc\\application\\smarty\\template\\question.tpl',
      1 => 1554846458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cad12fc590833_63409846 (Smarty_Internal_Template $_smarty_tpl) {
?></header>
<section class="main clearfix">
    <section class="top">
        <div class="wrapper content_header clearfix">
            <div class="work_nav">
            </div><!-- end work_nav -->
            <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
        </div>
    </section>
    <div>
        <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['number_end']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['number_end']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
        <ul class=\"pagination\">
            <li><a <?php if ($_smarty_tpl->tpl_vars['page_id']->value == $_smarty_tpl->tpl_vars['page']->value) {?>class="activ"<?php }?> href='/question/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/'> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 </a></li>
            <?php }
}
?>
        </ul>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination_array']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <div>
            <p>вопрос - <?php echo $_smarty_tpl->tpl_vars['row']->value['issue'];?>
</p><br>
            <span>Ответ - </span> <?php echo $_smarty_tpl->tpl_vars['row']->value['answer'];?>

        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
