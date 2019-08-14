<?php
namespace models;
use database\Db;
use mf\Main_Function;
use core\Model;
/**
 * Модель забронированных товаров
 */
class Model_Reservation extends Model
{
    /**
     * Получить массив данных забронированных товаров
     *
     * @param $items id продуктов
     * @return array массив данных продукта
     */
    public function get_booking_array($items)
    {
        $items = implode($items, ', '); // преобразуем массив в строку чисел
        //получить все данные по id товара
        $sql = "SELECT * FROM image WHERE id_image in ({$items})";
        $query = Db::get_connection()->query($sql);
        return Main_Function::create_smarty_rs_array($query);
    }

    /**
     * получить данные о цене товара по id
     *
     * @param $id id товара
     * @return array|boolean массив данных, false в случае неудачи
     */
    public function get_price($id)
    {
        $sql = "SELECT price FROM image WHERE id_image=" . $id;
        $query = Db::get_connection()->query($sql);
        //определение переменной
        $rs = null;
        while($row = $query->fetch_assoc()){
            $rs = $row['price'];
        }
        return $rs;
    }
}