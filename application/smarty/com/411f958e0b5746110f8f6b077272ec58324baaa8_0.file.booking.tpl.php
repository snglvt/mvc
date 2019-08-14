<?php
/* Smarty version 3.1.33, created on 2019-07-02 22:52:39
  from 'W:\domains\mvc\application\smarty\template\booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1bb6074fb309_90682013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '411f958e0b5746110f8f6b077272ec58324baaa8' => 
    array (
      0 => 'W:\\domains\\mvc\\application\\smarty\\template\\booking.tpl',
      1 => 1562097112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5d1bb6074fb309_90682013 (Smarty_Internal_Template $_smarty_tpl) {
?></head>

<body>
<section>
    <!-- ##### Секция с основным содержимым ##### -->
    <div class="main-content-wrapper d-flex clearfix">
        <!-- Мобильная навигация-меню (максимальная ширина 767px)-->
        <div class="mobile-nav">
            <!-- Логотип -->
            <div class="amado-navbar-brand">
                <a id="site_icon_img" href="/"><img src="/img/core-img/site_icon.png" alt=""></a>
            </div>
            <!-- Переключение навигации -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Подключаем шаблон основного меню -->
        <?php $_smarty_tpl->_subTemplateRender('file:header_area.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- Начало блока основного представления -->
        <div class="single-product-area section-padding-100 clearfix">
            <!-- Блок информации для мобильных телефонов (максимальная ширина 767px)-->
            <div class="row showmobile">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Заказ</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-xl-8">
                        <?php if (!$_smarty_tpl->tpl_vars['booking_array']->value) {?>
                        <!-- Если в корзине пусто -->
                        <h6>В корзине пусто</h6>
                    </div>
                </div>
            </div>
        </div>
        <?php } else { ?>
        <!-- Если в корзине есть товар -->
        <form action="/reservation/order/" method="POST">
            <div class="table-responsive">
                <table class="table table_booking">
                    <thead>
                    <tr>
                        <th style="text-align: center;">Наименование</th>
                        <th>Цена</th>
                        <th>Дата</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <!-- Выводим все зарезервированные товары-->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booking_array']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <tr>
                            <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
/"><h6
                                            style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value['image_name'];?>
</h6></a>
                            </td>
                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 <i style="font-size:14px;"
                                                                                class="fa fa-rub"
                                                                                aria-hidden="true"></i>
                            </td>
                            <td><input type="date" id="date" required="required" name="date_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
"/></td>
                            <td><br>
                                <button id="remove_product_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
"
                                        class="button_table_remove" href="#"
                                        onClick="remove_product(<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
); return false;"
                                        title="Удалить из корзины">Удалить
                                </button>
                                <button id="add_product_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
" class="button_table"
                                        href="#"
                                        onClick="add_to_product(<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
); return false;"
                                        title="Восстановить товар">Восстановить
                                </button>
                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
            <!-- Столбец итоговой цены -->
            <table style="margin-top: 35px;" class="table_booking">
                <tr>
                    <th>Итоговая цена</th>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 17px;"><span id="final_price">
                                        <!-- Если в корзине не пусто, то перемножаем колличество товаров на фиксированную цену -->
                                        <?php if ($_smarty_tpl->tpl_vars['product_cnt_items']->value > 0) {
echo $_smarty_tpl->tpl_vars['product_cnt_items']->value*1500;?>

                                        <?php } else { ?>0<?php }?>
                                    </span> <i style="font-size:14px;" class="fa fa-rub" aria-hidden="true"></i>
                    </td>
                </tr>
            </table>
            <div class="form-row">
                                <textarea name="comment"
                                          class="input"
                                          placeholder="Добавьте комментарии к заказу..."
                                ></textarea>
            </div>
            <input type="submit" style="margin-top: 15px;" class="booking" type="submit"
                   value="Оформить заказ"/>
        </form>
        <?php }?>
    </div>
    <!-- ##### Конец секции с основным содержимым ##### -->
<?php }
}
