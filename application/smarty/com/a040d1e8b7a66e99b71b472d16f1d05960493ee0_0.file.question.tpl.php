<?php
/* Smarty version 3.1.33, created on 2019-06-16 18:58:16
  from 'W:\domains\mvc\application\smarty\template\question.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d066718aa8b32_48142069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a040d1e8b7a66e99b71b472d16f1d05960493ee0' => 
    array (
      0 => 'W:\\domains\\mvc\\application\\smarty\\template\\question.tpl',
      1 => 1560700666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_area.tpl' => 1,
  ),
),false)) {
function content_5d066718aa8b32_48142069 (Smarty_Internal_Template $_smarty_tpl) {
?></head>
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

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination_array']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <div>
                        <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['issue'];?>
</strong><br/>
                        <span> <?php echo $_smarty_tpl->tpl_vars['row']->value['answer'];?>
 </span><br><br>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['number_end']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['number_end']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
                                    <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page_id']->value == $_smarty_tpl->tpl_vars['page']->value) {?>active<?php }?>"><a class="page-link"
                                                                                               href='/question/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/'> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                                    </li>
                                <?php }
}
?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }
}
