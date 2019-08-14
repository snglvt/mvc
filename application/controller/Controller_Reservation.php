<?php
namespace controller;
use core\Controller;
use models\Model_Reservation;
use mf\Main_Function;
use models\Model_Parchase;
use models\Model_Orders;
use PHPMailer;

require_once('phpmailer/PHPMailerAutoload.php');

/**
 * Контроллер бронирования и оформления заказа
 * @package controller
 */
class Controller_Reservation extends Controller
{
    public function __construct()
    {
        $this->model = new Model_Reservation();
        $this->loadTemplate = new Main_Function();
    }

    /**
     * Формирование страницы брони
     *
     * @link /reservation/
     * @param $smarty объект шаблонизатора
     */
    public function action_index($smarty)
    {
        //получаем подпункты меню
        $menu_item = $this::get_item_menu();

        //получаем массив идентификаторов забронированных продуктов
        $items_ids = isset($_SESSION['product']) ? $_SESSION['product'] : array();

        //массив данных забронированных продуктов
        $booking_array = $this->model->get_booking_array($items_ids);
        //передаем данные в шаблон
        $smarty->assign('menu_item', $menu_item);
        $smarty->assign('booking_array', $booking_array);
        $smarty->assign('page_title', 'Забронировать');
        //загружаем страницы
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'booking');
        $this->loadTemplate->loadTemplate($smarty, 'footer');
    }

    /**
     * Метод бронирования продукта
     *
     * @return string json- представление данных
     */
    public function action_addbooking()
    {
        //получаем id продукта из массива GET
        $item_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : null;
        //если нет продукта то редиректим на главную
        if (!$item_id) {
            Main_Function::redirect('/');
        }
        //получить цену товара по id
        $price = $this->model->get_price($item_id);

        $res_data = array();
        //если продукта нет в корзине, то добавляем его
        if (isset($_SESSION['product']) && array_search($item_id, $_SESSION['product']) === false) {
            //добавляем в корзину продуктов id нового продукта
            $_SESSION['product'][] = $item_id;
            //изменяем колличество продуктов в корзине
            $res_data['cnt_items'] = count($_SESSION['product']);
            //инициализируем цену товара
            $res_data['price'] = $price;
            //сообщаем об успехе
            $res_data['success'] = 1;
        } else {
            //иначе сообщаем о неудаче
            $res_data['success'] = 0;
        }

        echo json_encode($res_data);
    }

    /**
     * Метод удаления продукта
     *
     * @return string json- представление данных
     */
    public function action_removefromproduct()
    {
        //получаем id продукта из массива GET
        $item_id = isset($_GET['id']) ? intval($_GET['id']) : null;
        //если id продукта нет, то выходим
        if (!$item_id) {
            Main_Function::redirect('/');
        }
        //получаем цену товара по id
        $price = $this->model->get_price($item_id);

        $res_data = array();
        //проверяем наличие товара в корзине и инициализируем id(ключ) товара
        $key = array_search($item_id, $_SESSION['product']);

        //если товар в корзине есть
        if ($key !== false) {
            //удаляем его из корзины
            unset($_SESSION['product'][$key]);
            //сообщаем об успехе
            $res_data['success'] = 1;
            $res_data['price'] = $price;
            //изменяем колличество товаров в корзине
            $res_data['cnt_items'] = count($_SESSION['product']);
        } else {
            //иначе сообщаем о неудаче
            $res_data['success'] = 0;
        }
        echo json_encode($res_data);
    }

    /**
     * Формирование сраницы оформления бронирования
     *
     * @link /reservation/order/
     * @param $smarty объект шаблонизатора
     */
    public function action_order($smarty)
    {
        //получаем массив идентификаторов забронированных продуктов
        $items_ids = isset($_SESSION['product']) ? $_SESSION['product'] : array();
        //если корзина пуста, то редиректим на главную
        if (! $items_ids) {
            Main_Function::redirect('/');
            return;
        }
        //определяем массив дат, забронированных продуктов
        $items_cnt = array();
        //получим даты бронируемых товаров
        foreach ($items_ids as $item) {
            //формируем ключ для массива $_POST
            $post_var = 'date_' . $item;
            //если есть ключ даты в массиве POST, то инициализируем новый ключ в массиве дат
            $items_cnt[$item] = isset($_POST[$post_var]) ? $_POST[$post_var] : null;
        }

        //получам из массива $_POST комментарий к заказам
        $comment = isset($_POST['comment']) ? $_POST['comment'] : null;
        $_SESSION['user_comment'] = $comment;
        //получаем список забронированных товаров
        $booking_array = $this->model->get_booking_array($items_ids);

        //добавить каждому продукту поле даты бронирования
        foreach ($booking_array as &$item) {
            //если есть id продукта в массиве забранированных товаров
            if (isset($items_cnt[$item['id_image']])) {
                //добавляем новое поле
                $item['user_data'] = $items_cnt[$item['id_image']];
            }
        }
        //массив покупаемых товаров помещаем в сессионную переменную
        $_SESSION['sale_product'] = $booking_array;
        //добавляем в сессию коментарий пользователя(комментарий является общим для всех товаров)
        $_SESSION['comment'] = $comment;
        //переменная флаг, для отображения блока логина и регистрации
        if (!isset($_SESSION['user'])) {
            //если в сессии нет зарегистрированого пользователя. заводим переменную
            $smarty->assign('hide_login_box', 1);
        }

        //получаем подпункты меню
        $menu_item = $this::get_item_menu();

        $smarty->assign('menu_item', $menu_item);

        //передаем данные в шаблон
        $smarty->assign('booking_array', $booking_array);
        $smarty->assign('comment', $comment);
        $smarty->assign('page_title', 'Заказ');
        //загружаем страницы
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'order');
        $this->loadTemplate->loadTemplate($smarty, 'footer');
    }

    /**
     * Оформление заказа
     *
     * @return string json- представление данных
     */
    public function action_saveorder()
    {
        //получаем массив покупаемых товаров
        $cart = isset($_SESSION['sale_product']) ? $_SESSION['sale_product'] : null;
        //если нет товаров то редирект на главную
        if (! $cart) {
            Main_Function::redirect('/');
            return;
        }

        //инициализируем переменную имя пользователя
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        //инициализируем переменную телефон
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;

        $mail = new PHPMailer;
        $mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = '';  																							// Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = ''; // Ваш логин от почты с которой будут отправляться письма
        $mail->Password = ''; // Ваш пароль от почты с которой будут отправляться письма
        $mail->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

        $mail->setFrom(''); // от кого будет уходить письмо?
        $mail->addAddress('');     // Кому будет уходить письмо

        $mail->Subject = 'Заявка с сайта';
        $mail->Body    = $name . ' оставил заявку, его телефон: ' .$phone . ', коментарий к заказу: ' . $_SESSION['user_comment'];
        $mail->AltBody = '';
        if(!$mail->send()) {
            echo 'Ошибка оформления заказа';
        } else {
            $orders = new Model_Orders();
            //создаем новый заказ и получаем его ID
            $order_id = $orders->make_new_order($name, $phone); //id нового заказа

            //если заказ не создан, то выдаем ошибку и завершаем функцию
            if(! $order_id){
                $resData['success'] = 0;
                $resData['message'] = 'Ошибка создания заказа';
                echo json_encode($resData);
                return;
            }
            //создаем экземпляр класса для работы с таблицей продуктов
            $model_parchase = new Model_Parchase();

            //добавляем товары для созданного заказа
            $res = $model_parchase->set_purchase_for_order($order_id, $cart);
            //если товар успешно добавлен
            if($res){
                //сообщаем об успехе
                $resData['success'] = 1;
                //удаляем корзину и сообщение
                unset($_SESSION['cart']);
                unset($_SESSION['product']);
            } else {
                //иначе сообщаем о неудаче
                $resData['success'] = 0;
                $resData['message'] = 'Ошибка вненсения данных для заказа №' . $order_id;
            }
            echo json_encode($resData);
        }
    }
}







