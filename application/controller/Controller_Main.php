<?php
namespace controller;
use core\Controller;
use mf\Main_Function;
use models\Model_Main;
/**
 * Контроллер главной страницы
 */
class Controller_Main extends Controller
{
    /**
     * Controller_Main constructor.
     */
    function __construct()
    {
        $this->model = new Model_Main();
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
        //получаем продукты из базы данных
        $element = $this->model->get_element();
        //получаем подпункты меню
        $menu_item = $this::get_item_menu();
        //Формируем заголовок
        $smarty->assign('page_title', 'Крыши Москвы');

        //отправляем данные в шаблон
        $smarty->assign('element', $element);
        $smarty->assign('menu_item', $menu_item);

        //загружаем страницы
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'main');
        $this->loadTemplate->loadTemplate($smarty, 'footer');

    }
}