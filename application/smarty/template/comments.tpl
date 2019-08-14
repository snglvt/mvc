{*шаблон Ответов на Вопросы*}
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
                        <li class="breadcrumb-item active" aria-current="page">Отзывы</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <!-- Блок комментарий -->
                <div class="col-12 col-sm-12 col-md-8 col-xl-9" id="vk_comments"></div>
                <script type="text/javascript">
                    VK.Widgets.Comments("vk_comments", {
                        limit: 10, attach: "*"
                    });
                </script>
            </div>
        </div>
    </div>