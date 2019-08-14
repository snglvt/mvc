<?php
/* Smarty version 3.1.33, created on 2019-07-18 17:48:06
  from 'C:\xampp\htdocs\joomla.local\application\smarty\template\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3094b6f10e69_42447612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a01a4d8e3203c33c877dcd8b20ea582c8b078f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\joomla.local\\application\\smarty\\template\\main.tpl',
      1 => 1561493008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5d3094b6f10e69_42447612 (Smarty_Internal_Template $_smarty_tpl) {
?></head>

<body>

<!-- ##### Секция с основным содержимым ##### -->
<section>
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
        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">
                <!-- Блок информации для мобильных телефонов (максимальная ширина 767px)-->
                <div class="row showmobile">
                    <nav aria-label="breadcrumb">
                        <ol style="margin-bottom: 0px" class="breadcrumb">
                            <li style="text-align: center;" class="breadcrumb-item active" aria-current="page">
                                Экскурсии, фотосессии и свидания на крышах Москвы.
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <!-- Выводим все товары -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <div id="img<?php echo $_smarty_tpl->tpl_vars['value']->value['id_image'];?>
" class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Фотография продукта -->
                                <div class="product-img">
                                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['value']->value['id_image'];?>
/">
                                        <img style="object-fit: cover; width: 100%; height: 340px;"
                                             src="/img/product-img/work<?php echo $_smarty_tpl->tpl_vars['value']->value['id_image'];?>
.jpg" alt="Фотография крыши">
                                    </a>
                                </div>

                                <!-- Описание продукта -->
                                <div class="product-description d-flex align-items-center main-justify-content">
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <h5><?php echo $_smarty_tpl->tpl_vars['value']->value['image_name'];?>
</h5>
                                                                            </div>
                                    <!-- Рейтинг товара -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Конец секции с основным содержимым ##### -->












<?php }
}
