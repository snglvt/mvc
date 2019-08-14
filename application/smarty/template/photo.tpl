{*шаблон Ответов на Вопросы*}
</head>
<body>
<section>

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
            <div class="single-product-area" id="colorlib-main">
                <div class="row showmobile">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Фотографии</li>
                        </ol>
                    </nav>
                </div>



                <div class="row">
                    {for $foo=1 to 13}
                    <div class="col-lg-3 col-md-4 col-6 thumb">
                        <a data-fancybox="gallery" href="/images/image_{$foo}.jpg">
                            <img class="img-fluid" src="/images/image_{$foo}.jpg" alt="Фотография вида с крыши">
                        </a>
                    </div>
                    {/for}
                </div>
            </div><!-- END COLORLIB-MAIN -->
        </div>





