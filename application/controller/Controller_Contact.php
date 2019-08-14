<?php
namespace controller;
use core\Controller;
use mf\Main_Function;
/**
 * Контроллер страницы контактов
 */
class Controller_Contact extends Controller
{
    /**
     * Controller_Сontact constructor.
     */
    function __construct()
    {
        $this->loadTemplate = new Main_Function();
    }

    /**
     * Формирование страницы контактов
     *
     * @param $smarty объект шаблонизотора
     */
    public function action_index($smarty)
    {
        //заголовок страницы
        $smarty->assign('page_title', 'Контакты');

        //получаем подпункты меню
        $menu_item = $this::get_item_menu();
        //передаем переменную в шаблон
        $smarty->assign('menu_item', $menu_item);

        //загрузка страниц
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'contact');
        $this->loadTemplate->loadTemplate($smarty, 'footer');
    }
}