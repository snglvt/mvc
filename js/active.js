(function ($) {
    'use strict';

    var $window = $(window);

    // :: 1.0 Masonary Gallery Active Code

    var proCata = $('.amado-pro-catagory');
    var singleProCata = ".single-products-catagory";

    if ($.fn.imagesLoaded) {
        proCata.imagesLoaded(function () {
            proCata.isotope({
                itemSelector: singleProCata,
                percentPosition: true,
                masonry: {
                    columnWidth: singleProCata
                }
            });
        });
    }

    // :: 2.1 Search Active Code
    var amadoSearch = $('.search-nav');
    var searchClose = $('.search-close');

    amadoSearch.on('click', function () {
        $('body').toggleClass('search-wrapper-on');
    });

    searchClose.on('click', function () {
        $('body').removeClass('search-wrapper-on');
    });

    // :: 2.2 Mobile Nav Active Code
    var amadoMobNav = $('.amado-navbar-toggler');
    var navClose = $('.nav-close');

    amadoMobNav.on('click', function () {
        $('.header-area').toggleClass('bp-xs-on');
    });

    navClose.on('click', function () {
        $('.header-area').removeClass('bp-xs-on');
    });

    // :: 3.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1000,
            easingType: 'easeInOutQuart',
            scrollText: '<i class="fa fa-angle-up" aria-hidden="true"></i>'
        });
    }

    // :: 4.0 Sticky Active Code
    $window.on('scroll', function () {
        if ($window.scrollTop() > 0) {
            $('.header_area').addClass('sticky');
        } else {
            $('.header_area').removeClass('sticky');
        }
    });

    // :: 5.0 Nice Select Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // :: 6.0 Magnific Active Code
    if ($.fn.magnificPopup) {
        $('.gallery_img').magnificPopup({
            type: 'image'
        });
    }

    // :: 7.0 Nicescroll Active Code
    if ($.fn.niceScroll) {
        $(".cart-table table").niceScroll();
    }

    // :: 8.0 wow Active Code
    if ($window.width() > 767) {
        new WOW().init();
    }

    // :: 9.0 Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // :: 10.0 PreventDefault a Click
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // :: 11.0 Slider Range Price Active Code
    $('.slider-range-price').each(function () {
        var min = jQuery(this).data('min');
        var max = jQuery(this).data('max');
        var unit = jQuery(this).data('unit');
        var value_min = jQuery(this).data('value-min');
        var value_max = jQuery(this).data('value-max');
        var label_result = jQuery(this).data('label-result');
        var t = $(this);
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [value_min, value_max],
            slide: function (event, ui) {
                var result = label_result + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
                console.log(t);
                t.closest('.slider-range').find('.range-price').html(result);
            }
        });
    });

})(jQuery);

/**
 * Добавить бронь в корзину
 * @param item_id - id продукта брони
 */
function add_to_product(item_id) {
        $.ajax({
        type: 'POST',
        url: '/reservation/addbooking/' + item_id + '/',
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#product_cnt_items').html(data['cnt_items']);
                $('#product_cnt_items1').html(data['cnt_items']);
                $('#add_product_' + item_id).hide();
                $('#remove_product_' + item_id).show();
                //$('#remove_product_'+item_id).addClass("booking")
                $('#final_price').html(data['cnt_items'] * data['price']);
            }
        }
    });
}

/**
 * Удаление брони из корзины
 * @param item_id - id продукта брони
 */
function remove_product(item_id) {
    $.ajax({
        type: 'POST',
        url: '/reservation/removefromproduct/' + item_id + '/',
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#product_cnt_items').html(data['cnt_items']);
                $('#product_cnt_items1').html(data['cnt_items']);
                $('#add_product_' + item_id).show();
                $('#remove_product_' + item_id).hide();
                //$('#add_product_'+item_id).addClass("booking")
                $('#final_price').html(data['cnt_items'] * data['price']);
            }
        }
    });
}

/**
 * Функция поиска активного пукнта меню
 */
$(function () {
    var location = document.location.href;
    $('.menu li').each(function () {
        var link = $(this).find('a').attr('href');

        if (location.indexOf(link) !== -1)
        {
            $(this).addClass('activ_menu_item');
        }
    });
});
/**
 * Функция поиска активного пукнта
 */
$(function() {
    var pathname_url = window.location.pathname;
    var href_url = window.location.href;
    $(".cart-fav-search").each(function () {
        var link = $(this).find("a").attr("href");
        if(pathname_url == link || href_url == link) {
            $(this).addClass("activ_menu_item");
        }
    });
});


/**
 * Получение даннных с формы
 */
function getData(obj_form) {
    var hData = {};
    $('input, textarea, select', obj_form).each(function () {
        if (this.name && this.name != '') {
            hData[this.name] = this.value;
            //console.log('hData[' + this.name + '] = ' + hData[this.name]);
        }
    });
    return hData;
}

/**
 * Регистрация нового пользователя
 */
function register_new_user() {
    var postData = getData('#register_box');
    console.log(JSON.stringify(postData));
    $.ajax({
        type: "POST",
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                //спрятать блок регитсрации
                $('#register_box').hide();

                //<блок в левом столбце
                $('#user_link').attr('href', 'user/');
                $('#user_link').html(data['user_name']);
                $('#user_box').show();
                //>

                //< показать сообщение об успешной регистрации
                $('#user_box_message').show();
                $("#user_box_message").show('slow');
                setTimeout(function () {
                    $("#user_box_message").hide('slow');
                }, 4000);
                $('#user_box_message').html(data['message']);
                //>

                //<страница заказа
                $('#login_box').hide();
                $('#btnSaveOrder').show();
                //>
            } else {
                //< показать сообщение ошибки регистрации
                $('#register_message').show();
                $('#register_message').html(data['message']);
                //>
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Неудача_");
            console.log(textStatus);
            console.log(errorThrown);
        }
    });
}

