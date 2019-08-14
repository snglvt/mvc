<?php
/* Smarty version 3.1.33, created on 2019-04-08 14:59:33
  from 'D:\OpenServer\OSPanel\domains\mvc\application\smarty\template\main\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab37a54b6c45_42837420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '517b88475ec2215de3dfe19fb78ac4a33fb1e8b2' => 
    array (
      0 => 'D:\\OpenServer\\OSPanel\\domains\\mvc\\application\\smarty\\template\\main\\header.tpl',
      1 => 1554724770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab37a54b6c45_42837420 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" type="text/css" href="/css/default/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/default/main.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
</head>
<body>

<header>
    <div class="logo">
        <a class = "post" href="/">Крыши Москвы<!--<img src="img/site_icon.png" title="Magnetic" alt="Крыши Москвы"/>--></a>
    </div><!-- end logo -->

    <div id="menu_icon"></div>
    <nav>
        <ul>
            <li><a href="/" class="selected">Главная</a></li>
            <li><a href="/question/receive//1">Ответы на вопросы</a></li>
            <li><a href="/contact">Контакты</a></li>
            <!--<li><a href="#">Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>-->
        </ul>
    </nav><!-- end navigation menu -->

    <div class="footer clearfix">
        <ul class="social clearfix">
            <li><a href="#" class="fb" data-title="Facebook"></a></li>
            <li><a href="#" class="google" data-title="Google +"></a></li>
            <li><a href="#" class="behance" data-title="Behance"></a></li>
            <!--<li><a href="#" class="twitter" data-title="Twitter"></a></li>
            <li><a href="#" class="dribble" data-title="Dribble"></a></li>-->
            <li><a href="#" class="rss" data-title="RSS"></a></li>
        </ul><!-- end social -->

        <div class="rights">

        </div><!-- end rights -->
    </div ><!-- end footer -->
<?php }
}
