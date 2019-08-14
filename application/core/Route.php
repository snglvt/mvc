<?php
namespace core;
use MySmarty;

/**
 * Стартовый класс загрузки
 */
class Route extends MySmarty
{
    //переменная для загрузки шаблонизатора
    public $smarty;

    public function __construct()
    {
        $this->smarty = $this->getSmarty();
    }

    public function start()
    {
        //инициализируем переменную шаблонизатора колличества элементов в корзине
        $this->smarty->assign('product_cnt_items', count($_SESSION['product']));

        //если в сессиии есть данные об авторизованном пользователе, передаем их в шаблон
        if (isset($_SESSION['user'])) {
            $this->smarty->assign('ar_user', $_SESSION['user']);
        }

        //определяем с каким контроллером будем работать
        $contoller_name = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Main';

        //получаем имя действия
        $action_name = isset($_GET['action']) ? $_GET['action'] : 'index';
        //имя модели
        $model_name = 'Model_' . $contoller_name;

        //формируем наименование контроллера и действия
        $contoller_name = 'Controller_' . $contoller_name;
        $action_name = 'action_' . $action_name;
        //формируем файл модели
        $model_file = $model_name . '.php';
        //если есть файл модели, то добавляем его
        $model_path = "application/models/" . $model_file;
        if (file_exists($model_path)) {
            require_once $model_path;
        }
        //формируем файл контроллера
        $controller_file = $contoller_name . '.php';
        //формируем путь к файлу контроллера, с которым будем работать
        $controller_path = 'application/controller/' . $controller_file;
        //если файл контроллера существует, то добавляем его
        if (file_exists($controller_path)) {
            require_once $controller_path;
            //иначе выводим страницу ошибки
        } else {
            Route::ErrorPage404();
        }
        $contoller_name = 'controller\\' . $contoller_name;
        //создаем эксземляр контроллера
        $controller = new $contoller_name;
        //проверяем, существует ли метод в классе контроллера
        if (method_exists($controller, $action_name)) {
            //если есть, то вызываем его, параметром передаем объект шаблонизатора
            $controller->$action_name($this->smarty);
        } else {
            // иначе выводим страницу ошибки
            Route::ErrorPage404();
        }
    }
    //метод страницы ошибки
    static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/404.htm';
        /*header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");*/
        header('Location:' . $host);
    }
}