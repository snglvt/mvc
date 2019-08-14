<header class="header-area clearfix">
    <!-- Иконка закрытия -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Логотип -->
    <div class="logo">
        <a style="padding-left: 18px;" href="/"><img src="/img/core-img/site_icon.png" alt=""></a>
        <div><span>Крыши Москвы</span></div>
    </div>
    <!-- Меню -->
    <nav class="amado-nav menu">
        <ul>
            {foreach from = $menu_item item = $item}
                <li><a href="{$item['link']}">{$item['item']}</a></li>
            {/foreach}
        </ul>
    </nav>
    <!-- Корзина -->
    <div class="cart-fav-search mb-10">
        <a href="/reservation/" class="cart-nav"><img src="/img/core-img/cart.png" alt=""> Корзина (<span
                    id="product_cnt_items">{if $product_cnt_items > 0}{$product_cnt_items}{else}0{/if}</span>)</a>
    </div>

    {if isset($ar_user)}

        <!-- Блок зарегистрированного пользователя, проверка php -->
        <div class="user_box" id="user_box1">
            <a href="/user/" id="user_link_1"><i class="fa fa-user" aria-hidden="true"></i> {$ar_user['display_name']}
            </a><br/>
            <a href="/user/logout/"><i class="fa fa-unlock" aria-hidden="true"></i> Выход</a>
        </div>
    {else}

        <!-- Блок зарегистрированного пользователя обрабатываемого ajax -->
        <div id="user_box" class="hidden_block user_box">
            <div id="user_box_message" class="hidden_block success"></div>

            <i class="fa fa-user" aria-hidden="true"></i>
            <a href="" id="user_link"></a><br/>
            <i class="fa fa-unlock" aria-hidden="true"></i>
            <a href="/user/logout/" {*onсlick="logout();"*}>Выход</a>
        </div>
        {if ! isset($hide_login_box)}

            <!-- Блок авторизации -->
            <div class="limiter" id="login_box">
                <div class="container-login100">
                    <div class="wrap-login100 p-l-1 p-r-1 p-t-1 p-b-1">
                        <form class="login100-form validate-form flex-sb flex-w">
                        <span class="txt1 p-b-11">
						Авторизация
					    </span>
                            <div id="login_message" class="validation">
                            </div>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                                <input class="input100" type="text" id="login_email" name="login_email" value=""
                                       placeholder="логин">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                                <input class="input100" type="password" id="login_pwd" name="login_pwd" value=""
                                       placeholder="пароль">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="container-login100-form-btn">
                                <input class="login100-form-btn" type="button" onclick="login();" value="Войти"/>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Блок регистрации -->
            <div id="register_box">
        <span class="txt1 p-b-11">
            <a href="#" id="link_reg" onclick="show_register_box(); return false;">Регистрация</a>
		</span>
                <div id="register_message" class="validation">
                </div>
                <div id="register_box_hidden" class="hidden_block reg_block">
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                        <input class="input100" type="text" id="email" name="email" value="" placeholder="логин"/>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input type="password" class="input100" id="pwd1" name="pwd1" value="" placeholder="пароль"/>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input type="password" class="input100" id="pwd2" name="pwd2" value=""
                               placeholder="повтор пароля"/>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="button" onclick="register_new_user();"
                               value="Зарегистрироваться"/>
                    </div>
                </div>
            </div>
        {/if}
    {/if}

    <!-- Иконки социальных сетей -->
    <div class="social-info d-flex justify-content-between">
            <a style="font-size: 14px;" href="tel:+79255292234"><i class="fa fa-mobile" aria-hidden="true"></i> +7(925)5292234</a>
        <a href="https://vk.com/1daromdobro" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/daromdobro1/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
</header>