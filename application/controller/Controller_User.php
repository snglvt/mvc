<?php
namespace controller;
use core\Controller;
use models\Model_User;
use mf\Main_Function;
use models\Model_Orders;


/**
 * Класс пользователя
 */
class Controller_User extends Controller
{
    public function __construct()
    {
        $this->model = new Model_User();
        $this->loadTemplate = new Main_Function();
    }

    /**
     * Загрузка страницы пользователя
     *
     * @link /user/
     * @param $smarty объект шаблонизатора
     */
    public function action_index($smarty)
    {
        //если пользователь не залогинен, то редирект на главную страницу
        if (!isset($_SESSION['user'])) {
            redirect('/');
        }
        //массив забронированных продуктов пользователя
        $rs_user_orders = $this->model->get_cur_user_orders();

        //получаем подпункты меню
        $menu_item = $this::get_item_menu();
        //передаем данные в шаблон
        $smarty->assign('menu_item', $menu_item);
        $smarty->assign('page_title', 'Страница пользователя');
        $smarty->assign('rs_user_orders', $rs_user_orders);
        //загружаем страницы
        $this->loadTemplate->loadTemplate($smarty, 'header');
        $this->loadTemplate->loadTemplate($smarty, 'user');
        $this->loadTemplate->loadTemplate($smarty, 'footer');
    }

    /**
     * Ajax регистрация пользователя
     *
     * @return string json-представление данных зарегистрированного пользователя
     */
    public function action_register()
    {
        //получаем данные пользователя из глобального массива
        $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
        $email = trim($email);

        $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
        $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

        //имя и телефон будут передоваться со страницы оформления заказа
        $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
        $name = trim($name);
        $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
        $phone = trim($phone);


        $res_data = null;
        //проверяем параментры для регистрации
        $res_data = $this->model->check_register_params($email, $pwd1, $pwd2);

        //если пользователь ввел корректно все данные, но email занят
        if (!$res_data && $this->model->check_user_email($email)) {
            $res_data['success'] = false;
            $res_data['message'] = "Пользователь с таким логином ($email) уже зарегистрирован";
        }
        //в противном случае
        if (!$res_data) {
            //шифруем пароль
            $pwd_MD5 = md5($pwd1);
            //регистрируем нового пользователя
            $user_data = $this->model->register_new_user($email, $pwd_MD5, $name, $phone); //массив данных нового пользователя
            //если регистранция прошла успешно
            $res_data = [];
            if ($user_data['success']) {
                //сообщаем об успехе
                $res_data['success'] = 1;
                $res_data['message'] = 'Пользователь успешно зарегистрирован';

                $user_data = $user_data[0];

                //если в базе данных есть имя пользователя(имя задается на странице оформления бронирования),
                //то передаем имя, иначе передаем email
                $res_data['user_name'] = $user_data['name'] ? $user_data['name'] : $user_data['email'];
                //инициализируем email, телефон и имя пользователя
                $res_data['user_email'] = $email;
                $res_data['phone'] = $phone;
                $res_data['name'] = $name;

                //инициализируем в сессии данные пользователя
                $_SESSION['user']['phone'] = $phone;

                $res_data['id'] = $user_data['id'];

                $_SESSION['user'] = $res_data;
                $_SESSION['user']['display_name'] = $user_data['name'] ? $user_data['name'] : $user_data['email'];
            } else {
                //иначе сообщщаем о неудаче
                $res_data['success'] = 0;
                $res_data['message'] = 'Ошибка регистрации';
            }
        }
        echo json_encode($res_data);
    }

