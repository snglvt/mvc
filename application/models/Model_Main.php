<?php
namespace models;
use database\Db;
use mf\Main_Function;
use core\Model;
/**
 * Модель главной страницы
 */
class Model_Main extends Model
{
    /**
     * Получить все продукты из базы данны
     *
     * @return array|bool массив данных, false в с случае неудачи
     */
    public function get_element()
    {
        $sql = "SELECT * FROM image";
        $query = Db::get_connection()->query($sql);
        $rs = Main_Function::create_smarty_rs_array($query);
        return $rs;
    }
    /**
     * Получить подпункты меню
     *
     * @return array массив данных
     */
    public function get_item_menu()
    {
        $sql = "SELECT * FROM menu";
        $query = Db::get_connection()->query($sql);
        $rs = [];
        while ($row = $query->fetch_assoc()) {
            $rs[] = $row;
        }
        return $rs;
    }
}






































































