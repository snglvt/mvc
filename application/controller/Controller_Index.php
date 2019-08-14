<?php
namespace controller;
use core\Controller;
use mf\Main_Function;
/**
 * Контроллер главной страницы
 */
class Controller_Index extends Controller
{
    /**
     * Controller_Main constructor.
     */
    function __construct()
    {
        $this->loadTemplate = new Main_Function();
    }

    /**
     * Формировнаие главной страницы
     *
     * @param $smarty объект шаблонизатора
     * @link /
     */
    public function action_index($smarty)
    {
        //Формируем заголовок
        $smarty->assign('page_title', 'Крыши Москвы');
        //получаем подпункты меню
        $menu_item = $this::get_item_menu();
        //отправляем данные в шаблон
        $smarty->assign('menu_item', $menu_item);

        //загружаем страницы
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'index');
        $this->loadTemplate->loadTemplate($smarty, 'footer');

    }
}