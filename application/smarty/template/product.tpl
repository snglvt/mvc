{*шаблон просмотра продукта*}

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
        <!-- ##### Newsletter Area Start ##### -->

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="row showmobile">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{$product['image_name']}</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0"
                                        style="background-image: url(/img/product-img/{$product['id_image']}/1.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1"
                                        style="background-image: url(/img/product-img/{$product['id_image']}/2.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2"
                                        style="background-image: url(/img/product-img/{$product['id_image']}/3.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3"
                                        style="background-image: url(/img/product-img/{$product['id_image']}/4.jpg);">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img"
                                           href="/img/product-img/{$product['id_image']}/1.jpg">
                                            <img class="d-block w-100 object-fit-img"
                                                 src="/img/product-img/{$product['id_image']}/1.jpg"
                                                 alt="First slide">
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <a class="gallery_img"
                                           href="/img/product-img/{$product['id_image']}/2.jpg">
                                            <img class="d-block w-100 object-fit-img"
                                                 src="/img/product-img/{$product['id_image']}/2.jpg"
                                                 alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img"
                                           href="/img/product-img/{$product['id_image']}/3.jpg">
                                            <img class="d-block w-100 object-fit-img"
                                                 src="/img/product-img/{$product['id_image']}/3.jpg"
                                                 alt="Third slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img"
                                           href="/img/product-img/{$product['id_image']}/4.jpg">
                                            <img class="d-block w-100 object-fit-img"
                                                 src="/img/product-img/{$product['id_image']}/4.jpg"
                                                 alt="Fourth slide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {if isset($video_file)}
                        <div class="video-responsive">
                            <video width="100%" controls>
                                <source src="{$video_file}" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
                            </video>
                        </div>
                        {/if}

                    </div>
                        <div class="col-12 col-lg-5">
                            <div class="single_product_desc">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">{$product['price']} <i style="font-size:18px;"
                                                                                    class="fa fa-rub"
                                                                                    aria-hidden="true"></i></p>
                                    <h6 class="product-h6">{$product['image_name']}</h6>
                                    <!-- Ratings & Review -->
                                    <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="review">
                                            <a href="#"></a>
                                        </div>
                                    </div>
                                    <!-- Avaiable -->
                                    <p class="avaibility"><i class="fa fa-circle"></i> Доступно для резерва</p>
                                </div>

                                <div class="short_overview my-5">
                                    <p>{$product['image_content']}</p>
                                </div>

                                <!-- Add to Cart Form -->
                                <form class="cart clearfix" method="post">
                                    <button {if ! $item_in_product} class="hideme" {else}class="booking"{/if}
                                            id="remove_product_{$product['id_image']}" href="#"
                                            onclick="remove_product({$product['id_image']}); return false;"
                                            alt="Отменить бронь">Отменить
                                    </button>
                                    <button {if $item_in_product}class="hideme" {else}class="booking"{/if }
                                            id="add_product_{$product['id_image']}" href="#"
                                            - onclick="add_to_product({$product['id_image']}); return false;"
                                            alt="Забронировать">Забронировать
                                    </button>
                                    <a href="/reservation/" style="margin: 10px;" class="cart-nav"><img
                                                src="/img/core-img/cart.png" alt=""> (<span
                                                id="product_cnt_items1">{if $product_cnt_items > 0}{$product_cnt_items}{else}0{/if}</span>)</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Details Area End -->
        </div>

























