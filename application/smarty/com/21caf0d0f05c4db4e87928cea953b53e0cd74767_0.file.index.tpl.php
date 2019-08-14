<?php
/* Smarty version 3.1.33, created on 2019-06-25 03:52:05
  from 'W:\domains\mvc\application\smarty\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d117035119842_98431188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21caf0d0f05c4db4e87928cea953b53e0cd74767' => 
    array (
      0 => 'W:\\domains\\mvc\\application\\smarty\\template\\index.tpl',
      1 => 1561423923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5d117035119842_98431188 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="single-product-area is-preload">
            <nav>
                <a id="logo" href="#">Крыши<span id="logo-art">Москвы</span>sis</a>
            </nav>
        </div>
    </div>
    <!-- ##### Конец секции с основным содержимым ##### --><?php }
}
