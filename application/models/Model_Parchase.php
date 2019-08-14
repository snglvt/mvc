<?php
namespace models;
use database\Db;
use mf\Main_Function;
use core\Model;

/**
 * Модель для таблицы продукции (purchase)
 */
class Model_Parchase
{
    /**
     * Внесение в БД продукта с привязкой к заказу
     *
     * @param $order_id id заказа
     * @param $cart массив корзины
     * @return boolean TRUE в случае успешного добавления в БД
     */
    public function set_purchase_for_order($order_id, $cart)
    {
        $sql = "INSERT INTO purchase (order_id, product_id, price) VALUE ";

        $values = array();
        //формируем массив строк для запроса для каждого товара
        foreach ($cart as $item){
            $values[] = "('{$order_id}', '{$item['id_image']}', '{$item['price']}')";
        }
        //преобразовываем массив в строку
        $sql .= implode($values, ', ');
        $rs = Db::get_connection()->query($sql);
        return $rs;
    }

    /**
     * Получить список заказов с привязкой к продуктам
     *
     * @param $order_id id заказа
     * @return array|bool массив данных, false в случае неудачи
     */
    function get_purchase_for_order($order_id)
    {
        $sql = "SELECT `pe`.*, `im`.`image_name` FROM purchase as `pe` JOIN image as `im` ON `pe`.`product_id` = `im`.`id_image` WHERE `pe`.`order_id` = '$order_id'";
        $rs = Db::get_connection()->query($sql);
        return Main_Function::create_smarty_rs_array($rs);
    }
}

