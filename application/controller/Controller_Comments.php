<?php
namespace controller;
use core\Controller;
use mf\Main_Function;
/**
 * Контроллер страницы коментрарий
 */
class Controller_Comments extends Controller
{
    /**
     * Controller_Comments constructor.
     */
    function __construct()
    {
        $this->loadTemplate = new Main_Function();
    }

    /**
     * Формирование страницы коментрарий
     *
     * @param $smarty объект шаблонизотора
     */
    public function action_index($smarty)
    {
        //заголовок страницы
        $smarty->assign('page_title', 'Отзывы');

        //получаем подпункты меню
        $menu_item = $this::get_item_menu();
        //передаем переменную в шаблон
        $smarty->assign('menu_item', $menu_item);

        //загрузка страниц
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'comments');
        $this->loadTemplate->loadTemplate($smarty, 'footer');
    }
}