<?php
namespace controller;
use core\Controller;
use mf\Main_Function;
use models\Model_Product;
/**
 * Контроллер страницы продукта
 */
class Controller_Product extends Controller
{
    /**
     * Controller_Product constructor.
     */
    public function __construct()
    {
        $this->model = new Model_Product();
        $this->loadTemplate = new Main_Function();
    }


    /**
     * Формирование страницы продукта
     *
     * @link /product/
     * @param $smarty
     */
    public function action_index($smarty)
    {
        //определяем id продукта из массива GET
        $product_id = isset($_GET['id']) ? $_GET['id'] : 'null';
        $product_id = intval($product_id); //получаем целочисленное значение переменной
        //получаем общее колличество продуктов в базе данных
        $end_number = $this->model->get_num_rows();

        //если получен пустой или неправильный id продукта, то редирект на главную
        if($product_id == null || $product_id > $end_number) header("Location: /");

        //получить продукт из базы данных по id
        $product = $this->model->get_data($product_id);
        $product = $product[0];
        //устанавливаем флаг о наличии продукта
        $smarty->assign('item_in_product', 0);

        //если в сессии есть корзина с продуктом, то меняем флаг
        if (in_array($product_id, $_SESSION['product'])) {
            $smarty->assign('item_in_product', 1);
        }
        if (file_exists("video/" . $product_id . ".mp4")) {
            $smarty->assign('video_file', "/video/" . $product_id . ".mp4");
        }
        //получаем подпункты меню
        $menu_item = $this::get_item_menu();
        //передаем данные в шаблон
        $smarty->assign('menu_item', $menu_item);
        $smarty->assign('page_title', 'Крыши Москвы');
        $smarty->assign('number_one', 1);
        $smarty->assign('product', $product);
        $smarty->assign('end_number', $end_number);
        //загружаем страницы
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'product');
        $this->loadTemplate->loadTemplate($smarty, 'footer');

    }
}