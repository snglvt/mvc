<?php
/* Smarty version 3.1.33, created on 2019-07-19 00:06:39
  from 'C:\xampp\htdocs\joomla.local\application\smarty\template\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d30ed6f788608_43674428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a838e9bd1733dab4d3d3773398b32063f09fe44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\joomla.local\\application\\smarty\\template\\order.tpl',
      1 => 1561207692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5d30ed6f788608_43674428 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="single-product-area section-padding-100 clearfix">
            <div class="row showmobile">
                <nav aria-label="breadcrumb
">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><a href="/reservation/">Заказ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Оформление заказа</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <!-- Блок данных сформированного заказа -->
                <form id="form_order" action="/reservation/saveorder/" method="POST">
                    <div class="col-12 col-sm-12 col-md-6 col-xl-6">
                        <table class="table table_booking">
                            <thead>
                            <tr>
                                <th style="text-align: center;">Наименование</th>
                                <th>Цена</th>
                                <th>Дата</th>
                            </tr>
                            </thead>
                            <!-- Выводим в табличной форме данные оформляемого товара -->
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booking_array']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <tr>
                                    <td><a target="_blank" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
/"><h6
                                                       style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value['image_name'];?>
</h6></a>
                                    </td>
                                    <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 <i style="font-size:14px;"
                                                                                        class="fa fa-rub"
                                                                                        aria-hidden="true"></i>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_data'];?>
</td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </table>
                    </div>
                    <!-- Блок коментария к заказу -->
                    <div class="comment">
                        <div class="edit">ваш коммментарий к заказу</div>
                        <h1><div class="goo" contenteditable="true"><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</div></h1>
                        <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                        <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                             xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <defs>
                                <filter id="goo">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"/>
                                    <feColorMatrix in="blur" mode="matrix"
                                                   values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                                   result="goo"/>
                                    <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="final_data">
                        <span>Итоговая цена</span>
                        <span id="final_price">
                                        <?php if ($_smarty_tpl->tpl_vars['product_cnt_items']->value > 0) {
echo $_smarty_tpl->tpl_vars['product_cnt_items']->value*1500;?>

                                        <?php } else { ?>0<?php }?>
                            </span>
                        <i style="font-size:14px;" class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                    <?php if (!isset($_smarty_tpl->tpl_vars['ar_user']->value)) {?>
                    <div class="login_box_order col-8 col-xs-9 col-sm-6 col-md-6 .col-lg-3 col-xl-3" id="login_box">
                                    <div class="p-b-11"><span class="txt1 p-b-11">
						                Авторизуйтесь
					                </span>
                                    </div>
                        <div id="order_login_message" class="validation">
                        </div>
                        <div class="wrap-input100 validate-input m-b-16"
                             data-validate="Username is required">
                            <input class="input100" type="text" id="login_email" name="login_email" value=""
                                   placeholder="логин">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-12"
                             data-validate="Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                            <input class="input100" type="password" id="login_pwd" name="login_pwd" value=""
                                   placeholder="пароль">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <input class="login100-form-btn" type="button" onclick="login_in_reg();"
                                   value="Войти"/>
                        </div>

                        <div id="register_box">
                                 <span class="txt1 p-b-11">
                                    или зарегистрируйтесь
		                        </span>
                            <div id="order_register_message" class="validation">
                            </div>
                            <div id="register_box">
                                <div class="wrap-input100 validate-input m-b-16"
                                     data-validate="Username is required">
                                    <input class="input100" type="text" id="email" name="email" value=""
                                           placeholder="логин"/>
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-12"
                                     data-validate="Password is required">
						                <span class="btn-show-pass">
					                		<i class="fa fa-eye"></i>
					                	</span>
                                    <input type="password" class="input100" id="pwd1" name="pwd1" value=""
                                           placeholder="пароль"/>
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-12"
                                     data-validate="Password is required">
						                    <span class="btn-show-pass">
							                    <i class="fa fa-eye"></i>
						                    </span>
                                    <input type="password" class="input100" id="pwd2" name="pwd2" value=""
                                           placeholder="повтор пароля"/>
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16"
                                     data-validate="Username is required">
                                    <input class="input100" type="text" id="name" name="name" value=""
                                           placeholder="имя"/>
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-16"
                                     data-validate="Username is required">
                                    <input class="input100" type="text" id="phone" name="phone" value=""
                                           placeholder="телефон"/>
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="container-login100-form-btn">
                                    <input class="login100-form-btn" type="button"
                                           onclick="register_new_user_in_reg();" value="Зарегистрироваться"/>
                                </div>
                            </div>

                            <?php } else { ?>
                            <div id="user_register_message" class="success hidden_block">
                                <span>Успешная регистрация</span>
                            </div>
                            <div class="final_data">
                                <span>Ваши данные</span><br/>
                            </div>

                            <div id="order_user_info_box">
                                <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['ar_user']->value['name']);?>
                                <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['ar_user']->value['phone']);?>
                                <span>Имя:</span>
                                <div style="max-width: 120px;" class="wrap-input100 validate-input"
                                     data-validate="Username is required">
                                    <input class="input100" type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                                    <span class="focus-input100"></span>
                                </div>
                                <br/>
                                <span>Телефон:</span>
                                <div style="max-width: 120px;" class="wrap-input100 validate-input m-b-16"
                                     data-validate="Username is required">
                                    <input class="input100" type="tel" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"/>
                                    <span class="focus-input100"></span>
                                </div>
                                                            </div>
                            <input id="btn_save_order" type="button" value="Оформить заказ"
                                   onclick="save_order();"/>
                            <?php }?>

                            <input id="btn_save_order" class="hideme" type="button"
                                   value="Оформить заказ"
                                   onclick="save_order();"/>
                        </div>
                        <div class="hidden_block success col-12 col-sm-6 col-md-12 col-xl-6" id="message_order">
                            <span> Заказ успешно сохранен, мы скоро с вами свяжимся. </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }
}
