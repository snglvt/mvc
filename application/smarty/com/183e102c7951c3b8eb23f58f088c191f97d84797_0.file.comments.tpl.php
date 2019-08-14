<?php
/* Smarty version 3.1.33, created on 2019-07-18 18:24:46
  from 'C:\xampp\htdocs\joomla.local\application\smarty\template\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d309d4e47a120_65528483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '183e102c7951c3b8eb23f58f088c191f97d84797' => 
    array (
      0 => 'C:\\xampp\\htdocs\\joomla.local\\application\\smarty\\template\\comments.tpl',
      1 => 1561491343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5d309d4e47a120_65528483 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <li class="breadcrumb-item active" aria-current="page">Отзывы</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <!-- Блок комментарий -->
                <div class="col-12 col-sm-12 col-md-8 col-xl-9" id="vk_comments"></div>
                <?php echo '<script'; ?>
 type="text/javascript">
                    VK.Widgets.Comments("vk_comments", {
                        limit: 10, attach: "*"
                    });
                <?php echo '</script'; ?>
>
            </div>
        </div>
    </div><?php }
}
