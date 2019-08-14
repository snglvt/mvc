{*шаблон страницы карты*}
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
        <div class="single-product-area is-preload">
            <nav>
                <a id="logo" href="#">Крыши<span id="logo-art">Москвы</span>sis</a>
            </nav>
        </div>
    </div>
    <!-- ##### Конец секции с основным содержимым ##### -->