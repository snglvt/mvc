<?php
/* Smarty version 3.1.33, created on 2019-06-19 05:31:22
  from 'W:\domains\mvc\application\smarty\template\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d099e7a5f5b45_46937865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e3a832f22f42180f6762f456d37f98400b9faaa' => 
    array (
      0 => 'W:\\domains\\mvc\\application\\smarty\\template\\contact.tpl',
      1 => 1560911469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5d099e7a5f5b45_46937865 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="single-product-area section-padding-100 clearfix">
            <!-- Блок информации для мобильных телефонов (максимальная ширина 767px)-->
            <div class="row showmobile">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <h1 class="page_title">Контакты</h1>
            </div>
            <article class="ProfileCardContainer">
                <div class="ProfileCardAvatar"></div>
                <div class="ProfileCardTop">
                    <p class="ProfileCardName">Крыши Москвы</p>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 516 131" enable-background="new 0 0 516 131" xml:space="preserve"><linearGradient
                                id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="258" y1="130.3" x2="258" y2="-0.7">
                            <stop offset="0" style="stop-color:#808080"/>
                            <stop offset="1" style="stop-color:#8C8C8C"/>
                        </linearGradient>
                        <path fill="url(#SVGID_1_)"
                              d="M430 0h-71.895C335.913 29.5 298.4 50.2 258 50.2c-40.404 0-77.914-20.735-100.105-50.2H86 C38.503 0 0 38.5 0 85.949V131h516V85.949C516 38.5 477.5 0 430 0z"/>
                        <path fill="#FFFFFF"
                              d="M356.105 0h-6.237C328.237 26.8 295.1 44 258 43.95S187.763 26.8 166.1 0h-6.237h-2 C180.086 29.5 217.6 50.2 258 50.2c40.403 0 77.913-20.735 100.105-50.2H356.105z"/></svg>
                </div>
                <div class="ProfileCardBox" style="padding: 5px 0px 0px 30px">
                    <ul class="ProfileCardTextTitle">
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-vk" aria-hidden="true"></i></li>
                    </ul>
                    <ul class="ProfileCardText">
                        <li><a href="mailto:info@roof-mos.ru">info@roof-mos.ru</a></li>
                        <li><a href="tel:+79255292234"> +7(925)5292234</a></li>
                        <li>Москва</li>
                        <li><a href="https://www.instagram.com/daromdobro1/" target="_blank">@daromdobro1</a></li>
                        <li><a href="https://vk.com/1daromdobro" target="_blank">vk.com/1daromdobro</a></li>
                    </ul>
                </div>
            </article>


        </div>
    </div>
    <!-- ##### Конец секции с основным содержимым ##### --><?php }
}