/*

/**
 * Регистрация нового пользователя на странице оформления заказа
 */
function register_new_user_in_reg() {
    var postData = getData('#register_box');
    console.log(JSON.stringify(postData));
    $.ajax({
        type: "POST",
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {

                //скрыть блок регистрации
                $('#register_box').hide();

                //<блок в левом столбце
                $('#user_link').attr('href', 'user/');
                $('#user_link').html(data['user_name']);
                $('#user_box').show();
                //>

                //<страница заказа
                $('#login_box').hide();
                $('#btn_save_order').show();
                location.reload();
                //>
            } else {
                //< показать сообщение ошибки регистрации
                $('#order_register_message').show();
                $('#order_register_message').html(data['message']);
                //>
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Неудача_");
            console.log(textStatus);
            console.log(errorThrown);
        }
    });
}

/*


/!**
 * редирект на главную
 *!/
function logout(){
    window.location.href = "/";
}
*/

function show_register_box() {
    $.ajax({
        success: function () {
            if ($('#register_box_hidden').css('display') == 'block') {
                $('#register_box_hidden').hide();
            } else {
                $('#register_box_hidden').show();
            }
        }
    });
}

/**
 * Авторизация
 */
function login() {
    /*var email = $('#login_email').val();
    var pwd = $('#login_pwd').val();

    var postData = "email=" + email + "&pwd=" + pwd;*/
    var postData = getData('#login_box');
    $.ajax({
        type: 'POST',
        url: "/user/login/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            console.log(JSON.stringify(postData));
            console.log(data['success']);
            if (data['success']) {
                $('#register_box').hide();
                $('#registers_box').hide();
                $('#login_box').hide();

                $('#user_link').attr('href', '/user/');
                $('#user_link').html(data['display_name']);
                $('#user_box').show();

                $('#userlink2').html(data['display_name']);
                $('#usersLink').show();

                //>заполняем поля на странице заказ
                $('#name').val(data['name']);
                $('#phone').val(data['phone']);
                //<

                $('#btn_save_order').show();
            } else {
                //< показать сообщение о ошибке при авторизации
                $('#login_message').show();
                $('#login_message').html(data['message']);
                //>
            }
        }
    });
}

//авторизация на странице оформления заказа
function login_in_reg() {
    /* var email = $('#login_email').val();
     var pwd = $('#login_pwd').val();

     var postData = "email=" + email + "&pwd=" + pwd;*/
    var postData = getData('#login_box');
    $.ajax({
        type: 'POST',
        url: "/user/login/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            console.log(JSON.stringify(postData));
            console.log(data['success']);
            if (data['success']) {
                $('#register_box').hide();
                $('#registers_box').hide();
                $('#login_box').hide();

                $('#user_link').attr('href', '/user/');
                $('#user_link').html(data['display_name']);
                $('#user_box').show();

                $('#user_register_message').show();

                //$('#usersLink').html(data['displayName']);
                $('#userlink2').html(data['display_name']);
                $('#usersLink').show();

                //>заполняем поля на странице заказ
                $('#name').val(data['name']);
                $('#phone').val(data['phone']);
                //<

                $('#btn_save_order').show();
                location.reload();

            } else {
                //< показать сообщение ошибки авторизации
                $('#order_login_message').show();
                $('#order_login_message').html(data['message']);
                //>
            }
        }
    });
}


/**
 * Изменение данных пользователя
 */
function update_user_data() {
    var postData = getData('#update_user');
    $.ajax({
        type: 'POST',
        url: "/user/update/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            console.log(JSON.stringify(postData));
            console.log(data['success']);
            if (data['success']) {
                //показать сообщение об успехе
                //< показать сообщение о ошибке при авторизации
                $('#message_order').show();
                $('#message_order').html(data['message']);

                $('#user_link').html(data['user_name']);
                $('#user_link2').html(data['display_name']);

                //>заполняем поля на странице заказ
                $('#name').val(data['name']);
                $('#phone').val(data['phone']);
            } else {
                //< показать сообщение о ошибке при авторизации
                $('#update_user_message').show();
                $('#update_user_message').html(data['message']);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Неудача_");
            console.log(textStatus);
            console.log(errorThrown);
        }
    });
}

/**
 * Сохранить заказ
 */
function save_order() {
    var postData = getData('#form_order');
    console.log(postData);
    $.ajax({
        type: 'POST',
        url: "/reservation/saveorder/",
        data: postData,
        dataType: 'json',
        success: function(data) {
            if (data['success']) {
                //< показать сообщение о сохранении заказа
                $('#message_order').show();
                $("#message_order").show('slow');
                setTimeout(function () {
                    $("#message_order").hide('slow');
                }, 8000);
                //>

                //редирект на страницу пользователя
                setTimeout(function () {
                    location.href = '/user/';
                }, 10000);
            } else {
                alert(data['message']);
            }
        }
    });
}


function show_products(id) {
    var objName = "#purchasesForOrderId_" + id;
    if ($(objName).css('display') != 'table-row') {
        $(objName).show();
    } else {
        $(objName).hide();
    }
}


(function ($) {
    "use strict";
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        } else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function () {
        if (showPass == 0) {
            $(this).next('input').attr('type', 'text');
            $(this).find('i').removeClass('fa-eye');
            $(this).find('i').addClass('fa-eye-slash');
            showPass = 1;
        } else {
            $(this).next('input').attr('type', 'password');
            $(this).find('i').removeClass('fa-eye-slash');
            $(this).find('i').addClass('fa-eye');
            showPass = 0;
        }

    });


})(jQuery);

