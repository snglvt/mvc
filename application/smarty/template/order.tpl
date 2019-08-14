{*страница заказа*}
</head>

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
        {include file='header_area.tpl'}
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
                            {foreach from = $booking_array item = item name=products}
                                <tr>
                                    <td><a target="_blank" href="/product/{$item['id_image']}/"><h6
                                                       style="text-align: center;">{$item['image_name']}</h6></a>
                                    </td>
                                    <td style="text-align: center;">{$item['price']} <i style="font-size:14px;"
                                                                                        class="fa fa-rub"
                                                                                        aria-hidden="true"></i>
                                    </td>
                                    <td>{$item['user_data']}</td>
                                </tr>
                            {/foreach}
                        </table>
                    </div>
                    <!-- Блок коментария к заказу -->
                    <div class="comment">
                        <div class="edit">ваш коммментарий к заказу</div>
                        <h1><div class="goo" contenteditable="true">{$comment}</div></h1>
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
                                        {if $product_cnt_items > 0}{$product_cnt_items*1500}
                                        {else}0{/if}
                            </span>
                        <i style="font-size:14px;" class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                    {if ! isset($ar_user)}
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

                            {else}
                                {*<div id="user_register_message" class="success hidden_block">
                                    <span>Успешная регистрация</span>
                                </div>*}
                            <div class="final_data">
                                <span>Ваши данные</span><br/>
                            </div>

                            <div id="order_user_info_box">
                                {$name = $ar_user['name']}
                                {$phone = $ar_user['phone']}
                                <span>Имя:</span>
                                <div style="max-width: 120px;" class="wrap-input100 validate-input"
                                     data-validate="Username is required">
                                    <input class="input100" type="text" id="name" name="name" value="{$name}"/>
                                    <span class="focus-input100"></span>
                                </div>
                                <br/>
                                <span>Телефон:</span>
                                <div style="max-width: 120px;" class="wrap-input100 validate-input m-b-16"
                                     data-validate="Username is required">
                                    <input class="input100" type="tel" id="phone" name="phone" value="{$phone}"/>
                                    <span class="focus-input100"></span>
                                </div>
                                {*<input type="text" id="name" name="name" value="{$name}"/><br/>
                                <span>Телефон:</span><input style="max-width: 120px;" type="tel" id="phone" name="phone" value="{$phone}"/>*}
                            </div>
                            <input id="btn_save_order" type="button" value="Оформить заказ"
                                   onclick="save_order();"/>
                            {/if}

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
