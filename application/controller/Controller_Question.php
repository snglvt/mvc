<?php
namespace controller;
use core\Controller;
use models\Model_Question;
use mf\Main_Function;
/**
 * Контроллер страницы вопросов
 */
class Controller_Question extends Controller
{
    /**
     * Controller_Question constructor.
     */
    function __construct()
    {
        $this->model = new Model_Question();
        $this->loadTemplate = new Main_Function();
    }

    /**
     * Формирование страницы вопросов
     *
     * @link /question/
     * @param $smarty объект шаблонизатора
     */
    public function action_index($smarty)
    {
        //определяем id страницы из массива GET, если страница не передана, то показываем первую
        $page_id = isset($_GET['id']) ? $_GET['id'] : 1;
        $page_id = intval($page_id); //получаем целочисленное значение переменной

        $number_of_result = $this->model->get_row(); //общее колличество продуктов в базе данных
        //если пришли неправильные данные редирект на главную
        if($page_id > $number_of_result){
            Main_Function::redirect('/');
        }

        $number_of_divider = 7; //сколько элементов показывать на странице
        $number_end = ceil($number_of_result/$number_of_divider); //колличество страниц пагинации

        //получаем массив данных страницы пагинации
        $pagination_array = $this->model->get_pagination_array($page_id, $number_of_divider);
        //получаем подпункты меню
        $menu_item = $this::get_item_menu();

        //передаем данные в шаблон
        $smarty->assign('menu_item', $menu_item);
        $smarty->assign('pagination_array', $pagination_array);
        $smarty->assign('number_end', $number_end);
        $smarty->assign('page_id', $page_id);
        $smarty->assign('page_title', 'Ответы на вопросы');
        //загружаем страницы
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'question');
        $this->loadTemplate->loadTemplate($smarty, 'footer');
    }
}
