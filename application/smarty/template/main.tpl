{*шаблон главной страницы*}
</head>

<body>

<!-- ##### Секция с основным содержимым ##### -->
<section>
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
        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">
                <!-- Блок информации для мобильных телефонов (максимальная ширина 767px)-->
                <div class="row showmobile">
                    <nav aria-label="breadcrumb">
                        <ol style="margin-bottom: 0px" class="breadcrumb">
                            <li style="text-align: center;" class="breadcrumb-item active" aria-current="page">
                                Экскурсии, фотосессии и свидания на крышах Москвы.
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <!-- Выводим все товары -->
                    {foreach from = $element item = $value}
                        <div id="img{$value['id_image']}" class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Фотография продукта -->
                                <div class="product-img">
                                    <a href="/product/{$value['id_image']}/">
                                        <img style="object-fit: cover; width: 100%; height: 340px;"
                                             src="/img/product-img/work{$value['id_image']}.jpg" alt="Фотография крыши">
                                    </a>
                                </div>

                                <!-- Описание продукта -->
                                <div class="product-description d-flex align-items-center main-justify-content">
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <h5>{$value['image_name']}</h5>
                                        {*<p class="product-price">{$value['price']} <i style="font-size:18px;" class="fa fa-rub" aria-hidden="true"></i></p>*}
                                    </div>
                                    <!-- Рейтинг товара -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Конец секции с основным содержимым ##### -->












