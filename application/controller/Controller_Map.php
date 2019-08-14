<?php
namespace controller;
use core\Controller;
use mf\Main_Function;
/**
 * Контроллер страницы карта
 */
class Controller_Map extends Controller
{
    /**
     * Controller_Map constructor.
     */
    function __construct()
    {
        $this->loadTemplate = new Main_Function();
    }

    /**
     * Формирование страницы карта
     *
     * @param $smarty объект шаблонизотора
     */
    public function action_index($smarty)
    {
        //получаем подпункты меню
        $menu_item = $this::get_item_menu();
        //передаем переменную в шаблон
        $smarty->assign('menu_item', $menu_item);
        //заголовок страницы
        $smarty->assign('page_title', 'Карта крыш');


        //загрузка страниц
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'map');
        $this->loadTemplate->loadTemplate($smarty, 'footer');
    }
}