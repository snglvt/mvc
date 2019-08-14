<?php
namespace models;
use database\Db;
use mf\Main_Function;
use core\Model;
use models\Model_Orders;

/**
 * Класс регистрации нового пользователя
 */
class Model_User extends Model
{
    /**
     * Регистрация нового пользователя
     *
     * @param $email почта
     * @param $pwd_MD5 пароль зашифрованный в MD5
     * @param $name имя пользователя
     * @param $phone телефон
     * @return array true в случае успеха
     */
    public function register_new_user($email, $pwd_MD5, $name = '', $phone = '')
    {
        //преобразование и экранирование специальных символов
        $email = htmlspecialchars(Db::get_connection()->real_escape_string($email));
        $pwd_MD5 = htmlspecialchars(Db::get_connection()->real_escape_string($pwd_MD5));
        //формирование запроса в базе данных на добавление нового пользователя
        $sql = "INSERT INTO users (`email`, `pwd`, `name`, `phone`) VALUES ('$email', '$pwd_MD5', '$name', '$phone')";
        $rs = Db::get_connection()->query($sql);
        if ($rs) {
            //в случае успешного добаления нового пользователч, получаем данные этого пользователя
            $sql = "SELECT * FROM users WHERE (`email` = '$email' and `pwd` = '$pwd_MD5') LIMIT 1";
            $rs = Db::get_connection()->query($sql);
            $rs = Main_Function::create_smarty_rs_array($rs);
            if (isset($rs[0])) {
                //если данные получили, сообщаем об успехе
                $rs['success'] = 1;
            } else {
                //иначе сообщаем о неудаче
                $rs['success'] = 0;
            }
            //если не получилось добавить нового пользователя, сообщаем о неудачи
        } else {
            $rs['success'] = 0;
        }
        return $rs;
    }

    /**
     * Проверка параметров для регистрации пользователя
     *
     * @param $email email пользователя
     * @param $pwd1 пароль
     * @param $pwd2 повтор пароля
     * @return array|boolean false в случае корректности данных
     */
    public function check_register_params($email, $pwd1, $pwd2)
    {
        $res = false;
        if (!$email) {
            $res['success'] = false;
            $res['message'] = 'Введите логин';
        } else if (!$pwd1) {
            $res['success'] = false;
            $res['message'] = 'Введите пароль';
        } else if (!$pwd2) {
            $res['success'] = false;
            $res['message'] = 'Введите повтор пароля';
        } else if ($pwd1 != $pwd2) {
            $res['success'] = false;
            $res['message'] = 'Пароли не совпадают';
        }
        return $res;
    }

    /**
     * Проверка почты (есть ли email адрес в БД)
     *
     * @param string $email
     * @return array данные из таблицы users, либо пустой массив
     */
    public function check_user_email($email)
    {
        $email = Db::get_connection()->real_escape_string($email);
        $sql = "SELECT id FROM users WHERE email = '$email'";
        $rs = Db::get_connection()->query($sql);
        $rs = Main_Function::create_smarty_rs_array($rs);
        return $rs;
    }

    /**
     * Авторизация пользователя
     *
     * @param string $email почта(логин)
     * @param sting $pwd пароль
     * @return boolean true в случае успеха
     */
    public function login_user($email, $pwd)
    {
        $email = htmlspecialchars(Db::get_connection()->real_escape_string($email));
        $pwd = md5($pwd);

        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `pwd` = '$pwd' LIMIT 1";
        $rs = Db::get_connection()->query($sql);

        $rs = Main_Function::create_smarty_rs_array($rs);
        if (isset($rs[0])) {
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }
        return $rs;
    }

    /**
     * Обновления данных пользователя
     *
     * @param $name имя пользователя
     * @param $phone телефон пользователя
     * @param $pwd1 новы пароль
     * @param $pwd2 повтор нового пароля
     * @param $cur_pwd старый пароль
     * @return boolean true в случае успеха
     */
    public function update_user_data($name, $phone, $pwd1, $pwd2, $cur_pwd)
    {
        //преобразование и экранирование специальных символов
        $email = htmlspecialchars(Db::get_connection()->real_escape_string($_SESSION['user']['email']));
        $name = htmlspecialchars(Db::get_connection()->real_escape_string($name));
        $phone = htmlspecialchars(Db::get_connection()->real_escape_string($phone));
        //удаление пробелов
        $pwd1 = trim($pwd1);
        $pwd2 = trim($pwd2);

        //если пользователь хочет сменить пароль и введенные пароли совподают,
        //создаем новый пароль пользователя
        $new_pwd = null;
        if ($pwd1 && ($pwd1 == $pwd2)) {
            $new_pwd = md5($pwd1);
        }

        //<формирование запроса к базе данных
        $sql = "UPDATE `users` SET ";

        //если есть новый пароль
        if ($new_pwd) {
            $sql .= "`pwd` = '{$new_pwd}', ";
        }

        $sql .= "`name` = '{$name}', `phone` = '{$phone}' WHERE `email` = '{$email}' AND `pwd` = '{$cur_pwd}' LIMIT 1";
        //>

        $query = Db::get_connection()->query($sql);

        return $query;
    }

    /**
     * получить данные заказа текущего пользователя
     *
     * @return array массив заказов с привязкой к продуктам
     */
    public function get_cur_user_orders()
    {
        //получаем id пользователя из сессии
        $user_id = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : false;

        $rs = new Model_Orders();
        //получаем данные заказа
        $row = $rs->get_order_with_products_by_user($user_id);

        return $row;
    }
}