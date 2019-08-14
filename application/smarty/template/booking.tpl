{*шаблон бронирования*}
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
        <!-- Начало блока основного представления -->
        <div class="single-product-area section-padding-100 clearfix">
            <!-- Блок информации для мобильных телефонов (максимальная ширина 767px)-->
            <div class="row showmobile">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Заказ</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-xl-8">
                        {if ! $booking_array}
                        <!-- Если в корзине пусто -->
                        <h6>В корзине пусто</h6>
                    </div>
                </div>
            </div>
        </div>
        {else}
        <!-- Если в корзине есть товар -->
        <form action="/reservation/order/" method="POST">
            <div class="table-responsive">
                <table class="table table_booking">
                    <thead>
                    <tr>
                        <th style="text-align: center;">Наименование</th>
                        <th>Цена</th>
                        <th>Дата</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <!-- Выводим все зарезервированные товары-->
                    {foreach from = $booking_array item = item name=products}
                        <tr>
                            <td><a href="/product/{$item['id_image']}/"><h6
                                            style="text-align: center;">{$item['image_name']}</h6></a>
                            </td>
                            <td style="text-align: center;">{$item['price']} <i style="font-size:14px;"
                                                                                class="fa fa-rub"
                                                                                aria-hidden="true"></i>
                            </td>
                            <td><input type="date" id="date" required="required" name="date_{$item['id_image']}"/></td>
                            <td><br>
                                <button id="remove_product_{$item['id_image']}"
                                        class="button_table_remove" href="#"
                                        onClick="remove_product({$item['id_image']}); return false;"
                                        title="Удалить из корзины">Удалить
                                </button>
                                <button id="add_product_{$item['id_image']}" class="button_table"
                                        href="#"
                                        onClick="add_to_product({$item['id_image']}); return false;"
                                        title="Восстановить товар">Восстановить
                                </button>
                            </td>
                        </tr>
                    {/foreach}
                </table>
            </div>
            <!-- Столбец итоговой цены -->
            <table style="margin-top: 35px;" class="table_booking">
                <tr>
                    <th>Итоговая цена</th>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 17px;"><span id="final_price">
                                        <!-- Если в корзине не пусто, то перемножаем колличество товаров на фиксированную цену -->
                                        {if $product_cnt_items > 0}{$product_cnt_items*1500}
                                        {else}0{/if}
                                    </span> <i style="font-size:14px;" class="fa fa-rub" aria-hidden="true"></i>
                    </td>
                </tr>
            </table>
            <div class="form-row">
                                <textarea name="comment"
                                          class="input"
                                          placeholder="Добавьте комментарии к заказу..."
                                ></textarea>
            </div>
            <input type="submit" style="margin-top: 15px;" class="booking" type="submit"
                   value="Оформить заказ"/>
        </form>
        {/if}
    </div>
    <!-- ##### Конец секции с основным содержимым ##### -->
