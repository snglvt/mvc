<?php
/* Smarty version 3.1.33, created on 2019-04-10 21:43:41
  from 'D:\OpenServer\OSPanel\domains\mvc\application\smarty\template\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cae395da28c85_29743758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64137649bc553a508a680b41c07e8c43347a569a' => 
    array (
      0 => 'D:\\OpenServer\\OSPanel\\domains\\mvc\\application\\smarty\\template\\product.tpl',
      1 => 1554921819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cae395da28c85_29743758 (Smarty_Internal_Template $_smarty_tpl) {
?></header>
<section class="main clearfix">
    <section class="top">
        <div class="wrapper content_header clearfix">
            <div class="work_nav">
                <ul class="btn clearfix">
                    <li>
                        <a href="/product/<?php if ($_smarty_tpl->tpl_vars['product']->value['id_image'] == 1) {
echo $_smarty_tpl->tpl_vars['end_number']->value;
} else {
echo $_smarty_tpl->tpl_vars['product']->value['id_image']-1;
}?>/"
                           class="previous" data-title="Previous"></a>
                    </li>
                    <li><a href="/" class="grid" data-title="Portfolio"></a></li>
                    <li>
                        <a href="/product/<?php if ($_smarty_tpl->tpl_vars['product']->value['id_image'] == $_smarty_tpl->tpl_vars['end_number']->value) {
echo $_smarty_tpl->tpl_vars['number_one']->value;
} else {
echo $_smarty_tpl->tpl_vars['product']->value['id_image']+1;
}?>/"
                           class="next" data-title="Next"></a></li>
                </ul>
            </div><!-- end work_nav -->
            <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['product']->value['image_content'];?>
</h1>
        </div>
    </section><!-- end top -->
    <section class="wrapper">
        <div class="content">
            <div class="work">
                <img src="../../img/work<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
.jpg" class="media" alt=""/>
            </div>
            <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['description_image'];?>
</h3>
            <a style="margin-left: 10px;" <?php if (!$_smarty_tpl->tpl_vars['item_in_product']->value) {?>class="hideme"<?php }?> id="remove_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
" href="#" onclick="remove_product(<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
); return false;" alt="Отменить бронь">Отменить</a>
            <a style="margin-left: 10px;" <?php if ($_smarty_tpl->tpl_vars['item_in_product']->value) {?>class="hideme"<?php }?>  id="add_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
" href="#" onclick="add_to_product(<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
); return false;" alt="Забронировать">Забронировать</a>
            <a style="margin-left: 340px; text-decoration: none;"  href="/reservation/" title="перейти к брони">Ваша бронь</a>
            <span id="product_cnt_items">
            <?php if ($_smarty_tpl->tpl_vars['product_cnt_items']->value > 0) {
echo $_smarty_tpl->tpl_vars['product_cnt_items']->value;
} else { ?>пусто<?php }?>
            </span>
        </div><!-- end content -->


    </section>

<?php }
}
