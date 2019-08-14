<?php
/* Smarty version 3.1.33, created on 2019-08-06 11:04:56
  from 'W:\domains\mvc\application\smarty\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4934a8395fc2_76124491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a538bd0952e64a3a9d2a646cb6d9358b5073e489' => 
    array (
      0 => 'W:\\domains\\mvc\\application\\smarty\\template\\header.tpl',
      1 => 1565076148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4934a8395fc2_76124491 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Экскурсии и прогулки">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="apple-touch-icon" sizes="72x72" href="/img/core-img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/core-img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/core-img/favicon-16x16.png">
    <link rel="manifest" href="/img/core-img/site.webmanifest">
    <link rel="mask-icon" href="/img/core-img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/core-img/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/img/core-img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    <!-- Заголовок  -->
    <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>

    <!-- Основные стили страниц -->
    <link rel="stylesheet" type="text/css" href="/css/core-style.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"><?php echo '</script'; ?>
>
    
    <!-- 2gis api для страницы Карта -->
    <?php echo '<script'; ?>
 type="text/javascript" src="//maps.api.2gis.ru/2.0/loader.js?pkg=full"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" async src="/js/map.js"><?php echo '</script'; ?>
>

    <!-- Стили страницы Фотографии -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- vk api -->
    <?php echo '<script'; ?>
 type="text/javascript" src="//vk.com/js/api/openapi.js?160"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        VK.init({
            apiId: 6994492,
            onlyWidgets: true
        });
    <?php echo '</script'; ?>
>

<?php }
}
