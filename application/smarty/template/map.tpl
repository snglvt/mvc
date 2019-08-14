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
        <div class="single-product-area section-padding-10 clearfix">
            <div class="row showmobile">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Карта</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <h1 class="page_title">Карта крыш</h1>
                <!-- Блок карты 2gis -->
                <div class="row" style="">
                    <div class="map" id="map" style="width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Конец секции с основным содержимым ##### -->