    /**
     * Метод разлогинивания
     */
    public function action_logout()
    {
        //если есть пользователя в сессии, то удаляем его и очищае корзину
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            unset($_SESSION['cart']);
            unset($_SESSION['product']);
        }
        //и редиректим на главную
        Main_Function::redirect('/');
    }

    /**
     * Ajax авторизация пользователя
     *
     * @return string json-представление данных зарегистрированного пользователя
     */
    public function action_login()
    {
        //получаем данные из глобального массива
        $email = isset($_REQUEST['login_email']) ? $_REQUEST['login_email'] : null;
        $email = trim($email);

        $pwd = isset($_REQUEST['login_pwd']) ? $_REQUEST['login_pwd'] : null;
        $pwd = trim($pwd);

        //авторизируем нового пользователя
        $userData = $this->model->login_user($email, $pwd); //сообщение об успеехе
        //в случае успешной авторизации
        if ($userData['success']) {

            $userData = $userData[0];
            //инициализируем в сессии нового пользователя
            $_SESSION['user'] = $userData;

            $_SESSION['user']['display_name'] = $userData['name'] ? $userData['name'] : $userData['email'];
            $_SESSION['user']['user_email'] = $email;
            //инициализируем массив данных пользователя
            $resData = $_SESSION['user'];
            $resData['success'] = true;
        } else {
            //иначе сообщаем о неудаче
            $resData['success'] = false;
            $resData['message'] = 'Неверный логин или пароль';
        }
        echo json_encode($resData);
    }

    /**
     * Ajax Изменение данных пользователя
     *
     * @return string json-представление данных зарегистрированного пользователя
     */
    public function action_update()
    {
        //если пользователь не залогинен, то редиректим на главную
        if (!isset($_SESSION['user'])) {
            Main_Function::redirect('/');
        }

        //получаем данные пользователя из глобального массива
        $name    = isset($_REQUEST['new_name'])  ? $_REQUEST['new_name']  : null;
        $phone   = isset($_REQUEST['new_phone']) ? $_REQUEST['new_phone'] : null;
        $pwd1    = isset($_REQUEST['new_pwd1'])  ? $_REQUEST['new_pwd1']  : null;
        $pwd2    = isset($_REQUEST['new_pwd2'])  ? $_REQUEST['new_pwd2']  : null;

        //текущий пароль, для проверки в базе данных
        $cur_pwd = isset($_REQUEST['cur_pwd'])   ? $_REQUEST['cur_pwd']   : null;
        $cur_pwd = trim($cur_pwd);

        //определяем массив данных пользователя
        $res_data = [];

        $cur_pwd_md5 = md5($cur_pwd); //шифруем пароль

        //если не указан текущий пароль или текущий пароль не совподает с паролем в сессии пользователя
        if (!$cur_pwd || ($_SESSION['user']['pwd'] !== $cur_pwd_md5)) {
            //сообщаем о неудаче
            $res_data['success'] = 0;
            $res_data['message'] = 'Текущий пароль не верный';
            echo json_encode($res_data);
            return false;
        }
        //если пользователь хочет изменить пароли
        //но пароли не совподают
        if(isset($pwd1) || isset($pwd2)) {
            if ($pwd1 !== $pwd2) {
                $res_data['message'] = 'Пароли не совподают';
                echo json_encode($res_data);
                return false;
            }
        }
         //обновление данных пользователя
        $res = $this->model->update_user_data($name, $phone, $pwd1, $pwd2, $cur_pwd_md5); //сообщение об успехе
        //если успешно зарегистрирован
        if ($res) {
            $res_data['success'] = 1;
            $res_data['message'] = 'Данные сохранены';
            $res_data['user_name'] = $name;

            $_SESSION['user']['name'] = $name;
            $_SESSION['user']['phone'] = $phone;
            $new_pwd = $_SESSION['user']['pwd'];
            if ($pwd1 && ($pwd1 == $pwd2)) {
                $new_pwd = md5(trim($pwd1));
            }
            $_SESSION['user']['pwd'] = $new_pwd;
            $_SESSION['user']['display_name'] = $name ? $name : $_SESSION['user']['email'];
        } else {
            //иначе сообщаем о неудаче
            $res_data['success'] = false;
            $res_data['message'] = 'Ошибка сохранения данных';
        }
        echo json_encode($res_data);
    }
}

