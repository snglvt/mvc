<?php
namespace controller;
use core\Controller;
use mf\Main_Function;
/**
 * Контроллер страницы фотографий
 */
class Controller_Photo extends controller
{

    function __construct()
    {
        $this->loadtemplate = new main_function();
    }

    /**
     * формирование страницы фотографий
     *
     * @param $smarty объект шаблонизотора
     */
    public function action_index($smarty)
    {
        //заголовок страницы
        $smarty->assign('page_title', 'Фотографии');
        //получаем подпункты меню
        $menu_item = $this::get_item_menu();
        //передаем переменную в шаблон
        $smarty->assign('menu_item', $menu_item);

        //загрузка страниц
        $this->loadtemplate->loadtemplate($smarty, 'header');
        $this->loadtemplate->loadtemplate($smarty, 'photo');
        $this->loadtemplate->loadtemplate($smarty, 'footer');
    }
}