{*страница пользователя*}
</head>
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

        {include file='header_area.tpl'}

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
                                    <td>{$ar_user['user_email']}</td>
                                </tr>
                                <tr>
                                    <td>Имя</td>
                                    <td>
                                        <div class="wrap-input100 validate-input m-b-16"
                                             data-validate="Username is required">
                                            <input class="input100" type="text" id="newName" name="new_name"
                                                   value="{$ar_user['display_name']}" placeholder="имя"/>
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
                                                   value="{$ar_user['phone']}" placeholder="телефон"/>
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
                                    {* <input type="password" id="newPwd1" name="new_pwd1" value=""/></td>*}
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
                                    {*<input type="password" id="newPwd2" name="new_pwd2" value=""/></td>*}
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
                                    {*<input type="password" id="curPwd" name="cur_pwd" value=""/></td>*}
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
                {if ! $rs_user_orders}
                    нет заказов
                {else}
                    <table class="table" border="1" cellpadding="1" cellspacing="1">
                        <tr>
                            <th>№</th>
                            <th>Действие</th>
                            {*<th>ID заказа</th>*}
                            {*<th>Статус</th>*}
                            <th>Дата создания</th>
                            {*<th>Дата оплаты</th>*}
                            <th>Дополнительная информация</th>
                        </tr>
                        {foreach $rs_user_orders as $item name=orders}
                            <tr>
                                <td>{$smarty.foreach.orders.iteration}</td>
                                <td><a href="#" onClick="show_products('{$item['id']}'); return false;">Показать
                                        товар заказа</td>
                                {*<td>{$item['id']}</td>*}
                                {*<td>{$item['status']}</td>*}
                                <td>{$item['date_created']}</td>
                                {*<td>{$item['date_payment']}</td>*}
                                <td>{$item['comment']}</td>
                            </tr>
                            <tr class="hidden_block" id="purchasesForOrderId_{$item['id']}">
                                <td colspan="7">
                                    {if $item['children']}
                                        <table border="1" cellpadding="1" cellspacing="1" width="100%">
                                            <tr>
                                                <th>Адрес</th>
                                                {*<th>ID</th>*}
                                                <th>Название</th>
                                                <th>Цена</th>
                                                {*<th>Количество</th>*}
                                            </tr>
                                            {foreach $item['children'] as $itemChild name=products}
                                                <tr>
                                                    <td>{$smarty.foreach.products.iteration}</td>
                                                    {*<td>{$itemChild['product_id']}</td>*}
                                                    <td>
                                                        <a href="/product/{$itemChild['product_id']}/">{$itemChild['image_name']}</a>
                                                    </td>
                                                    <td>{$itemChild['price']}</td>
                                                    {*<td>*}{*{$itemChild['amount']}*}{*</td>*}
                                                </tr>
                                            {/foreach}
                                        </table>
                                    {/if}
                                </td>
                            </tr>
                        {/foreach}
                    </table>
                {/if}
            </div>
        </div>
    </div>

