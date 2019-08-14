<?php
namespace models;
use database\Db;
use mf\Main_Function;
use models\Model_Parchase;
use core\Model;

/**
 * Модель заказов
 */
class Model_Orders
{
    /**
     * Создать новый заказ
     *
     * @param $name
     * @param $phone
     * @return string id нового заказа
     */
    public function make_new_order($name, $phone)
    {
        //преобразование и эранирование специальных символов
        $name = htmlspecialchars(Db::get_connection()->real_escape_string($name));
        $phone = htmlspecialchars(Db::get_connection()->real_escape_string($phone));
        //<инициализация переменных
        $user_id = $_SESSION['user']['id'];
        $product_comment = $_SESSION['comment'];
        $comment = "Имя: {$name} Тел: {$phone} Комментарий: {$product_comment}";

        $dataCreated = date('Y.m.d H:i:s');
        $user_ip = $_SERVER['REMOTE_ADDR'];
        //>

        //формирование запроса к базе данных
        $sql = "INSERT INTO orders(`user_id`, `date_created`, `date_payment`, `status`, `comment`, `user_ip`) VALUE ('$user_id', '$dataCreated', null, '0', '$comment', '$user_ip')";
        $rs = Db::get_connection()->query($sql);

        //получить id созданного заказа
        if ($rs) {
            $sql = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
            $rs = Db::get_connection()->query($sql);

            //преобразование результатов запроса
            $rs = Main_Function::create_smarty_rs_array($rs);

            //возвращаем id созданного запроса
            if (isset($rs[0])) {
                return $rs[0]['id'];
            }
            return false;
        }
    }

    /**
     * Получить список заказов с привязкой к продуктам для пользователя $user_id
     *
     * @param integer $user_id - id пользователя
     * @return array массив заказов пользователя с привязкой к продуктам, или пустой массив
     */
    public function get_order_with_products_by_user($user_id)
    {
        //получить целочисленное значение переменной
        $user_id = intval($user_id);
        //формирование запроса к базе данных
        $sql = "SELECT * FROM orders WHERE user_id = {$user_id} ORDER BY id DESC";

        $rs = Db::get_connection()->query($sql);

        $smarty_rs = array();
        while ($row = $rs->fetch_assoc()) {
            $parchase = new Model_Parchase();
            //получить список заказов с привязкой к продуктам
            $rs_children = $parchase->get_purchase_for_order($row['id']);
            //в случае удачи, добавляем к массиву заказов новый ключ
            if ($rs_children) {
                $row['children'] = $rs_children;
                $smarty_rs[] = $row;
            }
        }
        return $smarty_rs;
    }
}






