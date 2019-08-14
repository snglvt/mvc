<?php
/* Smarty version 3.1.33, created on 2019-04-11 12:06:50
  from 'D:\OpenServer\OSPanel\domains\mvc\application\smarty\template\booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caf03aad3dc18_96168076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdaa01444006695a1700277685bbf44b745726a7' => 
    array (
      0 => 'D:\\OpenServer\\OSPanel\\domains\\mvc\\application\\smarty\\template\\booking.tpl',
      1 => 1554973608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caf03aad3dc18_96168076 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1></h1>
<?php if (!$_smarty_tpl->tpl_vars['booking_array']->value) {?>
    В корзине пусто
<?php } else { ?>
    <form action="/cart/order/" method="POST">
        <h2></h2>
        <table>
            <tr>
                <td>Наименование</td>
                <td>Цена</td>
                <td>Действие</td>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booking_array']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr>
                    <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['image_name'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
р.</td>
                    <td><a id="remove_product_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
" href="#" onClick="remove_product(<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
); return false;" title="Удалить из корзины">Удалить</a>
                        <a id="add_product_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
" class="hideme" href="#" onClick="add_to_product(<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
); return false;" title="Восстановить товар">Восстановить</a>
                    </td>
                    
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <div style="margin-top: 15px;" >
        <span id="final_price">
        <?php if ($_smarty_tpl->tpl_vars['product_cnt_items']->value > 0) {
echo $_smarty_tpl->tpl_vars['product_cnt_items']->value*1500;
} else { ?>пусто<?php }?>
        </span>
        </div>
        <input type="submit" value="Оформить заказ">
    </form>
<?php }
}
}
