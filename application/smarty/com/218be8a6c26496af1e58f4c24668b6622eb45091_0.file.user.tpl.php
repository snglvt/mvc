<?php
/* Smarty version 3.1.33, created on 2019-07-18 18:26:55
  from 'C:\xampp\htdocs\joomla.local\application\smarty\template\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d309dcf71b091_47954968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '218be8a6c26496af1e58f4c24668b6622eb45091' => 
    array (
      0 => 'C:\\xampp\\htdocs\\joomla.local\\application\\smarty\\template\\user.tpl',
      1 => 1557745307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5d309dcf71b091_47954968 (Smarty_Internal_Template $_smarty_tpl) {
?></head>
<body>
<section>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="/img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">
        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a id="site_icon_img" href="/"><img src="/img/core-img/site_icon.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- Header Area Start -->

        <?php $_smarty_tpl->_subTemplateRender('file:header_area.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="single-product-area section-padding-100 clearfix">
            <div class="row showmobile">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Страница пользователя</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <form id="update_user">
                            <div class="final_data">
                                <span>Ваши регистрационные данные:</span>
                            </div>
                            <table class="border_collapse">
                                <tr>
                                    <td>Логин</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ar_user']->value['user_email'];?>
</td>
                                </tr>
                                <tr>
                                    <td>Имя</td>
                                    <td>
                                        <div class="wrap-input100 validate-input m-b-16"
                                             data-validate="Username is required">
                                            <input class="input100" type="text" id="newName" name="new_name"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['ar_user']->value['display_name'];?>
" placeholder="имя"/>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Телефон</td>
                                    <td>
                                        <div class="wrap-input100 validate-input m-b-16"
                                             data-validate="Username is required">
                                            <input class="input100" type="tel" id="newPhone" name="new_phone"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['ar_user']->value['phone'];?>
" placeholder="телефон"/>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Новый пароль</td>
                                    <td>
                                        <div class="wrap-input100 validate-input m-b-12">
						                    <span class="btn-show-pass">
						                    	<i class="fa fa-eye"></i>
						                    </span>
                                            <input class="input100" type="password" id="newPwd1" name="new_pwd1"
                                                   value="" placeholder="новый пароль">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </td>
                                                                    </tr>
                                <tr>
                                    <td>Повтор пароля</td>
                                    <td>
                                        <div class="wrap-input100 validate-input m-b-12">
						                    <span class="btn-show-pass">
						                    	<i class="fa fa-eye"></i>
						                    </span>
                                            <input class="input100" type="password" id="newPwd2" name="new_pwd2"
                                                   value="" placeholder="повтор пароля">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </td>
                                                                    </tr>
                                <tr>
                                    <td>Для того чтобы сохраннить данные, введите текущий пароль</td>
                                    <td>
                                        <div class="wrap-input100 validate-input m-b-12"
                                             data-validate="Password is required">
						                    <span class="btn-show-pass">
						                    	<i class="fa fa-eye"></i>
						                    </span>
                                            <input class="input100" type="password" id="curPwd" name="cur_pwd" value=""
                                                   placeholder="пароль">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </td>
                                                                    </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input type="button" class="button_table_remove" value="Сохранить изменения"
                                               onclick="update_user_data();"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <div class="hidden_block success" id="message_order">
                            <span></span>
                        </div>
                        <div id="update_user_message" class="validation">
                        </div>
                    </div>

                </div>
            </div>
            <div class="table-responsive orders">
                <div class="final_data">
                    <span>Заказы:</span>
                </div>
                <?php if (!$_smarty_tpl->tpl_vars['rs_user_orders']->value) {?>
                    нет заказов
                <?php } else { ?>
                    <table class="table" border="1" cellpadding="1" cellspacing="1">
                        <tr>
                            <th>№</th>
                            <th>Действие</th>
                                                                                    <th>Дата создания</th>
                                                        <th>Дополнительная информация</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_user_orders']->value, 'item', false, NULL, 'orders', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']++;
?>
                            <tr>
                                <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration'] : null);?>
</td>
                                <td><a href="#" onClick="show_products('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false;">Показать
                                        товар заказа</td>
                                                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
                            </tr>
                            <tr class="hidden_block" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                <td colspan="7">
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
                                        <table border="1" cellpadding="1" cellspacing="1" width="100%">
                                            <tr>
                                                <th>Адрес</th>
                                                                                                <th>Название</th>
                                                <th>Цена</th>
                                                                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                                                <tr>
                                                    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
                                                                                                        <td>
                                                        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['image_name'];?>
</a>
                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
                                                                                                    </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php }?>
            </div>
        </div>
    </div>

<?php }
}
