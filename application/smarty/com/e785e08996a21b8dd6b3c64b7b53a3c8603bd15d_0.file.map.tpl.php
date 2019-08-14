<?php
/* Smarty version 3.1.33, created on 2019-07-18 18:24:35
  from 'C:\xampp\htdocs\joomla.local\application\smarty\template\map.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d309d43bd8a59_77265708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e785e08996a21b8dd6b3c64b7b53a3c8603bd15d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\joomla.local\\application\\smarty\\template\\map.tpl',
      1 => 1560701715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5d309d43bd8a59_77265708 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!-- Блок информации для мобильных телефонов (максимальная ширина 767px)-->
        <div class="single-product-area section-padding-10 clearfix">
            <div class="row showmobile">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Карта</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <h1 class="page_title">Карта крыш</h1>
                <!-- Блок карты 2gis -->
                <div class="row" style="">
                    <div class="map" id="map" style="width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Конец секции с основным содержимым ##### --><?php }
}
