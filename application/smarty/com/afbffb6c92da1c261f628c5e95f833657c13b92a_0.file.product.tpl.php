<?php
/* Smarty version 3.1.33, created on 2019-05-23 20:35:55
  from 'W:\domains\mvc\application\smarty\template\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6d9fb29adb6_88853903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afbffb6c92da1c261f628c5e95f833657c13b92a' => 
    array (
      0 => 'W:\\domains\\mvc\\application\\smarty\\template\\product.tpl',
      1 => 1558632954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5ce6d9fb29adb6_88853903 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
        <?php $_smarty_tpl->_subTemplateRender('file:header_area.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- ##### Newsletter Area Start ##### -->

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="row showmobile">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['product']->value['image_name'];?>
</li>
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
                                        style="background-image: url(/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/1.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1"
                                        style="background-image: url(/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/2.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2"
                                        style="background-image: url(/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/3.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3"
                                        style="background-image: url(/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/4.jpg);">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img"
                                           href="/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/1.jpg">
                                            <img class="d-block w-100 object-fit-img"
                                                 src="/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/1.jpg"
                                                 alt="First slide">
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <a class="gallery_img"
                                           href="/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/2.jpg">
                                            <img class="d-block w-100 object-fit-img"
                                                 src="/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/2.jpg"
                                                 alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img"
                                           href="/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/3.jpg">
                                            <img class="d-block w-100 object-fit-img"
                                                 src="/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/3.jpg"
                                                 alt="Third slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img"
                                           href="/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/4.jpg">
                                            <img class="d-block w-100 object-fit-img"
                                                 src="/img/product-img/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
/4.jpg"
                                                 alt="Fourth slide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['video_file']->value)) {?>
                        <div class="video-responsive">
                            <video width="100%" controls>
                                <source src="<?php echo $_smarty_tpl->tpl_vars['video_file']->value;?>
" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
                            </video>
                        </div>
                        <?php }?>

                    </div>
                        <div class="col-12 col-lg-5">
                            <div class="single_product_desc">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <i style="font-size:18px;"
                                                                                    class="fa fa-rub"
                                                                                    aria-hidden="true"></i></p>
                                    <h6 class="product-h6"><?php echo $_smarty_tpl->tpl_vars['product']->value['image_name'];?>
</h6>
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
                                    <p><?php echo $_smarty_tpl->tpl_vars['product']->value['image_content'];?>
</p>
                                </div>

                                <!-- Add to Cart Form -->
                                <form class="cart clearfix" method="post">
                                    <button <?php if (!$_smarty_tpl->tpl_vars['item_in_product']->value) {?> class="hideme" <?php } else { ?>class="booking"<?php }?>
                                            id="remove_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
" href="#"
                                            onclick="remove_product(<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
); return false;"
                                            alt="Отменить бронь">Отменить
                                    </button>
                                    <button <?php if ($_smarty_tpl->tpl_vars['item_in_product']->value) {?>class="hideme" <?php } else { ?>class="booking"<?php }?>
                                            id="add_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
" href="#"
                                            - onclick="add_to_product(<?php echo $_smarty_tpl->tpl_vars['product']->value['id_image'];?>
); return false;"
                                            alt="Забронировать">Забронировать
                                    </button>
                                    <a href="/reservation/" style="margin: 10px;" class="cart-nav"><img
                                                src="/img/core-img/cart.png" alt=""> (<span
                                                id="product_cnt_items1"><?php if ($_smarty_tpl->tpl_vars['product_cnt_items']->value > 0) {
echo $_smarty_tpl->tpl_vars['product_cnt_items']->value;
} else { ?>0<?php }?></span>)</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Details Area End -->
        </div>

























<?php }
}
