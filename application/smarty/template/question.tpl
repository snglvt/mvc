{*шаблон Ответов на Вопросы*}
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
        <div class="single-product-area section-padding-100 clearfix">
                <div class="row showmobile">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ответы на вопросы</li>
                        </ol>
                    </nav>
                </div>
            <div class="container-fluid">
                 <h1 class="page_title">Ответы на вопросы</h1>

                {foreach from = $pagination_array item = $row}
                    <div>
                        <strong>{$row['issue']}</strong><br/>
                        <span> {$row['answer']} </span><br><br>
                    </div>
                {/foreach}

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                {for $page = 1 to $number_end}
                                    <li class="page-item {if $page_id eq $page}active{/if}"><a class="page-link"
                                                                                               href='/question/{$page}/'> {$page}</a>
                                    </li>
                                {/for}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>